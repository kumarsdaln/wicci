@extends('layouts.app')

@section('title', 'WICCI NPWC – National Psychological & Mental Wellbeing Council')
@section('meta_description', 'WICCI National Psychological & Mental Wellbeing Council (NPWC) promotes psychological wellbeing, mental wellness awareness, and professional networking across India.')

@section('content')
<!-- ═══ HERO ═══ -->
  <section class="hero-section">
    <div class="hero-bg"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 py-24 pt-36">
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div>
          <div class="hero-badge">
            <span class="w-2 h-2 rounded-full" style="background:currentColor"></span>
            Women's Indian Chamber of Commerce & Industry
          </div>
          <h1 class="hero-title text-4xl sm:text-5xl lg:text-6xl font-bold mb-6 leading-tight"
            style="font-family:'Poppins',sans-serif">
            Where Wellbeing<br><span style="color:#C81970">Meets</span> Wellness
          </h1>
          <p class="hero-desc text-lg mb-8">
            NPWC is India's premier platform uniting mental health professionals, researchers, and advocates to shape a
            psychologically resilient nation.
          </p>
          <div class="flex flex-wrap gap-4">
            <a href="{{ route('join') }}" class="btn-primary text-base px-8 py-4">Join Us <svg class="w-5 h-5" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
              </svg></a>
            <a href="{{ route('initiatives') }}" class="btn-secondary text-base px-8 py-4">Explore Programs</a>
          </div>
          <div class="flex gap-8 mt-10">
            <div>
              <div class="hero-stat-num">500+</div>
              <div class="hero-stat-label">Members</div>
            </div>
            <div class="hero-stat-div"></div>
            <div>
              <div class="hero-stat-num">50+</div>
              <div class="hero-stat-label">Events</div>
            </div>
            <div class="hero-stat-div"></div>
            <div>
              <div class="hero-stat-num">20+</div>
              <div class="hero-stat-label">States</div>
            </div>
          </div>
        </div>
        <div class="hidden lg:grid grid-cols-2 gap-4">
          <div class="space-y-4">
            <div class="hero-feature-card" style="border-left-color:#C81970">
              <div class="hero-feature-icon" style="background:#FDF0F7">🧠</div>
              <h3 class="hero-feature-title">Mental Wellness</h3>
              <p class="hero-feature-desc">Evidence-based programs for psychological health</p>
            </div>
            <div class="hero-feature-card" style="border-left-color:#7B3FA2">
              <div class="hero-feature-icon" style="background:#F5F0FC">🤝</div>
              <h3 class="hero-feature-title">Professional Network</h3>
              <p class="hero-feature-desc">Connect with India's top mental health experts</p>
            </div>
          </div>
          <div class="space-y-4 mt-8">
            <div class="hero-feature-card" style="border-left-color:#F4A261">
              <div class="hero-feature-icon" style="background:#FDF4ED">📚</div>
              <h3 class="hero-feature-title">Research & Resources</h3>
              <p class="hero-feature-desc">Access curated mental health research & guides</p>
            </div>
            <div class="hero-feature-card" style="border-left-color:#C81970">
              <div class="hero-feature-icon" style="background:#FDF0F7">🌍</div>
              <h3 class="hero-feature-title">Community Impact</h3>
              <p class="hero-feature-desc">Creating change across 20+ Indian states</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══ ABOUT SNAPSHOT ═══ -->
  <section class="py-20 bg-gradient-hero">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div data-aos="fade-right">
          <div class="section-badge">✦ About NPWC</div>
          <h2 class="section-title">India's Voice for <span class="gradient-text">Mental Wellbeing</span></h2>
          <p class="section-subtitle mb-6">The National Psychological & Mental Wellbeing Council (NPWC) under WICCI is a
            dedicated platform that brings together mental health professionals, advocates, researchers, and policy
            contributors to promote psychological wellness across India.</p>
          <p class="text-sm mb-8" style="color:var(--text-muted);line-height:1.8">We believe mental health is not a
            luxury – it is a fundamental right. Through awareness campaigns, professional training, research
            initiatives, and community support, NPWC works tirelessly to destigmatize mental health and make wellbeing
            accessible to all.</p>
          <a href="{{ route('about') }}" class="btn-primary">Read More <svg class="w-4 h-4" fill="none" stroke="currentColor"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg></a>
        </div>
        <div class="grid grid-cols-2 gap-4" data-aos="fade-left">
          <div class="card p-6 card-lg text-center col-span-2 sm:col-span-1">
            <div class="text-4xl mb-3">💜</div>
            <div class="text-2xl font-bold mb-1" style="font-family:'Poppins',sans-serif;color:var(--primary)">Mission
            </div>
            <p class="text-sm" style="color:var(--text-muted)">To promote psychological wellbeing through awareness,
              education, and professional excellence</p>
          </div>
          <div class="card p-6 card-lg text-center col-span-2 sm:col-span-1">
            <div class="text-4xl mb-3">🎯</div>
            <div class="text-2xl font-bold mb-1" style="font-family:'Poppins',sans-serif;color:var(--secondary)">Vision
            </div>
            <p class="text-sm" style="color:var(--text-muted)">A mentally resilient India where every individual has
              access to quality psychological care</p>
          </div>
          <div class="card p-6 text-center">
            <div class="text-3xl font-bold" style="font-family:'Poppins',sans-serif;color:var(--primary)">2021</div>
            <div class="text-xs mt-1" style="color:var(--text-muted)">Founded</div>
          </div>
          <div class="card p-6 text-center">
            <div class="text-3xl font-bold" style="font-family:'Poppins',sans-serif;color:var(--secondary)">PAN</div>
            <div class="text-xs mt-1" style="color:var(--text-muted)">India Presence</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══ KEY HIGHLIGHTS ═══ -->
  <section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="text-center mb-14" data-aos="fade-up">
        <div class="section-badge">✦ Why NPWC</div>
        <h2 class="section-title">What Makes Us <span class="gradient-text">Different</span></h2>
      </div>
      <div class="grid md:grid-cols-3 gap-6">
        <div class="card p-8 card-lg" data-aos="fade-up" data-aos-delay="0">
          <div class="icon-box icon-box-primary icon-box-lg mb-5">🌟</div>
          <h3 class="text-xl font-semibold mb-3" style="font-family:'Poppins',sans-serif">Community Impact</h3>
          <p style="color:var(--text-muted);line-height:1.7">Reaching thousands of individuals through workshops,
            campaigns, and grassroots mental health advocacy programs across urban and rural India.</p>
          <div class="mt-5 pt-5 border-t" style="border-color:var(--border)">
            <div class="flex items-center gap-3"><span class="text-2xl font-bold"
                style="font-family:'Poppins',sans-serif;color:var(--primary)">10K+</span><span class="text-sm"
                style="color:var(--text-muted)">Lives impacted</span></div>
          </div>
        </div>
        <div class="card p-8 card-lg" data-aos="fade-up" data-aos-delay="100">
          <div class="icon-box icon-box-teal icon-box-lg mb-5">🔬</div>
          <h3 class="text-xl font-semibold mb-3" style="font-family:'Poppins',sans-serif">Research-Backed Approach</h3>
          <p style="color:var(--text-muted);line-height:1.7">Every initiative is grounded in evidence-based research and
            clinical best practices, ensuring meaningful and measurable outcomes for participants.</p>
          <div class="mt-5 pt-5 border-t" style="border-color:var(--border)">
            <div class="flex items-center gap-3"><span class="text-2xl font-bold"
                style="font-family:'Poppins',sans-serif;color:var(--secondary)">100+</span><span class="text-sm"
                style="color:var(--text-muted)">Research papers</span></div>
          </div>
        </div>
        <div class="card p-8 card-lg" data-aos="fade-up" data-aos-delay="200">
          <div class="icon-box icon-box-accent icon-box-lg mb-5">🌐</div>
          <h3 class="text-xl font-semibold mb-3" style="font-family:'Poppins',sans-serif">Professional Network</h3>
          <p style="color:var(--text-muted);line-height:1.7">A vibrant community of psychiatrists, psychologists,
            counselors, therapists, and mental health advocates united for a common cause.</p>
          <div class="mt-5 pt-5 border-t" style="border-color:var(--border)">
            <div class="flex items-center gap-3"><span class="text-2xl font-bold"
                style="font-family:'Poppins',sans-serif;color:var(--accent)">500+</span><span class="text-sm"
                style="color:var(--text-muted)">Professionals</span></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══ VISION & MISSION ═══ -->
  <section class="py-20 section-pink-bg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="text-center mb-12" data-aos="fade-up">
        <p class="text-white opacity-75 uppercase tracking-widest text-sm font-semibold mb-2"
          style="font-family:'Poppins',sans-serif">Our Guiding Principles</p>
        <h2 class="text-3xl sm:text-4xl font-bold text-white" style="font-family:'Poppins',sans-serif">Vision & Mission
        </h2>
      </div>
      <div class="grid md:grid-cols-2 gap-8">
        <div class="glass-card p-8" data-aos="fade-right">
          <div class="flex items-center gap-4 mb-5">
            <div class="w-14 h-14 rounded-xl flex items-center justify-center text-2xl"
              style="background:rgba(255,255,255,0.15)">🎯</div>
            <h3 class="text-2xl font-bold text-white" style="font-family:'Poppins',sans-serif">Our Vision</h3>
          </div>
          <p class="text-white leading-relaxed" style="opacity:0.9">To build a mentally resilient India where
            psychological wellbeing is universally accessible, destigmatized, and integrated into every aspect of life —
            from workplaces and schools to homes and communities.</p>
          <div class="mt-6 space-y-3">
            <div class="flex items-center gap-3 text-white text-sm"><span style="color:#F4A261">✓</span> Universal
              access to mental health resources</div>
            <div class="flex items-center gap-3 text-white text-sm"><span style="color:#F4A261">✓</span> Zero stigma
              around seeking help</div>
            <div class="flex items-center gap-3 text-white text-sm"><span style="color:#F4A261">✓</span> Empowered
              communities and families</div>
          </div>
        </div>
        <div class="glass-card p-8" data-aos="fade-left">
          <div class="flex items-center gap-4 mb-5">
            <div class="w-14 h-14 rounded-xl flex items-center justify-center text-2xl"
              style="background:rgba(255,255,255,0.15)">💡</div>
            <h3 class="text-2xl font-bold text-white" style="font-family:'Poppins',sans-serif">Our Mission</h3>
          </div>
          <p class="text-white leading-relaxed" style="opacity:0.9">To promote psychological wellbeing through
            evidence-based awareness campaigns, professional capacity building, collaborative research, policy advocacy,
            and creating inclusive spaces for mental health conversations.</p>
          <div class="mt-6 space-y-3">
            <div class="flex items-center gap-3 text-white text-sm"><span style="color:#F4A261">✓</span> Awareness
              campaigns across India</div>
            <div class="flex items-center gap-3 text-white text-sm"><span style="color:#F4A261">✓</span> Professional
              training & certification</div>
            <div class="flex items-center gap-3 text-white text-sm"><span style="color:#F4A261">✓</span> Research &
              policy contribution</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══ FEATURED INITIATIVES ═══ -->
  <section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-12 gap-4">
        <div data-aos="fade-right">
          <div class="section-badge">✦ Programs</div>
          <h2 class="section-title">Featured <span class="gradient-text">Initiatives</span></h2>
        </div>
        <a href="{{ route('initiatives') }}" class="btn-secondary btn-sm" data-aos="fade-left">View All →</a>
      </div>
      <div class="grid md:grid-cols-3 gap-6">
        <div class="card card-lg overflow-hidden" data-aos="fade-up" data-aos-delay="0">
          <div class="h-48 flex items-center justify-center text-6xl" style="background:#FDF0F7">🧠</div>
          <div class="p-6">
            <span class="tag tag-primary mb-3">Mental Health</span>
            <h3 class="text-lg font-semibold mb-2" style="font-family:'Poppins',sans-serif">Mind Matters Campaign</h3>
            <p class="text-sm mb-4" style="color:var(--text-muted)">A nationwide awareness campaign to destigmatize
              mental health conversations through workshops, panels, and digital outreach.</p>
            <a href="{{ route('initiatives') }}" class="text-sm font-semibold"
              style="color:var(--primary);font-family:'Poppins',sans-serif">Learn More →</a>
          </div>
        </div>
        <div class="card card-lg overflow-hidden" data-aos="fade-up" data-aos-delay="100">
          <div class="h-48 flex items-center justify-center text-6xl" style="background:#F5F0FC">🎓</div>
          <div class="p-6">
            <span class="tag tag-teal mb-3">Training</span>
            <h3 class="text-lg font-semibold mb-2" style="font-family:'Poppins',sans-serif">Professional Wellness
              Program</h3>
            <p class="text-sm mb-4" style="color:var(--text-muted)">Capacity-building workshops, certification courses,
              and mentorship programs for mental health professionals across India.</p>
            <a href="{{ route('initiatives') }}" class="text-sm font-semibold"
              style="color:var(--secondary);font-family:'Poppins',sans-serif">Learn More →</a>
          </div>
        </div>
        <div class="card card-lg overflow-hidden" data-aos="fade-up" data-aos-delay="200">
          <div class="h-48 flex items-center justify-center text-6xl" style="background:#FDF4ED">🏫</div>
          <div class="p-6">
            <span class="tag tag-accent mb-3">Schools & Youth</span>
            <h3 class="text-lg font-semibold mb-2" style="font-family:'Poppins',sans-serif">Youth Wellbeing Initiative
            </h3>
            <p class="text-sm mb-4" style="color:var(--text-muted)">Equipping students and educators with mental health
              literacy, resilience tools, and early intervention strategies.</p>
            <a href="{{ route('initiatives') }}" class="text-sm font-semibold"
              style="color:var(--accent);font-family:'Poppins',sans-serif">Learn More →</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══ EVENTS ═══ -->
  <section class="py-20" style="background:#F8F4F6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-12 gap-4">
        <div data-aos="fade-right">
          <div class="section-badge section-badge-teal">✦ Upcoming</div>
          <h2 class="section-title">Events & <span class="gradient-text">Workshops</span></h2>
        </div>
        <a href="{{ route('events') }}" class="btn-secondary btn-sm" data-aos="fade-left">View All Events →</a>
      </div>
      <div class="grid md:grid-cols-3 gap-6">
        <div class="card p-6" data-aos="fade-up" data-aos-delay="0">
          <div class="flex items-start justify-between mb-4">
            <div class="text-center px-4 py-2 rounded-xl" style="background:rgba(108,99,255,0.1)">
              <div class="text-2xl font-bold" style="color:var(--primary);font-family:'Poppins',sans-serif">15</div>
              <div class="text-xs font-semibold" style="color:var(--primary)">MAY</div>
            </div>
            <span class="tag tag-primary">Online</span>
          </div>
          <h3 class="font-semibold text-base mb-2" style="font-family:'Poppins',sans-serif">Mental Health Awareness
            Webinar</h3>
          <p class="text-sm mb-4" style="color:var(--text-muted)">Understanding anxiety and depression in the modern
            workplace — tools and strategies for professionals.</p>
          <div class="flex items-center justify-between">
            <span class="text-xs" style="color:var(--text-muted)">🕒 3:00 PM IST</span>
            <a href="{{ route('events') }}" class="btn-primary btn-sm py-2 px-4 text-xs">Register</a>
          </div>
        </div>
        <div class="card p-6" data-aos="fade-up" data-aos-delay="100">
          <div class="flex items-start justify-between mb-4">
            <div class="text-center px-4 py-2 rounded-xl" style="background:rgba(0,168,150,0.1)">
              <div class="text-2xl font-bold" style="color:var(--secondary);font-family:'Poppins',sans-serif">22</div>
              <div class="text-xs font-semibold" style="color:var(--secondary)">MAY</div>
            </div>
            <span class="tag tag-teal">New Delhi</span>
          </div>
          <h3 class="font-semibold text-base mb-2" style="font-family:'Poppins',sans-serif">NPWC Annual Summit 2026</h3>
          <p class="text-sm mb-4" style="color:var(--text-muted)">The flagship annual gathering of mental health
            leaders, policymakers, and practitioners across India.</p>
          <div class="flex items-center justify-between">
            <span class="text-xs" style="color:var(--text-muted)">📍 India Habitat Centre</span>
            <a href="{{ route('events') }}" class="btn-teal btn-sm py-2 px-4 text-xs">Register</a>
          </div>
        </div>
        <div class="card p-6" data-aos="fade-up" data-aos-delay="200">
          <div class="flex items-start justify-between mb-4">
            <div class="text-center px-4 py-2 rounded-xl" style="background:rgba(244,162,97,0.1)">
              <div class="text-2xl font-bold" style="color:var(--accent);font-family:'Poppins',sans-serif">08</div>
              <div class="text-xs font-semibold" style="color:var(--accent)">JUN</div>
            </div>
            <span class="tag tag-accent">Hybrid</span>
          </div>
          <h3 class="font-semibold text-base mb-2" style="font-family:'Poppins',sans-serif">Mindfulness & Resilience
            Workshop</h3>
          <p class="text-sm mb-4" style="color:var(--text-muted)">Hands-on training in mindfulness techniques, stress
            management, and building psychological resilience.</p>
          <div class="flex items-center justify-between">
            <span class="text-xs" style="color:var(--text-muted)">🕒 10:00 AM IST</span>
            <a href="{{ route('events') }}" class="btn-primary btn-sm py-2 px-4 text-xs">Register</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══ TESTIMONIALS ═══ -->
  <section class="py-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6">
      <div class="text-center mb-12" data-aos="fade-up">
        <div class="section-badge">✦ Testimonials</div>
        <h2 class="section-title">What Our <span class="gradient-text">Members Say</span></h2>
      </div>
      <div class="position-relative" data-aos="fade-up">
        <div class="testimonial-slider" id="testimonial-slider">
          <div class="testimonial-track" id="testimonial-track">
            <div class="testimonial-card">
              <p class="testimonial-quote">"NPWC has been a transformative platform for my career. The network,
                resources, and opportunities to contribute to meaningful mental health initiatives have been
                invaluable."</p>
              <div class="flex items-center justify-center gap-4">
                <div class="w-12 h-12 rounded-full flex items-center justify-center text-white font-bold text-lg"
                  style="background:#C81970">DR</div>
                <div class="text-left">
                  <div class="font-semibold text-sm" style="font-family:'Poppins',sans-serif">Dr. Ritu Sharma</div>
                  <div class="text-xs" style="color:var(--text-muted)">Clinical Psychologist, Mumbai</div>
                </div>
              </div>
            </div>
            <div class="testimonial-card">
              <p class="testimonial-quote">"The NPWC community is unlike anything else in India. It's a space where
                mental health professionals truly feel supported, heard, and empowered to create change."</p>
              <div class="flex items-center justify-center gap-4">
                <div class="w-12 h-12 rounded-full flex items-center justify-center text-white font-bold text-lg"
                  style="background:#7B3FA2">PM</div>
                <div class="text-left">
                  <div class="font-semibold text-sm" style="font-family:'Poppins',sans-serif">Prof. Meena Iyer</div>
                  <div class="text-xs" style="color:var(--text-muted)">Mental Health Researcher, Bangalore</div>
                </div>
              </div>
            </div>
            <div class="testimonial-card">
              <p class="testimonial-quote">"Joining NPWC opened doors to national-level policy discussions. As a
                counselor, I never imagined my voice would reach such heights. WICCI made it possible."</p>
              <div class="flex items-center justify-center gap-4">
                <div class="w-12 h-12 rounded-full flex items-center justify-center text-white font-bold text-lg"
                  style="background:#F4A261">AK</div>
                <div class="text-left">
                  <div class="font-semibold text-sm" style="font-family:'Poppins',sans-serif">Anjali Kapoor</div>
                  <div class="text-xs" style="color:var(--text-muted)">Counseling Psychologist, Delhi</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="flex justify-center gap-2 mt-6" id="testimonial-dots"></div>
        <div class="flex justify-center gap-3 mt-4">
          <button data-carousel-prev
            class="w-10 h-10 rounded-full flex items-center justify-center border-2 transition-all hover:bg-primary hover:border-primary hover:text-white"
            style="border-color:var(--border);color:var(--text-muted)" onclick="window._tc && window._tc.prev()"><svg
              class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg></button>
          <button data-carousel-next
            class="w-10 h-10 rounded-full flex items-center justify-center border-2 transition-all hover:bg-primary hover:border-primary hover:text-white"
            style="border-color:var(--border);color:var(--text-muted)" onclick="window._tc && window._tc.next()"><svg
              class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg></button>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══ CTA BANNER ═══ -->
  <section class="py-24">
    <div class="max-w-7xl mx-auto px-4 py-10 sm:px-6 text-center section-pink-bg rounded-3xl" data-aos="fade-up">
      <p class="text-white font-semibold uppercase tracking-widest text-sm mb-4"
        style="font-family:'Poppins',sans-serif;opacity:0.8">Be Part of the Change</p>
      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-6" style="font-family:'Poppins',sans-serif">
        Join the <span style="color:#F4A261">Movement</span></h2>
      <p class="text-lg mb-10" style="color:rgba(255,255,255,0.85);max-width:560px;margin:0 auto 2.5rem">Become a member
        of NPWC and be part of India's growing mental wellbeing movement. Together, we can shape a healthier, more
        resilient nation.</p>
      <div class="flex flex-wrap gap-4 justify-center">
        <a href="{{ route('join') }}"
          class="inline-flex items-center gap-2 px-8 py-4 rounded-xl font-semibold text-base transition-all"
          style="background:white;color:#C81970;font-family:'Poppins',sans-serif">Join NPWC Today <svg class="w-5 h-5"
            fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
          </svg></a>
        <a href="{{ route('contact') }}"
          class="inline-flex items-center gap-2 px-8 py-4 rounded-xl font-semibold text-base border-2 border-white text-white transition-all hover:bg-white"
          style="font-family:'Poppins',sans-serif">Contact Us</a>
      </div>
    </div>
  </section>
@endsection

@section('scripts')
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/carousel.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
      window._tc = new Carousel(document.getElementById('testimonial-slider'), {
        dotsContainer: '#testimonial-dots',
        interval: 5000
      });
      const track = document.getElementById('testimonial-track');
      if (track) {
        const prev = document.querySelector('[data-carousel-prev]');
        const next = document.querySelector('[data-carousel-next]');
        if (prev) prev.addEventListener('click', () => window._tc && window._tc.prev());
        if (next) next.addEventListener('click', () => window._tc && window._tc.next());
      }
    });
  </script>
@endsection

