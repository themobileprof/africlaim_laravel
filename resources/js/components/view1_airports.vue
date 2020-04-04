<template>
  <div class='col-md-12 form-style'>
		<div class="row claims-desc">
			To find out if you are eligible for compensation, kindly fill out your flight information
		</div>
		<div class="row">
    
		<div class="col-xs-12 col-md-4">
			<label class="control-label">
				Departure
			</label>
			<input id="start-airport" name="start-airport" v-model="startquery" v-on:keyup="autoComplete('departure')" class="autocomplete-input" type="text" placeholder="Departed from" autocomplete="off" maxlength="25">
			<div class="panel-footer" v-if="departures.length">
				<ul class="list-group">
					<li class="list-group-item" v-for="departure in departures" v-bind:key="departure">
					{{ departure.name }}
					</li>
				</ul>
			</div>
	  </div>
  
	  <div class="col-xs-12 col-md-4">
			<label class="control-label">
				Final destination
			</label>
		<input id="end-airport" name="end-airport" v-model="endquery" v-on:keyup="autoComplete('arrival')" class="autocomplete-input" type="text" placeholder="Arrived at" autocomplete="off" maxlength="25">
			<div class="panel-footer" v-if="arrivals.length">
				<ul class="list-group">
					<li class="list-group-item" v-for="arrival in arrivals" v-bind:key="arrival">
						{{ arrival.name }}
					</li>
				</ul>
			</div>
		  </div>
  

    </div>
	<div>

	</div>
</div>
</template>

<script>
    export default {
        data(){
           return {
            startquery: '',
            endquery: '',
            departures: [],
            arrivals: []
           }
          },
          methods: {
           autoComplete(airport){
               let query = '';

               if (airport == 'departure'){
                   this.departures = [];
                   query = this.startquery;
               } else if (airport == 'arrival') {
                   this.arrivals = [];
                   query = this.endquery;
               }


            if(query.length > 2){
             axios.get('/api/airports/' + query).then(response => {
                 // console.log(response.data);
                 // response.data = JSON.parse(response.data);
                 // response.data.forEach((airport)=>{
                 //   console.log(airport);
                 //   this.airports.push(airport);

                 // });

               if (airport == 'departure'){
                    this.departures = response.data;
               } else if (airport == 'arrival') {
                    this.arrivals = response.data;
               }
             });
            }
           }
          }
    }

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style src="../css/view1_airports.css">

</style>
