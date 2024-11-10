<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;


class ContactController extends Controller
{
    public function index(){
        return view ('index');
    }

    public function confirm(ContactRequest $request){
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tell', 'address', 'building', 'content_type', 'content']);


        return view('confirm', compact('contact'));

    }

    public function store(ContactRequest $request){
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tell', 'address', 'building', 'content_type', 'content']);

            Contact::create($request->all());
            return redirect()->route('contact.thankyou');

    }

    public function thanks()
    {
        return view('thanks');
    }


    public function admin()
    {
        return view('admin');
    }
}