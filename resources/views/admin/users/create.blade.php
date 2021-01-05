@extends('layouts.app')

@section('content')

@include('admin.includes.errors')
 


    <div class="card">
            <div class="card-header">
                Create new user
            </div>

            <div class="card-body">
                <form action="{{ route('user.store') }}" method="post"  >
                
                {{ csrf_field() }}
 
               

                <div class="form-group">
                    <label for="name">Name </label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">email </label>
                    <input type="email" name="email" class="form-control">
                 </div>
               <div class="text-center">
               <div class="form-group">
                    <button class="btn btn-success" type="submit">Add user</button>
                </div>
               </div>
               
                </form>
        </div>
        </div>

@stop   