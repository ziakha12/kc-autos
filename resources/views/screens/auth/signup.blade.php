<script>
    document.title = "SignIn | KC Auto Connect";
    document.querySelector('title').innerHTML = document.title;
</script>
@extends('layouts.app')
@section('content')
    <x-auth.card title="Sign Up" description="Come on, go to school here and get extensive knowledge">
        <x-slot name="inputs">
            <x-input name="first_name*" />
            <x-input name="last_name*" />
            <x-input name="phone_number*" />
            <x-input name="email:*" />
            <x-input name="password:*" />
            <x-input name="password_confirmation:*" />
            <div class="d-flex justify-content-center">
                <x-button value="Sign Up " type="a" classes="from-primary-btn text-decoration-none rounded-pill"
                    href="{{ route('signin') }}" />
            </div>
            {{-- <button type="button" class="btn-primary form-btn rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Signup
              </button>
            <p>Don't have an account? <span class="text-dark">Sign In</span></p>
            <x-modal id="exampleModal" title="Signedup Successfully!" btnTitle="Login" /> --}}
        </x-slot>
    </x-auth.card>
@endsection
