@extends('admin.layouts.app')

@section('title', 'Form Submissions')
@section('page_title', 'Form Submissions')

@section('content')
<div class="bg-white rounded-lg shadow-sm border p-4 mb-4">
  <div class="flex flex-wrap gap-2 text-sm">
    @foreach(['contact' => 'Contact', 'membership' => 'Membership', 'volunteer' => 'Volunteer', 'event' => 'Event', 'newsletter' => 'Newsletter'] as $key => $label)
      <a href="{{ route('admin.submissions.index', ['tab' => $key]) }}" class="px-3 py-2 rounded {{ $tab === $key ? 'bg-slate-900 text-white' : 'bg-slate-200 hover:bg-slate-300' }}">{{ $label }}</a>
    @endforeach
  </div>
</div>

<div class="bg-white rounded-lg shadow-sm border overflow-hidden">
  <div class="overflow-x-auto">
    @if($tab === 'contact')
      <table class="min-w-full text-sm">
        <thead class="bg-slate-50"><tr><th class="p-3 text-left">Name</th><th class="p-3 text-left">Email</th><th class="p-3 text-left">Subject</th><th class="p-3 text-left">Message</th><th class="p-3 text-left">Date</th></tr></thead>
        <tbody class="divide-y">
          @forelse($rows as $row)
            <tr><td class="p-3">{{ $row->name }}</td><td class="p-3">{{ $row->email }}</td><td class="p-3">{{ $row->subject }}</td><td class="p-3 max-w-xs truncate">{{ $row->message }}</td><td class="p-3">{{ $row->created_at->format('d M Y H:i') }}</td></tr>
          @empty
            <tr><td colspan="5" class="p-4 text-slate-500">No records found.</td></tr>
          @endforelse
        </tbody>
      </table>
    @elseif($tab === 'membership')
      <table class="min-w-full text-sm">
        <thead class="bg-slate-50"><tr><th class="p-3 text-left">Name</th><th class="p-3 text-left">Email</th><th class="p-3 text-left">Profession</th><th class="p-3 text-left">Experience</th><th class="p-3 text-left">Date</th></tr></thead>
        <tbody class="divide-y">
          @forelse($rows as $row)
            <tr><td class="p-3">{{ $row->full_name }}</td><td class="p-3">{{ $row->email }}</td><td class="p-3">{{ $row->profession }}</td><td class="p-3">{{ $row->experience }}</td><td class="p-3">{{ $row->created_at->format('d M Y H:i') }}</td></tr>
          @empty
            <tr><td colspan="5" class="p-4 text-slate-500">No records found.</td></tr>
          @endforelse
        </tbody>
      </table>
    @elseif($tab === 'volunteer')
      <table class="min-w-full text-sm">
        <thead class="bg-slate-50"><tr><th class="p-3 text-left">Name</th><th class="p-3 text-left">Email</th><th class="p-3 text-left">Area</th><th class="p-3 text-left">Availability</th><th class="p-3 text-left">Date</th></tr></thead>
        <tbody class="divide-y">
          @forelse($rows as $row)
            <tr><td class="p-3">{{ $row->full_name }}</td><td class="p-3">{{ $row->email }}</td><td class="p-3">{{ $row->area_of_interest }}</td><td class="p-3">{{ $row->availability }}</td><td class="p-3">{{ $row->created_at->format('d M Y H:i') }}</td></tr>
          @empty
            <tr><td colspan="5" class="p-4 text-slate-500">No records found.</td></tr>
          @endforelse
        </tbody>
      </table>
    @elseif($tab === 'event')
      <table class="min-w-full text-sm">
        <thead class="bg-slate-50"><tr><th class="p-3 text-left">Event</th><th class="p-3 text-left">Name</th><th class="p-3 text-left">Email</th><th class="p-3 text-left">Mode</th><th class="p-3 text-left">Date</th></tr></thead>
        <tbody class="divide-y">
          @forelse($rows as $row)
            <tr><td class="p-3">{{ $row->event_title }}</td><td class="p-3">{{ $row->full_name }}</td><td class="p-3">{{ $row->email }}</td><td class="p-3">{{ $row->participation_mode }}</td><td class="p-3">{{ $row->created_at->format('d M Y H:i') }}</td></tr>
          @empty
            <tr><td colspan="5" class="p-4 text-slate-500">No records found.</td></tr>
          @endforelse
        </tbody>
      </table>
    @else
      <table class="min-w-full text-sm">
        <thead class="bg-slate-50"><tr><th class="p-3 text-left">Email</th><th class="p-3 text-left">Source</th><th class="p-3 text-left">Date</th></tr></thead>
        <tbody class="divide-y">
          @forelse($rows as $row)
            <tr><td class="p-3">{{ $row->email }}</td><td class="p-3">{{ $row->source ?? 'website' }}</td><td class="p-3">{{ $row->created_at->format('d M Y H:i') }}</td></tr>
          @empty
            <tr><td colspan="3" class="p-4 text-slate-500">No records found.</td></tr>
          @endforelse
        </tbody>
      </table>
    @endif
  </div>
</div>

<div class="mt-4">{{ $rows->links() }}</div>
@endsection
