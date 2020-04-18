<template>
<transition name="fade">
	<div class="row claims-desc">
		What happened to the flight?
	</div>
	<div class="row">
		<div class="col-md-8 my-4">
			<div class="btn-group btn-group-toggle" data-toggle="buttons">
				<label class="btn btn-primary">
					<input type="radio" name="claimType" id="delayClaim" value="delayClaim" autocomplete="off" v-on:click="$emit('claimType')" v-model="claimType"> Delayed Flight
				</label>
				<label class="btn btn-primary">
					<input type="radio" name="claimType" id="cancelClaim" value="cancelClaim" v-on:click="$emit('claimType')" v-model="claimType"> Canceled Flight
				</label>
				<label class="btn btn-primary">
					<input type="radio" name="claimType" id="denyclaim" value="denyClaim" v-on:click="$emit('claimType')" v-model="claimType"> Denied Boarding
				</label>
			</div>
		</div>
	</div>
</transition>
</template>
<script>
export default {
	data() {
		return {
			claimType: ''
		}
	},
}
</script>
