<?php

namespace App\Http\Controllers;

use App\Models\MediaItem;
use Illuminate\Http\Request;

class PublicMediaController extends Controller
{
    public function index()
    {
        $mediaItems = MediaItem::published()
            ->orderByDesc('published_at')
            ->orderByDesc('created_at')
            ->paginate(12);

        return view('pages.media', compact('mediaItems'));
    }

    public function show(MediaItem $media)
    {
        abort_unless($media->status === 'published', 404);

        $related = MediaItem::published()
            ->where('id', '!=', $media->id)
            ->where('media_type', $media->media_type)
            ->orderByDesc('published_at')
            ->limit(3)
            ->get();

        return view('pages.media-show', compact('media', 'related'));
    }
}
