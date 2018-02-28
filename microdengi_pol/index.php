<?php require 'header.php';?>
<div class="ex-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 ">
                <h1>
                    <span>
                    Microdengi
                    </span> - pożyczka w 7 minut, niezależnie od historii kredytowej </h1>
                <p>Bezpłatny wybór pożyczek - bez zaświadczeń i odmów</p>
            </div>
            <div class="col-lg-5">
                <div class="ex-for-img">
                </div>
            </div>
        </div>
        <form id="anketa" action="/form" method="post">
            <input type="hidden" id="amount" name="amount" value="8000" />
            <input type="hidden" id="period" name="period" value="16" />
            <input type="hidden" id="form_slrd" name="form_slrd" value="15" />
            <input type="hidden" name="referer" value="<?php if (isset($_SERVER['HTTP_REFERER'])) echo $_SERVER['HTTP_REFERER']; ?>">
            <?php if (!empty($_REQUEST['ad_id'])) echo '<input type="hidden" name="ad_id" value="'.$_REQUEST['ad_id'].'">'; ?>
            <div class="ex-calc-block">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ex-wrapper">
                            <div class="ex-range-slider-ruble">
                                <div class="ex-info">
                                    <span>Ile chcesz pożyczyć:</span>
                                </div>
                                <input id="rangeSlider1" name="rangeSlider" />
                                <span class="ex-small-cost ex-left">500zł</span>
                                <span class="ex-small-cost ex-right">25 000zł</span>
                            </div>
                            <div class="ex-range-slider-time">
                                <div class="ex-info">
                                    <span>Na jak długo:</span>
                                </div>
                                <input id="rangeSlider2" name="rangeSlider2" />
                                <span class="ex-small-cost ex-left">1dni</span>
                                <span class="ex-small-cost ex-right">61 dni</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ex-slider-block">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="ex-slider-val-1 ex-val-style"></p>
                                </div>
                                <div class="col-md-6">
                                    <p class="ex-slider-val-2 ex-val-style"></p>
                                </div>
                            </div>
                            <div class="ex-action">
                                <button type="submit" class="ex-main-btn">otrzymywać pieniądze</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
            <div class="col-sm-4">
            <strong>Krok 1.</strong> Ustaw okres, na który chcesz wziąć pożyczkę, a także jej wysokość w kalkulatorze.
Po prostu przesuń kursor. Licznik natychmiast pokaże warunki pożyczki.
            </div>
            <div class="col-sm-4">
            <strong>Krok 2.</strong> Poświęć 2 minuty, aby wypełnić krótki kwestionariusz 
Do tego potrzebny jest tylko dowód tożsamości. Nie wymagamy niepotrzebnych dokumentów.
            </div>
            <div class="col-sm-4">
            <strong>Krok 3.</strong> Zaciągnij pożyczkę bez odmowy w 10-15 minut
Pieniądze zostaną przesłane na numer Twojego rachunku bankowego już w ciągu 15 minut od momentu pozytywnego rozpatrzenia wniosku.
            </div>
            </div> 
        </form>
    </div>
</div>
<section class="ex-section-art">
    <div class="container">
        <h2 class="text-center">Artykuły</h2>
        <div class="row">
            <div class="col-lg-4">
                <div class="ex-art-block ex-on-small-devices ex-art-active">
                    <div class="ex-art-img ex-art-img1">
                    </div>

                    <div class="ex-art-cont">
                        <a href="/article1">
                            <div>
                                <h3>Co oznacza odroczenie
                                    <br> spłaty pożyczki?</h3>
                                <p>
                                    Składając wniosek do organizacji mikrofinansowej (OMF), przyszły pożyczkobiorca ma nadzieję na terminową spłatę zadłużenia.
                                    Co może zrobić, jeśli nie udaje się spłacić zaciągniętej pożyczki online na czas z powodu
                                    zaistniałych
                                </p>
                                czytaj więcej>>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="ex-art-block ex-on-small-devices">
                    <div class="ex-art-img ex-art-img2"></div>
                    <div class="ex-art-cont">
                        <a href="/article2">
                            <div>
                                <h3>Podstawowe metody
                                    <br> pozyskiwania pożyczek online</h3>
                                <p>
                                    W tym artykule rozpatrzymy najczęstsze opcje uzyskiwania pożyczek online.
                                    <br> - Na kartę płatniczą VISA lub Maestro. Według tradycji jest to najpopularniejsza opcja
                                    uzyskania pożyczki. Łatwość użytkowania i szybkie wpłynięcie środków
                                </p>
                                czytaj więcej>>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="ex-art-block ex-on-small-devices">
                    <div class="ex-art-img ex-art-img3">
                    </div>

                    <div class="ex-art-cont">
                        <div>
                            <a href="/article3">

                                <h3>Jak wybrać organizację
                                    <br> mikrofinansową?
                                </h3>
                                <p>
                                    Wybierając organizację mikrofinansową (OMF) do zaciągnięcia osobistej pożyczki online, należy wziąć pod uwagę szereg parametrów.
                                    <br> - Obecność tej firmy w oficjalnym rejestrze organizacji mikrofinansowych. Rejestr jest
                                </p>
                                czytaj więcej>>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ex-about-section">
    <div class="continer">
        <h2 class="text-center">Opinie o nas</h2>
    </div>
    <div class="owl-carousel owl-theme">
        <div class="item">
            <figure>
                <figcaption>
                    Pilnie potrzebowałam pieniędzy na prezent dla synka kończącego 5 lat. Nikt nie mógł pożyczyć... Krewni też mają problemy, no i nie wypada prosić. W rezultacie weszłam do Internetu, natknęłam się na tę stronę i przeczytałam, że pożyczki wydają w 15 minut! Nie uwierzyłam w to, oczywiście, ale spróbowałam. To prawda! Na pieniądze nie trzeba było długo czekać i mój problem szybko został rozwiązany! Dziękuję za pomoc i darmowe dobranie najlepszej oferty!
                </figcaption>
                <h3>Katarzyna Zarzycka, 29 lat, Białystok</h3>
            </figure>
        </div>
        <div class="item">
            <figure>
                <figcaption>
                    Miałem problemy w biznesie i musiałem pilnie zapłacić ważne należności! Wtedy znajomy doradził mi serwis Mikrodengi. Powiedział, że tam nie trzeba dostarczać miliona zaświadczeń i szukać gwarantów. Właśnie tego potrzebowałem – szybko, łatwo i bez zbędnych formalności. Po przyznaniu pożyczki, pieniądze już po kilku minutach były na koncie. Bez ściemy!! Super obsługa i łatwy kontakt. W razie potrzeby, w przyszłości, na pewno jeszcze skorzystam!
                </figcaption>
                <h3>Paweł Marszałkowski, 32 lata, Warszawa</h3>
            </figure>
        </div>
        <div class="item">
            <figure>
                <figcaption>
                    Hurra! To jedyne miejsce, w którym nie odmówiono mi pożyczki. Musiałem pilnie wynająć mieszkanie, a nikt z krewnych nie dał rady pomóc. Do tego wszystkie banki odmawiają, bo jestem studentką. A tutaj nawet dodatkowych pytań nie zadawali, tylko podałam kilka danych. Pieniądze dostałam w ciągu 10 minut od momentu zatwierdzenia wniosku. A tak przy okazji, usługi serwisu są bezpłatne, nie wzięli ode mnie ani grosza! 
                </figcaption>
                <h3>Julia Dobrzycka, 21 lat, Kraków</h3>
            </figure>
        </div>
    </div>
</section>
<?php require 'footer.php';?>