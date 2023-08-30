const accordionHeaders = document.querySelectorAll(".accordion-header");
[...accordionHeaders].forEach((item) =>
  item.addEventListener("click", handleClickAccordion)
);
function handleClickAccordion(e) {
  e.target.nextElementSibling.classList.toggle("active");
  e.target.children[1].classList.toggle("down");
  const content = e.target.nextElementSibling;
  content.style.height = `${content.scrollHeight}px`;
  if (!content.classList.contains("active")) {
    content.style.height = "0px";
  }
}
