export default {
    state: {
        airports: []
    },

    getters: {
        get_airports: state => query => {
            //return state.airports;
            return state.airports.filter(o =>
                Object.keys(o).some(k =>
                    o[k].toLowerCase().includes(query.toLowerCase())
                )
            );
        }
    },

    actions: {
        load_airports({ commit }, query) {
            axios.get("/api/airports/" + query).then(response => {
                commit("LOAD_AIRPORTS", response.data);
            });
        }
    },

    mutations: {
        LOAD_AIRPORTS(state, airportData) {
            //Object.assign(state.airports, airportData);
            state.airports = airportData;
        }
    }
};
