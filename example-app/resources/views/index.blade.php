
@extends('crud')
 @section('content')
     <div class="row">
         <div class="col-lg-12 margin-tb">
            
             <div class="text-center mt-4 ">
                 <a class="btn btn-outline-success mb-3 rounded-pill " href="{{ route('items.create')}}"> Create New CV</a>
             </div>
         </div>
     </div>
    
     @if ($message = Session::get('success'))
         <div class="alert alert-success">
             <p>{{ $message }}</p>
         </div>
     @endif
     <table class="table table-bordered ">
        <tr class="bg-success">
            <th>No</th>
            <th>User_id</th>
            <th>Interesting_Position</th>
            <th>Location</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($cv as $cV)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $cV->user_id }}</td>
            <td>{{ $cV->interesting_position }}</td>
            <td>{{ $cV->Location }}</td>
            <td>
                <form action="{{ route('items.destroy',$cV->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('items.show',$cV->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('items.edit',$cV->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
      
@endsection