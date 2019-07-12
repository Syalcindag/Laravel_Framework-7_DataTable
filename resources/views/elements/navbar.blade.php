<!-- Top Navbar. In Material theme it should be inside of the page-->
<div class="navbar theme-indigo">
  <div class="navbar-inner">
    <div class="left mobile-only">
            <a href="#" class="link icon-only open-panel" data-panel="left">
                <i class="icon icon-bars"></i>
            </a>
    </div>
    <div class="center">
        <a id="root" class="link external" href="{{url('/home')}}">
          Okul
        </a>
    </div>
    @auth
    <div class="right">
            <a href="{{ url('/okul/create') }}"  class="link external icon-only"><i class="icon f7-icons">add</i></a>
    </div>
    @else
    @endauth



  </div>
</div>

