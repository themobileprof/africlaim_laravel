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
					  <div class="col-6">Scheduled Time</div>
					  <div class="col-3">Airline</div>
					  <div class="col-2">Flight Number</div>
				  </label>
			  </div>
			 </div>


			 <flights 
			 v-if="loaded"
			:flightsData="flightsData"
			 @route="setRoute"
			 @tof="setRoute"
			 >
			 </flights>
			<div v-else>
				<div v-if="showOption" class="list-group-item">
					What was your scheduled departure time? <input type="time" class="form-control" v-model="tof" value="00:00"> 
				</div>			  

				<img :src="'/img/turning.gif'" style="height:50px; padding-left:10px;" alt="loading...">
			</div>

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
	import flights from './subcomponents/view3/flights'
    export default {
		components: {
			flights,
		},
		data() {
		  return {
			mode: 'single',
			testing: '',
			flightsData: [],
			loaded: false,
			route: false,
			tof: '',
			showOption: false,
		  }
		},
        async mounted() {
				this.callSetTime()
				const params = {
					flight_date: this.$store.getters.getFields.flightdate,
					departure: this.$store.getters.getFields.departure,
					arrival: this.$store.getters.getFields.destination,
				}

				// axios.get('/api/flights', {params}).then(response => {
				//	this.flightsData  = response.data;
				// })
				// .catch(()=>{
               //   
               //   console.log("No Flight Info");
               //   
               //});
				try {
					let response = await axios.get('/api/flights', {params})

					if (this.flightsData.length == 0 || this.flightsData == "" || this.flightsData == undefined || this.flightsData == null){
					//	// If Route is not found, Load next page
					//	this.$router.push({name: 'complaint'})
					
						
						this.flightsData = {'main':'','others':''};
					} else {
						this.flightsData = response.data;
					}

					this.loaded = true;

				  } catch(error) {
					 // error
					 console.log("No Flight Info");
				  }
        },
		methods: {
			setRoute(){
				this.route = true
			},
			callSetTime: function () {

				var v = this;

				setTimeout(function () {

					v.showOption = true;

				}, 60000);

			}
		},
		watch: {
			tof: function (){
				this.$store.commit('ADD_FIELD', { 'tof': this.tof });
				this.setRoute();
			}

		},
		computed: {
			showNext : function() {
				 if(this.route) {
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
</style>
