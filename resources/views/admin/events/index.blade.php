@extends('admin.layouts.app')
@section('title', 'Events CMS')
@section('page_title', 'Events CMS')
@section('content')
<div class="bg-white rounded-lg shadow-sm border p-4 mb-4">
  <form method="GET" class="flex gap-3">
    <input type="text" name="q" value="{{ $q }}" placeholder="Search events" class="flex-1 border rounded px-3 py-2">
    <button class="px-4 py-2 bg-slate-900 text-white rounded">Search</button>
    <a href="{{ route('admin.events.create') }}" class="px-4 py-2 bg-emerald-600 text-white rounded">Add New</a>
  </form>
</div>
<div class="bg-white rounded-lg shadow-sm border overflow-hidden">
  <table class="min-w-full text-sm">
    <thead class="bg-slate-50"><tr><th class="p-3 text-left">Title</th><th class="p-3 text-left">Date</th><th class="p-3 text-left">Mode</th><th class="p-3 text-left">Status</th><th class="p-3 text-left">Actions</th></tr></thead>
    <tbody class="divide-y">
      @forelse($eventItems as $item)
        <tr>
          <td class="p-3"><p class="font-medium">{{ $item->title }}</p><p class="text-xs text-slate-500">{{ $item->location ?: 'Online' }}</p></td>
          <td class="p-3">{{ optional($item->event_date)->format('d M Y H:i') ?: 'TBA' }}</td>
          <td class="p-3">{{ ucfirst($item->mode) }}</td>
          <td class="p-3">{{ ucfirst($item->status) }}</td>
          <td class="p-3"><div class="flex gap-2">@if($item->status === 'published')<a href="{{ route('events.show', $item->slug) }}" class="px-2 py-1 bg-slate-200 rounded">View</a>@endif<a href="{{ route('admin.events.edit', $item) }}" class="px-2 py-1 bg-blue-100 text-blue-700 rounded">Edit</a><form method="POST" action="{{ route('admin.events.destroy', $item) }}" onsubmit="return confirm('Delete this event?')">@csrf @method('DELETE')<button class="px-2 py-1 bg-rose-100 text-rose-700 rounded">Delete</button></form></div></td>
        </tr>
      @empty
        <tr><td colspan="5" class="p-4 text-slate-500">No events found.</td></tr>
      @endforelse
    </tbody>
  </table>
</div>
<div class="mt-4">{{ $eventItems->links() }}</div>
@endsection
