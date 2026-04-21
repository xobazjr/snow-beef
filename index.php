<?php include 'menudata.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Snow Beef</title>
    <?php include 'includes/head.php'; ?>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <?php /* include 'stamp.php'; */ ?>
    <?php include 'glass-button.php'; ?>
    
    <main>
        <section class="home w-full">
            <div class="video-bg">
                <div class="video-overlay bt-black"></div>
                <video autoplay loop muted playsinline>
                    <source src="assets/video/bio-fresh-snowbeef.mp4" type="video/mp4">
                </video>
            </div>

            <div class="content">
                <p class="outfit white">BIO FRESH</p>
                <h1 class="times-new-roman gold">SNOWBEEF</h1>
            </div>
        </section>

        <section class="taste w-full">
            <div>
                <h1 class="white ibmthai">สัมผัสความนุ่มละมุนดุจหิมะกับ<br><a class="times-new-roman">Snow Beef</a></h1>
                <p class="white p-detail">จากเนื้อวัวสายพันธุ์แท้ British Hereford ที่เลี้ยงด้วยหญ้าธรรมชาติ (Grass-Fed) จากทุ่งหญ้าอันกว้างใหญ่ในออสเตรเลียสู่การยกระดับด้วยนวัตกรรม Artificial Marbling Technology ที่ช่วยแทรกลายไขมันให้สวยงาม มอบสัมผัสที่นุ่ม ชุ่มฉ่ำและรสชาติที่เข้มข้นในทุกคำไม่เพียงแค่ความอร่อย แต่ยังเปี่ยมด้วยคุณค่าจาก โอเมก้า-3 ในสัดส่วนที่สมดุล ดีต่อสุขภาพนี่คือวัตถุดิบชั้นเลิศที่จะช่วยสร้างมูลค่าเพิ่มและเปลี่ยนทุกจานอาหารของคุณให้เป็นเมนูระดับพรีเมียม</p>
            </div>
            <img src="assets/images/meats.webp">
        </section>

        <?php include 'menu.php' ?>

        <section class="history">
            <div>
                <p class="suravaram gold">The origin of groundbreaking ideas and innovations</p>
                <h1 class="ibmthai h1-topic white">จุดกำเนิดของแนวคิดและนวัตกรรมที่ล้ำหน้า</h1>
                <img src="assets/images/history-snow-beef/history-line-desktop.webp">
            </div>
        </section>

        <?php include 'why-snowbeef.php' ?>

        <section class="standard-section w-full">
            <div class="video-bg">
                <div class="video-overlay bt-black"></div>
                <video autoplay loop muted playsinline>
                    <source src="assets/video/our-standard.mp4" type="video/mp4">
                </video>
            </div>

            <div class="content">
                <a href="our-standard.php" class="explore-btn p-detail outfit btn-white">
                    Explore Our Standard
                    <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 6H17 M17 6L21 2L25 6L21 10Z" stroke="currentColor" stroke-width="1" stroke-linejoin="miter"/>
                    </svg>
                </a>
            </div>
        </section>
        
        <section class="itthisak w-full">
            <img src="assets/images/itthisak.webp">
            <div>
                <h1 class="ibmthai white">โดย คุณอิทธิศักดิ์ เชี่ยวเจริญวงศ์</h1>
                <p class="Sarabun white">ผู้สานต่อประสบการณ์และแนวคิดที่ว่า อยากให้ทุกคนได้ทานเนื้อดีๆ ที่ราคาสมเหตุสมผล<br>แต่มีคุณภาพดีเทียบเท่าเนื้อราคาแพงๆ ด้วยแนวคิดดังนี้ เราจึงนำเทคโนโลยีการผลิต<br>อันทันสมัยจากญี่ปุ่นมาใช้ และได้มาเป็นเนื้อลายหิมะอันนุ่มละมุน ในชื่อ  “SNOW BEEF”<br>โดยผ่านการควบคุมการผลิตอย่างเข้มงวดจากประเทศญี่ปุ่น เพื่อให้มั่นใจได้ในความสะอาดและปลอดภัย</p>
                <h4 class="Sarabun white p-detail">ภายใต้ปรัชญาที่ว่า อยากให้ผู้คนทั้งหลายได้รับประทาน “อาหารอร่อย” ในราคาที่เข้าถึงได้</h4>
            </div>
        </section>

        <section class="earth">
            <div>
                <p class="gold suravaram">GROWTH RATE OF FAT-INJECTED BEEF.</p>
                <h1 class="ibmthai grey">อัตราการเติบโตของเนื้อวัวฉีดไขมัน</h1>
                <p class="grey p-detail">"เนื้อวัวฉีดไขมันมีต้นกำเนิดจากเทคโนโลยีญี่ปุ่นช่วงปี 1980 เริ่มจำหน่ายเชิงพาณิชย์ในออสเตรเลียปี 2000 และสหรัฐฯ ปี 2004<br>ปัจจุบันมีการพัฒนาเทคโนโลยีนี้อย่างแพร่หลายในหลายประเทศทั่วโลก"</p>
            </div>
            <img src="assets/images/earth/earth-desktop.webp" class="align-center-img">
        </section>

        <?php include 'world-class.php' ?>

        <?php include "contact-info.php"; ?>      
    </main>

    <footer>

    </footer>
</body>
</html>