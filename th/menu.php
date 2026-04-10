<section class="menu-section">
    <div class="product">
        <p class="gold suravaram">OUR PRODUCT</p>
        <h1 class="ibmthai white">ผลิตภัณฑ์ของเรา</h1>
        <p class="white">
            เนื้อส่วน สันใน, ริบอาย, สันนอก, เซอร์ลอยด์ และชัคโรล
            ยกระดับด้วยนวัตกรรมแทรกไขมัน
        </p>

        <div>
            <a href="#" class="explore-btn outfit">Explore Our Product</a>
            <a href="#" class="explore-btn outfit">Why Snowbeef?</a>
        </div>
    </div>

    <div class="carousel-track">
        <?php foreach ($menus as $menu): ?>
            <div class="menu-card">
                <p class="menu-label outfit"><?= htmlspecialchars($menu->label) ?></p>
                <h3 class="menu-title"><?= htmlspecialchars($menu->title) ?></h3>

                <div class="menu-divider">
                    <hr>
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"><path fill="#FED488" d="M14 2h-2v7h-2V2H8v7H6V2H4v8c0 1.65 1.35 3 3 3h1v9h2v-9h1c1.65 0 3-1.35 3-3zm3 11h1v9h2V3c0-.55-.45-1-1-1c-1.65 0-3 1.35-3 3v7c0 .55.45 1 1 1"/></svg>
                </div>

                <p class="menu-desc"><?= htmlspecialchars($menu->description) ?></p>

                <img src="<?= htmlspecialchars($menu->imageUrl) ?>"
                     alt="<?= htmlspecialchars($menu->title) ?>"
                     class="menu-image">
            </div>
        <?php endforeach; ?>
    </div>

    <div class="carousel-nav">
        <span class="nav-arrow prev">&#10094;</span>
        <div class="nav-dots"></div>
        <span class="nav-arrow next">&#10095;</span>
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
            const maxScroll = track.scrollWidth - track.clientWidth;

            track.scrollBy({
                left: Math.min(getCardWidth(), maxScroll - track.scrollLeft),
                behavior: 'smooth'
            });
        });

    });
</script>