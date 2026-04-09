@extends('admin.layouts.app')

@section('title', 'Admin Dashboard')
@section('page_title', 'Dashboard')

@section('content')
<div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
  <div class="bg-white rounded-lg p-4 shadow-sm border"><p class="text-xs text-slate-500">Total Resources</p><p class="text-2xl font-semibold">{{ $stats['resources_total'] }}</p></div>
  <div class="bg-white rounded-lg p-4 shadow-sm border"><p class="text-xs text-slate-500">Published Resources</p><p class="text-2xl font-semibold">{{ $stats['resources_published'] }}</p></div>
  <div class="bg-white rounded-lg p-4 shadow-sm border"><p class="text-xs text-slate-500">CMS Events</p><p class="text-2xl font-semibold">{{ $stats['cms_events_total'] }}</p></div>
  <div class="bg-white rounded-lg p-4 shadow-sm border"><p class="text-xs text-slate-500">CMS Initiatives</p><p class="text-2xl font-semibold">{{ $stats['cms_initiatives_total'] }}</p></div>
</div>

<div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
  <div class="bg-white rounded-lg p-4 shadow-sm border"><p class="text-xs text-slate-500">CMS Media</p><p class="text-2xl font-semibold">{{ $stats['cms_media_total'] }}</p></div>
  <div class="bg-white rounded-lg p-4 shadow-sm border"><p class="text-xs text-slate-500">Contact Messages</p><p class="text-2xl font-semibold">{{ $stats['contact_messages'] }}</p></div>
  <div class="bg-white rounded-lg p-4 shadow-sm border"><p class="text-xs text-slate-500">Newsletter Subs</p><p class="text-2xl font-semibold">{{ $stats['newsletter'] }}</p></div>
  <div class="bg-white rounded-lg p-4 shadow-sm border"><p class="text-xs text-slate-500">Total Form Entries</p><p class="text-2xl font-semibold">{{ $stats['contact_messages'] + $stats['memberships'] + $stats['volunteers'] + $stats['events'] + $stats['newsletter'] }}</p></div>
</div>

<div class="grid sm:grid-cols-3 gap-4 mb-6">
  <div class="bg-white rounded-lg p-4 shadow-sm border"><p class="text-xs text-slate-500">Membership Applications</p><p class="text-2xl font-semibold">{{ $stats['memberships'] }}</p></div>
  <div class="bg-white rounded-lg p-4 shadow-sm border"><p class="text-xs text-slate-500">Volunteer Applications</p><p class="text-2xl font-semibold">{{ $stats['volunteers'] }}</p></div>
  <div class="bg-white rounded-lg p-4 shadow-sm border"><p class="text-xs text-slate-500">Event Registrations</p><p class="text-2xl font-semibold">{{ $stats['events'] }}</p></div>
</div>

<div class="bg-white rounded-lg shadow-sm border">
  <div class="p-4 border-b flex items-center justify-between">
    <h2 class="font-semibold">Recent Resources</h2>
    <a href="{{ route('admin.resources.create') }}" class="text-sm px-3 py-1 bg-slate-900 text-white rounded">Add New</a>
  </div>
  <div class="divide-y">
    @forelse($recentResources as $item)
      <div class="p-4 flex items-center justify-between">
        <div>
          <p class="font-medium">{{ $item->title }}</p>
          <p class="text-xs text-slate-500">{{ ucfirst($item->type) }} • {{ ucfirst($item->status) }} • {{ optional($item->published_at)->format('d M Y') ?? 'Not published' }}</p>
        </div>
        <a href="{{ route('admin.resources.edit', $item) }}" class="text-sm text-slate-700 hover:underline">Edit</a>
      </div>
    @empty
      <div class="p-4 text-sm text-slate-500">No resources yet.</div>
    @endforelse
  </div>
</div>
@endsection
