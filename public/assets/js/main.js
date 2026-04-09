/* main.js – WICCI NPWC Shared JS */

const PAGE_MAP = {'index.html':'home','':'home','about.html':'about','members.html':'members','initiatives.html':'initiatives','events.html':'events','resources.html':'resources','media.html':'media','join.html':'join','contact.html':'contact','privacy.html':'legal','terms.html':'legal'};

function getCurrentPage() {
  return PAGE_MAP[window.location.pathname.split('/').pop() || 'index.html'] || 'home';
}

function buildNavbar() {
  const cur = getCurrentPage();
  const ch = `<svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>`;
  const items = [
    {id:'home',label:'Home',href:'index.html'},
    {id:'about',label:'About Us',href:'about.html',kids:[{label:'About WICCI',href:'about.html#wicci'},{label:'About NPWC',href:'about.html#npwc'},{label:'Vision & Mission',href:'about.html#vision'},{label:'Our Journey',href:'about.html#journey'}]},
    {id:'members',label:'Members',href:'members.html',kids:[{label:'Leadership Team',href:'members.html#leadership'},{label:'Members Directory',href:'members.html#directory'}]},
    {id:'initiatives',label:'Initiatives',href:'initiatives.html'},
    {id:'events',label:'Events',href:'events.html'},
    {id:'resources',label:'Resources',href:'resources.html'},
    {id:'media',label:'Media',href:'media.html'},
    {id:'join',label:'Join Us',href:'join.html'},
    {id:'contact',label:'Contact',href:'contact.html'},
  ];

  const desktop = items.map(i => {
    const a = i.id===cur?'active':'';
    if(i.kids){
      const k = i.kids.map(c=>`<a href="${c.href}" class="dropdown-item">${c.label}</a>`).join('');
      return `<div class="dropdown relative"><a href="${i.href}" class="nav-link ${a} flex items-center gap-1">${i.label}${ch}</a><div class="dropdown-menu">${k}</div></div>`;
    }
    return `<a href="${i.href}" class="nav-link ${a}">${i.label}</a>`;
  }).join('');

  const mobile = items.map(i => {
    const s = i.id===cur?`style="color:var(--primary)"`:''
    if(i.kids){
      const k = i.kids.map(c=>`<a href="${c.href}" class="mobile-sub-link">${c.label}</a>`).join('');
      return `<div><button ${s} class="mobile-nav-link w-full text-left flex items-center justify-between mob-acc-btn" type="button"><span>${i.label}</span>${ch}</button><div class="mobile-submenu hidden mob-acc-content">${k}</div></div>`;
    }
    return `<a href="${i.href}" class="mobile-nav-link" ${s}>${i.label}</a>`;
  }).join('');

  const logo = `<img src="assets/images/wicci-logo.png" alt="WICCI" class="h-12 w-auto" style="max-width:140px" onerror="this.style.display='none';this.parentElement.innerHTML='<span style=\'font-family:Poppins,sans-serif;font-weight:900;color:#C81970;font-size:1.1rem\'>WICCI</span>'">`;
  const moonSVG = `<svg id="icon-moon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/></svg>`;
  const sunSVG = `<svg id="icon-sun" class="w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/></svg>`;
  const hamSVG = `<svg id="ham-icon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg><svg id="ham-close" class="w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>`;

  return `<nav id="main-nav" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="flex items-center justify-between h-20">
        <a href="index.html" class="flex items-center group flex-shrink-0">
          <div class="bg-white rounded-xl px-2 py-1 shadow-sm border group-hover:shadow-md transition-shadow" style="border-color:var(--border)">${logo}</div>
          <div class="hidden sm:block ml-3">
            <div class="font-bold text-xs leading-tight" style="font-family:'Poppins',sans-serif;color:var(--text)">NPWC</div>
            <div class="font-semibold text-xs" style="font-family:'Poppins',sans-serif;color:var(--primary)">Wellbeing Council</div>
          </div>
        </a>
        <div class="hidden xl:flex items-center gap-5">${desktop}</div>
        <div class="flex items-center gap-2">
          <button id="dark-toggle" title="Toggle dark mode" class="w-10 h-10 rounded-xl flex items-center justify-center transition-all" style="background:var(--bg-card);border:1px solid var(--border)">${moonSVG}${sunSVG}</button>
          <a href="join.html" class="btn-primary btn-sm hidden lg:inline-flex">Join Us</a>
          <button id="hamburger" type="button" class="xl:hidden w-10 h-10 rounded-xl flex items-center justify-center" style="background:var(--bg-card);border:1px solid var(--border)">${hamSVG}</button>
        </div>
      </div>
    </div>
    <div id="mobile-menu" class="xl:hidden">
      <div class="max-w-7xl mx-auto px-4 py-4 space-y-1">${mobile}
        <div class="pt-3 border-t" style="border-color:var(--border)"><a href="join.html" class="btn-primary w-full justify-center text-center block">Join NPWC</a></div>
      </div>
    </div>
  </nav>`;
}

