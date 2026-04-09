<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MediaItem;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class MediaItemController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->string('q')->toString();

        $mediaItems = MediaItem::query()
            ->when($q, fn ($query) => $query->where('title', 'like', "%{$q}%"))
            ->orderByDesc('published_at')
            ->latest()
            ->paginate(15)
            ->withQueryString();

        return view('admin.media.index', compact('mediaItems', 'q'));
    }

    public function create()
    {
        return view('admin.media.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255'],
            'media_type' => ['required', Rule::in(['photo', 'video', 'press'])],
            'summary' => ['required', 'string', 'max:1000'],
            'content' => ['nullable', 'string'],
            'external_url' => ['nullable', 'url', 'max:255'],
            'status' => ['required', Rule::in(['draft', 'published'])],
            'published_at' => ['nullable', 'date'],
        ]);

        if (($validated['status'] ?? 'draft') !== 'published') {
            $validated['published_at'] = null;
        }

        $validated['slug'] = $this->uniqueSlug($validated['title'], null, $request->input('slug'));

        MediaItem::create($validated);

        return redirect()->route('admin.media.index')->with('success', 'Media item saved.');
    }

    public function edit(MediaItem $medium)
    {
        return view('admin.media.edit', ['media' => $medium]);
    }

    public function update(Request $request, MediaItem $medium)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255'],
            'media_type' => ['required', Rule::in(['photo', 'video', 'press'])],
            'summary' => ['required', 'string', 'max:1000'],
            'content' => ['nullable', 'string'],
            'external_url' => ['nullable', 'url', 'max:255'],
            'status' => ['required', Rule::in(['draft', 'published'])],
            'published_at' => ['nullable', 'date'],
        ]);

        if (($validated['status'] ?? 'draft') !== 'published') {
            $validated['published_at'] = null;
        }

        $validated['slug'] = $this->uniqueSlug($validated['title'], $medium->id, $request->input('slug'));

        $medium->update($validated);

        return redirect()->route('admin.media.index')->with('success', 'Media item updated.');
    }

    public function destroy(MediaItem $medium)
    {
        $medium->delete();

        return redirect()->route('admin.media.index')->with('success', 'Media item deleted.');
    }

    private function uniqueSlug(string $title, ?int $id = null, ?string $custom = null): string
    {
        $base = Str::slug($custom ?: $title) ?: 'media-item';
        $slug = $base;
        $counter = 1;

        while (MediaItem::where('slug', $slug)->when($id, fn ($q) => $q->where('id', '!=', $id))->exists()) {
            $slug = $base.'-'.$counter;
            $counter++;
        }

        return $slug;
    }
}
