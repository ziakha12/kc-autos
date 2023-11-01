@props(['id', 'title' => $title ?? '', 'btnTitle'])
<div class="modal fade step-form-modal" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close all-center" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="step-form">
                            <form action="" id="step-form">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="step-form-wrap">
                                            <div class="header">
                                                <ul class="progress-bar-wrap d-flex ps-0 mb-0 justify-content-between ">
                                                    <li
                                                        class=" list-unstyled d-flex align-items-center text-22 f-700 f-ibm text-dark-brown indicators">
                                                        <span class="step-numbers  all-center me-3">1</span> Vehicle
                                                    </li>
                                                    <li class="list-unstyled"> <span class="right-arrow-icon"><i
                                                                class="fa-solid fa-chevron-right"></i></span></li>
                                                    <li
                                                        class="list-unstyled d-flex align-items-center text-22 f-700 f-ibm light-gray indicators">
                                                        <span
                                                            class="step-numbers  all-center me-3 bg-light-gray">2</span>
                                                        Ownership
                                                    </li>
                                                    <li class="list-unstyled"> <span class="right-arrow-icon"><i
                                                                class="fa-solid fa-chevron-right"></i></span></li>
                                                    <li
                                                        class="list-unstyled d-flex align-items-center text-22 f-700 f-ibm light-gray indicators">
                                                        <span
                                                            class="step-numbers  all-center me-3 bg-light-gray">3</span>
                                                        Condition
                                                    </li>
                                                </ul>
                                                <div class="border-bottom-light mb-40"></div>
                                                <x-auth.form submit="#" title="" description="">
                                                    <x-slot name="inputs">
                                                        <div class="content">
                                                            <div class="content__box visible__no-animation step-1">
                                                                <x-input label="Year:" name="year" />
                                                                <x-input label="Make:" name="make" />
                                                                <x-input label="Model:" name="model" />
                                                                <x-input label="Trim:" name="trim" />
                                                                <x-input label="Zipcode:" name="zipcode" />
                                                            </div>
                                                            <div class="content__box step-2">
                                                                {{-- <div class="content__box visible__no-animation step-1"> --}}
                                                                    <x-input label="Year2:" name="year" />
                                                                    <x-input label="Make2:" name="make" />
                                                                    <x-input label="Model2:" name="model" />
                                                                    <x-input label="Trim:" name="trim" />
                                                                    <x-input label="Zipcode:" name="zipcode" />
                                                                {{-- </div> --}}
                                                            </div>
                                                            <div class="content__box step-3">
                                                                {{-- <div class="content__box visible__no-animation step-1"> --}}
                                                                    <x-input label="Year2:" name="year" />
                                                                    <x-input label="Make2:" name="make" />
                                                                    <x-input label="Model2:" name="model" />
                                                                    <x-input label="Trim:" name="trim" />
                                                                    <x-input label="Zipcode:" name="zipcode" />
                                                                {{-- </div> --}}
                                                            </div>
                                                            <div class="d-flex justify-content-end w-96 btn-absolute">
                                                                <x-button type="button"
                                                                    classes="primary-btn form-prev-button"
                                                                    value="Previous" />
                                                                <x-button type="button" id="next-1"
                                                                    classes="primary-btn form-next-button"
                                                                    value="Next" />
                                                            </div>
                                                        </div>
                                                    </x-slot>
                                                </x-auth.form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
