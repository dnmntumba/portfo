/* =========================
   NAVBAR SCROLL EFFECT
========================= */

window.addEventListener("scroll", function () {

  const navbar = document.querySelector(".navbar");

  navbar.classList.toggle(
    "scrolled",
    window.scrollY > 50
  );

});


/* =========================
   FILTER PROJECTS
========================= */

function showCategory(categoryId, element) {

  const categories =
  document.querySelectorAll(".projects-category");

  categories.forEach(category => {
    category.classList.remove("active-category");
  });

  const buttons =
  document.querySelectorAll(".filter-btn");

  buttons.forEach(btn => {
    btn.classList.remove("active");
  });

  document
  .getElementById(categoryId)
  .classList.add("active-category");

  element.classList.add("active");

}


/* =========================
   VIDEO PLAY SYSTEM
========================= */

function playVideo(button) {

  const wrapper = button.parentElement;

  const video = wrapper.querySelector(".project-video");

  const thumbnail = wrapper.querySelector(".video-thumb");

  // STOP toutes les vidéos
  document.querySelectorAll(".project-video").forEach(v => {

    if (v !== video) {

      v.pause();
      v.currentTime = 0;

      v.classList.remove("active-video");

      const parent = v.parentElement;

      parent.classList.remove("playing");

    }

  });

  // lancer vidéo
  wrapper.classList.add("playing");

  video.classList.add("active-video");

  video.style.display = "block";

  thumbnail.style.display = "none";

  button.style.display = "none";

  video.play();

video.classList.add("loaded");

}


/* =========================
   VIDEO END RESET
========================= */

document.querySelectorAll(".project-video").forEach(video => {

  video.addEventListener("ended", function () {

    const wrapper = video.parentElement;

    const thumbnail = wrapper.querySelector(".video-thumb");

    const button = wrapper.querySelector(".play-button");

    wrapper.classList.remove("playing");

    video.classList.remove("active-video");

    video.style.display = "none";

    thumbnail.style.display = "block";

    button.style.display = "flex";

  });

});


/* =========================
   POPUP CONTACT
========================= */

function openPopup() {

  document
    .getElementById("popup")
    .classList.add("active");

}

function closePopup() {

  document
    .getElementById("popup")
    .classList.remove("active");

}


/* =========================
   CLOSE POPUP OUTSIDE
========================= */

window.addEventListener("click", function(e){

  const popup = document.getElementById("popup");

  if(e.target === popup){

    popup.classList.remove("active");

  }

});


/* =========================
   AJAX CONTACT FORM
========================= */

const form = document.getElementById("contactForm");

if(form){

  form.addEventListener("submit", function(e){

    e.preventDefault();

    const formStatus = document.getElementById("formStatus");

    const statusText = document.getElementById("statusText");

    const loader = document.getElementById("loader");

    formStatus.classList.add("active");

    statusText.innerHTML = "Envoi en cours...";

    loader.style.display = "block";

    const formData = new FormData(form);

    fetch("send.php", {

      method: "POST",

      body: formData

    })

    .then(response => response.text())

    .then(data => {

      loader.style.display = "none";

      statusText.innerHTML = "Message envoyé avec succès !";

      statusText.classList.add("success");

      form.reset();

      setTimeout(() => {

        closePopup();

        formStatus.classList.remove("active");

        statusText.classList.remove("success");

      }, 2500);

    })

    .catch(error => {

      loader.style.display = "none";

      statusText.innerHTML = "Erreur lors de l'envoi.";

    });

  });

}


/* =========================
   COUNTER ANIMATION
========================= */

const counters = document.querySelectorAll(".counter");

const speed = 200;

const startCounters = () => {

  counters.forEach(counter => {

    const updateCount = () => {

      const target = +counter.getAttribute("data-target");

      const count = +counter.innerText;

      const increment = target / speed;

      if(count < target){

        counter.innerText = Math.ceil(count + increment);

        setTimeout(updateCount, 15);

      }else{

        counter.innerText = target;

      }

    };

    updateCount();

  });

};


/* =========================
   COUNTER ON SCROLL
========================= */

let counterStarted = false;

window.addEventListener("scroll", () => {

  const statsSection = document.getElementById("stats");

  const sectionTop = statsSection.offsetTop - 300;

  if(window.scrollY > sectionTop && !counterStarted){

    startCounters();

    counterStarted = true;

  }

});