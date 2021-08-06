@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
         <div class="d-flex justify-content-between" >
           <div ><h1>{{$user->username}}</h1></div>
           @can('update',$user->profile)
           <a href="/p/create" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">ADD REVIEW</a>
           <a href="/p/profile/{{$user->id}}/edit" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">EDIT PROFILE</a>
            @endcan
         </div>
           <div> <strong>{{$user->posts->count()}}</strong> broj parfema </div>
           <div>{{$user->profile->description}}</div>

        </div>

        <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-12 pb-4 ">
                <a href="/p/{{ $post->id }}">
                    <div class="col-6 pb-4 ">
                    <img src="/storage/{{ $post->image }}" class="w-100 rounded-circle">
                    </div>
                    <div class="col-6 pb-4 ">
                    <div class="text-muted"><strong>{{ $post->title }}</strong></div>
                    </div>
                </a>
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection
