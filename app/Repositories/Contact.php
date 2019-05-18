<?php
namespace App\Repositories;


class Contact implements ContactInterface
{
    protected $model;

    public function __construct(\App\Contact $model)
    {
        $this->model = $model;
    }

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