function setMsgCookie(){var e=new Date;e=new Date(e.getTime()+864e5),document.cookie="notice_seen=true; expires="+e}jQuery(document).foundation(),jQuery(document).ready(function(){jQuery(".accordion p:empty, .orbit p:empty").remove(),jQuery(".archive-grid .columns").last().addClass("end"),jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').each(function(){jQuery(this).innerWidth()/jQuery(this).innerHeight()>1.5?jQuery(this).wrap("<div class='widescreen flex-video'/>"):jQuery(this).wrap("<div class='flex-video'/>")})});var animateHTML=function(){var e,n,t=function(){e=document.getElementsByClassName("ready"),n=window.innerHeight,i()},i=function(){window.addEventListener("scroll",o),window.addEventListener("resize",t)},o=function(){for(var t=0;t<e.length;t++){e[t].getBoundingClientRect().top-n<=0&&(e[t].className=e[t].className.replace("ready","animated"))}};return{init:t}};animateHTML().init(),function(){"use strict";function e(e){var n=e.getBoundingClientRect();return n.top>=0&&n.left>=0&&n.bottom<=(window.innerHeight||document.documentElement.clientHeight)&&n.right<=(window.innerWidth||document.documentElement.clientWidth)}function n(){for(var n=0;n<t.length;n++)e(t[n])&&t[n].classList.add("in-view")}var t=document.querySelectorAll(".timeline li");window.addEventListener("load",n),window.addEventListener("resize",n),window.addEventListener("scroll",n)}(),jQuery(document).ready(function(){jQuery(".categories_filter").prepend('<div class="button hollow" id="filterButton">Show all</div>'),jQuery("#filterButton").click(function(){location.reload()})}),jQuery("#dismiss-msg").click(function(){setMsgCookie()}),document.cookie.indexOf("notice_seen=")>=0?jQuery("#info-callout").hide():jQuery("#info-callout").show(),jQuery(document).ready(function(){$(".gform_confirmation_wrapper")[0]&&$("#business-action-sheet").addClass("is-open")});