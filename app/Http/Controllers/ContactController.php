<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContactNotification;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function adminIndex()
    {
        $contacts = Contact::latest()->paginate(10);
        return view('admin.kontak.index', compact('contacts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $contact = Contact::create([
            'nama' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'pesan' => $request->message,
        ]);

        Mail::to('raflyjuliano62@gmail.com')->send(new ContactNotification($contact));

        return redirect()->route('contact')->with('success', 'Message sent successfully! Thank you for reaching out. I\'ll get back to you within 24 hours.');
    }

    public function destroy($id)
    {
        Contact::findOrFail($id)->delete();
        return redirect()->route('kontak.index')->with('success', 'Pesan berhasil dihapus.');
    }
}
