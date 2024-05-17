function toggleSidebar() {
  var sidebar = document.querySelector(".sidebar");
  var menuIcon = document.querySelector("#menuIcon");

  sidebar.classList.toggle("left-0");
  sidebar.classList.toggle("left-[-300px]");

  // Change the menu icon based on sidebar visibility
  menuIcon.innerHTML = sidebar.classList.contains("left-0") ? '<img src="../Image/close.png" width="30" alt="">' : '<img src="../Image/menu.png" width="30" alt="">';

  // Adjust the transform property to translate the menu icon
  menuIcon.style.transform = sidebar.classList.contains("left-0") ? "translateX(250px)" : "translateX(0)";
}

function toggleDropdown() {
  var submenu = document.querySelector("#submenu");
  var arrowIcon = document.querySelector("#arrow");

  submenu.classList.toggle("hidden");
  arrowIcon.classList.toggle("rotate-0");
}
