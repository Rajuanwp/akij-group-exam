<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket Plus">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracketplus">
    <meta property="og:title" content="Bracket Plus">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Bracket Plus Responsive Bootstrap 4 adminin Template</title>

    <!-- vendor css -->
    <link href="{{ asset('admin') }}/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="{{ asset('admin') }}/lib/select2/css/select2.min.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ asset('admin') }}/css/bracket.css">
</head>

<body>

    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

        <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">
            <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> Akij <span
                    class="tx-info">Group</span> <span class="tx-normal">]</span></div>
            <div class="tx-center mg-b-40">User Regestration</div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    
                    <input type="text" id="name" class="form-control" name="name" :value="old('name')" required placeholder="Enter your username">
                </div><!-- form-group -->
            
                <div class="form-group">
                    
                    <input type="email" id="email" class="form-control" name="email" :value="old('email')" required placeholder="Enter your Email">
                </div><!-- form-group -->
            
                <div class="form-group">
                    
                    <input type="password" id="password" name="password" required autocomplete="new-password" class="form-control" placeholder="Enter your password">
                </div><!-- form-group -->
            
                <div class="form-group">
                    
                    <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password">
                </div><!-- form-group -->
            
              
            
                <button type="submit" class="btn btn-info btn-block">Sign Up</button>
            </form>
            

            <div class="mg-t-40 tx-center">Not yet a member? <a href="" class="tx-info">Sign Up</a></div>
        </div><!-- login-wrapper -->
    </div><!-- d-flex -->

    <script src="{{ asset('admin') }}/lib/jquery/jquery.min.js"></script>
    <script src="{{ asset('admin') }}/lib/jquery-ui/ui/widgets/datepicker.js"></script>
    <script src="{{ asset('admin') }}/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('admin') }}/lib/select2/js/select2.min.js"></script>
    <script>
        $(function() {
            'use strict';

            $('.select2').select2({
                minimumResultsForSearch: Infinity
            });
        });
    </script>

</body>

</html>
