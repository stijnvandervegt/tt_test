var Vue = require('vue');
var VueRouter = require('vue-router');

// Import pages
import HomePage from './pages/homepage';
import ContactPage from './pages/contactpage';

Vue.use(VueRouter);

var router = new VueRouter();

router.map({
    '/': {
        name: 'home',
        component: HomePage
    },
    '/contact': {
        name: 'contact',
        component: ContactPage
    }
});

var App = Vue.extend({});
router.start(App, '#app');

module.exports = router;

