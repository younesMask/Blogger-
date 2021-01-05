@extends('layouts.app')

@section('content')

   @include('admin.includes.errors')
 
    <div class="card">
            <div class="card-header">
                Update   Category : {{ $category->name }}
            </div>

            <div class="card-body">
                <form action="{{ route('category.update',['id'=>$category->id]) }}" method="post"  >
                
                {{ csrf_field() }}
 
               

                <div class="form-group">
                    <label for="name">Name </label>
                        <input name="name" class="form-control" value="{{ $category->name }}" id="" cols="5" rows="5"></input> 
                </div>
               <div class="text-center">
               <div class="form-group">
                    <button class="btn btn-success" type="submit">Update Category</button>
                </div>
               </div>
               
                </form>
        </div>
        </div>

@stop   