<?php if($setting_array['is_bot'] == 'нет') { ?>
<style>
/* -------------------------------- 

Modules - reusable parts of our design

-------------------------------- */
.cd-buttons {
 text-align: center !important; 
  padding: 0;
}
.no_text_decoration {
  text-decoration: none !important;
  cursor: pointer;
  font-weight: 700;
}
#modal_agree:hover {
  color: #000;
}
.img-replace {
  /* replace text with an image */
  display: inline-block;
  overflow: hidden;
  text-indent: 100%;
  color: transparent;
  white-space: nowrap;
}

/* -------------------------------- 

xnugget info 

-------------------------------- */
.cd-nugget-info {
  text-align: center;
  position: absolute;
  width: 100%;
  height: 50px;
  line-height: 50px;
  bottom: 0;
  left: 0;
}
.cd-nugget-info a {
  position: relative;
  font-size: 14px;
  color: #5e6e8d;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  transition: all 0.2s;
}
.no-touch .cd-nugget-info a:hover {
  opacity: .8;
}
.cd-nugget-info span {
  vertical-align: middle;
  display: inline-block;
}
.cd-nugget-info span svg {
  display: block;
}
.cd-nugget-info .cd-nugget-info-arrow {
  fill: #5e6e8d;
}

/* -------------------------------- 

Main components 

-------------------------------- */

<?php
function getDomain2()
{
    $CI =& get_instance();
    return preg_replace("/^[\w]{2,6}:\/\/([\w\d\.\-]+).*$/","$1", $CI->config->slash_item('base_url'));
}
?>

header {
  <?php if (getDomain2() != 'zaimsoon.ru') { ?>
  height: 200px;
  line-height: 200px;
  <?php } ?>
  text-align: center;
  background-color: #5e6e8d;
  color: #FFF;
}
header h1 {
  font-size: 20px;
  font-size: 1.25rem;
}

.cd-popup-trigger {
  /* display: block;
  width: 170px;
  height: 50px;
  line-height: 50px;
  margin: 3em auto;
  text-align: center;
  color: #FFF;
  font-size: 14px;
  font-size: 0.875rem;
  font-weight: bold;
  text-transform: uppercase;
  border-radius: 50em;
  background: #35a785;
  box-shadow: 0 3px 0 rgba(0, 0, 0, 0.07); */
}
@media only screen and (min-width: 1170px) {
  .cd-popup-trigger {
    margin: 6em auto;
  }
}

/* -------------------------------- 

xpopup 

-------------------------------- */
.cd-popup {
  position: fixed;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  background-color: rgba(94, 110, 141, 0.9);
  opacity: 0;
  visibility: hidden;
  -webkit-transition: opacity 0.3s 0s, visibility 0s 0.3s;
  -moz-transition: opacity 0.3s 0s, visibility 0s 0.3s;
  transition: opacity 0.3s 0s, visibility 0s 0.3s;
}
.cd-popup.is-visible {
  z-index: 999;
  opacity: 1;
  visibility: visible;
  -webkit-transition: opacity 0.3s 0s, visibility 0s 0s;
  -moz-transition: opacity 0.3s 0s, visibility 0s 0s;
  transition: opacity 0.3s 0s, visibility 0s 0s;
}

