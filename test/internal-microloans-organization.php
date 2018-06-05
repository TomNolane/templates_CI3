<?php require 'header.php';?>
<div class="ex-artikle1">
    <nav class="ex-main-header">
        <div class="container">
            <i class="ex-hamburger"></i>
            <a class="ex-brand" href="/">Forzaim</a>
        </div>
    </nav>
    <div class="container">
        <form id="anketa" action="/form" method="post">
            <input type="hidden" id="amount" name="amount" value="20000" />
            <input type="hidden" id="period" name="period" value="21" />
            <input type="hidden" id="form_slrd" name="form_slrd" value="15" />
            <input type="hidden" name="referer" value="<?php if (isset($_SERVER['HTTP_REFERER'])) echo $_SERVER['HTTP_REFERER']; ?>">
            <?php if (!empty($_REQUEST['ad_id'])) echo '<input type="hidden" name="ad_id" value="'.$_REQUEST['ad_id'].'">'; ?>
            <div class="ex-calc-wraper">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-10 fr">
                        <div class="ex-range-scope">
                            <div id="ex-main-slider-range">
                                <figure class="ex-range-slider">
                                    <input type="text" id="rangeSlider" name="rangeSlider" value="0" />
                                </figure>
                            </div>
                        </div>
                        <div class="ex-tab-section">
                            <ul class="ex-calc-block ">
                                <li>
                                    <div class="ex-val-block">
                                        <span class="ex-unique">Сумма займа (в рублях)</span>
                                        <span class="ex-slider-val ex-result-style"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="ex-crumbs">
                                        <span class="ex-unique">Срок займа (в днях)</span>
                                        <span class="ex-ot">от</span>
                                        <span class="ex-time ex-result-style"></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="ex-crumbs">
                                        <span class="ex-unique">К возврату (в рублях)</span>
                                        <span class="ex-total ex-result-style"></span>
                                    </div>
                                </li>
                            </ul>
                            <div class="ex-for-button text-center">
                                <button class="ex-main-btn" type="submit">Получить деньги</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="ex-artikle1-content">
    <div class="container">
        <h1 class="text-center">Микрофинансовые организации:
            <br> особенности работы</h1>
        <p>По поводу деятельности микрофинансовых организаций (МФО) возникает много вопросов: и у тех, кто собирается инвестировать
            в кредитные организации, и у тех, кому необходимы микрозаймы. Рассмотрим подробнее, как работают МФО.
            <br>
            <br> Юридические лица имеют право вложить в деятельность МФО абсолютно любые суммы денег. А вот физические лица вправе
            открыть счёт в данных организациях на сумму от 1,5 млн. руб. Как видим, МФО привлекают средства и граждан, и
            юридических лиц.
            <br>
            <br> Максимальный лимит ставки по вкладу в российские МФО никак не ограничен на уровне законодательства. Поэтому
            микрофинансовые организации вправе установить любые ставки, даже очень высокие. Другая сторона медали – сможет
            ли МФО выполнять свои обязательства и предложить колоссальную доходность по инвестициям своим клиентам. Если
            процентная ставка выше 35%, то стоит насторожиться и более детально изучить вопрос: можно ли вкладывать деньги
            в данную организацию.
            <br>
            <br> Одна из сторон деятельности МФО – предоставление микрозаймов тем, кто нуждается в срочной финансовой помощи.
            Перед непосредственной выдачей срочных денег организация производит целый комплекс действий. Это необходимо для
            проверки заемщика. Сюда относятся:
            <br>
            <br> - Запрос и детальный анализ персональных данных, которые входят в базу Федеральной службы судебных приставов,
            Федеральную налоговую службу и прочие ведомства.
            <br>
            <br> - Пристальное изучение кредитной истории заемщика. В этих целях МФО может запросить информацию в бюро кредитных
            историй. Но следует отметить, что зачастую микрофинансовые организации могут выдавать онлайн займы даже клиентам
            с плохой кредитной репутацией. Это является несомненным плюсом сервисов предоставления микрозаймов.
            <br>
            <br> - Если займ оформляется непосредственно в офисе МФО – учитывается внешний вид клиента, принимаются во внимание
            его речь и поведение.
            <br>
            <br> Таким образом, чтобы повысить вероятность получения микрозайма в МФО, лучше всего обратиться к онлайн-сервисам.
        </p>
    </div>
</div>
<?php require 'footer.php';?>