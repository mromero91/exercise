
	require('./bootstrap');

	window.Vue = require('vue').default;
	window.Vuex = require('vuex');


	var filters = require('./filters');

	import clients from './modules/clients';

	const moment = require('moment');
	require('moment/locale/es')
	Vue.use(require('vue-moment'), {
		moment,
	});

	/*
	 * Next, we will create a fresh Vue application instance and attach it to
	 * the page. Then, you may begin adding components to this application
	 * or customize the JavaScript scaffolding to fit your unique needs.
	 */

	Vue.component(
		'client-test',
		require('./components/client/test.vue').default
	);

	Vue.component(
		'records',
		require('./components/Records.vue').default
	);

	Vue.config.devtools = true;

	const store = new Vuex.Store({
		state: {},
		mutations: {},
		modules : {
			clients,
		}
	});

	const app = new Vue({
		el: '#main',
		store,
		filters,
	});
