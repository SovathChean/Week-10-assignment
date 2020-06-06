@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                  Post
                  <div  style="float: right">
                    <a href="{{route('post.create')}}" class="btn btn-primary" > Add Post </a>
                  </div>
                </div>

                <div class="card-body">
                  <div class="table-responsive">
                     @include('category.includes.table')
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
