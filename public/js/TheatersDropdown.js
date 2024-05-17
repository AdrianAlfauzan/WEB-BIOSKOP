document.getElementById("theatersDropdown").addEventListener("click", toggleTheatersDropdown);

function toggleTheatersDropdown() {
  var theatersOptions = document.getElementById("theatersOptions");
  theatersOptions.classList.toggle("hidden");
}
