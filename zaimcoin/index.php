<?php include 'header.php';?>
<main>
    <section class="ex-main">
        <div class="container">
            <div class="col-md-10 col-sm-9">
            <h1 class="hidden-xs">Если деньги нужны срочно,<br> есть проверенное и надежное решение</h1>
            <h2>Zaimcoin - скорая <br class="visible-xs"> финансовая помощь</h2>
            <form id="anketa" action="/form<?=$utm;?>" method="post">
            <input type="hidden" id="amount" name="amount" value="20000" />
            <input type="hidden" id="period" name="period" value="21" />
            <input type="hidden" id="form_slrd" name="form_slrd" value="15" /> 
            <input type="hidden" name="fingerprint" id="fingerprint" value="">
            <input type="hidden" name="ip" id="ip" value="<?php echo $ip;?>">
            <input type="hidden" name="referer" value="<?php if (isset($_SERVER['HTTP_REFERER'])) echo $_SERVER['HTTP_REFERER']; ?>"> 
            <?php if (!empty($_REQUEST['ad_id'])) echo '<input type="hidden" name="ad_id" value="'.$_REQUEST['ad_id'].'">'; ?>         
            <div class="ex-calc-wraper"> 
                <div class="row">
                    <div class="col-md-8 col-xs-10" id="specialIndex">
                        <div class="ex-range-scope">
                            <div id="ex-main-slider-range">
                                <figure class="ex-range-slider">
                                    <input type="text" id="rangeSlider" name="rangeSlider" value="0"/>
                                </figure>
                                <div class="ex-slider-info">
                                    <span>1 000</span>  
                                    <span>100 000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-8" id="specialIndex2">
                        <figure class="ex-val-block">
                            <p id="ex-slider-val"></p>
                        </figure>
                    </div>
                </div> 
                <div class="row ex-tab-section">
                    <div class="col-md-9">
                        <ul class="ex-calc-block ">
                            <li>
                                <div class="ex-crumbs ex-crumbs-first"><span class="ex-unique">Вероятность</span>
                                    <span class="ex-prob"></span>
                                </div>
                            </li>
                            <li>
                                <div class="ex-crumbs"><span class="ex-unique">Срок займа</span>
                                    <span class="ex-time"></span>
                                </div>
                            </li>
                            <li>
                                <div class="ex-crumbs"><span class="ex-unique">Комиссия</span>
                                    <span class="ex-Commission"></span>
                                </div>
                            </li>
                            <li>
                                <div class="ex-crumbs"><span class="ex-unique">К возврату</span>
                                    <span class="ex-total"></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-4 ex-for-button text-center spec_btn_index"> 
                        <button class="ex-orange-btn"  type="submit" style="cursor: pointer;">&nbsp;&nbsp;&nbsp;Получить деньги&nbsp;&nbsp;&nbsp;</button> 
                    </div>
                    <div class="col-md-12 text-center spec_index"> 
                        <!-- <p class="color-black">Оставь заявку и участвуй в розыгрыше Iphone XS 16.11.2018</p> -->
                    </div>
                </div>
            </div>
        </form>
        </div>
        </div>


    </section>
    <!-- <div class="container">
  <div class="iphone">
    <div class="buttons">
      <div class="silent"></div>
      <div class="sleep"></div>
      <div class="vol-up"></div>
      <div class="vol-down"></div>
    </div>
    <div class="top">
      <div class="black-bar"></div>
      <div class="iphone-top"></div>
    </div>
    <div class="components">
      <div class="speaker"></div>
      <div class="camera">
        <div class="shine-left"></div>
        <div class="shine-right"></div>
      </div>
    </div>
    <div class="top-bar"></div>
    <div class="bottom-bar"></div>
    <div class="screen">
      <video loop="loop" autoplay="autoplay" src="https://images.apple.com/media/us/iphone-x/2017/01df5b43-28e4-4848-bf20-490c34a926a7/overview/primary/hero/large_2x.mp4"></video>
      <div class="service">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </div>
      <div class="battery">
        <div class="nub"></div>
        <div class="energy"></div>
      </div>
      <div class="lock-carrier">AT&T</div>
      <div class="lock-lock"></div>
      <div class="info"> -->
            <?php 
                // $next5min = time() + 0;//(60 * 5); 
                // $months = array( 1 => 'Января' , 'Февраля' , 'Марта' , 'Апреля' , 'Мая' , 'Июня' , 'Июля' , 'Августа' , 'Сентября' , 'Октября' , 'Ноября' , 'Декабря' );
                // $weeks = array( 1 => 'Понедельник' , 'Вторник' , 'Среда' , 'Четверг' , 'Пятница' , 'Суббота' , 'Воскресенье');
            ?>
        <!-- <div class="lock-time"><?php echo date('H:i', $next5min)?></div>
        <div class="lock-date"><?php echo date($weeks[date( 'N' )]).','.date('d').' '.date($months[date( 'n' )]);?></div>
      </div> -->
      <!--.lock-swipe Swipe up to unlock-->
      <!-- <div class="lock-bar"></div>
    </div>
  </div> 
