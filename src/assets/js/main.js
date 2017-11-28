// *********************************************************************
// *********************************************************************
// *********************************************************************

import GMaps from 'gmaps';
import slick from 'slick-carousel';

import grid from './components/Grid.vue';
import column from './components/Column.vue';
import box from './components/Box.vue';
import mediaobject from './components/MediaObject.vue';
import card from './components/Card.vue';
import flash from './components/Alert.vue';
import navbar from './components/Navbar.vue';
import btn from './components/Button.vue';
import modal from './components/Modal.vue';
import modaltrigger from './components/ModalTrigger.vue';
import field from './components/Field.vue';
import textfield from './components/Textfield.vue';

new Vue({
    el: '#app',
    delimiters: ['@{', '}'],
    components: {
        grid,    
        column, 
        box, 
        mediaobject, 
        card, 
        alert, 
        navbar, 
        btn, 
        modal,
        modaltrigger,
        field,
        textfield,
    }
});

// *********************************************************************
// *********************************************************************
// *********************************************************************

window.onload = () => {
  $('.loader').addClass('is--loaded');  
  $('.hero').addClass('is--loaded');  
};

var map = new GMaps ({
    el: '#map',
    lat: 42.322656,
    lng: -83.014000,
    zoomControl: false,
    streetViewControl : false,
    mapTypeControl: false,
    overviewMapControl: false
});

var styles = [
    {
      stylers: [
        { hue: "#00000" },
        { saturation: -100 },
        { brightness: -100 }
      ]
    }, {
        featureType: "road",
        elementType: "geometry",
        stylers: [
            { lightness: 100 },
            { visibility: "simplified" }
      ]
    }, {
        featureType: "road",
        elementType: "labels",
        stylers: [
            { visibility: "on" }
      ]
    }
];

map.addStyle({
    styledMapName:"Styled Map",
    styles: styles,
    mapTypeId: "map_style"  
});

map.setStyle("map_style");


map.addMarker({
    lat: 42.322656,
    lng: -83.014000
});

//
//
// Form
//
//

var form = $('.contact__form');
var formMessages = $('.form__messages');

$(form).submit((e) => {
    e.preventDefault();

    var formData = new FormData($(this)[0]);

    $.ajax({
        url: $(form).attr('action'),
        type: 'post',
        data: formData,
        async: false,
        cache: false,
        contentType: false,
        processData: false,
        success: function (returndata) {
              $(formMessages).html(`<div class="alert success">Thanks for getting in touch!  We'll be get back to you soon.</div>`);

              $(formMessages).removeClass('error');
              $(formMessages).addClass('success');

              $('.contact__form input').val('');
              $('.contact__form textarea').val('');
          },
          error: function () {
              $(formMessages).html(`<div class="alert error">Uh-oh!  Something went wrong, give it another try!</div>`);

              $(formMessages).removeClass('success');
              $(formMessages).addClass('error');

              $('.contact__form input').val('');
              $('.contact__form textarea').val('');
          }
      });

      return false;

});

//
//
// Menu
//
//

var menu = $('.mobile-menu');
var menuTrigger = $('.mobile-menu__trigger');

menuTrigger.click((e) => {
  $(this).toggleClass('is--open');
  menu.toggleClass('is--open');
});

//
//
// Food Menu
//
//

var menuNav = $('.menu__nav li');
var menuTab = $('.menu__tab');


$(function () {
  $('.tabs__nav li').first().addClass('active');
  $('.tab__drawer').first().addClass('active');
  $('.tab__content').hide().first().show();

  // when tabs are tabs
  $('.tabs__nav li').click(function () {

    $('.tab__content').hide();
    var activeTab = $(this).attr('rel');
    $('#' + activeTab).fadeIn();

    $('.tabs__nav li').removeClass('active');
    $(this).addClass('active');

    $('.tab__drawer').removeClass('active');
    $('.tab__drawer[rel^="' + activeTab + '"]').addClass('active');

  });

  // when tabs are accordions
  $('.tab__drawer').click(function () {

    $('.tab__drawer').removeClass('active');
    $(this).addClass('active');

    $('.tab__content').slideUp({
      duration: 400
    });
    var a_activeTab = $(this).attr('rel');
    $('#' + a_activeTab).slideDown({
      duration: 400
    });

    $('.tabs__nav li').removeClass('active');
    $('.tabs__nav li[rel^="' + a_activeTab + '"]').addClass('active');

  });

});

/*
|--------------------------------------------------------------------------
| #GALLERY
|--------------------------------------------------------------------------
*/

// #SLIDER

$('.gallery__slide').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 3,
  arrows: false,
  autoplay: true,
  responsive: [
  {
    breakpoint: 768,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1
    }
  }
  ]
});























