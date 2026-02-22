<?php

namespace App\Http\Controllers;

use App\Models\ContactSubmission;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactSubmissionController extends Controller
{
    public function submission (Request $request): RedirectResponse
    {
        if ($request->rtficoa === '1dvuwoen3') {
            Log::info('ip: ' . $request->ip());
            $submission = new ContactSubmission;
            $submission->name = $request->name;
            $submission->email = $request->email;
            $submission->subject = $request->subject;
            $submission->message = $request->message;
            $submission->save();
        }
        return redirect('/submission-received');
    }
}
