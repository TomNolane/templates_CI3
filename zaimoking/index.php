<?php require 'header.php'; ?>
    <form id="anketa" action="/form" method="post">
        <input type="hidden" id="amount" name="amount" value="20000" />
        <input type="hidden" id="period" name="period" value="21" />
        <input type="hidden" id="form_slrd" name="form_slrd" value="15" />
        <input type="hidden" name="referer" value="<?php if (isset($_SERVER['HTTP_REFERER'])) echo $_SERVER['HTTP_REFERER']; ?>">
        <?php if (!empty($_REQUEST['ad_id'])) echo '<input type="hidden" name="ad_id" value="'.$_REQUEST['ad_id'].'">'; ?>
        <div class="container">
            <div class="ex-main-section">
                <div class="row">
                    <div class="col-md-7">
                        <div class="ex-main-left">
                            <h1>Империя безотказных займов
                                <br>за 7 минут
                            </h1>
                            <p>Бесплатный подбор онлайн займов – без справок и проверок</p>
                        </div>
                    </div>
                </div>
                <div class="ex-calc-block">
                    <div class="ex-wrapper">
                        <div class="row ">
                            <div class="col-md-6 col-md-offset-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="ex-crumbs"><span class="ex-unique">Комиссия:</span>
                                            <span class="ex-Commission ex-result-style"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ex-crumbs"><span
                                                class="ex-unique">К возврату: </span>
                                            <span class="ex-total ex-result-style"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ex-range-slider">
                            <div class="ex-info">
                                <span>Выбирете сумму займа</span>
                            </div>
                            <input id="rangeSlider" name="rangeSlider"/>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="ex-slider-block">
                                    <div class="row">
                                        <div class="col-md-6"><p class="ex-slider-val"></p></div>
                                        <div class="col-md-6"><p class="ex-time"></p></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="ex-action">
                                    <button type="submit" class="ex-main-btn">Получить деньги</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        <div class="ex-get-money">
            <h2 class="text-center">
                Как получить деньги?
            </h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="ex-get-money-block">
                        <div class="ex-money-img">
                            <img src="/templates/zaimoking/assets/img/calculator.png" alt="calculator.png">
                        </div>
                        <h3>Воспользуйтесь онлайн калькулятором
                            и укажите сумму займа</h3><br>
                        <p>Просто поставьте курсор на нужных значениях.
                            Калькулятор покажет условия займа</p>

                    </div>

                </div>
                <div class="col-md-4">
                    <div class="ex-get-money-block">
                        <div class="ex-money-img">
                            <img src="/templates/zaimoking/assets/img/agreement.png" alt="agreement.png">
                        </div>
                        <h3>Заполните понятную и простую анкету<br>
                            (не более 2-х минут)</h3><br>
                        <p>Дополнительные документы и справки не требуются. Нужен только паспорт</p>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ex-get-money-block">
                        <div class="ex-money-img ex-dn">
                            <img src="/templates/zaimoking/assets/img/credit-card.png" alt="credit-card.png">
                        </div>
                        <h3>Получите ваш срочный займ без отказа
                            через 7-10 минут</h3>
                        <p>Выберите удобный вариант получения: на банковскую карточку/счёт, через платёжную систему
                            CONTACT, на электронный кошелёк WebMoney/Яндекс.Деньги</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="ex-articles">
            <h2 class="text-center">Статьи о займах</h2>
            <div class="row">
              
               <a href="/without_check">
                    <div class="col-md-4">
                        <div class="ex-art-block">
                            <div class="ex-art-img ex-art-img1">
                            </div>
                            <div class="ex-art-content">
                                <h3>Срочный займ без <br>
                                    проверки кредитной истории:
                                    как получить?</h3>
                                <p>Банк вправе отказать потенциальному заемщику в выдаче срочных денег, если кредитная
                                    история негативная или вовсе отсутствует. Однако существуют иные способы получения
                                    займов в подобной ситуации.
                                </p>
                                читать далее >>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="/microloans">
                    <div class="col-md-4">
                        <div class="ex-art-block">
                            <div class="ex-art-img ex-art-img2">
                            </div>
                            <div class="ex-art-content">
                                <h3>Микрозаймы
                                    и современные технологии</h3>
                                <p>
                                    Сегодня микрофинансовые компании используют современные технологии, позволяющие
                                    обрабатывать огромное количество заявок на займы за короткий срок. Опишем основные
                                    тенденции.
                                </p>
                                читать далее >>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="/urgent-loans">
                    <div class="col-md-4">
                        <div class="ex-art-block">
                            <div class="ex-art-img ex-art-img3">
                            </div>
                            <div class="ex-art-content">
                                <h3>Способы срочного получения<br> займов</h3>
                                <p>Если вы ищете способ получить онлайн займ срочно, присмотритесь к следующим
                                    рекомендациям.<br>
                                    - Отдавайте предпочтение микрофинансовым компаниям, работающим онлайн.
                                </p>
                                читать далее >>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="ex-action">
                        <button type="submit" class="ex-main-btn ex-ask-question">Получить деньги</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="ex-about">
            <h2 class="text-center">Отзывы о нас</h2>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="ex-about-block">
                        <p>Благодарю Zaimoking от всей души! Именно здесь мне наконец-таки одобрили займ без проверок и
                            справок. На других сервисах и в банках мне не захотели давать кредит из-за низких доходов (я
                            студент).
                            В общем что сказать, проблем не было, заполнил форму, отправил и сразу же одобрили несколько
                            займов,
                            а я только выбрал самый выгодный. Посоветовал вас друзьям!))</p>
                        <h3>Виктор Савченко, г. Москва, 21 год</h3>
                    </div>
                    <div class="ex-about-block">
                        <p>Как это часто бывает, мужу задержали з/п, а нам нужно было срочно оплачивать детсад для
                            дочки...
                            На работе посоветовали Займокинг как надёжную компанию. Мы не долго думая взяли здесь
                            срочный займ. Сервис не подвёл, за поиск позиций денег с нас не взяли, а проценты по займу
                            ниже, чем на других сайтах,
                            я сама проверяла!!! Советую всем! Очень выручили нашу семью.</p>
                        <h3>Маргарита Никулина, г. Саратов, 27 лет</h3>
                    </div>
                    <div class="ex-about-block">
                        <p>Беру онлайн займ на этом сайте уже второй раз и могу точно всем сказать, что это честная
                            организация.
                            На всю процедуру уходит не больше 15 минут, и срочный займ у меня на карте!! А ещё респект
                            сервису
                            за то, что ни копейки не берут за поиск выгодных займов! Спасибо за высокий уровень
                            обслуживания.</p>
                        <h3>Юрий Большенко, г. Москва, 34 года</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="ex-suggestion">
            <h2 class="text-center">Специальное предложение</h2>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="ex-fast-start">
                                <div class="ex-count-zaim">
                                    <span>5 000 рублей</span>
                                </div>
                                <table>
                                    <tr>
                                        <td>Основная ставка</td>
                                        <td>1.1 %</td>
                                    </tr>
                                    <tr>
                                        <td>Cрок займа</td>
                                        <td>2.1 %</td>
                                    </tr>
                                    <tr>
                                        <td>Cрок займа</td>
                                        <td>от 61 дня</td>
                                    </tr>
                                </table>
                                <div class="es-fast-btn">
                                    <a href="/form?amount=5000"><input class="ex-main-btn text-center" value="Получить деньги"/></a> 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="ex-fast-start">
                                <div class="ex-count-zaim">
                                    <span>30 000 рублей</span>
                                </div>
                                <table>
                                    <tr>
                                        <td>Основная ставка</td>
                                        <td>1 %</td>
                                    </tr>
                                    <tr>
                                        <td>Cрок займа</td>
                                        <td>1.6 %</td>
                                    </tr>
                                    <tr>
                                        <td>Cрок займа</td>
                                        <td>от 130 дней</td>
                                    </tr>
                                </table>
                                <div class="es-fast-btn">
                                    <a href="/form?amount=30000"><input class="ex-main-btn text-center" value="Получить деньги"/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</main>
<?php require 'footer.php'; ?>