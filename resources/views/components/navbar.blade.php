@section('more-css')
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,0,200" />
@endsection

<nav class="d-flex align-items-center py-2" style="background-color: #1F2A01;">
  @if (!Session::has('loginId'))
    <div class="ml-5">
      <img class="mr-2" src="{{ asset('assets/logo/desktop_logo_light.png') }}" alt="logo well plant" width="150">
      <a class="ml-4" href="#" style="text-decoration: none; color: #F4F0E3;">Home</a>
      <a class="ml-4" href="#" style="text-decoration: none; color: #F4F0E3;">About Us</a>
    </div>
    <div class="d-flex align-items-center ml-auto mr-5">
      <a href="#" style="text-decoration: none; color: #F4F0E3;">Login</a>
      <div class="ml-4 rounded" style="padding: 0.8rem; background-color: #F4F0E3;">
        <a href="#" style="text-decoration: none; color: #1F2A01">New Start</a>
      </div>
    </div>
  @else
    <div class="ml-5 mr-2" style="flex: 1">
      <img class="mr-2" src="{{ asset('assets/logo/desktop_logo_light.png') }}" alt="logo well plant" width="100">
    </div>
    <div class="ml-auto mr-2" style="flex: 2">
      <form class="form-inline" action="" method="">
        <input class="form-control mr-sm-2" type="search" name="searchBooks" placeholder="Search" aria-label="Search" style="border-radius: 15px; background-color: #DFDFDF; width: 100%;">
      </form>
    </div>
    <div class="d-flex justify-content-end align-items-center ml-auto mr-5" style="flex: 1">
      <a class="mr-4" href="#">
        <span class="material-symbols-outlined" style="font-size: 30px;">
          notifications
        </span>
      </a>
      <a class="mr-4" href="#">
        <span class="material-symbols-outlined" style="font-size: 30px;">
          shopping_cart
        </span>
      </a>
      <div class="nav-item dropdown">
        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="material-symbols-outlined" style="font-size: 30px;">
            account_circle
          </span>
        </a>
        <form action="/logout" method="POST">
          @csrf
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Profile</a>
            <div class="dropdown-divider"></div>
            <button type="submit" class="dropdown-item text-danger">Logout</button>
          </div>
        </form>
      </div>
    </div>
  @endif
</nav>