<template>
	<transition name="fade">
		<div class="claims-box col-md-8" id="reasonDiv">
			<div class="row p-4 claims-bold">
			What did the airline say was the reason?
			</div>
			<div class="row p-4">
				<select id="airlineReason" name="airlineReason" v-model="airlineReason" class="selectpicker show-tick" title="Reason for delay" data-style="btn-primary">
				  <option value="technical">Technical problem</option>
				  <option value="bad_weather">Bad weather conditions</option>
				  <option value="other_flights">Influence by other flights</option>
				  <option value="airport">Issues with airport</option>
				  <option value="strike">Strike</option>
				  <option value="no_reason">No reason given</option>
				  <option value="forgot">Don't Remember</option>
				  <option value="force_majeure">Force majeure</option>
				</select>
			</div>
		</div>	
	</transition>
</template>
<script>
export default {
	data() {
		return {
			airlineReason: ''
		}
	}
}
</script>
