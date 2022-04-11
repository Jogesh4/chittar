<head>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>\
<style>
table {
    display: table;
    border-collapse: separate;
    box-sizing: border-box;
    text-indent: initial;
    white-space: normal;
    line-height: normal;
    font-weight: normal;
    font-size: medium;
    font-style: normal;
    color: -internal-quirk-inherit;
    text-align: start;
    border-spacing: 2px;
    border-color: grey;
    font-variant: normal;
}
thead {
    display: table-header-group;
    vertical-align: middle;
    border-color: inherit;
}
tr {
    display: table-row;
    vertical-align: inherit;
    border-color: inherit;
}
th {
    display: table-cell;
    vertical-align: inherit;
    font-weight: bold;
    text-align: -internal-center;
}
tbody {
    display: table-row-group;
    vertical-align: middle;
    border-color: inherit;
}



</style>
<body style="font-family: 'Poppins', sans-serif;">
<div style="text-align:center;">
<p><img src=" {{ asset('images/logo3.png') }}"/></p>
<h1 style="font-size: 40px;">Thank you for your order!</h1>
<h4 style=" font-weight: 500;">We'll drop you another email when your order ships.</br><span>Your order is confirmed! Review your order information below. </span></h4>


<div style="background-color:#f38fb5; padding: 20px; width: 80%; margin: 35px auto;">

    <div style=" display: inline-flex; ">
        <div style=" background: #fff; padding: 19px 20px; ">Ordered on Feb 17</div>  
        <div style=" border:2px solid #fff; padding: 19px 20px; ">Ready To Ship</div>  
        <div style=" border:2px solid #fff; padding: 19px 20px; ">Expected Delivery</div> 
    </div>
    
    <div style="width:100%; display: inline-block;  margin-top:5px;" >

    <div style="width:50%; float:left; text-align:left;">
    <div>
    <h4 >Total Item : <span style="font-size:25px;">{{ $order->items }}</span></h4>    
    <h4 >Item Subtotal: <span style="font-size:25px;">INR. {{ $order->amount }}</span></h4>
    <h4 >Shipping & Handling: <span style="font-size:25px;"> INR. {{ $order->shipping_price }}</span></h4>
    @if($order->status == 'COD')
       <h4 >Payment Method:<span> COD</span></h4> 
    @else
    <h4 >Payment Method:<span> Online</span></h4>
    @endif
    <h4 >Your shipping speed:<span > Standard Delivery</span></h4>  
</div>
<hr>
<div>
<h2 style=" color: #fff;">Order Total: <span> INR. {{ $order->amount }}</span></h2>
</div>
<div>
<h4 style=" color: #fff;">Payment Pending: <span> INR. {{ $order->amount }}</span></h4>
</div>
    
    </div>

    <div style="width:50%;float:left; text-align:right;">

        <div>
            <h5 style=" color: #fff; font-size: 20px; "> Billing Address</h5>
            <p><b>{{ $billing->firstname }} {{ $billing->lastname }}</b> </br>{{ $billing->address }},{{ $billing->city }},</br>{{ $billing->state }},{{ $billing->country }},{{ $billing->pincode }} </p>
        </div>

        <div>
            <h5 style=" color: #fff; font-size: 20px; "> Shipping Address</h5>
                  <p><b>{{ $shipping->firstname }} {{ $shipping->lastname }}</b> </br>{{ $shipping->address }},{{ $shipping->city }},</br>{{ $shipping->state }},{{ $shipping->country }},{{ $shipping->pincode }} </p>
        </div>


    </div>
    

    </div>
    






</div>
<h2>Any Question??</h2>

<div>
    <a href="https://www.chittarr.com/contact" style=" font-size: 18px; background-color: #fff; padding: 10px 20px; border: 2px solid #f38fb5; text-decoration: none; margin: 10px; color: #000; font-weight: 600; ">ORDER FAQ</a><span> <a href="https://www.chittarr.com/contact" style=" font-size: 18px; background-color: #fff; padding: 10px 20px; border: 2px solid #f38fb5; text-decoration: none; margin: 10px; color: #000; font-weight: 600; ">DELIVERY FAQ</a></span>

</div>
<div>
    <p style="color:#6f6767;margin-top: 40px;font-size: 12px;">You are receiving this email because you have visited our site or asked us about the regular newsletter.</br> Make sure our messages get to your Inbox (and not your bulk or junk folders).</p>
</div>
</body>