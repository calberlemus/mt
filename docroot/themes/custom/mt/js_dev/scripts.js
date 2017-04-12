(function($, Drupal, Bootstrap) {
	Drupal.mt = {};

	Drupal.views.ajaxView.prototype.attachPagerAjax = function() {
		this.$view.find('ul.js-pager__items > li > a, th.views-field a, .attachment .views-summary a, .view-filters .ajax-link')
				.each($.proxy(this.attachPagerLinkAjax, this));
		this.$view.find('.view-filters .bef-links a')
		.each($.proxy(this.attachFilterLinkAjax, this));
	};

	Drupal.views.ajaxView.prototype.attachFilterLinkAjax = function(id, link) {
		var $link = $(link);
		var viewData = {};
		var href = $link.attr('href');
		// Construct an object using the settings defaults and then overriding
		// with data specific to the link.
		$.extend(
				viewData, 
				this.settings, 
				Drupal.Views.parseQueryString(href),
				// Extract argument data from the URL.
				Drupal.Views.parseViewArgs(href, this.settings.view_base_path),
				{
					page: 0
				}
		);

		var self_settings = $.extend({}, this.element_settings, {
			submit : viewData,
			base : false,
			element : link
		});
		this.pagerAjax = Drupal.ajax(self_settings);
	};
	
	/**
	 * Scroll a given fieldset into view as much as possible.
	 */
	Drupal.mt.scrollTo = function($target) {
		var offset = $target.offset().top - $('#navbar').outerHeight();

		$('html, body').stop().animate({
			scrollTop : offset
		}, 1500, 'easeInOutExpo');
	};
	
	function scroll(){
		var $header = $('header');
		var $totop = $('.totop');
		var distanceY = window.pageYOffset
				|| document.documentElement.scrollTop, header_height = $header
				.outerHeight(true);

		if (distanceY > header_height) {
			if (!$header.hasClass('header-scrolled')) {
				$header.addClass('header-scrolled');
				$totop.css({
					bottom : "25px"
				});
			}
		} else {
			if ($header.hasClass('header-scrolled')) {
				$header.removeClass('header-scrolled');
				$totop.css({
					bottom : "-100px"
				});
			}
		}
	}
	
	
	function init() {
		window.addEventListener('scroll',scroll);
		
		
		if (window.location.hash.replace(/#+/, '').length) {
			var $target = $(window.location.hash);
			if ($target.length) {
				Drupal.mt.scrollTo($target);
				window.location.hash = '';
			}
		}
	
		scroll();
	}
	
	
	/**
	 * Behaviors.
	 */
	Drupal.behaviors.mt = {
		attach : function(context, settings) {
			$('.totop').once('totop').click(function(ev) {
				ev.preventDefault();
				$('html, body').animate({
					scrollTop : '0px',
					avoidTransforms : true
				}, {
					duration: 1500,
					queue: false
				});
			});
			
			$('a[href*="#"]:not([data-toggle],[data-target])').once('mt_scroll').click(function(ev) {
				var $target = $(this.hash);
				if ($target.length) {
					ev.preventDefault();
					Drupal.mt.scrollTo($target);
				}
			});
			
			$('.navbar-toggle').once('expanded').click(function() {
				$(this).toggleClass('expanded');
			});			
			
			$(".owl-builder-slider-multimedia").owlCarousel({				
				afterUpdate: function () {
					setTimeout(
	 	        			  function() 
	 	        			  {
	 	        				 updateSize(".owl-builder-slider-multimedia");
	 	        			  }, 50);
	 	        },
	 	        afterInit:function(){
	 	        	setTimeout(
	 	        			  function() 
	 	        			  {
	 	        				 updateSize(".owl-builder-slider-multimedia");
	 	        			  }, 50);
	 	            
	 	        },
	 			items : 1,
				// Navigation
				navigation : true,
				navigationText : ["prev","next"],
				rewindNav : true,
				scrollPerPage : false,
				singleItem: true,
				autoPlay: true,
			    //Pagination
			    /*pagination : true,
			    paginationNumbers: true,*/
			 }); 		
	 		
	 	    function updateSize(owl){
	 	        var minHeight=parseInt($(owl+' '+'.owl-item').eq(0).height());
	 	        $(owl+' '+'.owl-item').each(function () {	 	        	
	 	            var thisHeight = parseInt($(this).height());	 	            
	 	            minHeight=(minHeight<=thisHeight?minHeight:thisHeight);
	 	        });	 	        
	 	        $(owl+' '+'.owl-wrapper-outer').css('height',minHeight+'px');
	 	    }
			
			//matchHeight
			var groups = {};
		    // generate groups by their groupId set by elements using data-match-height
		    $('[data-match-minheight], [data-mmh]').once('match-height').each(function() {
	            var $this = $(this),
	                groupId = $this.attr('data-mmh') || $this.attr('data-match-minheight')
	                byRow = $this.attr('data-mmh-byrow') || true;

	            if (groupId in groups) {
	            	groups[groupId].items = groups[groupId].items.add($this);
	                
	            } else {
	                groups[groupId] = {
	                		'items': $this,
	                		'byRow': byRow
	    	        };
	            }
	        });

	        // apply matchHeight to each group
	        $.each(groups, function() {
	            this.items.matchHeight({
	            	 property: 'min-height',
	            	 byRow: this.items.byrow
	            });
	        });
		}
	};
	
	
	$(document).ready(function() {
		init();
	});
})(window.jQuery, window.Drupal, window.Drupal.bootstrap);