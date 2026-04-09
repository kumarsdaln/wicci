@extends('layouts.app')

@section('title', 'About Us – WICCI NPWC')
@section('meta_description', 'Learn about WICCI, the National Psychological & Mental Wellbeing Council (NPWC), our vision, mission, core values, and journey since 2021.')

@section('content')
<!-- Page Header -->
  <section class="page-header">
    <div class="page-header-pattern"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 text-center">
      <p class="text-white opacity-75 uppercase tracking-widest text-sm mb-3" style="font-family:'Poppins',sans-serif">
        Who We Are</p>
      <h1 class="text-4xl sm:text-5xl font-bold text-white mb-4" style="font-family:'Poppins',sans-serif">About Us</h1>
      <p class="text-white max-w-2xl mx-auto" style="opacity:0.85">Discover the story, values, and vision behind WICCI's
        National Psychological & Mental Wellbeing Council.</p>
      <nav class="flex items-center justify-center gap-2 mt-6 text-sm" style="color:rgba(255,255,255,0.7)">
        <a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a>
        <span>/</span><span class="text-white">About Us</span>
      </nav>
    </div>
  </section>

  <!-- ═══ ABOUT WICCI ═══ -->
  <section id="wicci" class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="grid lg:grid-cols-2 gap-14 items-center">
        <div data-aos="fade-right">
          <div class="section-badge">✦ Our Parent Body</div>
          <h2 class="section-title">About <span class="gradient-text">WICCI</span></h2>
          <p class="section-subtitle mb-5">The Women's Indian Chamber of Commerce and Industry (WICCI) is India's
            premier organisation dedicated to promoting women entrepreneurship and professional excellence across all
            sectors.</p>
          <p style="color:var(--text-muted);line-height:1.8;margin-bottom:1.5rem">Founded to bridge the gender gap in
            Indian business, WICCI operates through specialized national councils covering industries from healthcare
            and technology to finance and the arts. Each council is led by domain experts who drive impactful
            initiatives at a national level.</p>
          <p style="color:var(--text-muted);line-height:1.8">WICCI's model uniquely empowers women professionals to lead
            industry change, advocate for policy reform, and build networks that transcend geographic and professional
            boundaries.</p>
          <div class="grid grid-cols-3 gap-4 mt-8">
            <div class="text-center p-4 rounded-2xl" style="background:var(--bg-card);border:1px solid var(--border)">
              <div class="text-2xl font-bold mb-1" style="font-family:'Poppins',sans-serif;color:var(--primary)">40+
              </div>
              <div class="text-xs" style="color:var(--text-muted)">National Councils</div>
            </div>
            <div class="text-center p-4 rounded-2xl" style="background:var(--bg-card);border:1px solid var(--border)">
              <div class="text-2xl font-bold mb-1" style="font-family:'Poppins',sans-serif;color:var(--secondary)">28
              </div>
              <div class="text-xs" style="color:var(--text-muted)">States Covered</div>
            </div>
            <div class="text-center p-4 rounded-2xl" style="background:var(--bg-card);border:1px solid var(--border)">
              <div class="text-2xl font-bold mb-1" style="font-family:'Poppins',sans-serif;color:var(--accent)">50K+
              </div>
              <div class="text-xs" style="color:var(--text-muted)">Members</div>
            </div>
          </div>
        </div>
        <div class="grid grid-cols-2 gap-5" data-aos="fade-left">
          <div class="card p-6 rounded-2xl">
            <div class="text-3xl mb-3">🏛️</div>
            <h4 class="font-semibold text-sm mb-2" style="font-family:'Poppins',sans-serif">Chambers & Commerce</h4>
            <p class="text-xs" style="color:var(--text-muted)">Advocating for women's business interests at national and
              state levels</p>
          </div>
          <div class="card p-6 rounded-2xl mt-6">
            <div class="text-3xl mb-3">⚖️</div>
            <h4 class="font-semibold text-sm mb-2" style="font-family:'Poppins',sans-serif">Policy Advocacy</h4>
            <p class="text-xs" style="color:var(--text-muted)">Shaping legislation and policies that empower women
              professionals</p>
          </div>
          <div class="card p-6 rounded-2xl">
            <div class="text-3xl mb-3">🤝</div>
            <h4 class="font-semibold text-sm mb-2" style="font-family:'Poppins',sans-serif">Industry Networks</h4>
            <p class="text-xs" style="color:var(--text-muted)">Connecting women leaders across 40+ sectors and
              industries</p>
          </div>
          <div class="card p-6 rounded-2xl mt-6">
            <div class="text-3xl mb-3">🎓</div>
            <h4 class="font-semibold text-sm mb-2" style="font-family:'Poppins',sans-serif">Capacity Building</h4>
            <p class="text-xs" style="color:var(--text-muted)">Training programs and mentorship for the next generation
              of women leaders</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══ ABOUT NPWC ═══ -->
  <section id="npwc" class="py-20 bg-gradient-hero">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="text-center mb-14" data-aos="fade-up">
        <div class="section-badge section-badge-teal">✦ Our Council</div>
        <h2 class="section-title">About <span class="gradient-text">NPWC</span></h2>
        <p class="section-subtitle mx-auto">The National Psychological & Mental Wellbeing Council — India's leading
          professional body for mental health advocacy under WICCI.</p>
      </div>
      <div class="grid lg:grid-cols-3 gap-8">
        <div class="lg:col-span-2" data-aos="fade-right">
          <div class="card p-8 rounded-2xl h-full">
            <p style="color:var(--text-muted);line-height:1.9;margin-bottom:1.25rem">The <strong
                style="color:var(--text)">National Psychological & Mental Wellbeing Council (NPWC)</strong> is a
              specialized council under the Women's Indian Chamber of Commerce and Industry (WICCI) dedicated entirely
              to the promotion of psychological health and mental wellness across India.</p>
            <p style="color:var(--text-muted);line-height:1.9;margin-bottom:1.25rem">NPWC was established with the
              recognition that mental health is not merely a medical concern — it is a social, economic, and human
              rights issue. Our council brings together psychiatrists, psychologists, counselors, social workers,
              therapists, educators, researchers, and policy advocates united in a common purpose.</p>
            <p style="color:var(--text-muted);line-height:1.9;margin-bottom:1.25rem">Through evidence-based programs,
              collaborative research, national events, and grassroots campaigns, NPWC works to create systemic change in
              how India perceives, discusses, and addresses mental health. We champion a non-judgmental, inclusive, and
              empowerment-focused approach to wellbeing.</p>
            <p style="color:var(--text-muted);line-height:1.9">NPWC operates under the principle that <em
                style="color:var(--primary)">"wellness is not the absence of illness — it is the presence of vitality,
                purpose, and connection."</em> We strive to make this a lived reality for every Indian.</p>
          </div>
        </div>
        <div class="space-y-5" data-aos="fade-left">
          <div class="card p-6 rounded-2xl text-center" style="border-left:4px solid var(--primary)">
            <div class="text-4xl mb-2">🧠</div>
            <h4 class="font-semibold mb-1" style="font-family:'Poppins',sans-serif">Mental Health Focus</h4>
            <p class="text-sm" style="color:var(--text-muted)">Dedicated exclusively to psychological wellbeing</p>
          </div>
          <div class="card p-6 rounded-2xl text-center" style="border-left:4px solid var(--secondary)">
            <div class="text-4xl mb-2">🌸</div>
            <h4 class="font-semibold mb-1" style="font-family:'Poppins',sans-serif">Non-Judgmental Space</h4>
            <p class="text-sm" style="color:var(--text-muted)">Safe, inclusive, and stigma-free environment</p>
          </div>
          <div class="card p-6 rounded-2xl text-center" style="border-left:4px solid var(--accent)">
            <div class="text-4xl mb-2">📊</div>
            <h4 class="font-semibold mb-1" style="font-family:'Poppins',sans-serif">Evidence-Based</h4>
            <p class="text-sm" style="color:var(--text-muted)">All programs grounded in research and best practices</p>
          </div>
          <div class="card p-6 rounded-2xl text-center" style="border-left:4px solid #8B85FF">
            <div class="text-4xl mb-2">🇮🇳</div>
            <h4 class="font-semibold mb-1" style="font-family:'Poppins',sans-serif">Pan-India Reach</h4>
            <p class="text-sm" style="color:var(--text-muted)">Active presence across 20+ Indian states</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══ VISION & MISSION ═══ -->
  <section id="vision" class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="text-center mb-14" data-aos="fade-up">
        <div class="section-badge">✦ Our Principles</div>
        <h2 class="section-title">Vision & <span class="gradient-text">Mission</span></h2>
      </div>
      <div class="grid md:grid-cols-2 gap-8 mb-12">
        <div class="p-8 rounded-2xl"
          style="background:linear-gradient(135deg,rgba(108,99,255,0.08),rgba(108,99,255,0.03));border:2px solid rgba(108,99,255,0.15)"
          data-aos="fade-right">
          <div class="flex items-center gap-4 mb-6">
            <div class="icon-box icon-box-primary icon-box-lg text-3xl">🎯</div>
            <h3 class="text-2xl font-bold" style="font-family:'Poppins',sans-serif">Our Vision</h3>
          </div>
          <p style="color:var(--text-muted);line-height:1.9;margin-bottom:1.5rem">To build a mentally resilient India
            where psychological wellbeing is a fundamental right — universally accessible, deeply valued, and fully
            destigmatized in every community, institution, and household.</p>
          <ul class="space-y-3">
            <li class="flex items-start gap-3"><span
                class="mt-1 w-5 h-5 rounded-full flex items-center justify-center text-xs text-white flex-shrink-0"
                style="background:var(--primary)">✓</span><span
                style="color:var(--text-muted);font-size:0.9rem">Universal mental health literacy across
                demographics</span></li>
            <li class="flex items-start gap-3"><span
                class="mt-1 w-5 h-5 rounded-full flex items-center justify-center text-xs text-white flex-shrink-0"
                style="background:var(--primary)">✓</span><span style="color:var(--text-muted);font-size:0.9rem">Zero
                stigma around mental health conversations</span></li>
            <li class="flex items-start gap-3"><span
                class="mt-1 w-5 h-5 rounded-full flex items-center justify-center text-xs text-white flex-shrink-0"
                style="background:var(--primary)">✓</span><span
                style="color:var(--text-muted);font-size:0.9rem">Equitable access to quality psychological care</span>
            </li>
            <li class="flex items-start gap-3"><span
                class="mt-1 w-5 h-5 rounded-full flex items-center justify-center text-xs text-white flex-shrink-0"
                style="background:var(--primary)">✓</span><span
                style="color:var(--text-muted);font-size:0.9rem">Psychologically empowered communities and
                families</span></li>
          </ul>
        </div>
        <div class="p-8 rounded-2xl"
          style="background:linear-gradient(135deg,rgba(0,168,150,0.08),rgba(0,168,150,0.03));border:2px solid rgba(0,168,150,0.15)"
          data-aos="fade-left">
          <div class="flex items-center gap-4 mb-6">
            <div class="icon-box icon-box-teal icon-box-lg text-3xl">💡</div>
            <h3 class="text-2xl font-bold" style="font-family:'Poppins',sans-serif">Our Mission</h3>
          </div>
          <p style="color:var(--text-muted);line-height:1.9;margin-bottom:1.5rem">To promote psychological wellbeing
            through evidence-based advocacy, professional capacity building, collaborative research, policy reform, and
            the creation of inclusive spaces for open mental health dialogue.</p>
          <ul class="space-y-3">
            <li class="flex items-start gap-3"><span
                class="mt-1 w-5 h-5 rounded-full flex items-center justify-center text-xs text-white flex-shrink-0"
                style="background:var(--secondary)">✓</span><span
                style="color:var(--text-muted);font-size:0.9rem">Conduct awareness campaigns and mental health
                education</span></li>
            <li class="flex items-start gap-3"><span
                class="mt-1 w-5 h-5 rounded-full flex items-center justify-center text-xs text-white flex-shrink-0"
                style="background:var(--secondary)">✓</span><span style="color:var(--text-muted);font-size:0.9rem">Build
                capacity through training and certification programs</span></li>
            <li class="flex items-start gap-3"><span
                class="mt-1 w-5 h-5 rounded-full flex items-center justify-center text-xs text-white flex-shrink-0"
                style="background:var(--secondary)">✓</span><span
                style="color:var(--text-muted);font-size:0.9rem">Foster research collaboration and knowledge
                dissemination</span></li>
            <li class="flex items-start gap-3"><span
                class="mt-1 w-5 h-5 rounded-full flex items-center justify-center text-xs text-white flex-shrink-0"
                style="background:var(--secondary)">✓</span><span
                style="color:var(--text-muted);font-size:0.9rem">Advocate for progressive mental health policies</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══ CORE VALUES ═══ -->
  <section class="py-20 bg-gradient-hero">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="text-center mb-14" data-aos="fade-up">
        <div class="section-badge">✦ Our Values</div>
        <h2 class="section-title">Core <span class="gradient-text">Values</span></h2>
        <p class="section-subtitle mx-auto">The principles that guide everything we do at NPWC</p>
      </div>
      <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="card p-8 text-center rounded-2xl" data-aos="fade-up" data-aos-delay="0">
          <div class="text-5xl mb-5">⚖️</div>
          <h3 class="text-lg font-bold mb-3" style="font-family:'Poppins',sans-serif;color:var(--primary)">Equality</h3>
          <p class="text-sm leading-relaxed" style="color:var(--text-muted)">We believe mental health support and
            resources must be equally accessible to every individual, regardless of gender, caste, class, or geography.
          </p>
        </div>
        <div class="card p-8 text-center rounded-2xl" data-aos="fade-up" data-aos-delay="100">
          <div class="text-5xl mb-5">🌸</div>
          <h3 class="text-lg font-bold mb-3" style="font-family:'Poppins',sans-serif;color:var(--secondary)">
            Non-Judgment</h3>
          <p class="text-sm leading-relaxed" style="color:var(--text-muted)">NPWC creates stigma-free spaces where every
            individual is met with compassion, dignity, and unconditional positive regard.</p>
        </div>
        <div class="card p-8 text-center rounded-2xl" data-aos="fade-up" data-aos-delay="200">
          <div class="text-5xl mb-5">💪</div>
          <h3 class="text-lg font-bold mb-3" style="font-family:'Poppins',sans-serif;color:var(--accent)">Empowerment
          </h3>
          <p class="text-sm leading-relaxed" style="color:var(--text-muted)">We empower individuals and communities with
            the knowledge, tools, and confidence to take charge of their psychological wellbeing.</p>
        </div>
        <div class="card p-8 text-center rounded-2xl" data-aos="fade-up" data-aos-delay="300">
          <div class="text-5xl mb-5">🌍</div>
          <h3 class="text-lg font-bold mb-3" style="font-family:'Poppins',sans-serif;color:#8B85FF">Community</h3>
          <p class="text-sm leading-relaxed" style="color:var(--text-muted)">Healing happens in community. We foster
            belonging, connection, and collective responsibility for each other's mental wellbeing.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══ JOURNEY TIMELINE ═══ -->
  <section id="journey" class="py-20">
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
      <div class="text-center mb-16" data-aos="fade-up">
        <div class="section-badge">✦ Our Story</div>
        <h2 class="section-title">Our <span class="gradient-text">Journey</span></h2>
        <p class="section-subtitle mx-auto">From inception to impact — key milestones that shaped NPWC</p>
      </div>
      <div class="timeline">
        <div class="timeline-item" data-aos="fade-right">
          <div class="timeline-dot"></div>
          <div class="timeline-content">
            <span class="tag tag-primary mb-3">2021</span>
            <h4 class="text-lg font-semibold mb-2" style="font-family:'Poppins',sans-serif">Foundation of NPWC</h4>
            <p class="text-sm" style="color:var(--text-muted)">NPWC was established under WICCI with a mandate to
              address the critical mental health gap in India. The founding team of 12 mental health professionals
              convened in New Delhi to draft the council's charter and vision.</p>
          </div>
        </div>
        <div class="timeline-item" data-aos="fade-left">
          <div class="timeline-dot"></div>
          <div class="timeline-content">
            <span class="tag tag-teal mb-3">2022</span>
            <h4 class="text-lg font-semibold mb-2" style="font-family:'Poppins',sans-serif">First National Summit</h4>
            <p class="text-sm" style="color:var(--text-muted)">NPWC hosted its inaugural National Mental Wellness Summit
              in New Delhi, bringing together 200+ mental health professionals, policymakers, and advocates for a
              landmark two-day conference.</p>
          </div>
        </div>
        <div class="timeline-item" data-aos="fade-right">
          <div class="timeline-dot"></div>
          <div class="timeline-content">
            <span class="tag tag-accent mb-3">2022</span>
            <h4 class="text-lg font-semibold mb-2" style="font-family:'Poppins',sans-serif">Launch of Mind Matters
              Campaign</h4>
            <p class="text-sm" style="color:var(--text-muted)">The flagship "Mind Matters" awareness campaign reached
              50,000+ individuals across 10 cities through workshops, webinars, and digital campaigns focused on
              destigmatizing mental health.</p>
          </div>
        </div>
        <div class="timeline-item" data-aos="fade-left">
          <div class="timeline-dot"></div>
          <div class="timeline-content">
            <span class="tag tag-primary mb-3">2023</span>
            <h4 class="text-lg font-semibold mb-2" style="font-family:'Poppins',sans-serif">Research & Publications</h4>
            <p class="text-sm" style="color:var(--text-muted)">NPWC launched its research division, publishing India's
              first WICCI Mental Health Report 2023 — a comprehensive study on workplace mental health across Indian
              organizations.</p>
          </div>
        </div>
        <div class="timeline-item" data-aos="fade-right">
          <div class="timeline-dot"></div>
          <div class="timeline-content">
            <span class="tag tag-teal mb-3">2023</span>
            <h4 class="text-lg font-semibold mb-2" style="font-family:'Poppins',sans-serif">500+ Members Milestone</h4>
            <p class="text-sm" style="color:var(--text-muted)">NPWC crossed the 500-member mark with professionals
              spanning psychiatry, psychology, counseling, social work, and mental health education from across India.
            </p>
          </div>
        </div>
        <div class="timeline-item" data-aos="fade-left">
          <div class="timeline-dot"></div>
          <div class="timeline-content">
            <span class="tag tag-accent mb-3">2024</span>
            <h4 class="text-lg font-semibold mb-2" style="font-family:'Poppins',sans-serif">Youth Wellbeing Initiative
            </h4>
            <p class="text-sm" style="color:var(--text-muted)">Launched the Youth Wellbeing Initiative in partnership
              with 50+ schools and colleges across India, training educators and counselors in early mental health
              intervention and student support.</p>
          </div>
        </div>
        <div class="timeline-item" data-aos="fade-right">
          <div class="timeline-dot"></div>
          <div class="timeline-content">
            <span class="tag tag-primary mb-3">2025 Onwards</span>
            <h4 class="text-lg font-semibold mb-2" style="font-family:'Poppins',sans-serif">Policy Advocacy & Expansion
            </h4>
            <p class="text-sm" style="color:var(--text-muted)">NPWC continues to expand its policy advocacy work,
              engaging with state governments and national bodies to integrate mental health into public health policy,
              education curriculum, and workplace regulations.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="py-16 px-4">
    <div class="max-w-7xl mx-auto px-4 py-10 sm:px-6 text-center section-pink-bg rounded-3xl">
      <h2 class="text-3xl font-bold text-white mb-4" style="font-family:'Poppins',sans-serif">Be Part of Our Story</h2>
      <p class="text-white mb-8" style="opacity:0.88">Join thousands of mental health professionals making a difference
        across India.</p>
      <div class="flex flex-wrap gap-4 justify-center">
        <a href="{{ route('join') }}" class="btn-ghost">Join NPWC</a>
        <a href="{{ route('members') }}" class="btn-ghost">Meet Our Team</a>
      </div>
    </div>
  </section>
@endsection

@section('scripts')
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
@endsection

