@extends('admin.layouts.app')

@section('title', 'Manage Resources')
@section('page_title', 'Resources CMS')

@section('content')
<div class="bg-white rounded-lg shadow-sm border p-4 mb-4">
  <form method="GET" class="flex gap-3">
    <input type="text" name="q" value="{{ $q }}" placeholder="Search by title, type, author" class="flex-1 border rounded px-3 py-2">
    <button class="px-4 py-2 bg-slate-900 text-white rounded">Search</button>
    <a href="{{ route('admin.resources.create') }}" class="px-4 py-2 bg-emerald-600 text-white rounded">Add New</a>
  </form>
</div>

<div class="bg-white rounded-lg shadow-sm border overflow-hidden">
  <table class="min-w-full text-sm">
    <thead class="bg-slate-50">
      <tr>
        <th class="text-left p-3">Title</th>
        <th class="text-left p-3">Type</th>
        <th class="text-left p-3">Status</th>
        <th class="text-left p-3">Published</th>
        <th class="text-left p-3">Actions</th>
      </tr>
    </thead>
    <tbody class="divide-y">
      @forelse($resourceItems as $item)
        <tr>
          <td class="p-3">
            <p class="font-medium">{{ $item->title }}</p>
            <p class="text-xs text-slate-500">{{ $item->author_name ?: 'Unknown author' }}</p>
          </td>
          <td class="p-3">{{ ucfirst($item->type) }}</td>
          <td class="p-3">{{ ucfirst($item->status) }}</td>
          <td class="p-3">{{ optional($item->published_at)->format('d M Y H:i') ?: 'Not published' }}</td>
          <td class="p-3">
            <div class="flex gap-2">
              @if($item->status === 'published')
                <a href="{{ route('resources.show', $item->slug) }}" class="px-2 py-1 bg-slate-200 rounded">View</a>
              @else
                <span class="px-2 py-1 bg-slate-100 text-slate-400 rounded">Draft</span>
              @endif
              <a href="{{ route('admin.resources.edit', $item) }}" class="px-2 py-1 bg-blue-100 text-blue-700 rounded">Edit</a>
              <form method="POST" action="{{ route('admin.resources.destroy', $item) }}" onsubmit="return confirm('Delete this item?')">
                @csrf
                @method('DELETE')
                <button class="px-2 py-1 bg-rose-100 text-rose-700 rounded">Delete</button>
              </form>
            </div>
          </td>
        </tr>
      @empty
        <tr><td colspan="5" class="p-4 text-slate-500">No resources found.</td></tr>
      @endforelse
    </tbody>
  </table>
</div>

<div class="mt-4">{{ $resourceItems->links() }}</div>
@endsection