function buildFooter() {
  const yr = new Date().getFullYear();
  const li = `<svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>`;
  const fb = `<svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>`;
  const logoSvg = `<img src="assets/images/wicci-logo.png" alt="WICCI" class="h-9 w-auto" onerror="this.style.display='none';this.parentElement.innerHTML='<span style=\'font-weight:900;color:white;font-size:1rem\'>WICCI</span>'">`;
  return `<footer id="main-footer" class="pt-16 pb-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">
        <div>
          <div class="flex items-center gap-3 mb-4">
            <div class="w-32 bg-white rounded-xl px-2 py-2 shadow-sm">${logoSvg}</div>
          </div>
          <p class="text-xs font-semibold mb-1" style="color:#E87DB5;font-family:'Poppins',sans-serif">National Psychological & Mental Wellbeing Council</p>
          <p class="text-sm leading-relaxed mb-5" style="color:#C4A0BA">Promoting psychological wellbeing and mental wellness across India through community, research, and advocacy.</p>
          <div class="flex gap-2"><a href="#" class="footer-social" title="LinkedIn">${li}</a><a href="#" class="footer-social" title="Facebook">${fb}</a></div>
        </div>
        <div>
          <h4 class="font-semibold text-white mb-4" style="font-family:'Poppins',sans-serif">Quick Links</h4>
          <nav><a href="index.html" class="footer-link">Home</a><a href="about.html" class="footer-link">About Us</a><a href="members.html" class="footer-link">Council Members</a><a href="initiatives.html" class="footer-link">Initiatives</a><a href="events.html" class="footer-link">Events</a><a href="resources.html" class="footer-link">Resources</a></nav>
        </div>
        <div>
          <h4 class="font-semibold text-white mb-4" style="font-family:'Poppins',sans-serif">Get Involved</h4>
          <nav><a href="media.html" class="footer-link">Media & Gallery</a><a href="join.html" class="footer-link">Join Us</a><a href="join.html#volunteer" class="footer-link">Volunteer</a><a href="contact.html" class="footer-link">Contact Us</a><a href="privacy.html" class="footer-link">Privacy Policy</a><a href="terms.html" class="footer-link">Terms of Use</a></nav>
        </div>
        <div>
          <h4 class="font-semibold text-white mb-4" style="font-family:'Poppins',sans-serif">Get In Touch</h4>
          <div class="space-y-3 mb-5">
            <div class="flex items-center gap-3"><svg class="w-4 h-4 flex-shrink-0" style="color:#E87DB5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg><a href="mailto:npwc@wicci.in" style="color:#C4A0BA;font-size:0.85rem">npwc@wicci.in</a></div>
            <div class="flex items-center gap-3"><svg class="w-4 h-4 flex-shrink-0" style="color:#E87DB5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg><span style="color:#C4A0BA;font-size:0.85rem">New Delhi, India</span></div>
          </div>
          <h5 class="font-semibold text-white text-sm mb-2" style="font-family:'Poppins',sans-serif">Newsletter</h5>
          <form id="newsletter-form" class="flex gap-2"><input type="email" id="newsletter-email" placeholder="Your email" class="flex-1 px-3 py-2 rounded-lg text-white text-sm outline-none" style="background:rgba(255,255,255,0.07);border:1px solid rgba(255,255,255,0.12)"><button type="submit" class="px-4 py-2 rounded-lg text-white text-sm font-semibold transition-all hover:opacity-90" style="background:var(--primary)">→</button></form>
        </div>
      </div>
      <div class="border-t pt-8 flex flex-col md:flex-row items-center justify-between gap-4" style="border-color:rgba(255,255,255,0.08)">
        <p class="text-sm" style="color:#7A4A62">© ${yr} WICCI – National Psychological & Mental Wellbeing Council. All rights reserved.</p>
        <div class="flex gap-4"><a href="privacy.html" class="text-xs hover:text-white transition-colors" style="color:#7A4A62">Privacy Policy</a><a href="terms.html" class="text-xs hover:text-white transition-colors" style="color:#7A4A62">Terms of Use</a></div>
      </div>
    </div>
  </footer>
  <button id="scroll-top" title="Back to top"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 10l7-7m0 0l7 7m-7-7v18"/></svg></button>`;
}

document.addEventListener('DOMContentLoaded', function () {
  const navEl = document.getElementById('nav-container');
  if (navEl) navEl.innerHTML = buildNavbar();
  const footerEl = document.getElementById('footer-container');
  if (footerEl) footerEl.innerHTML = buildFooter();
  initDarkMode();
  initMobileMenu();
  initNavScroll();
  initScrollTop();
  initNewsletterForm();
  if (typeof AOS !== 'undefined') AOS.init({ once: true, duration: 700, offset: 60 });
});

