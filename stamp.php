<div class="snow-beef-circle">
  <svg id="circleText" class="circle-text-svg" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
    <defs>
      <path id="topArc" d="M 20,100 A 80,80 0 1,1 180,100" />
      <path id="bottomArc" d="M 180,100 A 80,80 0 1,1 20,100" />
    </defs>
    <text font-size="13.5" fill="white" font-family="Arial, sans-serif" font-weight="700" letter-spacing="3">
      <textPath href="#topArc" startOffset="50%" text-anchor="middle">! COMPANY PORTFOLIO</textPath>
    </text>
    <text font-size="13.5" fill="white" font-family="Arial, sans-serif" font-weight="700" letter-spacing="3">
      <textPath href="#bottomArc" startOffset="50%" text-anchor="middle">¡ COMPANY PORTFOLIO</textPath>
    </text>
  </svg>
  <img class="cow-icon" alt="cow icon" src="assets/images/logo/removal-snow-beef.png"/>
</div>

<script>
  const circle = document.getElementById("circleText");

  window.addEventListener("scroll", () => {
    let scrollY = window.scrollY;

    let rotate = scrollY * 0.2;

    circle.style.transform = `rotate(${rotate}deg)`;
  });
</script>