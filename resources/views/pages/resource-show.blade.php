@extends('layouts.app')

@section('title', $resource->title . ' – WICCI NPWC')
@section('meta_description', $resource->excerpt)

@section('content')
<section class="page-header">
  <div class="page-header-pattern"></div>
  <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 text-center">
    <p class="text-white opacity-75 uppercase tracking-widest text-sm mb-3" style="font-family:'Poppins',sans-serif">{{ ucfirst($resource->type) }}</p>
    <h1 class="text-3xl sm:text-5xl font-bold text-white mb-4" style="font-family:'Poppins',sans-serif">{{ $resource->title }}</h1>
    <p class="text-white max-w-2xl mx-auto" style="opacity:0.85">{{ $resource->excerpt }}</p>
    <p class="text-white text-sm mt-4" style="opacity:0.8">{{ $resource->author_name ?: 'NPWC Team' }} • {{ optional($resource->published_at)->format('d M Y') }}</p>
  </div>
</section>

<section class="py-16">
  <div class="max-w-4xl mx-auto px-4 sm:px-6">
    <div class="card p-8">
      @if($resource->content)
        <div style="color:var(--text-muted);line-height:1.9;white-space:pre-line">{{ $resource->content }}</div>
      @else
        <p style="color:var(--text-muted);line-height:1.9">{{ $resource->excerpt }}</p>
      @endif
    </div>

    @if($related->isNotEmpty())
      <div class="mt-10">
        <h2 class="text-2xl font-bold mb-5" style="font-family:'Poppins',sans-serif">Related {{ ucfirst($resource->type) }}s</h2>
        <div class="grid md:grid-cols-3 gap-4">
          @foreach($related as $item)
            <a href="{{ route('resources.show', $item->slug) }}" class="card p-5 block hover:shadow-lg transition-shadow">
              <h3 class="font-semibold mb-2">{{ $item->title }}</h3>
              <p class="text-sm" style="color:var(--text-muted)">{{ \Illuminate\Support\Str::limit($item->excerpt, 90) }}</p>
            </a>
          @endforeach
        </div>
      </div>
    @endif

    <div class="mt-8">
      <a href="{{ route('resources') }}" class="btn-secondary">← Back to Resources</a>
    </div>
  </div>
</section>
@endsection

@section('scripts')
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
@endsection
