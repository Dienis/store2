<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Laravel</title>

  <!-- Bootstrap CSS -->
  <link href="{!! asset('css/bootstrap.min.css') !!}" media="all" rel="stylesheet" type="text/css" />
  <link href="{!! asset('css/style.css') !!}" media="all" rel="stylesheet" type="text/css" />
  <script
   src="https://code.jquery.com/jquery-3.2.1.js"
   integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
   crossorigin="anonymous"></script>
</head>
<body>
<div class="wrapper">
{!! menu('topmenu', 'topmenu') !!}
<div class="sliders">
  @yield('sliders')
</div>
<div class="container">
  @include ('flash::message')
  @yield('content')
</div>
<footer class="site-footer">
    <div class="bottom">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-xs-12 text-lg-left text-center">
            <p class="copyright-text">
              © Store 2
            </p>
          </div>

          <div class="col-lg-6 col-xs-12 text-lg-right text-center">
            {!! menu('topmenu', 'bottommenu') !!}
          </div>

        </div>
      </div>
    </div>
  </footer>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script type="text/javascript" src="{!! asset('js/bootstrap.bundle.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/bootstrap.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('js/ajaxform.js') !!}"></script>
  <script type="text/javascript" src="https://use.fontawesome.com/0e446ace81.js"></script>
</div>
</body>
</html>
