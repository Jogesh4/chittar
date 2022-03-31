@extends('layouts.app')
@php
$userID = auth()->user() ? auth()->user()->id : 1;
@endphp
@section('content')
            
<section class="">
  <div class="container mt-2 mb-2">

        <div class="text-center">
             <h3>Select Address</h3>
        </div>

        <h5>Add Address</h5>

        <div class="row">

        </div>
           

  </div>
</section>
@endsection

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
