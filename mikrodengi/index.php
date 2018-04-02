<?php require 'header.php'; ?>
<main>
    <form id="anketa" action="/form" method="post">
        <input type="hidden" id="amount" name="amount" value="20000" />
        <input type="hidden" id="period" name="period" value="21" />
        <input type="hidden" id="form_slrd" name="form_slrd" value="15" />
        <input type="hidden" name="referer" value="<?php if (isset($_SERVER['HTTP_REFERER'])) echo $_SERVER['HTTP_REFERER']; ?>">
        <?php if (!empty($_REQUEST['ad_id'])) echo '<input type="hidden" name="ad_id" value="'.$_REQUEST['ad_id'].'">'; ?>
        <div class="container ">
            <!-- <div class="text-center" style="z-index: 999 !important; position: relative;"><iframe src="https://betfaq.ru/widget/form/18/?__hash=32948"  frameborder="0" width="1100" height="90" ></iframe></div> -->
            <div class="ex-main-section">
                <div class="row">
                    <div class="col-md-6">
                        <div class="ex-main-left">
                            <h1>деньги
                                <br> за 7 минут,
                                <span>независимо
                                    <br> от кредитной истории
                                </span>
                            </h1>
                            <ul class="ex-cards hidden-xs hidden-sm">
                                <li class="active">
                                    <a data-toggle="tab" href="/zaim-card">
                                        <img src="/templates/mikrodengi/assets/img/visa-color.png" alt="visa-color.png">
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="/zaim-card">
                                        <img src="/templates/mikrodengi/assets/img/mastercard-color.png" alt="mastercard-color.png">
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="/zaim-card">
                                        <img src="/templates/mikrodengi/assets/img/maestro-color.png" alt="maestro-color.png">
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="/zaim-card">
                                        <img src="/templates/mikrodengi/assets/img/mir-color.png" alt="mir-color.png">
                                    </a>
                                </li>
                            </ul>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="text-center" style="z-index: 999 !important;position: relative;">
                                        <a href="https://panel.marketagent.com/Register/Account/NewRegistration/ru?RefUID=1466811"
                                            target="_new">
                                            <img style="border-style: none;" class="img-responsive" src="https://www.marketagent.com/MA_WebResources/pic/banner/468x60_Marketagent_weiss_RU.gif">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ex-calc-block">
                            <div class="ex-wrapper">
                                <div class="ex-slider-block">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p class="ex-slider-val-1"></p>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="ex-slider-val-2"></p>
                                        </div>
                                    </div>

                                </div>
                                <div class="ex-range-slider-ruble ex-pr">
                                    <div class="ex-info">
                                        <span>сумма (в рублях)</span>
                                    </div>
                                    <input id="rangeSlider1" name="rangeSlider" />
                                </div>
                                <div class="ex-range-slider-time ex-pr">
                                    <div class="ex-info">
                                        <span>срок (в днях)</span>
                                    </div>
                                    <input id="rangeSlider2" name="rangeSlider2" />
                                </div>
                                <div class="ex-action">
                                    <button class="ex-main-btn">Получить деньги</button>
                                </div>
                            </div>
                        </div>
                        <p>Бесплатный подбор займов – без справок и отказов</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="ex-articles">
            <div class="container">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- Микроденьги #1 -->
                <ins class="adsbygoogle text-center" style="display:block" data-ad-client="ca-pub-9729149501728150" data-ad-slot="5300144286" data-ad-format="auto"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
                <h2 class="text-center">Статьи</h2>
                <div class="row">
                    <a href="/delay">
                        <div class="col-md-4">
                            <div class="ex-art-block ex-on-small-device ex-art-active">
                                <div class="ex-art-img ex-art-img1">
                                </div>
                                <h3>Что такое отсрочка погашения займа?</h3>
                                <p class="">
                                    При обращении в микрофинансовую организацию (МФО) будущий заёмщик надеется на своевременное закрытие долга. Что же делать,
                                    если не удаётся вовремя закрыть взятый онлайн займ из-за сложившихся обстоятельств? Идеальный
                                </p>
                                Читать далее >>
                            </div>
                        </div>
                    </a>
                    <a href="/steps">
                        <div class="col-md-4">
                            <div class="ex-art-block ex-on-small-device">
                                <div class="ex-art-img ex-art-img2">
                                </div>
                                <h3>Основные способы получения онлайн займов</h3>
                                <p class="">
                                    В данной статье осветим наиболее распространённые варианты получения онлайн займов.
                                    <br> -На банковскую карту VISA или Maestro. По традиции это самый популярный вариант получить
                                    займ.
                                </p>
                                Читать далее >>
                            </div>
                        </div>
                    </a>
                    <a href="/choice">
                        <div class="col-md-4">
                            <div class="ex-art-block ex-on-small-device">
                                <div class="ex-art-img ex-art-img3">
                                </div>
                                <h3>Как выбрать микрофинансовую организацию?
                                </h3>
                                <p class="">
                                    При выборе микрофинансовой организации (МФО) для взятия личного займа онлайн необходимо учитывать ряд параметров. - Присутствие
                                    данной компании в официальном реестре микрофинансовых организаций. Реестр ведётся и
                                </p>
                                Читать далее >>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-12 text-center">
            </div>
        </div>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Микроденьги #1 -->
        <ins class="adsbygoogle text-center" style="display:block" data-ad-client="ca-pub-9729149501728150" data-ad-slot="5300144286" data-ad-format="auto"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
        <div class="ex-about">
            <div class="container">
                <h2 class="text-center">Отзывы о нас</h2>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="ex-about-block">
                            <p>Срочно понадобились деньги на подарок, сынишке 5 лет, и никто не мог занять… У родственников
                                тоже проблемы, да и просить неудобно. В итоге залезла в интернет, прочитала на этом сайте,
                                что займ выдают за 15 минут!! Не поверила конечно, но попробовала, и правда, сразу же пришли
                                деньги, и проблема решена! Спасибо что помогли и бесплатно подобрали срочный займ, всё верну
                                с зарплатой!!
                            </p>
                            <div class="ex-review">
                                <span class="ex-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </span>
                                <h3>Юлия Мордвинова, 29 лет, г. Сочи</h3>
                            </div>
                        </div>
                        <div class="ex-about-block">
                            <p>Ура! Это единственное место, где я получил займ без отказа. Мне нужно было срочно снять квартиру,
                                а родственников почти нет, никто не поможет… И все банки в отказ, потому что я студент. А
                                здесь даже лишнего вопроса не задали, я только указал паспортные данные! Займ я снял минут
                                через 10 после одобрения. И кстати, услуги сервиса бесплатны, это правда, ни рубля не взяли!</p>
                            <div class="ex-review">
                                <span class="ex-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                                <h3>Юрий Белкин, 21 год, г. Санкт-Петербург</h3>
                            </div>
                        </div>
                        <div class="ex-about-block">
                            <p>Попал в минуса по бизнесу, и нужно было срочно оплатить аренду! Тут друг посоветовал сервис Микроденьги,
                                сказал, что здесь не надо показывать справки и искать поручителей. А мне как раз это и надо,
                                времени совсем в обрез!!! Онлайн займ срочно перечислили на карту, я ждал несколько минут,
                                здесь не обманывают!! Супер услуга, теперь за займом только к вам, но надеюсь не понадобится))</p>
                            <div class="ex-review">
                                <span class="ex-stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                                <h3>Сергей Калугин, 32 года, г. Псков</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</main>
<?php require 'footer.php'; ?>