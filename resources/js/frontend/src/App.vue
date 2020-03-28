<template>
  <div id="app">
    <ViewAirports />
  </div>
</template>

<script>
import ViewAirports from './components/view1_airports.vue'

export default {
  name: 'App',
  components: {
    ViewAirports
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
