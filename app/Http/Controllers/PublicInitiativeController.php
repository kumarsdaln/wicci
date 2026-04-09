<?php

namespace App\Http\Controllers;

use App\Models\InitiativeItem;
use Illuminate\Http\Request;

class PublicInitiativeController extends Controller
{
    public function index()
    {
        $initiatives = InitiativeItem::published()
            ->orderBy('sort_order')
            ->orderByDesc('created_at')
            ->paginate(12);

        return view('pages.initiatives', compact('initiatives'));
    }

    public function show(InitiativeItem $initiative)
    {
        abort_unless($initiative->status === 'published', 404);

        $related = InitiativeItem::published()
            ->where('id', '!=', $initiative->id)
            ->orderBy('sort_order')
            ->orderByDesc('created_at')
            ->limit(3)
            ->get();

        return view('pages.initiative-show', compact('initiative', 'related'));
    }
}
