<template>
	<div class="d-flex" id="wrapper">





		<!-- /#sidebar-wrapper -->
		<div class="bg-light border-right" id="sidebar-wrapper">
			<div class="sideover list-group list-group-flush">
				<li to="/claims/start" class="list-group-item list-group-item-action bg-light" v-bind:class="{ 'bg-dark': isStart,  'text-white': isStart }"><strong>Step 1:</strong> Departure and Arrival</li>
				<li to="/claims/flight_date" class="list-group-item list-group-item-action bg-light" v-bind:class="{ 'bg-dark': isDate,  'text-white': isDate }"><strong>Step 2:</strong> Flight Date</li>
				<li to="/claims/route" class="list-group-item list-group-item-action bg-light" v-bind:class="{ 'bg-dark': isRoute,  'text-white': isRoute }"><strong>Step 3:</strong> Select Route</li>
				<li to="/claims/complaint" class="list-group-item list-group-item-action bg-light" v-bind:class="{ 'bg-dark': isComplaint,  'text-white': isComplaint }"><strong>Step 4:</strong> Finishing</li>
			</div>
		</div>







		<!-- Page Content -->
        <div id="page-content-wrapper">
			

			<!--top navigation-->
			<topNav></topNav>



			<div class="container-fluid">
				<form class="form-wrapper">




					<transition name="slide-fade">
						<keep-alive>
							<router-view></router-view>
						</keep-alive>
					</transition>



				</form>
			</div>
		</div>





    </div>
</template>
<script>
import topNav from './top_nav.vue';
export default {
	components: {
		topNav,
	},
	data() {
		return {
			isStart: false,
			isDate: false,
			isRoute: false,
			isComplaint: false,
		}
	},
	created() {
		this.$router.push({ name: 'start' })
		this.isStart = true;
	},
	watch:{
		$route (to, from){
			//reset everything to false
			this.isStart = this.isDate = this.isRoute = this.isFinish = false;
			// Set for 'to' page
			if (to.name == 'start'){
				this.isStart = true;
			} else if (to.name == 'flight_date') {
				this.isDate = true;
			} else if (to.name == 'route') {
				this.isRoute = true;
			} else if (to.name == 'complaint') {
				this.isComplaint = true;
			} else {
				this.isStart = true;
			}
		}
	}, 
	updated() {
		document.body.scrollTop = document.body.scrollHeight;
	},
}
    </script>
