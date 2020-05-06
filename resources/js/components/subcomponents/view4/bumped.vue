<template>
	<transition name="fade">
		<div class="claims-box col-md-8">
			<div class="row p-4 claims-bold" id="bumpedDiv">
				Did you volunteer to get bumped?
			</div>
			<div class="row p-4">
				<select id="bumped" name="bumped" v-model="bumped" v-on:change="storeField" class="selectpicker show-tick" title="Were you bumped?" data-style="btn-primary">
				  <option value="yes">Yes</option>
				  <option value="no">No</option>
				</select>
			</div>
		</div>
	</transition>
</template>
<script>
export default {
	data() {
		return {
			bumped: ''
		}
	},
	mounted() {
		$('select').selectpicker();
	},
	methods: {
		storeField: function () {
			this.$store.commit('ADD_FIELD', { 'bumped': this.bumped })
			this.$emit('bumped')
		},
	},

}
</script>
