@extends('layouts.app')

@section('content')
<div class="container">
   
<form  id="form_put" action="/profile/{{$user->id}}" enctype="multipart/form-data"  method="POST">
    
    @csrf
    {{ method_field('PUT') }}
    
    <div class="row">
     <div class="col-8 offset-2">
     <div class="row">
    <img src="https://cloudfront.violetgrey.com/violet-files/lessons/guide-to-summer-scents/_desktop/guide-to-summer-scents-archive.jpg">
    </div>
     <div class="row"><h1><p class="text-center">EDIT PROFILE</p></h1></div>

    

     <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label ">{{ __('Description') }}</label>

                           
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description"   value="{{ old('description') ?? $user->profile->description}}" autocomplete="review" autofocus>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        

    </div>

    

    <div class="row pt-4">
    <button type="submit" class="btn btn-dark">Save</button>
    </div>
   

    </div>
    </div>
    </form>

    
</div>
@endsection
