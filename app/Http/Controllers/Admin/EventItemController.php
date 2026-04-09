<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EventItem;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class EventItemController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->string('q')->toString();

        $eventItems = EventItem::query()
            ->when($q, fn ($query) => $query->where('title', 'like', "%{$q}%"))
            ->orderByDesc('event_date')
            ->latest()
            ->paginate(15)
            ->withQueryString();

        return view('admin.events.index', compact('eventItems', 'q'));
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255'],
            'summary' => ['required', 'string', 'max:1000'],
            'details' => ['nullable', 'string'],
            'event_date' => ['nullable', 'date'],
            'location' => ['nullable', 'string', 'max:150'],
            'mode' => ['required', Rule::in(['online', 'in-person', 'hybrid'])],
            'status' => ['required', Rule::in(['draft', 'published'])],
            'is_featured' => ['nullable', 'boolean'],
        ]);

        $validated['is_featured'] = (bool) ($validated['is_featured'] ?? false);
        $validated['slug'] = $this->uniqueSlug($validated['title'], null, $request->input('slug'));

        EventItem::create($validated);

        return redirect()->route('admin.events.index')->with('success', 'Event saved.');
    }

    public function edit(EventItem $event)
    {
        return view('admin.events.edit', compact('event'));
    }

    public function update(Request $request, EventItem $event)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255'],
            'summary' => ['required', 'string', 'max:1000'],
            'details' => ['nullable', 'string'],
            'event_date' => ['nullable', 'date'],
            'location' => ['nullable', 'string', 'max:150'],
            'mode' => ['required', Rule::in(['online', 'in-person', 'hybrid'])],
            'status' => ['required', Rule::in(['draft', 'published'])],
            'is_featured' => ['nullable', 'boolean'],
        ]);

        $validated['is_featured'] = (bool) ($validated['is_featured'] ?? false);
        $validated['slug'] = $this->uniqueSlug($validated['title'], $event->id, $request->input('slug'));

        $event->update($validated);

        return redirect()->route('admin.events.index')->with('success', 'Event updated.');
    }

    public function destroy(EventItem $event)
    {
        $event->delete();

        return redirect()->route('admin.events.index')->with('success', 'Event deleted.');
    }

    private function uniqueSlug(string $title, ?int $id = null, ?string $custom = null): string
    {
        $base = Str::slug($custom ?: $title) ?: 'event-item';
        $slug = $base;
        $counter = 1;

        while (EventItem::where('slug', $slug)->when($id, fn ($q) => $q->where('id', '!=', $id))->exists()) {
            $slug = $base.'-'.$counter;
            $counter++;
        }

        return $slug;
    }
}
