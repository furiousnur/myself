import router from "./router";
require('./bootstrap');
import Vue from 'vue'
import routes from './router/index'
import CxltToastr from 'cxlt-vue2-toastr'
import 'cxlt-vue2-toastr/dist/css/cxlt-vue2-toastr.css'

var toastrConfigs = {
    position: 'top right',
    showDuration: 1000,
    timeout: 5000,
    closeButton: true,
    showMethod: 'fadeIn',
    hideMethod: 'fadeOut'
}
Vue.use(CxltToastr, toastrConfigs)

Vue.component('app-header', require('./components/Header.vue').default);
import AppFooter from './components/Header.vue';

const app = new Vue({
    el: '#app',
    router: routes,
    components: {AppFooter},
});
