var Vue = require('vue');
var VueValidator = require('vue-validator');
var FormManager = require('../managers/form');

Vue.use(VueValidator);

var Vue = require('../helpers/validator');

var contactForm = Vue.component('contactform', {
    template: '#contactform',
    data: function () {
        return {
            firstname: '',
            lastname: '',
            email: '',
            phone: '',
            message: '',
            globalError: false,
            formSent: false
        }
    },
    methods: {
        sendForm: function () {
            if (this.$validation.invalid) {
                this.globalError = true;
                return false;
            }

            this.globalError = false;

            var data = {
                firstname: this.firstname,
                lastname: this.lastname,
                email: this.email,
                phone: this.phone,
                message: this.message
            }
            var self = this;
            FormManager.send(data, function (result) {
                self.formSent = true;
            });

        },
        validate: function (validation, element) {

            if (this.globalError === true && validation[element].dirty === false) {
                return true;
            }

            if (!validation[element] || validation[element].dirty === false) {
                return false;
            }

            return validation[element].required;

        },
        success: function (validation, element) {

            if (!validation[element] || validation[element].dirty === false) {
                return false;
            }

            return validation[element].valid;
        }
    }

});

module.exports = contactForm;