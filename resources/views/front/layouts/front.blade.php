@include('front.layouts.header-meta')

@yield('meta')

</head>

<body class="fixed-nav sticky-footer bg-light" id="page-top">

@include('front.layouts.header-nav')

<!-- メインコンテンツ -->
<main role="main" class="container"></main>
<!-- /メインコンテンツ -->

@include('front.layouts.footer')
@include('front.layouts.footer-script')

@yield('script')
</body>
</html>
