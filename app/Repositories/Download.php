<?php
namespace App\Repositories;

use \App\Downloads as Model;

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
        $download->save();
        return $download->id;
    }

    /**
     *
     */
    public function increase()
    {
        $downloads = \Option::get('total.downloads') || 0;
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