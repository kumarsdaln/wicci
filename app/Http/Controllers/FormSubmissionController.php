<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\EventRegistration;
use App\Models\MembershipApplication;
use App\Models\NewsletterSubscription;
use App\Models\VolunteerApplication;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class FormSubmissionController extends Controller
{
    public function submitContact(Request $request)
    {
        $validated = $request->validateWithBag('contact', [
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:190'],
            'phone' => ['nullable', 'string', 'max:30'],
            'subject' => ['required', 'string', 'max:150'],
            'organization' => ['nullable', 'string', 'max:150'],
            'message' => ['required', 'string', 'max:2000'],
        ]);

        ContactMessage::create($validated);

        return back()->with('form_success', 'contact');
    }

    public function submitMembership(Request $request)
    {
        $validated = $request->validateWithBag('membership', [
            'full_name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:190'],
            'phone' => ['required', 'string', 'max:30'],
            'city' => ['required', 'string', 'max:120'],
            'profession' => ['required', 'string', 'max:150'],
            'experience' => ['required', 'string', 'max:80'],
            'organization' => ['nullable', 'string', 'max:150'],
            'motivation' => ['required', 'string', 'max:2000'],
        ]);

        MembershipApplication::create($validated);

        return back()->with('form_success', 'membership');
    }

    public function submitVolunteer(Request $request)
    {
        $validated = $request->validateWithBag('volunteer', [
            'full_name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:190'],
            'phone' => ['required', 'string', 'max:30'],
            'city' => ['required', 'string', 'max:120'],
            'area_of_interest' => ['required', 'string', 'max:120'],
            'availability' => ['required', 'string', 'max:120'],
            'message' => ['nullable', 'string', 'max:2000'],
        ]);

        VolunteerApplication::create($validated);

        return back()->with('form_success', 'volunteer');
    }

    public function submitEventRegistration(Request $request)
    {
        $validated = $request->validateWithBag('event', [
            'event_key' => ['nullable', 'string', 'max:50'],
            'event_title' => ['required', 'string', 'max:190'],
            'full_name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:190'],
            'phone' => ['required', 'string', 'max:30'],
            'profession' => ['required', 'string', 'max:150'],
            'organization' => ['nullable', 'string', 'max:150'],
            'participation_mode' => ['required', Rule::in(['Online', 'In-Person'])],
        ]);

        EventRegistration::create($validated);

        return back()->with('form_success', 'event');
    }

    public function submitNewsletter(Request $request)
    {
        $validated = $request->validateWithBag('newsletter', [
            'email' => ['required', 'email', 'max:190'],
            'source' => ['nullable', 'string', 'max:40'],
        ]);

        NewsletterSubscription::firstOrCreate(
            ['email' => $validated['email']],
            ['source' => $validated['source'] ?? 'website']
        );

        return back()->with('form_success', 'newsletter');
    }
}
