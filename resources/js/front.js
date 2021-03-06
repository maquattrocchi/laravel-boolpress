require('./bootstrap');
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Vue = require('vue');

import App from './views/App';

import router from './router';

const app = new Vue({
	el: '#root',
    // renderizziamo App all'avvio di Vue
	render: h => h(App), 
    router
});