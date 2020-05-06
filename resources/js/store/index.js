import Vue from "vue";
import Vuex from "vuex";

Vue.use(Vuex);

import form from "./form";
//import history from "./history";

const store = new Vuex.Store({
    strict: true,
    modules: {
        form
        //history
    }
});
export default store;
