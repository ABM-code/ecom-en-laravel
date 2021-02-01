@extends('master')
@section('content')
<div class="container-fluid" >
    <div class="row justify-content-center " style="height: 350px; padding-top:80px; margin-left:500px;; " >
        <div class="col-sm-4" >
            <form class="mt-3" action="login" method="POST">
                <div class="form-group mb-2">
                    @csrf
                <label for="exampleInputEmail1" style="font-size:20px" >Email </label>

                    <input type="email"  name="email" class="form-control" id="exampleInputEmail1">
                </div>

                <div class="form-group mb-2">
                <label for="exampleInputPassword1"  style="font-size:20px">Password </label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>

                <button type="submit" class="btn btn-primary"> Login</button>
            </form>

        </div>
    </div>
</div>
@endsection
