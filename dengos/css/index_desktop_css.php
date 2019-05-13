<style>
table {
    margin-top: 20px;
    width: 100%; 
}
td {
    text-align: right;
}
tr>td:first-child {
    text-align: left;
}
h2.hh {
    color: #000000;
}
figure.hh1 {
    padding-left: 12px;
    padding-right: 12px;
    padding-top:30px;
    padding-bottom:40px;
    outline: 1px solid #FFDD2D;
    transition: all 0.5s ease-out;
    border-radius: 5px;
}
figure.hh2:hover {
    border: none;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
    background-color: #f7f7f7;
}
figure.hh2 {
    height: 150px !important; 
    margin: 0 !important;
    padding: 0 !important;
    transition: all 0.5s ease-out;
    border-radius: 5px;
}
figure.hh1:hover {
    border: none;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
    background-color: #f7f7f7;
}
.offers { 
    padding-left: 20px;
    padding-right: 20px;
    border-radius: 4px;
}
.ex-main-btn {
    width: 100%;
    margin-top: 20px;
    padding-top: 15px;
    padding-bottom: 15px;
    color: black;
    font-weight: 700;
    outline: none;
    border: none;
    background: #FFDD2D;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.09);
    border-radius: 4px;
}

.wordwrap { 
   white-space: nowrap; /* IE */
}
.container3 {
    background-color: #ffffff;
    padding-left: 0;
    padding-right: 0;
}
@media screen and (min-width: 441px) {
	.col-md-12 {
	padding-right: 15px !important;
    padding-left: 15px !important;
}
}
@media screen and (max-width: 440px) {
    .container3 {
    background-color: #ffffff;
    padding-left: 0;
    padding-right: 0;
} 
.col-md-12 {
	padding-right: 0 !important;
    padding-left: 0 !important;
}
}
.ex-checked-stars {
    color: #f8e71c !important;
}
.lk-img {
    margin: 0 auto !important;
} 
.fa-star {
   
}
.row {
    margin-right: 25px!important;
    margin-left: 25px !important;
}
.hh4 {
    font-family: Arial !important;
    font-size: 34px;
}
ins, .adsbygoogle{
	text-align: center !important;
    max-height: none !important;
}
h2 {font-weight: 700;}
.gold {
    background-color: gold;
    border-radius: 15px;
    color: #000;
    padding: 10px;
    
}
.green {
    background-color: green;
    border-radius: 15px;
    color: #fff;
    padding: 10px;
    
}
.green_special {
    background-color: green; 
    color: #fff;
    padding: 15px;
    display: grid;
    font-size: 2em;
    text-align: center;
}
.yellow {
    background-color: yellow;
    border-radius: 15px;
    color: #000;
    padding: 10px;
    
}
.blue {
    background-color: blue;
    border-radius: 15px;
    color: #fff;
    padding: 10px;
    
} 
.empty {
    background-color: transparent;
    border-radius: 15px;
    color: #fff !important;
    padding: 10px;
    
}
.grey {color: #6b6b6b  !important;}
.gold_font {color: gold;}
.orange_font {color: #ff5a00;}
.green_font {color: #5b9062;}
figure.hh1 {
    border: 0 solid #FFDD2D;
	border: none !important;
}
tr>td:first-child {
    font-size: 16px;
}
.imgg {
    width: 70%;
    padding: 20px;
}
.lk_special_offer {
    font-size: 1.8em;
    font-weight: 700; 
    color: #00da00; 
} 
@media (max-width: 450px) { 
    .font08 {
        font-size: .8em;
    }
    .bem_param {
        font-size: 14px !important;
        text-align: center;
    }
	.wordwrap{
		font-size: 0.9em;
	}
    .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
        padding: 4px;
    }
    figure.hh1 {
        padding-left: 0;
        padding-right: 0;
        padding-top: 10px;
        padding-bottom: 0px;
    }
    .ex-main-btn {
        font-size: .9em;
        margin-top: 0;
    }
    tr>td:first-child {
        font-size: 12px;
    }
    .col-xs-6 {
        padding-right: 5px !important;
        padding-left: 5px !important;
    }
    .gold, .empty, .blue, .yellow, .green {
        font-size: 11px !important;
    }
    .hh4 {
        padding: 5px;
        font-size: 1.4em;
    }
    .imgg {
        width: 100%;
    }
    .lk_special_offer { 
        font-size: 1em;
    }
}
.bem_offer {
    display: flex;
    margin-bottom: 0px;
    padding-left: 10px;
    padding-right: 10px;
    position: relative;
    transition: 0.2s;
    font-family: "Calibri";
    height: 160px;
}
.bem_offer__note {
    background-color: #FFF;
    color: #5b9062;
    font-size: 14px;
    <? if (in_array($domain, array('vkredito.ru', 'vkredito.tomnolane.ru', 'dengos.ru', 'dengos.tomnolane.ru'))) : ?>
        left: 2%;
    <? else : ?>
        right: 6%;
    <? endif; ?>
    padding: 0px 13px 0px;
    position: absolute;
    top: 3px;
    transition: 0.2s;
    height: 20px;
    line-height: 20px;
    border: 1px solid #5b9062;
    border-radius: 4% / 50%;
}
.bem_offer:hover {
    border: 1px solid #ebb700;
}
.bem_offer__image {
    text-align: center;
    align-items: center;
}
<? if (in_array($domain, array('vkredito.ru', 'vkredito.tomnolane.ru', 'dengos.ru', 'dengos.tomnolane.ru'))) : ?>
.bem_offer__image > img {
    vertical-align: unset !important;
    padding-top: 26px !important;
    height: 55%;
}
<? else : ?>
.bem_offer__image > img {
    vertical-align: unset !important;
    padding-top: 26px !important;
}
<? endif; ?>
.bem_offer__info {
    color: #000;
    width: auto;
    flex: auto;
    align-items: center;
    text-align: left;
    padding: 28px 5px 0px 5px!important;
}
.bem_offer__info-wrapper {
    justify-content: space-evenly;
    width: 100%;
}
.bem_param {
    font-size: 18px;
    font-weight: 700;
    line-height: 26px;
    padding-right: 10px;
}
.bem_offer__get {
    max-width: 285px;
    align-items: center;
    display: flex;
    text-align: right;
    vertical-align: middle;
    position: relative;
}
.bem_offer__button {
    height: 32px;
    border-radius: 8px;
    background-color: #57b029;
    line-height: 32px;
    text-align: center;
    color: white;
    font-size: 16px;
    text-transform: uppercase;
    text-shadow: 1px 1px 0 rgba(0,0,0,0.15);
    transition: 0.2s;
    margin-top: 14px;
    margin-left: 15px;
    margin-right: 15px;
    bottom: 10px;
    width: 90%;
    position: absolute;
}
@media (max-width: 470px) {
    .bem_offer__image > img {padding: 10px 0; width: 100%;}
    .bem_offer {
        display: block;
        padding-left: 0;
        padding-right: 0;
        height: unset;
    }
    .bem_offer__image {padding: 10px 0;}
    .bem_offer__info {padding: 10px;}
    .bem_offer__get{margin-bottom: 20px;}
}
.red2 {background-color: #e8392c}  
.darkred2 {background-color: #cb2d4b}
.orange2 {background-color: #ff9d11}
.green2 {background-color: #2a823f}
.pink2 {background-color: #cb2d4b}
@media (max-width: 1100px)
{
.bem_offers__wrapper {
        margin-bottom: 40px;
    display: grid;
    grid-template-rows: repeat(auto-fit, minmax(262px, 1fr));
    grid-template-columns: repeat(auto-fit, minmax(279px, 1fr));
    grid-gap: 35px 20px;
}
}


@media (max-width: 1100px)
{
.bem_offer {
    flex-wrap: initial;
    height: auto;
    margin: 0;
}
}

@media (max-width: 480px)
{
.bem_offer {
    display: block;
    margin-right: 0;
    padding: 15px;
    width: auto;
}
}
@media (max-width: 480px)
{
.bem_offer__image {
    width: 144px;
}
}

@media (max-width: 1100px)
{
.bem_offer__image {
    /*margin-bottom: 21px;*/
    width: 100%;
}
}

@media (max-width: 1100px)
{
.bem_offer__info {
    padding: 0;
}
}
 

@media (max-width: 1100px)
{
.bem_offer__info-wrapper>div {
    width: 50%;
    margin-bottom: 16px;
}
}

@media (max-width: 1100px)
{
.bem_offer__get {
    width: 100%;
    max-width: 100%;
    align-items: baseline;
}
}

@media (max-width: 1200px)
{
.bem_offer__button {
    font-size: 22px;
    height: 50px;
    line-height: 50px;
}
}

<? if (in_array($domain, array('vkredito.ru', 'vkredito.tomnolane.ru', 'dengos.ru', 'dengos.tomnolane.ru'))) : ?>
.my-col {
    padding-left: 30px !important;
    padding-right: 30px !important;
}
<? else : ?>
.my-col {
    padding-left: 0px !important;
    padding-right: 0px !important;
}
<? endif; ?>

.info-text-wrap {
    text-align: left;
    height: 24px;
    line-height: 24px;
}

.info-text-up {
    color: #000;
    font-weight: bold;
    font-size: 120%;
    font-family: Arial;
    float: left;
}

.info-text-down {
    color: #333;
    font-family: Arial;
    vertical-align: middle;
    padding-left: 5px;
    float: right;
    margin-right: 10%;
}

.info-under-text {
    height: 46px;
    border-radius: 2px;
    background-color: #828282;
    line-height: 46px;
    text-align: center;
    color: white;
    text-transform: uppercase;
    transition: 0.2s;
    margin-top: 14px;
    font-family: Arial;
}
.info-under-in {
    display: inline-block;
    vertical-align: middle;
    line-height: normal;
    padding: 2px;
}

<? if (in_array($domain, array('vkredito.ru', 'vkredito.tomnolane.ru', 'dengos.ru', 'dengos.tomnolane.ru'))) : ?>
.bo-left {
    border: 1px solid #5b9062;
    margin-right: 5px;
    margin-bottom: 15px;
}
.bo-right {
    border: 1px solid #5b9062;
    margin-left: 5px;
    margin-bottom: 15px;
}
<? else : ?>
.bo-left {
    border: 1px solid #5b9062;
    margin-right: 5px;
    margin-bottom: 10px;
}
.bo-right {
    border: 1px solid #5b9062;
    margin-left: 5px;
    margin-bottom: 10px;
}
<? endif; ?>
.bobg-top {
    background: rgb(248,255,232);
    background: -moz-linear-gradient(top, rgba(248,255,232,1) 0%, rgba(227,245,171,1) 100%);
    background: -webkit-linear-gradient(top, rgba(248,255,232,1) 0%,rgba(227,245,171,1) 100%);
    background: linear-gradient(to bottom, rgba(248,255,232,1) 0%,rgba(227,245,171,1) 100%);
}
.bobg-bottom {
    background: rgb(227,245,171);
    background: -moz-linear-gradient(top, rgba(227,245,171,1) 0%, rgba(248,255,232,1) 100%);
    background: -webkit-linear-gradient(top, rgba(227,245,171,1) 0%,rgba(248,255,232,1) 100%);
    background: linear-gradient(to bottom, rgba(227,245,171,1) 0%,rgba(248,255,232,1) 100%);
}

.stars-n-rating {
    position: absolute;
    top: 3px;
    right: 7%;
}

.pre-rating {
    margin-right: 5px;
    font-weight: bold;
    padding: 2px;
    border: 1px solid;
}
</style>