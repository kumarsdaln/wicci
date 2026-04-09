<?php

namespace App\Http\Controllers;

use App\Models\ResourceItem;
use Illuminate\Http\Request;

class PublicResourceController extends Controller
{
    public function index()
    {
        $resourceItems = ResourceItem::published()
            ->orderByDesc('published_at')
            ->orderBy('sort_order')
            ->paginate(9)
            ->withQueryString();

        return view('pages.resources', compact('resourceItems'));
    }

    public function show(ResourceItem $resource)
    {
        abort_unless($resource->status === 'published', 404);

        $related = ResourceItem::published()
            ->where('id', '!=', $resource->id)
            ->where('type', $resource->type)
            ->orderByDesc('published_at')
            ->limit(3)
            ->get();

        return view('pages.resource-show', [
            'resource' => $resource,
            'related' => $related,
        ]);
    }
}
