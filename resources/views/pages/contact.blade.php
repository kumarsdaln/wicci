@extends('layouts.app')

@section('title', 'Contact Us – WICCI NPWC')
@section('meta_description', 'Get in touch with WICCI NPWC. Contact for membership, partnerships, media, and general enquiries.')

@section('content')
<section class="page-header">
  <div class="page-header-pattern"></div>
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 text-center">
    <p class="text-white opacity-75 uppercase tracking-widest text-sm mb-3" style="font-family:'Poppins',sans-serif">Reach Out</p>
    <h1 class="text-4xl sm:text-5xl font-bold text-white mb-4" style="font-family:'Poppins',sans-serif">Contact Us</h1>
    <p class="text-white max-w-xl mx-auto" style="opacity:0.85">We'd love to hear from you. Reach out for any enquiry, partnership, or collaboration.</p>
    <nav class="flex items-center justify-center gap-2 mt-6 text-sm" style="color:rgba(255,255,255,0.7)">
      <a href="{{ route('home') }}" class="hover:text-white">Home</a><span>/</span><span class="text-white">Contact</span>
    </nav>
  </div>
</section>

<!-- ═══ CONTACT SECTION ═══ -->
<section class="py-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="grid lg:grid-cols-3 gap-10">

      <!-- Contact Info -->
      <div data-aos="fade-right">
        <div class="section-badge">📬 Get In Touch</div>
        <h2 class="text-2xl font-bold mb-6" style="font-family:'Poppins',sans-serif">We're Here to <span class="gradient-text">Help</span></h2>
        <p class="mb-8 text-sm" style="color:var(--text-muted);line-height:1.8">Whether you're interested in membership, want to partner with us, have a media enquiry, or simply want to learn more — we'd love to connect.</p>

        <div class="space-y-5">
          <div class="flex items-start gap-4 p-4 rounded-xl" style="background:var(--bg-card);border:1px solid var(--border)">
            <div class="icon-box icon-box-primary flex-shrink-0"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg></div>
            <div><p class="font-semibold text-sm mb-1" style="font-family:'Poppins',sans-serif">Email</p><a href="mailto:npwc@wicci.in" style="color:var(--text-muted);font-size:0.85rem">npwc@wicci.in</a></div>
          </div>
          <div class="flex items-start gap-4 p-4 rounded-xl" style="background:var(--bg-card);border:1px solid var(--border)">
            <div class="icon-box icon-box-teal flex-shrink-0"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg></div>
            <div><p class="font-semibold text-sm mb-1" style="font-family:'Poppins',sans-serif">Address</p><p style="color:var(--text-muted);font-size:0.85rem">WICCI National Headquarters,<br>New Delhi, India</p></div>
          </div>
          <div class="flex items-start gap-4 p-4 rounded-xl" style="background:var(--bg-card);border:1px solid var(--border)">
            <div class="icon-box icon-box-accent flex-shrink-0"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg></div>
            <div><p class="font-semibold text-sm mb-1" style="font-family:'Poppins',sans-serif">Office Hours</p><p style="color:var(--text-muted);font-size:0.85rem">Mon–Fri: 10:00 AM – 5:00 PM IST<br>Sat: 10:00 AM – 1:00 PM IST</p></div>
          </div>
        </div>

        <!-- Social Links -->
        <div class="mt-8">
          <p class="font-semibold text-sm mb-4" style="font-family:'Poppins',sans-serif">Connect With Us</p>
          <div class="flex gap-3">
            <a href="#" class="flex items-center gap-2 px-4 py-2 rounded-xl text-sm font-semibold transition-all hover:scale-105" style="background:rgba(108,99,255,0.1);color:var(--primary);font-family:'Poppins',sans-serif">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
              LinkedIn
            </a>
            <a href="#" class="flex items-center gap-2 px-4 py-2 rounded-xl text-sm font-semibold transition-all hover:scale-105" style="background:rgba(0,168,150,0.1);color:var(--secondary);font-family:'Poppins',sans-serif">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
              Facebook
            </a>
          </div>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="lg:col-span-2" data-aos="fade-left">
        <div class="card card-lg p-8">
          <h3 class="text-xl font-bold mb-6" style="font-family:'Poppins',sans-serif">Send Us a Message</h3>
          @if($errors->contact->any())
            <div class="mb-5 p-3 rounded-xl text-sm" style="background:#FEF2F2;color:#991B1B;border:1px solid #FECACA;">
              Please check the highlighted contact form fields and try again.
            </div>
          @endif
          <form id="contact-form" method="POST" action="{{ route('forms.contact') }}">
            @csrf
            <div class="grid sm:grid-cols-2 gap-x-5">
              <div class="form-group"><label class="form-label">Your Name *</label><input type="text" name="name" class="form-input" placeholder="Full name" value="{{ old('name') }}" required><span class="form-error">Please enter your name</span></div>
              <div class="form-group"><label class="form-label">Email Address *</label><input type="email" name="email" class="form-input" placeholder="your@email.com" value="{{ old('email') }}" required><span class="form-error">Enter a valid email</span></div>
              <div class="form-group"><label class="form-label">Phone</label><input type="tel" name="phone" class="form-input" placeholder="+91 xxxxx xxxxx" value="{{ old('phone') }}"></div>
              <div class="form-group"><label class="form-label">Subject *</label>
                <select name="subject" class="form-input" required>
                  <option value="">Select subject</option>
                  <option @selected(old('subject') === 'Membership Enquiry')>Membership Enquiry</option><option @selected(old('subject') === 'Partnership Proposal')>Partnership Proposal</option><option @selected(old('subject') === 'Media / Press')>Media / Press</option><option @selected(old('subject') === 'Event Collaboration')>Event Collaboration</option><option @selected(old('subject') === 'Volunteer Opportunity')>Volunteer Opportunity</option><option @selected(old('subject') === 'General Enquiry')>General Enquiry</option>
                </select>
                <span class="form-error">Please select a subject</span>
              </div>
            </div>
            <div class="form-group"><label class="form-label">Organization</label><input type="text" name="organization" class="form-input" placeholder="Your organization (optional)" value="{{ old('organization') }}"></div>
            <div class="form-group"><label class="form-label">Your Message *</label><textarea name="message" class="form-input" rows="5" placeholder="Tell us how we can help you..." required style="resize:none">{{ old('message') }}</textarea><span class="form-error">Please enter your message</span></div>
            <div class="form-success" id="contact-success">
              <div class="text-5xl mb-4">✉️</div>
              <h4 class="text-xl font-bold mb-2" style="font-family:'Poppins',sans-serif">Message Sent!</h4>
              <p style="color:var(--text-muted)">Thank you for reaching out. We'll respond within 2-3 business days.</p>
            </div>
            <div id="contact-form-btn">
              <button type="submit" class="btn-primary w-full justify-center mt-1">Send Message <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ MAP ═══ -->
<section class="pb-20">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="rounded-2xl overflow-hidden" style="height:350px;border:2px solid var(--border)">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112168.28929127278!2d77.08904397431639!3d28.526952983012327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x37205b715389640!2sNew%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1681000000000!5m2!1sen!2sin"
        width="100%" height="100%" style="border:0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="NPWC Location"></iframe>
    </div>
  </div>
</section>
@endsection

@section('scripts')
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
  @if(session('form_success') === 'contact')
  const cf = document.getElementById('contact-form');
  if (cf) {
    document.getElementById('contact-form-btn').style.display = 'none';
    document.getElementById('contact-success').classList.add('active');
    showToast('Message sent successfully!');
  }
  @endif
});
</script>
@endsection

