@extends('user.layouts.dashboard')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">Bienvenido {{ auth()->user()->name }}</div>

                <div class="card-body">
                <form action="{{ route('admin.users.update', $user) }}" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="name">Nombre de Usuario</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="profile_picture">Profile Picture</label>
                        <input type="file" class="form-control-file" id="profile_picture" name="profile_picture" required autofocus>
                    </div>

                    @csrf
                    {{ method_field('PUT') }}
                    <button type="submit" class="btn btn-primary">
                        update
                    </button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection