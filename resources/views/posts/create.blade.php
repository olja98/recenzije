@extends('layouts.app')

@section('content')
<div class="container">

    <form  id="form_post" action="/p/" enctype="multipart/form-data"  method="POST">
    
    @csrf
    <div class="row">
     <div class="col-8 offset-2">
     
     <div class="row"><h1>ADD REVIEW</h1></div>

     <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label ">{{ __('Title') }}</label>

                            
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title"  autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        
     </div>

     <div class="form-group row">
                            <label for="review" class="col-md-4 col-form-label ">{{ __('Review') }}</label>

                           
                                <input id="review" type="text" class="form-control @error('review') is-invalid @enderror" name="review"   autocomplete="review" autofocus>

                                @error('review')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        

    </div>

    <div class="row">
    <label for="image" class="col-md-4 col-form-label ">Post image</label>

    <input type="file" class="form-control-file" id="image" name="image">

                                @error('image')
                                   
                                        <strong>{{ $message }}</strong>
                                    
                                @enderror
                            
    </div>

    <div class="row pt-4">
    <button type="submit" class="btn btn-dark">Add post</button>
    </div>
    <div class="row">
    <img src="https://buro247.rs/images/2020/10/1604076879818397.jpg">
    </div>

    </div>
    </div>
    </form>

    
</div>
@endsection
