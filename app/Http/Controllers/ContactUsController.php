<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use App\Http\Requests\StoreContactUsRequest;
use App\Http\Requests\UpdateContactUsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewContactMessage;
use App\Mail\ContactFormSubmitted;
use App\Models\User;


class ContactUsController extends Controller
{
    public function showForm() {}

    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:10',
            'subject' => 'required|string|max:255',
            'message' => 'required|string'
        ]);

        $contact = ContactUs::create($validated);

        Mail::to('albaikcenter2023@gmail.com')->send(new ContactFormSubmitted($contact));





        if (request()->segment(1) === 'ar') {
            return redirect()->to(url()->previous() . '#section_6')->with('success', "شكراً لرسالتك! سنعود إليك قريباً.");
        } else {
            return redirect()->to(url()->previous() . '#section_6')->with('success', "Thank you for your message! We will get back to you soon.");
        }
    }


    public function show(ContactUs $contact)
    {
        // Mark notifications as read when viewing
        auth()->user()->unreadNotifications()
            ->where('data->contact_id', $contact->id)
            ->update(['read_at' => now()]);

        return view('contact.show', compact('contact'));
    }
}
