var Vue = require('vue');
var InstagramManager = require('../managers/instagram');

var InstagramComponent = Vue.component('instagram', {
    template: '#instagram',
    data: function() {
        return {
            items: []
        }
    },
    created: function() {
        var self = this;
        InstagramManager.getFeed(function(result) {
            self.items = result.data;
        });
    }
});

module.exports = InstagramComponent;


