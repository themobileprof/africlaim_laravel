<template>
<div class='col-md-12 form-style'>


	<div id="finalize">

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






		<transition name="fade">
		<!-- Component for hours delayed  -->
		<delayedTime v-if="delayedDiv" v-on:delayedHours="nextStep" :key="delayKey"></delayedTime>	
		</transition>

		<transition name="fade">
		<!-- advance notify div  -->
		<advanceNotify v-if="notifyDiv" v-on:notified="reasonDiv = true"></advanceNotify>
		</transition>

		<transition name="fade">
		<!-- Bumped Div -->
		<bumped v-if="bumpedDiv" v-on:bumped="reasonDiv = true"></bumped>
		</transition>

		<transition name="fade">
		<!-- Reason Div -->
		<reason v-if="reasonDiv"></reason>
		</transition>

		
		<div ref="send">
			<div class="row">
				<div class="col-md-8 py-4">
					<router-link class="btn btn-success btn-lg text-white" to="/claims/processing" role="button" style="width: 200px;" v-bind:class="{ disable: !showFinish }">Submit for Review </router-link>
					<router-link class="btn btn-white btn-lg text-secondary ml-2" to="/claims/route" role="button" style="width: 200px;"><i class="fas fa-angle-double-left"></i> Back</router-link>
				</div>
			</div>
		</div>
	</div>
</div>
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
	updated() {
		$("html, body").animate({ scrollTop: $(document).height() }, 1000);
	},
	methods: {
		showDelayTime(event) {
			
			this.claimType = event.target.value;
			this.$store.commit('ADD_FIELD', { 'claimType': this.claimType })


			this.delayKey += 1; 
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
		submitClaim(){

			this.$emit("submit")
		},

		scrollToEnd: function() {    	
		  var container = vm.$refs.next;
		  container.scrollTop = container.scrollHeight;

			// var elem = this.$el
			// elem.scrollTop = elem.clientHeight;
		},
	},
	computed: {
		showFinish: function() {
			if (this.reasonDiv == true){
				return true
			} else {
				return false
			}
		}
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
