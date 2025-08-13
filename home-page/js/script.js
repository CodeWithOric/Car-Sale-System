// Navbar toggle
let menubar = document.querySelector('#menubar');
let navbar = document.querySelector('.navbar');

menubar.onclick = () => {
  menubar.classList.toggle('fa-xmark');
  navbar.classList.toggle('active');
};

// Scroll behavior
window.onscroll = () => {
  if (window.scrollY > 0) {
    document.querySelector('.header').classList.add("active");
  } else {
    document.querySelector('.header').classList.remove("active");
  }

  menubar.classList.remove('fa-xmark');
  navbar.classList.remove('active');
};

window.onload = () => {
  if (window.scrollY > 0) {
    document.querySelector('.header').classList.add("active");
  } else {
    document.querySelector('.header').classList.remove("active");
  }
};

// Home parallax
document.querySelector('.home').onmousemove = (e) => {
  document.querySelectorAll('.home-parallax').forEach(element => {
    let speed = element.getAttribute('data-speed');
    let x = (window.innerWidth - e.pageX * speed) / 90;
    let y = (window.innerHeight - e.pageY * speed) / 90;
    element.style.transform = `translateX(${y}px) translateY(${x}px)`;
  });
};

document.querySelector('.home').onmouseleave = () => {
  document.querySelectorAll('.home-parallax').forEach(element => {
    element.style.transform = `translateX(0px) translateY(0px)`;
  });
};

// Vehicle Slider
let wrapper = document.querySelector('.wrapper-box').parentElement;
let nextBtn = document.getElementById('next');
let prevBtn = document.getElementById('prev');
let indexNo = 0;

let totalSlides = document.querySelectorAll('.wrapper-box').length;
let activelabe = document.querySelectorAll('.activeCircle i');

function changeBox() {
  if (indexNo < 0) indexNo = totalSlides - 1;
  if (indexNo >= totalSlides) indexNo = 0;

  activelabe.forEach(dot => dot.classList.remove('fa-solid'));
  activelabe[indexNo].classList.add('fa-solid');
}

nextBtn.onclick = () => {
  indexNo++;
  changeBox();
};

prevBtn.onclick = () => {
  indexNo--;
  changeBox();
};

changeBox();

// Swiper Slider
var swiper = new Swiper(".review-slider", {
  loop: true,
  grabCursor: true,
  spaceBetween: 20,
  autoplay: {
    delay: 7500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    0: { slidesPerView: 1 },
    768: { slidesPerView: 2 },
    991: { slidesPerView: 3 },
  },
});