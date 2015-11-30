var jQuery = require('jquery');

var Manager = {
    setup: function() {
        jQuery.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
    }
}

module.exports = Manager;