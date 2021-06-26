<header>

  @auth
    <div class="">
      Ciao {{ Auth::user()->name }}
    </div>
  @endauth

  <div class="title">
    PIENISSIMO
  </div>

  @auth
    <div class="">
      <a href="{{ route('logout') }}"
         onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();"
      >
          {{ __('Logout') }}
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
      </form>
    </div>
  @endauth

</header>
