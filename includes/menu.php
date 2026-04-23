<section class="menu-section">
    <div class="product-meats-img">
        <img src="assets/images/menu/meat-1.webp" class="meat-left" alt="meat">
        <img src="assets/images/melting-behavior-transparency.webp" class="meat-right" alt="meat">
    </div>

    <div class="product">
        <p class="gold uppercase">OUR SNOW BEEF</p>
        <h2 class="text-h2 font-medium text-white ibmthai">ผลิตภัณฑ์ของเรา</h2>
        <h3 class="text-h3 font-light text-white">
            เนื้อส่วน สันใน, ริบอาย, สันนอก, เซอร์ลอยด์ และชัคโรลกระดับด้วยนวัตกรรมแทรกไขมัน
            เอกสิทธิ์เพื่อสัมผัสนุ่มละมุนดุจเนยและรสชาติที่เข้มข้นสม่ำเสมอในทุกชิ้น
        </h3>

        <div class="btn-group">
            <a href="our-product.php" class="explore-btn text-body btn-outline btn-white outfit">
                Our Product
                <svg width="26" height="12" viewBox="0 0 26 12" fill="none">
                    <path d="M1 6H17 M17 6L21 2L25 6L21 10Z" stroke="currentColor" stroke-width="1"/>
                </svg>
            </a>

            <a href="#" class="explore-btn text-body btn-red outfit">
                Download Catalog
                <svg width="26" height="12" viewBox="0 0 26 12" fill="none">
                    <path d="M1 6H17 M17 6L21 2L25 6L21 10Z" stroke="currentColor" stroke-width="1"/>
                </svg>
            </a>
        </div>
    </div>

    <div class="carousel-track">
        <?php foreach (array_slice($menus, 0, 5) as $menu): ?>
            <div class="menu-card">
                <p class="menu-label outfit"><?= htmlspecialchars($menu->label) ?></p>
                <h3 class="menu-title times-new-roman"><?= htmlspecialchars($menu->title) ?></h3>

                <div class="menu-divider">
                    <hr>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#C9A84C" stroke-width="1.5">
                        <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2"/>
                        <path d="M7 2v20"/>
                        <path d="M21 15V2a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7"/>
                    </svg>
                </div>

                <p class="menu-desc newsreader">"<?= htmlspecialchars($menu->description) ?>"</p>

                <img src="<?= htmlspecialchars($menu->imageUrl) ?>" class="menu-image" alt="meat">
            </div>
        <?php endforeach; ?>
    </div>

    <div class="carousel-nav">
        <span class="nav-arrow prev">
            <svg width="10" height="18" viewBox="0 0 14 24" fill="none">
                <path d="M12 2L2 12L12 22" stroke="white" stroke-width="3"/>
            </svg>
        </span>

        <div class="nav-dots"></div>

        <span class="nav-arrow next">
            <svg width="10" height="18" viewBox="0 0 14 24" fill="none">
                <path d="M2 2L12 12L2 22" stroke="white" stroke-width="3"/>
            </svg>
        </span>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const track = document.querySelector('.carousel-track');
    const cards = document.querySelectorAll('.menu-card');
    const dotsContainer = document.querySelector('.nav-dots');
    const prev = document.querySelector('.prev');
    const next = document.querySelector('.next');

    if (!track || cards.length === 0) return;

    const gap = parseInt(getComputedStyle(track).gap) || 0;
    const getCardWidth = () => cards[0].offsetWidth + gap;

    cards.forEach((_, index) => {
        const dot = document.createElement('span');
        dot.classList.add('dot');
        if (index === 0) dot.classList.add('active');

        dot.addEventListener('click', () => {
            track.scrollTo({
                left: index * getCardWidth(),
                behavior: 'smooth'
            });
        });

        dotsContainer.appendChild(dot);
    });

    track.addEventListener('scroll', () => {
        const index = Math.round(track.scrollLeft / getCardWidth());
        document.querySelectorAll('.dot').forEach(dot => dot.classList.remove('active'));
        if (dotsContainer.children[index]) {
            dotsContainer.children[index].classList.add('active');
        }
    });

    prev.addEventListener('click', () => {
        track.scrollBy({
            left: -getCardWidth(),
            behavior: 'smooth'
        });
    });

    next.addEventListener('click', () => {
        track.scrollBy({
            left: getCardWidth(),
            behavior: 'smooth'
        });
    });
});
</script>