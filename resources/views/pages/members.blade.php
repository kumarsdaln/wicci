@extends('layouts.app')

@section('title', 'Council Members – WICCI NPWC')
@section('meta_description', 'Meet the WICCI NPWC Leadership Team and Members Directory — India\\'s top mental health professionals.')

@section('content')
<section class="page-header">
  <div class="page-header-pattern"></div>
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 text-center">
    <p class="text-white opacity-75 uppercase tracking-widest text-sm mb-3" style="font-family:'Poppins',sans-serif">Our People</p>
    <h1 class="text-4xl sm:text-5xl font-bold text-white mb-4" style="font-family:'Poppins',sans-serif">Council Members</h1>
    <p class="text-white max-w-xl mx-auto" style="opacity:0.85">Meet the dedicated mental health professionals leading India's wellbeing movement.</p>
    <nav class="flex items-center justify-center gap-2 mt-6 text-sm" style="color:rgba(255,255,255,0.7)">
      <a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a><span>/</span><span class="text-white">Council Members</span>
    </nav>
  </div>
</section>

<!-- ═══ LEADERSHIP ═══ -->
<section id="leadership" class="py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-14" data-aos="fade-up">
      <div class="section-badge">✦ Leadership</div>
      <h2 class="section-title">Leadership <span class="gradient-text">Team</span></h2>
      <p class="section-subtitle mx-auto">Visionary leaders guiding NPWC's mission and strategy</p>
    </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Leader Card Macro -->
      <div class="card card-lg p-8 text-center" data-aos="fade-up" data-aos-delay="0">
        <div class="w-24 h-24 rounded-2xl mx-auto mb-5 flex items-center justify-center text-3xl font-bold text-white" style="background:#C81970">DR</div>
        <h3 class="text-lg font-bold mb-1" style="font-family:'Poppins',sans-serif">Dr. Rekha Sharma</h3>
        <p class="text-sm mb-1" style="color:var(--primary);font-weight:600;font-family:'Poppins',sans-serif">National President, NPWC</p>
        <p class="text-xs mb-4" style="color:var(--text-muted)">PhD Clinical Psychology | 20+ years experience</p>
        <p class="text-sm mb-5" style="color:var(--text-muted);line-height:1.7">Leading voice in Indian clinical psychology with expertise in trauma, workplace mental health, and policy advocacy. Former consultant at NIMHANS.</p>
        <div class="flex justify-center gap-3">
          <a href="#" class="footer-social"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg></a>
        </div>
      </div>
      <div class="card card-lg p-8 text-center" data-aos="fade-up" data-aos-delay="100" style="border:2px solid var(--primary);position:relative">
        <div class="absolute -top-3 left-1/2 -translate-x-1/2"><span class="tag tag-primary">National Secretary</span></div>
        <div class="w-24 h-24 rounded-2xl mx-auto mb-5 flex items-center justify-center text-3xl font-bold text-white" style="background:linear-gradient(135deg,#00A896,#6C63FF)">PM</div>
        <h3 class="text-lg font-bold mb-1" style="font-family:'Poppins',sans-serif">Prof. Meena Iyer</h3>
        <p class="text-sm mb-1" style="color:var(--secondary);font-weight:600;font-family:'Poppins',sans-serif">National Secretary, NPWC</p>
        <p class="text-xs mb-4" style="color:var(--text-muted)">MSc Psychology | Researcher & Educator</p>
        <p class="text-sm mb-5" style="color:var(--text-muted);line-height:1.7">Professor of Applied Psychology and mental health researcher specializing in mindfulness, positive psychology, and community mental health interventions.</p>
        <div class="flex justify-center gap-3">
          <a href="#" class="footer-social"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg></a>
        </div>
      </div>
      <div class="card card-lg p-8 text-center" data-aos="fade-up" data-aos-delay="200">
        <div class="w-24 h-24 rounded-2xl mx-auto mb-5 flex items-center justify-center text-3xl font-bold text-white" style="background:linear-gradient(135deg,#F4A261,#6C63FF)">AK</div>
        <h3 class="text-lg font-bold mb-1" style="font-family:'Poppins',sans-serif">Anjali Kapoor</h3>
        <p class="text-sm mb-1" style="color:var(--accent);font-weight:600;font-family:'Poppins',sans-serif">National Treasurer, NPWC</p>
        <p class="text-xs mb-4" style="color:var(--text-muted)">MA Counseling Psychology | RCI Certified</p>
        <p class="text-sm mb-5" style="color:var(--text-muted);line-height:1.7">Registered counseling psychologist and certified trauma therapist with extensive experience in community mental health programs and NGO partnerships.</p>
        <div class="flex justify-center gap-3">
          <a href="#" class="footer-social"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ MEMBERS DIRECTORY ═══ -->
<section id="directory" class="py-20 bg-gradient-hero">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-10" data-aos="fade-up">
      <div class="section-badge section-badge-teal">✦ Directory</div>
      <h2 class="section-title">Members <span class="gradient-text">Directory</span></h2>
      <p class="section-subtitle mx-auto">Browse our network of 500+ mental health professionals across India</p>
    </div>

    <!-- Filters -->
    <div class="flex flex-wrap justify-center gap-3 mb-10" data-aos="fade-up">
      <button class="tab-btn active" data-filter="all">All Members</button>
      <button class="tab-btn" data-filter="psychiatrist">Psychiatrists</button>
      <button class="tab-btn" data-filter="psychologist">Psychologists</button>
      <button class="tab-btn" data-filter="counselor">Counselors</button>
      <button class="tab-btn" data-filter="researcher">Researchers</button>
    </div>
    <div class="flex gap-3 mb-8 max-w-md mx-auto" data-aos="fade-up">
      <input type="text" id="member-search" placeholder="Search members by name or city..." class="form-input" style="border-radius:50px;padding-left:1.2rem">
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5" id="members-grid">
      <!-- Member card template reused 8x with different data -->
      <div class="card p-5 text-center member-card" data-role="psychiatrist" data-city="mumbai" data-aos="fade-up" data-aos-delay="0">
        <div class="w-16 h-16 rounded-xl mx-auto mb-4 flex items-center justify-center text-xl font-bold text-white" style="background:#C81970">PN</div>
        <h4 class="font-semibold text-sm mb-1" style="font-family:'Poppins',sans-serif">Dr. Priya Nair</h4>
        <p class="text-xs mb-2" style="color:var(--primary)">Psychiatrist</p>
        <p class="text-xs mb-3" style="color:var(--text-muted)">📍 Mumbai</p>
        <span class="tag tag-primary text-xs">Psychiatry</span>
      </div>
      <div class="card p-5 text-center member-card" data-role="psychologist" data-city="delhi" data-aos="fade-up" data-aos-delay="50">
        <div class="w-16 h-16 rounded-xl mx-auto mb-4 flex items-center justify-center text-xl font-bold text-white" style="background:linear-gradient(135deg,#00A896,#6C63FF)">SV</div>
        <h4 class="font-semibold text-sm mb-1" style="font-family:'Poppins',sans-serif">Dr. Sunita Verma</h4>
        <p class="text-xs mb-2" style="color:var(--secondary)">Clinical Psychologist</p>
        <p class="text-xs mb-3" style="color:var(--text-muted)">📍 New Delhi</p>
        <span class="tag tag-teal text-xs">Psychology</span>
      </div>
      <div class="card p-5 text-center member-card" data-role="counselor" data-city="bangalore" data-aos="fade-up" data-aos-delay="100">
        <div class="w-16 h-16 rounded-xl mx-auto mb-4 flex items-center justify-center text-xl font-bold text-white" style="background:linear-gradient(135deg,#F4A261,#6C63FF)">LR</div>
        <h4 class="font-semibold text-sm mb-1" style="font-family:'Poppins',sans-serif">Lakshmi Rao</h4>
        <p class="text-xs mb-2" style="color:var(--accent)">Counselor</p>
        <p class="text-xs mb-3" style="color:var(--text-muted)">📍 Bangalore</p>
        <span class="tag tag-accent text-xs">Counseling</span>
      </div>
      <div class="card p-5 text-center member-card" data-role="researcher" data-city="chennai" data-aos="fade-up" data-aos-delay="150">
        <div class="w-16 h-16 rounded-xl mx-auto mb-4 flex items-center justify-center text-xl font-bold text-white" style="background:linear-gradient(135deg,#8B85FF,#00A896)">KP</div>
        <h4 class="font-semibold text-sm mb-1" style="font-family:'Poppins',sans-serif">Dr. Kavitha Pillai</h4>
        <p class="text-xs mb-2" style="color:#8B85FF">Researcher</p>
        <p class="text-xs mb-3" style="color:var(--text-muted)">📍 Chennai</p>
        <span class="tag tag-gray text-xs">Research</span>
      </div>
      <div class="card p-5 text-center member-card" data-role="psychologist" data-city="hyderabad" data-aos="fade-up" data-aos-delay="0">
        <div class="w-16 h-16 rounded-xl mx-auto mb-4 flex items-center justify-center text-xl font-bold text-white" style="background:linear-gradient(135deg,#6C63FF,#F4A261)">NM</div>
        <h4 class="font-semibold text-sm mb-1" style="font-family:'Poppins',sans-serif">Neha Mathur</h4>
        <p class="text-xs mb-2" style="color:var(--primary)">Psychotherapist</p>
        <p class="text-xs mb-3" style="color:var(--text-muted)">📍 Hyderabad</p>
        <span class="tag tag-primary text-xs">Therapy</span>
      </div>
      <div class="card p-5 text-center member-card" data-role="psychiatrist" data-city="pune" data-aos="fade-up" data-aos-delay="50">
        <div class="w-16 h-16 rounded-xl mx-auto mb-4 flex items-center justify-center text-xl font-bold text-white" style="background:linear-gradient(135deg,#00A896,#F4A261)">RK</div>
        <h4 class="font-semibold text-sm mb-1" style="font-family:'Poppins',sans-serif">Dr. Rashmi Kulkarni</h4>
        <p class="text-xs mb-2" style="color:var(--secondary)">Psychiatrist</p>
        <p class="text-xs mb-3" style="color:var(--text-muted)">📍 Pune</p>
        <span class="tag tag-teal text-xs">Psychiatry</span>
      </div>
      <div class="card p-5 text-center member-card" data-role="counselor" data-city="kolkata" data-aos="fade-up" data-aos-delay="100">
        <div class="w-16 h-16 rounded-xl mx-auto mb-4 flex items-center justify-center text-xl font-bold text-white" style="background:linear-gradient(135deg,#F4A261,#00A896)">DS</div>
        <h4 class="font-semibold text-sm mb-1" style="font-family:'Poppins',sans-serif">Debarati Sen</h4>
        <p class="text-xs mb-2" style="color:var(--accent)">School Counselor</p>
        <p class="text-xs mb-3" style="color:var(--text-muted)">📍 Kolkata</p>
        <span class="tag tag-accent text-xs">Education</span>
      </div>
      <div class="card p-5 text-center member-card" data-role="researcher" data-city="delhi" data-aos="fade-up" data-aos-delay="150">
        <div class="w-16 h-16 rounded-xl mx-auto mb-4 flex items-center justify-center text-xl font-bold text-white" style="background:linear-gradient(135deg,#6C63FF,#8B85FF)">AT</div>
        <h4 class="font-semibold text-sm mb-1" style="font-family:'Poppins',sans-serif">Dr. Aruna Tiwari</h4>
        <p class="text-xs mb-2" style="color:#8B85FF">Academic & Researcher</p>
        <p class="text-xs mb-3" style="color:var(--text-muted)">📍 New Delhi</p>
        <span class="tag tag-gray text-xs">Academia</span>
      </div>
    </div>

    <div class="text-center mt-10 text-sm" style="color:var(--text-muted)" id="no-results" style="display:none">No members found matching your criteria.</div>
    <div class="text-center mt-10" data-aos="fade-up">
      <a href="{{ route('join') }}" class="btn-primary">Join as a Member</a>
    </div>
  </div>
</section>
@endsection

@section('scripts')
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const filterBtns = document.querySelectorAll('[data-filter]');
    const cards = document.querySelectorAll('.member-card');
    const search = document.getElementById('member-search');
    let activeFilter = 'all';

    function applyFilters() {
      const q = search ? search.value.toLowerCase() : '';
      let visible = 0;
      cards.forEach(c => {
        const role = c.dataset.role || '';
        const text = c.textContent.toLowerCase();
        const matchFilter = activeFilter === 'all' || role === activeFilter;
        const matchSearch = !q || text.includes(q);
        const show = matchFilter && matchSearch;
        c.classList.toggle('hidden', !show);
        if (show) visible++;
      });
      const nr = document.getElementById('no-results');
      if (nr) nr.style.display = visible === 0 ? 'block' : 'none';
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
  });
</script>
@endsection

