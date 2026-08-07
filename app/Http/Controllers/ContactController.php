<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:255'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        try {
            Mail::raw(
                "Name: {$data['name']}\nEmail: {$data['email']}\n\n{$data['message']}",
                fn ($message) => $message->to(config('mail.portfolio_recipient'))
                    ->replyTo($data['email'])
                    ->subject("Portfolio inquiry from {$data['name']}")
            );
        } catch (\Throwable) {
            return back()->withErrors(['send' => 'Could not send your message right now. Please try again.']);
        }

        return back()->with('status', 'Thanks — your message has been sent. I will get back to you soon.');
    }
}
