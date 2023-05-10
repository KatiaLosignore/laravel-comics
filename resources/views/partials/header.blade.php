<header>
    <div class="info"></div>
    <div class="container navbar">
        <div class="nav-left">
            <figure>
                <img src="{{Vite::asset('resources/img/dc-logo.png') }}" alt="Logo">
            </figure>
        </div>
        <div class="nav-center">
            <ul>
                @foreach ($pages as $page)    
                    <li> <a href="#"> {{ $page }} </a> </li>
                @endforeach
            </ul>
        </div>
        <div class="nav-right">
            <input type="search" placeholder="Search"> 
        </div>
    </div>
</header>