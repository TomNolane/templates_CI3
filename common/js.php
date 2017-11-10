<?php
// Настройки плагинов из панели управления

$domen = str_replace('www.','',$_SERVER['HTTP_HOST']);

$this->load->model('dashboard_new/forms_model', 'forms');
$site = $this->forms->site_settings($domen);

if($site[0]['popup']){
    echo " 
        <script>
            function Unloader(){
                var o = this;
                this.unload = function(evt)
                {
                    var message = 'Вы уверены, что хотите покинуть страницу оформления заказа?';
                    if (typeof evt == 'undefined') {
                        evt = window.event;
                    }
                    if (evt) {
                        evt.returnValue = message;
                    }
                    return message;
                }
                this.resetUnload = function()
                {
                    $(window).off('beforeunload', o.unload);

                     setTimeout(function(){
                        $(window).on('beforeunload', o.unload);
                    }, 2000);
                }
                this.init = function()
                {
                    $(window).on('beforeunload', o.unload);
                    $('a').on('click', function(){o.resetUnload});
                    $(document).on('submit', 'form', function(){o.resetUnload});
                    $(document).on('keydown', function(event){
                        if((event.ctrlKey && event.keyCode == 116) || event.keyCode == 116){
                            o.resetUnload;
                        }
                    });
                }
                this.init();
            }
            $(function(){
                if(typeof window.obUnloader != 'object')
                {
                    window.obUnloader = new Unloader();
                }
                    //$('a').click(function(){if(typeof window.obUnloader != 'undefined') window.obUnloader.resetUnload();});
                    $(document).on('submit', 'form', function(){if(typeof window.obUnloader != 'undefined') window.obUnloader.resetUnload();});
            });
        </script>
    ";
}
$popup_text = $this->forms->site_settings('bzaim5.ru');
$popup_text = $popup_text[0]['popup_text'];
$popup_text = str_replace("{{name}}", "<span id='username'></span>", $popup_text);