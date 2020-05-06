<template>
<div class='col-md-12 form-style'>
	
	<div class="row" style="margin-top:100px;">
		<div class="col-md-4"></div>
		<div class="col-md-4 my-4">
			  <img :src="'/img/moving.gif'" alt="Processing">
		</div>
		<div class="col-md-4"></div>
	</div>
	
</div>
</template>

<script>
    export default {
		data() {
			return {
				formFields: {}
			}
		},
		mounted() {
			this.formFields = this.$store.getters.getFields

			currentObj = this;

			axios.post('/claims/processor', this.formFields)

			.then(function (response) {
				currentObj.output = response.data;
			})

			.catch(function (error) {
				currentObj.output = error;
			});
		}
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style src="../css/claims.css">
</style>
