<template>
	<transition name="fade">
		<div class="claims-box col-md-8" id="delayDiv">
			<div class="row p-4 claims-bold">
				What was the total delay once you arrived at the Destination airport?
			</div>
			<div class="row p-4">
				<select id="delayedHours" name="delayedHours" class="selectpicker show-tick" title="Total Delay"  v-model="delayedHours" v-on:change="storeField" data-style="btn-primary">

				  <option disabled value=""> Total Delay</option>
				  <option value="1"> 0 - 1 hour</option>
				  <option value="2"> 1 - 2 hours</option>
				  <option value="3"> 2 - 3 hours</option>
				  <option value="4"> 3 - 4 hours</option>
				  <option value="5"> 4+ hours</option>
				  <option value="-1"> Never Arrived</option>
				</select>
			</div>
		</div>
	</transition>
</template>
<script>
    export default {
		data() {
			return {
				delayedHours: ''
			}
		},
		mounted() {
			$('select').selectpicker();
		},
		methods: {
			storeField: function () {
				this.$store.commit('ADD_FIELD', { 'delayedHours': this.delayedHours })
				this.$emit('delayedHours')
			},
		},
	}
</script>
<style scoped> 
.fade-enter-active, .fade-leave-active {
  transition: opacity 0.25s ease-out;
}

.fade-enter, .fade-leave-to {
  opacity: 0;
}
</style>
