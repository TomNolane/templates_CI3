<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="keywords" content="">
<title></title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic" rel="stylesheet">

<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

<link rel="stylesheet" type="text/css" href="css/css.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>



<section class="header">
<div class="container">
<div class="row">

<div class="col_2_d col_6_m">
<div class="logo">AddOffer</div>
</div>

<div class="col_6_d hidden_m">
<div class="menu">
<ul>

<li><a href="" class="menu_icon">Item 1</a>
<ul>
<li><a href="">Item 1_1</a></li>
<li><a href="">Item 1_2</a></li>
<li><a href="">Item 1_3</a></li>
<li><a href="">Item 1_4</a></li>
<li><a href="">Item 1_5</a></li>
</ul>
</li>

<li><a href="" class="menu_icon">Item 2</a>
<ul>
<li><a href="">Item 2_1</a></li>
<li><a href="">Item 2_2</a></li>
<li><a href="">Item 2_3</a></li>
<li><a href="">Item 2_4</a></li>
<li><a href="">Item 2_5</a></li>
</ul>
</li>

<li><a href="" class="menu_icon">Item 3</a>
<ul>
<li><a href="">Item 3_1</a></li>
<li><a href="">Item 3_2</a></li>
<li><a href="">Item 3_3</a></li>
<li><a href="">Item 3_4</a></li>
<li><a href="">Item 3_5</a></li>
</ul>
</li>

<li><a href="" class="menu_icon">Item 4</a>
<ul>
<li><a href="">Item 4_1</a></li>
<li><a href="">Item 4_2</a></li>
<li><a href="">Item 4_3</a></li>
<li><a href="">Item 4_4</a></li>
<li><a href="">Item 4_5</a></li>
</ul>
</li>

<li><a href="" class="menu_icon">Item 5</a>
<ul>
<li><a href="">Item 5_1</a></li>
<li><a href="">Item 5_2</a></li>
<li><a href="">Item 5_3</a></li>
<li><a href="">Item 5_4</a></li>
<li><a href="">Item 5_5</a></li>
</ul>
</li>

</ul>
</div>
</div>

<div class="col_2_d hidden_m">
<!--noindex-->
<div class="search"><input type="text" value="Search" onfocus="if (this.value == 'Search') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search';}" /></div>
<!--/noindex-->
</div>

<div class="col_2_d right_d hidden_m">
<!--noindex-->
<div class="dollar">56,7608</div>
<div class="euro">69,6341</div>
<!--/noindex-->
</div>

<div class="col_6_d hidden_d show_m">
<div class="menu_mobile_button" onclick="toggle(category_grid_description_text_show)"></div>
</div>

</div>
</div>
</section>



<section class="menu_mobile" id="category_grid_description_text_show" style="display:none;">
<div class="container">
<div class="row">
<div class="col_12_d">
<ul>
<li><a href="">Item 1</a></li>
<li><a href="">Item 2</a></li>
<li><a href="">Item 3</a></li>
<li><a href="">Item 4</a></li>
<li><a href="">Item 5</a></li>
</ul>
</div>
</div>
</div>
</section>



<section class="single">
<div class="container">
<div class="row">

<div class="col_12_d center_d">
<div class="single_title"><h1>Single title</h1></div>
<div class="single_subtitle">Single subtitle</div>
<div class="single_breadcrumbs">
<a href="">Home</a> — <a href="">Category</a> — <a href="">Single</a>
</div>
</div>

<div class="col_12_d">
<div class="single_promo">
<div class="row middle_d middle_none_m">
<div class="col_3_d col_12_m">
<div class="single_promo_logo"><img src="images/partner_12_2.png" alt=""></div>
</div>
<div class="col_6_d col_12_m">
<div class="row">
<div class="col_4_d col_12_m">
<!--noindex-->
<div class="single_promo_max_term">
<div class="single_promo_max_term_title">Term</div>
<div class="single_promo_max_term_subtitle">365</div>
</div>
<!--/noindex-->
</div>
<div class="col_4_d col_12_m">
<!--noindex-->
<div class="single_promo_max_percent">
<div class="single_promo_max_percent_title">Percent</div>
<div class="single_promo_max_percent_subtitle">100%</div>
</div>
<!--/noindex-->
</div>
<div class="col_4_d col_12_m">
<!--noindex-->
<div class="single_promo_max_amount">
<div class="single_promo_max_amount_title">Amount</div>
<div class="single_promo_max_amount_subtitle">10 000Р</div>
</div>
<!--/noindex-->
</div>
</div>
</div>
<div class="col_3_d col_12_m">
<div class="single_promo_button"><a onclick="toggle(single_form_show)">Button</a></div>
</div>
</div>
</div>
</div>

