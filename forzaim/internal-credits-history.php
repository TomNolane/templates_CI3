<?php require 'header.php';?>
<div class="ex-artikle2">
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
<div class="ex-artikle2-content">
    <div class="container">
        <h1 class="text-center">Кредитная история и её виды</h1>
        <p>Несомненно, кредитная история является наиважнейшим фактором для микрофинансовых организаций (МФО) и банков. На основе
            этого можно анализировать надёжность потенциального заемщика.
            <br>
            <br> Штрафы, задолженности и нарушенный в прошлом график платежей – всё это часто приводит к отказу в кредите (а
            иногда и в займе). Конечно же, финансовой организации безразлично, присутствовали ли объективные причины у этих
            нарушений или кредит не выплачивали сознательно. Стоит также заметить, что бывают случаи, когда кредитная история
            портится не по вине заемщика. Это связано с задержкой передачи информации о платежах и микрозаймах, в связи с
            чем может возникнуть путаница.
            <br>
            <br> Учёт и анализ кредитной истории и истории займов в большинстве банков – это автоматический процесс, и осуществляется
            он системой скоринга. Существует список чётко определённых параметров, разработанный банковской службой. По каждому
            показателю начисляются положительные или штрафные баллы. Именно общая сумма влияет на итоговое решение учреждения.
            Но данный момент не имеет особой важности при выдаче онлайн микрозайма.
            <br>
            <br> Чтобы рассмотреть заявки на кредит и онлайн займы, финансовое учреждение оперирует следующими видами кредитных
            историй:
            <br>
            <br> - Положительная – у заемщика имелись ранее кредиты, и они были выплачены успешно.
            <br>
            <br> - Нулевая – клиент не брал ранее займы или брал настолько давно, что информация в базе об этом отсутствует.
            <br>
            <br> - Плохая (отрицательная) – человек оформлял микрозаймы или кредиты ранее, но у него есть штрафные санкции и
            задолженности по заему.
            <br>
            <br> При получении онлайн микрозаймов кредитная история зачастую не учитывается микрофинансовыми организациями. Именно
            поэтому это один из самых удобных и быстрых способов получить деньги срочно.</p>
    </div>
</div>
<?php require 'footer.php';?>