<script>
    document.title = "Contact Us | KC Auto Connect";
    document.querySelector('title').innerHTML = document.title;
</script>
@extends('layouts.user')
@section('content')
    <div class="contact-page">
        <section class="banner bg-img">
            <div class="container-fluid">
                <div class="row justify-content-center text-center">
                    <div class="col-md-12">
                        <div>
                            <h1 class="text-lg mb-3">Contact us</h1>
                            <div class="border-bottom-cs all-center m-auto"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="para-sec pt-70 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <div class="contact-info">
                            <h3 class="fw-bold text-black">Get In Touch</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <p>45 Crescent Road Pinetree Avenue P.O. Box 3242</p>
                            <p><span class="fw-medium  text-black ">Customer Centre:</span><br><x-button href="tel:+614 7343 3254" type="a" classes="tel-text" value="+614 7343 3254"/></p>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12">
                        <div class="contact-form">
                            <div class="row justify-content-center">
                                <div class="row g-3">
                                    <div class="col">
                                     <x-input name="Full Name"/>
                                    </div>
                                    <div class="col">
                                        <x-input name="hello@creative-tim.com"/>
                                    </div>
                                  </div>
                                <div class="col-12">
                                    <textarea name="Your Message..." id="" placeholder="Your Message..."></textarea>
                                    <x-button value="Send messages " type="button" classes="contact-btn rounded-pill f-open-sans uppercae fw-bold" />

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