<div class="col_12_d" id="single_form_show" style="display:none;">
<div class="row">
<div class="col_2_d hidden_m"></div>
<div class="col_8_d col_12_m">
<div class="single_form">
<div class="row">
<div class="col_4_d col_12_m">
<div class="single_form_input_title">Name</div>
<div class="single_form_name"><input type="text" /></div>
</div>
<div class="col_4_d col_12_m">
<div class="single_form_input_title">Surname</div>
<div class="single_form_surname"><input type="text" /></div>
</div>
<div class="col_4_d col_12_m">
<div class="single_form_input_title">Middle name</div>
<div class="single_form_middle_name"><input type="text" /></div>
</div>
<div class="col_6_d col_12_m">
<div class="single_form_input_title">Amount</div>
<div class="single_form_amount"><input type="text" id="amount" /></div>
</div>
<div class="col_6_d col_12_m">
<div class="single_form_input_title">Term</div>
<div class="single_form_term"><input type="text" /></div>
</div>
<div class="col_6_d col_12_m">
<div class="single_form_input_title">Phone</div>
<div class="single_form_phone"><input type="text" id="phone" /></div>
</div>
<div class="col_6_d col_12_m">
<div class="single_form_input_title">Email</div>
<div class="single_form_email"><input type="text" /></div>
</div>
<div class="col_12_d center_d">
<div class="row">
<div class="col_3_d hidden_m"></div>
<div class="col_6_d col_12_m">
<div class="single_form_button"><input type="button" value="Button"></div>
<div class="single_form_contract"><input type="checkbox" checked/><label>Contract</label></div>
</div>
<div class="col_3_d hidden_m"></div>
</div>
</div>
</div>
</div>
<div class="single_form_overlay" onclick="toggle(single_form_show)"></div>
</div>
<div class="col_2_d"></div>
</div>
</div>

<div class="col_12_d">
<div class="single_characteristics">
<table>
<thead><tr><td>Characteristic</td></tr></thead>
<tbody>
<tr>
<td>Characteristic 1</td>
<td>Value 1</td>
</tr>
<tr>
<td>Characteristic 2</td>
<td>Value 2</td>
</tr>
<tr>
<td>Characteristic 3</td>
<td>Value 3</td>
</tr>
<tr>
<td>Characteristic 4</td>
<td>Value 4</td>
</tr>
<tr>
<td>Characteristic 5</td>
<td>Value 5</td>
</tr>
</tbody>
<thead><tr><td>Characteristic</td></tr></thead>
<tbody>
<tr>
<td>Characteristic 1</td>
<td>Value 1</td>
</tr>
<tr>
<td>Characteristic 2</td>
<td>Value 2</td>
</tr>
<tr>
<td>Characteristic 3</td>
<td>Value 3</td>
</tr>
<tr>
<td>Characteristic 4</td>
<td>Value 4</td>
</tr>
<tr>
<td>Characteristic 5</td>
<td>Value 5</td>
</tr>
</tbody>
</table>
</div>
</div>

<div class="col_12_d">
<div class="single_description">
<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
<h2>There are many variations</h2>
<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
<ul>
<li>Item 1</li>
<li>Item 2</li>
<li>Item 3</li>
</ul>
<h3>There are many variations</h3>
<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
<ol>
<li>Item 1</li>
<li>Item 2</li>
<li>Item 3</li>
</ol>
<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
</div>
</div>

</div>
</div>
</section>



