@extends('template')
@section('Content')

    <h1 class="fw-bolder" style="text-align: center">Login</h1>
    <div class="container bg-dark p-5" style="display: flex; justify-content: center; align-items: center; flex-direction: column">
        <div class="row">
            <div class="col-sm-4"></div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput" style="color:#2d3748">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword"  placeholder="Password">
            <label for="floatingPassword" style="color:#2d3748">Password</label>
        </div>
        <div>
            <input type="submit" class="btn btn-primary m-3">
        </div>
        </div>
    </div>
@endsection
