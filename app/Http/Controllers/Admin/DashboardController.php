<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use App\Models\EventItem;
use App\Models\EventRegistration;
use App\Models\InitiativeItem;
use App\Models\MediaItem;
use App\Models\MembershipApplication;
use App\Models\NewsletterSubscription;
use App\Models\ResourceItem;
use App\Models\VolunteerApplication;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'resources_total' => ResourceItem::count(),
            'resources_published' => ResourceItem::where('status', 'published')->count(),
            'cms_events_total' => EventItem::count(),
            'cms_initiatives_total' => InitiativeItem::count(),
            'cms_media_total' => MediaItem::count(),
            'contact_messages' => ContactMessage::count(),
            'memberships' => MembershipApplication::count(),
            'volunteers' => VolunteerApplication::count(),
            'events' => EventRegistration::count(),
            'newsletter' => NewsletterSubscription::count(),
        ];

        $recentResources = ResourceItem::latest()->limit(5)->get();

        return view('admin.dashboard', compact('stats', 'recentResources'));
    }
}
