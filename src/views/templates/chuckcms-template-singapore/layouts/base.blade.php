<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!-->
<html dir="ltr" class="no-js" lang="{{ LaravelLocalization::getCurrentLocale()}}" itemscope itemtype="http://schema.org/Article"><!--<![endif]-->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
@yield('meta')
<!-- Stylesheets -->
@if(array_key_exists('raw', $template->fonts))
<link href="https://fonts.googleapis.com/css?family={{ $template->fonts['raw'] }}" rel="stylesheet" type="text/css" />
@endif
@foreach($template->css as $cssKey => $cssValue)
	@if($cssValue['asset'] == 'true')
	<link rel="stylesheet" href="{{ asset($cssValue['href']) }}" type="text/css" />
	@endif
	@if($cssValue['asset'] == 'false')
	<link rel="stylesheet" href="{{ $cssValue['href'] }}" type="text/css" />
	@endif
@endforeach
@yield('css')
<!-- Document Title -->
<title>
@yield('title')
</title>

</head>

<body>
	<div id=jSplash>
      <div class="sk-folding-cube">
        <div class="sk-cube1 sk-cube"></div>
        <div class="sk-cube2 sk-cube"></div>
        <div class="sk-cube4 sk-cube"></div>
        <div class="sk-cube3 sk-cube"></div>
      </div>
    </div>
    <div id="overlay"></div>

	@include($template->hintpath . '::templates.' . $template->slug . '.includes.header')
		@yield('content')
	@include($template->hintpath . '::templates.' . $template->slug . '.includes.footer')


	<a id="to-the-top" style="display: block;"><i class="fa fa-angle-up"></i></a> <!-- Back To Top -->

	@foreach($template->js as $jsKey => $jsValue)
		@if($jsValue['asset'] == 'true')
			<script src="{{ asset($jsValue['href']) }}"></script>
		@endif
		@if($jsValue['asset'] == 'false')
			<script src="{{ $jsValue['href'] }}"></script>
		@endif
	@endforeach
	@yield('scripts')
</body>
</html>