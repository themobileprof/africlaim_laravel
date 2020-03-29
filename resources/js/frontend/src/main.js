import Vue from 'vue'
import App from './App.vue'
import ViewAirports from '@/components/view1_airports.vue'
import ViewFlightDate from '@/components/view2_flight_date.vue'
import VueRouter from 'vue-router'
import BootstrapVue from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
// import Buefy from 'buefy'
// import 'buefy/dist/buefy.css'

// Vue.use(Buefy)
Vue.use(BootstrapVue)
Vue.use(VueRouter)

Vue.config.productionTip = false

const routes =[
    // {
    //   path: '/',
    //   name: 'home',
    //   component: App
    // },

    {
      path: '/view-airports',
      component: ViewAirports
    },

    {
      path: '/view-flights',
      component: ViewFlightDate
    }


];

const router = new VueRouter({
  routes,
  mode: "history"
});


new Vue({
  router,
  render: h => h(App),

}).$mount('#app')
