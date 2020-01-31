@extends('user.layouts.dashboard')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">Bienvenido ingrese su informacion personal  {{ auth()->user()->name }}</div>

                <div class="card-body">
                <form action="{{ route('user.perfil.store') }}" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="main_message">Main Message</label>
                        <textarea input class="form-control" id="main_message" name="main_message" required autofocus></textarea>
                    </div>

                    <div class="form-group">
                        <label for="number_phone">Number Phone</label>
                        <input type="number" class="form-control" id="number_phone" name="number_phone" placeholder="1234" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="license_year">License Year</label>
                        <input id="datepicker" class="form-comtrol" name="license_year" width="276" required autofocus />
                    <script>
                        $('#datepicker').datepicker({
                        uiLibrary: 'bootstrap4',
                        format: 'yyyy/mm/dd',
                        });
                    </script>
                    </div>

                    <div class="form-group">
                        <label for="adress">Address</label>
                        <input type="text" class="form-control" id="adress" name="address" placeholder="1234 Main St" required autofocus>
                    </div>
                    
                    <input name="user_id" type="hidden" value="{{ auth()->user()->id }}">

                    @csrf
                    
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

