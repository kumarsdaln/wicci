<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ResourceItem;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class ResourceItemController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->string('q')->toString();

        $resourceItems = ResourceItem::query()
            ->when($q, function ($query, $q) {
                $query->where(function ($sub) use ($q) {
                    $sub->where('title', 'like', "%{$q}%")
                        ->orWhere('author_name', 'like', "%{$q}%")
                        ->orWhere('type', 'like', "%{$q}%");
                });
            })
            ->latest()
            ->paginate(15)
            ->withQueryString();

        return view('admin.resources.index', compact('resourceItems', 'q'));
    }

    public function create()
    {
        return view('admin.resources.create');
    }

    public function store(Request $request)
    {
        $validated = $this->validatePayload($request);
        $validated['slug'] = $this->generateUniqueSlug($validated['title'], null, $request->input('slug'));

        if (($validated['status'] ?? 'draft') !== 'published') {
            $validated['published_at'] = null;
        }

        ResourceItem::create($validated);

        return redirect()->route('admin.resources.index')->with('success', 'Resource item created.');
    }

    public function edit(ResourceItem $resource)
    {
        return view('admin.resources.edit', compact('resource'));
    }

    public function update(Request $request, ResourceItem $resource)
    {
        $validated = $this->validatePayload($request);
        $validated['slug'] = $this->generateUniqueSlug($validated['title'], $resource->id, $request->input('slug'));

        if (($validated['status'] ?? 'draft') !== 'published') {
            $validated['published_at'] = null;
        }

        $resource->update($validated);

        return redirect()->route('admin.resources.index')->with('success', 'Resource item updated.');
    }

    public function destroy(ResourceItem $resource)
    {
        $resource->delete();

        return redirect()->route('admin.resources.index')->with('success', 'Resource item deleted.');
    }

    private function validatePayload(Request $request): array
    {
        return $request->validate([
            'type' => ['required', Rule::in(['blog', 'article', 'research', 'guide'])],
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255'],
            'excerpt' => ['required', 'string', 'max:1000'],
            'content' => ['nullable', 'string'],
            'author_name' => ['nullable', 'string', 'max:150'],
            'status' => ['required', Rule::in(['draft', 'published'])],
            'published_at' => ['nullable', 'date'],
            'sort_order' => ['nullable', 'integer', 'min:0'],
        ]);
    }

    private function generateUniqueSlug(string $title, ?int $resourceId = null, ?string $customSlug = null): string
    {
        $base = Str::slug($customSlug ?: $title);
        $slug = $base ?: 'resource-item';
        $counter = 1;

        while (
            ResourceItem::where('slug', $slug)
                ->when($resourceId, fn ($q) => $q->where('id', '!=', $resourceId))
                ->exists()
        ) {
            $slug = $base.'-'.$counter;
            $counter++;
        }

        return $slug;
    }
}
