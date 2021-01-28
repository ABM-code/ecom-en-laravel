@extends('master')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-sm-4">
            <form class="mt-3">
                <div class="form-group mb-2">
                <label for="exampleInputEmail1" style="font-size:20px" >Email :</label>

                    <input type="email" class="form-control" id="exampleInputEmail1">
                </div>

                <div class="form-group mb-2">
                <label for="exampleInputPassword1"  style="font-size:20px">Password :</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>

                <button type="submit" class="btn btn-primary"> Submit</button>
            </form>

        </div>
    </div>
</div>
@endsection
