<template>
	<transition name="fade">
		<div class="claims-box col-md-8" id="advanceNotifyDiv">
			<div class="row p-4 claims-bold">
				How many days in advance did the airline notify you of the cancellation?
			</div>
			<div class="row p-4">
				<select id="advance_cancel" name="advance_cancel" class="fine-select" title="Advanced Notification">
				  <option value="less14">Less than 14 days</option>
				  <option value="more14">More than 14 days</option>
				</select>
			</div>
		</div>
	</transition>
</template>

<script>
	export default{}
</script>
<style scoped>
.fade-enter-active, .fade-leave-active {
  transition: opacity 0.25s ease-out;
}

.fade-enter, .fade-leave-to {
  opacity: 0;
}
</style>
