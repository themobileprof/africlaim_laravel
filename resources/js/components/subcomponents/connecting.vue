<template>
<div class="col-md-12">
	<div class="row">
		<button type="button" class="btn btn-primary" v-on:click="addConnection"> <strong>+</strong> Add Connecting Flight</button>
	</div>
	<div class="row p-2" v-if="connections.length" v-for="(connection, conn) in connections" v-bind:key="conn">
		<div class="col-xs-10 col-md-7">
			<airport :input_text="connection" placehold_text='What is your next connecting airport'></airport>
		</div>
		<div class="col-xs-2 col-md-1 p-1">
			<button v-on:click="removeConnection(conn)" class="btn btn-danger btn-sm">x</button>
		</div>
	</div>
</div>
</template>

<script>
	import airport from './airports'
    export default {
		components: {
			airport
		},
		data(){
			return {
				connections: [],
				connCount: 0,
			}
		},
		methods: {
			addConnection(){
				this.connections.push("'conn' + this.connCount")
				this.connCount = this.connCount + 1
			},

			removeConnection(key){
				this.connections.splice(key, 1)
			}
		}
    }

</script>
<style scoped>
.autocomplete-input {
  font-size: 13px;
}
</style>
