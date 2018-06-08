    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="/templates/test/assets/img/favicon.png" />
    <?php 
        echo '<!-- common style css--> ';
        echo '<style>'; 
        require "templates/common/new2/css/common.css";
        require "templates/test/assets/css/style.css";
        if ($this->uri->segment(1) == 'lk' || $this->uri->segment(1) == 'lk2' || $this->uri->segment(1) == 'lk3') 
        {
            require "templates/test/assets/css/style_lk.css";
            require "templates/common/new2/css/lk.php";
        }
        if ($this->uri->segment(1) == 'form') 
        {
            require "templates/common/new2/css/form.css";
            require "templates/test/assets/css/style_form.css";
        }
        if($this->uri->segment(1) == ' ' || $this->uri->segment(1) == '' || $this->uri->segment(1) == 'index')
        {
            echo'.dg-container{
                width: 100%;
                height:400px;
                position: relative;
            }
            .dg-wrapper{
                width:170px;
                height:170px;
                margin: 0 auto;
                position: relative;
                -webkit-transform-style: preserve-3d;
                -moz-transform-style: preserve-3d;
                -o-transform-style: preserve-3d;
                -ms-transform-style: preserve-3d;
                transform-style: preserve-3d;
                -webkit-perspective: 1000px;
                -moz-perspective: 1000px;
                -o-perspective: 1000px;
                -ms-perspective: 1000px;
                perspective: 1000px;
            }
            .dg-wrapper .item{
                width:170px;
                height:170px;
                display: block;
                position: absolute;
                left: 0;
                top: 0;
            }
            .dg-wrapper .item.dg-transition{
                -webkit-transition: all 0.5s ease-in-out;
                -moz-transition: all 0.5s ease-in-out;
                -o-transition: all 0.5s ease-in-out;
                -ms-transition: all 0.5s ease-in-out;
                transition: all 0.5s ease-in-out;
            }
            .dg-wrapper .item img{
                border-radius:50%;
                display: block;
            }
            .dg-wrapper .item div{
                display: none;
                margin:50px 0 0 -300px;
                position: absolute;
                text-align: center;
                width:770px;
            }
            .dg-wrapper .item.dg-center div{
                display: block;
            }
            .dg-container nav{
                left: 50%;
                margin-left:-270px;
                position: absolute;
                top:60px;
                width:540px;
                z-index: 1000;
            }
            .dg-container nav span{
                border:2px solid rgba(128,144,156,0.25);
                border-radius:50%;
                color:#80909c;
                cursor:pointer;
                float: left;
                font-size:18px;
                line-height:46px;
                text-align:center;
                height:50px;
                width:50px;
            }
            .dg-container nav span:hover{
                opacity: 1;
            }
            .dg-container nav span.dg-next{
                background-position: top right;
                float: right;
            }';
        }
		echo '</style>'; 
    ?>