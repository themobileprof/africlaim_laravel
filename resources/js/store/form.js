export default {
    state: {
        fields: {}
    },

    getters: {
        getFields: state => {
            return state.fields;
        }
    },

    actions: {
        addField({ commit }, field) {
            commit("ADD_FIELD", field);
        }
    },

    mutations: {
        ADD_FIELD(state, field) {
            Object.assign(state.fields, field);
        }
    }
};
