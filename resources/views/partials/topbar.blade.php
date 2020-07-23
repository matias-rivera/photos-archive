<div class="top-bar">
    <div class="row">
        <div class="top-bar-left">
            <ul class="menu">
                <li class="menu-text"> {{ config('app.name', 'Laravel') }}</li>
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('albums.create')}}">Create Album</a></li>
            </ul>
        </div>
    </div>
</div>