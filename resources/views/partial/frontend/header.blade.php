      <!-- navbar-->
      <header class="header bg-white">
        <div class="container px-lg-3">
          <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0">
            <a class="navbar-brand" href="{{route('frontend.index')}}"><span class="fw-bold text-uppercase text-dark">{{ config('app.name')}}</span></a>
            <button class="navbar-toggler navbar-toggler-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto">
                <li class="nav-item">
                  <!-- Link--><a class="nav-link active" href="{{route('frontend.index')}}">Home</a>
                </li>
                <li class="nav-item">
                  <!-- Link--><a class="nav-link" href="{{route('frontend.shop')}}">Shop</a>
                </li>
                <li class="nav-item">
                  <!-- Link--><a class="nav-link" href="{{route('frontend.detail')}}">Product detail</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="pagesDropdown" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a><div class="dropdown-menu mt-3 shadow-sm" aria-labelledby="pagesDropdown">
                    <a class="dropdown-item border-0 transition-link" href="{{route('frontend.index')}}">Homepage</a>
                    <a class="dropdown-item border-0 transition-link" href="{{route('frontend.shop')}}">Category</a>
                    <a class="dropdown-item border-0 transition-link" href="{{route('frontend.detail')}}">Product detail</a>
                    <a class="dropdown-item border-0 transition-link" href="{{route('frontend.cart')}}">Shopping cart</a>
                    <a class="dropdown-item border-0 transition-link" href="{{route('frontend.checkout')}}">Checkout</a>
                </div>
                </li>
              </ul>
              <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{route('frontend.cart')}}"> <i class="fas fa-dolly-flatbed me-1 text-gray"></i>Cart<small class="text-gray fw-normal">(2)</small></a></li>
                <li class="nav-item"><a class="nav-link" href="#!"> <i class="far fa-heart me-1"></i><small class="text-gray fw-normal"> (0)</small></a></li>

                @guest
                <li class="nav-item"><a class="nav-link" href="{{route('login')}}"> <i class="fas fa-user me-1 text-gray fw-normal"></i>Login</a></li>
                @else
                <li class="nav-item dropdown">
                  <a href="#!" class="nav-link dropdown-toggle" id="authDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="fas fa-user-alt mr-1 text-gray"></i>
                     Welcom, {{ auth()->user()->full_name }}
                     {{--  {{ auth()->user()->first_name . ' ' . auth()->user()->last_name }} --}}
                  </a>

                  <div class="dropdown-menu mt-3" aria-labelledby="authDropdown">
                    <a href="#!" class="dropdown-item border-0"> My profile</a>
                    <a href="javascript:void(0);" href="{{ route('logout') }}" class="dropdown-item border-0"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit(); ">Logout</a>
                  </div>
                  <form action="{{route('logout')}}" method="POST" id="logout-form" class="d-none">
                    @csrf
                  </form>

                  {{-- Smaher --}}
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                 Logout</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                 @csrf
                 </form>
                  {{-- Smaher --}}

                </li>
                @endguest

              </ul>
            </div>
          </nav>
        </div>
      </header>
