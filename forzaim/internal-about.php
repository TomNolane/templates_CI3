<?php require 'header.php';?>
<div class="ex-about">
    <nav class="ex-main-header ex-transparent">
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
<div class="container">
    <div class="ex-about-content">
        <h1 class="text-center">О сервисе</h1>
        <h2 class="text-center">Forzaim – надёжная поддержка в трудную минуту.</h2>
        <p>Что делать и куда обратиться, если возникли сложные жизненные обстоятельства, а денег нет? Нередко бывает и так,
            что даже самые близкие люди не могут поддержать в финансовом плане. Где искать помощь и поддержку в таких ситуациях?
            <br>
            <br> Сервис подбора онлайн займов Forzaim – это срочная и доверительная финансовая помощь для граждан нашей страны.
            Мы готовы быстро и конфиденциально помочь вам в сложную минуту.
            <br>
            <br>
        </p>
        <h2 class="text-center">В чём отличия Forzaim?</h2>
        <p>Услуги сервиса абсолютно бесплатны – в отличие от множества других подобных сайтов. Вы не потратите деньги за подбор
            актуальных микрозаймов. Мы понимаем, что вы и так находитесь в сложной ситуации, и лишние траты сейчас ни к чему.
            <br>
            <br> Онлайн займы без пакета документов и справок. Для получения финансовой помощи вам не нужно предоставлять стопку
            документов. Нужен только паспорт. Мы полностью доверяем своим клиентам, а они доверяют нам!
            <br>
            <br> Минимальная переплата по микрозаймам. При создании сервиса был разработан специальный алгоритм: вы получите
            список наиболее выгодных займов. Забирайте необходимые деньги не переплачивая лишние проценты.
            <br>
            <br> Быстрота оформления. Вы буквально освобождены от походов в банки и очередей. Для получения финансовой помощи
            достаточно заполнить короткую анкету, на что у вас уйдёт не больше 3 минут. А одобрение займов займёт 7-10 минут.
            <br>
            <br> Удобство получения денег. Мы знаем потребности наших клиентов, и вы получите микрозайм любым необходимым способом:
            на банковскую карту или банковский счёт, на кошелёк Яндекс.Деньги или WebMoney, а также наличными через систему
            CONTACT.
            <br>
            <br> Кредитная история не имеет значения. Более того, при систематических выплатах по заему вы сможете даже исправить
            негативную репутацию!
            <br>
            <br> Микрозайм останется в тайне. Сотни клиентов доверились именно нам, поскольку мы обеспечиваем полную конфиденциальность.
            Передача ваших данных третьим лицам абсолютно невозможна. Система безопасности сервиса Forzaim работает без отказа
            и круглосуточно.
            <br>
            <br> Не забудьте подписаться на рассылку Forzaim. Всегда удобно получать наиболее выгодные онлайн займы самым первым!
            <br>
            <br> Совсем нет времени? Тогда прямо сейчас заполните анкету, ответив на несколько вопросов, дождитесь звонка нашего
            менеджера. И уже через несколько минут вы будете счастливым обладателем заема без отказа.
            <br>
            <br> Конфиденциальность и доверие при оказании денежной поддержки – наша Миссия!</p>
    </div> 
</div>
<?php require 'footer.php';?>