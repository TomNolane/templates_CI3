<?php 
    if(!isset($my_title))
    {
        $my_title = 'Zaimhome.ru - Сервис по подбору выгодных онлайн займов';
    } 

    require 'header.php';
?>
<div class="ex-home-bg"></div>
<div class="container">
    <div class="row">
        <div id="ex-counter-block" class="col-xs-12">
            <div class="row">
                <div class="col-xs-12">
                    <div class="ex-calc-wrapper">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="ex-range-scope">

                                    <form id="anketa" action="/form" method="post">

                                        <h2>Какую сумму займа вы хотите получить?</h2>
                                        <div id="ex-main-slider-range">
                                            <figure class="ex-range-slider">
                                                <p id="ex-slider-val"></p>
                                                <i></i>
                                                <input type="text" id="rangeSlider" name="rangeSlider" />
                                                <input type="hidden" id="amount" name="amount" value="20000" />
                                                <input type="hidden" id="period" name="period" value="21" />
                                                <input type="hidden" id="form_slrd" name="form_slrd" value="15" />
                                                <input type="hidden" name="referer" value="<?php if (isset($_SERVER['HTTP_REFERER'])) echo $_SERVER['HTTP_REFERER']; ?>">
                                                <?php if (!empty($_REQUEST['ad_id'])) echo '<input type="hidden" name="ad_id" value="'.$_REQUEST['ad_id'].'">'; ?>
                                            </figure>
                                            <div class="ex-slider-info">
                                                <span>1 тыс.</span>
                                                <span>100 тыс.</span>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary" onclick="<?php echo $this->input->cookie('lk')? 'goToForm()' : 'goToForm()';?>">получить деньги</button>


                                    </form>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="ex-info-about-borrow">
                                    <div class="ex-table-wrapper">
                                        <table class="table">
                                            <tr>
                                                <td>Сумма займа</td>
                                                <td class="ex-current-val"></td>
                                            </tr>
                                            <tr>
                                                <td>Срок займа</td>
                                                <td class="ex-time"></td>
                                            </tr>
                                            <tr>
                                                <td>Комиссия</td>
                                                <td class="ex-Commission"></td>
                                            </tr>
                                            <tr>
                                                <td>Возврату</td>
                                                <td class="ex-total"></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <p>Вероятность одобрения
                                        <strong class="ex-probability"></strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h2 class="text-center ex-money-receive-title">Как получить деньги</h2>
    <div id="ex-how-receive" class="row">
        <div class="col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 text-center">
            <div>
                <a href="#" onClick="goToUp(); return false;" style="text-decoration: none;">
                    <i class="ex-notebook-icon"></i>
                    <span>Выберите нужную сумму</span>
                </a>
            </div>
            <p>После выбора суммы доступна информация о сроке займа, комиссии, вероятности одобрения</p>
        </div>
        <div class="col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 text-center">
            <div>
                <a href="#" onClick="goToForm(); return false;" style="text-decoration: none;">
                    <i class="ex-signature-icon"></i>
                    <span>Заполните заявку</span>
                </a>
            </div>
            <p>Вносите актуальные данные в анкету, это повысит вероятность выдачи займа</p>
        </div>
        <div class="col-md-4 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 text-center">
            <div>
                <a href="#" onClick="goToReceiveMoney(); return false;" style="text-decoration: none;">
                    <i class="ex-card-icon"></i>
                    <span>Получите деньги</span>
                </a>
            </div>
            <p>Перевод поступает любым удобным способом.</p>
        </div>
    </div>
</div>
<?php require 'footer.php';?>
</body>
</html>