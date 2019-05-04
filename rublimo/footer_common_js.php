<?php 
require 'templates/common/new/js/get_display_size.js';
require 'templates/common/new/js/jquery-1.11.3.min.js';
require 'templates/common/new/js/bootstrap.min.js';
require 'templates/common/new/js/detect.min.js';
require 'templates/common/new/js/get_parameter.js'; 
require 'templates/common/new/js/ion.rangeSlider.min.js';
require 'templates/common/new/js/jquery.maskedinput.1.4.2.min.js';
require 'templates/common/new/js/jquery.poshytip.min.js';
require 'templates/common/new/js/jquery.form-validator.js';
require 'templates/common/new/js/jquery.suggestions.min.js';
require 'templates/common/new/js/coockie.js';
require 'templates/common/new/js/traffic.js';
require 'templates/common/new/js/modal.js';
require 'templates/common/new/js/owl.carousel.min.js';
require 'templates/common/new/js/settings_form.js';
require 'templates/common/new/js/backtotop.js';
require 'templates/common/new/js/fingerprintjs2.js';

if ($this->uri->segment(1) != 'form') 
{
   require 'templates/common/new/js/popup_modal.js';
}
if (in_array($this->uri->segment(1), array(' ', '', 'index'))) 
{
    require 'templates/common/new/js/for_index.js';
}?>