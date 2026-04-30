<?php include 'core/menudata.php'; ?>

<!DOCTYPE html>
<html lang="th">
<head>
    <title>Snow Beef Thailand</title>
    <?php include 'includes/head.php'; ?>
</head>

<body>
    <?php include 'includes/navbar.php'; ?>
    <?php include 'includes/glass-button.php'; ?>
    
    <main>

        <!-- HERO -->
        <section class="home">
            <img 
                src="assets/images/brush-black.webp" 
                alt="brush" 
                class="brush-bottom"
                width="390" height="50"
                decoding="async"
            >

            <div class="video-bg">
                <div class="video-overlay"></div>
                <!-- Desktop video -->
                <video class="desktop-video"
                    loop muted playsinline
                    preload="none"
                    poster="assets/images/thumbnails/thumbnail-snowbeef.webp">

                    <source src="assets/video/bio-fresh-snowbeef.webm" type="video/webm">

                    <!-- fallback -->
                    <source src="assets/video/bio-fresh-snowbeef.mp4" type="video/mp4">
                </video>
            </div>

            <div class="content text-center">
                <p class="text-body font-light text-white uppercase spacing-wide">
                    BIO FRESH
                </p>

                <h1 class="text-h1 font-medium text-gold times-new-roman spacing-wide">
                    SNOWBEEF
                </h1>
            </div>
        </section>

        <!-- TASTE -->
        <section class="taste">
            <div class="taste-content">
                <h2 class="text-h2 font-medium text-white ibmthai">
                    สัมผัสความนุ่มละมุนดุจหิมะกับ<br>
                    <span class="times-new-roman">Snow Beef</span>
                </h2>

                <h3 class="text-h3 font-light text-white">
                    จากเนื้อวัวสายพันธุ์แท้ British Hereford ที่เลี้ยงด้วยหญ้าธรรมชาติ (Grass-Fed) จากทุ่งหญ้า<br>
                    อันกว้างใหญ่ในออสเตรเลียสู่การยกระดับด้วยนวัตกรรม Artificial Marbling Technology<br> 
                    ที่ช่วยแทรกลายไขมันให้สวยงาม มอบสัมผัสที่นุ่ม ชุ่มฉ่ำและรสชาติที่เข้มข้นในทุกคำไม่เพียง<br>
                    แค่ความอร่อย แต่ยังเปี่ยมด้วยคุณค่าจากโอเมก้า-3 ในสัดส่วนที่สมดุลดีต่อสุขภาพ นี่คือวัตถุดิบ<br>
                    ชั้นเลิศที่จะช่วยสร้างมูลค่าเพิ่มและเปลี่ยนทุกจานอาหารของคุณให้เป็นเมนูระดับพรีเมียม
                </h3>
            </div>

            <img 
                src="assets/images/meats.webp" 
                alt="Snow Beef"
                loading="lazy"
                decoding="async"
                width="600"
                height="400"
            >
        </section>

        <?php include 'includes/menu.php'; ?>

        <!-- HISTORY -->
        <section class="history">
            <div>
                <p class="suravaram text-gold">The origin of groundbreaking ideas and innovations</p>
                <h2 class="ibmthai text-h2 white">จุดกำเนิดของแนวคิดและนวัตกรรมที่ล้ำหน้า</h2>

                <img 
                    src="assets/images/history-snow-beef/history-line-desktop.webp" 
                    alt="นวัตกรรมและเทคโนโลยีของ Snow Beef"
                    loading="lazy"
                    decoding="async"
                    width="1200"
                    height="300"
                >
            </div>
        </section>

        <?php include 'includes/why-snowbeef.php'; ?>

        <!-- STANDARD -->
        <section class="standard-section w-full">
            <div class="video-bg">
                <div class="video-overlay bt-black"></div>

                <video loop muted playsinline preload="none" poster="assets/images/thumbnails/thumbnail-snowbeef.webp">
                    <source src="assets/video/our-standard.webm" type="video/webm">

                    <!-- fallback -->
                    <source src="assets/video/our-standard.mp4" type="video/mp4">
                </video>
            </div>

            <div class="content">
                <a href="our-standard.php" class="explore-btn text-body outfit btn-white">
                    Explore Our Standard
                    <svg width="26" height="12" viewBox="0 0 26 12" fill="none">
                        <path d="M1 6H17 M17 6L21 2L25 6L21 10Z"
                            stroke="currentColor"
                            stroke-width="1"
                            stroke-linejoin="miter"/>
                    </svg>
                </a>
            </div>
        </section>
        
        <!-- ITTHISAK -->
        <section class="itthisak w-full">
            <img 
                src="assets/images/itthisak.webp" 
                alt="คุณอิทธิศักดิ์ เชี่ยวเจริญวงศ์"
                loading="lazy"
                decoding="async"
                width="500"
                height="600"
            >

            <div>
                <h2 class="ibmthai text-h2 white">โดย คุณอิทธิศักดิ์ เชี่ยวเจริญวงศ์</h2>
                <p class="Sarabun text-body white">
                    ผู้สานต่อประสบการณ์และแนวคิดที่ว่า อยากให้ทุกคนได้ทานเนื้อดีๆ ที่ราคาสมเหตุสมผล<br>
                    แต่มีคุณภาพดีเทียบเท่าเนื้อราคาแพงๆ ด้วยแนวคิดดังนี้ เราจึงนำเทคโนโลยีการผลิต<br>
                    อันทันสมัยจากญี่ปุ่นมาใช้ และได้มาเป็นเนื้อลายหิมะอันนุ่มละมุน ในชื่อ  “SNOW BEEF”<br>
                    โดยผ่านการควบคุมการผลิตอย่างเข้มงวดจากประเทศญี่ปุ่น เพื่อให้มั่นใจได้ในความสะอาดและปลอดภัย
                </p>
                <h3 class="Sarabun white text-body">
                    ภายใต้ปรัชญาที่ว่า อยากให้ผู้คนทั้งหลายได้รับประทาน “อาหารอร่อย” ในราคาที่เข้าถึงได้
                </h3>
            </div>
        </section>

        <!-- EARTH -->
        <section class="earth">
            <div>
                <p class="gold text-body suravaram">GROWTH RATE OF FAT-INJECTED BEEF.</p>
                <h2 class="ibmthai text-h2 grey">อัตราการเติบโตของเนื้อวัวฉีดไขมัน</h2>
                <h3 class="grey text-h3">
                    "เนื้อวัวฉีดไขมันมีต้นกำเนิดจากเทคโนโลยีญี่ปุ่นช่วงปี 1980 เริ่มจำหน่ายเชิงพาณิชย์ในออสเตรเลียปี 2000 และสหรัฐฯ ปี 2004<br>
                    ปัจจุบันมีการพัฒนาเทคโนโลยีนี้อย่างแพร่หลายในหลายประเทศทั่วโลก"
                </h3>
            </div>

            <img 
                src="assets/images/earth/earth-desktop.webp" 
                class="align-center-img"
                alt="แผนที่เนื้อวัว"
                loading="lazy"
                decoding="async"
                width="1200"
                height="180"
            >
        </section>

        <?php include 'includes/world-class.php'; ?>
        <?php include "includes/contact-info.php"; ?>      
    </main>

    <script src="js/menu-toggle.js" defer></script>

</body>
</html>