<? if ($this->uri->segment(1) == 'offerwall') : ?>
    <style>
    .hh4 {
        font-family: Impact !important;
        font-size: 34px;
        color: #777 !important;
        letter-spacing: 0.04em;
        font-weight: normal;
    }

    .green_font {
        color: #2cbd04;
    }
    </style>
    <h2 class="text-center hh hh4"> Для вас подобраны организации для <span class="green_font">получения займа</span> в России:</h2>
<? elseif ($this->uri->segment(1) == 'offerwall2') : ?>
    <style>
        .hh4 {
            font-family: Impact !important;
            font-size: 34px;
            letter-spacing: 0.04em;
            font-weight: normal;
        }
        .green_font .fa {
            color: #FFF;
        }
    </style>
    <h2 class="text-center hh hh4"><span style="font-size: 32px; color: #000; font-family: Helvetica;">Согласно Вашим данным сформирован список онлайн займов со скидкой до 50%.</span><br>
        <span class="green_font">
            <span style="background-color: #e8392c; color: #FFF;">
                <span class="top-exclamation">&nbsp;<i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Внимание <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>&nbsp;</span></span>
                <br>
                <span style="color: #333 !important;">Оставьте заявку в трех компаниях и повысьте шанс получить займ до 99%.</span>
            </span>
    </h2>
<? elseif ($this->uri->segment(1) == 'lk') : ?>
    <h2 class="text-center hh hh4">Заявка с таким номером телефона уже существует.<br><span class="green_font hidden-xs">ВАМ предварительно одобрен займ в организациях ниже:</span></h2>
<? endif; ?>