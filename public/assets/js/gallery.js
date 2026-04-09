/* gallery.js – Lightbox for WICCI NPWC */

class Lightbox {
  constructor() {
    this.images = [];
    this.current = 0;
    this.overlay = null;
    this.init();
  }

  init() {
    this.overlay = document.getElementById('lightbox');
    if (!this.overlay) return;
    this.imgEl = this.overlay.querySelector('.lightbox-img');
    this.captionEl = this.overlay.querySelector('.lightbox-caption');
    this.overlay.querySelector('.lightbox-close')?.addEventListener('click', () => this.close());
    this.overlay.querySelector('.lightbox-prev')?.addEventListener('click', () => this.prev());
    this.overlay.querySelector('.lightbox-next')?.addEventListener('click', () => this.next());
    this.overlay.addEventListener('click', e => { if (e.target === this.overlay) this.close(); });
    document.addEventListener('keydown', e => {
      if (!this.overlay.classList.contains('active')) return;
      if (e.key === 'Escape') this.close();
      if (e.key === 'ArrowRight') this.next();
      if (e.key === 'ArrowLeft') this.prev();
    });
    document.addEventListener('click', e => {
      const item = e.target.closest('[data-lightbox]');
      if (item) {
        const group = item.dataset.lightbox;
        this.images = Array.from(document.querySelectorAll(`[data-lightbox="${group}"]`)).map(el => ({
          src: el.dataset.src || el.src || el.href,
          caption: el.dataset.caption || el.alt || '',
        }));
        const idx = Array.from(document.querySelectorAll(`[data-lightbox="${group}"]`)).indexOf(item);
        this.open(idx);
      }
    });
  }

  open(i) {
    if (!this.overlay) return;
    this.current = i;
    this.show();
    this.overlay.classList.add('active');
    document.body.style.overflow = 'hidden';
  }

  close() {
    if (!this.overlay) return;
    this.overlay.classList.remove('active');
    document.body.style.overflow = '';
  }

  show() {
    if (!this.images[this.current]) return;
    if (this.imgEl) this.imgEl.src = this.images[this.current].src;
    if (this.captionEl) this.captionEl.textContent = this.images[this.current].caption;
  }

  next() { this.current = (this.current + 1) % this.images.length; this.show(); }
  prev() { this.current = (this.current - 1 + this.images.length) % this.images.length; this.show(); }
}

document.addEventListener('DOMContentLoaded', () => { window._lb = new Lightbox(); });
