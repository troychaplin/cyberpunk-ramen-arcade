// :::SECTION:Header Scroll Effect:::
const header = document.querySelector('.hero-nav');

if (header) {
  let ticking = false;

  window.addEventListener('scroll', () => {
    if (!ticking) {
      window.requestAnimationFrame(() => {
        if (window.pageYOffset > 100) {
          header.classList.add('is-scrolled');
        } else {
          header.classList.remove('is-scrolled');
        }
        ticking = false;
      });
      ticking = true;
    }
  }, { passive: true });
}

// :::SECTION:Smooth Scrolling:::
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    const targetId = this.getAttribute('href');
    if (targetId === '#' || targetId === '#home') {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: 'smooth' });
      return;
    }
    
    const target = document.querySelector(targetId);
    if (target) {
      e.preventDefault();
      const navHeight = header ? header.offsetHeight : 0;
      const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - navHeight;
      
      window.scrollTo({
        top: targetPosition,
        behavior: 'smooth'
      });
    }
  });
});

// :::SECTION:Scroll Animations:::
const animatedElements = document.querySelectorAll('.animate-on-scroll');

if (animatedElements.length > 0) {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  });

  animatedElements.forEach(el => observer.observe(el));
}

// :::SECTION:Glitch Effect:::
// Random subtle glitch on the hero headline
const heroHeadline = document.querySelector('.hero-headline');

if (heroHeadline) {
  const glitchChars = '█▓▒░╗╝╚╗║═';

  function triggerGlitch() {
    heroHeadline.style.transform = `translateX(${(Math.random() - 0.5) * 3}px)`;
    heroHeadline.style.textShadow = `
      ${(Math.random() - 0.5) * 4}px 0 rgba(0,229,255,0.5),
      ${(Math.random() - 0.5) * 4}px 0 rgba(255,45,123,0.5)
    `;

    setTimeout(() => {
      heroHeadline.style.transform = '';
      heroHeadline.style.textShadow = '';
    }, 80);
  }

  // Random glitch every 3-8 seconds
  function scheduleGlitch() {
    const delay = 3000 + Math.random() * 5000;
    setTimeout(() => {
      triggerGlitch();
      scheduleGlitch();
    }, delay);
  }

  scheduleGlitch();
}

// :::SECTION:Blog Card Hover Effect:::
// Add scanline sweep effect on blog card hover
const blogCards = document.querySelectorAll('.blog-grid .blog-card');

blogCards.forEach(card => {
  card.addEventListener('mouseenter', function() {
    this.style.setProperty('--mouse-x', '0%');
    requestAnimationFrame(() => {
      this.style.setProperty('--mouse-x', '100%');
    });
  });
});

// :::SECTION:Cursor Typing Effect:::
// Simulate typing in the hero tag
const heroTag = document.querySelector('.hero-tag');

if (heroTag) {
  const tagText = heroTag.textContent.trim();
  const cursor = heroTag.querySelector('.hero-tag-cursor');
  
  // After initial load animation, occasionally "retype" the tag
  let retypeTimeout;
  
  function initRetypeLoop() {
    retypeTimeout = setTimeout(() => {
      // Just pulse the cursor faster briefly
      if (cursor) {
        cursor.style.animation = 'heroBlink 0.15s steps(1) infinite';
        setTimeout(() => {
          cursor.style.animation = 'heroBlink 1s steps(1) infinite';
        }, 2000);
      }
      initRetypeLoop();
    }, 8000 + Math.random() * 12000);
  }
  
  // Start after hero animations complete
  setTimeout(initRetypeLoop, 3000);
}

// :::SECTION:Stats Counter Animation:::
function animateCounter(element, target, suffix = '') {
  const duration = 1500;
  const start = 0;
  const startTime = performance.now();
  
  function update(currentTime) {
    const elapsed = currentTime - startTime;
    const progress = Math.min(elapsed / duration, 1);
    
    // Easing: ease-out cubic
    const eased = 1 - Math.pow(1 - progress, 3);
    const current = Math.round(start + (target - start) * eased);
    
    element.textContent = current + suffix;
    
    if (progress < 1) {
      requestAnimationFrame(update);
    }
  }
  
  requestAnimationFrame(update);
}

// Observe stat elements
const statElements = document.querySelectorAll('.about-stat__number');

if (statElements.length > 0) {
  const statsObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const el = entry.target;
        const text = el.textContent;
        const match = text.match(/(\d+)(\+?)/);
        
        if (match) {
          const num = parseInt(match[1]);
          const suffix = match[2];
          animateCounter(el, num, suffix);
        }
        
        statsObserver.unobserve(el);
      }
    });
  }, {
    threshold: 0.5
  });

  statElements.forEach(el => statsObserver.observe(el));
}

// :::SECTION:Active Nav Highlighting:::
const sections = document.querySelectorAll('section[id]');
const navLinks = document.querySelectorAll('.hero-nav-links a');

if (sections.length > 0 && navLinks.length > 0) {
  const navObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const id = entry.target.getAttribute('id');
        navLinks.forEach(link => {
          if (link.getAttribute('href') === `#${id}`) {
            link.style.color = '#ff2d7b';
          } else {
            link.style.color = '';
          }
        });
      }
    });
  }, {
    threshold: 0,
    rootMargin: '-30% 0px -70% 0px'
  });

  sections.forEach(section => navObserver.observe(section));
}

// :::SECTION:Tech Stack Hover Glow:::
const stackItems = document.querySelectorAll('.about-stack__item');

stackItems.forEach(item => {
  item.addEventListener('mouseenter', function() {
    // Randomly assign neon color on hover
    const colors = [
      { color: '#00e5ff', shadow: 'rgba(0,229,255,0.12)' },
      { color: '#ff2d7b', shadow: 'rgba(255,45,123,0.12)' },
      { color: '#39ff14', shadow: 'rgba(57,255,20,0.12)' }
    ];
    const pick = colors[Math.floor(Math.random() * colors.length)];
    this.style.color = pick.color;
    this.style.borderColor = pick.color;
    this.style.boxShadow = `0 0 12px ${pick.shadow}, inset 0 0 12px ${pick.shadow}`;
  });
  
  item.addEventListener('mouseleave', function() {
    this.style.color = '';
    this.style.borderColor = '';
    this.style.boxShadow = '';
  });
});
