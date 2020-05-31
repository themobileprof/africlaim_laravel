<template>
<div>

			 <ul class="list-group">
			  <li v-if="flights.length === undefined || flights.main.length === undefined" class="list-group-item">
				What was your scheduled departure time? <input type="time" class="form-control" v-model="tof" value="00:00"> 
			</li>			  
			  <li class="list-group-item list-group-item-action list-group-item-success" v-for="(flight, i) in flights.main" v-bind:key="i">
				  <label class="flight_label row" :for="flight.id">
					  <div class="flight_input col-1"><input type="radio" name="route" :id="flight.id" v-model="route" :value="flight.id"><span class="checkmark"></span></div>
					  <div class="flight_time col-6">
						  <div class="text-uppercase font-weight-bold">
						  {{ flight.departure_airport }} <i class="fas fa-arrow-right fa-xs"></i> {{ flight.arrival_airport }}
						  </div>
						  {{ flight.departure_scheduled }} <i class="fas fa-plane-departure fa-xs"></i> {{ flight.arrival_scheduled }}
					  </div>
					  <div class="airline col-3">{{ flight.airline_name }}</div>
					  <div class="flight_number col-2">{{ flight.flight_iata }}</div>
				  </label>
			  </li>
						  
			</ul>

			<div class="claims-desc">Others:</div>

			<ul class="list-group">
			  <li class="list-group-item list-group-item-action list-group-item-white" v-for="(flight, i, index) in flights.others" v-bind:key="i" v-show="lst[i]">
				  <label class="flight_label row" :for="flight.id">
					  <div class="flight_input col-1"><input type="radio" name="route" :id="flight.id" v-model="route" :value="flight.id"><span class="checkmark"></span></div>
					  <div class="flight_time col-6">
						  <div class="text-uppercase font-weight-bold">
						  {{ flight.departure_airport }} <i class="fas fa-arrow-right fa-xs"></i> {{ flight.arrival_airport }}
						  </div>
						  {{ flight.departure_scheduled }} <i class="fas fa-plane-departure fa-xs"></i> {{ flight.arrival_scheduled }}

					  </div>
					  <div class="airline col-3">{{ flight.airline_name }}</div>
					  <div class="flight_number col-2">{{ flight.flight_iata }}</div>
				  </label>
			  </li>
			  
			</ul> 

			<div v-if="flights.others">
					<small v-on:click="showten" class="load">
						Load more ...
					</small> 
			</div>
</div>
</template>
<script>
export default {
	props: ['flightsData'],
	data() {
		return {
			flights: this.flightsData,
			route: null,
			lst: {'0':1, '1':1, '2':1, '3':1, '4':1, '5':1, '6':1, '7':1, '8':1, '9':1},
			offset: 10,
			size: 10,
			test: '',
			tof: '',
		}
	},
	methods: {
		showten(){
			let s = this.size
			while (s > 0){
				this.lst[this.offset] = 1
				s--;
				this.offset++
			}
			if (this.lst['0'] == 1){
				this.lst['0'] = 0
			} else {
				this.lst['0'] = 1;
			}
		},
		is_visible: function(index){
			if (this.lst[index]){
				return true;
			} else {
				return false;
			}
		},
		changeTest: function(index){
			this.test = index
		}
	},
	mounted() {

	},
	watch: {
		route: function (){
			this.$store.commit('ADD_FIELD', { 'route': this.route })
			this.$emit('route')
		},

		tof: function (){
			this.$store.commit('ADD_FIELD', { 'tof': this.tof })
			this.$emit('tof')
		}
	},
	computed: {

	}
}
</script>
<style scoped>

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

.load {
	color: #0000FF;
	cursor:pointer;
	text-decoration: underline;
}
</style>
