<template>
    <div id="ember12" class="ember-view"><!---->
  <div class="claim-form ">
  <header id="ember13" class="fixed __12871 ember-view">
    <!-- <div class="container"> -->
  <!-- <nav role="navigation" class="navbar">
    <table class="nav-table">
      <td>
        <div class="navbar-header"> -->
<!---->
<!-- <a data-ga-element="Logo" data-ga-section="Header" href="https://www.airhelp.com/en/" id="ember14" class="__1ee82 ga-event ember-view">            AirHelp
</a>        </div>
      </td> -->
      <!-- <td class="profile-area"> -->
        <!-- <div class="navbar-right">
          <ul class="navbar-nav">
          </ul> -->
        <!-- </div>
      </td>
    </table>
  </nav>
</div> -->

<!----></header>
  <div class="container claims">
<!---->    <div class="row">
        <div class="col-sm-3">
          <div id="ember15" class="navigation-left __79210 ember-view">  <ul>
      <li id="ember17" class="active ember-view">  <span class="icon">
    <i>1</i>
  </span>
<span>Eligibility check</span>
</li>
      <li id="ember19" class="ember-view">  <span class="icon">
    <i>2</i>
  </span>
<span>Additional information</span>
</li>
      <li id="ember21" class="ember-view">  <span class="icon">
    <i>3</i>
  </span>
<span>Documents</span>
</li>
      <li id="ember23" class="ember-view">  <span class="icon">
    <i>4</i>
  </span>
<span>Finish!</span>
</li>
  </ul>

<div class="hidden-xs">
  <div id="ember24" class="airhelp-mentions __5c2ed ember-view"><!----><p>
  <span id="ember25" class="ember-view">"Since it launched, AirHelp has been doing the dirty work on behalf of its customers, and it's not afraid to take airlines to court."
</span>
</p>
<a href="http://money.cnn.com/gallery/technology/2015/06/24/upstart30-simplifiers/2.html" target="_blank">
  <span class="logo cnn"></span>
</a>
  <div id="ember26" class="badges __8b0d1 ember-view"><div id="ember27" class="badge-logo __1a487 norton ember-view"></div>
<div id="ember28" class="badge-logo __1a487 trustpilot ember-view"></div>
</div>
</div>
</div>
</div>
        </div>
      <div id="ember29" class="__3e3b6 ember-view"><div id="ember31" class="col-xs-12 col-sm-9 __f8a8a ember-view"><div class="right-column ">
    <div id="ember32" class="__94628 ember-view"><div class="box">
  <!-- <div class="eu-info">
    <img src="/assets/images/claim-enquiry/eu-flag/eu-flag-b5a63742a1bc962cb1ffd253c7d05a7a.svg" class="flag" alt="">
    <p class="announcement">AirHelp enforces EU regulation EC261</p>
  </div> -->
</div>
</div>

      <div data-test-selector="human-agent-header" id="ember33" class="agent-header __8df50 ember-view"><img class="avatar" src="/assets/images/mobile-funnel/human-agent-dfb283582f68537917ad2ac0451401e6.png" alt="">
<!-- <div class="agent-data">
  <span class="name">Jane</span>
  <span class="role">Your AirHelp Assistant</span>
</div> -->
</div>

  <div id="ember34" class="column-content content __12441 graybox-active ember-view"><div class="heading-section">
      <h2 class="heading">
        Hi! Let’s check if your flight is eligible for compensation.<br>Where did you fly to?
      </h2>
