@extends('layouts.app')

@section('content')

<div class="container py-4">
    <h2 class="text-center">Receipt</h2>

    <p class="text-center">Thank you for purchasing with us! Your payment is succesful!</p>
    <div class="table-responsive">
        <table class="table table-bordered">
            <th colspan="2" class="text-center bg-primary">Payment Information</th>
            <tr>
                <td>Name</td>
                <td id="FirstName" class="text-center"></td>

            </tr>
            <tr>
                <td>Transaction ID</td>
                <td id="OrderID" class="text-center">data.orderID</td>
            </tr>
            <tr>
                <td>Payment Status</td>
                <td class="text-center">Success</td>
            </tr>
        </table>
    </div>
    <br>

    <a class="btn btn-primary text-center" href="/">Back to Homepage</a>
</div>

<script>
    var FirstName = localStorage.getItem("storageName");
    document.getElementById("FirstName").innerHTML = FirstName;
    var OrderID = localStorage.getItem("storageName2");
    document.getElementById("OrderID").innerHTML = OrderID;
    var paid = 'yes';
</script>


@endsection
