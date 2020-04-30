export default {
    state: {
        history: []
    },

    getters: {
        isVisited: state => page => {
            //return state.history;
            if (state.history.find((hist = ipage => ipage == page))) {
                return true;
            } else {
                return false;
            }
        }
    },

    actions: {
        addHistory({ commit }, page) {
            commit("ADD_HISTORY", page);
        }
    },

    mutations: {
        ADD_HISTORY(state, page) {
            return state.history.push(String(page));
        }
    }
};
