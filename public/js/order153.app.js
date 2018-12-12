var ordersApp = new Vue({
  el: '#orderMain',
  data: {
    Deere: {
      SalesOrder: "",
      SoldToParty: "",
      CustRef: "",
      DeliveryDate: "",
      OverallStatus: "",
      NetValue: "",
      DocumentDate: ""
    },

    orders: [],
  },

methods: {

  fetchOrder153(){
    fetch('api/salesorder153.php')
    .then( response => response.json() )
    .then( json => {ordersApp.orders = json} )
    .catch( err => {
      console.log('ORDER FETCH ERROR:');
      console.log(err);
    })
  },


},

  created () {

    this.fetchOrder153();

  }
})