<section class="advertising">
<div class="container">
<div class="row">
<div class="col_12_d">
<div class="advertising_title">Advertising (Красим заголовки и фон рекламных блоков в фирменные цвета сайта)</div>
</div>
<div class="col_3_d col_12_m">
<img src="images/adversting.png" alt="">
</div>
<div class="col_3_d col_12_m">
<img src="images/adversting.png" alt="">
</div>
<div class="col_3_d col_12_m">
<img src="images/adversting.png" alt="">
</div>
<div class="col_3_d col_12_m">
<img src="images/adversting.png" alt="">
</div>
</div>
</div>
</section>



<section class="benefits">
<div class="container">
<div class="row">

<div class="col_12_d center_d">
<div class="benefits_title">Benefits title</div>
<div class="benefits_subtitle">Benefits subtitle</div>
</div>

<div class="col_4_d col_12_m">
<div class="benefit">
<div class="row middle_d">
<div class="col_4_d">
<div class="benefit_image"><img src="images/companys.png" alt=""></div>
</div>
<div class="col_8_d">
<div class="benefit_title">Benefit title</div>
<div class="benefit_description">Benefit description</div>
</div>
</div>
</div>
</div>

<div class="col_4_d col_12_m">
<div class="benefit">
<div class="row middle_d">
<div class="col_4_d">
<div class="benefit_image"><img src="images/best.png" alt=""></div>
</div>
<div class="col_8_d">
<div class="benefit_title">Benefit title</div>
<div class="benefit_description">Benefit description</div>
</div>
</div>
</div>
</div>

<div class="col_4_d col_12_m">
<div class="benefit">
<div class="row middle_d">
<div class="col_4_d">
<div class="benefit_image"><img src="images/search.png" alt=""></div>
</div>
<div class="col_8_d">
<div class="benefit_title">Benefit title</div>
<div class="benefit_description">Benefit description</div>
</div>
</div>
</div>
</div>

</div>
</div>
</section>



<section class="subscription">
<div class="container">
<div class="row">

<div class="col_12_d center_d">
<div class="subscription_title">Subscription title</div>
<div class="subscription_subtitle">Subscription subtitle</div>
</div>

<div class="col_12_d center_d">
<div class="row">
<div class="col_8_d col_12_m">
<div class="subscription_form"><input type="text" value="Email" onfocus="if (this.value == 'Email') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Email';}"  /></div>
</div>
<div class="col_4_d col_12_m">
<div class="subscription_button"><input type="button" value="Button" /></div>
</div>
</div>
</div>

</div>
</div>
</section>



<section class="advertising">
<div class="container">
<div class="row">
<div class="col_12_d">
<div class="advertising_title">Advertising (Красим заголовки и фон рекламных блоков в фирменные цвета сайта)</div>
</div>
<div class="col_3_d col_12_m">
<img src="images/adversting.png" alt="">
</div>
<div class="col_3_d col_12_m">
<img src="images/adversting.png" alt="">
</div>
<div class="col_3_d col_12_m">
<img src="images/adversting.png" alt="">
</div>
<div class="col_3_d col_12_m">
<img src="images/adversting.png" alt="">
</div>
</div>
</div>
</section>



<section class="partners">
<div class="container">
<div class="row">

<div class="col_12_d center_d">
<div class="partners_title">Partners title</div>
<div class="partners_subtitle">Partners subtitle</div>
</div>

<div class="col_2_d col_6_m">
<div class="partners_logo"><img src="images/partner_1.png" alt=""></div>
</div>

<div class="col_2_d col_6_m">
<div class="partners_logo"><img src="images/partner_2.png" alt=""></div>
</div>

<div class="col_2_d col_6_m">
<div class="partners_logo"><img src="images/partner_3.png" alt=""></div>
</div>

<div class="col_2_d col_6_m">
<div class="partners_logo"><img src="images/partner_4.png" alt=""></div>
</div>

<div class="col_2_d col_6_m">
<div class="partners_logo"><img src="images/partner_5.png" alt=""></div>
</div>

<div class="col_2_d col_6_m">
<div class="partners_logo"><img src="images/partner_6.png" alt=""></div>
</div>

<div class="col_2_d col_6_m">
<div class="partners_logo"><img src="images/partner_7.png" alt=""></div>
</div>

<div class="col_2_d col_6_m">
<div class="partners_logo"><img src="images/partner_8.png" alt=""></div>
</div>

