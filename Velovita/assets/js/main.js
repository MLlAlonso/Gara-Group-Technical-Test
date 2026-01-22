// ===============================
// MAIN.JS
// ===============================

// Espera a que el DOM esté cargado
document.addEventListener("DOMContentLoaded", () => {

  /* ===============================
     HEADER SCROLL
  ================================ */
  const header = document.querySelector("header");
  if (header) {
    window.addEventListener("scroll", () => {
      header.classList.toggle("scrolled", window.scrollY > 40);
    });
  }

  /* ===============================
     PRODUCTS ROTATION
  ================================ */
  const productItems = document.querySelectorAll(".product-item");
  const productMainImage = document.getElementById("product-main-image");

  if (productItems.length && productMainImage) {
    let currentIndex = 0;
    let interval;

    const activateProduct = (index) => {
      productItems.forEach(item => item.classList.remove("active"));
      const item = productItems[index];
      item.classList.add("active");
      productMainImage.src = item.getAttribute("data-image");
      currentIndex = index;
    };

    const startRotation = () => {
      interval = setInterval(() => {
        activateProduct((currentIndex + 1) % productItems.length);
      }, 4000);
    };

    productItems.forEach((item, i) => {
      item.addEventListener("click", () => {
        clearInterval(interval);
        activateProduct(i);
        startRotation();
      });
    });

    startRotation();
  }

  /* ===============================
     TEAM CAROUSEL
  ================================ */
  const track = document.querySelector(".carousel-track");
  const dots = document.querySelectorAll(".carousel-dots .dot");

  if (track && dots.length) {
    let index = 0;
    const total = dots.length;

    const updateCarousel = (i) => {
      track.style.transform = `translateX(-${i * 100}%)`;
      dots.forEach(dot => dot.classList.remove("active"));
      dots[i].classList.add("active");
      index = i;
    };

    dots.forEach((dot, i) => {
      dot.addEventListener("click", () => updateCarousel(i));
    });

    setInterval(() => {
      updateCarousel((index + 1) % total);
    }, 4000);
  }

  /* ===============================
   MODAL
=============================== */
  const modal = document.getElementById("promo-modal");
  const modalClose = modal?.querySelector(".modal-close");
  const modalOverlay = modal?.querySelector(".modal-overlay");

  // Función para abrir modal después de 3s
  if (modal) {
    setTimeout(() => {
      modal.classList.add("active");
    }, 3000);

    const closeModal = () => modal.classList.remove("active");

    modalClose?.addEventListener("click", closeModal);
    modalOverlay?.addEventListener("click", closeModal);
  }


});
