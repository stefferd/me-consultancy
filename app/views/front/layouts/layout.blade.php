<!doctype html>
<html lang="nl">
<head>
    @include('front.includes.head')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/assets/libs/foundation/css/foundation.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('public/assets/css/style.css') }}" />
</head>
<body class="{{$page->title}}">
    <div data-magellan-expedition="fixed" class="sticky-header">
		<nav class="top-bar" data-topbar role="navigation">
			<section class="brand">
				<div class="name">
					<a href="/" title="ME-Consultancy">
						ME-Consultancy
					</a>
				</div>
			</section>
			<section class="top-bar-section">
				<ul>
					@foreach($menuitems as $menu)
						@if (count($menu->children()->get()) > 0)
							@if ($menu->slug == $page->slug)
								<li class="active has-dropdown">
							@else
								<li class="has-dropdown">
							@endif
						@else
							@if ($menu->slug == $page->slug)
								<li class="active">
							@else
								<li>
							@endif
						@endif
							<a href="/{{ $menu->slug }}" title="{{$menu->title}}" class="button">
								{{$menu->title}}
							</a>
							@if (count($menu->children()->get()) > 0)
								<ul class="dropdown">
								@foreach ($menu->children()->get() as $child)
									<li>
										<a href="/{{ $menu->slug }}/{{ $child->slug }}" title="{{$child->title}}" class="button">
											{{$child->title}}
										</a>
									</li>
								@endforeach
								</ul>
							@endif
						</li>
					@endforeach
				</ul>
			</section>
		</nav>
	</div>
    <section class="hero">
        <div class="row">
            <div class="slogan">{{$slogan->value}}</div>
        </div>
    </section>
    @if ($page->title == 'Home')
        <section role="main">
            <div class="row">
                <div class="large-12 columns">
                    <h1>@yield('title')</h1>
                    @yield('content')
                </div><!-- /.col-md-4 -->
            </div>
        </section>
    @else
        <section role="main">
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