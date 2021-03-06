"use strict"; 

var AYR = AYR || {};

(function($){


  // Cache DOM elements for future use
  var menuBtn = $('.menu-btn');
  var siteNav = $('.site-nav');
  var siteHeader = $('.site-header');

  // If ontouchstart exists then set click handler to touchstart otherwise set clickhandler to click
  var clickHandler = ('ontouchstart' in document.documentElement ? "touchstart" : "click");

  /**************************************/
  /*   Application Object
  /***************************************************/
  AYR = {
    grid : $('.grid'),
    baseURL : document.location.origin + document.location.pathname,

    init: function () {
      console.log('init');


      /**************************************/
      /*   Remove width and hieght from wp images
      /***************************************************/
      $('img').removeAttr('width').removeAttr('height');

      /**************************************/
      /*   Mobile Navigation Trigger
      /***************************************************/
      menuBtn.on('click', function() {
        $(this).toggleClass('active');
        siteNav.toggleClass('active');
        siteHeader.toggleClass('mobile-active');
      });

     
      $(document).on( 'click', '.intro-wrapper .more', function( event ) {
        $(this).closest('.intro-wrapper').toggleClass('expanded');
      });

      /**************************************/
      /*   Scrollbar Activation
      /***************************************************/
      $(".grid .grid-item .desc, .overlay.latest-event .description, .team-member .bio").mCustomScrollbar();
      

      /**************************************/
      /*   Scroll Event Code
      /***************************************************/
      $(window).scroll(function() {
        AYR.addTopLink();
      });

      $('.top').on('click', function(e){
        e.preventDefault();
        AYR.scrollTo( e, 'html,body');
      });

      $('.soft-scroll').on('click', function(e){
        e.preventDefault();
        var scrollElem = $(this).attr('href');
        AYR.scrollTo( e, scrollElem);
      });


      /**************************************/
      /*   Event Filter
      /***************************************************/
      $(document).on( 'click', '.filter-btn', function( event ) {
        console.log('************** filter button click fired *****************');
        event.preventDefault();
        var $this = $(this);
        // var filterGroup = $this.data('filter-group');
        var filterName = $this.data('filter');
        var filterElem = $this.closest('li');

        AYR.filterGrid(filterName);
        AYR.scrollTo( event, '.sub-nav');
        filterElem.closest('.site-content').find('li.active').removeClass('active');
        filterElem.addClass('active');

        // var newURL = AYR.baseURL + '#/' + filterName;

        // if(filterGroup){
        //   var newURL = CBCL.baseURL + '#/' + filterGroup + '/' + filterName;
        // } else {
        //   var newURL = CBCL.baseURL + '#';
        // }

        // location.href = newURL;
      });


      /**************************************/
      /*   Overlay Trigger
      /***************************************************/
      $(document).on( 'click', '.overlay-trigger', function( event ) {
        console.log('************** overlay button click fired *****************');
        event.preventDefault();
        var $this = $(this);
        var overlayName = $this.data('overlay');

        $('.overlay.'+overlayName).removeClass('collapsed');
      });

      $(document).on( 'click', '.overlay .close', function( event ) {
        console.log('************** overlay close button click fired *****************');
        event.preventDefault();
        var $this = $(this);
        var overlay = $this.closest('.overlay');

        overlay.addClass('collapsed');
      });


      /**************************************/
      /*   Share button Click Script
      /***************************************************/
      $(document).on( 'click', '.share-mod a', function(e) {
        /*************Open Shares in New Window Code**********/
        e.preventDefault();
        var url = $(this).attr('href');
        AYR.popupCenter(url,'shareWindow','600', '600');
      });

      /*************Support Us Share Click Code**********/
      $(document).on( 'click', '.support-links .share', function(e) {
        $(this).addClass('active');
      });

      /**************************************/
      /*   Scrollbar Activation
      /***************************************************/
      // if(AYR.isMobile()){
      //   $(".site-nav ul").mCustomScrollbar();
      // }
      

      /**************************************/
      /*   Window Load
      /***************************************************/
      window.onload = function (e,afterPages) {
        AYR.addTopLink();

        if(AYR.isShortMobile()){
          siteNav.addClass('small-mobile');
        } 
      }

      /**************************************/
      /*   Window Resize
      /***************************************************/
      $(window).on('resize', function(argument) {

        if(AYR.isMobile()){
          if(AYR.isShortMobile()){
            siteNav.addClass('small-mobile');
          } else {
            siteNav.removeClass('small-mobile');
          }
        } else{
          console.log('not mobile');
          siteHeader.removeClass('mobile-active');
          menuBtn.removeClass('active');
          siteNav.removeClass('active');
          siteNav.removeClass('small-mobile');
        }
      });

    }, // End Init

    /********************************************************************/
    /*                                                                  */
    /*          Opens Share buttons in centered new window              */
    /*                                                                  */
    /********************************************************************/
    popupCenter: function(url, title, w, h) {
      // http://stackoverflow.com/questions/4068373/center-a-popup-window-on-screen
      var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;
      var dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top;

      var width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
      var height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

      var left = ((width / 2) - (w / 2)) + dualScreenLeft;
      var top = ((height / 2) - (h / 2)) + dualScreenTop;
      var newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);

      // Puts focus on the newWindow
      if (window.focus) {
          newWindow.focus();
      }
    },

    filterGrid: function(filterStr) {
      console.log('************** filterGrid fired *****************');
      // var filterString ='.' + elemGroup + '-' + elemFilter;
      var filterString ='.' + filterStr;
      console.log('filterString: ',filterString);

      if(!(filterStr === '*')){
      console.log('************** filter CODE fired *****************');

        AYR.grid.isotope({
          itemSelector: '.grid-item',
          filter: filterString,
          animationEngine: 'best-available',
          percentPosition: true
        });
      } else {
        console.log('************** filter ALL fired *****************');
        AYR.grid.isotope({

          filter: '*',
          animationEngine: 'best-available',
          percentPosition: true
        });
      }
      // CBCL.scrollTop('html, body', CBCL.siteHeaderHeight);
    },

    addTopLink: function(argument) {
      var yPos = -($(window).scrollTop()); 

      if(yPos <= -260){
        $('.top').removeClass('hidden');
      }else{
        $('.top').addClass('hidden');
      }
    },

    isMobile: function(){
      // var mobileWidth = 950;
      var mobileWidth = 670;
      var isiPad = navigator.userAgent.match(/iPad/i) != null;

      if (($(window).width() < mobileWidth) || isiPad  ) {
        return true;
      } else {
        return false;
      }
    },

    isShortMobile: function(){
      console.log('shortMobile called');

      var mobileHeight = 400;

      if (($(window).height() < mobileHeight)) {
      console.log('shortMobile TRUE');

        return true;
      } else {
        return false;
      }
    },

    scrollTo: function(e, elem){
     $('html,body').animate({                                                             
          scrollTop: $(elem).offset().top
      }, 1000);
    }

  };

})(jQuery); // End Self Evoking Function

AYR.init();