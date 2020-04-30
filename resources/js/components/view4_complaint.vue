<template>
<transition name="slide-fade">
<div class='col-md-12 form-style'>




	<div class="row claims-desc">
		What happened to the flight?
	</div>
	<div class="row">
		<div class="col-md-8 my-4">
			<div class="btn-group btn-group-toggle" data-toggle="buttons">
				<label class="btn btn-primary">
					<input type="radio" name="claimType" id="delayClaim" value="delayClaim" autocomplete="off" v-on:click="showDelayTime" v-model="claimType"> Delayed Flight
				</label>
				<label class="btn btn-primary">
					<input type="radio" name="claimType" id="cancelClaim" value="cancelClaim" v-on:click="showDelayTime" v-model="claimType"> Canceled Flight
				</label>
				<label class="btn btn-primary">
					<input type="radio" name="claimType" id="denyclaim" value="denyClaim" v-on:click="showDelayTime" v-model="claimType"> Denied Boarding
				</label>
			</div>
		</div>
	</div>






	<!-- Component for hours delayed  -->
	<delayedTime v-if="delayedDiv" v-on:delayedHours="nextStep" :key="delayKey"></delayedTime>	

	<!-- advance notify div  -->
	<advanceNotify v-if="notifyDiv" v-on:notified="reasonDiv = true"></advanceNotify>

	<!-- Bumped Div -->
	<bumped v-if="bumpedDiv" v-on:bumped="reasonDiv = true"></bumped>

	<!-- Reason Div -->
	<reason v-if="reasonDiv"></reason>

	
	<div class="row">
		<div class="col-md-8 py-4">
			<button class="btn btn-success btn-lg" type="submit" style="width: 200px;" v-bind:class="{ disable: !reasonDiv }">Submit for Review </button>
			<router-link class="btn btn-white btn-lg text-secondary ml-2" to="/claims/route" role="button" style="width: 200px;"><i class="fas fa-angle-double-left"></i> Back</router-link>
		</div>
	</div>
</div>
</transition>
</template>

<script>
import delayedTime from './subcomponents/view4/delayedTime';   
import advanceNotify from './subcomponents/view4/advanceNotify';   
import bumped from './subcomponents/view4/bumped';   
import reason from './subcomponents/view4/reason';   

export default {
		components: {
			delayedTime,
			advanceNotify,
			bumped,
			reason,
		},	
		data() {
		  return {
			  delayedDiv: false,
			  notifyDiv: false,
			  bumpedDiv: false,
			  reasonDiv: false,
			  claimType: '',
			  delayKey: 0,
			  testing: '',
		  }
		},
	methods: {
		showDelayTime(event) {
			this.delayKey += 1; 
			
			this.claimType = event.target.value;
			this.delayedDiv = true;

			// reset others
			this.notifyDiv = false;
			this.bumpedDiv = false;
			this.reasonDiv = false;
		},
		nextStep(){
			if (this.claimType == "cancelClaim"){
				this.notifyDiv = true;
			} else if (this.claimType == "denyClaim"){
				this.bumpedDiv = true;
			} else {
				this.reasonDiv = true;
			}
		},    
		changetest(val){
			this.testing = val; // Random var for testing Vuex getter value
		}
	},
	beforeRouteEnter(to, from, next) {
	  next(vm => {
	  })
		// Redirect to first page if user is not coming from the correct previous page
		if (from.path !== '/claims/route') {
			next('/claims/start');
		}

		// Work in progress
		// Redirect to first page if user is not coming from the correct previous page and has not previously visited here // challenges with Vuex
	//	if (from.path !== '/claims/route' && this.$store.getters.isVisited(this.page === false)) {
	//		next('/claims/start');
	//	}

	},
	mounted() {

		this.$store.dispatch("addHistory", this.page) // Set Vuex page
		console.log('Complaint component mounted.')
	},
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style src="../css/claims.css">
</style>

<style>
.claims-bold {
	font-size: 16px;
}

.claims-box {
	padding-left: 20px;
	padding-top: 4px;
	margin-top: 25px;
	margin-bottom: 25px;
	border: 2px solid #2196F3;
	border-radius: 5px;
}
</style>
