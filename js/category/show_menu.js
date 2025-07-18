const show_more_btn = document.querySelectorAll(".category-left-filters .show-more");

show_more_btn.forEach((e) => {
    e.addEventListener("click", () => {
        e.nextElementSibling.classList.add('show');
        e.classList.add('hide');
    });
});

const show_filters_btn = document.querySelector('.category-left-filters-box__button');
const filters_box = document.querySelector(".category-left-filters");
const btn_img = document.querySelector(".category-left-filters-box__button img");

show_filters_btn.addEventListener('click', () => {
    filters_box.classList.toggle('show');
    btn_img.classList.toggle('rotate');
});

document.addEventListener("DOMContentLoaded", function () {
  const toggleButtons = document.querySelectorAll(".expand-hidden-checkboxes-btn");

  toggleButtons.forEach(function (toggleBtn) {
    const contentContainer = toggleBtn.closest(".content");
    if (contentContainer) {
      const checkboxContainer = contentContainer.querySelector(".hidden-checkboxes");

      if (checkboxContainer) {
        toggleBtn.addEventListener("click", function () {
          checkboxContainer.classList.toggle("show-checkboxes");

          if (checkboxContainer.classList.contains("show-checkboxes")) {
            toggleBtn.textContent = "Zwiń...";
          } else {
            toggleBtn.textContent = "Pokaż więcej...";
          }
        });
      }
    }
  });
});