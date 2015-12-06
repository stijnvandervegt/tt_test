var Vue = require('vue');
var jQuery = require('jquery');
var slick = require('slick-carousel');

var slider = Vue.component('slider', {
    template: '#slider',
    ready: function() {
        jQuery('.homeSlider').slick({
            prevArrow: '<button type="button" class="slick-prev"><span class="icon-arrow-left"></span></button>',
            nextArrow: '<button type="button" class="slick-next"><span class="icon-arrow-right"></span></button>'
        });
    },
    methods: {
        scrollDown: function(element) {
            jQuery('body').animate({
                scrollTop: jQuery('.'+element).offset().top
            }, 'slow');
        }
     }
});

module.exports = slider;