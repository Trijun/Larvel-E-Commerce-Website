@extends('layout')

@section('content')
    
    <div class="row justify-content-center column">
        <div class="col-5 align-self-center" >
            <div class="px-5">
                <h3 class="text-center mb-5">
                Ready to start shopping!!
                </h3>
                <form action="/login" method="POST">
                    @csrf
                    <div class="mb-3 form-group">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name ="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3 form-group">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <div class="col-7">
            <img class="login-bg"src="https://cdn.shopify.com/s/files/1/0518/8249/2088/files/Campaign_11_1_1500x.jpg?v=1640809719" alt="background-img">
        </div>
    </div>

@endsection
