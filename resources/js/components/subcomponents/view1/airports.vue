<template>
	<div class="col-12" style="padding-left: 0px; padding-right: 0px;">		
		<input :id="input_name" :name="input_name" v-model="query" v-on:keyup="autoComplete" class="autocomplete-input" type="text" :placeholder="placehold" v-on:keydown.down="onArrowDown" v-on:keydown.up="onArrowUp" v-on:keydown.tab="onEnter" maxlength="25">
		<div class="panel-footer autocomplete-results-panel" v-if="airports.length">
			<ul class="list-group autocomplete-results">
				<li class="list-group-item autocomplete-result" v-for="(airport, i) in airports" v-bind:key="i" v-on:click="setResult(airport.name, airport.id)" :class="{ 'is-active': i === arrowCounter }">
					{{ airport.name }} <br />
					<small class="text-secondary" style="font-weight: bold;"><i class="fas fa-map-marker-alt"></i> {{ airport.city }}, {{ airport.country_id }} </small>
				</li>
			</ul>
		</div>
		<input :id="input_name + 'Id'" :name="input_name + 'Id'" type="hidden" v-model="airportId">
	</div>
</template>

<script>
    export default {
		props: ['input_text','placehold_text','airportParam'],

        data(){
           return {
				input_name: this.input_text,
				placehold: this.placehold_text,

				query: '',
				airports: [],
				arrowCounter: -1,
			    airportId: this.airportParam,
           }
          },
          methods: {
			   autoComplete(){
				if(this.query.length > 2){
					axios.get('/api/airports/' + this.query).then(response => {
					this.airports = response.data;
				 });
				}
			   },
			  
			  setResult(airport, airportId) {
					this.query = airport;
					this.airportId = airportId;	
				  this.airports = []; // reset dropdown
					
			  },

			  onArrowDown() {
				if (this.arrowCounter < this.airports.length) {
				  this.arrowCounter = this.arrowCounter + 1;
				}
			  },
			  onArrowUp() {
				if (this.arrowCounter > 0) {
				  this.arrowCounter = this.arrowCounter - 1;
				}
			  },
			  onEnter() {
				this.query = this.airports[this.arrowCounter].name;
				this.arrowCounter = -1;
				this.airports = []; // reset dropdown
			  },

			  handleClickOutside(evt) {
				  if (!this.$el.contains(evt.target)) {
					this.airports = []; // reset dropdown
					this.arrowCounter = -1;
				  }
				}
          },

		 mounted() {
			document.addEventListener('click', this.handleClickOutside);
			 if (this.airportId != undefined){
				 var thisAirportId = this.airportId;
				 axios.get('/api/airport/' + thisAirportId.substr(0, 6)).then(response => {
					this.query = response.data.name;
				 },
				 error => { console.log("Invalid " + this.input_text) });
			 }
		  },
		  destroyed() {
			document.removeEventListener('click', this.handleClickOutside);
		  }
    }


</script>
