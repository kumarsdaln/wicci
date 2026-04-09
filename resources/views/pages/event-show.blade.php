@extends('layouts.app')
@section('title', $event->title . ' – WICCI NPWC')
@section('meta_description', $event->summary)

@section('content')
<section class="page-header"><div class="page-header-pattern"></div><div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 text-center"><p class="text-white opacity-75 uppercase tracking-widest text-sm mb-3">{{ ucfirst($event->mode) }}</p><h1 class="text-4xl sm:text-5xl font-bold text-white mb-4">{{ $event->title }}</h1><p class="text-white" style="opacity:.85">{{ $event->summary }}</p></div></section>
<section class="py-16"><div class="max-w-4xl mx-auto px-4 sm:px-6"><div class="card p-8"><p class="text-sm mb-4" style="color:var(--text-muted)">{{ optional($event->event_date)->format('d M Y, h:i A') ?: 'Date TBA' }} • {{ $event->location ?: 'Online' }}</p><div style="color:var(--text-muted);line-height:1.9;white-space:pre-line">{{ $event->details ?: $event->summary }}</div></div><div class="mt-8"><a href="{{ route('events') }}" class="btn-secondary">← Back to Events</a></div></div></section>
@endsection

@section('scripts')
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
@endsection
