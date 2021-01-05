@extends('layouts.app')

@section('content')

@include('admin.includes.errors')
 


    <div class="card">
            <div class="card-header">
                Edit   tag : {{$tag->tag}}
            </div>

            <div class="card-body">
                <form action="{{ route('tag.update',['id'=> $tag->id]) }}" method="post"  >
                
                {{ csrf_field() }}
 
               

                <div class="form-group">
                    <label for="name">Tag </label>
                        <input name="tag" class="form-control" value="{{ $tag->tag }}" id="" cols="5" rows="5"></input> 
                </div>
               <div class="text-center">
               <div class="form-group">
                    <button class="btn btn-success" type="submit">Update Tag</button>
                </div>
               </div>
               
                </form>
        </div>
        </div>

@stop   