@extends('master')

@section('content')

<!--page header-->
<div class="page-breadcrumb margin-b-60">
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h4 class="margin-b-20">Signup  and open your account</h4>
                <p class="text-white">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat
                </p>
            </div>
        </div>
    </div>
</div>

<!--end page header-->



<!--page start-->
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 margin-b-60">
            <div class="login-register-box">
                  <h3 class="text-center text-dark"><u>Here You Can Signup & Register</u></h3>
                  <br>
                <form class="margin-b-30"  action=""  method="POST" novalidate="novalidate" autocomplete="off">
                     @csrf
                     <div class="form-group">
                       <i class="material-icons icon">account_circle</i>
                        <label class="sr-only" for="name">Username</label>
                        <input id="user-name" value="{{ old('name') }}" name="name" type="text" class="form-control" placeholder="Name">
                        <span class="text-danger">{{$errors->first('name')}}</span>
                    </div>
                    <div class="form-group">
                        <i class="material-icons icon">email</i>
                        <label class="sr-only" for="email">Email</label>
                        <input id="login-email"   value="{{ old('email') }}" name="email" type="email" class="form-control login-email" placeholder="Email">
                        <span class="text-danger">{{$errors->first('email')}}</span>

                    </div><!--//form-group-->

                  <div class="form-group">
                      <i class="material-icons icon">lock</i>
                      <label class="sr-only" for="password">Password</label>
                      <input id="register-password" name="password" type="password" class="form-control" placeholder="Password">
                      <span class="text-danger">{{$errors->first('password')}}</span>
                      <div class="clearfix">
                      </div><!--/extra-->
                    </div><!--/form-group-->
                    <div class="form-group">
                        <i class="material-icons icon">lock</i>
                        <label class="sr-only" for="confirm-password">Verfiy Password</label>
                        <input id="login-password" name="confirm_password" type="password" class="form-control login-password" placeholder="Confirm Password">
                        <div class="clearfix">

                            </div>
                        </div><!--/extra-->
                    </div>
                    <button type="submit" class="btn btn-lg btn-block btn-primary">Sign up</button>
                </form>
                <div class="divider text-center">
                    <span class="or-text ">OR</span>
                </div>
                <ul class="social-buttons list-unstyled margin-b-20">
                    <li><a href="#" class="btn btn-social btn-google btn-block"><i class="fa fa-google" aria-hidden="true"></i><span class="btn-text">Log in with Google</span></a></li>
                    <li><a href="#" class="btn btn-social btn-facebook btn-block"><i class="fa fa-facebook" aria-hidden="true"></i><span class="btn-text">Log in with Facebook</span></a></li>
                </ul>

            </div>
        </div>
    </div>
</div>
<!--page end-->





@endsection
