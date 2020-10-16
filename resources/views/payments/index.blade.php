@extends('layouts.app')

@section('content')

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->
</head>

<body>
  <script
    src="https://www.paypal.com/sdk/js?client-id=ATySX60_SEP8-9euZmR-tU7Qhd8IjcE75fQ3UczQ58QgiJR06eUYbKUyRr0oFYQuKhmJg-3zGzNVqwKz"> // Required. Replace SB_CLIENT_ID with your sandbox client ID.
  </script>

  <script
    src="https://www.paypal.com/sdk/js?client-id=ATySX60_SEP8-9euZmR-tU7Qhd8IjcE75fQ3UczQ58QgiJR06eUYbKUyRr0oFYQuKhmJg-3zGzNVqwKz"> // Required. Replace SB_CLIENT_ID with your sandbox client ID.
  </script>
<div class="jumbotron text-center container" style="margin-top: 50px">
  <div id="paypal-button-container"></div>

  <script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '50.00'
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      // This function captures the funds from the transaction.
      return actions.order.capture().then(function(details) {
        // This function shows a transaction success message to your buyer.
        alert('Transaction completed by ' + details.payer.name.given_name);
      });
    }
  }).render('#paypal-button-container');
  //This function displays Smart Payment Buttons on your web page.
  </script>
<br>
<hr>
<br>
<img src="{{ asset('qrcodebrupay.jpg') }}" width="200" alt="BruPAY QRCODE">

</body>
</div>

@endsection
