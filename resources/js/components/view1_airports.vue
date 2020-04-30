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
				@selected="departureFilled = true"
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
				@selected="destinationFilled = true"
			></airport>
	  </div>
		<div class="col-md-4">
		
		</div>

	</div>
	<div class="row p-4 mt-4">
		<div class="col-7 col-md-4">
			<div class="h3 control-label text-md-right">
				Were there any connecting flights?
			</div>
		</div>
		<div class="col-5 col-md-4">
			<div class="btn-group btn-group-toggle" data-toggle="buttons">
				<label class="btn btn-primary">
					<input type="radio" name="connectingFlight" id="connectingYes" value="Yes" v-on:click="toggleConnecting('Yes')" v-model="connectingFlight"> Yes
				</label>
				<label class="btn btn-primary">
					<input type="radio" name="connectingFlight" id="connectingNo" value="No" v-on:click="toggleConnecting('No')" v-model="connectingFlight"> No
				</label>
			</div>
		</div>
	</div>

	<connecting v-if="connectingFlight == 'Yes'"></connecting>

	<div class="row mt-4 py-4" style="padding-left: 15px;">
		<router-link class="btn btn-primary btn-lg mr-2" to="/claims/flight_date" role="button" style="width: 200px;" v-if="showNext">Next <i class="fas fa-angle-double-right"></i></router-link>
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
				destinationFilled: false,
				departureFilled: false,
			}
		},
		mounted(){
			//if (this.$route.query.destinationId && this.$route.query.departureId){
			//	this.departureId = this.$route.query.depId;
			//	this.destinationId = this.$route.query.destId;
			//}
		},
		computed: {
			showNext : function() {
				 if(this.destinationFilled && this.departureFilled && this.connectingFlight) {
				   // perform some logic on preference
				   // logic results true or false
				   return true
				 } else {
					 return false
				 }
			}
		},
		methods: {
			toggleConnecting(bool){
				this.connectingFlight = bool
			}
		}
	}


</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style src="../css/claims.css">
</style>
