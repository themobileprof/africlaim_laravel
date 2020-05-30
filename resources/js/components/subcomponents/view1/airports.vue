<template>
	<div class="col-12" style="padding-left: 0px; padding-right: 0px;">		
		<input :id="input_name" :name="input_name" v-model="query" class="autocomplete-input" type="text" :placeholder="placehold" v-on:keydown.down="onArrowDown" v-on:keydown.up="onArrowUp" v-on:keydown.tab="onEnter">


			<div class="panel-footer autocomplete-results-panel">
                 <div v-show="loader">
                   <img :src="'/img/turning.gif'" style="height:30px; padding-left:10px;" alt="loading...">
                 </div>
                 <ul class="list-group autocomplete-results" v-if="airports.length">
                     <li class="list-group-item autocomplete-result" v-for="(airport, i) in airports" v-bind:key="i" v-on:click="setResult(airport.name, airport.IATA)" :class="{ 'is-active': i === arrowCounter }">
                         {{ airport.name }} <br />
                         <small class="text-secondary" style="font-weight: bold;"><i class="fas fa-map-marker-alt"></i> {{ airport.city }}, {{ airport.country_id }} </small>
                     </li>
                 </ul>
             </div>
 



		<input :id="input_name + 'Id'" :name="input_name + 'Id'" type="hidden" v-model="airportId">
	</div>
</template>

<script>
	import { mapState } from 'vuex'
    
	export default {
		props: ['input_text','placehold_text','airportParam'],

        data(){
           return {
				input_name: this.input_text,
				placehold: this.placehold_text,
			    airportId: this.airportParam,

				query: '',
				airports: [],
				arrowCounter: -1,
			   filteredData: [],
			   loader: false, // Loading Animator under input
			   removedrop: false,
			   test: '',
           }
          },
          methods: {
			   autoComplete(){
				if(this.query.length > 2){
					// axios.get('/api/airports/' + this.query).then(response => {
					// this.airports = response.data;
				 //});
					var dbody = this;
					dbody.airports = this.$store.getters.get_airports[dbody.query];

				}
			   },
			  
			  setResult(airport, airportId) {
				  this.loader = false;
					this.query = airport;
					this.airportId = airportId;	
				    this.airports = []; // reset dropdown

				  // Search random string to reset Vuex>airports>airports
					this.$store.dispatch('load_airports', "njuhjygtrhi")

				  this.removedrop = true;
					this.storeField();
			  },
			
				storeField: function () {
				  let payload = {}
				  payload[this.input_name] = this.airportId;

					this.$store.commit('ADD_FIELD', payload)
					
				  this.$emit('selected', this.airportId)
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
				this.setResult(this.airports[this.arrowCounter].name, this.airports[this.arrowCounter].id)

				this.arrowCounter = -1;
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
					 this.setResult(response.data.airport.name, response.data.airport.IATA);
				 })
				 .catch(()=>{
                  
                  console.log("Invalid Airport Id");
                  
               });
			 }
		  },
		watch: {
			query: function (){
				let b = this;
				
				if (this.query.length < 1){

					// hide loader
					this.loader = false;
				} else if (this.query.length <= 2){
					// Show loader
					this.loader = true;

					// Search from Server
					this.$store.dispatch('load_airports', this.query)


					if (this.filteredAirports){
						this.airports = this.filteredAirports;
					}
				} else if (this.query.length > 2){

					// Show loader
					this.loader = true;

					// Search from Client

					if (this.removedrop == true){  // If user just selected an option, remove the dropdown
						
						this.removedrop = false;
						this.loader = false;
					
					} else { 
						// 

						if (this.filteredAirports.length > 0 && this.query.length != 2){ // if there is content from the database, filter based on current query

							let new_airports = this.filteredAirports;
							this.airports = new_airports.filter(
								new_airports =>
									new_airports.name.toLowerCase().includes(this.query.toLowerCase()) ||
									new_airports.city.toLowerCase().includes(this.query.toLowerCase())
							);

							if (this.airports.length > 0){ // if there is content based on the current query, remove the loading image
								this.loader = false;
							}

						} else { // If there is no content from the database, try getting content again
							this.loader = true;
							if (this.query.length == 3 || this.query.length == 6){
								this.$store.dispatch('load_airports', this.query)
							}
						}
					}

				}
			}
		},
		computed: {
			filteredAirports() {
				 let airports = this.$store.getters.get_airports;
				if (airports){
					return airports;
				} else {
					return false;
				}
			}
		},
		  destroyed() {
			document.removeEventListener('click', this.handleClickOutside);
		  }
    }


</script>
