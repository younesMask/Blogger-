@extends('layouts.app')

@section('content')

<div class="card">
<div class="card-header">
    tags
</div>

 

<table class="table table-hover">
 
 <thead>
     <th> Tag Name </th>
     <th>Editing</th>
     <th>Deleting</th>
 </thead>

 <tbody>
    @if($tags->count() > 0 )
    @foreach($tags as $tag)
     <tr>

         <td> 
            
             {{ $tag->tag }}
                      
         </td>
         <td>
            <a href="{{  route('tag.edit', ['id'=>$tag->id]) }}" class="btn btn-xs btn-info"> <i class="far fa-edit"></i></a>
         </td>
         <td>
            <a href="{{  route('tag.destroy', ['id'=>$tag->id]) }}" class="btn btn-xs btn-danger"> <i class="fas fa-trash"></i></a>
            
             

         </td>

     </tr>
     @endforeach  

    @else

        <tr>
            <th colspan="5" class="text-center">No tags to show</th>
        </tr>
    @endif
 </tbody>

</table>



 

</div>





@endsection