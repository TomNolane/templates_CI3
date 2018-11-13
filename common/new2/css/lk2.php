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
    <?php if($site == "zaimomix") {?>
    display: inline-block !important; 
    <?php } ?>
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
    <?php if($site == "zaimomix") {?>
    display: inline-block !important; 
    <?php } ?> 
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
/* ins {
    max-height: 150px !important;
    height: 150px !important;
}

.adsbygoogle {
    max-height: 150px !important;
    height: 150px !important;
} */

.offers { 
    <?php if($site == "zaimomix") {?>
    display: inline-block !important; 
    <?php } ?>
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
    <?php if($site == "zaimol") {?>
        margin-right: 15px !important;
        margin-left: 5px !important;
    <?php }else {?>
        margin-right: 0 !important;
        margin-left: 0 !important;
    <?php }?>
}
footer {
    <?php if($site == "rublimo") {?>
    background-color: #fff !important;
    <?php }?>
}