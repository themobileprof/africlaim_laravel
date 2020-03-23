    import Vue from 'vue'
    import VueRouter from 'vue-router'

    Vue.use(VueRouter)

    import App from './components/App'
    import airports from './components/view1_airports'
    import flight_date from './components/view2_flight_date'
    import route from './components/view3_route'
    import complaint from './components/view4_complaint'

    const router = new VueRouter({
        mode: 'history',
        routes: [
            {
                path: '/claims/airports',
                name: 'airports',
                component: Header,
                props: { title: "Where did you fly to?" }
            },
            {
                path: '/claims/flight_date',
                name: 'flight_date',
                component: Header,
                props: { title: "What was your departure date?" }
            },    
            {

                path: '/claims/route',
                name: 'route',
                component: Header,
                props: { title: "Which flight did you take?" }
            },
            {

                path: '/claims/complaint',
                name: 'complaint',
                component: Header,
                props: { title: "What is the nature of the complaint?" }
            },
        ],
    })
    const app = new Vue({
        el: '#app',
        components: { App },
        router,
    });

