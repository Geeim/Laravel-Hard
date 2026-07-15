@extends('layout.out')

@section('title', 'Sign Up')

@section('content')

<div class="text-center p-5">
    <form action="{{route('users.store')}}" method="POST">
        @csrf

        <input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{old('name')}}">
        <input type="email" name="email" class="form-control" placeholder="Enter Email" value="{{old('email')}}">
        <input type="password" name="password" class="form-control" placeholder="Enter Password" value="{{old('password')}}">
        <input type="submit" name="createaccbtn" class="btn btn-success" value="Create Account">
    </form>
</div>

@endsection

