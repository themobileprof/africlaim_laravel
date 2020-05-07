require("./bootstrap");
require("bootstrap4-toggle/js/bootstrap4-toggle.min");
require("bootstrap-select/js/bootstrap-select");
import Vue from "vue";
import VueRouter from "vue-router";
//import Vuex from "vuex";
import VCalendar from "v-calendar";

Vue.use(VueRouter);
//Vue.use(Vuex);

//import storeData from "./store/index";

//const store = new Vuex.Store(storeData);

import store from "./store/index";

// Use v-calendar & v-date-picker components
Vue.use(VCalendar, {
    componentPrefix: "vc", // Use <vc-calendar /> instead of <v-calendar />
    locales: {
        cust: {
            masks: {
                L: "YYYY-MM-DD"
            }
        }
    }
});

import App from "./components/App";
import Start from "./components/view1_airports";
import Flight_date from "./components/view2_flight_date";
import Route from "./components/view3_route";
import Complaint from "./components/view4_complaint";
import NotFound from "./components/notFound";
import Processing from "./components/view5_processing";
import failed from "./components/failed";

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/claims/start",
            name: "start",
            component: Start,
            //props: { title: "Where did you fly to?" }
            props: route => ({
                destinationParam: route.query.destination,
                departureParam: route.query.departure
            })
            //props: true,
        },
        {
            path: "/claims/flight_date",
            name: "flight_date",
            component: Flight_date
        },
        {
            path: "/claims/route",
            name: "route",
            component: Route
        },
        {
            path: "/claims/complaint",
            name: "complaint",
            component: Complaint
        },
        {
            path: "/claims/processing",
            name: "processing",
            component: Processing
        },
        {
            path: "/claims/failed",
            name: "failed",
            component: failed
        },
        {
            path: "/claims/404",
            component: NotFound
        },
        {
            path: "/claims/*",
            redirect: {
                name: "start"
            }
        }
    ]
});
const app = new Vue({
    el: "#app",
    components: { App },
    router,
    store
});
export default app;