<div class="col_2_d col_6_m">
<div class="partners_logo"><img src="images/partner_9.jpg" alt=""></div>
</div>

<div class="col_2_d col_6_m">
<div class="partners_logo"><img src="images/partner_10.JPEG" alt=""></div>
</div>

<div class="col_2_d col_6_m">
<div class="partners_logo"><img src="images/partner_11.png" alt=""></div>
</div>

<div class="col_2_d col_6_m">
<div class="partners_logo"><img src="images/partner_12.png" alt=""></div>
</div>

</div>
</div>
</section>



<section class="url">
<div class="container center_d">
<div class="row">

<div class="col_12_d">
<ul>
<h3>Subtitle</h3>
<li><a href="">Url 1</a></li>
<li><a href="">Url 2</a></li>
<li><a href="">Url 3</a></li>
</ul>
<ul>
<h3>Subtitle</h3>
<li><a href="">Url 1</a></li>
<li><a href="">Url 2</a></li>
<li><a href="">Url 3</a></li>
</ul>
<ul>
<h3>Subtitle</h3>
<li><a href="">Url 1</a></li>
<li><a href="">Url 2</a></li>
<li><a href="">Url 3</a></li>
</ul>
<ul>
<h3>Subtitle</h3>
<li><a href="">Url 1</a></li>
<li><a href="">Url 2</a></li>
<li><a href="">Url 3</a></li>
</ul>
</div>

</div>
</div>
</section>



<section class="footer">
<div class="container">
<div class="row">

<div class="col_2_d col_6_m">
<!--noindex-->
<div class="logo">Addoffer</div>
<!--/noindex-->
</div>

<div class="col_8_d center_d hidden_m">
<!--noindex-->
<div class="menu_info">
<ul>
<li><a href="">Item 1</a></li>
<li><a href="">Item 2</a></li>
<li><a href="">Item 3</a></li>
<li><a href="">Item 4</a></li>
<li><a href="">Item 5</a></li>
</ul>
</div>
<!--/noindex-->
</div>

<div class="col_2_d col_6_m">
<!--noindex-->
<div class="row">
<div class="col_4_d">
<div class="social"><img src="images/vk.png" alt=""></div>
</div>
<div class="col_4_d">
<div class="social"><img src="images/fb.png" alt=""></div>
</div>
<div class="col_4_d">
<div class="social"><img src="images/tw.png" alt=""></div>
</div>
</div>
<!--/noindex-->
</div>

</div>
</div>
</section>



<script type="text/javascript">
(function(){
var prev_value="";
var input= document.getElementById("amount");
input.onkeyup = input.onchange= input.onpaste= function(){
this.value= this.value.replace(/[^\d\s]/g, "");
if (prev_value==this.value)
return;
prev_value= this.value;
this.value= this.value.replace(/[^\d]/g, "").split("").reverse().join("").replace(/\d{3}(?!$|(?:\s$))/g, "$& ").split("").reverse().join("");
};
})();
</script>

<script>
function toggle(el) {
el.style.display = (el.style.display == 'none') ? '' : 'none'
}
</script>

<script type="text/javascript">
window.addEventListener("DOMContentLoaded", function() {
function setCursorPosition(pos, elem) {
elem.focus();
if (elem.setSelectionRange) elem.setSelectionRange(pos, pos);
else if (elem.createTextRange) {
var range = elem.createTextRange();
range.collapse(true);
range.moveEnd("character", pos);
range.moveStart("character", pos);
range.select()
}
}
function mask(event) {
var matrix = "+7 (___) ___-__-__",
i = 0,
def = matrix.replace(/\D/g, ""),
val = this.value.replace(/\D/g, "");
if (def.length >= val.length) val = def;
this.value = matrix.replace(/./g, function(a) {
return /[_\d]/.test(a) && i < val.length ? val.charAt(i++) : i >= val.length ? "" : a
});
if (event.type == "blur") {
if (this.value.length == 2) this.value = ""
} else setCursorPosition(this.value.length, this)
};
var input = document.querySelector("#phone");
input.addEventListener("input", mask, false);
input.addEventListener("focus", mask, false);
});
</script>

</body>
</html>