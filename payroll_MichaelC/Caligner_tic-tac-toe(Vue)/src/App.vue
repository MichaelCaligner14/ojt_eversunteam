<template>
  <div>
  
    <div id="app">
      <div id="details">
        <h2>Tic Tac Toe</h2>
      </div>
      <grid></grid>
      <button class="restart" @click="restart">Restart</button>
    </div>
  </div>
</template>

<script>
import Grid from './components/Grid.vue'
export default {
  components: { Grid },
  name: 'app',
  data () {
    return {

      wins: {
        O: 0,
        X: 0
      }
    }
  },
  methods: {
    restart () {
      Event.$emit('clearCell')
      Event.$emit('gridReset')
    
    }
  },
  created () {
    Event.$on('win', winner => this.wins[winner]++)
  }
}
</script>

<style>
body {
  background-color: #fff;
  color: #fff;
  font-family: 'Dosis', Helvetica, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  margin: 0px;
}
#app {
  margin: 0 auto;
  max-width: 400px;
  color: white;
  margin-top:5%;
}
h1 {
  text-transform: uppercase;
  font-weight: bold;
  font-size: 3em;
}
.restart {
  background-color: #e74c3c;
  color: #fff;
  border: 0px;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
  font-family: 'Dosis', Helvetica, sans-serif;
  font-size: 1.4em;
  font-weight: bold;
  margin: 0px;
  padding: 15px;
  width: 100%;
}
.restart:hover {
  background-color: #c0392b;
  cursor: pointer;
}
</style>