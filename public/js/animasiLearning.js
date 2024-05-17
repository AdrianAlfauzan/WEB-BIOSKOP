const animatedText = document.getElementById("animated-text");
const textContent = "Let's learning TailwindCSS!";

function typeWriter(text, index) {
  if (index < text.length) {
    animatedText.innerHTML += `<span class="text-gradient">${text.charAt(index)}</span>`;
    setTimeout(() => typeWriter(text, index + 1), 100);
  } else {
    // Menunggu selama 3 detik sebelum memulai kembali animasi
    // setTimeout(() => {
    //   animatedText.innerHTML = "";
    //   setTimeout(() => typeWriter(textContent, 0), 1000);
    // }, 3000);
  }
}

// Menjalankan fungsi typeWriter setelah delay
setTimeout(() => typeWriter(textContent, 0), 2000);
