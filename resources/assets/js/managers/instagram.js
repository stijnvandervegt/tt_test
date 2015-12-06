var jQuery = require('jquery');

var Instagram = {
    data: {},
    getFeed: function(callback) {
        var self = this;
        jQuery.getJSON('/feeds/instagram.json', function(result) {
            self.data = result;
            callback(self.getData());
        }).error(function(error) {
            console.log(error);
        });

    },
    getData: function() {
        return this.data;
    }

}

module.exports = Instagram;