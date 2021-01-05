@extends('layouts.app')

@section('content')

<div class="card">
<div class="card-header">
    Trashed Posts

</div>



<table class="table table-hover">
 
 <thead>
     <th> Image </th>
     <th>Title</th>
     <th>Edit</th>
     <th>Restor</th>
     <th>Destroy</th>
 </thead>

 <tbody>
   @if($posts->count() > 0)
            @foreach($posts as $post)
               <tr>

                     <td> 
                        
                        <img src="{{ $post->featured }}" alt="{{ $post->title}}" width="100px" height="50px">
                                 
                     </td>
                     <td> {{ $post->title }} </td>
                     <td>
                        <a href=" " class="btn btn-xs btn-info"> <i class="far fa-edit"></i></a>
                     
                     </td>
                     <td>
                        <a href=" {{ route('post.restore',['id'=> $post->id ]) }} " class="btn btn-xs btn-success">  <i class="fas fa-recycle"></i></a>
                        
                        

                     </td>
                     <td>
                        <a href=" {{ route('post.kill',['id'=> $post->id ]) }} " class="btn btn-xs btn-danger">  <i class="fas fa-trash"></i></a>
                        
                        

                     </td>

               </tr>
               @endforeach  

     @else

         <tr>
            <th colspan="5" class="text-center">No trashed Posts</th>
         </tr>
         @endif



 </tbody>

</table>




</div>





@endsection