function initDarkMode() {
  const saved = localStorage.getItem('wicci-theme');
  const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
  if (saved === 'dark' || (!saved && prefersDark)) document.documentElement.classList.add('dark');
  document.addEventListener('click', function (e) {
    if (e.target.closest('#dark-toggle')) {
      document.documentElement.classList.toggle('dark');
      localStorage.setItem('wicci-theme', document.documentElement.classList.contains('dark') ? 'dark' : 'light');
      updateDarkIcons();
    }
  });
  updateDarkIcons();
}

function updateDarkIcons() {
  const isDark = document.documentElement.classList.contains('dark');
  const moon = document.getElementById('icon-moon');
  const sun = document.getElementById('icon-sun');
  if (moon) moon.classList.toggle('hidden', isDark);
  if (sun) sun.classList.toggle('hidden', !isDark);
}

function initMobileMenu() {
  document.addEventListener('click', function (e) {
    const menu = document.getElementById('mobile-menu');
    const hamIcon = document.getElementById('ham-icon');
    const hamClose = document.getElementById('ham-close');
    if (e.target.closest('#hamburger')) {
      const isOpen = menu && menu.classList.toggle('open');
      if (hamIcon) hamIcon.classList.toggle('hidden', isOpen);
      if (hamClose) hamClose.classList.toggle('hidden', !isOpen);
      return;
    }
    if (e.target.closest('.mob-acc-btn')) {
      const btn = e.target.closest('.mob-acc-btn');
      const content = btn.nextElementSibling;
      if (content) content.classList.toggle('hidden');
      return;
    }
    if (menu && menu.classList.contains('open') && !e.target.closest('#main-nav')) {
      menu.classList.remove('open');
      if (hamIcon) hamIcon.classList.remove('hidden');
      if (hamClose) hamClose.classList.add('hidden');
    }
  });
}

function initNavScroll() {
  const nav = document.getElementById('main-nav');
  if (!nav) return;
  const fn = () => nav.classList.toggle('scrolled', window.scrollY > 30);
  window.addEventListener('scroll', fn, { passive: true });
  fn();
}

function initScrollTop() {
  document.addEventListener('click', e => { if (e.target.closest('#scroll-top')) window.scrollTo({ top: 0, behavior: 'smooth' }); });
  window.addEventListener('scroll', () => { const b = document.getElementById('scroll-top'); if (b) b.classList.toggle('visible', window.scrollY > 400); }, { passive: true });
}

function initNewsletterForm() {
  document.addEventListener('submit', function (e) {
    if (e.target.id === 'newsletter-form') {
      const action = e.target.getAttribute('action');
      if (!action) {
        e.preventDefault();
        const em = document.getElementById('newsletter-email');
        if (em && em.value) {
          em.value = '';
          showToast('Thanks for subscribing!');
        }
      }
    }
  });
}

function showToast(msg, type = 'success') {
  const color = type === 'success' ? '#C81970' : '#ef4444';
  const t = document.createElement('div');
  t.innerHTML = msg;
  t.style.cssText = `position:fixed;bottom:5rem;right:2rem;background:${color};color:white;padding:.9rem 1.5rem;border-radius:12px;font-family:'Poppins',sans-serif;font-weight:500;font-size:.9rem;z-index:9999;box-shadow:0 8px 25px rgba(0,0,0,.2);animation:sUp .3s ease;`;
  document.head.insertAdjacentHTML('beforeend', '<style>@keyframes sUp{from{opacity:0;transform:translateY(20px)}to{opacity:1;transform:translateY(0)}}</style>');
  document.body.appendChild(t);
  setTimeout(() => t.remove(), 3500);
}

function openModal(id) { const m = document.getElementById(id); if (m) { m.classList.add('active'); document.body.style.overflow = 'hidden'; } }
function closeModal(id) { const m = document.getElementById(id); if (m) { m.classList.remove('active'); document.body.style.overflow = ''; } }

document.addEventListener('click', function (e) {
  if (e.target.classList.contains('modal-overlay')) { e.target.classList.remove('active'); document.body.style.overflow = ''; }
  const mc = e.target.closest('[data-modal-close]');
  if (mc) closeModal(mc.dataset.modalClose);
});

function validateForm(formEl) {
  let ok = true;
  formEl.querySelectorAll('[required]').forEach(inp => {
    const v = inp.value.trim();
    const valid = v !== '' && (inp.type !== 'email' || /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v));
    inp.classList.toggle('error', !valid);
    if (!valid) ok = false;
  });
  return ok;
}

window.openModal = openModal;
window.closeModal = closeModal;
window.showToast = showToast;
window.validateForm = validateForm;
