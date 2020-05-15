export default {
    state: {
        airports: {},
        query: ""
    },
    getters: {
        get_airports: state => {
            return state.airports;
        },

        filter_airports: state => {
            return true;

            // Has Error

            //trial1: Shortened
            //let newAirports = state.airports;
            //console.log(newAirports);
            //debugger;
            //return newAirports.filter(val =>
            //Object.keys(val).some(key =>
            //val[key]
            //.toString()
            //.toLowerCase.includes(state.query.toLowerCase())
            //)
            //);

            //Trial2: Mine

            //let new_airports = state.airports;
            //return new_airports.filter(
            //new_airports =>
            //new_airports.name.toLowerCase().includes(state.query) ||
            //new_airports.city.toLowerCase().includes(state.query)
            //);
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
        },
        SET_QUERY(state, query) {
            state.query = query.query;
        }
    }
};
