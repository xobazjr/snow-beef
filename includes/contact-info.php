<?php
    $env = parse_ini_file(__DIR__ . '/../config.ini');

    if (!$env || !isset($env['RECAPTCHA_SITE_KEY'])) {
        $siteKey = '';
    } else {
        $siteKey = $env['RECAPTCHA_SITE_KEY'];
    }
?>

<section class="contact">
    <div class="contact-top">
        <div class="contact-left">
            <div class="contact-information">
                <div class="label-gold text-label outfit">CONTACT INFORMATION</div>
                <h2 class="times-new-roman text-white">Bio Fresh Foods (THAILAND) CO., LTD</h2>
                <p class="address text-body outfit">27/13 pattana chonnabot 4 rd.,<br>klong soongtonnoon,<br>ladkrabang district., bangkok 10520</p>
                <div class="contact-email">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path fill="#060606" d="M15 2H1c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h14c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1M4.94 9.94l-3 3c-.12.12-.28.18-.44.18s-.32-.06-.44-.18a.63.63 0 0 1 0-.88l3-3c.24-.24.64-.24.88 0c.25.24.25.64 0 .88m10 3c-.12.12-.28.18-.44.18s-.32-.06-.44-.18l-3-3a.63.63 0 0 1 0-.88c.24-.24.64-.24.88 0l3 3c.25.24.25.64 0 .88m0-9L8.8 10.09c-.22.22-.51.33-.8.33s-.58-.11-.8-.33L1.06 3.94c-.24-.24-.24-.64 0-.88s.64-.24.88 0L8 9.12l6.06-6.06c.24-.24.64-.24.88 0c.25.24.25.64 0 .88"/></svg>
                    <p class="text-body roboto">chayada@biofresh.co.th</p>
                </div>
            </div>

            <?php include "qrpage.php" ?>
        </div>

        <form id="contactForm" class="contact-form" action="core/mailer.php" method="post">
            <div class="form-group">
                <label for="fcompany" class="field-label text-body outfit">YOUR COMPANY</label>
                <input name="fcompany" id="fcompany" type="text" placeholder="Ex.Allmass idea" required>
            </div>
            <div class="form-group">
                <label for="fphone" class="field-label text-body outfit">PHONE NUMBER</label>
                <input name="fphone" id="fphone" type="text" placeholder="Ex.086-334-XXXX" required>
            </div>
            <div class="form-group">
                <label for="fname" class="field-label text-body outfit">YOUR NAME</label>
                <input name="fname" id="fname" type="text" placeholder="Ex.Marisa Thanaluangklung" required>
            </div>
            <div class="form-group">
                <label for="frestaurant" class="field-label text-body outfit">WHAT TYPE OF RESTAURANT?</label>
                <select name="frestaurant" id="frestaurant" required>
                    <option value="Supermarket (ซูเปอร์มาร์เก็ต)" selected>Supermarket (ซูเปอร์มาร์เก็ต)</option>
                    <option value="Chain Restaurant (ร้านอาหารในเครือ)">Chain Restaurant (ร้านอาหารในเครือ)</option>
                    <option value="Agency (บริษัทตัวแทน)">Agency (บริษัทตัวแทน)</option>
                    <option value="Restaurant (ร้านอาหาร)">Restaurant (ร้านอาหาร)</option>
                    <option value="Other (อื่นๆ)">Other (อื่นๆ)</option>
                </select>
            </div>
            <div class="form-group">
                <label for="fmessage" class="field-label text-body">MESSAGE</label>
                <textarea name="fmessage" id="fmessage" placeholder="Describe your requirements..." required></textarea>
            </div>
            
            <input type="hidden" name="recaptcha_response" id="recaptchaResponse">

            <button type="submit" class="submit-btn">
                <svg width="34" height="23" viewBox="0 0 27 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.591294" width="8.21115" height="8.21115" transform="matrix(0.707116 -0.707097 0.707116 0.707097 14.1367 6.81654)" stroke="#694601" stroke-width="0.836205"/>
                    <line y1="6.57409" x2="14.476" y2="6.57409" stroke="#694601" stroke-width="0.836205"/>
                </svg>
                <span class="times-new-roman text-h3">SEND MESSAGE</span>
                <svg width="34" height="23" viewBox="0 0 27 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.591294" width="8.21115" height="8.21115" transform="matrix(0.707116 -0.707097 0.707116 0.707097 14.1367 6.81654)" stroke="#694601" stroke-width="0.836205"/>
                    <line y1="6.57409" x2="14.476" y2="6.57409" stroke="#694601" stroke-width="0.836205"/>
                </svg>
            </button>
        </form>
    </div>

    <div class="contact-bottom">
        <div class="horizontal-line"></div>
                
        <div class="bottom-content">
            <p class="outfit text-body">BIO FREASH FOODS (Thailand) Company Limited</p>
            <h1 class="times-new-roman text-gold text-h1">SNOWBEEF</h1>
        </div>
                
        <div class="plate-image-container">
            <img src="assets/images/dinner-plate.webp" alt="Dinner Plate">
        </div>
    </div> 
</section>

<?php if ($siteKey): ?>
    <script src="https://www.google.com/recaptcha/api.js?render=<?php echo $siteKey; ?>"></script>
<?php endif; ?>

<script>
    const SITE_KEY = "<?php echo $siteKey; ?>";
    const form = document.getElementById('contactForm');

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }

        if (!SITE_KEY) {
            form.submit();
            return;
        }

        grecaptcha.ready(function() {
            grecaptcha.execute(SITE_KEY, {action: 'submit'}).then(function(token) {
                document.getElementById('recaptchaResponse').value = token;
                form.submit();
            });
        });
    });
</script>