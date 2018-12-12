var ordersApp = new Vue({
  el: '#orderMain',
  data: {
      SalesOrder: "",
      SoldToParty: "",
      CustRef: "",
      DeliveryDate: "",
      OverallStatus: "",
      NetValue: "",
      DocumentDate: "",
      
    orders: [],
  },

methods: {

  fetchOrders(){
    fetch('api/salesorder.php')
    .then( response => response.json() )
    .then( json => {ordersApp.orders = json} )
    .catch( err => {
      console.log('ORDER FETCH ERROR:');
      console.log(err);
    })
  },


},

  created () {

    this.fetchOrders();

  }
})
