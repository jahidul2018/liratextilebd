<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="" rel="icon">
<title>Invoice - </title>
<meta name="author" content="harnishdesign.net">

<!-- Web Fonts
======================= -->
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>


<!-- Stylesheet
======================= -->
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/invoice/css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/invoice/css/all.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend/invoice/css/stylesheet.css') }}">
</head>
<body>
 
<!-- Container -->
<div class="container-fluid invoice-container">
  <div class="btn-group btn-group-sm d-print-none d-flex justify-content-center"> 
      <a href="javascript:window.print()" class="btn btn-light border text-black-50 shadow-none">
        <i class="fa fa-print"></i> Print
      </a> 
      <a href="{{ route('shop') }}" class="btn btn-light border text-black-50 shadow-none">
        <i class="fa fa-download"></i> home
       </a> 
  </div>
    <!-- Header -->
  <header>
  <div class="row align-items-center">
    <div class="col-sm-7 text-center text-sm-left mb-3 mb-sm-0">
      <div id="logos" style="width: 100%; height:50%; overflow: hidden; border-radius:1%;"> 
        <a href="{{ route('shop') }}">
            @if (App\Models\Slider::where('b_type','logo')->where('priority',1)->get())
            @foreach (App\Models\Slider::where('b_type','logo')->where('priority',1)->get() as $logo)
            <img src="{{ asset('img/sliders/'.$logo->image) }}" title="E-Commerce" alt="E-Commerce" class="img-responsive" />
            @endforeach
            @else
            <img src="{{ asset('frontend/image/logo.png') }}" title="E-Commerce" alt="E-Commerce" class="img-responsive" />
            @endif
            {{-- <img src="{{ asset('frontend/image/logo.png') }}" title="E-Commerce" alt="E-Commerce" class="img-responsive" /> --}}
        </a> 
    </div>
      
      {{-- <img id="logo" src="{{ asset('frontend/invoice/css/logo.png') }}" title="Koice" alt="Koice"> --}}
    </div>

    <div class="col-sm-5 text-center text-sm-right">
      <h4 class="text-7 mb-0">Invoice</h4>
      <address>
        mib.com.bd<br>
        hotline: 01707-701971
        mail:mib.com.bd@gmail.com<br>
      </address>
    </div>
  </div>
  <hr>
  </header>
  
  <!-- Main Content -->
  <main>
    <div class="row">
      <div class="col-sm-6"><strong>Date:</strong> {{ $user_order->created_at->format('d-m-Y') }}</div>
      <div class="col-sm-6 text-sm-right"> <strong>Invoice No: {{ $user_order->id }}</strong></div>
      
    </div>
  <hr>

  <div class="row ">
    <div class="col-sm-6 text-sm-right order-sm-1 "> <strong>Payment Option:</strong>
      <address>
     {{ $user_order->payment_option }}<br>
      </address>
    </div>
    <div class="col-sm-6 order-sm-0"> <strong>shipping Address:</strong>
        <address>
       {{ $user_order->delivery_clint_name }}<br>
       {{ $user_order->delivery_clint_phone_number }} <br>
       {{ $user_order->delivery_clint_emailAddress }} <br>
       {{ $user_order->delivery_shipping_address_1 }} <br>
       {{ $user_order->delivery_shipping_address_2 }} 

        </address>
      </div>
  </div>
  <div class="card">
    <div class="card-header px-2 py-0">
      <table class="table mb-0">
        <thead>
          <tr>
            {{-- <td class="col border-0"><strong>Product code</strong></td> --}}
            <td class="col border-0"><strong>Product Code</strong></td>
            <td class="col border-0"><strong>Product name</strong></td>
		      	<td class="col border-0"><strong>Size</strong></td>
            <td class="col text-right border-0"><strong>unit Price</strong></td>
		      	<td class="col text-center border-0"><strong>QTY</strong></td>
            <td class="col text-right border-0"><strong>Amount</strong></td>
          </tr>
        </thead>
      </table>
    </div>
    <div class="card-body px-2">
      <div class="table-responsive">
        <table class="table">
          <tbody>
            
            @php
            $total_price = 0;
            @endphp
          @foreach ($order_carts_items as $cart)
          <tr>
            <td class="col border-0">{{ $cart->product->sku }}</td>
            <td class="col border-0">{{ $cart->product->product_title }}</td>
           
            <td class="col border-0">{{ $cart->product_size }}</td>
            <td class="col text-center border-0">{{ $cart->product->offer_price }}</td>
            <td class="col text-center border-0">{{ $cart->product_quantity }}</td>
            @php
              $total_price += $cart->product->offer_price * $cart->product_quantity;
            @endphp
            <td class="col text-right border-0">{{ $cart->product->offer_price * $cart->product_quantity }}</td>
          </tr>
              
          @endforeach  
            <tr>
              <td colspan="5" class="bg-light-2 text-right"><strong>Sub Total: </strong></td>
              <td class="bg-light-2 text-right">{!! $total_price !!}</td>
            </tr>
            <tr>
              <td colspan="5" class="bg-light-2 text-right"><strong>Tax (15%):</strong></td>
              @php
              $vat=15/100;
              $vat_amount=$vat* $total_price;
              $shipping_rate=50;
              $sub_total =$total_price + $vat_amount;
              $total= $sub_total+$shipping_rate;
               @endphp
              <td class="bg-light-2 text-right">{{ $vat_amount }} </td>
            </tr>
            <tr>
              <td colspan="5" class="bg-light-2 text-right"><strong>Flat Shipping Rate:</strong></td>
              <td class="bg-light-2 text-right">50.00 </td>
            </tr><tr>
              <td colspan="5" class="bg-light-2 text-right"><strong>Total:</strong></td>
              <td class="bg-light-2 text-right">{{ $total }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  </main>
  <!-- Footer -->
  <footer class="text-center mt-4">
  <p class="text-1"><strong>NOTE :</strong> This is computer generated receipt and does not require physical signature.</p>
  
  </footer>
</div>
<script>
  window.print();
</script>
