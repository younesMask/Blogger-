@extends('layouts.app')

@section('content')

@include('admin.includes.errors')
 


    <div class="card">
            <div class="card-header">
                Edit Settings info
            </div>

            <div class="card-body">
                <form action="{{ route('settings.update') }}" method="post"  >
                
                {{ csrf_field() }}
 
               

                <div class="form-group">
                    <label for="name">Site name </label>
                    <input type="text" name="site_name" value=" {{ $settings->site_name }} " class="form-control">
                </div>
                <div class="form-group">
                    <label for="name">Addres </label>
                    <input type="text" name="addres" value="{{ $settings->addres }}" class="form-control">
                 </div>
                 <div class="form-group">
                    <label for="name">Contact phone </label>
                    <input type="text" name="contact_number" value="{{ $settings->contact_number }}" class="form-control">
                 </div>
                 <div class="form-group">
                    <label for="name">contact email </label>
                    <input type="email" name="contact_email" value="{{$settings->contact_email}}" class="form-control">
                 </div>
               <div class="text-center">
               <div class="form-group">
                    <button class="btn btn-success" type="submit">Update site settings</button>
                </div>
               </div>
               
                </form>
        </div>
        </div>

@stop   