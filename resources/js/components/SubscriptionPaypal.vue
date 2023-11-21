<!-- PayPalButton.vue -->

<template>
    <div>
      <div id="paypal-button-container"></div>
    </div>
  </template>
  
  <script>
  export default {
    mounted() {
      // Load PayPal SDK script dynamically
      const script = document.createElement('script');
      script.src = 'https://www.paypal.com/sdk/js?client-id=AW6ar6wds9x5zUC6YEIOgspqaRwO4jz33bmte5ah1XBIDstORzJ3Y_gZGfkBRoZ-MzpZ213a-TxJIcYv'; // Replace with your PayPal client ID
      script.async = true;
      document.body.appendChild(script);
      script.onload = () => {
        this.initPayPalButton();
      };
    },
    methods: {
      initPayPalButton() {
        paypal.Buttons({
          createOrder: function(data, actions) {
            return actions.order.create({
              purchase_units: [{
                amount: {
                  value: '10.00' // Replace with the amount you want to charge
                }
              }]
            });
          },
          onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
              // Handle successful payment
              console.log('Transaction completed by ' + details.payer.name.given_name);
              // Redirect or perform actions upon successful payment
            });
          },
          onError: function(err) {
            // Handle errors or failed payment
            console.error(err);
          }
        }).render('#paypal-button-container');
      }
    }
  }
  </script>
  