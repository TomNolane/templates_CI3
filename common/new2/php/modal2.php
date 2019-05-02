<!--Start of Modal --> 
<div class="modal__popup">
    <input id="modal__trigger" type="checkbox" />
    <label for="modal__trigger"></label>
    <div class="modal__overlay" role="dialog" aria-labelledby="modal__title" aria-describedby="modal_desc">
        <div class="modal__wrap text-center"> 
            <h2 id="modal__title" class="header1">Подтвердите адрес вашей электронной почты</h2>
          <hr class="hr_black">
          
            <p class="text" id="modal__desc"><span id="form_name"></span> на указанный email было отправлено письмо.</p>
          <p class="text2">Подтвердите свою почту и учавствуйте в розыгрыше iPhone XS <span id="date_end"></span></p>
            
          <img class='img_iphone img-responsive' src='//zaimhome.ru/templates/common/img/iphone3.png'>
          <div class="text-center"><input type="button" class="btn_modall" id="btn_modall" value="Закрыть"></div>
          <br class="visible-xs">
        </div>
    </div>
</div>
<!--End of Modal   -->
	<style>
.modal__popup {
  position: absolute;
  background: transparent;
  display: block;
}
.modal__popup > label {
  background: #FFD300;
  border: 1px solid #f0c600;
  border-radius: .2em;
  color: #000000;
  cursor: pointer;
  display: none;
  font-weight: bold;
  padding: 0.75em 1.5em;
  text-shadow: 1px 1px 1px #fff;
  transition: all 0.55s;
}
.modal__popup > label:hover {
  -webkit-transform: scale(0.97);
          transform: scale(0.97);
}
.btn_modall {
  border-radius: 25px;
  background-color: rgb(48, 104, 216);
  /* width: 14.3em;
  height: 4.3em; */
  width: 10.3em;
  height: 3.3em;
  margin: 30px auto 0;
  font-size: 1.6em;
  color: #fff;
}
.modal__overlay {
  
  background: #fff;
  /* position: fixed;
  text-align: center;
  padding: 30px 0; */
  border-radius: 20px; 
  top: 30px;
  margin: 0 auto;
  border: 2px solid #000;
  bottom: 114px;
  left: 0;
  position: fixed;
  right: 0;
  text-align: center;
  text-shadow: none;
  top: 0; 
/*   
  text-align: center;
  padding: 30px 0;
  height: max-content;
  border-radius: 20px;  */
}
.header1 {
  color: rgb(0, 0, 0);
  font-weight: bold;
  line-height: 1.634;
  text-align: center;
}
.modal__wrap { 
  position: relative;
  margin: 0 auto; 
  width: 70%;
  height: 100%;
}
.text2 {
  font-weight: bold;
}
@media (max-width: 800px) { 
  .modal__overlay {
      bottom: unset;
  }
  input:checked ~ .modal__overlay {
    opacity: 1;
    -webkit-transform: scale(.9);
            transform: scale(.9);
  }
  .btn_modall {
    width: 7.3em;
    height: 2.3em;
    margin: 10px auto 0;
    font-size: 1.1em;
  }
  hr {
    margin-top: 10px;
    margin-bottom: 10px;
  }
  .header1 {
    font-size: 1em !important;
  }
  .text, .text2 {
    font-size: .7em !important;
    padding-top: 10px;
  }
  .img_iphone {
    margin-top: 0 !important;
  }
}
@media (min-width: 801px) {
  input:checked ~ .modal__overlay {
    opacity: 1;
    -webkit-transform: scale(.7);
            transform: scale(.7);
  }
  .modal__wrap {
    margin: 20px auto 0; 
    text-align: center;
    position: relative;
  }
  h2 {
    font-size: 32px
  }
}
.modal__wrap label {
  background: #fff;
  border-radius: 50%;
  color: #000000;
  cursor: pointer;
  display: inline-block;
  height: 3em;
  line-height: 3;
  position: absolute;
  right: -10%;
  top: 0;
  width: 3em;
}

.modal__wrap h2 {
  color: #000; 
  text-transform: uppercase;
}
.hr_black {
  height: 1px;
  background-color: rgb(0, 0, 0);
}
.modal__wrap p {
  margin: 0;
  color: #000;
  font-size: 1.2em;
  padding: 10px 20px;
  color: rgb(0, 0, 0);
  line-height: 1.418;
  text-align: center;
  -moz-transform: matrix( 1.41280007935079,0,0,1.41280007935079,0,0);
  -webkit-transform: matrix( 1.41280007935079,0,0,1.41280007935079,0,0);
  -ms-transform: matrix( 1.41280007935079,0,0,1.41280007935079,0,0);
}
.modal__popup input:focus ~ label {
  -webkit-transform: scale(0.97);
          transform: scale(0.97);
}
.modal__overlay {
  display: none;
  opacity: 0;
  -webkit-transform: scale(0.5);
          transform: scale(0.5);
  transition: all 0.75s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  z-index: 999;
}

.img_iphone {
    max-width: 70%;
    margin: 40px auto 0;
}
#modal__trigger {
  visibility: hidden;
  margin: 0;
}
</style>
<script> 
function getLastDayOfMonth() {
  var date = new Date(   (new Date()).getFullYear()     , (new Date()).getMonth() + 1, 0);
  return date.getDate() + '.' + ((new Date()).getMonth() + 1 ) + '.' + (new Date()).getFullYear();
};

function hideModal() {
   document.querySelector("#modal__trigger").click();
   setTimeout(function () {
     document.querySelector(".modal__overlay").style.display = 'none';
    }, 1000);
};

function showModal() {
	/*
    document.querySelector(".modal__overlay").style.display = 'block';
    setTimeout(function () {
     document.querySelector("#modal__trigger").click();
        setTimeout(function () {
        hideModal();
        }, 6000);
    }, 500);
	*/
}
if (document.querySelector("#date_end") != null)
{
  document.querySelector("#date_end").innerText = getLastDayOfMonth();
}


document.querySelector(".modal__overlay").addEventListener('click', function() { 
    hideModal();
}, false);
</script>