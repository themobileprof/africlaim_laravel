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
				  <label class="flight_label row" for="flight1">
					  <div class="flight_input col-1"><input type="radio" name="route" id="flight1" v-model="route" value="flight1"><span class="checkmark"></span></div>
					  <div class="flight_time col-4">7:55am <i class="fas fa-plane-departure fa-xs"></i> 6:30pm</div>
					  <div class="airline col-4">British Airways</div>
					  <div class="flight_number col-3">BA 178</div>
				  </label>
			  </li>
			  <li class="list-group-item  list-group-item-action list-group-item-success">
				  <label class="flight_label row" for="flight2">
					  <div class="flight_input col-1"><input type="radio" name="route" id="flight2" v-model="route" value="flight2"><span class="checkmark"></span></div>
					  <div class="flight_time col-4">7:55am <i class="fas fa-plane-departure fa-xs"></i> 6:30pm</div>
					  <div class="airline col-4">British Airways</div>
					  <div class="flight_number col-3">BA 178</div>
				  </label>
			  </li>
			  <li class="list-group-item  list-group-item-action list-group-item-success">
				  <label class="flight_label row" for="flight3">
					  <div class="flight_input col-1"><input type="radio" name="route" id="flight3" v-model="route" value="flight3"><span class="checkmark"></span></div>
					  <div class="flight_time col-4">7:55am <i class="fas fa-plane-departure fa-xs"></i> 6:30pm</div>
					  <div class="airline col-4">British Airways</div>
					  <div class="flight_number col-3">BA 178</div>
				  </label>
			  </li>
			</ul> 
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 py-4">
			<router-link class="btn btn-primary btn-lg" to="/claims/complaint" role="button" style="width: 200px;" v-if="showNext">Next <i class=" 	fas fa-angle-double-right"></i></router-link>
		<router-link class="btn btn-white btn-lg text-secondary ml-2" to="/claims/flight_date" role="button" style="width: 200px;"><i class="fas fa-angle-double-left"></i> Back</router-link>
		</div>
	</div>
</div>
</template>

<script>
    export default {
		data() {
		  return {
			mode: 'single',
			route: null,
			testing: '',
		  }
		},
		beforeRouteEnter(to, from, next) {
		  next(vm => {
		  })
			// Redirect to first page if user is not coming from the correct previous page
			if (from.path !== '/claims/flight_date') {
				next('/claims/start');
			}

			// Work in progress
			// Redirect to first page if user is not coming from the correct previous page and has not previously visited here // challenges with Vuex
		//	if (from.path !== '/claims/flight_date' && this.$store.getters.isVisited(this.page === false)) {
		//		next('/claims/start');
		//	}

		},
        mounted() {

			this.$store.dispatch("addHistory", this.page) // Set Vuex page
            console.log('Route component mounted.')
        },
		methods: {
			setRoute(Route){
				this.route = Route
			},
			changetest(val){
				this.testing = val; // Random var for testing Vuex getter value
			}
		},
		computed: {
			showNext : function() {
				 if(this.route) {
				   // perform some logic on preference
				   // logic results true or false
				   return true
				 } else {
					 return false
				 }
			}
		},
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style src="../css/claims.css">
</style>
<style scoped>
.top_label {
	font-size: 11px;
}


/* The container */
.flight_label {
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  margin-bottom: 0;
  font-size: 12px;
}

/* Hide the browser's default radio button */
.flight_label input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 20px;
  width: 20px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.flight_label:hover input ~ .checkmark {
  background-color: #FFFFFF;
}

/* When the radio button is checked, add a blue background */
.flight_label input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.flight_label input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.flight_label .checkmark:after {
 	top: 6px;
	left: 6px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}
</style>
</style>
