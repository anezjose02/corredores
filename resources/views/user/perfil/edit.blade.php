@extends('user.layouts.dashboard')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">Edit User {{ auth()->user()->name }}</div>

                <div class="card-body">
                <form action="{{ route('user.perfil.update',  auth()->user()->id) }}" method="POST">


                    <div class="form-group">
                        <label for="main_message">Main Message</label>
                        <input id="main_message" type="text" class="form-control" name="main_message" value="{{ $perfils->main_message }}" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="number_phone">Number Phone</label>
                        <input type="number" class="form-control" id="number_phone" name="number_phone" value="{{ $perfils->number_phone }}" placeholder="1234" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="license_year">License Year</label>
                        <input id="datepicker" class="form-comtrol" name="license_year" width="276" value="{{ $perfils->number_phone }}" required autofocus />
                    <script>
                        $('#datepicker').datepicker({
                        uiLibrary: 'bootstrap4',
                        format: 'yyyy/mm/dd',});
                    </script>
                    </div>

                    <div class="form-group">
                        <label for="adress">Address</label>
                        <input type="text" class="form-control" id="adress" name="address" placeholder="1234 Main St" value="{{ $perfils->number_phone }}" required autofocus>
                    </div>
                    
                    <input name="user_id" type="hidden" value="{{ auth()->user()->id }}">

                    @csrf
                    {{ method_field('PUT') }}
                    <button type="submit" class="btn btn-primary">
                        Enviar
                    </button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

