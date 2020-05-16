<template>
<div class='col-md-12 form-style'>
	<div class="row claims-desc">
		Select your flight below
	</div>
	<div class="row">
		<div class="col-md-8 my-4">
			 <div class="list-group list-group-flush">
			  <div class="list-group-item list-group-item-light">
				  <label class="top_label row">
					  <div class="col-1"></div>
					  <div class="col-4">Scheduled Time</div>
					  <div class="col-4">Airline</div>
					  <div class="col-3">Flight Number</div>
				  </label>
			  </div>
			 </div>
			 <ul class="list-group">
			  <li class="list-group-item list-group-item-action list-group-item-success" v-for="(flight, i) in flights" v-bind:key="i">
				  <label class="flight_label row" :for="flight.flight.iata">
					  <div class="flight_input col-1"><input type="radio" name="route" :id="flight.flight.iata" v-model="route" :value="flight.flight.iata"><span class="checkmark"></span></div>
					  <div class="flight_time col-4">{{ flight.departure.scheduled }} <i class="fas fa-plane-departure fa-xs"></i> {{ flight.arrival.scheduled }}</div>
					  <div class="airline col-4">{{ flight.airline.name }}</div>
					  <div class="flight_number col-3">{{ flight.flight.iata }}</div>
				  </label>
			  </li>
			  
			</ul> 
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 py-4">
			<router-link class="btn btn-primary btn-lg" to="/claims/complaint" role="button" style="width: 200px;" v-bind:class="{ disable: !showNext }">Next <i class=" 	fas fa-angle-double-right"></i></router-link>
		<router-link class="btn btn-white btn-lg text-secondary ml-2" to="/claims/flight_date" role="button" style="width: 200px;"><i class="fas fa-angle-double-left"></i> Back</router-link>
		</div>
	</div>
</div>
</template>

<script>
    export default {
		data() {
		  return {
			mode: 'single',
			route: null,
			testing: '',
			flights: [],
		  }
		},
        created() {
				const fdate = this.$store.getters.getFields.flightdate


				const params = {
					access_key: '7c1b02ce0ae62383f31d37eda1e2fed2',
					flight_date: fdate.substring(0,10)				
				}

				axios.get('https://api.aviationstack.com/v1/flights', {params}).then(response => {
					this.flights  = response.data;

					// if (Array.isArray(this.flightInfo['results'])) {
					//	this.flightInfo['results'].forEach(flight => {
					//		if (!flight['live']['is_ground']) {
					//			console.log(`${flight['airline']['name']} flight ${flight['flight']['iata']}`,
					//				`from ${flight['departure']['airport']} (${flight['departure']['iata']})`,
					//				`to ${flight['arrival']['airport']} (${flight['arrival']['iata']}) is in the air.`);
					//		}
					//	});
					//}
				 })
				 .catch(()=>{
                  
                  console.log("No Flight Info");
                  
               });
        },
		methods: {
			setRoute(Route){
				this.route = Route
			},
			changetest(val){
				this.testing = val; // Random var for testing Vuex getter value
			},
			getFlightInfo(){
				const fdate = this.$store.getters.getFields.flightdate


				const params = {
					access_key: '7c1b02ce0ae62383f31d37eda1e2fed2',
					flight_date: fdate.substring(0,10)				
				}

				axios.get('https://api.aviationstack.com/v1/flights', {params}).then(response => {
					this.flights  = response.data;

					// if (Array.isArray(this.flightInfo['results'])) {
					//	this.flightInfo['results'].forEach(flight => {
					//		if (!flight['live']['is_ground']) {
					//			console.log(`${flight['airline']['name']} flight ${flight['flight']['iata']}`,
					//				`from ${flight['departure']['airport']} (${flight['departure']['iata']})`,
					//				`to ${flight['arrival']['airport']} (${flight['arrival']['iata']}) is in the air.`);
					//		}
					//	});
					//}
				 })
				 .catch(()=>{
                  
                  console.log("No Flight Info");
                  
               });
			}
		},
		computed: {
			showNext : function() {
				 if(this.route) {
				   // perform some logic on preference
				   // logic results true or false
					 this.$store.commit('ADD_FIELD', { 'route': this.route })
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
<style scoped>
.top_label {
	font-size: 11px;
}


/* The container */
.flight_label {
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  margin-bottom: 0;
  font-size: 12px;
}

/* Hide the browser's default radio button */
.flight_label input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 20px;
  width: 20px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.flight_label:hover input ~ .checkmark {
  background-color: #FFFFFF;
}

/* When the radio button is checked, add a blue background */
.flight_label input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.flight_label input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.flight_label .checkmark:after {
 	top: 6px;
	left: 6px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}
</style>