</div>

  <div class="block-content">
        <div id="ember35" class="ember-view"><div class="row">
  <div class="col-md-6">
    <label class="control-label">
      Departed from
    </label>

    <input data-ga-label="trip_details:start_destination" data-ga-action="selected" data-ga-category="eligibility_check" name="departure_airport" placeholder="e.g. New York or JFK" id="ember36" class="departure_airport ember-text-field ember-view ui-autocomplete-input" type="text" autocomplete="off" maxlength="25" autocorrect="off" autocapitalize="off" spellcheck="false">

    <span class="hidden-airport-values">
      <input name="airport_code" id="ember37" class="ember-text-field ember-view" type="hidden" value="LHR">
    </span>
  </div>

  <div class="col-md-6">
    <label class="control-label">
      Final destination
    </label>

    <input data-ga-label="trip_details:final_destination" data-ga-action="selected" data-ga-category="eligibility_check" name="arrival_airport" placeholder="e.g. London or LHR" id="ember38" class="arrival_airport ember-text-field ember-view ui-autocomplete-input" type="text" autocomplete="off" maxlength="25" autocorrect="off" autocapitalize="off" spellcheck="false">

    <span class="hidden-airport-values">
      <input name="airport_code" id="ember39" class="ember-text-field ember-view" type="hidden" value="HKS">
    </span>
  </div>
</div>
</div>

  </div>
</div>
<div id="ember40" class="column-content content __12441 graybox-active ember-view"><div class="heading-section">
      <h2 class="heading">
        Did you have any connecting flights?
      </h2>
</div>

  <div class="block-content">
        <div id="ember41" class="ember-view"><div role="group" id="ember42" class="buttons-group __171e0 ember-view">
  <button id="connectingFlightsYes" class="ga-event buttons-group-item __c939e ember-view"><span class="button-hole "></span>
<span class="button-text">
    Yes
</span>
</button>

  <button id="connectingFlightsNo" class="ga-event buttons-group-item __c939e active ember-view"><span class="button-hole active"></span>
<div class="button-text">
            <b-radio v-model="radio"
                native-value="success"
                type="is-success">
                No
            </b-radio>
        </div>
</button>

</div></div>

  </div>
</div>
<!---->
<div id="ember43" class="funnel-hint no-win-no-fee __1cebd ember-view"><div class="icon-column">
  <i id="ember44" class="ah-icon __60d63 fah fah-info-fill ember-view"></i>
</div>
<div class="label-column">
        No risk. Submitting a claim is absolutely <b>free of charge</b>.

</div>
</div>

    <div id="ember45" class="__547f4 ember-view"><div class="form-actions">
  <span class="action">
<span id="ember46" class="action __ad4e8 ember-view"><button id="ember47" class="ah-ui-button-positive __dabce ember-view">        Continue
        <i id="ember48" class="ah-icon __60d63 fah fah-arrow-right-short ember-view"></i>

</button>
</span>
<!---->
<!---->  </span>
</div>
</div>
</div>
</div></div>

    </div>
  </div>

  <!-- <footer id="ember49" class="__7e189 ember-view"><div class="container">
  <div class="row">
    <div class="col col-xs-6 col-sm-10 col-md-10 left">
      <ul>
          <li class="btn-langs ga-event" data-ga-section="Footer" data-ga-element="LanguageCurrency">
            <a href="#" id="lang" data-toggle="modal" data-target="#select-language-and-currency" class="lnk">
              <span class="language">EN</span>
              <span class="delimeter">/</span>
              <span class="currency">USD</span>

              <i id="ember50" class="ah-icon __60d63 fa fa-angle-down ember-view"></i>
            </a>
          </li>
        <li class="ga-event" data-ga-section="Footer" data-ga-element="AirPassengerRights">
          <a href="https://www.airhelp.com/en/know-your-rights" target="_blank">
            Air Passenger Rights
          </a>
        </li>
        <li class="ga-event" data-ga-section="Footer" data-ga-element="Help">
          <a href="https://www.airhelp.com/en/help" target="_blank">
            Help
          </a>
        </li>
        <li class="ga-event" data-ga-section="Footer" data-ga-element="Terms">
          <a href="https://www.airhelp.com/en/terms" target="_blank">
            Terms and Conditions
          </a>
        </li>
          <li class="ga-event" data-ga-section="Footer" data-ga-element="PrivacyPolicy">
            <a href="https://www.airhelp.com/en/privacy" target="_blank">
              Privacy Policy
            </a>
          </li>
   </ul>
    </div>
    <div class="col col-xs-6 col-sm-2 col-md-2 right">
      <ul>
        <li>
          <span id="ember51" class="ember-view">©
