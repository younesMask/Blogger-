@extends('layouts.app')

@section('content')

@include('admin.includes.errors')
 


    <div class="card">
            <div class="card-header">
                Create new Category
            </div>

            <div class="card-body">
                <form action="{{ route('category.store') }}" method="post"  >
                
                {{ csrf_field() }}
 
               

                <div class="form-group">
                    <label for="name">Name </label>
                        <input name="name" class="form-control" id="" cols="5" rows="5"></input> 
                </div>
               <div class="text-center">
               <div class="form-group">
                    <button class="btn btn-success" type="submit">Store Category</button>
                </div>
               </div>
               
                </form>
        </div>
        </div>

@stop   