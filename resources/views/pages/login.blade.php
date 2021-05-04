@extends('master.layout')

@section('content')
<div class="bodylogin">
    <div class="center-container">
        <!--header-->
        <div class="header-w3l">
            <h1>Online Login Form</h1>
        </div>
        <!--//header-->
        <div class="main-content-agile">
            <div class="sub-main-w3">
                <div class="wthree-pro">
                    <h2>Login Quick</h2>
                </div>
                <form action="#" method="post">
                    <div class="pom-agile">
                        <input placeholder="Account" name="Name" class="user" type="text" required="">
                        <span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                    </div>
                    <div class="pom-agile">
                        <input placeholder="Password" name="Password" class="pass" type="password" required="">
                        <span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
                    </div>
                    <div class="sub-w3l">
                        <h6><a href="#">Forgot Password?</a></h6>
                        <div class="right-w3l">
                            <input type="submit" value="Login">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!--//main-->
        <!--footer-->
        <div class="footer">
            <p>&copy; 2017 Online Login Form. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
        </div>
        <!--//footer-->
    </div>
</div>


@endsection