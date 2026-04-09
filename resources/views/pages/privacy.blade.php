@extends('layouts.app')

@section('title', 'Privacy Policy – WICCI NPWC')
@section('meta_description', 'Privacy Policy for WICCI NPWC website — how we collect, use, and protect your data.')

@section('content')
<section class="page-header">
  <div class="page-header-pattern"></div>
  <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 text-center">
    <h1 class="text-4xl sm:text-5xl font-bold text-white mb-4" style="font-family:'Poppins',sans-serif">Privacy Policy</h1>
    <p class="text-white max-w-xl mx-auto" style="opacity:0.85">Last updated: April 2026</p>
    <nav class="flex items-center justify-center gap-2 mt-6 text-sm" style="color:rgba(255,255,255,0.7)">
      <a href="{{ route('home') }}" class="hover:text-white">Home</a><span>/</span><span class="text-white">Privacy Policy</span>
    </nav>
  </div>
</section>

<section class="py-20">
  <div class="max-w-3xl mx-auto px-4 sm:px-6">
    <div class="card card-lg p-8 sm:p-10 space-y-8">

      <div class="p-5 rounded-xl" style="background:rgba(108,99,255,0.06);border-left:4px solid var(--primary)">
        <p class="text-sm" style="color:var(--text-muted);line-height:1.8">This Privacy Policy explains how WICCI – National Psychological & Mental Wellbeing Council ("NPWC", "we", "us", or "our") collects, uses, discloses, and safeguards your information when you visit our website. Please read this policy carefully.</p>
      </div>

      <div>
        <h2 class="text-xl font-bold mb-4" style="font-family:'Poppins',sans-serif;color:var(--primary)">1. Information We Collect</h2>
        <p class="text-sm mb-3" style="color:var(--text-muted);line-height:1.8">We may collect the following types of information:</p>
        <ul class="space-y-2 text-sm" style="color:var(--text-muted)">
          <li class="flex items-start gap-2"><span style="color:var(--primary)">•</span><span><strong style="color:var(--text)">Personal Information:</strong> Name, email address, phone number, profession, and other details you provide when filling forms on our website (membership, contact, event registration).</span></li>
          <li class="flex items-start gap-2"><span style="color:var(--primary)">•</span><span><strong style="color:var(--text)">Usage Data:</strong> Information about how you access and use the website, including your IP address, browser type, pages visited, and time spent on pages.</span></li>
          <li class="flex items-start gap-2"><span style="color:var(--primary)">•</span><span><strong style="color:var(--text)">Cookies:</strong> We use cookies and similar tracking technologies to track activity on our website and hold certain information to enhance your experience.</span></li>
          <li class="flex items-start gap-2"><span style="color:var(--primary)">•</span><span><strong style="color:var(--text)">Newsletter Subscription Data:</strong> If you subscribe to our newsletter, we collect your email address for communication purposes.</span></li>
        </ul>
      </div>

      <div>
        <h2 class="text-xl font-bold mb-4" style="font-family:'Poppins',sans-serif;color:var(--primary)">2. How We Use Your Information</h2>
        <p class="text-sm mb-3" style="color:var(--text-muted);line-height:1.8">We use the information we collect to:</p>
        <ul class="space-y-2 text-sm" style="color:var(--text-muted)">
          <li class="flex items-start gap-2"><span style="color:var(--secondary)">✓</span> Process membership applications and respond to enquiries</li>
          <li class="flex items-start gap-2"><span style="color:var(--secondary)">✓</span> Send event registrations, confirmations, and updates</li>
          <li class="flex items-start gap-2"><span style="color:var(--secondary)">✓</span> Send newsletters and updates (with your consent)</li>
          <li class="flex items-start gap-2"><span style="color:var(--secondary)">✓</span> Improve our website and user experience</li>
          <li class="flex items-start gap-2"><span style="color:var(--secondary)">✓</span> Comply with legal obligations</li>
          <li class="flex items-start gap-2"><span style="color:var(--secondary)">✓</span> Monitor and analyze usage patterns for website improvement</li>
        </ul>
      </div>

      <div>
        <h2 class="text-xl font-bold mb-4" style="font-family:'Poppins',sans-serif;color:var(--primary)">3. Cookies Policy</h2>
        <p class="text-sm mb-3" style="color:var(--text-muted);line-height:1.8">Our website uses cookies to enhance your experience. Types of cookies we use:</p>
        <div class="grid sm:grid-cols-2 gap-4">
          <div class="p-4 rounded-xl" style="background:var(--bg-card);border:1px solid var(--border)">
            <p class="font-semibold text-sm mb-1" style="font-family:'Poppins',sans-serif">Essential Cookies</p>
            <p class="text-xs" style="color:var(--text-muted)">Necessary for the website to function — cannot be disabled.</p>
          </div>
          <div class="p-4 rounded-xl" style="background:var(--bg-card);border:1px solid var(--border)">
            <p class="font-semibold text-sm mb-1" style="font-family:'Poppins',sans-serif">Preference Cookies</p>
            <p class="text-xs" style="color:var(--text-muted)">Remember your preferences (e.g., dark mode setting).</p>
          </div>
          <div class="p-4 rounded-xl" style="background:var(--bg-card);border:1px solid var(--border)">
            <p class="font-semibold text-sm mb-1" style="font-family:'Poppins',sans-serif">Analytics Cookies</p>
            <p class="text-xs" style="color:var(--text-muted)">Help us understand how visitors interact with our website.</p>
          </div>
          <div class="p-4 rounded-xl" style="background:var(--bg-card);border:1px solid var(--border)">
            <p class="font-semibold text-sm mb-1" style="font-family:'Poppins',sans-serif">Marketing Cookies</p>
            <p class="text-xs" style="color:var(--text-muted)">Used to deliver relevant information and track outreach.</p>
          </div>
        </div>
        <p class="text-sm mt-4" style="color:var(--text-muted);line-height:1.8">You can instruct your browser to refuse all cookies or indicate when a cookie is being sent. However, if you do not accept cookies, some parts of the website may not function properly.</p>
      </div>

      <div>
        <h2 class="text-xl font-bold mb-4" style="font-family:'Poppins',sans-serif;color:var(--primary)">4. Data Sharing & Disclosure</h2>
        <p class="text-sm" style="color:var(--text-muted);line-height:1.8">We do not sell, trade, or otherwise transfer your personal information to outside parties without your consent, except:</p>
        <ul class="mt-3 space-y-2 text-sm" style="color:var(--text-muted)">
          <li class="flex items-start gap-2"><span style="color:var(--primary)">•</span> To trusted service providers who assist in website operations (under strict confidentiality agreements)</li>
          <li class="flex items-start gap-2"><span style="color:var(--primary)">•</span> When required by law, regulation, or legal process</li>
          <li class="flex items-start gap-2"><span style="color:var(--primary)">•</span> To protect the rights, property, or safety of NPWC, our members, or others</li>
        </ul>
      </div>

      <div>
        <h2 class="text-xl font-bold mb-4" style="font-family:'Poppins',sans-serif;color:var(--primary)">5. Data Security</h2>
        <p class="text-sm" style="color:var(--text-muted);line-height:1.8">We implement appropriate technical and organizational security measures to protect your personal information against unauthorized access, disclosure, alteration, or destruction. However, no internet transmission or electronic storage method is 100% secure.</p>
      </div>

      <div>
        <h2 class="text-xl font-bold mb-4" style="font-family:'Poppins',sans-serif;color:var(--primary)">6. Your Rights</h2>
        <p class="text-sm mb-3" style="color:var(--text-muted);line-height:1.8">You have the right to:</p>
        <ul class="space-y-2 text-sm" style="color:var(--text-muted)">
          <li class="flex items-start gap-2"><span style="color:var(--secondary)">✓</span> Access the personal information we hold about you</li>
          <li class="flex items-start gap-2"><span style="color:var(--secondary)">✓</span> Request correction of inaccurate or incomplete data</li>
          <li class="flex items-start gap-2"><span style="color:var(--secondary)">✓</span> Request deletion of your personal data</li>
          <li class="flex items-start gap-2"><span style="color:var(--secondary)">✓</span> Opt out of email marketing communications at any time</li>
        </ul>
      </div>

      <div>
        <h2 class="text-xl font-bold mb-4" style="font-family:'Poppins',sans-serif;color:var(--primary)">7. Changes to This Policy</h2>
        <p class="text-sm" style="color:var(--text-muted);line-height:1.8">We may update this Privacy Policy from time to time. We will notify you of any significant changes by posting the new policy on this page with an updated date.</p>
      </div>

      <div class="p-5 rounded-xl" style="background:rgba(0,168,150,0.06);border-left:4px solid var(--secondary)">
        <h2 class="text-lg font-bold mb-3" style="font-family:'Poppins',sans-serif">8. Contact Us</h2>
        <p class="text-sm mb-2" style="color:var(--text-muted)">For any privacy-related concerns or data requests, contact us at:</p>
        <p class="text-sm font-semibold" style="color:var(--secondary)">npwc@wicci.in</p>
        <p class="text-sm mt-1" style="color:var(--text-muted)">WICCI – National Psychological & Mental Wellbeing Council, New Delhi, India</p>
      </div>

    </div>

    <div class="text-center mt-10">
      <a href="{{ route('terms') }}" class="btn-secondary btn-sm">View Terms & Conditions →</a>
    </div>
  </div>
</section>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/main.js') }}"></script>
@endsection

