@extends('layouts.app')

@section('content')

<div class="card">
<div class="card-header">
    Posts
</div>

 

<table class="table table-hover">
 
 <thead>
     <th> Image </th>
     <th>Title</th>
     <th>Edit</th>
     <th>Trash</th>
 </thead>

 <tbody>
    @if($posts->count() > 0 )
    @foreach($posts as $post)
            <tr>

                <td> 
                    
                    <img src="{{ $post->featured }}" alt="{{ $post->title}}" width="50px" height="50px">
                            
                </td>
                <td> {{ $post->title }} </td>
                <td>
                <a href=" {{ route('post.edit',['id'=> $post->id ]) }} " class="btn btn-xs btn-info"> <i class="fas fa-edit"></i></a>
                
                </td>
                <td>
                    <a href=" {{ route('post.delete',['id'=> $post->id ]) }} " class="btn btn-xs btn-danger"> <i class="fas fa-trash"></i></a>
                    
                    

                </td>

            </tr>
            @endforeach  
            @else
                    <tr>
                        <th colspan="5" class="text-center">There is no posts to show</th>
                    </tr>

            @endif



 </tbody>

</table>



 

</div>





@endsection