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
                        <p>{{ $comic['series'] }}</p>
                    </div>
                @endforeach
            </div>
            <div class="buttons">
                <div class="load-button">LOAD MORE</div>
            </div>
        </section>
        <!-- main bottom -->
        <section id="banner">
            <ul class="container">
                @foreach($banners as $banner)
                    <li>
                        <img src="{{Vite::asset('resources/img/'.$banner['image'])}}" alt="buy-comics-digital" @if($loop->last) style="width:48px" @endif>    
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