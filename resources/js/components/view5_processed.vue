<template>
<div class='col-md-12 form-style'>
	<div class="row claims-desc">
		Select your flight below
	</div>
	<div class="row">
		<div class="col-md-8 my-4">
			 <div class="list-group list-group-flush">
			  <div class="list-group-item list-group-item-light">
				  <label class="top_label row">
					  <div class="col-1"></div>
					  <div class="col-4">Scheduled Time</div>
					  <div class="col-4">Airline</div>
					  <div class="col-3">Flight Number</div>
				  </label>
			  </div>
			 </div>
			 <ul class="list-group">
			  <li class="list-group-item list-group-item-action list-group-item-success">
				  You have been successfully registered
			  </li>
			</ul> 
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 py-4">
			
            <button class="btn btn-success btn-lg text-white ml-2" to="/claims/flight_date" type="submit" style="width: 200px;"><i class="fas fa-angle-double-left"></i> Back</button>
		</div>
	</div>
</div>
</template>

<script>
    export default {
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style src="../css/claims.css">
</style>
