<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InitiativeItem;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class InitiativeItemController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->string('q')->toString();

        $initiativeItems = InitiativeItem::query()
            ->when($q, fn ($query) => $query->where('title', 'like', "%{$q}%"))
            ->orderBy('sort_order')
            ->latest()
            ->paginate(15)
            ->withQueryString();

        return view('admin.initiatives.index', compact('initiativeItems', 'q'));
    }

    public function create()
    {
        return view('admin.initiatives.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255'],
            'category' => ['nullable', 'string', 'max:80'],
            'summary' => ['required', 'string', 'max:1000'],
            'details' => ['nullable', 'string'],
            'status' => ['required', Rule::in(['draft', 'published'])],
            'sort_order' => ['nullable', 'integer', 'min:0'],
        ]);

        $validated['slug'] = $this->uniqueSlug($validated['title'], null, $request->input('slug'));

        InitiativeItem::create($validated);

        return redirect()->route('admin.initiatives.index')->with('success', 'Initiative saved.');
    }

    public function edit(InitiativeItem $initiative)
    {
        return view('admin.initiatives.edit', compact('initiative'));
    }

    public function update(Request $request, InitiativeItem $initiative)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255'],
            'category' => ['nullable', 'string', 'max:80'],
            'summary' => ['required', 'string', 'max:1000'],
            'details' => ['nullable', 'string'],
            'status' => ['required', Rule::in(['draft', 'published'])],
            'sort_order' => ['nullable', 'integer', 'min:0'],
        ]);

        $validated['slug'] = $this->uniqueSlug($validated['title'], $initiative->id, $request->input('slug'));

        $initiative->update($validated);

        return redirect()->route('admin.initiatives.index')->with('success', 'Initiative updated.');
    }

    public function destroy(InitiativeItem $initiative)
    {
        $initiative->delete();

        return redirect()->route('admin.initiatives.index')->with('success', 'Initiative deleted.');
    }

    private function uniqueSlug(string $title, ?int $id = null, ?string $custom = null): string
    {
        $base = Str::slug($custom ?: $title) ?: 'initiative-item';
        $slug = $base;
        $counter = 1;

        while (InitiativeItem::where('slug', $slug)->when($id, fn ($q) => $q->where('id', '!=', $id))->exists()) {
            $slug = $base.'-'.$counter;
            $counter++;
        }

        return $slug;
    }
}
