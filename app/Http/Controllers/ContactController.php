<?php

namespace App\Http\Controllers;

use App\Repositories\ContactInterface;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\ContactMessagePost;

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
        return view('contact');
    }

    public function save(Request $request)
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

        if ($id) {
            Mail::send(new ContactMessagePost($this->contact->get($id)));
        }

        return $id ? ['message' => 'success']: ['message' => 'error'];
    }
}
