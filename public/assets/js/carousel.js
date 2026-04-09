/* carousel.js – WICCI NPWC */

class Carousel {
  constructor(el, opts = {}) {
    this.el = typeof el === 'string' ? document.querySelector(el) : el;
    if (!this.el) return;
    this.track = this.el.querySelector('.testimonial-track, .carousel-track');
    this.slides = this.track ? Array.from(this.track.children) : [];
    this.total = this.slides.length;
    this.current = 0;
    this.autoplay = opts.autoplay !== false;
    this.interval = opts.interval || 5000;
    this.dotsContainer = opts.dotsContainer ? document.querySelector(opts.dotsContainer) : null;
    this._timer = null;
    if (this.total > 0) this.init();
  }

  init() {
    this.buildDots();
    this.updateDots();
    if (this.autoplay) this.startAutoplay();
    const prev = this.el.querySelector('[data-carousel-prev]');
    const next = this.el.querySelector('[data-carousel-next]');
    if (prev) prev.addEventListener('click', () => this.prev());
    if (next) next.addEventListener('click', () => this.next());
    this.el.addEventListener('touchstart', e => { this._tx = e.touches[0].clientX; }, { passive: true });
    this.el.addEventListener('touchend', e => {
      const dx = e.changedTouches[0].clientX - this._tx;
      if (Math.abs(dx) > 40) dx < 0 ? this.next() : this.prev();
    });
  }

  buildDots() {
    if (!this.dotsContainer) return;
    const c = document.querySelector(this.dotsContainer) || this.dotsContainer;
    if (!c) return;
    c.innerHTML = '';
    this.slides.forEach((_, i) => {
      const d = document.createElement('button');
      d.className = 'carousel-dot';
      d.style.cssText = 'width:8px;height:8px;border-radius:50%;border:none;cursor:pointer;transition:all .3s ease;background:rgba(108,99,255,0.3);';
      d.addEventListener('click', () => this.goTo(i));
      c.appendChild(d);
    });
  }

  updateDots() {
    if (!this.dotsContainer) return;
    const c = document.querySelector(this.dotsContainer) || this.dotsContainer;
    if (!c) return;
    c.querySelectorAll('.carousel-dot').forEach((d, i) => {
      d.style.background = i === this.current ? 'var(--primary)' : 'rgba(108,99,255,0.25)';
      d.style.width = i === this.current ? '24px' : '8px';
      d.style.borderRadius = i === this.current ? '4px' : '50%';
    });
  }

  goTo(i) {
    this.current = (i + this.total) % this.total;
    if (this.track) this.track.style.transform = `translateX(-${this.current * 100}%)`;
    this.updateDots();
  }

  next() { this.goTo(this.current + 1); this.resetAutoplay(); }
  prev() { this.goTo(this.current - 1); this.resetAutoplay(); }

  startAutoplay() { this._timer = setInterval(() => this.next(), this.interval); }
  stopAutoplay() { clearInterval(this._timer); }
  resetAutoplay() { this.stopAutoplay(); if (this.autoplay) this.startAutoplay(); }
}

window.Carousel = Carousel;
