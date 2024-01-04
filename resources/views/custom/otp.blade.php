<!doctype html>
<html lang="en">


<!-- Mirrored from codervent.com/syndron/demo/vertical/auth-cover-forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Jun 2023 10:45:22 GMT -->
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="/assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="/assets/css/pace.min.css" rel="stylesheet" />
	<script src="/assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="/assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="/assets/css/app.css" rel="stylesheet">
	<link href="/assets/css/icons.css" rel="stylesheet">
	<title>Syndron - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body class="">
	<!--wrapper-->
	<div class="wrapper">
		<div class="section-authentication-cover">
			<div class="">
				<div class="row g-0">
					<div class="col-12 col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex">
                        <div class="card shadow-none bg-transparent shadow-none rounded-0 mb-0">
							<div class="card-body">
                                 <img src="/assets/images/login-images/forgot-password-cover.svg" class="img-fluid" width="600" alt=""/>
							</div>
						</div>
					</div>
					<div class="col-12 col-xl-5 col-xxl-4 auth-cover-right align-items-center justify-content-center">
						<div class="card rounded-0 m-3 shadow-none bg-transparent mb-0">
							<div class="card-body p-sm-5">
								<div class="p-3">
									<div class="text-center">
										<img src="/assets/images/icons/forgot-2.png" width="100" alt="" />
									</div>
									<h4 class="mt-5 font-weight-bold">Verify Email</h4>
									{{-- <p class="text-muted">Enter your registered email ID to reset the password</p> --}}
                                    @if(Session::has('success'))
                                    <div class="alert alert-success">
                                        {{Session::get('success')}}
                                    </div>
                                    @endif
                                    @if(Session::has('error'))
                                    <div class="alert alert-danger">
                                        {{Session::get('error')}}
                                    </div>
                                    @endif

                                    <p class="time"></p>

                                    <form action="{{route('user.email.verify')}}" method="post">
                                        @csrf
									<div class="my-4">
										<label class="form-label">Email OTP<span class="text-danger">*</span></label>
										<input type="text" class="form-control" name="otp" required  />
									</div>
									<div class="d-grid gap-2">
										<button type="submit" class="btn btn-primary">Submit</button>

									</div>
                                    </form>
                                    <br><br>
                                    {{-- <button id="resendOtpVerification" class="btn btn-success">Resend Verification OTP</button> --}}
								</div>
							</div>
						</div>
					</div>

				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="/assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="/assets/js/jquery.min.js"></script>
	<script src="/assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="/assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--Password show & hide js -->

	<!--app JS-->
	<script src="/assets/js/app.js"></script>

    <script>
        function timer()
    {
        var seconds = 00;
        var minutes = 10;

        var timer = setInterval(() => {

            if(minutes < 0){
                $('.time').text('');
                clearInterval(timer);
            }
            else{
                let tempMinutes = minutes.toString().length > 1? minutes:'0'+minutes;
                let tempSeconds = seconds.toString().length > 1? seconds:'0'+seconds;

                $('.time').text(tempMinutes+':'+tempSeconds);
            }

            if(seconds <= 0){
                minutes--;
                seconds = 59;
            }

            seconds--;

        }, 1000);
    }

    timer();
    </script>
</body>

</html>
