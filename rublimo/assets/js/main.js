function checkMe(){var t=document.getElementById("agree");null!=t&&(t.checked?$("#my_btn").css("display","block"):$("#my_btn").css("display","none"))}function checkMee(){var t=document.getElementById("agree");null!=t&&(t.checked?$("#next1f").css("visibility","visible"):$("#next1f").css("visibility","hidden"))}function GetMoney(){$("form#anketa").submit()}$(document).ready(function(){void 0!=$("#amount").val()}),window.Modernizr=function(t,e,n){function r(t){x.cssText=t}function s(t,e){return r(w.join(t+";")+(e||""))}function a(t,e){return typeof t===e}function i(t,e){return!!~(""+t).indexOf(e)}function o(t,e){for(var r in t){var s=t[r];if(!i(s,"-")&&x[s]!==n)return"pfx"!=e||s}return!1}function l(t,e,r){for(var s in t){var i=e[t[s]];if(i!==n)return r===!1?t[s]:a(i,"function")?i.bind(r||e):i}return!1}function c(t,e,n){var r=t.charAt(0).toUpperCase()+t.slice(1),s=(t+" "+E.join(r+" ")+r).split(" ");return a(e,"string")||a(e,"undefined")?o(s,e):(s=(t+" "+I.join(r+" ")+r).split(" "),l(s,e,n))}function u(){h.input=function(n){for(var r=0,s=n.length;r<s;r++)X[n[r]]=!!(n[r]in b);return X.list&&(X.list=!(!e.createElement("datalist")||!t.HTMLDataListElement)),X}("autocomplete autofocus list placeholder max min multiple pattern required step".split(" ")),h.inputtypes=function(t){for(var r,s,a,i=0,o=t.length;i<o;i++)b.setAttribute("type",s=t[i]),r="text"!==b.type,r&&(b.value=$,b.style.cssText="position:absolute;visibility:hidden;",/^range$/.test(s)&&b.style.WebkitAppearance!==n?(g.appendChild(b),a=e.defaultView,r=a.getComputedStyle&&"textfield"!==a.getComputedStyle(b,null).WebkitAppearance&&0!==b.offsetHeight,g.removeChild(b)):/^(search|tel)$/.test(s)||(r=/^(url|email)$/.test(s)?b.checkValidity&&b.checkValidity()===!1:b.value!=$)),S[t[i]]=!!r;return S}("search tel url email datetime date month week time datetime-local number range color".split(" "))}var d,p,m="2.7.1",h={},f=!0,g=e.documentElement,v="modernizr",y=e.createElement(v),x=y.style,b=e.createElement("input"),$=":)",C={}.toString,w=" -webkit- -moz- -o- -ms- ".split(" "),k="Webkit Moz O ms",E=k.split(" "),I=k.toLowerCase().split(" "),_={svg:"http://www.w3.org/2000/svg"},T={},S={},X={},Z=[],z=Z.slice,M=function(t,n,r,s){var a,i,o,l,c=e.createElement("div"),u=e.body,d=u||e.createElement("body");if(parseInt(r,10))for(;r--;)o=e.createElement("div"),o.id=s?s[r]:v+(r+1),c.appendChild(o);return a=["&#173;",'<style id="s',v,'">',t,"</style>"].join(""),c.id=v,(u?c:d).innerHTML+=a,d.appendChild(c),u||(d.style.background="",d.style.overflow="hidden",l=g.style.overflow,g.style.overflow="hidden",g.appendChild(d)),i=n(c,t),u?c.parentNode.removeChild(c):(d.parentNode.removeChild(d),g.style.overflow=l),!!i},N=function(e){var n=t.matchMedia||t.msMatchMedia;if(n)return n(e).matches;var r;return M("@media "+e+" { #"+v+" { position: absolute; } }",function(e){r="absolute"==(t.getComputedStyle?getComputedStyle(e,null):e.currentStyle).position}),r},P=function(){function t(t,s){s=s||e.createElement(r[t]||"div"),t="on"+t;var i=t in s;return i||(s.setAttribute||(s=e.createElement("div")),s.setAttribute&&s.removeAttribute&&(s.setAttribute(t,""),i=a(s[t],"function"),a(s[t],"undefined")||(s[t]=n),s.removeAttribute(t))),s=null,i}var r={select:"input",change:"input",submit:"form",reset:"form",error:"img",load:"img",abort:"img"};return t}(),q={}.hasOwnProperty;p=a(q,"undefined")||a(q.call,"undefined")?function(t,e){return e in t&&a(t.constructor.prototype[e],"undefined")}:function(t,e){return q.call(t,e)},Function.prototype.bind||(Function.prototype.bind=function(t){var e=this;if("function"!=typeof e)throw new TypeError;var n=z.call(arguments,1),r=function(){if(this instanceof r){var s=function(){};s.prototype=e.prototype;var a=new s,i=e.apply(a,n.concat(z.call(arguments)));return Object(i)===i?i:a}return e.apply(t,n.concat(z.call(arguments)))};return r}),T.flexbox=function(){return c("flexWrap")},T.flexboxlegacy=function(){return c("boxDirection")},T.canvas=function(){var t=e.createElement("canvas");return!(!t.getContext||!t.getContext("2d"))},T.canvastext=function(){return!(!h.canvas||!a(e.createElement("canvas").getContext("2d").fillText,"function"))},T.webgl=function(){return!!t.WebGLRenderingContext},T.touch=function(){var n;return"ontouchstart"in t||t.DocumentTouch&&e instanceof DocumentTouch?n=!0:M(["@media (",w.join("touch-enabled),("),v,")","{#modernizr{top:9px;position:absolute}}"].join(""),function(t){n=9===t.offsetTop}),n},T.geolocation=function(){return"geolocation"in navigator},T.postmessage=function(){return!!t.postMessage},T.websqldatabase=function(){return!!t.openDatabase},T.indexedDB=function(){return!!c("indexedDB",t)},T.hashchange=function(){return P("hashchange",t)&&(e.documentMode===n||e.documentMode>7)},T.history=function(){return!(!t.history||!history.pushState)},T.draganddrop=function(){var t=e.createElement("div");return"draggable"in t||"ondragstart"in t&&"ondrop"in t},T.websockets=function(){return"WebSocket"in t||"MozWebSocket"in t},T.rgba=function(){return r("background-color:rgba(150,255,150,.5)"),i(x.backgroundColor,"rgba")},T.hsla=function(){return r("background-color:hsla(120,40%,100%,.5)"),i(x.backgroundColor,"rgba")||i(x.backgroundColor,"hsla")},T.multiplebgs=function(){return r("background:url(https://),url(https://),red url(https://)"),/(url\s*\(.*?){3}/.test(x.background)},T.backgroundsize=function(){return c("backgroundSize")},T.borderimage=function(){return c("borderImage")},T.borderradius=function(){return c("borderRadius")},T.boxshadow=function(){return c("boxShadow")},T.textshadow=function(){return""===e.createElement("div").style.textShadow},T.opacity=function(){return s("opacity:.55"),/^0.55$/.test(x.opacity)},T.cssanimations=function(){return c("animationName")},T.csscolumns=function(){return c("columnCount")},T.cssgradients=function(){var t="background-image:",e="gradient(linear,left top,right bottom,from(#9f9),to(white));",n="linear-gradient(left top,#9f9, white);";return r((t+"-webkit- ".split(" ").join(e+t)+w.join(n+t)).slice(0,-t.length)),i(x.backgroundImage,"gradient")},T.cssreflections=function(){return c("boxReflect")},T.csstransforms=function(){return!!c("transform")},T.csstransforms3d=function(){var t=!!c("perspective");return t&&"webkitPerspective"in g.style&&M("@media (transform-3d),(-webkit-transform-3d){#modernizr{left:9px;position:absolute;height:3px;}}",function(e,n){t=9===e.offsetLeft&&3===e.offsetHeight}),t},T.csstransitions=function(){return c("transition")},T.fontface=function(){var t;return M('@font-face {font-family:"font";src:url("https://")}',function(n,r){var s=e.getElementById("smodernizr"),a=s.sheet||s.styleSheet,i=a?a.cssRules&&a.cssRules[0]?a.cssRules[0].cssText:a.cssText||"":"";t=/src/i.test(i)&&0===i.indexOf(r.split(" ")[0])}),t},T.generatedcontent=function(){var t;return M(["#",v,"{font:0/0 a}#",v,':after{content:"',$,'";visibility:hidden;font:3px/1 a}'].join(""),function(e){t=e.offsetHeight>=3}),t},T.video=function(){var t=e.createElement("video"),n=!1;try{(n=!!t.canPlayType)&&(n=new Boolean(n),n.ogg=t.canPlayType('video/ogg; codecs="theora"').replace(/^no$/,""),n.h264=t.canPlayType('video/mp4; codecs="avc1.42E01E"').replace(/^no$/,""),n.webm=t.canPlayType('video/webm; codecs="vp8, vorbis"').replace(/^no$/,""))}catch(t){}return n},T.audio=function(){var t=e.createElement("audio"),n=!1;try{(n=!!t.canPlayType)&&(n=new Boolean(n),n.ogg=t.canPlayType('audio/ogg; codecs="vorbis"').replace(/^no$/,""),n.mp3=t.canPlayType("audio/mpeg;").replace(/^no$/,""),n.wav=t.canPlayType('audio/wav; codecs="1"').replace(/^no$/,""),n.m4a=(t.canPlayType("audio/x-m4a;")||t.canPlayType("audio/aac;")).replace(/^no$/,""))}catch(t){}return n},T.localstorage=function(){try{return localStorage.setItem(v,v),localStorage.removeItem(v),!0}catch(t){return!1}},T.sessionstorage=function(){try{return sessionStorage.setItem(v,v),sessionStorage.removeItem(v),!0}catch(t){return!1}},T.webworkers=function(){return!!t.Worker},T.applicationcache=function(){return!!t.applicationCache},T.svg=function(){return!!e.createElementNS&&!!e.createElementNS(_.svg,"svg").createSVGRect},T.inlinesvg=function(){var t=e.createElement("div");return t.innerHTML="<svg/>",(t.firstChild&&t.firstChild.namespaceURI)==_.svg},T.smil=function(){return!!e.createElementNS&&/SVGAnimate/.test(C.call(e.createElementNS(_.svg,"animate")))},T.svgclippaths=function(){return!!e.createElementNS&&/SVGClipPath/.test(C.call(e.createElementNS(_.svg,"clipPath")))};for(var j in T)p(T,j)&&(d=j.toLowerCase(),h[d]=T[j](),Z.push((h[d]?"":"no-")+d));return h.input||u(),h.addTest=function(t,e){if("object"==typeof t)for(var r in t)p(t,r)&&h.addTest(r,t[r]);else{if(t=t.toLowerCase(),h[t]!==n)return h;e="function"==typeof e?e():e,"undefined"!=typeof f&&f&&(g.className+=" "+(e?"":"no-")+t),h[t]=e}return h},r(""),y=b=null,function(t,e){function n(t,e){var n=t.createElement("p"),r=t.getElementsByTagName("head")[0]||t.documentElement;return n.innerHTML="x<style>"+e+"</style>",r.insertBefore(n.lastChild,r.firstChild)}function r(){var t=y.elements;return"string"==typeof t?t.split(" "):t}function s(t){var e=v[t[f]];return e||(e={},g++,t[f]=g,v[g]=e),e}function a(t,n,r){if(n||(n=e),u)return n.createElement(t);r||(r=s(n));var a;return a=r.cache[t]?r.cache[t].cloneNode():h.test(t)?(r.cache[t]=r.createElem(t)).cloneNode():r.createElem(t),!a.canHaveChildren||m.test(t)||a.tagUrn?a:r.frag.appendChild(a)}function i(t,n){if(t||(t=e),u)return t.createDocumentFragment();n=n||s(t);for(var a=n.frag.cloneNode(),i=0,o=r(),l=o.length;i<l;i++)a.createElement(o[i]);return a}function o(t,e){e.cache||(e.cache={},e.createElem=t.createElement,e.createFrag=t.createDocumentFragment,e.frag=e.createFrag()),t.createElement=function(n){return y.shivMethods?a(n,t,e):e.createElem(n)},t.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+r().join().replace(/[\w\-]+/g,function(t){return e.createElem(t),e.frag.createElement(t),'c("'+t+'")'})+");return n}")(y,e.frag)}function l(t){t||(t=e);var r=s(t);return!y.shivCSS||c||r.hasCSS||(r.hasCSS=!!n(t,"article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}")),u||o(t,r),t}var c,u,d="3.7.0",p=t.html5||{},m=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,h=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,f="_html5shiv",g=0,v={};(function(){try{var t=e.createElement("a");t.innerHTML="<xyz></xyz>",c="hidden"in t,u=1==t.childNodes.length||function(){e.createElement("a");var t=e.createDocumentFragment();return"undefined"==typeof t.cloneNode||"undefined"==typeof t.createDocumentFragment||"undefined"==typeof t.createElement}()}catch(t){c=!0,u=!0}})();var y={elements:p.elements||"abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output progress section summary template time video",version:d,shivCSS:p.shivCSS!==!1,supportsUnknownElements:u,shivMethods:p.shivMethods!==!1,type:"default",shivDocument:l,createElement:a,createDocumentFragment:i};t.html5=y,l(e)}(this,e),h._version=m,h._prefixes=w,h._domPrefixes=I,h._cssomPrefixes=E,h.mq=N,h.hasEvent=P,h.testProp=function(t){return o([t])},h.testAllProps=c,h.testStyles=M,h.prefixed=function(t,e,n){return e?c(t,e,n):c(t,"pfx")},g.className=g.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(f?" js "+Z.join(" "):""),h}(this,this.document),function(t,e){t.Gallery=function(e,n){this.$el=t(n),this._init(e)},t.Gallery.defaults={current:0,autoplay:!1,interval:2e3},t.Gallery.prototype={_init:function(e){return this.options=t.extend(!0,{},t.Gallery.defaults,e),this.support3d=Modernizr.csstransforms3d,this.support2d=Modernizr.csstransforms,this.supportTrans=Modernizr.csstransitions,this.$wrapper=this.$el.find(".dg-wrapper"),this.$items=this.$wrapper.children(),this.itemsCount=this.$items.length,this.$nav=this.$el.find("nav"),this.$navPrev=this.$nav.find(".dg-prev"),this.$navNext=this.$nav.find(".dg-next"),this.$indicators=this.$el.find(".dg-indicators").children(),this.itemsCount<3?(this.$nav.remove(),!1):(this.current=this.options.current,this.isAnim=!1,this.$items.css({opacity:0,visibility:"hidden"}),this._validate(),this._layout(),this._loadEvents(),void(this.options.autoplay&&this._startSlideshow()))},_validate:function(){(this.options.current<0||this.options.current>this.itemsCount-1)&&(this.current=0)},_layout:function(){this._setItems();var t,e,n;this.support3d&&this.supportTrans?(t={"-webkit-transform":"translateX(-120px) translateZ(-200px)","-moz-transform":"translateX(-120px) translateZ(-200px)","-o-transform":"translateX(-120px) translateZ(-200px)","-ms-transform":"translateX(-120px) translateZ(-200px)",transform:"translateX(-120px) translateZ(-200px)"},e={"-webkit-transform":"translateX(120px) translateZ(-200px)","-moz-transform":"translateX(120px) translateZ(-200px)","-o-transform":"translateX(120px) translateZ(-200px)","-ms-transform":"translateX(120px) translateZ(-200px)",transform:"translateX(120px) translateZ(-200px)"},t.opacity=.25,t.visibility="visible",e.opacity=.25,e.visibility="visible"):this.support2d&&this.supportTrans&&(t={"-webkit-transform":"translate(-120px) scale(0.8)","-moz-transform":"translate(-120px) scale(0.8)","-o-transform":"translate(-120px) scale(0.8)","-ms-transform":"translate(-120px) scale(0.8)",transform:"translate(-120px) scale(0.8)"},e={"-webkit-transform":"translate(120px) scale(0.8)","-moz-transform":"translate(120px) scale(0.8)","-o-transform":"translate(120px) scale(0.8)","-ms-transform":"translate(120px) scale(0.8)",transform:"translate(120px) scale(0.8)"},n={"z-index":999},t.opacity=.25,t.visibility="visible",e.opacity=.25,e.visibility="visible"),this.$leftItm.css(t||{}),this.$rightItm.css(e||{}),this.$currentItm.css(n||{}).css({opacity:1,visibility:"visible"}).addClass("dg-center")},_setItems:function(){this.$items.removeClass("dg-center"),this.$currentItm=this.$items.eq(this.current),this.$leftItm=0===this.current?this.$items.eq(this.itemsCount-1):this.$items.eq(this.current-1),this.$rightItm=this.current===this.itemsCount-1?this.$items.eq(0):this.$items.eq(this.current+1),!this.support3d&&this.support2d&&this.supportTrans&&(this.$items.css("z-index",1),this.$currentItm.css("z-index",999)),this.itemsCount>3&&(this.$nextItm=this.$rightItm.index()===this.itemsCount-1?this.$items.eq(0):this.$rightItm.next(),this.$nextItm.css(this._getCoordinates("outright")),this.$prevItm=0===this.$leftItm.index()?this.$items.eq(this.itemsCount-1):this.$leftItm.prev(),this.$prevItm.css(this._getCoordinates("outleft")))},_loadEvents:function(){var e=this;this.$navPrev.on("click.gallery",function(t){return e.options.autoplay&&(clearTimeout(e.slideshow),e.options.autoplay=!1),e._navigate("prev"),!1}),this.$navNext.on("click.gallery",function(t){return e.options.autoplay&&(clearTimeout(e.slideshow),e.options.autoplay=!1),e._navigate("next"),!1}),this.$wrapper.on("webkitTransitionEnd.gallery transitionend.gallery OTransitionEnd.gallery",function(t){e.$currentItm.addClass("dg-center"),e.$items.removeClass("dg-transition"),e.isAnim=!1}),this.$indicators.on("click",function(n){e._goto(t(n.currentTarget).data("slide-to"))})},_getCoordinates:function(t){if(this.support3d&&this.supportTrans)switch(t){case"outleft":return{"-webkit-transform":"translateX(-120px) translateZ(-300px)","-moz-transform":"translateX(-120px) translateZ(-300px)","-o-transform":"translateX(-120px) translateZ(-300px)","-ms-transform":"translateX(-120px) translateZ(-300px)",transform:"translateX(-120px) translateZ(-300px)",opacity:0,visibility:"hidden"};case"outright":return{"-webkit-transform":"translateX(120px) translateZ(-300px)","-moz-transform":"translateX(120px) translateZ(-300px)","-o-transform":"translateX(120px) translateZ(-300px)","-ms-transform":"translateX(120px) translateZ(-300px)",transform:"translateX(120px) translateZ(-300px)",opacity:0,visibility:"hidden"};case"left":return{"-webkit-transform":"translateX(-120px) translateZ(-200px)","-moz-transform":"translateX(-120px) translateZ(-200px)","-o-transform":"translateX(-120px) translateZ(-200px)","-ms-transform":"translateX(-120px) translateZ(-200px)",transform:"translateX(-120px) translateZ(-200px)",opacity:.25,visibility:"visible"};case"right":return{"-webkit-transform":"translateX(120px) translateZ(-200px)","-moz-transform":"translateX(120px) translateZ(-200px)","-o-transform":"translateX(120px) translateZ(-200px)","-ms-transform":"translateX(120px) translateZ(-200px)",transform:"translateX(120px) translateZ(-200px)",opacity:.25,visibility:"visible"};case"center":return{"-webkit-transform":"translateX(0px) translateZ(0px) rotateY(0deg)","-moz-transform":"translateX(0px) translateZ(0px) rotateY(0deg)","-o-transform":"translateX(0px) translateZ(0px) rotateY(0deg)","-ms-transform":"translateX(0px) translateZ(0px) rotateY(0deg)",transform:"translateX(0px) translateZ(0px) rotateY(0deg)",opacity:1,visibility:"visible"}}else if(this.support2d&&this.supportTrans)switch(t){case"outleft":return{"-webkit-transform":"translate(-120px) scale(0.7)","-moz-transform":"translate(-120px) scale(0.7)","-o-transform":"translate(-120px) scale(0.7)","-ms-transform":"translate(-120px) scale(0.7)",transform:"translate(-120px) scale(0.7)",opacity:0,visibility:"hidden"};case"outright":return{"-webkit-transform":"translate(120px) scale(0.7)","-moz-transform":"translate(120px) scale(0.7)","-o-transform":"translate(120px) scale(0.7)","-ms-transform":"translate(120px) scale(0.7)",transform:"translate(120px) scale(0.7)",opacity:0,visibility:"hidden"};case"left":return{"-webkit-transform":"translate(-120px) scale(0.8)","-moz-transform":"translate(-120px) scale(0.8)","-o-transform":"translate(-120px) scale(0.8)","-ms-transform":"translate(-120px) scale(0.8)",transform:"translate(-120px) scale(0.8)",opacity:1,visibility:"visible"};case"right":return{"-webkit-transform":"translate(120px) scale(0.8)","-moz-transform":"translate(120px) scale(0.8)","-o-transform":"translate(120px) scale(0.8)","-ms-transform":"translate(120px) scale(0.8)",transform:"translate(120px) scale(0.8)",opacity:1,visibility:"visible"};case"center":return{"-webkit-transform":"translate(0px) scale(1)","-moz-transform":"translate(0px) scale(1)","-o-transform":"translate(0px) scale(1)","-ms-transform":"translate(0px) scale(1)",transform:"translate(0px) scale(1)",opacity:1,visibility:"visible"}}else switch(t){case"outleft":case"outright":case"left":case"right":return{opacity:0,visibility:"hidden"};case"center":return{opacity:1,visibility:"visible"}}},_goto:function(t){this.current=t,this.$indicators.removeClass("active"),this.$indicators.eq(this.current).addClass("active"),this.$currentItm=this.$items.eq(this.current),this.$leftItm=0===this.current?this.$items.eq(this.itemsCount-1):this.$items.eq(this.current-1),this.$rightItm=this.current===this.itemsCount-1?this.$items.eq(0):this.$items.eq(this.current+1),this.$currentItm.addClass("dg-transition").css(this._getCoordinates("center")),this.$leftItm.addClass("dg-transition").css(this._getCoordinates("left")),this.$rightItm.addClass("dg-transition").css(this._getCoordinates("right")),this._setItems()},_navigate:function(t){if(this.supportTrans&&this.isAnim)return!1;switch(this.isAnim=!0,t){case"next":this.current=this.$rightItm.index(),this.$currentItm.addClass("dg-transition").css(this._getCoordinates("left")),this.$rightItm.addClass("dg-transition").css(this._getCoordinates("center")),this.$nextItm?(this.$leftItm.addClass("dg-transition").css(this._getCoordinates("outleft")),this.$nextItm.addClass("dg-transition").css(this._getCoordinates("right"))):this.$leftItm.addClass("dg-transition").css(this._getCoordinates("right"));break;case"prev":this.current=this.$leftItm.index(),this.$currentItm.addClass("dg-transition").css(this._getCoordinates("right")),this.$leftItm.addClass("dg-transition").css(this._getCoordinates("center")),this.$prevItm?(this.$rightItm.addClass("dg-transition").css(this._getCoordinates("outright")),this.$prevItm.addClass("dg-transition").css(this._getCoordinates("left"))):this.$rightItm.addClass("dg-transition").css(this._getCoordinates("left"))}this.$indicators.removeClass("active"),this.$indicators.eq(this.current).addClass("active"),this._setItems(),this.supportTrans||this.$currentItm.addClass("dg-center")},_startSlideshow:function(){var t=this;this.slideshow=setTimeout(function(){t._navigate("next"),t.options.autoplay&&t._startSlideshow()},this.options.interval)},destroy:function(){this.$navPrev.off(".gallery"),this.$navNext.off(".gallery"),this.$wrapper.off(".gallery")}};var n=function(t){this.console&&console.error(t)};t.fn.gallery=function(e){if("string"==typeof e){var r=Array.prototype.slice.call(arguments,1);this.each(function(){var s=t.data(this,"gallery");return s?t.isFunction(s[e])&&"_"!==e.charAt(0)?void s[e].apply(s,r):void n("no such method '"+e+"' for gallery instance"):void n("cannot call methods on gallery prior to initialization; attempted to call method '"+e+"'")})}else this.each(function(){var n=t.data(this,"gallery");n||t.data(this,"gallery",new t.Gallery(e,this))});return this}}(jQuery);