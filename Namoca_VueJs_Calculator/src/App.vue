<template>
  <div id="app">
    <calculator></calculator>
  </div>
</template>

<script>
import Calculator from './components/Calculator.vue'

export default {
  name: 'App',
  components: {
    Calculator
  }
}
</script>

<style>
  body {
    display: flex;
    justify-content: center;
    align-items: center;

	background-color: #ff6600; background-image: url(img/bg.jpg);
	background-repeat: repeat-x;
    background-size: cover;
  }
</style>
