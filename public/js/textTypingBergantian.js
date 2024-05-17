const texts = ["Curious?", "Want to learn programming?", "Start from here."];

let count = 0;
let index = 0;
let currentText = "";
let letter;

function type() {
  currentText = texts[count];
  letter = currentText.slice(0, ++index);

  document.getElementById("text1").textContent = letter;

  if (letter.length === currentText.length) {
    setTimeout(() => {
      index = 0;
      count = (count + 1) % texts.length; // Use modulo to loop through texts
      type();
    }, 1500); // Adjust the pause duration between texts here
  } else {
    setTimeout(type, 60); // Adjust typing speed here
  }
}

type();
