<header class="d-flex justify-content-center align-items-center">

  @auth
    <div class="box">
      Ciao {{ Auth::user()->name }}
    </div>
  @endauth

  <div class="title text-center">
    PIENISSIMO
  </div>

  @auth
    <div class="box text-right">
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
