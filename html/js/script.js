"use strict";var clear_cookie_message,cookies_ok,deleteCookie,formatEmailLink,getCookie,getEmail,hamburger,navbox,setCookie,setupEmail,switchEmail,switch_theme,indexOf=[].indexOf;setCookie=function e(t,r,o){var n,i;return o?((n=new Date).setTime(n.getTime()+24*o*60*60*1e3),i="; expires="+n.toGMTString()):i="",document.cookie=t+"="+r+i+"; path=/"},getCookie=function e(t){var r,o,n,i;for(i=t+"=",o=document.cookie.split(";"),n=0;n<o.length;){for(r=o[n];" "===r.charAt(0);)r=r.substring(1,r.length);if(0===r.indexOf(i))return r.substring(i.length,r.length);n++}return null},deleteCookie=function e(t){return setCookie(t,"",-1)},switch_theme=function e(t){var r=arguments.length>0&&void 0!==t?t:"white";return document.querySelector("#theme").setAttribute("href","/css/".concat(r,".css")),document.querySelectorAll(".theme-button").forEach(function(e){return e.classList.remove("active")}),document.querySelector("#".concat(r,"-button")).classList.add("active"),deleteCookie("style"),cookies_ok()&&setCookie("style",r,365),!1},clear_cookie_message=function e(){return setCookie("cookiesOK","yes",365),document.querySelector("#cookies").style.display="none",document.querySelector("footer").style.paddingBottom="0px"},(cookies_ok=function e(){return"yes"===getCookie("cookiesOK")})()?(document.querySelector("#cookies").style.display="none",switch_theme(getCookie("style")||"white")):(document.querySelector("#cookies").style.display="block",document.querySelector("footer").style.paddingBottom="120px"),String.prototype.rotate=function(e){var t,r,o,n,i,a;for(i="",this.toLowerCase(),r=0,o=(n=this).length;r<o;r++)(t=n[r]).match(/[a-z]/)?(a=(t.charCodeAt(0)-97+e)%26+97,i+=String.fromCharCode(a)):i+=t;return i},String.prototype.reverse=function(){return this.split("").reverse().join("")},switchEmail=function e(t){return"mailto:"+t.replace("mailto:","").reverse()},getEmail=function e(t,r){return t.rotate(13)+"@"+r},formatEmailLink=function e(t){return'<a href="mailto:'+t+' " class="borked-email email">'+t+"</a>"},(setupEmail=function e(){var t,r,o,n,i,a,s,u,c,l,m,d,h,g,f;for(u=0,m=(a=document.querySelectorAll(".email-holder")).length;u<m;u++)s=(i=a[u]).dataset.beforeAt,r=i.dataset.afterAt,i.innerHTML=formatEmailLink(getEmail(s,r).reverse());for(f=[],c=0,d=(n=document.querySelectorAll(".borked-email")).length;c<d;c++){for((o=n[c]).addEventListener("mouseover",function(e){if("false"!==e.target.borked&&"true"!==e.target.held)return e.target.href=switchEmail(e.target.href),e.target.borked="false"}),o.addEventListener("mouseout",function(e){if("false"===e.target.borked&&"true"!==e.target.held)return setTimeout(function(){return e.target.href=switchEmail(e.target.href,500)}),e.target.borked="true"}),l=0,h=(g=["mousedown","touchstart"]).length;l<h;l++)t=g[l],o.addEventListener(t,function(e){return"false"!==e.target.borked&&(e.target.href=switchEmail(e.target.href),e.target.borked="false"),e.target.held="true"});f.push(function(){var e,r,n,i;for(i=[],r=0,e=(n=["mouseup","click","dragend","touchend"]).length;r<e;r++)t=n[r],i.push(o.addEventListener(t,function(e){return"false"===e.target.borked&&(setTimeout(function(){return e.target.href=switchEmail(e.target.href,500)}),e.target.borked="true"),e.target.held="false"}));return i}())}return f})(),hamburger=document.getElementById("menu-hamburger"),navbox=document.getElementsByClassName("nav-holder")[0],hamburger.addEventListener("click",function(e){return indexOf.call(hamburger.classList,"showing")>=0?(hamburger.classList.remove("showing"),navbox.classList.remove("showing")):(hamburger.classList.add("showing"),navbox.classList.add("showing"))});