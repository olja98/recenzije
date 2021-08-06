@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
        <div class="col-5">
            <img src="/storage/{{ $post->image }}" class="w-100 rounded-left">
        </div>
        <div class="col-7">
           <h1>{{$post->title}}</h1>
           <p class="text-dark">{{$post->review}}</p>
        </div>
        
</div>        
   

    
</div>
@endsection
