document.addEventListener('DOMContentLoaded', () => {
  const allStar = document.querySelectorAll('.rating .star');
  const ratingInput = document.querySelector('input[name="rating"]');
const profileInput = document.getElementById('profileInput');
const fileChosen = document.getElementById('file-chosen');

  let currentRating = 0;

profileInput.addEventListener('change', () => {
  if (profileInput.files.length > 0) {
    fileChosen.textContent = profileInput.files[0].name;
  } else {
    fileChosen.textContent = "No file chosen";
  }
});

  function updateStars(rating) {
    allStar.forEach((star, index) => {
      if (index < rating) {
        star.classList.add('active');
        star.classList.remove('bx-star');
        star.classList.add('bxs-star');
      } else {
        star.classList.remove('active');
        star.classList.remove('bxs-star');
        star.classList.add('bx-star');
      }
    });
  }

  allStar.forEach((star, index) => {
    star.addEventListener('click', () => {
      currentRating = index + 1;
      ratingInput.value = currentRating;
      updateStars(currentRating);
    });

    star.addEventListener('mouseover', () => {
      updateStars(index + 1);
    });

    star.addEventListener('mouseout', () => {
      updateStars(currentRating);
    });
  });

  updateStars(0);
});