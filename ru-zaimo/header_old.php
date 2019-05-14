<?php
    $main = empty($main)?'style':$main;
    $description = empty($description)?'':$description;
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?=$description?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no, maximum-scale=1.0" />

    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title><?=$my_title?></title>

    <!-- Favicon  -->
    <link rel="shortcut icon" href="/templates/ru-zaimo/img/core-img/favicon.ico">

    <!-- Style css -->
    <link rel="stylesheet" href="/templates/ru-zaimo/<?=$main?>.css">
    <link href="/templates/ru-zaimo/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Responsive css -->
    <link rel="stylesheet" href="/templates/ru-zaimo/css/responsive.css">

    <!--[if IE]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
    <div id="preloader">
        <span class="cssload-loader"><span class="cssload-loader-inner"></span></span>
    </div>
    <style>
        .table {
position: initial !important;
    }
.table-responsive {
display: block;
width: 100%;
overflow-x: auto;
}
    .popup08 {
            font-size: 1.1em;
            font-weight: 600;
            letter-spacing: 2px
          }
    
          .close-btn {
            cursor: pointer
          }
    
          .notice-block>a {
            text-decoration: none;
            color: #000 !important
          }
    
          .notice-data {
            padding-left: 15px;
            width: 250px
          }
    
          .notice-data,
          .notice-image {
            display: inline;
            vertical-align: top;
            width: 70%
          }
    
          .notificate-wrapper {
            z-index: 8888;
            background: #fff;
            border-radius: 7px;
            bottom: 15px;
            right: 15px;
            outline: 1px solid #999;
            position: fixed;
            display: none;
            -webkit-box-shadow: 1px 1px 10px 0 rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 1px 1px 10px 0 rgba(0, 0, 0, 0.75);
            box-shadow: 1px 1px 10px 0 rgba(0, 0, 0, 0.75)
          }
    
          .notice-block {
            color: #000;
            display: none;
            position: relative;
            padding: 20px;
            overflow: hidden;
            border-radius: 10px;
            border: 1px solid #ccc;
            background: #fff;
            margin-top: 15px;
            z-index: 9999;
            -webkit-box-shadow: 1px 1px 10px 0 rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 1px 1px 10px 0 rgba(0, 0, 0, 0.75);
            box-shadow: 1px 1px 10px 0 rgba(0, 0, 0, 0.75)
          }
    
          #notificate_url {
            text-decoration: none;
            color: #000
          } 
    
          .btn_popup {
            margin-top: 10px;
            width: 100%;
            height: 45px;
            font-family: 'Roboto', sans-serif;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 2.5px;
            font-weight: 500;
            color: #000;
            background-color: #fff;
            border: 1px solid #000;
            border-radius: 45px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.5);
            transition: all .3s ease !important;
            cursor: pointer
          }
    
          .btn_popup:hover {
            background-color: #ff5722;
            box-shadow: 0 15px 20px rgba(119, 29, 0, 0.73);
            color: #fff;
            transform: translateY(-7px)
          }
    
          .notificate-wrapper-show {
            display: block;
            animation: showBlock 1s linear forwards;
            -webkit-animation: showBlock 1s linear forwards;
          }
          
          @keyframes showBlock {
            0% {
              opacity: 0
            }
    
            100% {
              opacity: 1
            }
          }
          </style>