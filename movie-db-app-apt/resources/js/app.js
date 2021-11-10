require('./bootstrap');
import Vue from 'vue';
import App from './vue/app';

// import axios
import VueAxios from 'vue-axios';
import VueRouter from 'vue-router';
import axios from 'axios';

// import routes
import { routes } from './routes';

// import fontawesome icons
import { library } from '@fortawesome/fontawesome-svg-core';
import { faPlusSquare, faTrash, faList } from '@fortawesome/free-solid-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';

library.add(faPlusSquare, faTrash, faList);
Vue.component('font-awesome-icon', FontAwesomeIcon);
Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: routes
});

const app = new Vue({
    el: '#app',
    router,
    components: { App },
});
