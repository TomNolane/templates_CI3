<?php require 'header.php';?>
<div class="ex-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 ">
                <h1>
                    <span>
                        Mikrodengi
                    </span>- pożyczki w 7 minut,
                    <br> niezależnie od historii kredytowej</h1>
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
            <input type="hidden" name="fingerprint" id="fingerprint" value="">
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
                    Pilnie potrzebowałam pieniędzy na prezent, synek kończy 5 lat, i nikt nie mógł pożyczyć... Krewni też mają problemy, no i
                    nie wypada prosić. W rezultacie weszłam do Internetu, przeczytałam na tej stronie, że pożyczki wydają
                    w 15 minut! Nie uwierzyłam w to, oczywiście, ale spróbowałam, i to prawda, pieniądze przyszły od razu,
                    a problem został rozwiązany! Dziękuję za pomoc i darmowy dobór pilnej pożyczki, zwrócę ją z pensją !!
                </figcaption>
                <h3>Szymon, 29 lat</h3>
            </figure>
        </div>
        <div class="item">
            <figure>
                <figcaption>
                    Hurra! To jedyne miejsce, w którym otrzymałem pożyczkę bez odmowy. Musiałem pilnie wynająć mieszkanie, a prawie nie mam krewnych,
                    nikt mi nie pomoże ... I wszystkie banki odmawiają, bo jestem studentem. A tutaj nawet dodatkowych pytań
                    nie zadawali, tylko podałem dane paszportowe! Pożyczkę odebrałem w 10 minut po zatwierdzeniu. A tak przy
                    okazji, usługi serwisu są bezpłatne, to prawda, nie wzięli ani rubla!
                </figcaption>
                <h3>Mateusz, 21 lat</h3>
            </figure>
        </div>
        <div class="item">
            <figure>
                <figcaption>
                    Miałem problemy w biznesie i musiałem pilnie zapłacić czynsz! Wtedy znajomy doradził serwis Mikrodending, powiedział, że
                    tam nie ma potrzeby okazywać zaświadczenia i szukać gwarantów. I właśnie tego potrzebowałem, nie miałem
                    absolutnie czasu! Pożyczka online natychmiast wpłynęła na kartę, czekałem kilka minut, tutaj nie oszukują
                    !! Super usługa, teraz za pożyczką tylko tutaj, ale mam nadzieję, że nie będzie potrzebna))
                </figcaption>
                <h3>Zuzanna, 32 lata</h3>
            </figure>
        </div>
    </div>
</section>
<?php require 'footer.php';?>