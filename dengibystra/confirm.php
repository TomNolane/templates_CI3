<?php 
$this->load->model('offers/offers_model', 'offers');
$data = $this->offers->all(); 

$this->load->model('pixel/pixel_model', 'pixel');
$pixel = $this->pixel->stat('rublimo.ru');
?>
<?php include "header.php"; ?>
<div class="ex-bounds"></div>
<div class="ex-main-email">
    <div class="container">
        <h2 class="text-center">Уважаемый(ая), <span id="io2"></span>!</h2>
        <div class="ex-email-block">
            <div class="ex-email-bg">
                <p class="text-conf text-center">
                    Благодарим вас за регистрацию на нашем сервисе.<br>
                    На почту <span id="e2">email@email.com</span> было отправлено письмо с подтверждением
                </p>
            </div>
            <div class="ex-rectangle">
                <div class="text-center">
                    <div class="ex-actions">
                        <button class="ex-main-btn" id="btn1" ><a href="/thanks" id="email_later" style="color: #000000; text-decoration: none;">Позже</a></button>
                        <button class="ex-main-btn" id="btn2" ><a href="" target="_blank" id="email_confirm2" style="color: #000000; text-decoration: none;">Подтвердить</a></button>
                    </div>
                    <form class="ex-send-email text-center">
                        <label>
                            <input type="email">
                            <button class="ex-main-btn ex-send-btn"><img src="templates/dengibystra/assets/img/icon-message.png"></button>
                            <p style="font-size: 12px; margin-top: 20px;">Если письмо не пришло, то посмотрите его в папке спам и нажмите кнопку «не спам»</p>
                        </label>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 

<?php include "footer.php"; ?>