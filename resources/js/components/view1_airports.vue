<template>
  <div class='form-style'>
    <input type="text" placeholder="what are you looking for?" v-model="query" v-on:keyup="autoComplete" class="form-control">
  <div class="panel-footer" v-if="results.length">
   <ul class="list-group">
    <li class="list-group-item" v-for="result in results">
     {{ result.name }}
    </li>
   </ul>
  </div>



    <form class="jumbotron-autocomplete__form-wrapper">
    <div class="jumbotron-autocomplete__start-airport col-xs-12 col-md-4">
    <label class="sr-only" for="start-airport">Departed from</label>
    <meta property="target" itemprop="target">
    <input id="start-airport" class="jumbotron-autocomplete__start-airport-input c-autocomplete__input js-autocomplete-start-airport" type="text" name="query-input" placeholder="Departed from" autocomplete="off" airport_code="" data-gtm="Body,clicked,InputFrom,InputFrom" maxlength="25">
  </div>
  <div class="jumbotron-autocomplete__flight-destination col-xs-12 col-md-4">
    <label class="sr-only" for="flight-destination">Final destination</label>
    <input id="flight-destination" class="jumbotron-autocomplete__flight-destination-input c-autocomplete__input js-autocomplete-destination-airport" type="text" name="query" placeholder="Final destination" autocomplete="off" airport_code="" data-gtm="Body,clicked,InputTo,InputTo" maxlength="25">
  </div>
    <a id="check-compensation-button" href="https://app.airhelp.com/claims/new?lang=en" class="jumbotron-autocomplete__cta-btn ah-btn-large ah-btn--positive col-xs-12 col-md-4 js-autocomplete-submit" data-gtm="Body,clicked,check_your_flight,CheckYourCompensation" data-mpt="CheckYourCompensation" title="Check Compensation">Check Compensation</a>
    </form>
  </div>
</template>

<script>
    export default {
        data(){
           return {
            query: '',
            results: []
           }
          },
          methods: {
           autoComplete(){
            this.results = [];
            if(this.query.length > 2){
             axios.get('/api/airports',{params: {query: this.query}}).then(response => {
              this.results = response.data;
             });
            }
           }
          }
    }

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style src="../css/view1_airports.css">

</style>
