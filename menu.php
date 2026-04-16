<section class="menu-section">
    <div class="product">
        <p class="gold suravaram uppercase">OUR SNOW BEEF</p>
        <h1 class="ibmthai white">ผลิตภัณฑ์ของเรา</h1>
        <p class="white subtitle">
            เนื้อส่วน สันใน, ริบอาย, สันนอก, เซอร์ลอยด์ และชัคโรลกระดับด้วยนวัตกรรมแทรกไขมัน<br>
            เอกสิทธิ์เพื่อสัมผัสนุ่มละมุนดุจเนยและรสชาติที่เข้มข้นสม่ำเสมอในทุกชิ้น
        </p>

        <div class="btn-group">
            <a href="#" class="explore-btn btn-outline outfit">
                Our Product 
                <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 6H17 M17 6L21 2L25 6L21 10Z" stroke="currentColor" stroke-width="1" stroke-linejoin="miter"/>
                </svg>
            </a>
            <a href="#" class="explore-btn btn-red outfit">
                Download Catalog 
                <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 6H17 M17 6L21 2L25 6L21 10Z" stroke="currentColor" stroke-width="1" stroke-linejoin="miter"/>
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
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#C9A84C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2"/>
                        <path d="M7 2v20"/>
                        <path d="M21 15V2v0a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7"/>
                    </svg>
                </div>

                <p class="menu-desc">"<?= htmlspecialchars($menu->description) ?>"</p>

                <img src="<?= htmlspecialchars($menu->imageUrl) ?>"
                     alt="<?= htmlspecialchars($menu->title) ?>"
                     class="menu-image">
            </div>
        <?php endforeach; ?>
    </div>

    <div class="carousel-nav">
        <span class="nav-arrow prev">
            <svg width="10" height="18" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2L2 12L12 22" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </span>

        <div class="nav-dots"></div>

        <span class="nav-arrow next">
            <svg width="10" height="18" viewBox="0 0 14 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 2L12 12L2 22" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
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
            const maxScroll = track.scrollWidth - track.clientWidth;
            track.scrollBy({
                left: Math.min(getCardWidth(), maxScroll - track.scrollLeft),
                behavior: 'smooth'
            });
        });
    });
</script>