@extends('layouts.app')

@section('content')
<h1>
    @foreach ($products as $product )
    <li>{{$product->title}}</li>
        
    @endforeach
</h1>
    
@endsection