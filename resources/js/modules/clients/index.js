import actions from './actions';
import mutations from './mutations';
import state from './state';
import getters from './getters';

const saving_module = {
	namespaced: true,
	actions,
	mutations,
	state,
	getters,
};

export default saving_module;