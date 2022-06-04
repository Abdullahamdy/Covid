@extends('frontend.layout.headfoot')
@section('content')
		<!-- //Header -->
		<!-- Start Search Popup -->
        @foreach ($productsnew as $product)

						<div>
                           <p> {{$product->name}}</p>
                           @foreach ($product->image as $img)
                           <img src="{{asset('Attachments/products/'.$img->filename)}}" alt="">
                           @endforeach
                       </div>
        @endforeach

@endsection
