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
	  </div>
		<div class="col-md-4">
		
		</div>

	</div>
	<div class="row p-4 mt-4">
		<div class="col-7 col-md-4">
			<label class="h4 control-label text-md-right">
				Were there any connecting flights?
			</label>
		</div>
		<div class="col-5 col-md-4">
			<div class="btn-group btn-group-toggle" data-toggle="buttons">
				<label class="btn btn-primary">
					<input type="radio" name="connectingFlight" id="connectingYes" value="Yes" v-on:click="toggleConnecting" v-model="connectingFlight"> Yes
				</label>
				<label class="btn btn-primary">
					<input type="radio" name="connectingFlight" id="connectingNo" value="No" v-on:click="toggleConnecting" v-model="connectingFlight"> No
				</label>
			</div>
		</div>
	</div>

	<connecting v-if="connectingFlight == 'Yes'"></connecting>

	<div class="row mt-4 py-4" style="padding-left: 15px;">
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
				connectingFlight: 'No',
				departureId: this.departureParam,
				destinationId: this.destinationParam,
			}
		},
		mounted(){
			//if (this.$route.query.destinationId && this.$route.query.departureId){
			//	this.departureId = this.$route.query.depId;
			//	this.destinationId = this.$route.query.destId;
			//}
		},
		methods: {
			toggleConnecting(){
				if (this.connectingFlight == 'No'){
					this.connectingFlight = 'Yes'
				} else {
					this.connectingFlight = 'No'
				}
			}
		}
	}


</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style src="../css/claims.css">
</style>
