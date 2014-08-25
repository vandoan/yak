<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb">
<head>
<title>Sparkbrowser - Features</title>
<script type="text/javascript">var _gaq=_gaq||[];_gaq.push(['_setAccount','UA-33744815-1']);_gaq.push(['_trackPageview']);(function(){var ga=document.createElement('script');ga.type='text/javascript';ga.async=true;ga.src=('https:'==document.location.protocol?'https://ssl':'http://www')+'.google-analytics.com/ga.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(ga,s);})();</script>
<meta name="robots" content="index, follow"/>
<meta name="description" content="Sparkbrowser - Official Site"/>
<meta name="keywords" content="Sparkbrowser, Chrome, Firefox, Internet Explorer, Safari, Google, Apple, Web Browser, Webkit, Fast, Internet, Browser, Web, Sparkbrowser, Web Browser"/>
<!--META KEYWORDS-->
<meta name="author" content="Christopher Reeves"/>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:regular,bold" type="text/css"/>
<link rel="stylesheet" href="http://sparkbrowser.com/css/A.reset.css+960.css+styles.css+color.css,Mcc.F2QsbMhJn1.css.pagespeed.cf.j1VpWAcr5h.css" type="text/css"/>
<link rel="stylesheet" media="screen" href="http://sparkbrowser.com/css/A.superfish.css.pagespeed.cf.GSbp8wthZr.css" type="text/css"/>
<style type="text/css">.backgrounds{position:fixed;width:110px;background:#656565;top:60%;left:-105px;padding:0 10px 0 20px;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;opacity:.7;filter:alpha(opacity=70)}.backgrounds h6{text-transform:uppercase;color:#fff;font-weight:normal;margin:10px 0;width:90px;font-size:11px}.backgrounds ul{list-style:none;margin:0 0 5px;padding:0}.backgrounds ul li{margin-bottom:10px;float:left}.backgrounds ul li a{display:block;width:15px;height:15px;border:1px solid #ccc;text-indent:-9999px;margin-right:5px}.backgrounds ul li a:hover{border:1px solid #fff}.backgrounds ul li a.preset1{background:#638900}.backgrounds ul li a.preset2{background:#b71010}.backgrounds ul li a.preset3{background:#e16204}.backgrounds ul li a.preset4{background:#1b5e88}.backgrounds ul li a.preset5{background:#13d7fd}.backgrounds ul li a.preset6{background:#685518}.backgrounds ul li a.preset7{background:#5b2f2a}.backgrounds ul li a.preset8{background:#6a6664}</style>
<!--[if IE ]>
<link rel="stylesheet" href="./css/ie.css" type="text/css" />
<![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/></head>
<!-- #dialog is the id of a DIV defined in the code below -->
<script src="http://sparkbrowser.com/assets/jquery-1.7.2.min.js.pagespeed.jm.TiC1blcYSb.js"></script>
<script type="text/javascript">//<![CDATA[
;(function($){$.fn._hover=$.fn.hover;$.fn.hover=function(fn1,fn2,fn3){if(fn3)this.bind('hoverstart',fn1);if(fn2)this.bind('hoverend',fn3?fn3:fn2);return!fn1?this.trigger('hover'):this.bind('hover',fn3?fn2:fn1);};var hover=$.event.special.hover={delay:100,speed:100,setup:function(data){data=$.extend({speed:hover.speed,delay:hover.delay,hovered:0},data||{});$.event.add(this,"mouseenter mouseleave",hoverHandler,data);},teardown:function(){$.event.remove(this,"mouseenter mouseleave",hoverHandler);}};function hoverHandler(event){var data=event.data||event;switch(event.type){case'mouseenter':data.dist2=0;data.event=event;event.type="hoverstart";if($.event.handle.call(this,event)!==false){data.elem=this;$.event.add(this,"mousemove",hoverHandler,data);data.timer=setTimeout(compare,data.delay);}
break;case'mousemove':data.dist2+=Math.pow(event.pageX-data.event.pageX,2)+Math.pow(event.pageY-data.event.pageY,2);data.event=event;break;case'mouseleave':clearTimeout(data.timer);if(data.hovered){event.type="hoverend";$.event.handle.call(this,event);data.hovered--;}
else $.event.remove(data.elem,"mousemove",hoverHandler);break;default:if(data.dist2<=Math.pow(data.speed*(data.delay/1e3),2)){$.event.remove(data.elem,"mousemove",hoverHandler);data.hovered++;data.event.type="hover";if($.event.handle.call(data.elem,data.event)===false)
data.hovered--;}
else data.timer=setTimeout(compare,data.delay);data.dist2=0;break;}
function compare(){hoverHandler(data);};};})(jQuery);
//]]></script>
<script type="text/javascript" src="http://sparkbrowser.com/js/modal_popup.js.pagespeed.jm.xTKgeCI4RM.js"></script>
<script type="text/javascript">//<![CDATA[
;(function($){$.fn.supersubs=function(options){var opts=$.extend({},$.fn.supersubs.defaults,options);return this.each(function(){var $$=$(this);var o=$.meta?$.extend({},opts,$$.data()):opts;var fontsize=$('<li id="menu-fontsize">&#8212;</li>').css({'padding':0,'position':'absolute','top':'-999em','width':'auto'}).appendTo($$).width();$('#menu-fontsize').remove();$ULs=$$.find('ul');$ULs.each(function(i){var $ul=$ULs.eq(i);var $LIs=$ul.children();var $As=$LIs.children('a');var liFloat=$LIs.css('white-space','nowrap').css('float');var emWidth=$ul.add($LIs).add($As).css({'float':'none','width':'auto'}).end().end()[0].clientWidth/fontsize;emWidth+=o.extraWidth;if(emWidth>o.maxWidth){emWidth=o.maxWidth;}
else if(emWidth<o.minWidth){emWidth=o.minWidth;}
emWidth+='em';$ul.css('width',emWidth);$LIs.css({'float':liFloat,'width':'100%','white-space':'normal'}).each(function(){var $childUl=$('>ul',this);var offsetDirection=$childUl.css('left')!==undefined?'left':'right';$childUl.css(offsetDirection,emWidth);});});});};$.fn.supersubs.defaults={minWidth:9,maxWidth:25,extraWidth:0};})(jQuery);
//]]></script>
<script type="text/javascript" src="http://sparkbrowser.com/js/superfish.js.pagespeed.jm.pOorr8IWAu.js"></script>
<script src="./Mozilla Firefox Web Browser — Built with Cutting-Edge Technology_files/min.js"></script>
<link rel="stylesheet" href="http://sparkbrowser.com/css/A.technology.css.pagespeed.cf.OpDwVkxk7M.css" media="screen">
<script type="text/javascript">//<![CDATA[
var TINY={};function T$(i){return document.getElementById(i)}
function T$$(e,p){return p.getElementsByTagName(e)}
TINY.slider=function(){function slide(n,p){this.n=n;this.init(p)}
slide.prototype.init=function(p){var s=T$(p.id),u=this.u=T$$('ul',s)[0],c=T$$('li',u),l=c.length,i=this.l=this.c=0;if(p.navid&&p.activeclass){this.g=T$$('li',T$(p.navid));this.s=p.activeclass}
this.a=p.auto||0;this.p=p.resume||0;this.v=p.vertical||0;s.style.overflow='hidden';for(i;i<l;i++){if(c[i].parentNode==u){this.l++}}
if(this.v){;u.style.top=0;this.h=p.height||c[0].offsetHeight;u.style.height=(this.l*this.h)+'px'}else{u.style.left=0;this.w=p.width||c[0].offsetWidth;u.style.width=(this.l*this.w)+'px'}
this.pos(p.position||0,this.a?1:0)},slide.prototype.auto=function(){this.u.ai=setInterval(new Function(this.n+'.move(1,1)'),this.a*5000)},slide.prototype.move=function(d,a){var n=this.c+d,i=d==1?n==this.l?0:n:n<0?this.l-1:n;this.pos(i,a)},slide.prototype.pos=function(p,a){clearInterval(this.u.ai);clearInterval(this.u.si);var o=this.v?parseInt(this.u.style.top):parseInt(this.u.style.left),t=this.v?p*this.h:p*this.w,d=t>Math.abs(o)?1:-1;t=t*-1;this.c=p;if(this.g){for(var i=0;i<this.l;i++){this.g[i].className=i==p?this.s:''}}
this.u.si=setInterval(new Function(this.n+'.slide('+t+','+d+','+a+')'),20)},slide.prototype.slide=function(t,d,a){var o=this.v?parseInt(this.u.style.top):parseInt(this.u.style.left);if(o==t){clearInterval(this.u.si);if(a||(this.a&&this.p)){this.auto()}}else{var v=o-Math.ceil(Math.abs(t-o)*.15)*d+'px';this.v?this.u.style.top=v:this.u.style.left=v}};return{slide:slide}}();
//]]></script>
<script type="text/javascript">//<![CDATA[
(function($){$.fn.getTwitter=function(options){var o=$.extend({},$.fn.getTwitter.defaults,options);$(this).hide();$(this).append('<ul id="twitter_update_list"><li></li></ul>');$("ul#twitter_update_list").hide();var pl=$('<p id="'+o.preloaderId+'">'+o.loaderText+'</p>');$(this).append(pl);if(o.showProfileLink){$(this).append('<a id="profileLink" href="http://twitter.com/'+o.userName+'">follow us on Twitter</a>');}
$(this).show();$.getScript("http://twitter.com/javascripts/blogger.js");$.getScript("http://twitter.com/statuses/user_timeline/"+o.userName+".json?callback=twitterCallback2&count="+o.numTweets,function(){$(pl).remove();if(o.slideIn){$("ul#twitter_update_list").slideDown(1000);}
else{$("ul#twitter_update_list").show();}
$("ul#twitter_update_list li:first").addClass("firstTweet");$("ul#twitter_update_list li:last").addClass("lastTweet");});};$.fn.getTwitter.defaults={userName:"sparkbrowser",numTweets:1,preloaderId:"preloader",loaderText:"Loading tweets...",slideIn:false,showHeading:true,headingText:"Latest Tweets",showProfileLink:true};})(jQuery);
//]]></script>
<script type="text/javascript">//<![CDATA[
jQuery.fn.topLink=function(settings){settings=jQuery.extend({min:1,fadeSpeed:200},settings);return this.each(function(){var el=$(this);el.hide();$(window).scroll(function(){if($(window).scrollTop()>=settings.min)
{el.fadeIn(settings.fadeSpeed);}
else
{el.fadeOut(settings.fadeSpeed);}});});};$(document).ready(function(){$('#top-link').topLink({min:400,fadeSpeed:500});$('#top-link').click(function(e){e.preventDefault();$.scrollTo(0,300);});});
//]]></script>
<script type="text/javascript">//<![CDATA[
;(function(h){var m=h.scrollTo=function(b,c,g){h(window).scrollTo(b,c,g)};m.defaults={axis:'y',duration:1};m.window=function(b){return h(window).scrollable()};h.fn.scrollable=function(){return this.map(function(){var b=this.parentWindow||this.defaultView,c=this.nodeName=='#document'?b.frameElement||b:this,g=c.contentDocument||(c.contentWindow||c).document,i=c.setInterval;return c.nodeName=='IFRAME'||i&&h.browser.safari?g.body:i?g.documentElement:this})};h.fn.scrollTo=function(r,j,a){if(typeof j=='object'){a=j;j=0}if(typeof a=='function')a={onAfter:a};a=h.extend({},m.defaults,a);j=j||a.speed||a.duration;a.queue=a.queue&&a.axis.length>1;if(a.queue)j/=2;a.offset=n(a.offset);a.over=n(a.over);return this.scrollable().each(function(){var k=this,o=h(k),d=r,l,e={},p=o.is('html,body');switch(typeof d){case'number':case'string':if(/^([+-]=)?\d+(px)?$/.test(d)){d=n(d);break}d=h(d,this);case'object':if(d.is||d.style)l=(d=h(d)).offset()}h.each(a.axis.split(''),function(b,c){var g=c=='x'?'Left':'Top',i=g.toLowerCase(),f='scroll'+g,s=k[f],t=c=='x'?'Width':'Height',v=t.toLowerCase();if(l){e[f]=l[i]+(p?0:s-o.offset()[i]);if(a.margin){e[f]-=parseInt(d.css('margin'+g))||0;e[f]-=parseInt(d.css('border'+g+'Width'))||0}e[f]+=a.offset[i]||0;if(a.over[i])e[f]+=d[v]()*a.over[i]}else e[f]=d[i];if(/^\d+$/.test(e[f]))e[f]=e[f]<=0?0:Math.min(e[f],u(t));if(!b&&a.queue){if(s!=e[f])q(a.onAfterFirst);delete e[f]}});q(a.onAfter);function q(b){o.animate(e,j,a.easing,b&&function(){b.call(this,r,a)})};function u(b){var c='scroll'+b,g=k.ownerDocument;return p?Math.max(g.documentElement[c],g.body[c]):k[c]}}).end()};function n(b){return typeof b=='object'?b:{top:b,left:b}}})(jQuery);
//]]></script>
<script type="text/javascript">jQuery(function($){$("ul.sf-menu").supersubs({minWidth:13,maxWidth:30,extraWidth:0}).superfish({hoverClass:'sfHover',pathClass:'active',pathLevels:0,delay:500,animation:{height:'show'},speed:'def',autoArrows:1,dropShadows:0})});jQuery.event.special.hover.delay=100;jQuery.event.special.hover.speed=100;$().ready(function(){$("#twitter").getTwitter({userName:"sparkbrowser",numTweets:1,loaderText:"Loading tweets...",slideIn:false,showHeading:true,headingText:"Latest Tweets",showProfileLink:true});var bkg=$('.backgrounds');bkg.hover(function(){$(this).stop().animate({left:"-10px",opacity:1},{queue:false,duration:100});},function(){$(this).stop().animate({left:"-105px",opacity:0.7},{queue:false,duration:100});});$('span.hideme').click(function(){bkg.hide();});var obiecte_bg=$('#header .abr-container, #showcase, .learn-more, .findOut:hover, #LP-pagination li.current, .readmore, #top-link, #twitterIco');var obiecte_color=$('.homeTitle, #header .sf-menu li.parent.sfHover ul li a:hover, .readmore:hover, #footer a , .ltFollowUsLink a, .catItemTitle a, .genericItemTitle a, .itemTitle, .userItemTitle');var obiecte_border=$('#bottom, .hasBorder, .contact #showcase,#LP-pagination li.current,#top-link');var linkuri=$('.backgrounds a');linkuri.each(function(i){$(this).hover(function(){var color=$(this).css('background-color');obiecte_bg.css({'background-color':color});obiecte_color.css({'color':color});obiecte_border.css({'border-color':color});})})});</script>
<body class="">
<div class="page_container">
<div id="header">
<div class="abr-container ">
<div class="abr-container-pad">
<div class="grid_2 abr-alpha">
<a id="logo" href="http://sparkbrowser.com"></a>
</div><!-- End Header Grid 2 -->
<div class="grid_10 abr-omega">
<div class="socialMedia">
<div class="socialIco"><span></span></div>
<div style="text-align: right;" class="smile">
<a target="_blank" href="http://twitter.com/sparkbrowser" rel="nofollow"><img title="Follow us on Twitter" alt="Twitter" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAERklEQVRIx52WS2hcVRjHf+fc25nMTJpJH0nThLT2SYu00iAoBVEq6EJREVzowoXQVZdudCm4V1y4Uwoi0lJdiIgLoZtEaMS2WhNr00Ja2pkkfWU6k9zHeXwu7jybVIsfHC7c+53zu///+c5D0YyPp87v3LNj9JNSLnwd0CKsCbX2Fd1pOtBYb+cq95Y/OHFw/3ftPh+ePXvguYNP/jA2MLgnSWL8eqMDah1Cd6pSsCEMibzY2Wrl/eMH9n+mAHXyr7mTE7t3v3u3VkOQdQYQ1HqjPyL6833cbtTufH361DMhUO4P1EQ9WiF1tm2DNFshCAiUZtVZvIB+DEAtjujT4dbBXHkipFgsJmmaj4zFeN/j94HyRnYW+wiU4n5qma3VuZem6P9Qo0TQIqw0lsshIio2jsRajLUAOBH2Dmxkd6nIbB0WYuH5rRs4vGmAs9UlYu/bSpVSayZfKYWIYONYhwCJM8RdAAHGCnmWEvj8mrBsIHLCKyMh46UC1ZWIQCucFxrW4rzvUaWUwnmPA0KA2BgiY7DGtpM2aMVCCjUDTqASZ++PbN7Ekc2D7bzKasxkdZFVY2hpyQAO40wGSFJHbAzWmnbHVqkmAl5grgFnbnVqzAEjOXhhqMDRkWF+nL/R/qaVwjiHN01AI0koJim4jkVeBA+kDrSCv+swU+usBZFMWeqFl4b76FOKu0lC0EyIjcXgMkBqDPU4JujyUrxHBBIPAdlgVnpXsFaQD8AhRMaQpAalwHrBOgfGZwDvPcZaYmPQSqGVaiswHmKBpwbhte0ZCMADQ3nFRBmu3H/AQr2BiOBFEKVApDPJpjnBztqeJewB6zObxgpwbGht/V9cXOL7K1eJTGeR0gR471oKDNZ2AAIY58mHnc1srgGRg0LQC9hWLFDQAcsmavvfAjjXtMh63wOw3nO99oCnx8sM5aEawWwNTlwUdhSbEwyM9sF7T2zknUMH+fSXaYxzmYqHFYjxOG9xzmUA57i0sMTRHeMc3wUfzWRKLj/IQK1IHGzKCW+PlSjnclTrdQKt1yrwYrHWtRUo4MLNW0xtG+blneOESvjiOizFvbvs5jzs61ck1rGSJDjnEO+hWSh4R0gU4QHvXFtBa6GdvvA7qTW8uGcXx4YVNdcLyGkoaZicr3K7+feuaZHSGt+qIt3aO7oAAPU45qtfz3Nu/gaHto+wpVTo+W695/LibX67WUG8x3WdPmEunz0BEeudUgpr3bqn1kx1gUuVKuudcxpFGOieHVVrjdaKNF51Gli9U7l1tdBfQqRZTU27Wk2JEDT/5uGmkba9zlqstRRKRVbrjeX56enrIdCYPnPqm8Jg+dmRvfu2JkmCd57/E0opcvkcUb0uf/z807eLs7MzLWVDA6Ojbx1+9Y03B0aGt3nv1L/dJB6+TbTyNCFptBrPnZuamp+c/BL4s7v/FmA/MMTjHb2PihXgGnADsP8AGxaINCr0mXoAAAAASUVORK5CYII="/></a>
<a target="_blank" href="http://facebook.com/sparkbrowser" rel="nofollow"><img title="Follow us on Facebook" alt="Facebook" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAIGNIUk0AAG2YAABtmAAAAAAAAG2YAAAAAAAAbZgAAAAAAABtmEf7Sw0AAAPNSURBVEiJlZVPbBVVFMZ/986deX/ov2dLDSC+QimhREABTSTKwgUBNLpBoi7duTRsdOHOvYkrTUxcoFEXoiaEBEmAlBgFEhYNGiJKGgMBqaW0r+/NzLtz73Exr68t9NHyLSaTc+d83z3fuWeuooVNz31c3fty9ZNKT/kNBA3C40IrTWLd9RsTNz8Y++79EwAKYOjFY9teP7z/5K7RjcO2meLc45MDKAVhFDJ1P87OXvj92M/H3/vUAOqFPds/3DlaHf737hTOC0otT7CcrHpgXQT6K91m186NH13c8c5JA/QOrO3bPT1TJ04zVCf2DhBZKquU4r+pWbrWlAaqg927DVC2Ni3U6ilN61ZN7AW885SKIcbolhikzSx/dxqb2F4DqEZiaaQW21ydgBehXDQc3r+NbcODlEshItCIm3z27UXuz6aIBue8NgBxPSONLZm1K1sCeCe8dWgH+/YMLVkrRAZrPc3UknkBZzEAaWqJE0uWZSvv3gv9fWWe3b6+HYsTy+R0nSSxNOImcZqROY+DlkDT0kgszq0s4Jxn0Gii0LRjx3+4wrlLN4jCoNVHRWozvGsJzDVSSvUmgfad50vlTYwTy9xciiz6cOLmNHen6hTCgCgyKKWYrSXgwUAJnwkztYRipAi0XpZfEMIw4MBLIzy9oQ+96Lt9e6psWNdL5jznf7vB9EyMtQ50q4K8dGGuYTGBJtDqoXnwIoRG8+6be6n0lJasvfbKKAB3JmucOneNNM3QQZ5vIC99fgpt5rHkY6+VYn6svQjW+o69AZi8V6c210RphQjzFi0PEXAizDdFPDTSjM+/vkj1qQpHX91JoHPxn878wcStaW7emUEAhWrnGQCPAslJHoVm6vjm5Dgjmwc4cugZAh0AcHrsOmOXJyiVDCYIYNFZ0e3HKhFFhkK4tPAwDCgUWuQtqFZ1GmIIOjq1LFb6mQu0e9diVoi0GrNSsnvYSiGPLeQLimBBoFgsKhUYnFuhCeQny4RLTTWBJioEmHDBojCMCAtGGYCD+4dUaU0f9Xrc8bKZhxeh0l1c2L0Iu0bX0Vcpt0+VUpqergJn3DgGqM/cm/xr86ah4Vu3M/wjbjTIj24YBu1BVEoRGk0UmVxAoL/SRW12pvbn+OUJA9ROnfjyq96+yvNbtow8kaRNskVWPajlBbrLIU40WnLfe3q6GLAKE2iKhZDaXI2xs6e/v3Z1bHw+f+3a6tajBw6+fWRwcP2TXrIO9AtRoxf8zrxDELQKVJwm8ZVfz/9y6cKPXwBXFzP0A1uBwY7Mq0Md+Bv4B8j+Bxqera/xGqIrAAAAAElFTkSuQmCC"/></a>
<a target="_blank" href="http://www.flickr.com/photos/sparkbrowser" rel="nofollow"><img title="Follow us on Flickr" alt="Flickr" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAADaElEQVRIx62Vz2tcVRTHP/fOe0ma2ExDksYEQlptY0VQiIjRTbeCC0nBhUhdiIuu/CME/QPciAhSEOpKAy6CboRYukiXsVKirbYSJK11Jp2Zvh/33HOvizfjJDG6aOYL39W77/vle86550IXzWZzQUS+DiFoPAJU9ed2u32Bvdja2jrnnLsVY4whhCOxqyHNZvN9AAOYRqNxeWJi4h1VZRCo1Wrkef5gdXX15QSohxCWAEIIAzGIMWKtnUrTdCkZHR0dLctiOITAoBIYY4gx0mg06kmM0fTEB21QFIVNAJwTvPd47/fX0oAxoAHiQRVrKoZY8YBBr9wJQBDBdwlgbdX9u7uRTGCubjg+DKLVWMTUYh8U2Ps5oT5MmB3FaN+oZyAilYFTRbxHvMcaaOXwybpw7ZeAD3By3HDpfMryaYPDMrL6G6OXb2IflsSRhOL1BbJ3n60Sxb0JegZliXMlXjyJjXy6Hlm9HhhKDQC77cgH35R8fDHlqV93GPvoOkYC1AymVXDssx/xYzU6b53BiGKMxXuPCFgAJ0JRlIiU3G8J399UYoyID4gPxBj4sxFYv+0Z++4OplNAUBAPXsErQ2t38a0cJ0JZFjhX9kukqogTVIW8MDzKU1QswfYbpwLtwhNaDlTZ13YN0ClxRUlIDCYaYve7BRDnEO9wzjFWKzk7I4QsotJlGbG1wAvTBc0XJypx1UpYFRBaz5+gSMI/WiIOEekaeEFEcCJ4L1xazlhYcKARHKRDgYuvZpx9IuPeKxPsvHGqm84TCewuzXLv7Xl8XpWlx/6YasCLrwhMjcCHrwk3dhI6zvL0pGfhhJIX1Zhuv3eKv85PMnInw50cJntuHGpAKfsuWn9MRaoUvjog3S24NOuwJuKDISv33CSB1ukRHp45hgkR4wX8v2+yqlYGMfQT7EU35eGQ/18VveWZAHjVQ1fFUXaRsbaXIKfWHdVBGqRpWjU5z4miqhDx6jGDMLCWlJQsyzQBsj+2t2/Nzr50rtPpEELEmKM8NlCv12m1WrsbGxt3E6DzxZUrXx4fH19efGZxyjl34F34L7d4SGksQ0Mp7XY7fru29tXm5uZPvb+n5+fn3lxZWbnw5MzcjKqax619WZbFD1evXltfX/8cuLFXaBJYBKZ7K+Qx8Qi4DfwO+L8B4RbAdwDtW5sAAAAASUVORK5CYII="/></a>
<a target="_blank" href="http://youtube.com/sparkbrowser" rel="nofollow"><img title="Follow us on Youtube" alt="Youtube" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAEbklEQVRIx61VS28bVRT+ZuwZ5yE/ktTKA0c8kriFLkhCKWwoUgV0R5RWQeqGnwBrfgJs6LIrFAmprNrsKhYpIZRECgkSikAhD6qkchpIEzt+jj1PvjNjG5sUJFqudXxn5t57Ht/5zrlAfeRyuecty7rjuq7jPcNwHGerWCxeRevY3Nw8Z5rmjmyggWeSug6LDn8kuhWRbDY729PT8yGt4/8YoVAIhmEczc3NvRHme5wWJ2WBc9tGVVVBh6Aoyqm1fxtyhmfPaJo2qXZx1GrViCiQCETkuVarYX5+Hvl8HktLS9jf30c4HPYPyzon/5mANM+1iqwRmXiYD0qr8sYQZYVCAcvLy8hkMhgdHcXq6ir6+vpAOIUU0HWNcISRSMR9g40hEYuBarWqCkQwTQu2bfvSDJNGx8fH8fmNG3jn8mWsra350ZTLZaTTaWxsbCCZTCIajeLtS5fazrZCqvrYWzTwNyGrkIjH0dXZicGhIWxvbyOVSvkGDg8PxTtUKhWKETj3BB2kPYIICI3FTdYTvJDDslHm3d1dwRUDAwM4ODjw85RKhWDXz5+OwAoiMLnRNGu+IssyAxHFJPHI+fPQCMNb772LX/f2kBobw8sTE+jqSUDRdSQH+lEzzb/O1T0X45zqEfCpWq0xyXaQIEWFUjyBTtyv0zAW7vkl80k8BvfoMZx78/h4LE2Cx1EjGaoP9+AxH3DJqiCDPmGaEPkvTLRlW37leZqG2O070H5/BDMag549RoxJlcVSahgdhoFwZwfDS6P7xRdQ0XT88QoX6YCQQ+GvYco3YEmIdhCeb5+ztrOFjgsXoL0/herNmzCpxHMsRKamYP34E9Tl7+EwH/bjQ+ixKFzmxe7uFG+bNG1GIJ43sKtnCXqlDPWbb+ESinAhD+eDGfYAQieEvz4DM9kHdESgvDoBe3YWyJ/AHOyHYttNA80IXIdssWxfmkwgnojoUNguQvEE3J4+KFoIqFkI/bAKd2QESm8vPBabnnoObqlEB22oLQbEYbWRZD+KVvGC3uRxs0NjDvcE74DNfIl/CuGora4wyRkyTiGV23VIbtVG1TYiELFsB0f0JGeUYRRLyGUPYY++BEOPoFwqwpuchLGfQfnBA4QnXkNecVBynTYdjh30NB8iKZTWVuFpYeRYtcbCAo4++xQqqze7tQOHVBavVdaFl80FWPYmGBGdmr4Gh5QWaAUigVYioAEDoTpVm/2E3hSuXEGVRnB8zC1luEbVz5Uc9ntMepRJ7oLX2QX3bBpOd7dg3axktuogyaS0Z/lt1GMktl8HkLdIBNbFi8GVFPwFk9fW+YNJqCkF2SAIvdf4Y69yBKLKo0xmZ3Dw9XMlMsH1Q6zvZOn/1yHsjLPC2epPVlZW9sRA6ctbt76KxmJvps+mz0gXbb86lX9SdeqLwhYjdwQvfe/ru3dvr6+v/9I4nRweHpqZnp6+OtA/1E8DytPcxYI9m1z1u/v3lxYXF7/gp59bFbE0kRZjjXviKUeZ8hvloRD0T5nYinSWLUumAAAAAElFTkSuQmCC"/></a>
<a target="_blank" href="http://vimeo.com/user7123627" rel="nofollow"><img title="Follow us on Vimeo" alt="Vimeo" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAEDUlEQVRIx62VzWtcVRjGf+fc05kkTTJJJ/3IEKmkWEvBUiuEdlNciIIiouDCjYv+AQp2owtBQYpQoeDCnQU3ClpdSG0X6qLUYCn9oDUN0g9J006jpmnTyczce75d3JnptKmtVl84XDj3nOf9Os/zClo2+tGP60c3VfYN9xZfEgJJjPxbEzIhc+5CdW7+7d9e3/ENgACo7Dmw6antWw9uq5Q3BJ0RY0QgiO0DD7B2KEKAVIo5491Pv87unn5t4mMFiLHHH31ny9iaDTduLBL+IejfOouW1f09atPo8LvVXe8dVECp3Ku2LdUbpM7/N/SWXV9qMlhUI73DpW0K6LPWFevaYp3n/zAhBFpATGslBYjMWJrW4axbVlsXIhFQUiBFuwz5fiIgRJACpBSdZgghyIhgrVQAqTY0tcV3OfAxooTgmbEh1vUV+HZmgZvaEYGeRPLi+lU8Ue5nUTu+vDRPtaFJhOg4SEPAe4+CXpxxNI0lWAutqEsFxVtbx3i6MgRAXyLYe2qWHpXwZtd+O6U9J2ZI5G0HmQ8QAgpAa0vachBipNLfwwc7xtk8vLKDsaXcj/OeiUrpTnCgVEjIrEV2ZaCdJ3iPBGhqzVKq0cZSzwwTa/q5mVl+Wah3QIYKikElOP3HIru+n2KuoTv/Lt6sU88M2li0saTGUGtmrQx6IRjLUiOlKCJSCj4/d5XPzl5morKK/c9tIRGCwYKiXFQcu7LA731Funl+Zr6G0YaoEogR7QPOeWhnEGMkOEeaadJU00wzjLGcqC4wU0s7LN041ItJM14YH6GysgjA9EKdQ+evEbwjyzSNNMMZS/T5k5d5Vw3ROaJzeGux2uCNpVZrcLy60Il051iZzaMl3nhyHAATAu8fneZWrY4zFmdaON6BdxBsy0GIEDyxawXviM5yZPbP2w4eKXPg5e2M9BUA+OTkJSYvVBEx5ufvwsCDIgWiy1PydzE5Bk5evU7dOPoLikQIBgoKgO8uzLHv6BSCkAd4J5VzNhLaPQgQlkcgYmDu+i0mr8zfcX/yyjy7Dx/HawMxLLsXff71wec8gEgMIa/d3eroAx8eOcPGVQP0F1dw4NwMe4+cRWuLkILow73UCJEIwKMgfyWEsLxErWzPX53n2U8PsSKR3FpKQeRk4n7amOSxq3wSiVaZwr3VEWg20lzMpEDEluLdz1qyoYAYpPcyEXmJxAMGQoAHDlMpEUoSMu0l0LTX5i4mpYG8Fy5/UQ+1WlySgysJ9fpievb0ZQXUa4e/+kINDG4vjD82ElPdYeHtAt1vEncPfYnoKeAb9diY/OFrV50+1769Wg6ve3Vg5/OvqHVr10YfxMNNMknUWZae+nkynTq2H5jqBioDG4HVHQl5OGsAl4BZwP0Fy7OGjcxIG8kAAAAASUVORK5CYII="/></a>
<a target="_blank" href="https://plus.google.com/103169821052890438536" rel="nofollow"><img title="Follow us on Google" alt="Google" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAERElEQVRIx6WV3WtbdRjHP7/fOSdpsjYhfaEvc85uWLeLiXZ2c4iOgeC8ENmweCcieCf+RUMEYWNDV3U4JnhTq4PSqazbcG9V6+LWdTZJmzQ55/zevEjSJm0Gsn3hgcM5z8v5/p7f93mggWKxuFspdd5aa9xTwBhzu1wun6QVt27d2hfH8V3nnLPWPpU1cqhisfgpgABEoVD4PJfLfWCM4f9CiM1n59q/eZ5HrVb7d2pq6rAPZK214wDW2scmk1KgFDgcUjiUAa0sEkdXym/zd84hpewPgmDcT6fT6SgKk9ZaOjGQEoqrcOXKKutlEH4SGfg8yK9h1SpHj2bZv78PY1zLDwmccxQKhax0zolm8q3mrGZl1fHthRWMrjJ+0DLQW+On2QK/LyxzYCJgdM8O4lh3jA/DUEqAOFZorTuY5epNxeL9Pxl7PmCgN8WhiRTjh7solVJcu7qCFHSMVUoB4ANYpdANa4VFks9LSo8UkhhjDS6Cif1J5mY8bt7OU6k8R+B7bY0WQmCtRSlVLxAbg9IapXVbY42FOwuOe8sp8g8r5Pp3EBtLKikJy2v0ZGo451BadywAzQJRRBxHKKWBTU/fF+zdqZm/HPD9hYihvpCeXo+5uQqV4j9MTu7FGL3l9gmEEI1jahxRrBRhGGGMRjQuuAOUgjffEETrMZemlznzZY6de5Jcn1vg40+GeHakjyiKcA1BbWrCYYzZPCJjDCpWKK3qjkIgGkWEgLeP93LsWDd37/icm9Kku2sM9fejVYwxbsO3qQGBwDXe+AAqjlE63uh8g2hdldKhtUd5TRLFmlI55MG9LKdOKd6fhFTKYC0bCVt1sMFAaYVSqq1AXWSCpUKG6R80xeIqqbRhdHeZRRUwe9mjWon48CMfT7Ktyc61MLDGopVGK92S3LFUGeHs2SI7exc5/k6GbHdAMsjyaAXOTxku/xJy8FCNlw70oZXtyEA2m6z0FlOOP/5KUFi6zZFXEuR2JAg8ibaWwQHLu+95dPVYHi6voI3eHq8Vxpg6A2fbGQgByjluXHXU1gdYt5p+L8YogZOg0XguTSZZZXg4SRTG22ZRc3j6ANqYDYk3EQSGwdw9rpUDvj6X4fW3LCODFo+YUqGL6ZlVDh+J2f1MlihSW6avQEjZZFDDa1zV1gLGwmuHSiT8kF9/6+K7b/roSjt6EoJstsKRiRqjo2niyGzbB0IIgiCoN7lWwyljDDi00RuCoTG5J8Y9Xn5RUa3l0dYRSI/ubolzgihUnfeHlAQEVKtV4wPV+/n83eHhiX2VSgVrXdu2apJKBJBoVA7Dx28+5yCbzbK2tlaanZ1d9IHKF6dPn+nJZF4de2GsP47jLYtHPC5Vh80nSSQCyuWyu3Tx4lfz8/M3mtEDu3aNTJ44ceLk0ODIoDFG8AQQQhBFUfjjzMzP09PTnwHXWxP1AWPAANT18YRYBxaAvwH9H+yQTe11fht3AAAAAElFTkSuQmCC"/></a>
<div class="clear"></div>
</div>
</div><!-- End Social Media -->
<div class="searchBox">
<div class="searchIco"><span></span></div>
<div class="sbox">
<form method="post" action="search.php"/>
<div class="search searchBox">
<input type="text" onfocus="if(this.value=='search...') this.value='';" onblur="if(this.value=='') this.value='search...';" value="search..." size="20" class="inputboxsearchBox" alt="Search" maxlength="20" id="mod_search_searchword" name="searchword"/><input type="submit" onclick="this.form.searchword.focus();" class="button searchBox" value="Search"/>
</div>
</form>
</div>
</div><!-- End Search box -->
<ul class="sf-menu">
<li class="first-child active" id="current"><a href="index.php"><span>Home</span></a></li>
<li class=""><a href="download.php"><span>Download</span></a></li>
<li class="parent"><a href="about.php"><span>About</span></a>
<ul>
<li class="features.php"><a href="features.php"><span>Features</span></a></li>
<li class="spark.php"><a href="spark.php"><span>Spark&trade;</span></a></li>
<li class="appstore.php"><a href="appstore.php"><span>App Store</span></a></li>
</ul>
</li>
<li class=""><a href="media.php"><span>Media</span></a></li>
<li class=""><a href="blog.php"><span>Blog</span></a></li>
<li class="last-child "><a href="contact.php"><span>Contact</span></a></li>
</ul><!-- End MAIN MENU -->
</div><!-- End Header Grid 10 -->
<div class="clear"></div>
</div><!-- End ABR CONTAINER PAD -->
</div><!-- End ABR CONTAINER -->
</div><!-- End HEADER -->
<div class="headerFix"></div>
<div id="breadcrumbs">
<div class="abr-container ">
<div class="clear"></div>
</div>
</div><!-- End BREADCRUMBS -->
<div id="main">
<div class="abr-container ">
<div class="grid_9">
<div id="mainbody">
<div class="article">
<div class="headline">
<h1 class="article-title">Custom Themes</h1>
<div class="clear"></div>
</div>
<div class="abr-block">
<ul class="feature-links">
<li id="tech-html5"><a href="html5.php"><span class="feature-link-content">HTML5<span>Compatible</span></span></a></li>
<li id="tech-css"><a href="css.php"><span class="feature-link-content">Modern<span>CSS3</span></span></a></li>
<li id="tech-apis"><a href="api.php"><span class="feature-link-content">Modern <span>APIs</span></span></a></li>
<li id="tech-tools"><a href="support.php"><span class="feature-link-content">Customer<span>Support</span></span></a></li>
<li id="tech-fun"><a href="fastestbrowser.php"><span class="feature-link-content">Fastest<span>Browser</span></span></a></li>
</ul>
</div> <div>
<br/>
<br/><br/>
<br/><br/>
<br/><br/>
<br/>
<img src="http://sparkbrowser.com/images/700xNxwood.png.pagespeed.ic.Qcnto11rvt.png" width="700"/>
<img src="http://sparkbrowser.com/images/700xNxwood2.png.pagespeed.ic.PBBaqXKOOG.png" width="700"/>
<p>Sparkbrowser has many custome themes that you can make an upload to the app sotre for others to use as well.</p>
<p>All of our themes are free and they can contain any images because they belong to you, we do not retain ownership over these themes so you are free to do what you want creatively within all regulations for your geographic area, and local laws.</p>
<p>Sparkbrowsder themes are easy to make and allow more customization than google chrome, chrome does not allow page transitions or a slide feature to slide between web pages.</p>
<p>Sparkbrowser is one of the newest web briowsers and is very heavily built in unsison with the jquery library for page effects and fading effects in both our homescreen and all other aspects of our browser</p>
</div>
</div>
</div>
</div>
<div class="grid_3">
<div id="sidebar-b">
<div class="abr-block">
<div class="module-title">
<h2 class="title">Download Our Browser Spring 2012</h2>
</div>
<img src="http://sparkbrowser.com/images/225xNxnomacpc.png.pagespeed.ic.pagqRS7BdN.png" width="225"/>
</div>
<div class="someLinks">
<div class="abr-block">
<div class="module-title">
<h2 class="title">Browser Features</h2>
</div>
<ul class="menu">
<li><a href="customthemes.php"><span>Custom Themes</span></a></li>
<li><a href="quadview.php"><span>Quad View</span></a></li>
<li><a href="homescreen.php"><span>Homescreen</span></a></li>
<li><a href="appstore.php"><span>App Store</span></a></li>
<li><a href="appdock.php"><span>App Dock</span></a></li>
<li><a href="smartsearch.php"><span>Smart Search</span></a></li>
<li><a href="bookmarksbar.php"><span>Bookmarks Bar</span></a></li>
<li><a href="dropdownbox.php"><span>Drop Down Dock</span></a></li>
</ul>
</div>
</div><!-- END someLinks -->
</div><!-- END SIDEBAR B -->
</div><!-- END GRID 3 -->
<div class="clear"></div>
</div>
</div><!-- END MAIN -->
<div id="bottom">
<div class="abr-container ">
<div class="grid_6">
<div class="latestPosts">
<div class="abr-block">
<h2 class="title">Our Latest News</h2>
<ul id="LP-pagination" class="LP-pagination">
<li onclick="latestPosts.pos(0)">1</li>
<li onclick="latestPosts.pos(1)">2</li>
<li onclick="latestPosts.pos(2)">3</li>
<li onclick="latestPosts.pos(3)">4</li>
</ul>
<div id="posts">
<ul>
<li> <h4><a href="#">Sparkbrowser Featured on Boston.com and CBS</a></h4>
<p>Sparkbrowser has been making headlines lately on Boston.com and CBS online. Articles detailing the features of the browser, its capabilities and benchmarks were included. Sparkbrowser has been featured in websites like Yahoo Finance, CBS, Boston.com, and The Wall Street Journal Online.</p> </li>
<li><h4><a href="#">App Store to have 10,000 apps by spring</a></h4>
<p>The Sparkbrowser App Store, to compete with Google, Apple, and Mozilla, our app store features streamlined apps, and themes that can be downloaded with the click of a mouse, credit card not required.</p>
</li>
<li><h4><a href="#">Sparkbrowser LE</a></h4>
<p>Sparkbrowser Limited Edition &trade; is only available to the first 10,000 members to download the browser. This edition features a multitude of free services, and a portion of the app store only available to Limited Edition clients.</p>
</li>
<li><h4><a href="#">Share Your Spark &trade;</a></h4>
<p>Want to share your favorite sites with your friends? send them your Spark &trade; and they can use your customized browser homescreen on any browser! Or publish your Spark &trade; to our public gallery for other users to download and use. our Spark Gallery &trade; is a great resource to test out the homescreen before buying the full browser. </p></li>
</ul>
</div>
</div>
</div>
</div>
<div class="grid_3">
<div class="abr-block">
<h2 class="title">About us </h2>
<p>Our privately held company is based in Cambridge MA, the technology capital of the world. Our brand has a history of excellence, and our product is the first of its kind. Our competitors are Apple, Google, Microsoft, and Mozilla. Welcome to Sparkbrowser™</p>
<ul class="list-type-6">
<li>Fast and Secure</li>
<li>Modern and Creative</li>
</ul>
<a href="about.php" class="readmore" title="Read More">read more</a>
</div>
</div>
<div class="grid_3">
<div class="testimonials">
<div class="abr-block">
<h2 class="title">Testimonials</h2>
<div id="testimonials">
<ul>
<li><p>Sparkbrowser is one of the most innovative products in technology, a complete game changer in the browser market. With billions of internet users, and only 5 major web browsers, Sparkbrowser is at the leading edge of brwser technology. A premium browser has been a much anticipated innovation.</p>
</li>
<li><p>Sparkbrowser is the most anticipated browser, with great reception in southeast asian markets, Sparkbrowser will also appeal to american markets with premium services and modern style. With Google, Apple, Microsoft and Mozilla as competition, gaining marketshare is a great challenge. But to us challenge is an open invitation. </p></li>
</ul>
</div>
</div>
</div>
</div>
<div class="clear"></div>
</div>
</div> <!-- END Bottom -->
<div id="footer">
<div class="abr-container ">
<div class="grid_4">
<div class="footerMenu">
<div class="abr-block">
<h2 class="title">Useful Links</h2>
<ul class="menu">
<li><a href="login.php"><span>Login</span></a></li>
<li><a href="privacypolicy.pdf"><span>Privacy Policy</span></a></li>
<li><a href="affiliateprogram.pdf"><span>Affiliate Program</span></a></li>
<li><a href="careers.php"><span>Careers</span></a></li>
<li><a href="investorinfo.pdf"><span>Investor Info</span></a></li>
<li><a href="suggestideas.php"><span>Suggest Ideas</span></a></li>
<li><a href="appcompliancepolicy.pdf"><span>App Compliance Policy</span></a></li>
<li><a href="companyoverview.pdf"><span>Company Overview</span></a></li></ul>
</div>
</div><!-- end footer menu -->
</div>
<div class="grid_2">
<div class="abr-block">
<h2 class="title">Contact us</h2>
<p><!-- phone number  --><br/><a href="mailto:info@sparkbrowser.com">info@sparkbrowser.com</a></p>
</div>
</div>
<div class="grid_2">
<div class="twitterModule">
<div class="abr-block">
<div class="twitter-wrap">
<div id="twitterIco"><img alt="Twitter" src="data:image/png;base64,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"/></div>
<div id="twitter">
</div>
</div>
</div>
</div>
</div>
<div class="grid_4">
<div class="copyright">
<div class="abr-block">
<p>&copy; 2011 Sparkbrowser</p>
</div>
</div>
</div>
<div class="clear"></div>
</div>
</div> <!-- END Bottom -->
</div><!-- End Page Container -->
<a href="#top" id="top-link">Scroll to top</a>
<script type="text/javascript">var latestPosts=new TINY.slider.slide('latestPosts',{id:'posts',auto:3,resume:true,vertical:false,navid:'LP-pagination',activeclass:'current',position:0});var testimonials=new TINY.slider.slide('testimonials',{id:'testimonials',auto:2,resume:true,vertical:false,navid:'',activeclass:'current',position:0});jQuery(function($){var pagination1=$("#pagination");var count=$("#pagination li").length*16/2;pagination1.css("margin-left","-"+count+"px");});</script>
</body>
</html> 