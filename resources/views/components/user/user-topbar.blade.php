<header class="head shadow-sm">
      <div class="top-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-4 col-md-3">
                    <p class="text-white nav-phone"><span class="px-2"><i class="fa-solid fa-phone"></i></span>Sales -
                        <x-button classes="text-decoration-none text-white" href="tel:123-456-689" type="a" value="123-456-689"/></p>
                </div>
                <div class="col-8 col-md-9 col-lg-9">
                    <ul class="primary-navs">
                        <li class="nav-item">
                            <x-topbar.link class="nav-link active" title="About Us" href="{{ route('about-us') }}" />
                        </li>
                        <li class="nav-item px-3">
                            <x-topbar.link class="nav-link active" title="Knowledge Bank" href="#" />
                        </li>
                        <li class="nav-item px-3">
                            <x-topbar.link class="nav-link active" title="Blog" href="#" />
                        </li>
                        <li class="nav-item px-3">
                            <x-topbar.link class="nav-link active" title="Reviews" href="#" />
                        </li>
                        <li class="nav-item px-3">
                            <a class="nav-button nav-link text-white px-5" href="">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
      <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="lower-head d-flex justify-content-between my-4 align-items-center   ">
                    <div class="logo">
                        <a class="navbar-brand" href="#">
                            <img src="{{ asset('/assets/images/logo.png')}}" alt="kc" >
                          </a>
                    </div>
                    <div class="lower-nav-links">
                        <ul class="navbar-nav d-flex ">
                            <li class="nav-item">
                              <x-user.link classes="-lower-nav-link text-dark" title="Home" href="#" />
                            </li>
                            <li class="nav-item px-3">
                                {{-- <x-user.link classes="-lower-nav-link text-dark" title="Sell" href="#" /> --}}
                                <x-button  href="" type="button" value="Sell" classes="-lower-nav-link text-dark step-form-btn" databstoggle="modal" databstarget="#exampleModal2"  />
                            </li>
                            <li class="nav-item px-3">
                                <x-user.link classes="-lower-nav-link text-dark" title="Offers" href="{{route('offers')}}" />
                            </li>
                            <li class="nav-item px-3">
                                <x-user.link classes="-lower-nav-link text-dark" title="Our Team" href="{{route('our-team')}}" />
                            </li>
                            <li class="nav-item px-3">
                                <x-user.link classes="-lower-nav-link text-dark" title="About Us" href="{{route('about-us')}}" />
                            </li>
                            <li class="nav-item px-3">
                                <x-user.link classes="-lower-nav-link text-dark" title="Contact Us" href="{{route('contact-us')}}" />
                            </li>
                            <div class="close-menu">
                                <i class="fa-solid fa-xmark menu-toggle"></i>
                            </div>
                          </ul>
                    </div>
                    <div class="user-dropdowns d-flex ">
                       <div class="notification">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle notification-dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-bell fa-2x text-primary mt-1"></i>
                            </button>
                            {{-- <ul class="dropdown-menu ">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul> --}}
                            <x-user.notification/>
                          </div>

                       </div>
                        <div class="user-account d-flex align-items-center">
                            <i class="fa-solid fa-circle-user fa-2x text-primary"></i>
                            <div class="dropdown">
                                <button class="btn dropdown-toggle user-dropdown " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Hi , Mark <i class="fa-solid fa-chevron-down"></i>
                                </button>
                                <ul class="dropdown-menu ">
                                  <li><a class="dropdown-item" href="{{route('contact-us') }}" ><i class="fa-solid fa-user"></i>Contact us</a></li>
                                  <li><a class="dropdown-item" href="{{route('about-us') }}"> <i class="fa-regular fa-clock"></i>About us</a></li>
                                  <li><a class="dropdown-item" href="{{route('our-team') }}"><i class="fa-solid fa-sliders"></i>Our Team</a></li>
                                  <li><a class="dropdown-item" href="#"><i class="fa-solid fa-right-from-bracket"></i>Request</a></li>
                                  <li><a class="dropdown-item" href="{{route('signin') }}"><i class="fa-solid fa-right-from-bracket"></i>Log Out</a></li>
                                </ul>
                              </div>

                           </div>

                        </div>
                        <div class="open-menu">
                            <i class="fa-solid fa-bars menu-toggle"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <x-modal title=""  />
    {{-- <x-topbar.link title="Title" href="nowhere" />
    <x-topbar.link title="Title2" href="nowhere2" />
    <x-topbar.link title="Title3" href="nowhere3" />
    <x-topbar.link title="Title4" href="nowhere4" /> --}}
</header>
