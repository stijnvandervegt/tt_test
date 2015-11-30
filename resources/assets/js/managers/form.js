var jQuery = require('jquery');

var FormManager = {
    url: '/contact/form/send',
    send: function(data, callback) {

        jQuery.post(this.url, data, function(success) {
            callback(success);
        });

    }
};

module.exports = FormManager;