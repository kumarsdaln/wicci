@extends('layouts.app')

@section('title', 'Join Us – WICCI NPWC')
@section('meta_description', 'Join WICCI NPWC as a member or volunteer and be part of India\\'s mental wellness movement.')

@section('content')
<section class="page-header">
  <div class="page-header-pattern"></div>
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 text-center">
    <p class="text-white opacity-75 uppercase tracking-widest text-sm mb-3" style="font-family:'Poppins',sans-serif">Be Part of the Movement</p>
    <h1 class="text-4xl sm:text-5xl font-bold text-white mb-4" style="font-family:'Poppins',sans-serif">Join NPWC</h1>
    <p class="text-white max-w-xl mx-auto" style="opacity:0.85">Become a member or volunteer and help shape India's mental wellness landscape.</p>
    <nav class="flex items-center justify-center gap-2 mt-6 text-sm" style="color:rgba(255,255,255,0.7)">
      <a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a><span>/</span><span class="text-white">Join Us</span>
    </nav>
  </div>
</section>

<!-- ═══ BENEFITS ═══ -->
<section class="py-20 bg-gradient-hero">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="text-center mb-14" data-aos="fade-up">
      <div class="section-badge">✨ Why Join?</div>
      <h2 class="section-title">Member <span class="gradient-text">Benefits</span></h2>
      <p class="section-subtitle mx-auto">What you gain as an NPWC member</p>
    </div>
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="card p-7 rounded-2xl" data-aos="fade-up" data-aos-delay="0">
        <div class="icon-box icon-box-primary icon-box-lg text-2xl mb-5">🌐</div>
        <h3 class="font-bold text-lg mb-3" style="font-family:'Poppins',sans-serif">Professional Network</h3>
        <p class="text-sm" style="color:var(--text-muted);line-height:1.75">Connect with 500+ mental health professionals, psychiatrists, psychologists, counselors, and researchers from across India and build meaningful collaborations.</p>
      </div>
      <div class="card p-7 rounded-2xl" data-aos="fade-up" data-aos-delay="100">
        <div class="icon-box icon-box-teal icon-box-lg text-2xl mb-5">📢</div>
        <h3 class="font-bold text-lg mb-3" style="font-family:'Poppins',sans-serif">National Exposure</h3>
        <p class="text-sm" style="color:var(--text-muted);line-height:1.75">Get featured in NPWC publications, speak at national events, contribute to policy discussions, and build your professional profile at a national level.</p>
      </div>
      <div class="card p-7 rounded-2xl" data-aos="fade-up" data-aos-delay="200">
        <div class="icon-box icon-box-accent icon-box-lg text-2xl mb-5">🎓</div>
        <h3 class="font-bold text-lg mb-3" style="font-family:'Poppins',sans-serif">Training & CPD</h3>
        <p class="text-sm" style="color:var(--text-muted);line-height:1.75">Access exclusive workshops, webinars, and certification programs for continuing professional development, at discounted or complimentary rates.</p>
      </div>
      <div class="card p-7 rounded-2xl" data-aos="fade-up" data-aos-delay="0">
        <div class="icon-box icon-box-primary icon-box-lg text-2xl mb-5">🔬</div>
        <h3 class="font-bold text-lg mb-3" style="font-family:'Poppins',sans-serif">Research Access</h3>
        <p class="text-sm" style="color:var(--text-muted);line-height:1.75">Full access to NPWC's research library, policy reports, annual publications, and the opportunity to co-author and contribute to national research projects.</p>
      </div>
      <div class="card p-7 rounded-2xl" data-aos="fade-up" data-aos-delay="100">
        <div class="icon-box icon-box-teal icon-box-lg text-2xl mb-5">💼</div>
        <h3 class="font-bold text-lg mb-3" style="font-family:'Poppins',sans-serif">Meaningful Contribution</h3>
        <p class="text-sm" style="color:var(--text-muted);line-height:1.75">Be part of initiatives that create real-world impact — from policy advocacy to community programs — and know your work is making a difference.</p>
      </div>
      <div class="card p-7 rounded-2xl" data-aos="fade-up" data-aos-delay="200">
        <div class="icon-box icon-box-accent icon-box-lg text-2xl mb-5">🏅</div>
        <h3 class="font-bold text-lg mb-3" style="font-family:'Poppins',sans-serif">Recognition & Awards</h3>
        <p class="text-sm" style="color:var(--text-muted);line-height:1.75">NPWC recognizes outstanding contributions through annual awards, spotlights in newsletters, and leadership opportunities within the council.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ MEMBERSHIP FORM ═══ -->
<section class="py-20">
  <div class="max-w-6xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 gap-12 items-start">
      <div data-aos="fade-right">
        <div class="section-badge">📝 Apply Now</div>
        <h2 class="section-title">Membership <span class="gradient-text">Application</span></h2>
        <p class="section-subtitle mb-8">Fill in the form to apply for NPWC membership. Our team will review your application and get back to you within 5 working days.</p>
        <div class="space-y-4">
          <div class="flex items-center gap-4 p-4 rounded-xl" style="background:var(--bg-card);border:1px solid var(--border)">
            <span class="text-2xl">1️⃣</span>
            <div><p class="font-semibold text-sm" style="font-family:'Poppins',sans-serif">Submit Application</p><p class="text-xs" style="color:var(--text-muted)">Fill and submit the membership form</p></div>
          </div>
          <div class="flex items-center gap-4 p-4 rounded-xl" style="background:var(--bg-card);border:1px solid var(--border)">
            <span class="text-2xl">2️⃣</span>
            <div><p class="font-semibold text-sm" style="font-family:'Poppins',sans-serif">Review Process</p><p class="text-xs" style="color:var(--text-muted)">Our team reviews within 5 working days</p></div>
          </div>
          <div class="flex items-center gap-4 p-4 rounded-xl" style="background:var(--bg-card);border:1px solid var(--border)">
            <span class="text-2xl">3️⃣</span>
            <div><p class="font-semibold text-sm" style="font-family:'Poppins',sans-serif">Welcome Onboard!</p><p class="text-xs" style="color:var(--text-muted)">Join our growing community of mental health professionals</p></div>
          </div>
        </div>
      </div>
      <div data-aos="fade-left">
        <div class="card card-lg p-8">
          <h3 class="text-xl font-bold mb-6" style="font-family:'Poppins',sans-serif">Apply for Membership</h3>
          @if($errors->membership->any())
            <div class="mb-5 p-3 rounded-xl text-sm" style="background:#FEF2F2;color:#991B1B;border:1px solid #FECACA;">
              Please review your membership form details and submit again.
            </div>
          @endif
          <form id="membership-form" method="POST" action="{{ route('forms.membership') }}">
            @csrf
            <div class="grid sm:grid-cols-2 gap-x-4">
              <div class="form-group"><label class="form-label">Full Name *</label><input type="text" name="full_name" class="form-input" placeholder="Dr. / Ms. Your Name" value="{{ old('full_name') }}" required><span class="form-error">Please enter your name</span></div>
              <div class="form-group"><label class="form-label">Email Address *</label><input type="email" name="email" class="form-input" placeholder="your@email.com" value="{{ old('email') }}" required><span class="form-error">Enter a valid email</span></div>
              <div class="form-group"><label class="form-label">Phone Number *</label><input type="tel" name="phone" class="form-input" placeholder="+91 xxxxx xxxxx" value="{{ old('phone') }}" required><span class="form-error">Please enter your phone</span></div>
              <div class="form-group"><label class="form-label">City *</label><input type="text" name="city" class="form-input" placeholder="Your city" value="{{ old('city') }}" required><span class="form-error">Please enter your city</span></div>
            </div>
            <div class="form-group"><label class="form-label">Profession / Designation *</label>
              <select name="profession" class="form-input" required>
                <option value="">Select your profession</option>
                <option @selected(old('profession') === 'Psychiatrist')>Psychiatrist</option><option @selected(old('profession') === 'Clinical Psychologist')>Clinical Psychologist</option><option @selected(old('profession') === 'Counseling Psychologist')>Counseling Psychologist</option><option @selected(old('profession') === 'Therapist / Psychotherapist')>Therapist / Psychotherapist</option><option @selected(old('profession') === 'Social Worker')>Social Worker</option><option @selected(old('profession') === 'Mental Health Researcher')>Mental Health Researcher</option><option @selected(old('profession') === 'Academic / Educator')>Academic / Educator</option><option @selected(old('profession') === 'NGO / Non-Profit Professional')>NGO / Non-Profit Professional</option><option @selected(old('profession') === 'Other Mental Health Professional')>Other Mental Health Professional</option>
              </select>
              <span class="form-error">Please select your profession</span>
            </div>
            <div class="form-group"><label class="form-label">Years of Experience *</label>
              <select name="experience" class="form-input" required>
                <option value="">Select experience</option>
                <option @selected(old('experience') === '0–2 years (Early career)')>0–2 years (Early career)</option><option @selected(old('experience') === '3–5 years')>3–5 years</option><option @selected(old('experience') === '6–10 years')>6–10 years</option><option @selected(old('experience') === '10+ years')>10+ years</option>
              </select>
              <span class="form-error">Please select your experience</span>
            </div>
            <div class="form-group"><label class="form-label">Organization / Institution</label><input type="text" name="organization" class="form-input" placeholder="Where do you work? (optional)" value="{{ old('organization') }}"></div>
            <div class="form-group"><label class="form-label">Why do you want to join NPWC? *</label><textarea name="motivation" class="form-input" rows="3" placeholder="Tell us about your motivation to join..." required style="resize:none">{{ old('motivation') }}</textarea><span class="form-error">Please share your motivation</span></div>
            <div class="form-success" id="membership-success">
              <div class="text-5xl mb-4">🎉</div>
              <h4 class="text-xl font-bold mb-2" style="font-family:'Poppins',sans-serif">Application Submitted!</h4>
              <p style="color:var(--text-muted)">Thank you for applying. Our team will review your application and reach out within 5 working days.</p>
            </div>
            <div id="membership-form-btn">
              <button type="submit" class="btn-primary w-full justify-center mt-2">Submit Membership Application</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ VOLUNTEER ═══ -->
<section id="volunteer" class="py-20 bg-gradient-hero">
  <div class="max-w-6xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-2 gap-12 items-start">
      <div data-aos="fade-left" class="order-2 lg:order-1">
        <div class="card card-lg p-8">
          <h3 class="text-xl font-bold mb-6" style="font-family:'Poppins',sans-serif">Volunteer Application</h3>
          @if($errors->volunteer->any())
            <div class="mb-5 p-3 rounded-xl text-sm" style="background:#FEF2F2;color:#991B1B;border:1px solid #FECACA;">
              Please review your volunteer form details and submit again.
            </div>
          @endif
          <form id="volunteer-form" method="POST" action="{{ route('forms.volunteer') }}">
            @csrf
            <div class="grid sm:grid-cols-2 gap-x-4">
              <div class="form-group"><label class="form-label">Full Name *</label><input type="text" name="full_name" class="form-input" placeholder="Your full name" value="{{ old('full_name') }}" required><span class="form-error">Required</span></div>
              <div class="form-group"><label class="form-label">Email *</label><input type="email" name="email" class="form-input" placeholder="your@email.com" value="{{ old('email') }}" required><span class="form-error">Enter valid email</span></div>
              <div class="form-group"><label class="form-label">Phone *</label><input type="tel" name="phone" class="form-input" placeholder="+91 xxxxx xxxxx" value="{{ old('phone') }}" required><span class="form-error">Required</span></div>
              <div class="form-group"><label class="form-label">City *</label><input type="text" name="city" class="form-input" placeholder="Your city" value="{{ old('city') }}" required><span class="form-error">Required</span></div>
            </div>
            <div class="form-group"><label class="form-label">Area of Interest *</label>
              <select name="area_of_interest" class="form-input" required>
                <option value="">Select area</option>
                <option @selected(old('area_of_interest') === 'Event Management')>Event Management</option><option @selected(old('area_of_interest') === 'Content Writing & Blogging')>Content Writing & Blogging</option><option @selected(old('area_of_interest') === 'Social Media & Marketing')>Social Media &amp; Marketing</option><option @selected(old('area_of_interest') === 'Research Support')>Research Support</option><option @selected(old('area_of_interest') === 'Community Outreach')>Community Outreach</option><option @selected(old('area_of_interest') === 'Graphic Design')>Graphic Design</option><option @selected(old('area_of_interest') === 'Mental Health Advocacy')>Mental Health Advocacy</option>
              </select>
              <span class="form-error">Please select an area</span>
            </div>
            <div class="form-group"><label class="form-label">Availability *</label>
              <select name="availability" class="form-input" required>
                <option value="">Select availability</option>
                <option @selected(old('availability') === 'Weekends only')>Weekends only</option><option @selected(old('availability') === 'Weekday evenings')>Weekday evenings</option><option @selected(old('availability') === 'Part-time (flexible)')>Part-time (flexible)</option><option @selected(old('availability') === 'Full-time volunteer')>Full-time volunteer</option>
              </select>
              <span class="form-error">Please select availability</span>
            </div>
            <div class="form-group"><label class="form-label">Message / Skills</label><textarea name="message" class="form-input" rows="3" placeholder="Tell us about your skills and how you'd like to contribute..." style="resize:none">{{ old('message') }}</textarea></div>
            <div class="form-success" id="volunteer-success">
              <div class="text-5xl mb-4">🙌</div>
              <h4 class="text-xl font-bold mb-2" style="font-family:'Poppins',sans-serif">Thank You for Volunteering!</h4>
              <p style="color:var(--text-muted)">We appreciate your willingness to contribute. Our team will be in touch soon!</p>
            </div>
            <div id="volunteer-form-btn">
              <button type="submit" class="btn-teal w-full justify-center mt-2">Submit Volunteer Application</button>
            </div>
          </form>
        </div>
      </div>
      <div data-aos="fade-right" class="order-1 lg:order-2">
        <div class="section-badge section-badge-teal">🙋 Volunteer</div>
        <h2 class="section-title">Volunteer With <span class="gradient-text">NPWC</span></h2>
        <p class="section-subtitle mb-8">You don't have to be a mental health professional to make a difference. We welcome passionate individuals who believe in our mission.</p>
        <div class="space-y-3">
          <div class="flex items-center gap-3"><div class="w-2 h-2 rounded-full" style="background:var(--secondary)"></div><span class="text-sm" style="color:var(--text-muted)">Event planning and coordination</span></div>
          <div class="flex items-center gap-3"><div class="w-2 h-2 rounded-full" style="background:var(--secondary)"></div><span class="text-sm" style="color:var(--text-muted)">Content creation and social media</span></div>
          <div class="flex items-center gap-3"><div class="w-2 h-2 rounded-full" style="background:var(--secondary)"></div><span class="text-sm" style="color:var(--text-muted)">Research and data support</span></div>
          <div class="flex items-center gap-3"><div class="w-2 h-2 rounded-full" style="background:var(--secondary)"></div><span class="text-sm" style="color:var(--text-muted)">Community outreach and advocacy</span></div>
          <div class="flex items-center gap-3"><div class="w-2 h-2 rounded-full" style="background:var(--secondary)"></div><span class="text-sm" style="color:var(--text-muted)">Graphic design and communications</span></div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@section('scripts')
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
  @if(session('form_success') === 'membership')
  const mf = document.getElementById('membership-form');
  if (mf) {
    document.getElementById('membership-form-btn').style.display = 'none';
    document.getElementById('membership-success').classList.add('active');
    showToast('Membership application submitted!');
  }
  @endif

  @if(session('form_success') === 'volunteer')
  const vf = document.getElementById('volunteer-form');
  if (vf) {
    document.getElementById('volunteer-form-btn').style.display = 'none';
    document.getElementById('volunteer-success').classList.add('active');
    showToast('Volunteer application submitted!');
  }
  @endif
});
</script>
@endsection

