<template>
	<transition name="fade">
		<div class="claims-box col-md-8">
			<div class="row p-4 claims-bold">
				How many days in advance did the airline notify you of the cancellation?
			</div>
			<div class="row p-4">
				<select id="advanceCancel" name="advanceCancel" class="selectpicker show-tick" data-style="btn-primary" v-model="advanceCancel" v-on:change="storeField" title="Advanced Notification">
				  <option value="less14">Less than 14 days</option>
				  <option value="more14">More than 14 days</option>
				</select>
			</div>
		</div>
	</transition>
</template>

<script>
export default {
	data() {
		return {
			advanceCancel: ''
		}
	},
	mounted() {
		$('select').selectpicker();
	},
	methods: {
		storeField: function () {
			this.$store.commit('ADD_FIELD', { 'advanceCancel': this.advanceCancel })
			this.$emit('notified')
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
