<template>
  <div class='form-style'>
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
  name: 'Form',
  props: {
    msg: String
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
.jumbotron-autocomplete__start-airport-input {
    background-image: url(https://static.airhelp.com/images/front-page/marker.svg?ver=1534257192);
    background-position: 16px center;
    background-repeat: no-repeat;
    background-size: 24px;  
    border-left: 1px solid #c6d5e6;
    padding-right: 16px;
    height: 56px;
    width: 100%;
    padding-left: 56px;
    font-size: 17px;
    font-weight: 400;
    line-height: 1.53;
    border-radius: 3px;
    color: #536273;
    outline: none;
}

input{
    text-rendering: auto;
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    text-shadow: none;
    display: inline-block;
    text-align: start;
    background-color: -internal-light-dark-color(white, black);
}

.jumbotron-autocomplete__flight-destination-input {
    background-image: url(https://static.airhelp.com/images/front-page/marker.svg?ver=1534257192);
    background-position: 16px center;
    background-repeat: no-repeat;
    background-size: 24px;
    padding-right: 16px;
    border: 1px solid #c6d5e6;
    height: 56px;
    width: 100%;
    padding-left: 56px;
    font-size: 17px;
    font-weight: 400;
    line-height: 1.53;
    border-radius: 3px;
    color: #536273;
    outline: none;
}

.fp-jumbotron-header .jumbotron-autocomplete__cta-btn {
    max-width: 360px;
    float: none;
    margin-bottom: 16px;
    height: 64px;
}
.ah-btn--positive {
    box-shadow: 0 8px 16px 0 rgba(83,99,115,0.32);
    transition: box-shadow 0.2s ease-in-out;
    color: #fff;
    background-color: #1b8eff;
    font-weight: 600;
}
.ah-btn-large{
  white-space: normal;
    word-wrap: break-word;
    display: -webkit-inline-box;
    display: inline-flex;
    text-align: center;
    -webkit-box-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    align-items: center;
    border-radius: 3px;
    text-decoration: none;
    cursor: pointer;
}

.col-md-4 {
    width: 33.33333333%;
}
.col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9 {
    float: left;
}

element.style {
}

.fp-jumbotron-header .jumbotron-autocomplete__cta-btn {
    box-shadow: none;
}
.fp-jumbotron-header .jumbotron-autocomplete__cta-btn {
    margin-bottom: 32px;
}

.fp-jumbotron-header .jumbotron-autocomplete__cta-btn {
    box-shadow: none;
}
.fp-jumbotron-header .jumbotron-autocomplete__cta-btn {
    margin-bottom: 32px;
}

.col-md-4 {
    width: 33.33333333%;
}

.col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9 {
    float: left;
}
.col-xs-12 {
    width: 100%;
}
.col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 {
    float: left;
}
.col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 {
    position: relative;
    min-height: 1px;
    padding-left: 15px;
    padding-right: 15px;
}
</style>
