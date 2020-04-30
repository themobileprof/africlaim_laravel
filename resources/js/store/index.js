import Vue from "vue";
import Vuex from "vuex";

Vue.use(Vuex);

import history from "./history";

const store = new Vuex.Store({
    strict: true,
    modules: {
        history
    }
});
export default store;
