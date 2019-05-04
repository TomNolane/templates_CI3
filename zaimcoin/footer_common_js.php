<?php 
require 'templates/common/new/js/get_display_size.js';
require 'templates/common/new/s/jquery-1.11.3.min.js';
require 'templates/common/new/s/bootstrap.min.js';
require 'templates/common/new/s/detect.min.js';
require 'templates/common/new/s/get_parameter.js'; 
require 'templates/common/new/s/ion.rangeSlider.min.js';
require 'templates/common/new/s/jquery.maskedinput.1.4.2.min.js';
require 'templates/common/new/s/jquery.poshytip.min.js';
require 'templates/common/new/s/jquery.form-validator.js';
require 'templates/common/new/s/jquery.suggestions.min.js';
require 'templates/common/new/s/coockie.js';
require 'templates/common/new/s/traffic.js';
require 'templates/common/new/s/modal.js';
require 'templates/common/new/s/owl.carousel.min.js';
require 'templates/common/new/s/settings_form.js';
require 'templates/common/new/s/fingerprintjs2.js';

if ($this->uri->segment(1) != 'form') 
{
    require 'templates/common/new/js/popup_modal.js';
}
if (in_array($this->uri->segment(1), array(' ', '', 'index'))) 
{
    require 'templates/common/new/s/for_index.js';
}
?>