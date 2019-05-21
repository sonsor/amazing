<?php
namespace App\Repositories;

use \App\Downloads as Model;
use App\Events\DownloadFormSubmitted;

/**
 * Class Download
 * @package App\Repositories
 */
class Download implements DownloadInterface
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * Download constructor.
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @param string $name
     * @param string $email
     * @return int
     */
    public function save(string $name, string $email): int
    {
        $download = new $this->model;
        $download->name = $name;
        $download->email = $email;
        $download->token = bcrypt($name . $email);
        $download->expire = (new \DateTime('tomorrow'));
        $download->save();

        event(new DownloadFormSubmitted($download));

        return $download->id;
    }

    /**
     * this function is use to increase count of downloads
     */
    public function increase(): void
    {
        $downloads = \Option::get('total.downloads');
        $downloads = empty($downloads) ? 0: $downloads;
        \Option::set('total.downloads', ++$downloads);
    }

    /**
     * @param int $id
     * @return Model
     */
    public function get(int $id): Model
    {
        return $this->model->find($id)->first();
    }
}