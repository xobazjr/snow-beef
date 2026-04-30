<!DOCTYPE html>
<html lang="th">
<head>
    <title>Our Product - Snow Beef Thailand</title>
    <?php include 'includes/head.php'; ?>
</head>
<body>
    <?php include 'includes/glass-button.php'; ?>
    <?php include 'includes/navbar.php'; ?>
    <main class="b-black">
        <section class="our-product-home w-full">
            <h1 class="white times-new-roman text-h2">Our Product</h1>
        </section>

        <section class="product-of-snow-beef">
            <div class="child">
                <h2 class="white text-h2 ibmthai">ผลิตภัณฑ์ของ <span class="red mr-dafoe text-snowbeef">Snow Beef</span></h2>
                <h3 class="white text-h3">
                    เนื้อส่วน สันใน, ริบอาย, สันนอก, เซอร์ลอยด์ และชัคโรลยกระดับด้วยนวัตกรรมแทรกไขมัน    
                    เอกสิทธิ์เพื่อสัมผัสนุ่มละมุนดุจเนยและรสชาติที่เข้มข้นสม่ำเสมอในทุกชิ้น
                </h3>
            </div>
        </section>

        <?php require_once 'core/menudata.php'; ?>

        <section class="list-menu-best-seller">
            <?php foreach ($menus as $menu): ?>
                <div class="menu-card-product">
                    <span class="menu-card__label text-label outfit"><?= htmlspecialchars($menu->label) ?></span>
                    <h2 class="menu-card__title text-h3 times-new-roman"><?= htmlspecialchars($menu->title) ?></h2>

                    <div class="menu-card__divider">
                        <div class="menu-card__divider-line"></div>
                        <span class="menu-card__quote-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="12" viewBox="0 0 8 10" fill="none">
                                <path d="M1.5 10V5.425C1.075 5.30833 0.71875 5.075 0.43125 4.725C0.14375 4.375 0 3.96667 0 3.5V0H1V3.5H1.5V0H2.5V3.5H3V0H4V3.5C4 3.96667 3.85625 4.375 3.56875 4.725C3.28125 5.075 2.925 5.30833 2.5 5.425V10H1.5ZM6.5 10V6H5V2.5C5 1.80833 5.24375 1.21875 5.73125 0.73125C6.21875 0.24375 6.80833 0 7.5 0V10H6.5Z" fill="#FED488"/>
                            </svg>
                        </span>
                    </div>

                    <p class="menu-card__description text-body newsreader"><?= htmlspecialchars($menu->description) ?></p>

                    <div class="menu-card__image-wrapper">
                        <img
                            class="menu-card__image"
                            src="<?= htmlspecialchars($menu->imageUrl) ?>"
                            alt="<?= htmlspecialchars($menu->title) ?>"
                            width="400"
                            height="400"
                            loading="lazy"
                            decoding="async"
                        />
                    </div>
                </div>
            <?php endforeach; ?>
        </section>

        <?php include 'includes/world-class.php'; ?>
        <?php include 'includes/contact-info.php'; ?>
    </main>

    <script src="js/menu-toggle.js"></script>
</body>
</html>