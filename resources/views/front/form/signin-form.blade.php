@extends('front.master')

@section('body')

    <section>
        <div id="agileits-sign-in-page" class="sign-in-wrapper">
            <div class="agileinfo_signin">
                <h3>Sign In</h3>
                @if(count($errors)>0)
                    <div class="col-sm-5 col-sm-offset-5 wrapper">
                        @foreach($errors->all() as $error)
                            <li class="text text-danger">{{$error}}</li>
                        @endforeach
                    </div>
                @endif
                <form action="{{url('/customer-signin')}}" method="POST">
                    {{csrf_field()}}
                    <input type="email" name="email" placeholder="Your Email" >
                    <input type="password" name="password" placeholder="Password">
                    <input type="submit" value="Sign In">
                </form>

                <form>
                    <div class="forgot-grid">
                        <label class="checkbox"><input type="checkbox" name="checkbox">Remember me</label>
                        <div class="forgot">
                            <a href="#" data-toggle="modal" data-target="#myModal2">Forgot Password?</a>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal2" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h3 class="w3ls-password">Get Password</h3>
                                            <p class="get-pw">Enter your email address below and we'll send you an email with instructions.</p>
                                            <form action="#" method="post">
                                                <input type="text" class="user" name="email" placeholder="Email" required="">
                                                <input type="submit" value="Submit">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </form>
                <h6> Not a Member Yet? <a href="{{ url('/signup/signup-form') }}">Sign Up Now</a> </h6>
            </div>
        </div>
    </section>

    @endsection