<!-- Panels Overlay -->
<div class="panel-overlay"></div>

<!-- Left Panel with Reveal effect -->
<div class="panel panel-left panel-reveal">
  <div class="content-block">
    <div class="content-block-title">Men&uacute;</div>

    <div class="list-block accordion-list">
      <ul>

        @auth
        <li>
            <a class="item-link item-content external" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">

                <div class="item-inner">
                        <div class="item-title">{{ __('Logout') }}</div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                        </form>
                </div>
            </a>
        </li>
        @else
        <li>
                <a href="/login" class="item-link item-content external">
                    <div class="item-inner">
                        <div class="item-title">Login</div>
                    </div>
                </a>
        </li>
        <li>
                <a href="/register" class="item-link item-content external">
                    <div class="item-inner">
                        <div class="item-title">Register</div>
                    </div>
                </a>
        </li>
        @endauth

      </ul>
    </div>

  </div>
</div>
