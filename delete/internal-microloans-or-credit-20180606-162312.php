<?php require 'header.php';?>
<div class="ex-artikle4">
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
<div class="ex-artikle4-content">
    <div class="container">
        <h1 class="text-center">Что лучше: займ или кредит?</h1>
        <p>Когда потребовались срочные деньги, остается только один вопрос: что удобнее и быстрее – микрозайм или кредит? Если
            посмотреть статистику, около 70% граждан России хотя бы раз обращались к услугам различных микрофинансовых организаций
            или банков и получали от них финансовую помощь или срочный микрозайм.
            <br>
            <br> Получение кредита предполагает поход в банк, после чего подписывается кредитный договор. В нём отражаются условия,
            по которым банковская организация выдаёт срочные деньги. В свою очередь, вы обязуетесь вернуть сумму в конкретный
            срок и выплатить проценты по кредитной сумме.
            <br>
            <br> Можно прибегнуть к кредиту и не брать онлайн займ, если требуется очень большая сумма. Но нужно быть готовым
            к тому, что к вам, как к заемщику, предъявят определённые требования, например: трудовой стаж не менее 1 года,
            возраст от 21 года, подтверждённый доход от 20 000 руб. и так далее. Кроме того, приготовьтесь собрать целый
            список документов, сюда обычно входят: паспорт, СНИЛС, справка 2-НДФЛ и др. Также, возможно, банк потребует обеспечение,
            и нужно будет искать поручителя или оформлять залог.
            <br>
            <br> В отличие от этого, мини займы (или микрозаймы) выдаются микрофинансовыми организациями достаточно быстро и
            без лишних бумаг. Займ предоставляется так же – под проценты. К данному способу можно прибегнуть, если нужна
            небольшая или средняя сумма денег: от нескольких тысяч до нескольких десятков тысяч рублей.
            <br>
            <br> Процентная ставка по онлайн микрозаймам может быть выше. Но вы переплачиваете заметно меньше, поскольку срок
            заема зачастую небольшой. А требования к клиенту более мягкие: займы выдаются и пенсионерам, и студентам, и неработающим.
            А список бумаг и документов ограничен: нужен только паспорт.
            <br>
            <br> И ещё одно важное преимущество: сервисы онлайн микрозаймов часто не берут деньги за свои услуги. Этот приятный
            момент распространяется и на сервис Forzaim.
            <br>
            <br> Таким образом, займ достаточно выгоден, если деньги нужны срочно и нет времени собирать документы.</p>
    </div>
</div>
<?php require 'footer.php';?>