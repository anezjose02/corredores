@extends('admin.layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Users {{ $user-> name}}</div>

                <div class="card-body">
                 
                    <form action="{{ route('admin.users.update',$user) }}" method = "POST">
                        
                    <div class="form-label-group">
                        <input 
                            type="email" 
                            id="inputEmail" 
                            class="form-control @error('email') is-invalid @enderror" 
                            name="email" 
                            value="{{ $user->email }}" 
                            required autocomplete="email" 
                            autofocus placeholder="Email address" 
                            required autofocus>
                        
                            <label for="inputEmail">{{ __('E-Mail Address') }}</label>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div> 

                    <div class="form-label-group">
                            <input 
                            type="text" 
                            id="name" 
                            class="form-control @error('name') is-invalid @enderror" 
                            name="name" 
                            value="{{ $user->name }}" 
                            required autofocus>
                            
                            <label for="name">{{ __('User Name') }}</label>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div> 

                    @csrf

                    {{ method_field('PUT')}}
                    
                    <div class="form-group-row">
                        <label for="roles">{{ __('Roles') }}</label>
                        <div>
                            @foreach ($roles as $role)
                                <div class='form-check'>
                                <input type="checkbox" name="roles[]" value="{{ $role->id}}"
                                @if($user->roles->pluck('id')->contains($role->id)) checked @endif>
                                <label> {{ $role->name}}</label> 
                                </div>
                            @endforeach
                        </div>
                    </div>   
                    <button type="submit" class="btn btn-primary">
                        Update
                    </button>  

                </div>
            </div>
        </div>
    </div>
</div>
@endsection