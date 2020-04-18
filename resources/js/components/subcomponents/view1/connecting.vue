<template>
<div class="col-md-12">
	<div class="row">
		<button type="button" class="btn bg-danger text-white btn-sm" v-on:click="addConnection"> <i class="fas fa-plus"></i> Add Connecting Flight</button>
	</div>
	<div class="row py-2" v-if="connections.length" v-for="(connection, conn) in connections" v-bind:key="conn">
		<div class="input-group col-md-8 col-11">
			<airport :input_text="connection" placehold_text='What is your next connecting airport'></airport>
			<button class="btn bg-transparent" style="position:relative; margin-left: -40px; z-index: 100;">
				<i class="fa fa-close" v-on:click="removeConnection(conn)" style="color:red"></i>
			</button>
		</div>
		<div class="col-md-4 col-1"></div>
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
				this.connections.push('conn' + this.connCount)
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
