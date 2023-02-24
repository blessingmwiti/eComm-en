@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">
      <div class="col-md-4 m-auto my-5">
      <form action="login" method="post">
        <div class="mb-3">
          @csrf
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="password" required class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
      </div>
    </div>
</div>
@endsection