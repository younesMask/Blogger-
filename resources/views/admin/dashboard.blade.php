@extends('layouts.app')

@section('content')
    
          

          <div class="card-deck">
          
            <div class="card ">
            <div class="card-header bg-primary text-center">
                    Published Posts
            </div>
            <div class="card-body ">
            <h1 class="text-center">{{$posts_count}}</h1>
            </div>
            </div>

            <div class="card ">
            <div class="card-header bg-warning text-center">
            Trashed Posts
            </div>
            <div class="card-body ">
            <h1 class="text-center">{{$trashed_count}}</h1>
            </div>
            </div>
            <div class="card ">
            <div class="card-header  bg-success text-center">
            users
            </div>
            <div class="card-body">
            <h1 class="text-center">{{$users_count}}</h1>
            </div>
            </div>
            <div class="card ">
            <div class="card-header bg-danger text-center">
                Categories
            </div>
            <div class="card-body ">
            <h1 class="text-center">{{$categories_count}}</h1>
            </div>
            </div>  
        </div>
</div>

          
          
  
@endsection
