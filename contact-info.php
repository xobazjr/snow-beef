<section class="contact">
    <div class="contact-top">
        <div class="contact-left">
            <div class="contact-information">
                <div class="label-gold outfit">CONTACT INFORMATION</div>
                <h1 class="times-new-roman">Bio Fresh Foods (THAILAND) CO., LTD</h1>
                <p class="address outfit">27/13 pattana chonnabot 4 rd.,<br>klong soongtonnoon,<br>ladkrabang district., bangkok 10520</p>
                <div class="contact-email">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path fill="#060606" d="M15 2H1c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h14c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1M4.94 9.94l-3 3c-.12.12-.28.18-.44.18s-.32-.06-.44-.18a.63.63 0 0 1 0-.88l3-3c.24-.24.64-.24.88 0c.25.24.25.64 0 .88m10 3c-.12.12-.28.18-.44.18s-.32-.06-.44-.18l-3-3a.63.63 0 0 1 0-.88c.24-.24.64-.24.88 0l3 3c.25.24.25.64 0 .88m0-9L8.8 10.09c-.22.22-.51.33-.8.33s-.58-.11-.8-.33L1.06 3.94c-.24-.24-.24-.64 0-.88s.64-.24.88 0L8 9.12l6.06-6.06c.24-.24.64-.24.88 0c.25.24.25.64 0 .88"/></svg>
                    <p class="roboto">chayada@biofresh.co.th</p>
                </div>
            </div>

            <?php include "qrpage.php" ?>
        </div>

        <form id="contactForm" class="contact-form" action="mailer-test.php" method="post">
            <div class="form-group">
                <label class="field-label outfit">YOUR COMPANY</label>
                <input name="fcompany" type="text" placeholder="Ex.Allmass idea" required>
            </div>
            <div class="form-group">
                <label class="field-label outfit">PHONE NUMBER</label>
                <input name="fphone" type="text" placeholder="Ex.086-334-XXXX" required>
            </div>
            <div class="form-group">
                <label class="field-label outfit">YOUR NAME</label>
                <input name="fname" type="text" placeholder="Ex.Marisa Thanaluangklung" required>
            </div>
            <div class="form-group">
                <label class="field-label outfit">WHAT TYPE OF RESTAURANT?</label>
                <select name="frestaurant" required>
                    <option value="Supermarket" selected>Supermarket</option>
                    <option value="Chainrestaurant">Chainrestaurant</option>
                    <option value="Agency">Agency</option>
                    <option value="Restaurant">Restaurant</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label class="field-label">MESSAGE</label>
                <textarea name="fmessage" placeholder="Describe your requirements..." required></textarea>
            </div>
            
            <input type="hidden" name="recaptcha_response" id="recaptchaResponse">

            <!-- <button type="button" class="submit-btn" onclick="onSubmit(event)">
                <span class="times-new-roman">SEND MESSAGE</span>
                <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 6H17 M17 6L21 2L25 6L21 10Z" stroke="currentColor" stroke-width="1" stroke-linejoin="miter"/>
                </svg>
            </button> -->

            <button type="submit" class="submit-btn">
                <span class="times-new-roman">SEND MESSAGE</span>
                <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 6H17 M17 6L21 2L25 6L21 10Z" stroke="#D1B171" stroke-width="1" stroke-linejoin="miter"/>
                </svg>
            </button>
        </form>
    </div>

    <div class="contact-bottom">
        <div class="horizontal-line"></div>
                
        <div class="bottom-content">
            <p class="outfit">BIO FREASH FOODS (Thailand) Company Limited</p>
            <h1 class="times-new-roman gold-soft">SNOWBEEF</h1>
        </div>
                
        <div class="plate-image-container">
            <img src="assets/images/dinner-plate.webp" alt="Dinner Plate">
        </div>
    </div> 
</section>

<script src="https://www.google.com/recaptcha/api.js?render=YOUR_RECAPTCHA_SITE_KEY"></script>

<!-- <script>
    function onSubmit(e) {
        e.preventDefault();
        
        var form = document.getElementById('contactForm');
        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }

        grecaptcha.ready(function() {
            grecaptcha.execute('YOUR_RECAPTCHA_SITE_KEY', {action: 'submit'}).then(function(token) {
                document.getElementById('recaptchaResponse').value = token;
=                form.submit();
            });
        });
    }
</script> -->