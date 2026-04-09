<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use App\Models\EventRegistration;
use App\Models\MembershipApplication;
use App\Models\NewsletterSubscription;
use App\Models\VolunteerApplication;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function index(Request $request)
    {
        $tab = $request->string('tab')->toString() ?: 'contact';

        $allowedTabs = ['contact', 'membership', 'volunteer', 'event', 'newsletter'];
        if (! in_array($tab, $allowedTabs, true)) {
            $tab = 'contact';
        }

        $rows = match ($tab) {
            'membership' => MembershipApplication::latest()->paginate(20)->withQueryString(),
            'volunteer' => VolunteerApplication::latest()->paginate(20)->withQueryString(),
            'event' => EventRegistration::latest()->paginate(20)->withQueryString(),
            'newsletter' => NewsletterSubscription::latest()->paginate(20)->withQueryString(),
            default => ContactMessage::latest()->paginate(20)->withQueryString(),
        };

        return view('admin.submissions.index', compact('tab', 'rows'));
    }
}
