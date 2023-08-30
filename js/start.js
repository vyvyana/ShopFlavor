window.addEventListener("load", function () {
  const text = document.querySelector(".text");
  text.addEventListener("mouseenter", function () {
    const template = `<div class="tooltip">
    <ul class="mega-sub-menu"> 
      <li class="mega-sub-item"> <a class="mega-sub-link" href="./lime.html"><img class="mega-sub-img" src="./images/sub-menu/a1.png" role="presentation"/><span>GRAPEFRUIT LIME</span></a></li>
      <li class="mega-sub-item"> <a class="mega-sub-link" href="./mango.html"><img class="mega-sub-img" src="./images/sub-menu/a2.png" role="presentation"/><span>MANGO CHILI</span></a></li>
      <li class="mega-sub-item"> <a class="mega-sub-link" href="./watermelon.html"><img class="mega-sub-img" src="./images/sub-menu/a3.png" role="presentation"/><span>WATERMELON JALAPENO</span></a></li>
      <li class="mega-sub-item"> <a class="mega-sub-link" href="./ginger.html"><img class="mega-sub-img" src="./images/sub-menu/a4.png" role="presentation"/><span>GINGER MANZANA</span></a></li>
      <li class="mega-sub-item"> <a class="mega-sub-link" href="./pineapple.html"><img class="mega-sub-img" src="./images/sub-menu/a5.png" role="presentation"/><span>CACTUS PRICKLY PEAR</span></a></li>
      <li class="mega-sub-item"> <a class="mega-sub-link" href="./tamarind.html"><img class="mega-sub-img" src="./images/sub-menu/a6.png" role="presentation"/><span>TAMARIND CITRUS</span></a></li>
      <li class="mega-sub-item"> <a class="mega-sub-link" href="./chamoy.html"><img class="mega-sub-img" src="./images/sub-menu/a7.png" role="presentation"/><span>CHAMOY</span></a></li>
      <li class="mega-sub-item"> <a class="mega-sub-link" href="./orange.html"><img class="mega-sub-img" src="./images/sub-menu/a8.png" role="presentation"/><span>ORANGE TURMERIC</span></a></li>
    </ul>
  </div>`;
    text.insertAdjacentHTML("beforeend", template);
  });
  text.addEventListener("mouseleave", function () {
    const tooltip = document.querySelector(".tooltip");
    if (!tooltip) return;
    tooltip.parentNode.removeChild(tooltip);
  });
});
