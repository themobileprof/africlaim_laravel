require("./bootstrap");
require("bootstrap4-toggle/js/bootstrap4-toggle.min");
require("bootstrap-select/js/bootstrap-select");
import Vue from "vue";
import VueRouter from "vue-router";
import VCalendar from "v-calendar";

Vue.use(VueRouter);

// Use v-calendar & v-date-picker components
Vue.use(VCalendar, {
    componentPrefix: "vc" // Use <vc-calendar /> instead of <v-calendar />
});

import App from "./components/App";
import Start from "./components/view1_airports";
import Flight_date from "./components/view2_flight_date";
import Route from "./components/view3_route";
import Complaint from "./components/view4_complaint";

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/claims/",
            redirect: {
                name: "start"
            }
        },
        {
            path: "/claims/start",
            name: "start",
            component: Start
            //props: { title: "Where did you fly to?" }
        },
        {
            path: "/claims/flight_date",
            name: "flight_date",
            component: Flight_date
            //props: { title: "What was your departure date?" }
        },
        {
            path: "/claims/route",
            name: "route",
            component: Route
            //props: { title: "Which flight did you take?" }
        },
        {
            path: "/claims/complaint",
            name: "complaint",
            component: Complaint
            //props: { title: "What is the nature of the complaint?" }
        }
    ]
});
const app = new Vue({
    el: "#app",
    components: { App },
    router
});

