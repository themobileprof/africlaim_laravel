<template>
<div class='col-md-12 form-style'>
	<div class="row claims-desc">
		To find out if you are eligible for compensation, kindly fill out your flight information
	</div>
	<div class="row">
	
		<div class="col-xs-12 col-md-4">
			<label for="start-airport" class="control-label">
				Departure
			</label>
			<airport 
				input_text='departure' 
				placehold_text='Departed from' 
		    ></airport>
	  </div>
  
	  <div class="col-xs-12 col-md-4">
			<label for="end-airport" class="control-label">
				Final destination
			</label>
			<airport input_text='destination' placehold_text='Arrived at'></airport>
	  </div>
		<div class="col-md-4">
		
		</div>

	</div>
	<div class="row p-4 mt-4">
		<div class="col-xs-8 col-md-4 pt-2">
			<label for="connecting_flight" class="control-label">
				Were there any connecting flights?
			</label>
		</div>
		<div class="col-xs-4 col-md-4">
			<input id="connecting_flight" name="connecting_flight" type="checkbox" data-on="Yes" data-off="No" data-toggle="toggle"  data-width="100">
		</div>
	</div>

	<div class="row p-4 mt-4">

		<div class="col-xs-12 col-md-12 pt-2">
			<label for="connecting_flight_list" class="control-label">
				List your connecting flight locations?
			</label>
			<airport input_text='connecting1' placehold_text='What is your connecting airport'></airport>
		</div>
	</div>
</div>
</template>

<script>
	import airport from './subcomponents/airports'

    export default {
		components: {
			airport
		}
	}


</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style src="../css/view1_airports.css">

</style>
