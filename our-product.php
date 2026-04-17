<!DOCTYPE html>
<html lang="en">
<head>
    <title>Our Product</title>
    <?php include 'includes/head.php'; ?>
</head>
<body>
    <?php include 'glass-button.php'; ?>
    <?php include 'navbar.php'; ?>
    <main class="b-black">
        <section class="our-product-home w-full">
            <h1 class="white times-new-roman h1-topic">Our Product</h1>
        </section>

        <section class="product-of-snow-beef">
            <div class="child">
                <h1 class="white ibmthai">ผลิตภัณฑ์ของ <label class="red mr-dafoe">Snow Beef</label></h1>
                <p class="white p-detail">เนื้อส่วน สันใน, ริบอาย, สันนอก, เซอร์ลอยด์ และชัคโรลยกระดับด้วยนวัตกรรมแทรกไขมัน<br>เอกสิทธิ์เพื่อสัมผัสนุ่มละมุนดุจเนยและรสชาติที่เข้มข้นสม่ำเสมอในทุกชิ้น</p>
            </div>
        </section>

        <?php require_once 'menudata.php'; ?>

        <section class="list-menu-best-seller">
            <?php foreach ($menus as $menu): ?>
                <div class="menu-card-product">
                    <span class="menu-card__label outfit"><?= htmlspecialchars($menu->label) ?></span>
                    <h2 class="menu-card__title h2-topic times-new-roman"><?= htmlspecialchars($menu->title) ?></h2>

                    <div class="menu-card__divider">
                        <div class="menu-card__divider-line"></div>
                        <span class="menu-card__quote-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#C9A84C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2"/>
                                <path d="M7 2v20"/>
                                <path d="M21 15V2v0a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7"/>
                            </svg>
                        </span>
                    </div>

                    <p class="menu-card__description p-title newsreader"><?= htmlspecialchars($menu->description) ?></p>

                    <div class="menu-card__image-wrapper">
                        <img
                            class="menu-card__image"
                            src="<?= htmlspecialchars($menu->imageUrl) ?>"
                            alt="<?= htmlspecialchars($menu->title) ?>"
                        />
                    </div>
                </div>
            <?php endforeach; ?>
        </section>

        <?php include 'world-class.php' ?>
        <?php include 'contact-info.php'; ?>
    </main>
</body>
</html>