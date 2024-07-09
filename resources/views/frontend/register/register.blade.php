@extends('auth.layouts.master')

@section('title')
Register
@endsection

@section('content')
<div class="card-body">
    <div class="pt-4 pb-2">
        <h5 class="card-title text-center pb-0 fs-4">Create a new account</h5>
    </div>

    <form class="row g-3 needs-validation" novalidate method="POST" action="{{route('frontend.register')}}">
        @csrf
        {{-- name --}}
        <div class="col-12">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{old('name')}}">
            @if ($errors->has('name'))
            <span class="text-danger">{{$errors->first('name')}}</span>
            @endif
        </div>
        {{-- email --}}
        <div class="col-12">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{old('email')}}">
            @if ($errors->has('email'))
            <span class="text-danger">{{$errors->first('email')}}</span>
            @endif
        </div>

        {{-- password --}}
        <div class="col-12">
            <label for="password" class="form-label">Password</label>
            <div class="password-field">
                <input type="password" name="password" class="form-control">
                <button type="button" class="btn btn-transparent toggle-password" data-target="password">
                    <i class="far fa-eye"></i>
                </button>
            </div>
            @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="col-12">
            <p class="small mb-0"><a href="/login">Already have an account?</a></p>
        </div>

        <div class="col-12">
            <button class="btn btn-primary w-100" type="submit">Register</button>
        </div>
    </form>

</div>
@endsection

