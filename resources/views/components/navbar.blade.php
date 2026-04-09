<nav id="main-nav" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="flex items-center justify-between h-20">
      <a href="{{ route('home') }}" class="flex items-center group flex-shrink-0">
        <div class="bg-white rounded-xl px-2 py-1 shadow-sm border group-hover:shadow-md transition-shadow" style="border-color:var(--border)">
          <img src="{{ asset('assets/images/wicci-logo.png') }}" alt="WICCI" class="h-12 w-auto" style="max-width:140px">
        </div>
        <div class="hidden sm:block ml-3">
          <div class="font-bold text-xs leading-tight" style="font-family:'Poppins',sans-serif;color:var(--text)">NPWC</div>
          <div class="font-semibold text-xs" style="font-family:'Poppins',sans-serif;color:var(--primary)">Wellbeing Council</div>
        </div>
      </a>

      <div class="hidden xl:flex items-center gap-5">
        <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>

        <div class="dropdown relative">
          <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }} flex items-center gap-1">
            About Us
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
          </a>
          <div class="dropdown-menu">
            <a href="{{ route('about') }}#wicci" class="dropdown-item">About WICCI</a>
            <a href="{{ route('about') }}#npwc" class="dropdown-item">About NPWC</a>
            <a href="{{ route('about') }}#vision" class="dropdown-item">Vision & Mission</a>
            <a href="{{ route('about') }}#journey" class="dropdown-item">Our Journey</a>
          </div>
        </div>

        <div class="dropdown relative">
          <a href="{{ route('members') }}" class="nav-link {{ request()->routeIs('members') ? 'active' : '' }} flex items-center gap-1">
            Members
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
          </a>
          <div class="dropdown-menu">
            <a href="{{ route('members') }}#leadership" class="dropdown-item">Leadership Team</a>
            <a href="{{ route('members') }}#directory" class="dropdown-item">Members Directory</a>
          </div>
        </div>

        <a href="{{ route('initiatives') }}" class="nav-link {{ request()->routeIs('initiatives') ? 'active' : '' }}">Initiatives</a>
        <a href="{{ route('events') }}" class="nav-link {{ request()->routeIs('events') ? 'active' : '' }}">Events</a>
        <a href="{{ route('resources') }}" class="nav-link {{ request()->routeIs('resources') ? 'active' : '' }}">Resources</a>
        <a href="{{ route('media') }}" class="nav-link {{ request()->routeIs('media') ? 'active' : '' }}">Media</a>
        <a href="{{ route('join') }}" class="nav-link {{ request()->routeIs('join') ? 'active' : '' }}">Join Us</a>
        <a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
      </div>

      <div class="flex items-center gap-2">
        <button id="dark-toggle" title="Toggle dark mode" class="w-10 h-10 rounded-xl flex items-center justify-center transition-all" style="background:var(--bg-card);border:1px solid var(--border)">
          <svg id="icon-moon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/></svg>
          <svg id="icon-sun" class="w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
        </button>
        <a href="{{ route('join') }}" class="btn-primary btn-sm hidden lg:inline-flex">Join Us</a>
        <button id="hamburger" type="button" class="xl:hidden w-10 h-10 rounded-xl flex items-center justify-center" style="background:var(--bg-card);border:1px solid var(--border)">
          <svg id="ham-icon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
          <svg id="ham-close" class="w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
      </div>
    </div>
  </div>

  <div id="mobile-menu" class="xl:hidden">
    <div class="max-w-7xl mx-auto px-4 py-4 space-y-1">
      <a href="{{ route('home') }}" class="mobile-nav-link" {{ request()->routeIs('home') ? 'style=color:var(--primary)' : '' }}>Home</a>

      <div>
        <button class="mobile-nav-link w-full text-left flex items-center justify-between mob-acc-btn" type="button" {{ request()->routeIs('about') ? 'style=color:var(--primary)' : '' }}>
          <span>About Us</span>
          <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="mobile-submenu hidden mob-acc-content">
          <a href="{{ route('about') }}#wicci" class="mobile-sub-link">About WICCI</a>
          <a href="{{ route('about') }}#npwc" class="mobile-sub-link">About NPWC</a>
          <a href="{{ route('about') }}#vision" class="mobile-sub-link">Vision & Mission</a>
          <a href="{{ route('about') }}#journey" class="mobile-sub-link">Our Journey</a>
        </div>
      </div>

      <div>
        <button class="mobile-nav-link w-full text-left flex items-center justify-between mob-acc-btn" type="button" {{ request()->routeIs('members') ? 'style=color:var(--primary)' : '' }}>
          <span>Members</span>
          <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="mobile-submenu hidden mob-acc-content">
          <a href="{{ route('members') }}#leadership" class="mobile-sub-link">Leadership Team</a>
          <a href="{{ route('members') }}#directory" class="mobile-sub-link">Members Directory</a>
        </div>
      </div>

      <a href="{{ route('initiatives') }}" class="mobile-nav-link" {{ request()->routeIs('initiatives') ? 'style=color:var(--primary)' : '' }}>Initiatives</a>
      <a href="{{ route('events') }}" class="mobile-nav-link" {{ request()->routeIs('events') ? 'style=color:var(--primary)' : '' }}>Events</a>
      <a href="{{ route('resources') }}" class="mobile-nav-link" {{ request()->routeIs('resources') ? 'style=color:var(--primary)' : '' }}>Resources</a>
      <a href="{{ route('media') }}" class="mobile-nav-link" {{ request()->routeIs('media') ? 'style=color:var(--primary)' : '' }}>Media</a>
      <a href="{{ route('join') }}" class="mobile-nav-link" {{ request()->routeIs('join') ? 'style=color:var(--primary)' : '' }}>Join Us</a>
      <a href="{{ route('contact') }}" class="mobile-nav-link" {{ request()->routeIs('contact') ? 'style=color:var(--primary)' : '' }}>Contact</a>

      <div class="pt-3 border-t" style="border-color:var(--border)">
        <a href="{{ route('join') }}" class="btn-primary w-full justify-center text-center block">Join NPWC</a>
      </div>
    </div>
  </div>
</nav>
