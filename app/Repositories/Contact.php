<?php
namespace App\Repositories;

use \App\Contact as Model;

/**
 * Class Contact
 * @package App\Repositories
 */
class Contact implements ContactInterface
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * Option constructor.
     * @param Model $mode
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @param string $firstName
     * @param string $surname
     * @param string $email
     * @param string|null $phoneNo
     * @param string $message
     * @return int
     */
    public function save(
        string $firstName,
        string $surname,
        string $email,
        ?string $phoneNo,
        string $message
    ): int {

        $contact = new $this->model;
        $contact->firstName = $firstName;
        $contact->surname = $surname;
        $contact->email = $email;
        $contact->phoneNo = $phoneNo;
        $contact->surname = $message;
        $contact->save();
        return $contact->id;
    }


}