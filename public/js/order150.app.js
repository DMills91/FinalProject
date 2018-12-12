var ordersApp = new Vue({
  el: '#orderMain',
  data: {
    order: {
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

created () {

    fetch('api/salesorder.php')
    .then( response => response.json() )
    .then( json => {ordersApp.orders = json} )
    .catch( err => {
      console.log('ORDER FETCH ERROR:');
      console.log(err);
    })
  },

})