</div> -->
<!-- goo filter for notch shape-->
<!-- <svg viewbox="0 0 0 0 ">
  <filter id="goo" color-interpolation-filters="sRGB">
    <feGaussianBlur in="SourceGraphic" stdDeviation="3" result="blur"></feGaussianBlur>
    <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 8 -1" result="cm"></feColorMatrix>
    <feBlend in="sourceGraphic" in2="cm" mode="multiply"></feBlend>
  </filter>
</svg> -->

    <section class="ex-advantages hidden-xs hidden-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <h2 class="text-center"><a class="anchor" name="id2"></a>Самый быстрый и удобный сервис<br>
                        по подбору онлайн займов на нужную сумму и период</h2>
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- zaimcoin -->
                        <ins class="adsbygoogle"
                            style="display:block"
                            data-ad-client="ca-pub-4970738258373085"
                            data-ad-slot="9741339751"
                            data-ad-format="auto"
                            data-full-width-responsive="true"></ins>
                        <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    <div class="ex-adv-bg">
                        <div class="row">
                            <div class="col-md-4 ex-line-right ">
                                <div class="row ex-pad-not">
                                    <div class="ex-adv-block ex-line-bottom">
                                        <img src="/templates/zaimcoin/assets/img/icon1.png" alt="icon1.png">
                                        <p class="ex-og-text">3 450 000 руб</p>
                                        <p>Общая сумма займов, уже выданная МФО
                                            через Zaimcoin. Деньги доступны в любой точке РФ
                                            и при любой кредитной истории.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ex-line-right ">
                                <div class="row">
                                    <div class="ex-adv-block ex-line-bottom">
                                        <img src="/templates/zaimcoin/assets/img/icon2.png" alt="icon2.png">
                                        <p class="ex-og-text">24/7/365</p>
                                        <p>Круглосуточный режим работы сервиса позволяет взять деньги именно тогда,
                                            когда они
                                            нужны
                                            –
                                            даже ночью.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ">
                                <div class="row ex-pad-not-right">
                                    <div class="ex-adv-block ex-line-bottom">
                                        <img src="/templates/zaimcoin/assets/img/icon3.png" alt="icon3.png">
                                        <p class="ex-og-text">100 000 руб</p>
                                        <p>Максимально доступная сумма кредитования.
                                            Хватит на многое!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ex-line-right">
                                <div class="row">
                                    <div class="ex-adv-block">
                                        <img src="/templates/zaimcoin/assets/img/icon4.png" alt="icon4.png">
                                        <p class="ex-og-text">3+3</p>
                                        <p>3 минуты уйдет у вас на заполнение анкеты,
                                            состоящей из 3 шагов. Проще не бывает.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 ex-line-right">
                                <div class="row">
                                    <div class="ex-adv-block">
                                        <img src="/templates/zaimcoin/assets/img/icon5.png" alt="icon5.png">
                                        <p class="ex-og-text">5 вариантов</p>
                                        <p>Вам будут доступны как минимум 5 предложений
                                            от крупных МФО. Выбирайте лучшие условия
                                            и экономьте на % ставке!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="ex-adv-block">
                                        <img src="/templates/zaimcoin/assets/img/icon6.png" alt="icon6.png">
                                        <p class="ex-og-text">7 минут</p>
                                        <p>Среднее время одобрения заявки. Вы не успеете допить чашку кофе, а деньги уже
                                            появятся
                                            на вашей карте.</p>
                                    </div>
                                </div>
                            </div>
                            <a class="anchor" name="id3"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<a class="anchor" name="id4"></a>
<?php require 'footer.php'; ?>