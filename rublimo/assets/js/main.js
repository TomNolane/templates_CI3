function checkMe()
{ 
    var y = document.getElementById('agree');
    if(y != null)
    {
        if(y.checked)
        { 
            $('#my_btn').css("display", "block");  
        }
        else
        {
            $('#my_btn').css("display", "none");
        } 
    } 
}  

function checkMee()
{ 
    var y2 = document.getElementById('agree');
    if(y2 != null)
    {
        if(y2.checked)
        { 
            $('#next1f').css("visibility", "visible");  
        }
        else
        {
            $('#next1f').css("visibility", "hidden");
        } 
    } 
}

function GetMoney() {
    $('form#anketa').submit();
}

//-----------------------Initializing--------------------------
$(document).ready(function () {

    if($('#amount').val() != undefined)
    {
         
    } 
}); 
window.Modernizr=function(e,t,n){function r(e){b.cssText=e}function o(e,t){return r(S.join(e+";")+(t||""))}function a(e,t){return typeof e===t}function i(e,t){return!!~(""+e).indexOf(t)}function c(e,t){for(var r in e){var o=e[r];if(!i(o,"-")&&b[o]!==n)return"pfx"!=t||o}return!1}function s(e,t,r){for(var o in e){var i=t[e[o]];if(i!==n)return r===!1?e[o]:a(i,"function")?i.bind(r||t):i}return!1}function u(e,t,n){var r=e.charAt(0).toUpperCase()+e.slice(1),o=(e+" "+k.join(r+" ")+r).split(" ");return a(t,"string")||a(t,"undefined")?c(o,t):(o=(e+" "+T.join(r+" ")+r).split(" "),s(o,t,n))}function l(){p.input=function(n){for(var r=0,o=n.length;r<o;r++)j[n[r]]=!!(n[r]in E);return j.list&&(j.list=!(!t.createElement("datalist")||!e.HTMLDataListElement)),j}("autocomplete autofocus list placeholder max min multiple pattern required step".split(" ")),p.inputtypes=function(e){for(var r,o,a,i=0,c=e.length;i<c;i++)E.setAttribute("type",o=e[i]),r="text"!==E.type,r&&(E.value=x,E.style.cssText="position:absolute;visibility:hidden;",/^range$/.test(o)&&E.style.WebkitAppearance!==n?(g.appendChild(E),a=t.defaultView,r=a.getComputedStyle&&"textfield"!==a.getComputedStyle(E,null).WebkitAppearance&&0!==E.offsetHeight,g.removeChild(E)):/^(search|tel)$/.test(o)||(r=/^(url|email)$/.test(o)?E.checkValidity&&E.checkValidity()===!1:E.value!=x)),P[e[i]]=!!r;return P}("search tel url email datetime date month week time datetime-local number range color".split(" "))}var d,f,m="2.7.1",p={},h=!0,g=t.documentElement,v="modernizr",y=t.createElement(v),b=y.style,E=t.createElement("input"),x=":)",w={}.toString,S=" -webkit- -moz- -o- -ms- ".split(" "),C="Webkit Moz O ms",k=C.split(" "),T=C.toLowerCase().split(" "),N={svg:"http://www.w3.org/2000/svg"},M={},P={},j={},$=[],D=$.slice,F=function(e,n,r,o){var a,i,c,s,u=t.createElement("div"),l=t.body,d=l||t.createElement("body");if(parseInt(r,10))for(;r--;)c=t.createElement("div"),c.id=o?o[r]:v+(r+1),u.appendChild(c);return a=["&#173;",'<style id="s',v,'">',e,"</style>"].join(""),u.id=v,(l?u:d).innerHTML+=a,d.appendChild(u),l||(d.style.background="",d.style.overflow="hidden",s=g.style.overflow,g.style.overflow="hidden",g.appendChild(d)),i=n(u,e),l?u.parentNode.removeChild(u):(d.parentNode.removeChild(d),g.style.overflow=s),!!i},z=function(t){var n=e.matchMedia||e.msMatchMedia;if(n)return n(t).matches;var r;return F("@media "+t+" { #"+v+" { position: absolute; } }",function(t){r="absolute"==(e.getComputedStyle?getComputedStyle(t,null):t.currentStyle).position}),r},A=function(){function e(e,o){o=o||t.createElement(r[e]||"div"),e="on"+e;var i=e in o;return i||(o.setAttribute||(o=t.createElement("div")),o.setAttribute&&o.removeAttribute&&(o.setAttribute(e,""),i=a(o[e],"function"),a(o[e],"undefined")||(o[e]=n),o.removeAttribute(e))),o=null,i}var r={select:"input",change:"input",submit:"form",reset:"form",error:"img",load:"img",abort:"img"};return e}(),L={}.hasOwnProperty;f=a(L,"undefined")||a(L.call,"undefined")?function(e,t){return t in e&&a(e.constructor.prototype[t],"undefined")}:function(e,t){return L.call(e,t)},Function.prototype.bind||(Function.prototype.bind=function(e){var t=this;if("function"!=typeof t)throw new TypeError;var n=D.call(arguments,1),r=function(){if(this instanceof r){var o=function(){};o.prototype=t.prototype;var a=new o,i=t.apply(a,n.concat(D.call(arguments)));return Object(i)===i?i:a}return t.apply(e,n.concat(D.call(arguments)))};return r}),M.flexbox=function(){return u("flexWrap")},M.flexboxlegacy=function(){return u("boxDirection")},M.canvas=function(){var e=t.createElement("canvas");return!(!e.getContext||!e.getContext("2d"))},M.canvastext=function(){return!(!p.canvas||!a(t.createElement("canvas").getContext("2d").fillText,"function"))},M.webgl=function(){return!!e.WebGLRenderingContext},M.touch=function(){var n;return"ontouchstart"in e||e.DocumentTouch&&t instanceof DocumentTouch?n=!0:F(["@media (",S.join("touch-enabled),("),v,")","{#modernizr{top:9px;position:absolute}}"].join(""),function(e){n=9===e.offsetTop}),n},M.geolocation=function(){return"geolocation"in navigator},M.postmessage=function(){return!!e.postMessage},M.websqldatabase=function(){return!!e.openDatabase},M.indexedDB=function(){return!!u("indexedDB",e)},M.hashchange=function(){return A("hashchange",e)&&(t.documentMode===n||t.documentMode>7)},M.history=function(){return!(!e.history||!history.pushState)},M.draganddrop=function(){var e=t.createElement("div");return"draggable"in e||"ondragstart"in e&&"ondrop"in e},M.websockets=function(){return"WebSocket"in e||"MozWebSocket"in e},M.rgba=function(){return r("background-color:rgba(150,255,150,.5)"),i(b.backgroundColor,"rgba")},M.hsla=function(){return r("background-color:hsla(120,40%,100%,.5)"),i(b.backgroundColor,"rgba")||i(b.backgroundColor,"hsla")},M.multiplebgs=function(){return r("background:url(https://),url(https://),red url(https://)"),/(url\s*\(.*?){3}/.test(b.background)},M.backgroundsize=function(){return u("backgroundSize")},M.borderimage=function(){return u("borderImage")},M.borderradius=function(){return u("borderRadius")},M.boxshadow=function(){return u("boxShadow")},M.textshadow=function(){return""===t.createElement("div").style.textShadow},M.opacity=function(){return o("opacity:.55"),/^0.55$/.test(b.opacity)},M.cssanimations=function(){return u("animationName")},M.csscolumns=function(){return u("columnCount")},M.cssgradients=function(){var e="background-image:",t="gradient(linear,left top,right bottom,from(#9f9),to(white));",n="linear-gradient(left top,#9f9, white);";return r((e+"-webkit- ".split(" ").join(t+e)+S.join(n+e)).slice(0,-e.length)),i(b.backgroundImage,"gradient")},M.cssreflections=function(){return u("boxReflect")},M.csstransforms=function(){return!!u("transform")},M.csstransforms3d=function(){var e=!!u("perspective");return e&&"webkitPerspective"in g.style&&F("@media (transform-3d),(-webkit-transform-3d){#modernizr{left:9px;position:absolute;height:3px;}}",function(t,n){e=9===t.offsetLeft&&3===t.offsetHeight}),e},M.csstransitions=function(){return u("transition")},M.fontface=function(){var e;return F('@font-face {font-family:"font";src:url("https://")}',function(n,r){var o=t.getElementById("smodernizr"),a=o.sheet||o.styleSheet,i=a?a.cssRules&&a.cssRules[0]?a.cssRules[0].cssText:a.cssText||"":"";e=/src/i.test(i)&&0===i.indexOf(r.split(" ")[0])}),e},M.generatedcontent=function(){var e;return F(["#",v,"{font:0/0 a}#",v,':after{content:"',x,'";visibility:hidden;font:3px/1 a}'].join(""),function(t){e=t.offsetHeight>=3}),e},M.video=function(){var e=t.createElement("video"),n=!1;try{(n=!!e.canPlayType)&&(n=new Boolean(n),n.ogg=e.canPlayType('video/ogg; codecs="theora"').replace(/^no$/,""),n.h264=e.canPlayType('video/mp4; codecs="avc1.42E01E"').replace(/^no$/,""),n.webm=e.canPlayType('video/webm; codecs="vp8, vorbis"').replace(/^no$/,""))}catch(e){}return n},M.audio=function(){var e=t.createElement("audio"),n=!1;try{(n=!!e.canPlayType)&&(n=new Boolean(n),n.ogg=e.canPlayType('audio/ogg; codecs="vorbis"').replace(/^no$/,""),n.mp3=e.canPlayType("audio/mpeg;").replace(/^no$/,""),n.wav=e.canPlayType('audio/wav; codecs="1"').replace(/^no$/,""),n.m4a=(e.canPlayType("audio/x-m4a;")||e.canPlayType("audio/aac;")).replace(/^no$/,""))}catch(e){}return n},M.localstorage=function(){try{return localStorage.setItem(v,v),localStorage.removeItem(v),!0}catch(e){return!1}},M.sessionstorage=function(){try{return sessionStorage.setItem(v,v),sessionStorage.removeItem(v),!0}catch(e){return!1}},M.webworkers=function(){return!!e.Worker},M.applicationcache=function(){return!!e.applicationCache},M.svg=function(){return!!t.createElementNS&&!!t.createElementNS(N.svg,"svg").createSVGRect},M.inlinesvg=function(){var e=t.createElement("div");return e.innerHTML="<svg/>",(e.firstChild&&e.firstChild.namespaceURI)==N.svg},M.smil=function(){return!!t.createElementNS&&/SVGAnimate/.test(w.call(t.createElementNS(N.svg,"animate")))},M.svgclippaths=function(){return!!t.createElementNS&&/SVGClipPath/.test(w.call(t.createElementNS(N.svg,"clipPath")))};for(var H in M)f(M,H)&&(d=H.toLowerCase(),p[d]=M[H](),$.push((p[d]?"":"no-")+d));return p.input||l(),p.addTest=function(e,t){if("object"==typeof e)for(var r in e)f(e,r)&&p.addTest(r,e[r]);else{if(e=e.toLowerCase(),p[e]!==n)return p;t="function"==typeof t?t():t,"undefined"!=typeof h&&h&&(g.className+=" "+(t?"":"no-")+e),p[e]=t}return p},r(""),y=E=null,function(e,t){function n(e,t){var n=e.createElement("p"),r=e.getElementsByTagName("head")[0]||e.documentElement;return n.innerHTML="x<style>"+t+"</style>",r.insertBefore(n.lastChild,r.firstChild)}function r(){var e=y.elements;return"string"==typeof e?e.split(" "):e}function o(e){var t=v[e[h]];return t||(t={},g++,e[h]=g,v[g]=t),t}function a(e,n,r){if(n||(n=t),l)return n.createElement(e);r||(r=o(n));var a;return a=r.cache[e]?r.cache[e].cloneNode():p.test(e)?(r.cache[e]=r.createElem(e)).cloneNode():r.createElem(e),!a.canHaveChildren||m.test(e)||a.tagUrn?a:r.frag.appendChild(a)}function i(e,n){if(e||(e=t),l)return e.createDocumentFragment();n=n||o(e);for(var a=n.frag.cloneNode(),i=0,c=r(),s=c.length;i<s;i++)a.createElement(c[i]);return a}function c(e,t){t.cache||(t.cache={},t.createElem=e.createElement,t.createFrag=e.createDocumentFragment,t.frag=t.createFrag()),e.createElement=function(n){return y.shivMethods?a(n,e,t):t.createElem(n)},e.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+r().join().replace(/[\w\-]+/g,function(e){return t.createElem(e),t.frag.createElement(e),'c("'+e+'")'})+");return n}")(y,t.frag)}function s(e){e||(e=t);var r=o(e);return!y.shivCSS||u||r.hasCSS||(r.hasCSS=!!n(e,"article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}")),l||c(e,r),e}var u,l,d="3.7.0",f=e.html5||{},m=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,p=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,h="_html5shiv",g=0,v={};(function(){try{var e=t.createElement("a");e.innerHTML="<xyz></xyz>",u="hidden"in e,l=1==e.childNodes.length||function(){t.createElement("a");var e=t.createDocumentFragment();return"undefined"==typeof e.cloneNode||"undefined"==typeof e.createDocumentFragment||"undefined"==typeof e.createElement}()}catch(e){u=!0,l=!0}})();var y={elements:f.elements||"abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output progress section summary template time video",version:d,shivCSS:f.shivCSS!==!1,supportsUnknownElements:l,shivMethods:f.shivMethods!==!1,type:"default",shivDocument:s,createElement:a,createDocumentFragment:i};e.html5=y,s(t)}(this,t),p._version=m,p._prefixes=S,p._domPrefixes=T,p._cssomPrefixes=k,p.mq=z,p.hasEvent=A,p.testProp=function(e){return c([e])},p.testAllProps=u,p.testStyles=F,p.prefixed=function(e,t,n){return t?u(e,t,n):u(e,"pfx")},g.className=g.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(h?" js "+$.join(" "):""),p}(this,this.document);
(function($,undefined){$.Gallery=function(options,element){this.$el=$(element);this._init(options);};$.Gallery.defaults={current:0,autoplay:false,interval:2000};$.Gallery.prototype={_init:function(options){this.options=$.extend(true,{},$.Gallery.defaults,options);this.support3d=Modernizr.csstransforms3d;this.support2d=Modernizr.csstransforms;this.supportTrans=Modernizr.csstransitions;this.$wrapper=this.$el.find('.dg-wrapper');this.$items=this.$wrapper.children();this.itemsCount=this.$items.length;this.$nav=this.$el.find('nav');this.$navPrev=this.$nav.find('.dg-prev');this.$navNext=this.$nav.find('.dg-next');this.$indicators=this.$el.find('.dg-indicators').children();if(this.itemsCount<3){this.$nav.remove();return false;}this.current=this.options.current;this.isAnim=false;this.$items.css({'opacity':0,'visibility':'hidden'});this._validate();this._layout();this._loadEvents();if(this.options.autoplay){this._startSlideshow();}},_validate:function(){if(this.options.current<0||this.options.current>this.itemsCount-1){this.current=0;}},_layout:function(){this._setItems();var leftCSS,rightCSS,currentCSS;if(this.support3d&&this.supportTrans){leftCSS={'-webkit-transform':'translateX(-120px) translateZ(-200px)','-moz-transform':'translateX(-120px) translateZ(-200px)','-o-transform':'translateX(-120px) translateZ(-200px)','-ms-transform':'translateX(-120px) translateZ(-200px)','transform':'translateX(-120px) translateZ(-200px)'};rightCSS={'-webkit-transform':'translateX(120px) translateZ(-200px)','-moz-transform':'translateX(120px) translateZ(-200px)','-o-transform':'translateX(120px) translateZ(-200px)','-ms-transform':'translateX(120px) translateZ(-200px)','transform':'translateX(120px) translateZ(-200px)'};leftCSS.opacity=0.25;leftCSS.visibility='visible';rightCSS.opacity=0.25;rightCSS.visibility='visible';}else if(this.support2d&&this.supportTrans){leftCSS={'-webkit-transform':'translate(-120px) scale(0.8)','-moz-transform':'translate(-120px) scale(0.8)','-o-transform':'translate(-120px) scale(0.8)','-ms-transform':'translate(-120px) scale(0.8)','transform':'translate(-120px) scale(0.8)'};rightCSS={'-webkit-transform':'translate(120px) scale(0.8)','-moz-transform':'translate(120px) scale(0.8)','-o-transform':'translate(120px) scale(0.8)','-ms-transform':'translate(120px) scale(0.8)','transform':'translate(120px) scale(0.8)'};currentCSS={'z-index':999};leftCSS.opacity=0.25;leftCSS.visibility='visible';rightCSS.opacity=0.25;rightCSS.visibility='visible';}this.$leftItm.css(leftCSS||{});this.$rightItm.css(rightCSS||{});this.$currentItm.css(currentCSS||{}).css({'opacity':1,'visibility':'visible'}).addClass('dg-center');},_setItems:function(){this.$items.removeClass('dg-center');this.$currentItm=this.$items.eq(this.current);this.$leftItm=(this.current===0)?this.$items.eq(this.itemsCount-1):this.$items.eq(this.current-1);this.$rightItm=(this.current===this.itemsCount-1)?this.$items.eq(0):this.$items.eq(this.current+1);if(!this.support3d&&this.support2d&&this.supportTrans){this.$items.css('z-index',1);this.$currentItm.css('z-index',999);}if(this.itemsCount>3){this.$nextItm=(this.$rightItm.index()===this.itemsCount-1)?this.$items.eq(0):this.$rightItm.next();this.$nextItm.css(this._getCoordinates('outright'));this.$prevItm=(this.$leftItm.index()===0)?this.$items.eq(this.itemsCount-1):this.$leftItm.prev();this.$prevItm.css(this._getCoordinates('outleft'));}},_loadEvents:function(){var _self=this;this.$navPrev.on('click.gallery',function(event){if(_self.options.autoplay){clearTimeout(_self.slideshow);_self.options.autoplay=false;}_self._navigate('prev');return false;});this.$navNext.on('click.gallery',function(event){if(_self.options.autoplay){clearTimeout(_self.slideshow);_self.options.autoplay=false;}_self._navigate('next');return false;});this.$wrapper.on('webkitTransitionEnd.gallery transitionend.gallery OTransitionEnd.gallery',function(event){_self.$currentItm.addClass('dg-center');_self.$items.removeClass('dg-transition');_self.isAnim=false;});this.$indicators.on('click',function(event){_self._goto($(event.currentTarget).data('slide-to'));});},_getCoordinates:function(position){if(this.support3d&&this.supportTrans){switch(position){case'outleft':return{'-webkit-transform':'translateX(-120px) translateZ(-300px)','-moz-transform':'translateX(-120px) translateZ(-300px)','-o-transform':'translateX(-120px) translateZ(-300px)','-ms-transform':'translateX(-120px) translateZ(-300px)','transform':'translateX(-120px) translateZ(-300px)','opacity':0,'visibility':'hidden'};break;case'outright':return{'-webkit-transform':'translateX(120px) translateZ(-300px)','-moz-transform':'translateX(120px) translateZ(-300px)','-o-transform':'translateX(120px) translateZ(-300px)','-ms-transform':'translateX(120px) translateZ(-300px)','transform':'translateX(120px) translateZ(-300px)','opacity':0,'visibility':'hidden'};break;case'left':return{'-webkit-transform':'translateX(-120px) translateZ(-200px)','-moz-transform':'translateX(-120px) translateZ(-200px)','-o-transform':'translateX(-120px) translateZ(-200px)','-ms-transform':'translateX(-120px) translateZ(-200px)','transform':'translateX(-120px) translateZ(-200px)','opacity':0.25,'visibility':'visible'};break;case'right':return{'-webkit-transform':'translateX(120px) translateZ(-200px)','-moz-transform':'translateX(120px) translateZ(-200px)','-o-transform':'translateX(120px) translateZ(-200px)','-ms-transform':'translateX(120px) translateZ(-200px)','transform':'translateX(120px) translateZ(-200px)','opacity':0.25,'visibility':'visible'};break;case'center':return{'-webkit-transform':'translateX(0px) translateZ(0px) rotateY(0deg)','-moz-transform':'translateX(0px) translateZ(0px) rotateY(0deg)','-o-transform':'translateX(0px) translateZ(0px) rotateY(0deg)','-ms-transform':'translateX(0px) translateZ(0px) rotateY(0deg)','transform':'translateX(0px) translateZ(0px) rotateY(0deg)','opacity':1,'visibility':'visible'};break;};}else if(this.support2d&&this.supportTrans){switch(position){case'outleft':return{'-webkit-transform':'translate(-120px) scale(0.7)','-moz-transform':'translate(-120px) scale(0.7)','-o-transform':'translate(-120px) scale(0.7)','-ms-transform':'translate(-120px) scale(0.7)','transform':'translate(-120px) scale(0.7)','opacity':0,'visibility':'hidden'};break;case'outright':return{'-webkit-transform':'translate(120px) scale(0.7)','-moz-transform':'translate(120px) scale(0.7)','-o-transform':'translate(120px) scale(0.7)','-ms-transform':'translate(120px) scale(0.7)','transform':'translate(120px) scale(0.7)','opacity':0,'visibility':'hidden'};break;case'left':return{'-webkit-transform':'translate(-120px) scale(0.8)','-moz-transform':'translate(-120px) scale(0.8)','-o-transform':'translate(-120px) scale(0.8)','-ms-transform':'translate(-120px) scale(0.8)','transform':'translate(-120px) scale(0.8)','opacity':1,'visibility':'visible'};break;case'right':return{'-webkit-transform':'translate(120px) scale(0.8)','-moz-transform':'translate(120px) scale(0.8)','-o-transform':'translate(120px) scale(0.8)','-ms-transform':'translate(120px) scale(0.8)','transform':'translate(120px) scale(0.8)','opacity':1,'visibility':'visible'};break;case'center':return{'-webkit-transform':'translate(0px) scale(1)','-moz-transform':'translate(0px) scale(1)','-o-transform':'translate(0px) scale(1)','-ms-transform':'translate(0px) scale(1)','transform':'translate(0px) scale(1)','opacity':1,'visibility':'visible'};break;};}else{switch(position){case'outleft':case'outright':case'left':case'right':return{'opacity':0,'visibility':'hidden'};break;case'center':return{'opacity':1,'visibility':'visible'};break;};}},_goto:function(index){this.current=index;this.$indicators.removeClass('active');this.$indicators.eq(this.current).addClass('active');this.$currentItm=this.$items.eq(this.current);this.$leftItm=(this.current===0)?this.$items.eq(this.itemsCount-1):this.$items.eq(this.current-1);this.$rightItm=(this.current===this.itemsCount-1)?this.$items.eq(0):this.$items.eq(this.current+1);this.$currentItm.addClass('dg-transition').css(this._getCoordinates('center'));this.$leftItm.addClass('dg-transition').css(this._getCoordinates('left'));this.$rightItm.addClass('dg-transition').css(this._getCoordinates('right'));this._setItems();},_navigate:function(dir){if(this.supportTrans&&this.isAnim)return false;this.isAnim=true;switch(dir){case'next':this.current=this.$rightItm.index();this.$currentItm.addClass('dg-transition').css(this._getCoordinates('left'));this.$rightItm.addClass('dg-transition').css(this._getCoordinates('center'));if(this.$nextItm){this.$leftItm.addClass('dg-transition').css(this._getCoordinates('outleft'));this.$nextItm.addClass('dg-transition').css(this._getCoordinates('right'));}else{this.$leftItm.addClass('dg-transition').css(this._getCoordinates('right'));}break;case'prev':this.current=this.$leftItm.index();this.$currentItm.addClass('dg-transition').css(this._getCoordinates('right'));this.$leftItm.addClass('dg-transition').css(this._getCoordinates('center'));if(this.$prevItm){this.$rightItm.addClass('dg-transition').css(this._getCoordinates('outright'));this.$prevItm.addClass('dg-transition').css(this._getCoordinates('left'));}else{this.$rightItm.addClass('dg-transition').css(this._getCoordinates('left'));}break;};this.$indicators.removeClass('active');this.$indicators.eq(this.current).addClass('active');this._setItems();if(!this.supportTrans)this.$currentItm.addClass('dg-center');},_startSlideshow:function(){var _self=this;this.slideshow=setTimeout(function(){_self._navigate('next');if(_self.options.autoplay){_self._startSlideshow();}},this.options.interval);},destroy:function(){this.$navPrev.off('.gallery');this.$navNext.off('.gallery');this.$wrapper.off('.gallery');}};var logError=function(message){if(this.console){console.error(message);}};$.fn.gallery=function(options){if(typeof options==='string'){var args=Array.prototype.slice.call(arguments,1);this.each(function(){var instance=$.data(this,'gallery');if(!instance){logError("cannot call methods on gallery prior to initialization; "+"attempted to call method '"+options+"'");return;}if(!$.isFunction(instance[options])||options.charAt(0)==="_"){logError("no such method '"+options+"' for gallery instance");return;}instance[options].apply(instance,args);});}else{this.each(function(){var instance=$.data(this,'gallery');if(!instance){$.data(this,'gallery',new $.Gallery(options,this));}});}return this;};})(jQuery);