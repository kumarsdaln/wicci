<?php

namespace App\Http\Controllers;

use App\Models\EventItem;
use Illuminate\Http\Request;

class PublicEventController extends Controller
{
    public function index()
    {
        $upcomingEvents = EventItem::published()
            ->where(function ($q) {
                $q->whereNull('event_date')->orWhere('event_date', '>=', now());
            })
            ->orderBy('event_date')
            ->paginate(9, ['*'], 'upcoming_page');

        $pastEvents = EventItem::published()
            ->whereNotNull('event_date')
            ->where('event_date', '<', now())
            ->orderByDesc('event_date')
            ->limit(12)
            ->get();

        return view('pages.events', compact('upcomingEvents', 'pastEvents'));
    }

    public function show(EventItem $event)
    {
        abort_unless($event->status === 'published', 404);

        $related = EventItem::published()
            ->where('id', '!=', $event->id)
            ->orderByDesc('event_date')
            ->limit(3)
            ->get();

        return view('pages.event-show', compact('event', 'related'));
    }
}
