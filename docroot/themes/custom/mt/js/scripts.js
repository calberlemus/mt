!function(t,e,a){function i(){var e=t("header"),a=t(".totop"),i=window.pageYOffset||document.documentElement.scrollTop,o=e.outerHeight(!0);i>o?e.hasClass("header-scrolled")||(e.addClass("header-scrolled"),a.css({bottom:"25px"})):e.hasClass("header-scrolled")&&(e.removeClass("header-scrolled"),a.css({bottom:"-100px"}))}function o(){if(window.addEventListener("scroll",i),window.location.hash.replace(/#+/,"").length){var a=t(window.location.hash);a.length&&(e.mt.scrollTo(a),window.location.hash="")}i()}e.mt={},e.views.ajaxView.prototype.attachPagerAjax=function(){this.$view.find("ul.js-pager__items > li > a, th.views-field a, .attachment .views-summary a, .view-filters .ajax-link").each(t.proxy(this.attachPagerLinkAjax,this)),this.$view.find(".view-filters .bef-links a").each(t.proxy(this.attachFilterLinkAjax,this))},e.views.ajaxView.prototype.attachFilterLinkAjax=function(a,i){var o=t(i),n={},s=o.attr("href");t.extend(n,this.settings,e.Views.parseQueryString(s),e.Views.parseViewArgs(s,this.settings.view_base_path),{page:0});var r=t.extend({},this.element_settings,{submit:n,base:!1,element:i});this.pagerAjax=e.ajax(r)},e.mt.scrollTo=function(e){var a=e.offset().top-t("#navbar").outerHeight();t("html, body").stop().animate({scrollTop:a},1500,"easeInOutExpo")},e.behaviors.mt={attach:function(a,i){function o(e){var a=parseInt(t(e+" .owl-item").eq(0).height());t(e+" .owl-item").each(function(){var e=parseInt(t(this).height());a=a<=e?a:e}),t(e+" .owl-wrapper-outer").css("height",a+"px")}t(".totop").once("totop").click(function(e){e.preventDefault(),t("html, body").animate({scrollTop:"0px",avoidTransforms:!0},{duration:1500,queue:!1})}),t('a[href*="#"]:not([data-toggle],[data-target])').once("mt_scroll").click(function(a){var i=t(this.hash);i.length&&(a.preventDefault(),e.mt.scrollTo(i))}),t(".navbar-toggle").once("expanded").click(function(){t(this).toggleClass("expanded")}),t(".owl-builder-slider-multimedia").owlCarousel({afterUpdate:function(){setTimeout(function(){o(".owl-builder-slider-multimedia")},50)},afterInit:function(){setTimeout(function(){o(".owl-builder-slider-multimedia")},50)},items:1,navigation:!0,navigationText:["prev","next"],rewindNav:!0,scrollPerPage:!1,singleItem:!0,autoPlay:!0});var n={};t("[data-match-minheight], [data-mmh]").once("match-height").each(function(){var e=t(this),a=e.attr("data-mmh")||e.attr("data-match-minheight");byRow=e.attr("data-mmh-byrow")||!0,a in n?n[a].items=n[a].items.add(e):n[a]={items:e,byRow:byRow}}),t.each(n,function(){this.items.matchHeight({property:"min-height",byRow:this.items.byrow})})}},t(document).ready(function(){o()})}(window.jQuery,window.Drupal,window.Drupal.bootstrap);