<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Routing\Controller;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function create()
    {
        request()->validate([
            'name'      => ['required', 'max:255'],
            'email'     => ['required', 'email'],
            'message'   => ['required']
        ]);

        ContactMessage::create(
            [
                'name' => request('name'),
                'email' => request('email'),
                'message' => request('message')
            ]
        );

        return redirect()->back()->with('success', 'Message received, we will get back to you as soon as possible.');
    }
}
