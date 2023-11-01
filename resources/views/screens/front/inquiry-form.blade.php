<script>
    document.title = "Inquiry Form | KC Auto Connect";
    document.querySelector('title').innerHTML = document.title;
</script>
@extends('layouts.front')
@section('content')
    <div class="inquiry">
        <section class="banner bg-img mb-5">
            <div class="container-fluid">
                <div class="row justify-content-center text-center">
                    <div class="col-md-12">
                        <div>
                            <h1 class="text-lg mb-3">Inquiry Form</h1>
                            <div class="border-bottom-cs all-center m-auto"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-layer w-100">
                <img src="{{ asset('/assets/images/faq-banner-bottom-layer.png') }}" class="img-fluid w-100" alt="kc">
            </div>
        </section>

        <section class="inquiry-sec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-sm-12 mx-auto">
                        <h2 class="sec-hd text-start">Get an instant offer</h2>
                        <p class="sec-subtitle">We'll keep track of your answers over here. You can jump back to a previous
                            question any tim</p>
                        <h3 class="sec-bd">Tell us a little about your car.</h3>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-10 col-sm-12 mx-auto">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link step-indicators active" id="home-tab">Vehicle</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link step-indicators " id="profile-tab">Ownership</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link step-indicators" id="contact-tab">Condition</button>
                            </li>
                        </ul>
                        {{-- <form action=""> --}}
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane-form  tab-form-1" id="home-tab-pane" role="tabpanel"
                                    aria-labelledby="home-tab" tabindex="0">
                                    <h3 class="tabs-heading">Vehicle</h3>
                                    <div class="select-wrapper">
                                        <label for="select" class="tabs-label pb-12">
                                            Year
                                        </label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <label for="select" class="tabs-label pb-12 p-40">
                                            Make
                                        </label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <label for="select" class="tabs-label pb-12 p-40">
                                            Model
                                        </label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <label for="select" class="tabs-label pb-12 p-40">
                                            Trim<span style="color: red;">*</span>
                                        </label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <div class="d-flex justify-content-center ">
                                            <x-button value="Next" type="button" id="next-tabs-btn-1"
                                                classes=" text-center p-5 fs-2 tabs-next-btn tabs-btn-next-prev" />
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane-form   tab-form-2" id="profile-tab-pane" role="tabpanel"
                                    aria-labelledby="profile-tab" tabindex="0">
                                    <h3 class="tabs-heading">Ownership</h3>
                                    <div class="select-wrapper">
                                        <label for="select" class="tabs-label pb-12">
                                            Year
                                        </label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <label for="select" class="tabs-label pb-12 p-40">
                                            Make
                                        </label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <label for="select" class="tabs-label pb-12 p-40">
                                            Model
                                        </label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <label for="select" class="tabs-label pb-12 p-40">
                                            Trim<span style="color: red;">*</span>
                                        </label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <div class="d-flex justify-content-center ">
                                            {{-- <x-button value="Back " type="a" classes=" text-center p-5 fs-2" href="javascript:void(0)" /> --}}
                                            <x-button value="Back" type="button" id="prev-tabs-btn-1"
                                                classes="text-center p-5 fs-2 tabs-next-btn tabs-btn-next-prev" />
                                            <x-button value="Next" type="button" id="next-tabs-btn-2"
                                                classes=" text-center p-5 fs-2 tabs-next-btn tabs-btn-next-prev" />


                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane-form  tab-form-3" id="contact-tab-pane" role="tabpanel"
                                    aria-labelledby="contact-tab" tabindex="0">
                                    <h3 class="tabs-heading">Condition</h3>
                                    <div class="select-wrapper">
                                        <label for="select" class="tabs-label pb-12">
                                            Year
                                        </label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <label for="select" class="tabs-label pb-12 p-40">
                                            Make
                                        </label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <label for="select" class="tabs-label pb-12 p-40">
                                            Model
                                        </label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <label for="select" class="tabs-label pb-12 p-40">
                                            Trim<span style="color: red;">*</span>
                                        </label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <div class="d-flex justify-content-center ">
                                            {{-- <x-button value="Back " type="a" classes=" text-center p-5 fs-2" href="javascript:void(0)" /> --}}
                                            <x-button value="Back" type="button" id="prev-tabs-btn-2"
                                                classes=" text-center p-5 fs-2 tabs-next-btn tabs-btn-next-prev" />
                                            <x-button value="Submit" type="button" id="next-tabs-btn-2"
                                                classes=" text-center p-5 fs-2 tabs-next-btn tabs-btn-next-prev" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {{-- </form> --}}
                    </div>
                </div>
            </div>
        </section>

        <section class="cars-sec">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10 col-12">
                        <div class="car-text text-center">
                            <h2>Van and car leasing for business and personal use</h2>
                            <h5>Here at KC Autoconnect, we make car and van leasing simple.</h5>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a
                                page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal distribution of letters, as opposed to using 'Content here, </p>
                            <p>content here', making it look like readable English. Many desktop publishing packages and web
                                page editors now use Lorem Ipsum as their default model text, </p>
                            <p>a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various
                                versions have evolved over the years, sometimes by accident, sometimes on purpose (injected
                                humour and the like).</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="cars-img">
                            <img src="{{ asset('/assets/images/cars.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="cars-icons">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-lg-1 col-md-2 col-sm-3">
                                    <img src="{{ asset('/assets/images/footer-img-1.png') }}" alt="">
                                </div>
                                <div class="col-lg-1 col-md-2 col-sm-3">
                                    <img src="{{ asset('/assets/images/footer-img-2.png') }}" alt="">
                                </div>
                                <div class="col-lg-1 col-md-2 col-sm-3">
                                    <img src="{{ asset('/assets/images/footer-img-3.png') }}" alt="">
                                </div>
                                <div class="col-lg-1 col-md-2 col-sm-3">
                                    <img src="{{ asset('/assets/images/footer-img-4.png') }}" alt="">
                                </div>
                                <div class="col-lg-1 col-md-2 col-sm-3">
                                    <img src="{{ asset('/assets/images/footer-img-5.png') }}" alt="">
                                </div>
                                <div class="col-lg-1 col-md-2 col-sm-3">
                                    <img src="{{ asset('/assets/images/footer-img-6.png') }}" alt="">
                                </div>
                                <div class="col-lg-1 col-md-2 col-sm-3">
                                    <img src="{{ asset('/assets/images/footer-img-7.png') }}" alt="">
                                </div>
                                <div class="col-lg-1 col-md-2 col-sm-3">
                                    <img src="{{ asset('/assets/images/footer-img-8.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
