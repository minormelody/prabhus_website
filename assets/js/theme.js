/**
 * Prabhu's Flutes - Theme JavaScript
 * Includes Web Audio API Flute Sound Previewer, Slide-out Cart Drawer, and UI micro-interactions.
 */

document.addEventListener('DOMContentLoaded', () => {
  /* ==========================================================================
     1. WEB AUDIO API FLUTE SOUND SYNTHESIZER
     ========================================================================== */
  let audioCtx = null;
  let currentOsc = null;
  let currentGain = null;
  let isPlaying = false;

  const playBtn = document.getElementById('play-flute-audio');
  const scaleButtons = document.querySelectorAll('#scale-sound-selector .scale-btn');
  const playingTitle = document.getElementById('current-playing-title');
  const playingFreq = document.getElementById('current-playing-freq');

  let activeFreq = 329.63; // Default E Natural
  let activeTitle = 'E Natural Medium';

  scaleButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      scaleButtons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      
      activeFreq = parseFloat(btn.dataset.freq);
      activeTitle = btn.dataset.scale;

      if (playingTitle) playingTitle.textContent = activeTitle;
      if (playingFreq) playingFreq.textContent = activeFreq + 'Hz Frequency';

      if (isPlaying) {
        stopFluteTone();
        playFluteTone(activeFreq);
      }
    });
  });

  if (playBtn) {
    playBtn.addEventListener('click', () => {
      if (!isPlaying) {
        playFluteTone(activeFreq);
        playBtn.innerHTML = '❚❚';
        playBtn.style.background = 'var(--color-primary-light)';
        isPlaying = true;
      } else {
        stopFluteTone();
        playBtn.innerHTML = '▶';
        playBtn.style.background = 'var(--color-primary)';
        isPlaying = false;
      }
    });
  }

  function playFluteTone(freq) {
    try {
      const AudioContext = window.AudioContext || window.webkitAudioContext;
      if (!audioCtx) {
        audioCtx = new AudioContext();
      }

      // Main harmonic oscillator (warm sine wave mimicking bamboo resonance)
      currentOsc = audioCtx.createOscillator();
      const subOsc = audioCtx.createOscillator();
      currentGain = audioCtx.createGain();

      currentOsc.type = 'sine';
      currentOsc.frequency.setValueAtTime(freq, audioCtx.currentTime);

      subOsc.type = 'triangle';
      subOsc.frequency.setValueAtTime(freq * 2, audioCtx.currentTime); // Octave overtone

      // Soft envelope for smooth acoustic attack
      currentGain.gain.setValueAtTime(0.01, audioCtx.currentTime);
      currentGain.gain.exponentialRampToValueAtTime(0.3, audioCtx.currentTime + 0.3);

      const subGain = audioCtx.createGain();
      subGain.gain.setValueAtTime(0.08, audioCtx.currentTime);

      currentOsc.connect(currentGain);
      subOsc.connect(subGain);
      subGain.connect(currentGain);
      currentGain.connect(audioCtx.destination);

      currentOsc.start();
      subOsc.start();
    } catch (e) {
      console.log('Web Audio API not allowed without user gesture:', e);
    }
  }

  function stopFluteTone() {
    if (currentGain && audioCtx) {
      currentGain.gain.exponentialRampToValueAtTime(0.001, audioCtx.currentTime + 0.2);
      setTimeout(() => {
        if (currentOsc) {
          try { currentOsc.stop(); } catch(e){}
        }
      }, 200);
    }
  }

  /* ==========================================================================
     2. PRODUCT INQUIRY MODAL & CONTACT INTERACTION
     ========================================================================== */
  const inquireDrawer = document.getElementById('inquire-drawer');
  const inquireBackdrop = document.getElementById('inquire-backdrop');
  const closeInquireBtn = document.getElementById('close-inquire-btn');
  const inquireTriggers = document.querySelectorAll('.inquire-trigger');
  
  const inquireProductTitle = document.getElementById('inquire-product-title');
  const inquireProductImg = document.getElementById('inquire-product-img');
  const whatsappInquireLink = document.getElementById('whatsapp-inquire-link');
  const inquireFormMessage = document.getElementById('inquire-message');

  function openInquireDrawer(productTitle = "Prabhu Concert Bansuri", productImg = "assets/images/flute_e_natural.png") {
    if (inquireProductTitle) inquireProductTitle.textContent = productTitle;
    if (inquireProductImg) inquireProductImg.src = productImg;
    
    // Update WhatsApp direct order link
    if (whatsappInquireLink) {
      const waText = encodeURIComponent(`Hello Prabhu's Flutes! I am interested in inquiring about/purchasing: ${productTitle}. Please share order details.`);
      whatsappInquireLink.href = `https://wa.me/919876543210?text=${waText}`;
    }

    if (inquireFormMessage) {
      inquireFormMessage.value = `Hi Prabhu's Flutes team,\n\nI would like to place an order/inquire about: ${productTitle}.\nPlease get back to me with availability and shipping details.`;
    }

    if (inquireDrawer && inquireBackdrop) {
      inquireDrawer.classList.add('active');
      inquireBackdrop.classList.add('active');
    }
  }

  function closeInquireDrawer() {
    if (inquireDrawer && inquireBackdrop) {
      inquireDrawer.classList.remove('active');
      inquireBackdrop.classList.remove('active');
    }
  }

  if (closeInquireBtn) closeInquireBtn.addEventListener('click', closeInquireDrawer);
  if (inquireBackdrop) inquireBackdrop.addEventListener('click', closeInquireDrawer);

  inquireTriggers.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const title = btn.dataset.title || "Custom Bansuri Flute";
      const img = btn.dataset.img || "assets/images/flute_e_natural.png";
      openInquireDrawer(title, img);
    });
  });

  // Handle Quick Inquiry Form Submission
  const quickInquireForm = document.getElementById('quick-inquire-form');
  if (quickInquireForm) {
    quickInquireForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const submitBtn = quickInquireForm.querySelector('button[type="submit"]');
      if (submitBtn) {
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = 'Sending Inquiry... ⏳';
        submitBtn.disabled = true;

        setTimeout(() => {
          submitBtn.innerHTML = 'Inquiry Sent Successfully! ✓';
          submitBtn.style.background = 'var(--color-accent-green)';
          
          setTimeout(() => {
            closeInquireDrawer();
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
            submitBtn.style.background = '';
            quickInquireForm.reset();
            alert('Thank you for reaching out! Prabhu\'s Flutes team will contact you shortly.');
          }, 1000);
        }, 800);
      }
    });
  }

  /* ==========================================================================
     3. STICKY HEADER SCROLL EFFECT
     ========================================================================== */
  const header = document.getElementById('site-header');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      header.style.boxShadow = 'var(--shadow-md)';
    } else {
      header.style.boxShadow = 'none';
    }
  });
});
