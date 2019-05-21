<?php

namespace App\Http\Controllers;

use App\Events\ContactCreated;
use App\Repositories\ContactInterface;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\ContactMessagePost;
use App\Http\Requests\ContactForm;

/**
 * Class ContactController
 * @package App\Http\Controllers
 */
class ContactController extends Controller
{

    protected $contact;

    public function __construct(ContactInterface $contact)
    {
        $this->contact = $contact;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('contact.form');
    }

    public function save(ContactForm $request)
    {
        $data = $request->all([
            'firstName',
            'surname',
            'email',
            'phoneNo',
            'message'
        ]);

        $id = call_user_func_array(array(
            $this->contact,
            'save'
        ), $data);


        return redirect()->route('contact.thankyou');
    }

    public function thankyou()
    {
        return view('contact.thankyou');
    }
}
