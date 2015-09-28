<!doctype html>
<html lang="nl">
<head>
    @include('front.includes.head')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/assets/libs/foundation/css/foundation.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/assets/css/style.css') }}" />
</head>
<body class="{{$page->title}}">
    <section class="hero">
        <div class="row">
            <div class="large-12 columns">
                <div class="main-wrapper">
                    <h1>Schwach&ouml;fer</h1>
                    <h3>stucadoorsbedrijf Vof</h3>
                </div>
                <hr />
                <div class="row">
                    <div class="large-6 columns large-centered">
                        <ul class="button-group even-4">
                            @foreach($menuitems as $menu)
                                <li>
                                    <a href="{{ $menu->slug }}" title="{{$menu->title}}" class="button">
                                        {{$menu->title}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="large-6 columns about-box">
                <div class="black-box">
                    <h2>Al uw stucadoorwerken</h2>
                    <p><strong>Specialisaties:</strong><br />
                        Sierpleisters, restauraties, renovaties,<br />
                        gipslijsten & ornamenten
                    </p>
                    <p>Interesse neem dan contact op!</p>
                    <a href="#" class="secondary small button">Direct contact →</a>
                </div>
            </div>
        </div>
    </section>
    @if ($page->title == 'Home')
        <section class="hero-content">
            <div class="row">
                <!-- home content -->
            </div>
        </section>
    @else
        <section>
            <div class="row">
                <div class="col-md-12">
                    <h1>@yield('title')</h1>
                    @yield('content')
                    @yield('contact-form')
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </section>
    @endif
    @include('front.includes.footer')
</body>
</html>