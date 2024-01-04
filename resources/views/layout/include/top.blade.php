<nav>
    <div class="nav-wrapper blue">
      <a href="#" class="brand-logo" style="padding-left: 10px">Laravel Practice</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('contato') }}">Contatos</a></li>
        @if(Auth::guest())
        <li><a href="{{ route('login') }}">Login</a></li>
        @else
        <li><a href="{{ route('admin.cursos') }}">Cursos</a></li>
        <li><a href="#">{{Auth::user()->name}}</a></li>
        <li><a href="{{ route('login.sair') }}">Sair</a></li>
        @endif
      </ul>
    </div>
  </nav>