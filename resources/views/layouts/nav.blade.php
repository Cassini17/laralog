    <div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link active" href="/">Blog</a>
          <a class="nav-link" href="#">Study</a>
          <a class="nav-link" href="/memos">Memos</a>
          @if (Auth::check())          
          <li class="ml-auto dropdown">
          	<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">{{ Auth::user()->name }}</a>
          	<ul class="dropdown-menu">
          		<li><a class="dropdown-item" href="/posts/create">New post</a></li>
          		<li><a class="dropdown-item" href="/memos/create">New memo</a></li>
          		<li><a class="dropdown-item" href="/profile">Profile</a></li>
          		<li><a class="dropdown-item" href="">Settings</a></li>
          		<li>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Sign out
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="dis
play: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
          	</ul>
          </li>
          @else
          <a class="nav-link active ml-auto" href="/login">Sign in</a>
          @endif
        </nav>
      </div>
    </div>

    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title">Jenny And Family</h1>
        <p class="lead blog-description">They live happily in the beautiful world.</p>
      </div>
    </div>