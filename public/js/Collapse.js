const accordionHeaders = document.querySelectorAll(".accordion-header");

accordionHeaders.forEach((accordionHeader) => {
  accordionHeader.addEventListener("click", (event) => {
    accordionHeader.classList.toggle("active");
    const accordionBody = accordionHeader.nextElementSibling;

    // Perbaikan pada kondisi, seharusnya "active" bukan "actibe"
    if (accordionHeader.classList.contains("active")) {
      accordionBody.style.maxHeight = accordionBody.scrollHeight + "px";
    } else {
      accordionBody.style.maxHeight = 0;
    }
  });
});