.cd-popup-container {
  position: relative;
  width: 90%;
  max-width: 400px;
  margin: 4em auto;
  background: #FFF;
  border-radius: .25em .25em .4em .4em;
  text-align: center;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
  -webkit-transform: translateY(-40px);
  -moz-transform: translateY(-40px);
  -ms-transform: translateY(-40px);
  -o-transform: translateY(-40px);
  transform: translateY(-40px);
  /* Force Hardware Acceleration in WebKit */
  -webkit-backface-visibility: hidden;
  -webkit-transition-property: -webkit-transform;
  -moz-transition-property: -moz-transform;
  transition-property: transform;
  -webkit-transition-duration: 0.3s;
  -moz-transition-duration: 0.3s;
  transition-duration: 0.3s;
}
.cd-popup-container p {
  padding: 10px 0 20px 0;
  color: #000;
  line-height: 25px;
  font-weight: 700;
  font-size: 1.4em;
}
.cd-popup-container .cd-buttons:after {
  content: "";
  display: table;
  clear: both;
}
.cd-popup-container .cd-buttons li {
  float: left;
  width: 50%;
  list-style: none;
}
.cd-popup-container .cd-buttons a {
  display: block;
  height: 60px;
  line-height: 60px;
  text-transform: uppercase;
  color: #FFF;
  -webkit-transition: background-color 0.2s;
  -moz-transition: background-color 0.2s;
  transition: background-color 0.2s;
}
.cd-popup-container .cd-buttons li:first-child a {
  background: #3eab31;
  border-radius: 0 0 0 .25em;
}
.no-touch .cd-popup-container .cd-buttons li:first-child a:hover {
  background-color: #fc8982;
}
.cd-popup-container .cd-buttons li:last-child a {
  background: #b6bece;
  border-radius: 0 0 .25em 0;
}
.no-touch .cd-popup-container .cd-buttons li:last-child a:hover {
  background-color: #c5ccd8;
}
.cd-popup-container .cd-popup-close {
  position: absolute;
  top: 8px;
  right: 8px;
  width: 30px;
  height: 30px;
}
.cd-popup-container .cd-popup-close::before, .cd-popup-container .cd-popup-close::after {
  content: '';
  position: absolute;
  top: 12px;
  width: 14px;
  height: 3px;
  background-color: #8f9cb5;
}
.cd-popup-container .cd-popup-close::before {
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
  left: 8px;
}
.cd-popup-container .cd-popup-close::after {
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  transform: rotate(-45deg);
  right: 8px;
}
.is-visible .cd-popup-container {
  -webkit-transform: translateY(0);
  -moz-transform: translateY(0);
  -ms-transform: translateY(0);
  -o-transform: translateY(0);
  transform: translateY(0);
}
@media only screen and (min-width: 1170px) {
  .cd-popup-container {
    margin: 8em auto;
  }
}
.img-confirm {
  width: 100%;
  padding: 10px 20px;
  margin-top: 20px;
}
</style>
<a  class="cd-popup-trigger"></a>
<div class="cd-popup" role="alert">
	<div class="cd-popup-container">
    <img class="img-confirm" src="https://bzaim5.ru/templates/common/img/offers/webbankir.png">
    <p>Вам одобрено 8 000 <i class="fa fa-rub"></i>
    <!--  уже через 15 минут:<br>Основная ставка	0%, возраст	от 19 до 100 <i class="fa fa-user"></i> -->
    </p>
		<ul class="cd-buttons"  class="text-center">
			<li><a id="modal_agree" class="no_text_decoration" rel="noopener" href="https://webankyr.ru/?utm_source=Popup_1S" target="_blank">Подтвердить</a></li>
			<li><a id="modal_notagree" class="no_text_decoration" >Позже</a></li>
		</ul> 
		<a href="#0" class="cd-popup-close img-replace">Close</a>
	</div>
</div>
<script>
$('#modal_notagree').on('click', function(){
    $('.cd-popup').removeClass('is-visible');
});
//open popup
$('.cd-popup-trigger').on('click', function(event){
    event.preventDefault();
    $('.cd-popup').addClass('is-visible');
});

//close popup
$('.cd-popup').on('click', function(event){
    if( $(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup') ) {
        event.preventDefault();
        $(this).removeClass('is-visible');
    }
});
//close popup when clicking the esc keyboard button
$(document).keyup(function(event){
    if(event.which=='27'){
        $('.cd-popup').removeClass('is-visible');
    }
});  

function AddMinutesToDate(date, minutes) {
    return new Date(date.getTime() + minutes*60000);
}
function DateFormat(date){
    var hours = date.getHours();
    var minutes = date.getMinutes();
    minutes = minutes < 10 ? '0'+ minutes : minutes;
    var strTime =hours + ':' + minutes;
    return strTime;
}
$(document).ready(function() {
    $(document).mousemove(function(e) 
    {
        if(e.pageY <= 5)
        {
            $('.cd-popup-trigger').click();
            //alert('Вы в одном шаге от займа! Получите займ уже в '+ DateFormat(AddMinutesToDate(new Date(),15))+ '. Какая сумма вам нужна?');
            //document.location.href = 'https://pxl.leads.su/click/762f05fbbdde479f81315e58b8557785?source=Vkredito';
        }
    });
    setTimeout(function () {
      hideBlock();
    }, 6000);
});
</script>
<?php } ?>