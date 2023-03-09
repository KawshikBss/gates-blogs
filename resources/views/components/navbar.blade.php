<div class="navbar-container">
    <a href="/"><img src="{{ asset('images/logo.png') }}" class="navbar-logo" /></a>
    <div class="navbar-links">
        <a href="/" class="navbar-navlink navlink-active">Home</a>
        <a href="#" class="navbar-navlink">Connect</a>
        @if(auth()->user())
        <span>{{auth()->user()->name}}</span>
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf

            <button class="navbar-navlink" type="submit">
                Logout
            </button>
        </form>
        @else
        <a href="{{route('signup')}}" class="navbar-navlink">Sign up</a>
        <a href="{{route('login')}}" class="navbar-navlink">Login</a>
        @endif
    </div>
</div>