<template>
<transition name="slide">

<div class='col-md-12 form-style'>
	<div class="row claims-desc">
		To find out if you are eligible for compensation, kindly fill out your flight information
	</div>
	<div class="row">
	
		<div class="col-xs-12 col-md-4">
			<label for="start-airport" class="control-label pt-2">
				Departure
			</label>
			<airport 
				input_text='departure' 
				placehold_text='Departed from' 
				:airportParam="departureParam"
		    ></airport>
	  </div>
  
	  <div class="col-xs-12 col-md-4">
			<label for="end-airport" class="control-label pt-2">
				Final destination
			</label>
			<airport 
				input_text='destination' 
				placehold_text='Arrived at'
				:airportParam="destinationParam"
			></airport>
			Uchechi Edeh
	  </div>
		<div class="col-md-4">
		
		</div>

	</div>
	<div class="row p-4 mt-4">
		<div class="col-7 col-md-4">
			<label for="connectingFlight" class="control-label text-xs-right">
				Were there any connecting flights?
			</label>
		</div>
		<div class="col-5 col-md-4">
			<input id="connectingFlight" name="connectingFlight" v-model="connectingFlight" type="checkbox" data-on="Yes" data-off="No" data-toggle="toggle" data-width="100" @change="toggleConnecting">
		</div>
	</div>

	<connecting v-if="connectingFlight"></connecting>

	<div class="row mt-4 pt-4" style="padding-left: 15px;">
		<router-link class="btn btn-primary btn-lg" to="/claims/flight_date" role="button" style="width: 200px;">Next <i class="fas fa-angle-double-right"></i></router-link>
	</div>
</div>
</transition>
</template>

<script>
	import airport from './subcomponents/view1/airports'
	import connecting from './subcomponents/view1/connecting'

    export default {
		props: ['departureParam','destinationParam'],
		components: {
			airport,
			connecting,
		},
		data(){
			return {
				connectingFlight: false,
				departureId: this.departureParam,
				destinationId: this.destinationParam,
			}
		},
		mounted(){
			// if (this.$route.query.destinationId && this.$route.query.departureId){
			//	this.departureId = this.$route.query.depId;
			//	this.destinationId = this.$route.query.destId;
			//}
		},
		methods: {
			toggleConnecting(){
				if (this.connectingFlight == false){
					this.connectingFlight = true
				} else {
					this.connectingFlight = false
				}
			}
		}
	}


</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style src="../css/claims.css">
</style>
