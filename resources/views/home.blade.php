<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics</title>
    @vite('resources/js/app.js')
</head>
<body>
    <!-- Header -->
    @include('partials.header')
    <!-- Main -->
    <main>
        <!-- Jumbotron -->
        <div class="jumbo"></div>
        <!-- main-top -->
        <section class="main-top">
            <div class="title"> Current Series </div>
            <div class="container">
                @foreach($comics as $comic)
                <div class="card">
                    <figure>
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['type'] }}">
                    </figure>
                    <figcaption> {{ $comic['series'] }} </figcaption>
                </div>
                @endforeach
            </div>
        </section>
        <!-- main bottom -->
        <section id="banner">
            <ul class="container">
                @foreach($banners as $banner)
                    <li>
                        <img src="{{Vite:: asset('resources/img/'.$banner['image'])}}" alt="buy-comics-digital">
                        <p>{{$banner['text']}}</p>
                    </li>
                @endforeach
            </ul>
        </section>
    </main>
    <!--Footer -->
    @include('partials.footer')
</body>
</html>