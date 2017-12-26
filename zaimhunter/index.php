<?php require 'header.php'; ?>
<main class="">
    <section class="ex-start-head">
        <div class="container ">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <div class="ex-bg hidden-sm hidden-xs">
                        <h1>Мгновенные<br>
                            займы онлайн</h1>
                        <p>Заполните простую анкету и получите деньги на карту
                            <br>или
                            наличными через систему CONTACT</p>
                    </div>
                </div>
                <div class="col-lg-1 col-xs-0"></div>
                <div class="col-lg-5 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">
                    <div class="ex-calc-wraper"> 
                    <h3 class="visible-sm visible-xs hidden-md hidden-lg special_index2 font26 text-center"><b>Мгновенные займы онлайн.</b></h3><br> 
                        <form id="anketa" action="/form" method="post">
                        <div class="ex-calc-block text-center">
                            <p class="font26 hidden-xs hidden-sm visible-md visible-lg"><b>Срок займа (в днях)</b></p>
                            <ul class="ex-zaim-time hidden-xs hidden-sm visible-md visible-lg" id="index_special"> 
                                <li class="ex-active-time"><span>61</span></li>
                                <li><span>130</span></li>
                                <li><span>365</span></li> 
                            </ul>
                            <p class="ex-time"></p>
                            <p>
                                <span class="ex-unique"></span>
                                    <center><a class="btn ex-main-btn ex-total special_index5 hidden-xs hidden-sm visible-md visible-lg" onclick="<?php echo $this->input->cookie('lk')? 'goToForm()' : 'goToForm()';?>"></a></center>
                                    <a class="ex-total hidden-lg hidden-md visible-xs visible-sm" style="width: 100%;margin-top:-30px; color: #000000 !important;" onclick="<?php echo $this->input->cookie('lk')? 'goToForm()' : 'goToForm()';?>"></a>
                            </p>
                        </div>

                        <input type="hidden" id="amount" name="amount" value="20000" />
                        <input type="hidden" id="period" name="period" value="21" />
                        <input type="hidden" id="form_slrd" name="form_slrd" value="15" />
                       
                        <input type="hidden" name="referer" value="<?php if (isset($_SERVER['HTTP_REFERER'])) echo $_SERVER['HTTP_REFERER']; ?>"> 
                        <?php if (!empty($_REQUEST['ad_id'])) echo '<input type="hidden" name="ad_id" value="'.$_REQUEST['ad_id'].'">'; ?> 

                        <div class="ex-range-scope">
                            <div id="ex-main-slider-range">
                                <figure class="ex-range-slider">
                                    <input type="text" id="rangeSlider" name="rangeSlider" value="0"/>
                                    <span class="ex-probability"></span>
                                </figure>
                                <div class="ex-slider-info">
                                    <span>1000</span> 
                                    <span>100 000</span>
                                </div>
                            </div> 
                        </div> 
                    <figure class="ex-val-block">
                        <p id="ex-slider-val" class="text-center hidden-xs hidden-sm"></p>
                        <p id="ex-slider-val" class="val2 text-left hidden-md hidden-lg"></p>
                    </figure> 
                    <center><a class="btn ex-main-btn hidden-lg hidden-md visible-xs visible-sm" style="width: 100%;" onclick="<?php echo $this->input->cookie('lk')? 'goToForm()' : 'goToForm()';?>">Получить деньги</a>
                    <p class="font23 hidden-lg hidden-md visible-sm visible-xs" style="margin-top:10px;"><b>Срок займа (в днях)</b></p></center>
                        <ul class="ex-zaim-time ex-zaim-time2 visible-xs visible-sm hidden-md hidden-lg" id="index_special" style="margin-bottom: 20px;"> 
                            <li class="ex-active-time" id="ex-active-time"><span>61</span></li>
                            <li><span>130</span></li>
                            <li><span>365</span></li> 
                        </ul>
                    <div class="text-center">
                        <center><a class="btn ex-main-btn hidden-xs hidden-sm visible-md visible-lg" style="width: 65%;" onclick="<?php echo $this->input->cookie('lk')? 'goToForm()' : 'goToForm()';?>">Получить деньги</a></center>
                    </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ex-service hidden-xs hidden-sm">
        <div class="container">
            <h2>Преимущества нашего сервиса</h2>
            <div class="row">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-xs-2">
                            <div class="ex-img-block">
                                <img src="/templates/zaimhunter/assets/img/diamond.png" alt="diamond.png" class="ex-vh-center">
                            </div>
                        </div>
                        <div class="col-xs-10 special_index4">
                            <h3>94.5% вероятность одобрения займа</h3>
                            <p>Если вы не являетесь злостным неплательщиком по кредитам и микрокредитам, решение системы будет в вашу пользу.</p><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2">
                            <div class="ex-img-block">
                                <img src="/templates/zaimhunter/assets/img/placeholder.png" alt="placeholder.png" class="ex-vh-center">
                            </div>
                        </div>
                        <div class="col-xs-10 special_index4">
                            <h3>В любой точке РФ</h3>
                            <p>Географическое положение и место проживания клиента не имеют значения.  При необходимости вы можете получить деньги, даже находясь в чужом городе. Основное условие – пребывание на территории РФ.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2">
                            <div class="ex-img-block">
                                <img src="/templates/zaimhunter/assets/img/www.png" alt="www.png" class="ex-vh-center">
                            </div>
                        </div>
                        <div class="col-xs-10 special_index4">
                            <h3>Онлайн получение денег</h3>
                            <p>Никаких поездок в офисы банков  и очередей. Все документы оформляются в режиме онлайн. Одобренная сумма в течение 15 минут поступит в ваше распоряжение.</p>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-xs-2">
                            <div class="ex-img-block">
                                <img src="/templates/zaimhunter/assets/img/man.png" alt="man.png" class="ex-vh-center">
                            </div>
                        </div>
                        <div class="col-xs-10 special_index4">
                            <h3>Без поручителей</h3>
                            <p>Для займа на сумму до 100 000 руб. вам не придется искать поручителей и указывать их контактные данные.  Долговые обязательства перед МФО несете только вы.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2">
                            <div class="ex-img-block">
                                <img src="/templates/zaimhunter/assets/img/credit-story.png" alt="credit-story.png" class="ex-vh-center">
                            </div>
                        </div>
                        <div class="col-xs-10 special_index4">
                            <h3>С любой кредитной историей</h3>
                            <p>Вы можете улучшить свою кредитную историю, если своевременно или досрочно погасите онлайн-займ.</p><br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2">
                            <div class="ex-img-block">
                                <img src="/templates/zaimhunter/assets/img/24h.png" alt="24h.png" class="ex-vh-center">
                            </div>
                        </div>
                        <div class="col-xs-10 special_index4">
                            <h3>Круглосуточно</h3>
                            <p>Сервис работает в режиме 24/7/365. Вы можете получить займ в выходной день, поздно вечером или ночью – как вам удобно.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ex-about-zaim hidden-sm hidden-xs">
        <div class="container">
            <h2 style="margin-top: 30px !important;">Статьи о займах</h2>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <a id="href" href="/credits">
                        <div class="ex-about-zaim-block">
                            <h4>Непосильные кредиты:
                                как не попасть<br>
                                в долговую яму</h4>
                            <img src="/templates/zaimhunter/assets/img/1.jpg" alt="1.png">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a id="href" href="/restructuring">
                        <div class="ex-about-zaim-block">
                            <h4>Реструктуризация
                                кредита</h4>
                            <img src="/templates/zaimhunter/assets/img/2.jpg" alt="2.png">
                        </div>
                    </a>
                </div> 
                <div class="col-md-3 col-sm-6">
                    <a id="href" href="/refinancing">
                        <div class=" ex-about-zaim-block">
                            <h4>Рефинансирование</h4>
                        <img src="/templates/zaimhunter/assets/img/3.jpg" alt="3.png">
                        </div>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6">
                    <a id="href" href="/insolvency">
                        <div class="ex-about-zaim-block">
                            <h4>Банкротство<br>
                                физических лиц</h4> 
                            <img src="/templates/zaimhunter/assets/img/4.jpg" alt="4.png">
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </section>
    <section class="ex-condition hidden-sm hidden-xs">
        <div class="container">
            <h2>Подпишитесь на нашу рассылку с лучшими условиями займа</h2>
            <div class="row">
                <div class="col-sm-5 col-xs-6 text-center">
                    <img src="/templates/zaimhunter/assets/img/pic-email.png" alt="pic-email.png">
                </div>
                <div class="col-sm-1 col-xs-0"></div> 
                <div class="col-sm-5 col-xs-6">
                    <p>На указанную электронную почту вам будут приходить оповещения с лучшими условиями кредитования.
                        Вы не пропустите интересные и выгодные предложения!</p> 
                        <div class="form-group">
                            <input type="text" id="feedback-name2" placeholder="Имя" title="Имя" required>
                        </div>
                        <div class="form-group">
                            <input type="email" id="feedback-email2" placeholder="Email" title="Email" required>
                        </div> 
                        <!-- Hidde this block -->
                        <div class="form-group hidden">
                            <input type="text" class="form-control" id="feedback-phone2" placeholder="Телефон" title="Телефон" value="+7777777777" required>
                        </div>
                        <div class="form-group hidden">
                            <textarea class="form-control" id="feedback-comment2" placeholder="Текст вашего сообщения" title="Текст вашего сообщения" required>Хочу подписаться на рассылку</textarea>
                        </div>
                        <!-- Hidde this block -->
                        <div class="ex-actions text-center">
                            <button class="ex-main-btn" id="feedback-send2" style="margin-top: 0px; padding: 10px; width: 50%; background-color:#1991eb;">подписаться</button> 
                        </div>
                </div>
                <div class="col-sm-1"></div>

            </div>
        </div>

    </section>

    <?php
    $reviews = array(
        array('img' => '/templates/zaimhunter/assets/img/Ivan_K.png', 'name' => 'Иван К, студент:',   'text' => 'Я учусь на очном, живу отдельно от родителей, и денег у них не беру. Подрабатываю, но доходы на фрилансе нерегулярные. А небольшие суммы всегда нужны: то на подарок, то на поездку с друзьями. Выход нашелся: уже несколько раз оформлял онлайн-займ на небольшие суммы в 10 000 р. В чем выгода сервиса: заполнил один раз анкету – получил несколько предложений, из которых уже можно выбрать лучшие.  Написал отзыв, потому что многие люди боятся микрокредитов. Если четко просчитывать свою платежеспособность, никакого подвоха нет, и это единственная возможность например, для студентов. Просто читайте и считайте.'),
        array('img' => '/templates/zaimhunter/assets/img/Evgeni.png', 'name' => 'Евгений',   'text' => 'Работодатель задержал на две недели выплату зарплаты, а у меня был первый юбилей свадьбы – и без подарка жене не обойтись, и занять не у кого. Все друзья работают в нашей же компании. На мне два кредита, третий бы уже не дали. Решил посмотреть, можно ли оформить микрозайм – и честно скажу, боялся. Но за пару минут мне предложили несколько нормальных вариантов, и я взял 15 000  на всякий случай на три недели.  Купил жене красивое кольцо! Зарплату выдали раньше, и я еще и досрочно вернул займ. Теперь знаю, что выход из ситуации всегда есть.'),
        array('img' => '/templates/zaimhunter/assets/img/Anton.png', 'name' => 'Антон',        'text' => 'И смех и грех: живем от зарплаты до зарплаты, заначек делать не успеваем, все время какие-то расходы. И тут сломался унитаз, а лишних денег нет. И жить без унитаза нереально, и кредит на такую смешную сумму в 7 000 рублей не взять, и все нужно вообще в один вечер решить! Спасибо товарищу: посоветовал ваш сервис, сказал, что деньги приходят мгновенно. Они реально пришли через 5 минут после оформления, и мы понеслись в магазин. Через неделю получили зарплату, погасили, все без проблем.  Сломается еще что-нибудь – знаю, куда обращаться.')
    ); 
    ?>
    

    <section class="ex-about hidden-sm hidden-xs">
        <div class="container">
            <h2>Отзывы о нас</h2>
        </div>
        <div class="owl-carousel owl-theme">
            <?php foreach($reviews as $i => $item)
        {  
        echo '
        <div class="ex-wrapper">
        <div class="row">
            <div class="col-sm-2">
                <div class="ex-for-image"><img id="spec_img" src="'.$item['img'].'" alt="avatar"></div>
            </div>
            <div class="col-sm-10">
                <h3>'.$item['name'].'</h3>
                <p>'.$item['text'].'</p>
            </div>
        </div>
        </div>';}
    ?>
        </div>
    </section>
</main>
<?php require 'footer.php'; ?>