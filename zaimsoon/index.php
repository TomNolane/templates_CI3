<?php require 'header.php'; ?>
<main>
    <section class="ex-main-content">
        <form id="anketa" action="/form" method="post">
            <input type="hidden" id="amount" name="amount" value="20000" />
            <input type="hidden" id="period" name="period" value="21" />
            <input type="hidden" id="form_slrd" name="form_slrd" value="15" />
            <input type="hidden" name="referer" value="<?php if (isset($_SERVER['HTTP_REFERER'])) echo $_SERVER['HTTP_REFERER']; ?>">
            <?php if (!empty($_REQUEST['ad_id'])) echo '<input type="hidden" name="ad_id" value="'.$_REQUEST['ad_id'].'">'; ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-5 ">
                        <h1>
                            <span class="ex-zaimsoon">Zaimsoon</span>
                            <span class="ex-line">–</span>
                            экспресс займ
                            <br> без отказа</h1>
                        <h2 class="hidden-xs hidden-sm">Безотказный займ
                            <br> в 3 клика</h2>
                    </div>
                    <div class="col-md-7 ex-rectangle">
                        <div class="ex-wrapper">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="ex-calc-wraper">
                                        <figure class="ex-val-block">
                                            <p class="ex-slider-val"></p>
                                        </figure>
                                        <div class="ex-range-scope">
                                            <div id="ex-main-slider-range">
                                                <figure class="ex-range-slider">
                                                    <input type="text" id="rangeSlider" name="rangeSlider" value="0" />
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="ex-tab-section">
                                            <table class="ex-calc-block">
                                                <tr>
                                                    <td class="ex-val-block">
                                                        <span class="ex-unique">Сумма займа</span>
                                                    </td>
                                                    <td>
                                                        <p class="ex-current-val es-val-style"></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="ex-crumbs">
                                                        <span class="ex-unique">Срок займа</span>
                                                    </td>
                                                    <td>
                                                        <p class="ex-time es-val-style"></p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="ex-crumbs">
                                                        <span class="ex-unique">К возврату</span>
                                                    </td>
                                                    <td>
                                                        <p class="ex-total es-val-style"></p>
                                                    </td>
                                                </tr>
                                            </table>
                                            <div class="ex-for-button">
                                                <button class="ex-main-btn">Получить деньги</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a onClick="goToForm();" id="spec_ind_a">
                                <div class="col-md-3 hidden-xs hidden-sm">
                                    <ul class="ex-payment">
                                        <li>
                                           <img src="/templates/zaimsoon/assets/img/visa.png" alt="visa.png">
                                        </li>
                                        <li>
                                            <img src="/templates/zaimsoon/assets/img/mastercard.png" alt="mastercard.png">
                                        </li>
                                        <li>
                                            <img src="/templates/zaimsoon/assets/img/yandex.png" alt="yandex.png">
                                        </li>
                                        <li>
                                        <img src="/templates/zaimsoon/assets/img/qiwi.png" alt="qiwi.png">
                                        </li>
                                        <li>
                                        <img src="/templates/zaimsoon/assets/img/contact.png" alt="contact.png">
                                        </li>
                                        <li>
                                        <img src="/templates/zaimsoon/assets/img/bank.png" alt="bank.png">
                                        </li>
                                    </ul>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <section class="ex-section-2 hidden-xs hidden-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h3>Как получить деньги?</h3>
                    <div class="ex-get-money">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="ex-img-place">
                                    <img src="/templates/zaimsoon/assets/img/web.png" alt="web.png">
                                </div>
                            </div>
                            <div class="col-md-9 ex-text-place">
                                <h4>Выберите параметры займа</h4>
                                <p>Для этого установите в онлайн-калькуляторе необходимую
                                    <br> вам денежную сумму микрозайма
                                </p>
                            </div>
                        </div>
                        <div class="ex-steps-block">
                            <img src="/templates/zaimsoon/assets/img/01.png" alt="01.png">
                            <span>шаг</span>
                            <i></i>
                        </div>
                    </div>
                    <div class="ex-get-money">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="ex-img-place">
                                    <img src="/templates/zaimsoon/assets/img/web2.png" alt="web2.png">
                                </div>
                            </div>
                            <div class="col-md-9 ex-text-place">
                                <h4>Заполните анкету (2-3 минуты)</h4>
                                <p>Для этого нужен только паспорт,
                                    <br> а информация строго конфиденциальна</p>
                            </div>
                        </div>
                        <div class="ex-steps-block">
                            <img src="/templates/zaimsoon/assets/img/02.png" alt="02.png">
                            <span>шаг</span>
                            <i></i>
                        </div>
                    </div>
                    <div class="ex-get-money">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="ex-img-place">
                                    <img src="/templates/zaimsoon/assets/img/web3.png" alt="web3.png">
                                </div>
                            </div>
                            <div class="col-md-9 ex-text-place">
                                <h4>Получите ваш срочный займ</h4>
                                <p>Это возможно любым удобным способом:
                                    <br> Visa, Maestro, Яндекс.Деньги, WebMoney, CONTACT</p>
                            </div>
                        </div>
                        <div class="ex-steps-block">
                            <img src="/templates/zaimsoon/assets/img/03.png" alt="03.png">
                            <span>шаг</span>
                            <i></i>
                        </div>
                    </div>
                    <div class="ex-for-button">
                        <button class="ex-main-btn" onClick="goToForm();">Получить деньги</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php require 'footer.php'; ?>