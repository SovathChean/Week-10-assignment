<table id="datatable" class="table table-striped table-bordered" >
    <thead>
      <tr>
      <th>#</th>
      <th>Category</th>
      <th>Action</th>
      </tr>
    </thead>
    <tbody>
       @foreach($categories as $category)
       <tr>
           <td>{{$category->id}}</td>
           <td>{{$catgory->name}}</td>
           <td>
             {!! Form::open(['method'=>'GET', 'action'=>['PostController@edit', $category->id], 'style'=>'display: inline-block']) !!}
             {!! Form::submit('update', ['class'=>'btn btn-outline-info']) !!}
             {!! Form::close() !!}

             {!! Form::open(['method'=>'DELETE', 'action'=>['PostController@destroy', $category->id], 'style'=>'display: inline-block']) !!}
             {!! Form::submit('delete', ['class'=>'btn btn-outline-danger']) !!}
             {!! Form::close() !!}

             {!! Form::open(['method'=>'GET', 'action'=>['PostController@show', $category->id], 'style'=>'display: inline-block']) !!}
             {!! Form::submit('Show', ['class'=>'btn btn-outline-primary']) !!}
             {!! Form::close() !!}
           </td>

       </tr>
        @endforeach
    </tbody>
</table>
