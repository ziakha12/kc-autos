<script>
    document.title = "Forget Password | KC Auto Connect";
    document.querySelector('title').innerHTML = document.title;
</script>
@extends('layouts.app')
@section('content')
    <x-auth.card title="Forgot Password" description="Kindly enter your email address to change the password.">
        <x-slot name="inputs">
            <x-input name="Email Address" />
            <x-button  href="{{ route('signin') }}" type='a' classes="text-decoration-none text-sm-light d-flex justify-content-center mb-3 capitilized " value="Back To Login"/>
            <div class="d-flex justify-content-center">
                <x-button value="Continue" type="a" href="{{ route('new-password') }}"
                    classes="btn-primary form-btn rounded-pill text-decoration-none hover-white " />
            </div>
        </x-slot>
    </x-auth.card>
@endsection
