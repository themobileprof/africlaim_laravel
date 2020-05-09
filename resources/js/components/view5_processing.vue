<template>
<div class='col-md-12'>
	
	<div class="row">
		<div>
			  <img :src="'/img/going.gif'" alt="Processing">
		</div>
		
	</div>
	<div>
		<!--<span v-on:click="processForm">Click </span>-->
		<!--Output: {{ output }}-->
	</div>
	
</div>
</template>

<script>
    export default {
		data() {
			return {
				formFields: {},
				output: ''
			}
		},
		mounted() {
			this.formFields = this.$store.getters.getFields
			setTimeout(() => this.processForm(), 500);

		},
		methods: {
			processForm: function(){

				let dbody = this;
				axios.post('/claim/processor', this.formFields)

				.then(function (response) {
					var claim = response.data
					window.location.replace("/register/" + claim)
					dbody.output = "<a href='/register/".claim."' target='_top'> Click to Continue </a>";
				})

				.catch(function (error) {
					dbody.output = error;
				});

			}
		}
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style src="../css/claims.css">
</style>
<style scoped>
.allwhite {
	background-color: #FFF;
}
</style>
