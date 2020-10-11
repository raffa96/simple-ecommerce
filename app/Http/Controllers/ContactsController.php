<?php

namespace App\Http\Controllers;

use App\Mail\ContactsMail;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    public function create()
    {
        return view('contacts.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required | min: 3',
            'surname' => 'required | min: 3',
            'email' => 'required | email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Mail::to('raffaguetta@gmail.com')->send(new ContactsMail($data));

        session()->flash('success', 'Il tuo messaggio è stato inviato con successo. Grazie per averci contattato!');

        return redirect('contacts');
    }
}
