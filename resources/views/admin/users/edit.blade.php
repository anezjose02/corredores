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
                        <input type="file" class="form-control-file" id="profile_picture" name="profile_picture">
                    </div>

                    <div class="form-group">
                        <label for="main_message">Main Message</label>
                        <input id="main_message" type="text" class="form-control" name="main_message" value="{{ $user->main_message }}" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="number_phone">Number Phone</label>
                        <input type="number" class="form-control" id="number_phone" name="number_phone" value="{{ $user->number_phone }}" placeholder="1234" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="license_year">License Year</label>
                        <input id="datepicker" class="form-comtrol" name="license_year" width="276" value="{{ $user->license_year }}" required autofocus />
                    <script>
                        $('#datepicker').datepicker({
                        uiLibrary: 'bootstrap4',
                        format: 'yyyy/mm/dd',});
                    </script>
                    </div>

                    <div class="form-group">
                        <label for="adress">Address</label>
                        <input type="text" class="form-control" id="adress" name="address" placeholder="1234 Main St" value="{{ $user->address }}" required autofocus>
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