@extends('layouts.adminLayout.admin_design')
@section('content')

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>Liberpool Wizard</title>
    <!-- Custom CSS -->
    <link href="{{ asset('assets/backend_assets/libs/jquery-steps/jquery.steps.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend_assets/libs/jquery-steps/steps.css') }}" rel="stylesheet">
    <link href="{{ asset('css/backend_css/style.min.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>


<div id="main-wrapper">
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Form Wizard</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Library</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="card">
                <div class="card-body wizard-content">
                    <h4 class="card-title">Basic Form Example</h4>
                    <h6 class="card-subtitle"></h6>
                    <form id="example-form" action="#" class="m-t-40">
                        <div>
                            <h3>Account</h3>
                            <section>
                                <label for="userName">User name *</label>
                                <input id="userName" name="userName" type="text" class="required form-control">
                                <label for="password">Password *</label>
                                <input id="password" name="password" type="text" class="required form-control">
                                <label for="confirm">Confirm Password *</label>
                                <input id="confirm" name="confirm" type="text" class="required form-control">
                                <p>(*) Mandatory</p>
                            </section>
                            <h3>Profile</h3>
                            <section>
                                <label for="name">First name *</label>
                                <input id="name" name="name" type="text" class="required form-control">
                                <label for="surname">Last name *</label>
                                <input id="surname" name="surname" type="text" class="required form-control">
                                <label for="email">Email *</label>
                                <input id="email" name="email" type="text" class="required email form-control">
                                <label for="address">Address</label>
                                <input id="address" name="address" type="text" class=" form-control">
                                <p>(*) Mandatory</p>
                            </section>
                            <h3>Hints</h3>
                            <section>
                                <ul>
                                    <li>Foo</li>
                                    <li>Bar</li>
                                    <li>Foobar</li>
                                </ul>
                            </section>
                            <h3>Finish</h3>
                            <section>
                                <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required">
                                <label for="acceptTerms">I agree with the Terms and Conditions.</label>
                            </section>
                        </div>
                    </form>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>






<script src="{{ asset('assets/backend_assets/libs/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset('assets/backend_assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('assets/backend_assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ asset('assets/backend_assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="{{ asset('assets/backend_assets/extra-libs/sparkline/sparkline.js') }}"></script>
<!--Wave Effects -->
<script src="{{ asset('js/backend_js/waves.js') }}"></script>
<!--Menu sidebar -->
<script src="{{ asset('js/backend_js/sidebarmenu.js') }}"></script>
<!--Custom JavaScript -->
<script src="{{ asset('js/backend_js/custom.min.js') }}"></script>
<!-- this page js -->
<script src="{{ asset('assets/backend_assets/libs/jquery-steps/build/jquery.steps.min.js') }}"></script>
<script src="{{ asset('assets/backend_assets/libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<script>
    // Basic Example with form
var form = $("#example-form");
form.validate({
    errorPlacement: function errorPlacement(error, element) { element.before(error); },
    rules: {
        confirm: {
            equalTo: "#password"
        }
    }
});
 form.children("div").steps({
    headerTag: "h3",
    bodyTag: "section",
    transitionEffect: "slideLeft",
    onStepChanging: function(event, currentIndex, newIndex) {
        form.validate().settings.ignore = ":disabled,:hidden";
        return form.valid();
    },
    onFinishing: function(event, currentIndex) {
        form.validate().settings.ignore = ":disabled";
        return form.valid();
    },
    onFinished: function(event, currentIndex) {
        alert("Submitted!");
    }
});


</script>

@endsection
