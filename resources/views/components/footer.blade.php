<footer id="main-footer" class="pt-16 pb-8">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">
      <div>
        <div class="flex items-center gap-3 mb-4">
          <div class="w-32 bg-white rounded-xl px-2 py-2 shadow-sm">
            <img src="{{ asset('assets/images/wicci-logo.png') }}" alt="WICCI" class="h-9 w-auto">
          </div>
        </div>
        <p class="text-xs font-semibold mb-1" style="color:#E87DB5;font-family:'Poppins',sans-serif">National Psychological & Mental Wellbeing Council</p>
        <p class="text-sm leading-relaxed mb-5" style="color:#C4A0BA">Promoting psychological wellbeing and mental wellness across India through community, research, and advocacy.</p>
        <div class="flex gap-2">
          <a href="#" class="footer-social" title="LinkedIn"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg></a>
          <a href="#" class="footer-social" title="Facebook"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg></a>
        </div>
      </div>
      <div>
        <h4 class="font-semibold text-white mb-4" style="font-family:'Poppins',sans-serif">Quick Links</h4>
        <nav>
          <a href="{{ route('home') }}" class="footer-link">Home</a>
          <a href="{{ route('about') }}" class="footer-link">About Us</a>
          <a href="{{ route('members') }}" class="footer-link">Council Members</a>
          <a href="{{ route('initiatives') }}" class="footer-link">Initiatives</a>
          <a href="{{ route('events') }}" class="footer-link">Events</a>
          <a href="{{ route('resources') }}" class="footer-link">Resources</a>
        </nav>
      </div>
      <div>
        <h4 class="font-semibold text-white mb-4" style="font-family:'Poppins',sans-serif">Get Involved</h4>
        <nav>
          <a href="{{ route('media') }}" class="footer-link">Media & Gallery</a>
          <a href="{{ route('join') }}" class="footer-link">Join Us</a>
          <a href="{{ route('join') }}#volunteer" class="footer-link">Volunteer</a>
          <a href="{{ route('contact') }}" class="footer-link">Contact Us</a>
          <a href="{{ route('privacy') }}" class="footer-link">Privacy Policy</a>
          <a href="{{ route('terms') }}" class="footer-link">Terms of Use</a>
        </nav>
      </div>
      <div>
        <h4 class="font-semibold text-white mb-4" style="font-family:'Poppins',sans-serif">Get In Touch</h4>
        <div class="space-y-3 mb-5">
          <div class="flex items-center gap-3"><svg class="w-4 h-4 flex-shrink-0" style="color:#E87DB5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg><a href="mailto:npwc@wicci.in" style="color:#C4A0BA;font-size:0.85rem">npwc@wicci.in</a></div>
          <div class="flex items-center gap-3"><svg class="w-4 h-4 flex-shrink-0" style="color:#E87DB5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg><span style="color:#C4A0BA;font-size:0.85rem">New Delhi, India</span></div>
        </div>
        <h5 class="font-semibold text-white text-sm mb-2" style="font-family:'Poppins',sans-serif">Newsletter</h5>
        @if($errors->newsletter->any())
          <p class="text-xs mb-2" style="color:#FECACA;">Please enter a valid email to subscribe.</p>
        @endif
        <form id="newsletter-form" class="flex gap-2" method="POST" action="{{ route('forms.newsletter') }}">
          @csrf
          <input type="hidden" name="source" value="footer">
          <input type="email" id="newsletter-email" name="email" placeholder="Your email" class="flex-1 px-3 py-2 rounded-lg text-white text-sm outline-none" style="background:rgba(255,255,255,0.07);border:1px solid rgba(255,255,255,0.12)" required>
          <button type="submit" class="px-4 py-2 rounded-lg text-white text-sm font-semibold transition-all hover:opacity-90" style="background:var(--primary)">-&gt;</button>
        </form>
      </div>
    </div>
    <div class="border-t pt-8 flex flex-col md:flex-row items-center justify-between gap-4" style="border-color:rgba(255,255,255,0.08)">
      <p class="text-sm" style="color:#7A4A62">&copy; {{ now()->year }} WICCI - National Psychological & Mental Wellbeing Council. All rights reserved.</p>
      <div class="flex gap-4">
        <a href="{{ route('privacy') }}" class="text-xs hover:text-white transition-colors" style="color:#7A4A62">Privacy Policy</a>
        <a href="{{ route('terms') }}" class="text-xs hover:text-white transition-colors" style="color:#7A4A62">Terms of Use</a>
      </div>
    </div>
  </div>
</footer>
<button id="scroll-top" title="Back to top"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 10l7-7m0 0l7 7m-7-7v18"/></svg></button>
