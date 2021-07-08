<!doctype html>
<html class="no-js" lang="zxx">


@include('bookszone.includes.head')

<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- Main wrapper -->
<div class="wrapper" id="wrapper">

    <!-- Header -->
@include('bookszone.includes.header')

@yield('pageContent')

@include('bookszone.includes.footer')
</body>
</html>
