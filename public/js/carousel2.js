document.addEventListener("DOMContentLoaded", function () {
  const container2 = document.querySelector(".carousel-container2");
  const images2 = document.querySelector(".carousel-images2");

  let currentIndex = 0;

  function showImage(index) {
    const imageWidth = document.querySelector(".carousel-image2").clientWidth;
    images2.style.transform = `translateX(${-index * imageWidth}px)`;
  }

  function nextImage() {
    currentIndex = (currentIndex + 1) % images2.children.length;
    showImage(currentIndex);
  }

  function prevImage() {
    currentIndex = (currentIndex - 1 + images2.children.length) % images2.children.length;
    showImage(currentIndex);
  }

  setInterval(nextImage, 3000); // Berganti gambar setiap 3 detik
});
