<!DOCTYPE html>
<html lang="en">
<style>
.row{
    border-radius: 5px;
    background-color: #2BBBAD;
    padding: 20px;
}
</style>
<body>
    
</body>
</html>

@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h1>Sign In</h1>
        @if(count($errors)>0)
        <div class="alert alert-danger"> 
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
        @endif
        <form action="{{route('user.signIn')}}" method="post">
            <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="text" id="email" name="email" placeholder="abc@gmail.com" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Sign In</button>
            {{csrf_field()}}
        </form>
    </div>
</div>
@endsection

</html>