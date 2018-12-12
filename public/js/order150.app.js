var ordersApp = new Vue({
  el: '#orderMain',
  data: {
    turbine: [],
    sensor: [],
  },

methods: {

  fetchOrders(){
    fetch('api/salesorder.php')
    .then( response => response.json() )
    .then( json => {ordersApp.turbine = json} )
    .catch( err => {
      console.log('TURBINE FETCH ERROR:');
      console.log(err);
    })
  },

  fetchSensors(){
    fetch('api/sensor.php')
    .then( response => response.json() )
    .then( json => {turbineApp.sensor = json} )
    .catch( err => {
      console.log('SENSOR FETCH ERROR:');
      console.log(err);
    })
  }

},

  created () {

    this.fetchTurbines();
    this.fetchSensors();

  }
})
