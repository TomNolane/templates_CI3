<?php include 'header.php';?>
<main>
    <section class="ex-main">
        <div class="container">
            <h1 class="hidden-xs">Если деньги нужны срочно,<br> есть проверенное и надежное решение</h1>
            <h2>Zaimcoin - скорая финансовая помощь</h2>
            <form id="anketa" action="/form" method="post">
            <input type="hidden" id="amount" name="amount" value="20000" />
            <input type="hidden" id="period" name="period" value="21" />
            <input type="hidden" id="form_slrd" name="form_slrd" value="15" /> 
            <input type="hidden" name="referer" value="<?php if (isset($_SERVER['HTTP_REFERER'])) echo $_SERVER['HTTP_REFERER']; ?>"> 
            <?php if (!empty($_REQUEST['ad_id'])) echo '<input type="hidden" name="ad_id" value="'.$_REQUEST['ad_id'].'">'; ?>         
            <div class="ex-calc-wraper"> 
                <div class="row">
                    <div class="col-md-8" id="specialIndex">
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
                    <div class="col-md-4" id="specialIndex2">
                        <figure class="ex-val-block">
                            <p id="ex-slider-val"></p>
                        </figure>
                    </div>
                </div> 
                <div class="row ex-tab-section">
                    <div class="col-md-8">
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
                    <div class="col-md-4 ex-for-button text-center" style=" margin-top: 30px;"> 
                        <a class="ex-orange-btn" style="cursor: pointer;" onclick="<?php echo $this->input->cookie('lk')? 'goToForm()' : 'goToForm()';?>">&nbsp;&nbsp;&nbsp;Получить деньги&nbsp;&nbsp;&nbsp;</a> 
                    </div>
                </div>
            </div>
        </form>
        </div>
    </section>
    <section class="ex-advantages hidden-xs hidden-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Самый быстрый и удобный сервис<br>
                        по подбору онлайн займов на нужную сумму и период</h2>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php require 'footer.php'; ?>