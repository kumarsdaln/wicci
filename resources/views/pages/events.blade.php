@extends('layouts.app')

@section('title', 'Events & Workshops – WICCI NPWC')
@section('meta_description', 'Upcoming and past WICCI NPWC mental health events, workshops, webinars, and conferences across India.')

@section('content')
<section class="page-header">
  <div class="page-header-pattern"></div>
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 text-center">
    <p class="text-white opacity-75 uppercase tracking-widest text-sm mb-3" style="font-family:'Poppins',sans-serif">Connect & Learn</p>
    <h1 class="text-4xl sm:text-5xl font-bold text-white mb-4" style="font-family:'Poppins',sans-serif">Events & Workshops</h1>
    <p class="text-white max-w-xl mx-auto" style="opacity:0.85">Join our national events, workshops, and webinars on mental health and wellbeing.</p>
  </div>
</section>

<section class="py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="flex items-center justify-between mb-8">
      <h2 class="section-title mb-0">Upcoming Events</h2>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
      @forelse($upcomingEvents as $item)
        <article class="card card-lg p-6">
          <div class="flex items-center justify-between mb-3">
            <span class="tag tag-primary">{{ ucfirst($item->mode) }}</span>
            <span class="text-xs" style="color:var(--text-muted)">{{ optional($item->event_date)->format('d M Y, h:i A') ?: 'Date TBA' }}</span>
          </div>
          <h3 class="text-lg font-semibold mb-2" style="font-family:'Poppins',sans-serif">{{ $item->title }}</h3>
          <p class="text-sm mb-4" style="color:var(--text-muted)">{{ \Illuminate\Support\Str::limit($item->summary, 150) }}</p>
          <div class="flex items-center justify-between gap-2">
            <a href="{{ route('events.show', $item->slug) }}" class="btn-secondary btn-sm">View Details</a>
            <button type="button" class="btn-primary btn-sm" onclick="openEventModal('{{ $item->slug }}', @js($item->title))">Register</button>
          </div>
        </article>
      @empty
        <div class="col-span-full text-center py-10" style="color:var(--text-muted)">No upcoming events published yet.</div>
      @endforelse
    </div>

    <div class="mt-8">{{ $upcomingEvents->links() }}</div>
  </div>
</section>

<section class="py-16 bg-gradient-hero">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <h2 class="section-title text-center mb-8">Past Events</h2>
    <div class="space-y-4">
      @forelse($pastEvents as $item)
        <div class="card p-5 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
          <div>
            <p class="font-semibold" style="font-family:'Poppins',sans-serif">{{ $item->title }}</p>
            <p class="text-sm" style="color:var(--text-muted)">{{ optional($item->event_date)->format('d M Y') ?: 'Date TBA' }} • {{ ucfirst($item->mode) }} • {{ $item->location ?: 'Online' }}</p>
          </div>
          <a href="{{ route('events.show', $item->slug) }}" class="btn-secondary btn-sm">View</a>
        </div>
      @empty
        <p class="text-center" style="color:var(--text-muted)">No past events yet.</p>
      @endforelse
    </div>
  </div>
</section>

<div id="event-modal" class="modal-overlay">
  <div class="modal-box">
    <div class="p-6 border-b" style="border-color:var(--border)">
      <div class="flex items-center justify-between">
        <h3 id="event-modal-title" class="text-xl font-bold" style="font-family:'Poppins',sans-serif">Event Registration</h3>
        <button data-modal-close="event-modal" class="w-8 h-8 rounded-lg flex items-center justify-center" style="color:var(--text-muted)">✕</button>
      </div>
    </div>
    <div class="p-6">
      @if($errors->event->any())
        <div class="mb-4 rounded border border-rose-200 bg-rose-50 text-rose-700 px-4 py-3 text-sm">Please review registration fields.</div>
      @endif
      <form id="event-reg-form" method="POST" action="{{ route('forms.event') }}">
        @csrf
        <input type="hidden" name="event_key" id="event_key" value="{{ old('event_key') }}">
        <input type="hidden" name="event_title" id="event_title" value="{{ old('event_title') }}">
        <div class="grid sm:grid-cols-2 gap-4">
          <input type="text" name="full_name" class="form-input" placeholder="Full name" value="{{ old('full_name') }}" required>
          <input type="email" name="email" class="form-input" placeholder="Email" value="{{ old('email') }}" required>
          <input type="tel" name="phone" class="form-input" placeholder="Phone" value="{{ old('phone') }}" required>
          <input type="text" name="profession" class="form-input" placeholder="Profession" value="{{ old('profession') }}" required>
        </div>
        <div class="mt-4"><input type="text" name="organization" class="form-input" placeholder="Organization (optional)" value="{{ old('organization') }}"></div>
        <div class="mt-4"><select name="participation_mode" class="form-input"><option @selected(old('participation_mode')==='Online')>Online</option><option @selected(old('participation_mode')==='In-Person')>In-Person</option></select></div>
        <div class="form-success" id="event-form-success">
          <div class="text-5xl mb-3">🎉</div>
          <h4 class="text-lg font-bold mb-2" style="font-family:'Poppins',sans-serif">Registration Successful!</h4>
          <p class="text-sm" style="color:var(--text-muted)">Thank you! Check your email for confirmation details.</p>
        </div>
        <div id="event-form-fields" class="mt-4"><button type="submit" class="btn-primary w-full justify-center">Confirm Registration</button></div>
      </form>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script>
function openEventModal(key, title) {
  document.getElementById('event-modal-title').textContent = title || 'Event Registration';
  document.getElementById('event_key').value = key || '';
  document.getElementById('event_title').value = title || 'Event Registration';
  openModal('event-modal');
}

document.addEventListener('DOMContentLoaded', function () {
  @if(session('form_success') === 'event')
  document.getElementById('event-form-fields').style.display = 'none';
  document.getElementById('event-form-success').classList.add('active');
  openModal('event-modal');
  showToast('Event registration submitted!');
  @endif

  @if($errors->event->any())
  const t = @json(old('event_title'));
  if (t) document.getElementById('event-modal-title').textContent = t;
  openModal('event-modal');
  @endif
});
</script>
@endsection
