var Vue = require('vue');

var nav = new Vue({
    el: '#header',
    data: {
        menuIsActive: false
    },
    methods: {
        toggleMenu: function() {
            this.menuIsActive = !this.menuIsActive;
        }

    }
});

module.exports = nav;