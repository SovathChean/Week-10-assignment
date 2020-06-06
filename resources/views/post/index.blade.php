@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Post</div>

                <div class="card-body">
                  <div class="table-responsive">
                      <table id="datatable" class="table table-striped table-bordered" >
                          <thead>
                            <tr>
                            <th>#</th>
                            <th>Post</th>
                            <th>Author</th>
                            <th>Category</th>
                            <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                             @foreach($posts as $post)
                             <tr>
                                 <td>{{$post->id}}</td>
                                 <td>{{$post->name}}</td>
                                 <td>{{$post->user->name}}</td>
                                 <td>{{$post->category->name}}</td>
                                 <td>
                                   {!! Form::open(['method'=>'GET', 'action'=>['PostController@edit', $post->id], 'style'=>'display: inline-block']) !!}
                                   {!! Form::submit('update', ['class'=>'btn btn-outline-info', 'style'=>'display: inline-block']) !!}
                                   {!! Form::close() !!}
                                
                                   {!! Form::open(['method'=>'DELETE', 'action'=>['PostController@destroy', $post->id], 'style'=>'display: inline-block']) !!}
                                   {!! Form::submit('delete', ['class'=>'btn btn-outline-danger']) !!}
                                   {!! Form::close() !!}
                                 </td>

                             </tr>
                              @endforeach
                          </tbody>
                      </table>
                      <div class="pagination justify-content-center">
                        {{ $posts->links() }}
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
