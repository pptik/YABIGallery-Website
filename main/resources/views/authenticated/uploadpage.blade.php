
<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    <title>Yayasan Badak Indonesia</title>
    <link rel="shortcut icon" href="{{url('/')}}/main/resources/assets/images/logohome.png"/>
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/main/resources/assets/semantic/dist/components/reset.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/main/resources/assets/semantic/dist/components/site.css">

    <link rel="stylesheet" type="text/css" href="{{url('/')}}/main/resources/assets/semantic/dist/components/container.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/main/resources/assets/semantic/dist/components/grid.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/main/resources/assets/semantic/dist/components/header.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/main/resources/assets/semantic/dist/components/image.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/main/resources/assets/semantic/dist/components/menu.css">

    <link rel="stylesheet" type="text/css" href="{{url('/')}}/main/resources/assets/semantic/dist/components/divider.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/main/resources/assets/semantic/dist/components/dropdown.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/main/resources/assets/semantic/dist/components/segment.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/main/resources/assets/semantic/dist/components/button.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/main/resources/assets/semantic/dist/components/list.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/main/resources/assets/semantic/dist/components/icon.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/main/resources/assets/semantic/dist/components/sidebar.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/main/resources/assets/semantic/dist/components/transition.css">

    <style type="text/css">

        .menucolored{
            color: white;
        }
        .hidden.menu {
            display: none;
        }

        .masthead.segment {
            min-height: 700px;
            padding: 1em 0em;
        }
        .masthead .logo.item img {
            margin-right: 1em;
        }
        .masthead .ui.menu .ui.button {
            margin-left: 0.5em;
        }
        .masthead h1.ui.header {
            margin-top: 3em;
            margin-bottom: 0em;
            font-size: 4em;
            font-weight: normal;
        }
        .masthead h2 {
            font-size: 1.7em;
            font-weight: normal;
        }

        .ui.vertical.stripe {
            padding: 8em 0em;
        }
        .ui.vertical.stripe h3 {
            font-size: 2em;
        }
        .ui.vertical.stripe .button + h3,
        .ui.vertical.stripe p + h3 {
            margin-top: 3em;
        }
        .ui.vertical.stripe .floated.image {
            clear: both;
        }
        .ui.vertical.stripe p {
            font-size: 1.33em;
        }
        .ui.vertical.stripe .horizontal.divider {
            margin: 3em 0em;
        }

        .quote.stripe.segment {
            padding: 0em;
        }
        .quote.stripe.segment .grid .column {
            padding-top: 5em;
            padding-bottom: 5em;
        }

        .footer.segment {
            padding: 5em 0em;
        }

        .secondary.pointing.menu .toc.item {
            display: none;
        }

        @media only screen and (max-width: 700px) {
            .ui.fixed.menu {
                display: none !important;
            }
            .secondary.pointing.menu .item,
            .secondary.pointing.menu .menu {
                display: none;
            }
            .secondary.pointing.menu .toc.item {
                display: block;
            }
            .masthead.segment {
                min-height: 350px;
            }
            .masthead h1.ui.header {
                font-size: 2em;
                margin-top: 1.5em;
            }
            .masthead h2 {
                margin-top: 0.5em;
                font-size: 1.5em;
            }
        }


    </style>

    <script src="{{url('/')}}/main/resources/assets/semantic/dist/jquery.min.js"></script>
    <script src="{{url('/')}}/main/resources/assets/semantic/dist/components/visibility.js"></script>
    <script src="{{url('/')}}/main/resources/assets/semantic/dist/components/sidebar.js"></script>
    <script src="{{url('/')}}/main/resources/assets/semantic/dist/components/transition.js"></script>
    <script>
        $(document)
            .ready(function() {

                // fix menu when passed
                $('.masthead')
                    .visibility({
                        once: false,
                        onBottomPassed: function() {
                            $('.fixed.menu').transition('fade in');
                        },
                        onBottomPassedReverse: function() {
                            $('.fixed.menu').transition('fade out');
                        }
                    })
                ;

                // create sidebar and attach to menu open
                $('.ui.sidebar')
                    .sidebar('attach events', '.toc.item')
                ;

                $("button").click(function() {
                    $('html,body').animate({
                            scrollTop: $(".second").offset().top},
                        'slow');
                });

            })
        function scrooltodiv(selecteddiv) {
            $('html,body').animate({
                    scrollTop: $(selecteddiv).offset().top},
                'slow');
        };
        ;
    </script>
</head>
<body>

<!-- Following Menu -->
<div class="ui large top fixed hidden menu" style="border-color: transparent;background-color: white">
    <div class="ui container">
        <a class="item " href="{{url('/')}}" ><i class="icon home" ></i></a>
        <a class="item" onclick="scrooltodiv('#tentangkami')">Tentang Kami</a>
        <a class="item" onclick="scrooltodiv('#produkkami')">Live View</a>
        <a class="active item" href="{{url('/gallery')}}" >Galeri</a>
        <div class="ui large secondary pointing right menu">
            <a class="item">Logout</a>
        </div>


    </div>
</div>
<div class="ui vertical sidebar menu" style="border-color: #9fa474;">
    <a class="item " href="{{url('/')}}" >Home <i class="icon home" ></i></a>
    <a class="item" onclick="scrooltodiv('#tentangkami')">Tentang Kami</a>
    <a class="item" onclick="scrooltodiv('#produkkami')">Live View</a>
    <a class="active item" href="{{url('/gallery')}}" >Galeri</a>
    <div class="ui large secondary pointing right menu">
        <a class="item">Logout</a>
    </div>
</div>
<div class="pusher" style="background-color: whitesmoke">
    <div class="ui large secondary pointing menu" style="border-color: transparent;background-color: #9fa474">
        <a class="toc item">
            <i class="sidebar icon"></i>
        </a>
        <a class=" item" href="{{url('/')}}"><img class="ui avatar image" src="{{url('/')}}/main/resources/assets/images/logohome.png"></a>
        <a class="item" onclick="scrooltodiv('#tentangkami')">Tentang Kami</a>
        <a class="item" onclick="scrooltodiv('#produkkami')">Live View</a>
        <a class="active item" href="{{url('/gallery')}}" >Galeri</a>
        <div class="ui large secondary inverted pointing right menu" style="border-color: transparent">
            <a class="item">Logout</a>
        </div>
    </div>
    
</div>



</body>

</html>
