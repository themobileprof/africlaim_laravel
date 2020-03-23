<template>
    <div>
            <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <ul class="navbar-nav">
                    <router-link :to="{ name: 'airports' }" class="nav-link">Select Departure & Destination</router-link>
                    <router-link :to="{ name: 'flight_date' }" class="nav-link" >Departure Date</router-link>
                    <router-link :to="{ name: 'route' }" class="nav-link" >Select your Flight route</router-link>
                    <router-link :to="{ name: 'complaint' }" class="nav-link" >What is your Complaint?</router-link>
                </ul>
            </div>
        </nav>
        <main>
            <router-view></router-view>
        </main>
    </div>
</template>
<script>
    export default {}
</script>

