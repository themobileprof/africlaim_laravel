
<template>
	<div>		
		<input :id="input_name" :name="input_name" v-model="query" v-on:keyup="autoComplete" class="autocomplete-input" type="text" :placeholder="placehold" v-on:keydown.down="onArrowDown" v-on:keydown.up="onArrowUp" v-on:keydown.enter="onEnter" maxlength="25">
		<div class="panel-footer autocomplete-results-panel" v-if="airports.length">
			<ul class="list-group autocomplete-results">
				<li class="list-group-item autocomplete-result" v-for="(airport, i) in airports" v-bind:key="i" v-on:click="setResult(airport.name)" :class="{ 'is-active': i === arrowCounter }">
					{{ airport.name }}
				</li>
			</ul>
		</div>
	</div>


</template>

<script>
    export default {
		props: ['input_text','placehold_text'],

        data(){
           return {
            input_name: this.input_text,
		    placehold: this.placehold_text,
			query: '',
            airports: [],
			arrowCounter: -1,
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
			  
			  setResult(airport) {
					this.query = airport;
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
		  },
		  destroyed() {
			document.removeEventListener('click', this.handleClickOutside);
		  }
    }


</script>

