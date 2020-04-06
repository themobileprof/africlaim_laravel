
<template>
	<div>		
		<input id="{{ input_name }}" name="{{ input_name }}" v-model="query" v-on:keyup="autoComplete" class="autocomplete-input" type="text" placeholder="{{ placehold }}" autocomplete="off" maxlength="25">
		<div class="panel-footer" v-if="airports.length">
			<ul class="list-group">
				<li class="list-group-item" v-for="airport in airports" v-bind:key="airport">
					{{ airport.name }}
				</li>
			</ul>
		</div>
	</div>


</template>

<script>
    export default {
		props: ['input_text'], ['placehold_text']

        data(){
           return {
            input_name: this.input_text,
			   placehold: this.placehold_text,
			   query: '',
            airports: []
           }
          },
          methods: {
           autoComplete(){

                   this.airports = [];


            if(this.query.length > 2){
             axios.get('/api/airports/' + query).then(response => {
                 // console.log(response.data);
                 // response.data = JSON.parse(response.data);
                 // response.data.forEach((airport)=>{
                 //   console.log(airport);
                 //   this.airports.push(airport);

                 // });

				this.airports = response.data;
             });
            }
           }
          }
    }

</script>

