@extends('layouts.app')

@section('content')

<div class="card">
<div class="card-header">
    Categories
</div>

 

<table class="table table-hover">
 
 <thead>
     <th> Category Name </th>
     <th>Editing</th>
     <th>Deleting</th>
 </thead>

 <tbody>
    @if($categories->count() > 0 )
    @foreach($categories as $category)
     <tr>

         <td> 
            
             {{ $category->name }}
                      
         </td>
         <td>
            <a href="{{  route('category.edit', ['id'=>$category->id]) }}" class="btn btn-xs btn-info"> <i class="far fa-edit"></i></a>
           
         </td>
         <td>
            <a href="{{  route('category.delete', ['id'=>$category->id]) }}" class="btn btn-xs btn-danger"> <i class="fas fa-trash"></i></a>
            
             

         </td>

     </tr>
     @endforeach  

    @else

        <tr>
            <th colspan="5" class="text-center">No categories to show</th>
        </tr>
    @endif
 </tbody>

</table>



 

</div>





@endsection