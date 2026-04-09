@extends('layouts.app')

@section('title', 'Resources – WICCI NPWC')
@section('meta_description', 'Mental health resources including blogs, articles, research papers, and guides from WICCI NPWC.')

@section('content')
<section class="page-header">
  <div class="page-header-pattern"></div>
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 text-center">
    <p class="text-white opacity-75 uppercase tracking-widest text-sm mb-3" style="font-family:'Poppins',sans-serif">Knowledge Hub</p>
    <h1 class="text-4xl sm:text-5xl font-bold text-white mb-4" style="font-family:'Poppins',sans-serif">Resources</h1>
    <p class="text-white max-w-xl mx-auto" style="opacity:0.85">Blogs, articles, research, and mental health guides curated by NPWC professionals.</p>
    <nav class="flex items-center justify-center gap-2 mt-6 text-sm" style="color:rgba(255,255,255,0.7)">
      <a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a><span>/</span><span class="text-white">Resources</span>
    </nav>
  </div>
</section>

<section class="py-10" style="background:var(--bg);border-bottom:1px solid var(--border)">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="max-w-xl mx-auto mb-6">
      <div class="relative">
        <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5" style="color:var(--text-muted)" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
        <input type="text" id="resource-search" placeholder="Search resources..." class="form-input" style="padding-left:3rem;border-radius:50px">
      </div>
    </div>
    <div class="flex flex-wrap gap-3 justify-center">
      <button class="tab-btn active" data-filter="all">All</button>
      <button class="tab-btn" data-filter="blog">📝 Blogs</button>
      <button class="tab-btn" data-filter="article">📰 Articles</button>
      <button class="tab-btn" data-filter="research">🔬 Research</button>
      <button class="tab-btn" data-filter="guide">📖 Guides</button>
    </div>
  </div>
</section>

<section class="py-16">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-7" id="resources-grid">
      @forelse($resourceItems as $item)
        @php
          $typeColors = [
            'blog' => ['tag' => 'tag tag-primary', 'link' => 'var(--primary)', 'bg' => 'linear-gradient(135deg,rgba(108,99,255,0.12),rgba(0,168,150,0.06))', 'emoji' => '✍️'],
            'article' => ['tag' => 'tag tag-teal', 'link' => 'var(--secondary)', 'bg' => 'linear-gradient(135deg,rgba(0,168,150,0.12),rgba(108,99,255,0.06))', 'emoji' => '📰'],
            'research' => ['tag' => 'tag', 'link' => '#8B85FF', 'bg' => 'linear-gradient(135deg,rgba(139,133,255,0.12),rgba(244,162,97,0.06))', 'emoji' => '🔬'],
            'guide' => ['tag' => 'tag tag-accent', 'link' => 'var(--accent)', 'bg' => 'linear-gradient(135deg,rgba(244,162,97,0.12),rgba(108,99,255,0.06))', 'emoji' => '📖'],
          ];
          $theme = $typeColors[$item->type] ?? $typeColors['blog'];
        @endphp
        <article class="card card-lg overflow-hidden resource-card" data-cat="{{ $item->type }}" data-aos="fade-up">
          <div class="h-44 flex items-center justify-center text-6xl" style="background:{{ $theme['bg'] }}">{{ $theme['emoji'] }}</div>
          <div class="p-6">
            <div class="flex items-center gap-3 mb-4">
              <span class="{{ $theme['tag'] }}" @if($item->type === 'research') style="background:rgba(139,133,255,0.1);color:#8B85FF;border-color:rgba(139,133,255,0.2)" @endif>{{ ucfirst($item->type) }}</span>
              <span class="text-xs" style="color:var(--text-muted)">{{ optional($item->published_at)->format('M d, Y') }}</span>
            </div>
            <h3 class="text-base font-bold mb-2" style="font-family:'Poppins',sans-serif">{{ $item->title }}</h3>
            <p class="text-sm mb-4" style="color:var(--text-muted);line-height:1.7">{{ \Illuminate\Support\Str::limit($item->excerpt, 170) }}</p>
            <div class="flex items-center justify-between">
              <span class="text-xs" style="color:var(--text-muted)">{{ $item->author_name ?: 'NPWC Team' }}</span>
              <a href="{{ route('resources.show', $item->slug) }}" class="text-sm font-semibold" style="color:{{ $theme['link'] }};font-family:'Poppins',sans-serif">Read More →</a>
            </div>
          </div>
        </article>
      @empty
        <div class="col-span-full text-center py-12 text-sm" style="color:var(--text-muted)">No resources published yet. Please check back soon.</div>
      @endforelse
    </div>

    <div id="no-results-res" class="text-center py-12 hidden" style="color:var(--text-muted)">No resources found. Try a different search or filter.</div>

    <div class="mt-8">{{ $resourceItems->links() }}</div>
  </div>
</section>

<section class="py-16 bg-gradient-hero">
  <div class="max-w-2xl mx-auto px-4 sm:px-6 text-center" data-aos="fade-up">
    <div class="section-badge mx-auto">📬 Stay Updated</div>
    <h2 class="section-title mt-3">Get Resources <span class="gradient-text">in Your Inbox</span></h2>
    <p class="section-subtitle mx-auto mb-8">Subscribe to receive the latest mental health resources, research, and guides from NPWC.</p>
    @if($errors->newsletter->any())
      <p class="mb-3 text-sm" style="color:#B91C1C;">Please enter a valid email address.</p>
    @endif
    <form class="flex gap-3 max-w-md mx-auto" method="POST" action="{{ route('forms.newsletter') }}">
      @csrf
      <input type="hidden" name="source" value="resources">
      <input type="email" name="email" placeholder="Enter your email" class="form-input flex-1" style="border-radius:50px" required>
      <button type="submit" class="btn-primary flex-shrink-0">Subscribe</button>
    </form>
  </div>
</section>
@endsection

@section('scripts')
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
  const filterBtns = document.querySelectorAll('[data-filter]');
  const cards = document.querySelectorAll('.resource-card');
  const search = document.getElementById('resource-search');
  let activeFilter = 'all';

  function applyFilters() {
    const q = search ? search.value.toLowerCase() : '';
    let vis = 0;

    cards.forEach(c => {
      const matchCat = activeFilter === 'all' || c.dataset.cat === activeFilter;
      const matchQ = !q || c.textContent.toLowerCase().includes(q);
      const show = matchCat && matchQ;
      c.classList.toggle('hidden', !show);
      if (show) vis++;
    });

    const nr = document.getElementById('no-results-res');
    if (nr) nr.classList.toggle('hidden', vis > 0 || cards.length === 0);
  }

  filterBtns.forEach(btn => {
    btn.addEventListener('click', function () {
      filterBtns.forEach(b => b.classList.remove('active'));
      this.classList.add('active');
      activeFilter = this.dataset.filter;
      applyFilters();
    });
  });

  if (search) search.addEventListener('input', applyFilters);

  @if(session('form_success') === 'newsletter')
    showToast('Subscribed successfully!');
  @endif
});
</script>
@endsection
