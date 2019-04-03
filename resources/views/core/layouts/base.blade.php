<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <title>@yield('title')</title>

  <meta charset="UTF-8">
  <link rel="shortlink" href="#"/>
  <link rel="canonical" href="#"/>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="@yield('meta.description')">
  <meta name="keywords" content="@yield('meta.keywords')">
  <meta name="language" content="{{ App::getLocale() }}">
  <meta name="publisher" content="">
  <meta name="robots" content="index,follow">
  <meta name="zipcode" content="">
  <meta name="city" content="">
  <meta name="country" content="Belgium">
  <meta name="MobileOptimized" content="width"/>
  <meta name="HandheldFriendly" content="true"/>

  <meta property="og:type" content="@yield('meta.og.type')">
  <meta property="og:title" content="@yield('meta.og.title')">
  <meta property="og:description" content="@yield('meta.og.description')">
  <meta property="og:url" content="@yield('meta.og.url')">
  <meta property="og:image" content="@yield('meta.og.image')">

  @yield('stylesheets')
  @yield('header-scripts')

  @yield('css')

</head>
<body>
@section('header')
  @include('core.layouts.header')
@show

<div class="main-content" id="main-content">
  @yield('content')
</div>

@section('footer')
  @include('core.layouts.footer')
@show

@yield('footer-scripts')
</body>
</html>
