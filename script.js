// Sélection des boutons
const desktopBtn = document.querySelector('#toggleMode-desktop');
const mobileBtn = document.querySelector('#toggleMode-mobile');

// Crée les icônes
const desktopIcon = document.createElement('img');
desktopBtn.appendChild(desktopIcon);

const mobileIcon = document.createElement('img');
mobileBtn.appendChild(mobileIcon);

function applyMode(mode) {
  if (mode === 'dark') {
    document.body.classList.add('dark-mode');
    desktopIcon.src = 'icones/moon.svg';
    mobileIcon.src = 'icones/sun.svg';
    mobileBtn.style.backgroundColor = '#121212';
  } else {
    document.body.classList.remove('dark-mode');
    desktopIcon.src = 'icones/sun.svg';
    mobileIcon.src = 'icones/moon.svg';
    mobileBtn.style.backgroundColor = '#f4f4f4';
  }
}

// Charger le mode enregistré ou préférences système
const savedMode = localStorage.getItem('mode');
if (savedMode) {
  applyMode(savedMode);
} else if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
  applyMode('dark');
}

// Basculer le mode au clic
[desktopBtn, mobileBtn].forEach(btn => {
  btn.addEventListener('click', () => {
    const newMode = document.body.classList.contains('dark-mode') ? 'light' : 'dark';
    applyMode(newMode);
    localStorage.setItem('mode', newMode);
  });
});

// Tout le reste quand le DOM est prêt
document.addEventListener("DOMContentLoaded", () => {
  // Animation des skills
  const skills = document.querySelectorAll('.skill');
  const skillsObserver = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        obs.unobserve(entry.target);
      }
    });
  }, { threshold: 0.3 });
  skills.forEach(skill => skillsObserver.observe(skill));

  // Animation des icônes tech
  const sections = document.querySelectorAll(".techicons");
  const iconsObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      const icons = entry.target.querySelectorAll("svg");
      if (entry.isIntersecting) {
        icons.forEach((icon, index) => {
          setTimeout(() => {
            icon.classList.add("visible");
          }, index * 200);
        });
      } else {
        icons.forEach(icon => icon.classList.remove("visible"));
      }
    });
  }, { threshold: 0.2 });
  sections.forEach(section => iconsObserver.observe(section));

  // Animation des projets
  const projects = document.querySelectorAll(".project");
  const projectsObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible");
      } else {
        entry.target.classList.remove("visible");
      }
    });
  }, { threshold: 0.1 });
  projects.forEach(project => projectsObserver.observe(project));

  // Ajout des liens "Voir le projet"
  document.querySelectorAll(".project").forEach(article => {
    const link = article.querySelector("a");
    if (link) {
      const fullLink = link.cloneNode();
      fullLink.classList.add("full-link");
      fullLink.textContent = "Voir le projet";
      article.appendChild(fullLink);
    }
  });

  // Carrousel
  const slides = document.querySelectorAll('.carousel-images .slides img');
  const prevBtn = document.querySelector('.carousel-wrapper .prev');
  const nextBtn = document.querySelector('.carousel-wrapper .next');

  if (slides.length && prevBtn && nextBtn) {
    let currentIndex = 0;

    function showSlide(index) {
      if (index < 0) index = slides.length - 1;
      if (index >= slides.length) index = 0;
      currentIndex = index;

      slides.forEach((img, i) => {
        img.classList.toggle('active', i === index);
      });
    }

    prevBtn.addEventListener('click', () => showSlide(currentIndex - 1));
    nextBtn.addEventListener('click', () => showSlide(currentIndex + 1));

    showSlide(0);
  }

  // Récupère l'URL courante (ex: "/projets.php")
  const currentPage = window.location.pathname.split("/").pop();

  // Sélectionne tous les liens de menu (desktop + mobile)
  const menuLinks = document.querySelectorAll("nav a, .menu-mobile a");

  menuLinks.forEach(link => {
    const linkPage = link.getAttribute("href");

    // Vérifie si l'URL correspond
    if (linkPage === currentPage) {
      link.classList.add("active");
    }
  });
});