@extends('front.master')

@section('title')
 Welcome User!
@endsection

@section('body')
<div class="col-sm-12 sign-in-wrapper ">

    <div class="agileinfo_signin">
        <h1 class="text text-center text-success">Welcome User!</h1>

        <hr>

        <ul>
            <li><h4> If you are new here, please <a href="{{url('/signup/signup-form')}}">Sign Up</a> </h4></li>
            <li> <h4> If you already have an account, please <a href="{{url('/signin/signin-form')}}">Sign In</a> to continue. </h4></li>
        </ul>

    </div>



</div>




@endsection