</span>
          2020
          AirHelp
        </li>
      </ul>
    </div>
  </div> -->

<!-- </div> -->

  <!-- <div id="ember52" class="__e91c9 ember-view"><div id="select-language-and-currency" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-xs-12 col-sm-6">
            <h2>Select Language</h2>

            <ul class="languages">
                <li>
                  <a class="cs" role="button" data-ember-action="" data-ember-action-54="54">
                    Čeština
                  </a>
                </li>
                <li>
                  <a class="de" role="button" data-ember-action="" data-ember-action-56="56">
                    Deutsch
                  </a>
                </li>
                <li>
                  <a class="da" role="button" data-ember-action="" data-ember-action-58="58">
                    Dansk
                  </a>
                </li>
                <li>
                  <a class="el" role="button" data-ember-action="" data-ember-action-60="60">
                    Ελληνικά
                  </a>
                </li>
                <li>
                  <a class="es" role="button" data-ember-action="" data-ember-action-62="62">
                    Español
                  </a>
                </li>
                <li>
                  <a class="active en" role="button" data-ember-action="" data-ember-action-64="64">
                    English
                  </a>
                </li>
                <li>
                  <a class="fi" role="button" data-ember-action="" data-ember-action-66="66">
                    Suomi
                  </a>
                </li>
                <li>
                  <a class="fr" role="button" data-ember-action="" data-ember-action-68="68">
                    Français
                  </a>
                </li>
                <li>
                  <a class="it" role="button" data-ember-action="" data-ember-action-70="70">
                    Italiano
                  </a>
                </li>
                <li>
                  <a class="nb" role="button" data-ember-action="" data-ember-action-72="72">
                    Norsk
                  </a>
                </li>
                <li>
                  <a class="nl" role="button" data-ember-action="" data-ember-action-74="74">
                    Nederlands
                  </a>
                </li>
                <li>
                  <a class="pl" role="button" data-ember-action="" data-ember-action-76="76">
                    Polski
                  </a>
                </li>
                <li>
                  <a class="pt" role="button" data-ember-action="" data-ember-action-78="78">
                    Português (Portugal)
                  </a>
                </li>
                <li>
                  <a class="pt-BR" role="button" data-ember-action="" data-ember-action-80="80">
                    Português (Brasil)
                  </a>
                </li>
                <li>
                  <a class="ru" role="button" data-ember-action="" data-ember-action-82="82">
                    Русский
                  </a>
                </li>
                <li>
                  <a class="ro" role="button" data-ember-action="" data-ember-action-84="84">
                    Română
                  </a>
                </li>
                <li>
                  <a class="sv" role="button" data-ember-action="" data-ember-action-86="86">
                    Svenska
                  </a>
                </li>
            </ul>
          </div>

          <div class="col-xs-12 col-sm-6">
            <h2>Select Currency</h2>

            <ul class="currencies">
                <li>
                  <a class="eur" role="button" data-ember-action="" data-ember-action-88="88">
                    <span>
                      EUR
                    </span>
                    Euro
                  </a>
                </li>
                <li>
                  <a class="active usd" role="button" data-ember-action="" data-ember-action-90="90">
                    <span>
                      USD
                    </span>
                    US Dollar
                  </a>
                </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="modal-footer">
        <div class="modal-footer-content">
          <a data-dismiss="modal" data-target="#select-language-and-currency" href="#" class="btn btn-default" role="button">
            Cancel
          </a>
          <a class="btn btn-primary set-language-and-currency" role="button" data-ember-action="" data-ember-action-91="91">
            Apply
          </a>
        </div>
      </div>

      <button aria-hidden="true" data-dismiss="modal" class="close" type="button">
        ×
      </button>
    </div>
  </div>
</div>
</div> -->
<!-- 
</footer> -->
</div>


</div>
</template>

<script>
export default {
    name: 'view2_flight_date'
}
</script>

<style src="../css/view2_flight_date.css">

</style>