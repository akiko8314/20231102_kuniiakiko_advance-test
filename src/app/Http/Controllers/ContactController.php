<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Redis;

class ContactController extends Controller
{
    public function index(){
        $contact = Contact::all();
        return view('index', ['contacts' => $contact]);
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['family-name', 'first-name', 'gender', 'email', 'post', 'address', 'type', 'content']);
        return view('confirm', compact('contact'));
    }

    public function store (ContactRequest $request)
    {
        $contact = $request->only(['family-name', 'first-name', 'gender', 'email', 'post', 'address', 'type', 'content']);
        Contact::create($contact);
        return view('thanks');
    }

}

