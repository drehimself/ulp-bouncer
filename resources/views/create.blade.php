@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post</div>

                <div class="card-body">
                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('posts.store') }}" method="POST">
                      @csrf
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title">
                      </div>

                      <div class="form-group">
                        <label for="body">Post Body</label>
                        <textarea class="form-control" name="body" id="body" rows="4"></textarea>
                      </div>

                      <div class="form-group">
                          <button class="btn btn-primary" type="submit">Create Post</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
