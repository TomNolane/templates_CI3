<?php require 'header.php';?>
<div class="ex-artikle3">
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
<div class="ex-artikle3-content">
    <div class="container">
        <h1 class="text-center">Срочные деньги в долг по паспорту:
            <br> способы получения</h1>
        <p>Многие задаются вопросом: возможно ли взять займ по паспорту, при этом не имея на руках других нужных справок и документов?
            Рассмотрим, как обстоят дела по данному вопросу у различных источников срочных денег.
            <br>
            <br> Банки. На сегодняшний день вероятность получить кредит (или срочный заем) в банке без дополнительных документов
            и с одним паспортом чрезмерно низка. Банкам необходимо проверять клиентов по полной программе, а также запрашивать
            справки для выявления платёжеспособности и информацию с места работы. Анализ кредитной истории для банков – это
            обязательный процесс. Очевидно, бесполезно идти в банк с одним паспортом, если нужна срочная финансовая помощь
            или займ.
            <br>
            <br> Ломбарды. Главное отличие ломбардов (а также это их заметный минус) – это необходимость предоставить залог для
            получения микрозайма. Несмотря на это, срочные деньги попадут к вам за очень короткий срок – в этом преимущество.
            <br>
            <br> Частные кредиторы. Действительно, у людей, профессионально занимающихся кредитованием, вы получите займ срочно
            и без потери времени. Но существует негативный момент – вероятность «нарваться» на профессиональных мошенников.
            Поэтому лучше прибегнуть к помощи легальных организаций, занимающихся выдачей онлайн микрозаймов или кредитов.
            <br>
            <br> Микрофинансовые организации. В случае срочной надобности займа рекомендуем обратить внимание именно на МФО.
            Это зарегистрированные организации, и за их деятельностью следит государство, а именно – Центральный банк РФ.
            Заметный плюс – МФО однозначно лояльнее банков, так как они выдают онлайн микрозаймы по одному документу (чаще
            всего это паспорт), за очень короткий срок (10-15 минут) и даже с испорченной кредитной историей!
            <br>
            <br> Как видим, один из самых удобных и быстрых способов получить займ по паспорту – обращение за финансовой помощью
            к микрофинансовым организациям.</p>
    </div>
</div>
<?php require 'footer.php';?>