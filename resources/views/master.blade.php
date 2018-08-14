<!doctype html>
<html lang="{{config('app.locale')}}" dir="ltr">
<head>
    <script>
        function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for(var i=0; i<ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0)==' ') c = c.substring(1);
                if (c.indexOf(name) != -1) return c.substring(name.length, c.length);
            }
            return "";
        }
        function setCookie(c_name,value,expiredays)
        {
            var exdate=new Date()
            exdate.setDate(exdate.getDate()+expiredays)
            document.cookie=c_name+ "=" +escape(value)+
                ((expiredays==null) ? "" : ";expires="+exdate.toGMTString())+";path=/"
        }
        function uuidv4() {
            return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
                var r = Math.random() * 16 | 0, v = c == 'x' ? r : (r & 0x3 | 0x8);
                return v.toString(16);
            });
        }
        clientId = getCookie('clientId');
        if (!clientId){
            clientId = uuidv4();
        }
        setCookie('clientId',clientId,730);
        dataLayer = [{
            'clientId': clientId
        }];
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="{{config('app.locale')}}"/>
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"/>

    <title>@yield('seo_title') - {{title_case(setting('site.title'))}}</title>
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keywords')">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="/assets/js/require.min.js"></script>
    <script>
        requirejs.config({
            baseUrl: '/'
        });
    </script>
    <!-- Dashboard Core -->
    <link href="/assets/css/dashboard.css" rel="stylesheet"/>
    <script src="/assets/js/dashboard.js"></script>
    <!-- c3.js Charts Plugin -->
    <link href="/assets/plugins/charts-c3/plugin.css" rel="stylesheet"/>
    <script src="/assets/plugins/charts-c3/plugin.js"></script>
    <!-- Google Maps Plugin -->
    <link href="/assets/plugins/maps-google/plugin.css" rel="stylesheet"/>
    <script src="/assets/plugins/maps-google/plugin.js"></script>
    <!-- Input Mask Plugin -->
    <script src="/assets/plugins/input-mask/plugin.js"></script>

    <link href="/assets/css/custom.css" rel="stylesheet"/>
</head>
<body class="">
<div class="page">
    <div class="page-main">
        <div class="header py-4">
            <div class="container">
                <div class="d-flex">
                    <a class="header-brand" href="/">
                        <img src="/demo/brand/tabler.svg" class="header-brand-img" alt="logo">
                    </a>

                    <div class="d-flex order-lg-2 ml-auto">
                        {{--<div class="nav-item d-none d-md-flex">--}}
                            {{--<ul class="list-inline list-inline-dots mb-0">--}}
                                {{--<li class="list-inline-item"><a href="/docs/index.html">Documentation</a></li>--}}
                                {{--<li class="list-inline-item"><a href="/faq.html">FAQ</a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                        <div class="nav-item d-none d-md-flex">
                            <div class="dropdown">
                                <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe mr-2"></i>English
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">English</a>
                                    <a class="dropdown-item" href="#">中文</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse"
                       data-target="#headerMenuCollapse">
                        <span class="header-toggler-icon"></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="header collapse d-lg-flex p-0 bg-blue" id="headerMenuCollapse">
            <div class="container">
                <div class="row align-items-center">
                    {{--<div class="col-lg-4 ml-auto">--}}
                        {{--<form action="/search" method="get" class="input-icon my-3 my-lg-0">--}}
                            {{--<div class="input-group">--}}
                                {{--<input type="search" class="form-control header-search" name="keyword" placeholder="Search&hellip;"--}}
                                       {{--tabindex="1">--}}
                                {{--<span class="input-group-append">--}}
                              {{--<button class="btn btn-azure" type="submit"><i class="fe fe-search"></i></button>--}}
                            {{--</span>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    {{--</div>--}}


                    <div class="col-lg order-lg-first">
                        <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                            <li class="nav-item"><a href="/" class="nav-link"> 首页</a></li>
                            <li class="nav-item"><a href="/" class="nav-link"> 菜单1</a></li>
                            <li class="nav-item"><a href="/" class="nav-link"> 菜单2</a></li>
                            <li class="nav-item"><a href="/" class="nav-link"> 菜单3</a></li>
                            {{--<li class="nav-item">--}}
                            {{--<a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"> Interface</a>--}}
                            {{--<div class="dropdown-menu dropdown-menu-arrow">--}}
                            {{--<a href="./cards.html" class="dropdown-item ">Cards design</a>--}}
                            {{--<a href="./charts.html" class="dropdown-item ">Charts</a>--}}
                            {{--<a href="./pricing-cards.html" class="dropdown-item ">Pricing cards</a>--}}
                            {{--</div>--}}
                            {{--</li>--}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @yield('content')
    </div>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 mt-4 mt-lg-0">
                    友情链接 <br>
                    <small>相关站点</small>
                </div>
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-6 col-md-2">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#">First link</a></li>
                                <li><a href="#">Second link</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-2">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#">Third link</a></li>
                                <li><a href="#">Fourth link</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-2">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#">Third link</a></li>
                                <li><a href="#">Fourth link</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-2">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#">Third link</a></li>
                                <li><a href="#">Fourth link</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-2">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#">Third link</a></li>
                                <li><a href="#">Fourth link</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-2">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#">Third link</a></li>
                                <li><a href="#">Fourth link</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-auto ml-lg-auto">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <ul class="list-inline list-inline-dots mb-0">
                                <li class="list-inline-item"><a href="./docs/index.html">Documentation</a></li>
                                <li class="list-inline-item"><a href="./faq.html">FAQ</a></li>
                            </ul>
                        </div>
                        <div class="col-auto">
                            <a href="https://github.com/tabler/tabler" class="btn btn-outline-primary btn-sm">Source
                                code</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
                    <ul class="list-inline list-inline-dots mb-0">
                        <li class="list-inline-item">© 2018 Powered By Laravel 5.6 And Tabler</li>
                        {{--<li class="list-inline-item"><a href="./faq.html">About Or Beian</a></li>--}}
                    </ul>

                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>