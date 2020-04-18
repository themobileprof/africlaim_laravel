<template>
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
	<delayedTime v-if="delayedDiv" v-on:delayedHours="nextStep"></delayedTime>	

	<!-- advance notify div  -->
	<advanceNotify v-if="notifyDiv" v-on:notified="reasonDiv = true"></advanceNotify>

	<!-- Bumped Div -->
	<bumped v-if="bumpedDiv" v-on:bumped="reasonDiv = true"></bumped>

	<!-- Reason Div -->
	<reason v-if="reasonDiv"></reason>

	
	<div class="row">
		<div class="col-md-8">
			<a class="btn btn-primary btn-lg" href="/claims/route" role="button" style="width: 200px;">Next <i class="fas fa-angle-double-right"></i></a>
		</div>
	</div>
</div>
</template>

<script>
import delayedTime from './subcomponents/view4/delayedTime';   
import advanceNotify from './subcomponents/view4/advanceNotify';   
import first from './subcomponents/view4/first';   

export default {
		components: {
			delayedTime,
			advanceNotify,
			bumped,
		},	
		data() {
		  return {
			  delayedDiv: false,
			  notifyDiv: false,
			  bumpedDiv: false,
			  reasonDiv: false,
			  claimType: '',
		  }
		},
	methods: {
		showDelayTime(event) {
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
        mounted() {
            console.log('Flight date component mounted.')
        }
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
