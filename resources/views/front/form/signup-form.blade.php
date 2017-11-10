@extends('front.master')

@section('body')

    <!-- sign up form -->
    <section>
        <div id="agileits-sign-in-page" class="sign-in-wrapper">

            <div class="agileinfo_signin">
                <h3>Sign Up</h3>
                @if(count($errors)>0)
                    <div class="col-sm-5 col-sm-offset-5 wrapper">
                        @foreach($errors->all() as $error)
                            <li class="text text-danger">{{$error}}</li>
                        @endforeach
                    </div>
                @endif
                <form action="{{url('/new-user')}}" method="POST">
                    {{csrf_field()}}
                    <input type="text" name="name" placeholder="Your Name">
                    <input type="email" name="email" placeholder="Your Email" >
                    <input type="tel" name="phone" placeholder="Mobile" >
                    <input type="password" name="password" placeholder="Password" >
                    <input type="password" name="retype_password" placeholder="Confirm Password" >
                    <div class="signin-rit">
						<span class="agree-checkbox">
							<label class="checkbox"><input type="checkbox" name="checkbox">I agree to your <a class="w3layouts-t" href="terms.html" target="_blank">Terms of Use</a> and <a class="w3layouts-t" href="privacy.html" target="_blank">Privacy Policy</a></label>
						</span>
                    </div>
                    <input type="submit" value="Sign Up">
                </form>
                <h6>If you already have an account, <a href="{{url('/signin/signin-form')}}">Sign In.</a></h6>
            </div>


        </div>
    </section>
    <!-- //sign up form -->

@endsection