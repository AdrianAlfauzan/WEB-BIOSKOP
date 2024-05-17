const animasiteks = document.getElementById("typing-container");
const konten = "Jelajahi Dunia Fantasi Kami, Hiburan Tanpa Batas di Setiap Tampilan.";

function typing(text, index) {
  if (index < text.length) {
    animasiteks.innerHTML += `<span class="text-gradientC">${text.charAt(index)}</span>`;
    setTimeout(() => typing(text, index + 1), 100);
  } else {
    // Menunggu selama 3 detik sebelum memulai kembali animasi
    setTimeout(() => {
      animasiteks.innerHTML = "";
      setTimeout(() => typing(konten, 0), 1000);
    }, 3000);
  }
}

// Menjalankan fungsi typing setelah delay
setTimeout(() => typing(konten, 0), 2000);
