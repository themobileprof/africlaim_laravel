<template>
<div class='col-md-12 form-style'>
	<div class="row claims-desc">
		What date was your flight?
	</div>
	<div class="row">
		<div class="col-md-8 my-4">
				  <vc-date-picker 
					  :mode='mode' 
					  v-model="flightDate"
					  :input-props='{
					  class: "w-full shadow appearance-none border rounded py-2 px-3 text-gray-700 hover:border-blue-5",
					  placeholder: "Please enter Flight date",
					  readonly: true,
					  name: "flightDate"
					  }'
				  />
				  <i class="fas fa-calendar-alt" style="position:relative; margin-left: -30px; z-index: 100;"></i>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 py-4">
			<router-link class="btn btn-primary btn-lg" v-bind:class="{ disable: !showNext }" to="/claims/route" role="button" style="width: 200px;">Next <i class=" 	fas fa-angle-double-right"></i></router-link>
			<router-link class="btn btn-white btn-lg text-secondary ml-2" to="/claims/start" role="button" style="width: 200px;"><i class="fas fa-angle-double-left"></i> Back</router-link>
		</div>
	</div>
</div>
</template>

<script>

    export default {
		name: "FlightDate",
		data() {
		  return {
			mode: 'single',
			flightDate: null,
			page: this.$route.name,
			testing: ''
		  }
		},
        mounted() {
            console.log('Flight date component mounted.')
        },
		methods: {
			changetest(val){
				this.testing = val; // Random var for testing Vuex getter value
			},
			formatDate(date) {
				var d = new Date(date),
					month = '' + (d.getMonth() + 1),
					day = '' + d.getDate(),
					year = d.getFullYear();

				if (month.length < 2) month = '0' + month;
				if (day.length < 2) day = '0' + day;

				return [year, month, day].join('-');
			}
		},
		computed: {
			showNext : function() {
				 if(this.flightDate) {
				   // perform some logic on preference
				   // logic results true or false
					const flight_date = this.formatDate(this.flightDate);
					 this.$store.commit('ADD_FIELD', { 'flightdate': flight_date })


				   return true
				 } else {
					 return false
				 }
			}
		},
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style src="../css/claims.css">
</style>
