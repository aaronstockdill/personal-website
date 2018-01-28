<?php
include_once 'Parsedown.php';

$Parsedown = new Parsedown();
$rootdir = realpath(dirname(__FILE__));
$filedir = $rootdir."/../../dynamic/";

if(!isset($_GET['id']) || !isset($_GET['type'])) {
    header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
    include($rootdir."/../404.php");
}

$id = $_GET['id'];
$type = $_GET['type'];

if ($type == 'writing') $type = 'md';

$filename = $filedir.$id.".".$type;
$subtitle = explode(".", $id)[0] . " -";
if ($type == 'md' || $type == 'writing'|| $type == 'talk') {
    $backtarget = ($type == 'md') ? "Writing" : "Talks";
?><?php
if(isset($_COOKIE["style"])) {
    $theme = $_COOKIE["style"];
} else {
    $theme = "white";
    setcookie("style", "white", time() + 365);
}
if(isset($_COOKIE["language"])) {
    $lang = $_COOKIE["language"];
    $notlang = ($lang == "EN") ? "FR" : "EN";
} else {
    $lang = "EN";
    $notlang = "FR";
    setcookie("language", "EN", time() + 365);
}
if(!isset($_COOKIE["cookiesOK"])) {
    setcookie("cookiesOK", "no", time() + 365);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $subtitle ?> Aaron Stockdill</title>
        <style>
            @font-face{font-family:Amiri;font-style:normal;font-weight:400;src:local('Amiri Regular'),local('Amiri-Regular'),url(/fonts/Amiri-Regular.woff2) format('woff2');unicode-range:U+0000-00FF,U+0100-024F,U+1E00-1EFF,U+20A0-20AB,U+20AD-20CF,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:Amiri;font-style:italic;font-weight:400;src:local('Amiri Italic'),local('Amiri-Italic'),url(/fonts/Amiri-Italic.woff2) format('woff2');unicode-range:U+0000-00FF,U+0100-024F,U+1E00-1EFF,U+20A0-20AB,U+20AD-20CF,U+2C60-2C7F,U+A720-A7FF}@font-face{font-family:Roboto;font-style:normal;font-weight:300;src:local('Roboto Light'),local('Roboto-Light'),url(/fonts/Roboto_Light.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215}@font-face{font-family:Roboto;font-style:normal;font-weight:500;src:local('Roboto Medium'),local('Roboto-Medium'),url(/fonts/Roboto_Medium.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215}@font-face{font-family:Roboto;font-style:normal;font-weight:700;src:local('Roboto Bold'),local('Roboto-Bold'),url(/fonts/Roboto_Bold.woff2) format('woff2');unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02C6,U+02DA,U+02DC,U+2000-206F,U+2074,U+20AC,U+2212,U+2215}
        </style>
        <?php
            echo '<link rel="stylesheet" href="/css/'.$theme.'.css" media="screen" id="theme">';
            echo '<style>*:not(.show)[lang="'.$notlang.'"] { display: none !important; }</style>';
        ?>
        <style>
            *{-webkit-box-sizing:border-box;box-sizing:border-box}.hide{display:none!important}:root,body,html{font-family:Palatino,"Palatino Linotype","Palatino LT STD","Book Antiqua",Georgia,serif;min-height:100%;height:100%;font-weight:400;font-size:20px;margin:0;padding:0;-webkit-transition:background .2s ease,color .2s ease;transition:background .2s ease,color .2s ease;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column}@media (min-width:1920px){:root,body,html{font-size:25px}}h1,h2,h3,h4,h5,h6{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:500}.borked-email{direction:rtl;unicode-bidi:bidi-override;text-align:left}nav{height:1.3rem;overflow:hidden;font-size:.85rem;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:300;line-height:1.5rem;text-align:center}nav a{text-decoration:none;padding:0 .5rem;-webkit-transition:color .2s ease;transition:color .2s ease}.container{max-width:35rem;width:100%;margin:0 auto;padding:2rem;line-height:1.4;-webkit-box-flex:1;-ms-flex:1 0 auto;flex:1 0 auto}.container .anchor{width:0;height:0;display:block;position:relative;top:-1.25rem}.container .anchor:first-of-type{top:3rem}.container h1{font-size:2rem;line-height:.85em;margin-top:3rem;margin-bottom:1rem;font-weight:700;-webkit-hyphens:manual;-ms-hyphens:manual;hyphens:manual}.container hr{border:none;height:1px;margin:1rem auto 2rem auto;width:20%}.container h2{margin-top:1.5rem;margin-bottom:.75rem;line-height:1em;font-size:1.4rem}.container h2.award-year{margin-bottom:-1.1em}.container h3,.container h4{margin-top:1rem;margin-bottom:.5rem}.container p{margin-top:.5rem;margin-bottom:.5rem}.container li{padding-top:.25rem;padding-bottom:.25rem;list-style-type:circle}.container img{display:block;margin:auto;max-width:100%}.container blockquote{border-left:5px solid silver;padding:.5rem 1rem;background:#eee}.container .pad-after{padding-right:1rem}.container p.tight{margin-bottom:.25rem}.container .precontent{display:block;text-align:center;padding:.1rem 0;font-size:.8rem}.container .precontent.first{margin-top:2rem}.container .tutoring-list{margin:0;font-size:.9rem;line-height:1.4rem}.container .award{padding-left:5rem}.container .award h3{margin-top:0;margin-bottom:.3rem;font-weight:400}.container .award p{margin-top:0;margin-bottom:1.5rem}.container .contact-table{margin-bottom:2rem}.container .contact-table .label,.container .contact-table .value{display:inline-block;padding:.2rem;max-width:50%;vertical-align:top}.container .contact-table .label{width:8rem;text-align:right;padding-right:1rem;font-weight:400}.container .back-to-works{display:block;padding-top:1rem;text-decoration:none;text-align:center;font-size:.85rem;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:300}.container .submenu{height:1.6rem;list-style:none;margin:.1rem 0;padding:0;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:300;text-align:center}.container .submenu li{display:inline-block}.container .submenu a{text-decoration:none;padding:0 .5rem;-webkit-transition:color .2s ease;transition:color .2s ease;font-size:.75rem}.container .dynamic-link{margin:.3rem auto 1rem auto;line-height:1.2em}.container .dynamic-link:first-of-type{margin-top:1rem}.container .dynamic-link h2{margin-top:.5rem}.container .dynamic-link a{text-decoration:none;display:inline-block;margin-right:1rem}.container .dynamic-link a:hover{text-decoration:underline}.container .dynamic-link .bibtex,.container .dynamic-link .date{font-size:.7rem;font-style:italic;line-height:.7rem}.container .dynamic-link .journal,.container .dynamic-link .orig{font-size:.7rem;line-height:.7rem}.welcome{padding:2rem;-webkit-box-flex:1;-ms-flex:1 0 auto;flex:1 0 auto;max-width:35rem;margin:0 auto;text-align:center}.welcome h1{font-size:4rem;margin:0;margin-top:20vh;line-height:3.6rem;font-weight:700}.welcome p{margin:0;padding-bottom:0}.welcome .trailing{margin-top:3rem;line-height:1.4rem}.welcome .trailing div{margin-top:1rem}.welcome .email{padding:0 .25rem;width:12rem;text-decoration:none;-webkit-transition:color .2s ease;transition:color .2s ease}img+em{text-align:right;width:100%;display:inline-block}footer{max-width:35rem;margin:0 auto;text-align:center;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:300;font-size:.8rem;opacity:.8;position:relative;bottom:0;left:0;right:0;padding:5px 2rem;-webkit-transition:background .2s ease,color .2s ease;transition:background .2s ease,color .2s ease;height:1.8rem}footer .details{float:left}footer .separator{display:inline-block;width:1rem}footer .selector{display:inline-block;height:1.2rem;overflow-y:hidden;width:2.5rem;position:relative;text-align:center;-webkit-transition:height .2s ease;transition:height .2s ease}footer .selector a{display:block;position:absolute;top:1.2rem;text-align:center;text-decoration:none;cursor:pointer;-webkit-transition:top .2s ease;transition:top .2s ease}footer .selector a.active{top:0;opacity:.5}footer .selector:hover a{top:0}footer .selector:hover a.active{top:-1.2rem}.cookies{max-width:35rem;margin:0 auto;text-align:center;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:300;font-size:.7rem;opacity:.95;position:fixed;bottom:0;left:0;right:0;padding:5px 0;-webkit-transition:background .2s ease,color .2s ease;transition:background .2s ease,color .2s ease;background:inherit}.cookies .cookie-buttons{margin:.5rem 0 .2rem 0}.cookies .cookie-buttons button{margin-right:1rem;background:inherit;border:1px solid;color:inherit;font:inherit;line-height:normal;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;border-radius:3px;padding:.2rem 1rem;cursor:pointer}.cookies .cookie-buttons a{color:inherit}.error{max-width:800px;width:100%}.error h1{margin-bottom:0}.error h2{margin-top:.5rem}.error a{display:block;margin-top:2rem}.help{overflow-y:auto;display:block;z-index:1000;position:fixed;top:0;left:0;right:0;bottom:0}.help .help-box{padding:3rem;padding-bottom:4rem;margin:5%;position:relative;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:300}.help .help-box h1{text-align:center}.help .help-box dl{display:inline-block;width:33%;vertical-align:top;text-align:center}.help .help-box dl dt{font-weight:400;padding-top:.8rem;padding-bottom:.2rem}.help .help-box dl dd{margin-left:0}.help .help-box .close-help{cursor:pointer;position:absolute;bottom:3rem;right:3rem;border-bottom:1px solid transparent}.help .help-box .close-help:hover{border-bottom-width:1px;border-bottom-style:solid}
        </style>
        <style media="screen and (max-width: 600px)">
            body,html{font-size:18px}.container .welcome{padding:.5rem 0 2rem 0}.container .welcome h1{margin-top:15vh;font-size:3.25rem;line-height:3rem}.container .welcome .email,.container .welcome .phone,.container .welcome nav a,.container .welcome p{margin:0 auto}.container .welcome .email span,.container .welcome .phone span,.container .welcome nav a span,.container .welcome p span{display:inline-block}.container .welcome .nav-holder{margin:0 -1rem}.submenu,nav{overflow-x:auto;overflow-y:hidden;white-space:nowrap;position:relative}.submenu a:first-of-type,.submenu li:first-of-type,nav a:first-of-type,nav li:first-of-type{margin-left:.7rem}.submenu a:last-of-type,.submenu li:last-of-type,nav a:last-of-type,nav li:last-of-type{margin-right:.7rem}.submenu li a,nav li a{margin:0!important}.nav-holder{position:relative;margin:0 -1rem}.nav-holder:after,.nav-holder:before{content:"";display:block;width:1.3rem;height:3rem;position:absolute;top:0;z-index:5}.nav-holder:before{left:0}.nav-holder:after{right:0}.container{padding:.5rem 1rem 2rem 1rem}.container h1{font-size:2rem}footer .selector.help-button{display:none}footer .separator{width:0}@media screen and (max-width:350px){.welcome h1{font-size:3rem;margin-top:15vh}.container h2.award-year{width:1em;-webkit-transform:rotate(-90deg) translateX(-1.4em);transform:rotate(-90deg) translateX(-1.4em)}.container .award{padding-left:2rem}}
        </style>
        <style media="print">
            nav,ul.submenu{display:none}footer{display:none}a{text-decoration:none;color:#000}a[href^="http://"]:after,a[href^="https://"]:after{content:" [" attr(href) "]";color:#333}.container hr{margin:1rem auto}
        </style>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content=""/>

        <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
    </head>
    <body>
    <div class="container">
    <div class="nav-holder">
    <nav>
        <a href="/" class="">
            <span lang="EN">Home</span>
            <span lang="FR">Accueil</span>
        </a>

        <a href="/cv/" class="">
            <span lang="EN">CV</span>
            <span lang="FR">CV</span>
        </a>

        <a href="/research/" class="">
            <span lang="EN">Research</span>
            <span lang="FR">Recherche</span>
        </a>

        <a href="/teaching/" class="">
            <span lang="EN">Teaching</span>
            <span lang="FR">Enseignement</span>
        </a>

        <a href="/contact/" class="">
            <span lang="EN">Contact</span>
            <span lang="FR">Contact</span>
        </a>

        <a href="/blog/" class="">
            <span lang="EN">Blog</span>
            <span lang="FR">Blog</span>
        </a>
    </nav>

    </div>
<div class='writing'>
<?php
$mdfile = fopen($filename, "r") or die("Unable to open file!");
$markdown = fread($mdfile, filesize($filename));
fclose($mdfile);
echo $Parsedown->text($markdown);
?>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js?config=TeX-AMS_SVG'></script>
        </div>
        <footer>
            <span class='selector help-button'>
                <a onclick="show_help()" class='active'>
                    <span>&nbsp;&nbsp;&nbsp;?</span>
                </a>
                <a onclick="show_help()">
                    <span>Help</span>
                </a>
            </span>
            <span class='separator'></span>
            <span class='selector'>
                <a id="white-button" class='theme-button<?php if ($theme == "white") { echo " active";} ?>' onclick='switch_theme("white")'>
                    <span lang='EN'>light</span>
                    <span lang='FR'>blanc</span>
                </a>
                <a id="black-button" class='theme-button<?php if ($theme == "black") { echo " active";} ?>' onclick='switch_theme("black")'>
                    <span lang='EN'>dark</span>
                    <span lang='FR'>noir</span>
                </a>
            </span>
            <span class='separator'></span>
            <span class='selector'>
                <a id="EN-button" class='lang-button<?php if ($lang == "EN") { echo " active";} ?>' onclick='switch_language("EN")'>
                    EN
                </a>
                <a id="FR-button" class='lang-button<?php if ($lang == "FR") { echo " active";} ?>' onclick='switch_language("FR")'>
                    FR
                </a>
            </span>
        </footer>
        <div id="cookies" class="cookies">
            FYI, I use cookies to improve this site.
            <div class="cookie-buttons">
                <button onclick="clear_cookie_message()">I'm OK with that.</button>
                <a href="http://ec.europa.eu/ipg/basics/legal/cookies/index_en.htm" target="_blank">Wait&mdash;what?</button>
            </div>
        </div>
        <!-- <script src="/js/script.js" charset="utf-8" defer></script> -->
        <script>"use strict";!function(t,e,n){function r(t,e,n){if(t.addEventListener)return void t.addEventListener(e,n,!1);t.attachEvent("on"+e,n)}function o(t){if("keypress"==t.type){var e=String.fromCharCode(t.which);return t.shiftKey||(e=e.toLowerCase()),e}return g[t.which]?g[t.which]:y[t.which]?y[t.which]:String.fromCharCode(t.which).toLowerCase()}function i(t,e){return t.sort().join(",")===e.sort().join(",")}function c(t){var e=[];return t.shiftKey&&e.push("shift"),t.altKey&&e.push("alt"),t.ctrlKey&&e.push("ctrl"),t.metaKey&&e.push("meta"),e}function l(t){if(t.preventDefault)return void t.preventDefault();t.returnValue=!1}function a(t){if(t.stopPropagation)return void t.stopPropagation();t.cancelBubble=!0}function d(t){return"shift"==t||"ctrl"==t||"alt"==t||"meta"==t}function u(){if(!k){k={};for(var t in g)t>95&&t<112||g.hasOwnProperty(t)&&(k[g[t]]=t)}return k}function s(t,e,n){return n||(n=u()[t]?"keydown":"keypress"),"keypress"==n&&e.length&&(n="keydown"),n}function h(t){return"+"===t?["+"]:(t=t.replace(/\+{2}/g,"+plus"),t.split("+"))}function f(t,e){var n,r,o,i=[];for(n=h(t),o=0;o<n.length;++o)r=n[o],b[r]&&(r=b[r]),e&&"keypress"!=e&&v[r]&&(r=v[r],i.push("shift")),d(r)&&i.push(r);return e=s(r,i,e),{key:r,modifiers:i,action:e}}function p(t,n){return null!==t&&t!==e&&(t===n||p(t.parentNode,n))}function m(t){function n(t){t=t||{};var e=!1,n;for(n in b)t[n]?e=!0:b[n]=0;e||(E=!1)}function u(t,e,n,r,o,c){var l,a,u=[],s=n.type;if(!v._callbacks[t])return[];for("keyup"==s&&d(t)&&(e=[t]),l=0;l<v._callbacks[t].length;++l)if(a=v._callbacks[t][l],(r||!a.seq||b[a.seq]==a.level)&&s==a.action&&("keypress"==s&&!n.metaKey&&!n.ctrlKey||i(e,a.modifiers))){var h=!r&&a.combo==o,f=r&&a.seq==r&&a.level==c;(h||f)&&v._callbacks[t].splice(l,1),u.push(a)}return u}function s(t,e,n,r){v.stopCallback(e,e.target||e.srcElement,n,r)||!1===t(e,n)&&(l(e),a(e))}function h(t){"number"!=typeof t.which&&(t.which=t.keyCode);var e=o(t);if(e)return"keyup"==t.type&&w===e?void(w=!1):void v.handleKey(e,c(t),t)}function p(){clearTimeout(k),k=setTimeout(n,1e3)}function g(t,e,r,i){function c(e){return function(){E=e,++b[t],p()}}function l(e){s(r,e,t),"keyup"!==i&&(w=o(e)),setTimeout(n,10)}b[t]=0;for(var a=0;a<e.length;++a){var d=a+1===e.length,u=d?l:c(i||f(e[a+1]).action);y(e[a],u,i,t,a)}}function y(t,e,n,r,o){v._directMap[t+":"+n]=e,t=t.replace(/\s+/g," ");var i=t.split(" "),c;if(i.length>1)return void g(t,i,e,n);c=f(t,n),v._callbacks[c.key]=v._callbacks[c.key]||[],u(c.key,c.modifiers,{type:c.action},r,t,o),v._callbacks[c.key][r?"unshift":"push"]({callback:e,modifiers:c.modifiers,action:c.action,seq:r,level:o,combo:t})}var v=this;if(t=t||e,!(v instanceof m))return new m(t);v.target=t,v._callbacks={},v._directMap={};var b={},k,w=!1,_=!1,E=!1;v._handleKey=function(t,e,r){var o=u(t,e,r),i,c={},l=0,a=!1;for(i=0;i<o.length;++i)o[i].seq&&(l=Math.max(l,o[i].level));for(i=0;i<o.length;++i)if(o[i].seq){if(o[i].level!=l)continue;a=!0,c[o[i].seq]=1,s(o[i].callback,r,o[i].combo,o[i].seq)}else a||s(o[i].callback,r,o[i].combo);var h="keypress"==r.type&&_;r.type!=E||d(t)||h||n(c),_=a&&"keydown"==r.type},v._bindMultiple=function(t,e,n){for(var r=0;r<t.length;++r)y(t[r],e,n)},r(t,"keypress",h),r(t,"keydown",h),r(t,"keyup",h)}if(t){for(var g={8:"backspace",9:"tab",13:"enter",16:"shift",17:"ctrl",18:"alt",20:"capslock",27:"esc",32:"space",33:"pageup",34:"pagedown",35:"end",36:"home",37:"left",38:"up",39:"right",40:"down",45:"ins",46:"del",91:"meta",93:"meta",224:"meta"},y={106:"*",107:"+",109:"-",110:".",111:"/",186:";",187:"=",188:",",189:"-",190:".",191:"/",192:"`",219:"[",220:"\\",221:"]",222:"'"},v={"~":"`","!":"1","@":"2","#":"3",$:"4","%":"5","^":"6","&":"7","*":"8","(":"9",")":"0",_:"-","+":"=",":":";",'"':"'","<":",",">":".","?":"/","|":"\\"},b={option:"alt",command:"meta",return:"enter",escape:"esc",plus:"+",mod:/Mac|iPod|iPhone|iPad/.test(navigator.platform)?"meta":"ctrl"},k,w=1;w<20;++w)g[111+w]="f"+w;for(w=0;w<=9;++w)g[w+96]=w.toString();m.prototype.bind=function(t,e,n){var r=this;return t=t instanceof Array?t:[t],r._bindMultiple.call(r,t,e,n),r},m.prototype.unbind=function(t,e){var n=this;return n.bind.call(n,t,function(){},e)},m.prototype.trigger=function(t,e){var n=this;return n._directMap[t+":"+e]&&n._directMap[t+":"+e]({},t),n},m.prototype.reset=function(){var t=this;return t._callbacks={},t._directMap={},t},m.prototype.stopCallback=function(t,e){var n=this;return!((" "+e.className+" ").indexOf(" mousetrap ")>-1)&&(!p(e,n.target)&&("INPUT"==e.tagName||"SELECT"==e.tagName||"TEXTAREA"==e.tagName||e.isContentEditable))},m.prototype.handleKey=function(){var t=this;return t._handleKey.apply(t,arguments)},m.addKeycodes=function(t){for(var e in t)t.hasOwnProperty(e)&&(g[e]=t[e]);k=null},m.init=function(){var t=m(e);for(var n in t)"_"!==n.charAt(0)&&(m[n]=function(e){return function(){return t[e].apply(t,arguments)}}(n))},m.init(),t.Mousetrap=m,"undefined"!=typeof module&&module.exports&&(module.exports=m),"function"==typeof define&&define.amd&&define(function(){return m})}}("undefined"!=typeof window?window:null,"undefined"!=typeof window?document:null);var bind_nav,clear_cookie_message,deleteCookie,formatEmailLink,getCookie,getEmail,setCookie,setupEmail,show_help,switchEmail,switch_language,switch_theme;setCookie=function t(e,n,r){var o,i;return r?(o=new Date,o.setTime(o.getTime()+24*r*60*60*1e3),i="; expires="+o.toGMTString()):i="",document.cookie=e+"="+n+i+"; path=/"},getCookie=function t(e){var n,r,o,i;for(i=e+"=",r=document.cookie.split(";"),o=0;o<r.length;){for(n=r[o];" "===n.charAt(0);)n=n.substring(1,n.length);if(0===n.indexOf(i))return n.substring(i.length,n.length);o++}return null},deleteCookie=function t(e){return setCookie(e,"",-1)},switch_theme=function t(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"white";return document.querySelector("#theme").setAttribute("href","/css/"+e+".css"),document.querySelectorAll(".theme-button").forEach(function(t){return t.classList.remove("active")}),document.querySelector("#"+e+"-button").classList.add("active"),deleteCookie("style"),setCookie("style",e,365),!1},switch_language=function t(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"EN",n,r,o,i,c;for(o=["EN","FR"],n=0,i=o.length;n<i;n++)r=o[n],c=document.querySelectorAll(":lang('"+r+"')"),r!==e?(c.forEach(function(t){return t.classList.add("hide")}),c.forEach(function(t){return t.classList.remove("show")})):(c.forEach(function(t){return t.classList.remove("hide")}),c.forEach(function(t){return t.classList.add("show")}));return document.querySelectorAll(".lang-button").forEach(function(t){return t.classList.remove("active")}),document.querySelector("#"+e+"-button").classList.add("active"),deleteCookie("language"),setCookie("language",e,365),!1},clear_cookie_message=function t(){return setCookie("cookiesOK","yes",365),document.querySelector("#cookies").style.display="none",document.querySelector("footer").style.paddingBottom="0px"},"yes"!==getCookie("cookiesOK")?(document.querySelector("#cookies").style.display="block",document.querySelector("footer").style.paddingBottom="120px"):document.querySelector("#cookies").style.display="none",String.prototype.rotate=function(t){var e,n,r,o,i,c;for(i="",this.toLowerCase(),o=this,n=0,r=o.length;n<r;n++)e=o[n],e.match(/[a-z]/)?(c=(e.charCodeAt(0)-97+t)%26+97,i+=String.fromCharCode(c)):i+=e;return i},String.prototype.reverse=function(){return this.split("").reverse().join("")},switchEmail=function t(e){return"mailto:"+e.replace("mailto:","").reverse()},getEmail=function t(e,n){return e.rotate(13)+"@"+n},formatEmailLink=function t(e){return'<a href="mailto:'+e+' " class="borked-email email">'+e+"</a>"},setupEmail=function t(){var e,n,r,o,i,c,l,a,d,u,s;for(i=document.querySelectorAll(".email-holder"),l=0,d=i.length;l<d;l++)o=i[l],c=o.dataset.beforeAt,e=o.dataset.afterAt,o.innerHTML=formatEmailLink(getEmail(c,e).reverse());for(r=document.querySelectorAll(".borked-email"),s=[],a=0,u=r.length;a<u;a++)n=r[a],n.addEventListener("mouseover",function(t){return t.target.href=switchEmail(t.target.href)}),s.push(n.addEventListener("mouseout",function(t){return t.target.href=switchEmail(t.target.href)}));return s},setupEmail(),show_help=function t(){var e;return document.querySelector(".help")?(e=document.querySelector(".help"),e.parentNode.removeChild(e)):document.body.innerHTML+="<div class='help'><div class='help-box'>\n    <h1>Keyboard Shortcuts</h1>\n    <dl>\n        <dt>Go to the Home page</dt>\n            <dd>ctrl-x ctrl-x <br /> ctrl-x ctrl-h</dd>\n        <dt>Go to the CV page</dt>\n            <dd>ctrl-x ctrl-a</dd>\n            <dd>ctrl-x ctrl-v</dd>\n        <dt>Go to the Research page</dt>\n            <dd>ctrl-x ctrl-r</dd>\n        <dt>Go to the Contact page</dt>\n            <dd>ctrl-x ctrl-c</dd>\n        <dt>Go to my Blog</dt>\n            <dd>ctrl-x ctrl-b</dd>\n        <dt>Send me an email</dt>\n            <dd>ctrl-x ctrl-e</dd>\n    </dl><dl>\n        <dt>Toggle the theme</dt>\n            <dd>ctrl-t ctrl-t</dd>\n        <dt>Switch to dark/black theme</dt>\n            <dd>ctrl-t ctrl-d <br /> ctrl-t ctrl-b</dd>\n        <dt>Switch to light/white theme</dt>\n            <dd>ctrl-t ctrl-l <br /> ctrl-t ctrl-w</dd>\n        <br />\n        <dt>Show/hide this help</dt>\n            <dd>?</dd>\n    </dl><dl>\n        <dt>Toggle the language</dt>\n            <dd>ctrl-l ctrl-l</dd>\n        <dt>Switch to English</dt>\n            <dd>ctrl-l ctrl-e</dd>\n        <dt>Switch to French</dt>\n            <dd>ctrl-l ctrl-f</dd>\n        <br />\n    </dl>\n    <a class='close-help' onClick='show_help();'>\n        Close\n    </a>\n</div></div>"},bind_nav=function t(e,n){return Mousetrap.bind(e,function(){return window.location.href=n})},bind_nav(["ctrl+x ctrl+h","ctrl+x ctrl+x"],"/"),bind_nav(["ctrl+x ctrl+a","ctrl+x ctrl+v"],"/cv/"),bind_nav("ctrl+x ctrl+w","/work/"),bind_nav("ctrl+x ctrl+c","/contact/"),bind_nav("ctrl+x ctrl+b","/blog/"),bind_nav("ctrl+x ctrl+e","mailto:"+getEmail("nneba.fgbpxqvyy",["cl","cam","ac","uk"])),Mousetrap.bind(["ctrl+t ctrl+d","ctrl+t ctrl+b"],function(){return switch_theme("black")}),Mousetrap.bind(["ctrl+t ctrl+l","ctrl+t ctrl+w"],function(){return switch_theme("white")}),Mousetrap.bind("ctrl+t ctrl+t",function(){return switch_theme("black"===getCookie("style")?"white":"black")}),Mousetrap.bind("ctrl+l ctrl+f",function(){return switch_language("FR")}),Mousetrap.bind("ctrl+l ctrl+e",function(){return switch_language("EN")}),Mousetrap.bind("ctrl+l ctrl+l",function(){return switch_language("EN"===getCookie("language")?"FR":"EN")}),Mousetrap.bind("?",show_help);</script>
        <?php
            if (strpos($_SERVER['SERVER_NAME'],
                       'aaron.stockdill.nz') !== false) {
        ?>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-79422930-1', 'auto');
            ga('send', 'pageview');
        </script>
        <?php
        }
        ?>
    </body>
</html>

<?php
} else if ($type == 'pdf') {
    header("Content-type:application/pdf");
    readfile($filename);
} else if ($type == 'jpg' || $type == 'png') {
    header("Content-type:image/".$type);
    readfile($filename);
} else if ($type == 'bib') {
    header('Content-disposition: attachment; filename='.basename($filename));
    header('Content-type: application/x-bibtex');
    // Remove comments on the way through!
    $content = file_get_contents($filename);
    $content = preg_replace("/%.*$/m", "", $content);
    echo $content;
} else {
    $mime = mime_content_type($filename);
    header('Content-disposition: attachment; filename='.basename($filename));
    header('Content-type: '.$mime);
    readfile($filename);
}
?>
