@extends('layout')

@section('content')
    
    <div class="flex-row w-100">
        <div class="w-50 align-self-center flex-box" >
            <div class="px-5 w-75">
                
                <h1 class="text-center mb-4">
                    <strong>AZUNDI</strong>
                </h1>
                <h5 class="text-center mb-5">
                    Start your Shopping Experience!!
                </h5>
                <form action="/login" method="POST">
                    @csrf
                    <div class="mb-3 form-group">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name ="email" class="form-control">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3 form-group">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="flex-box">
                        <div class="w-100">
                            <button type="submit" class="cart-button-remove w-100 mt-5">Submit</button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
        <div class="w-50 login-bg">
            {{-- background-image --}}
        </div>
    </div>

@endsection
