<script>
    document.title = "Verification | KC Auto Connect";
    document.querySelector('title').innerHTML = document.title;
</script>
@extends('layouts.app')
@section('content')
<x-auth.card title="Forgot Password" description="Kindly enter your verification code to change the password.
.">
    <x-slot name="inputs">
        <x-input name="email" placeholder="Enter Verification Code" />
        <x-button value="Resend Code " href="#" type="a" classes="text-secondary text-decoration-none text-sm-light d-flex w-95 justify-content-end  primary-btn" />
        <p><span><a href="" class="text-decoration-none text-secondary">Back To Login</a></span></p>
        <x-button  type="a" href="{{ route('new-password') }}" value="Continue" classes="btn-primary form-btn rounded-pill w-100 d-flex justify-content-center mx-auto text-decoration-none hover-white" />
    </x-slot>
</x-auth.card>
@endsection
