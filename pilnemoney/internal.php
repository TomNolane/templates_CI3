<?php
if ($this->uri->segment(1) == 'robots.txt') 
{
	header("Content-type: text/plain");
	require 'internal-robots.txt.php';
} 
else
{
    $my_title = 'Pilne Pożyczki przez całą Dobę bez Weryfikacji Online'; 
    $description = 'pieniadzeszybko - najlepszy w internecie serwis w udzielaniu błyskawicznych pożyczek i kredytów bez sprawdzania historii kredytowej.Tylko u nas najlepsze oferty kredytowe!';
    require 'header.php'; 

        if ($this->uri->segment(1) == 'confidentiality') require 'internal-confidentiality.php'; 
        elseif($this->uri->segment(1) == '404') require 'internal-404.php';
        elseif($this->uri->segment(1) == 'agreement') require 'internal-agreement.php'; 

    require 'footer.php'; 
} ?>