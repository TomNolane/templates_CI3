<?php 
    $my_title = "Вам автоматически одобрен займ";
    require 'header.php'; 
    $this->load->model('offers/offers_model', 'offers');
    $data = $this->offers->all();
    
    // IP
    $this->load->helper('ip');
    // GEO
    require_once FCPATH.'modules/ipgeobase/ipgeobase.php';
    $gb = new IPGeoBase();
    $geo = $gb->getRecord(IP::$ip);
    if ($geo)
    {
        if (isset($geo['region'])) $region_name = $geo['region'];
    }
    // Список регионов
    $this->load->model('geo/geo_model', 'geo');
    $regions = $this->geo->regions();
    
    //pixel stat
    $this->load->model('pixel/pixel_model', 'pixel');
    $pixel = $this->pixel->stat('microdengi.com');
?>
<div class="ex-offerta">
    <div class="container">
        <div class="ex-offers-block ex-off-active ex-on-small-devices">
            <table>
                <tbody>
                <tr>
                    <td>
                        <div>
                            <figure class="ex-offers-img1">
                            </figure>
                        </div>
                    </td>
                    <td>
                        <div>1 000 <span>zł</span><p>ot 1 000 zł do 2 000 zł</p></div>
                    </td>
                    <td>
                        <div>30 <span>dni</span> <p>od 5 dni do 30 dni lub 61 dni</p></div>
                    </td>
                    <td>
                        <div>0 <span>zł</span><p>RRSO: 0%</p></div>
                    </td>
                    <td>
                        <div>
                            <button class="ex-main-btn">otrzymywać pieniądze</button>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="ex-offers-block ex-on-small-devices">
            <table>
                <tbody>
                <tr>
                    <td>
                        <div>
                            <figure class="ex-offers-img1">
                            </figure>
                        </div>
                    </td>
                    <td>
                        <div>1 000 <span>zł</span><p>ot 1 000 zł do 2 000 zł</p></div>
                    </td>
                    <td>
                        <div>30 <span>dni</span> <p>od 5 dni do 30 dni lub 61 dni</p></div>
                    </td>
                    <td>
                        <div>0 <span>zł</span><p>RRSO: 0%</p></div>
                    </td>
                    <td>
                        <div>
                            <button class="ex-main-btn">otrzymywać pieniądze</button>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="ex-offers-block ex-on-small-devices">
            <table>
                <tbody>
                <tr>
                    <td>
                        <div>
                            <figure class="ex-offers-img1">
                            </figure>
                        </div>
                    </td>
                    <td>
                        <div>1 000 <span>zł</span><p>ot 1 000 zł do 2 000 zł</p></div>
                    </td>
                    <td>
                        <div>30 <span>dni</span> <p>od 5 dni do 30 dni lub 61 dni</p></div>
                    </td>
                    <td>
                        <div>0 <span>zł</span><p>RRSO: 0%</p></div>
                    </td>
                    <td>
                        <div>
                            <button class="ex-main-btn">otrzymywać pieniądze</button>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="ex-offers-block ex-on-small-devices">
            <table>
                <tbody>
                <tr>
                    <td>
                        <div>
                            <figure class="ex-offers-img1">
                            </figure>
                        </div>
                    </td>
                    <td>
                        <div>1 000 <span>zł</span><p>ot 1 000 zł do 2 000 zł</p></div>
                    </td>
                    <td>
                        <div>30 <span>dni</span> <p>od 5 dni do 30 dni lub 61 dni</p></div>
                    </td>
                    <td>
                        <div>0 <span>zł</span><p>RRSO: 0%</p></div>
                    </td>
                    <td>
                        <div>
                            <button class="ex-main-btn">otrzymywać pieniądze</button>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>