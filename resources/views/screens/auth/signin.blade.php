<script>
    document.title = "SignIn | KC Auto Connect";
    document.querySelector('title').innerHTML = document.title;
</script>
@extends('layouts.app')
@section('content')
    <x-auth.card title="Sign In" description="Come on, go to school here and get extensive knowledge">
        <x-slot name="inputs">
            <x-input name="email" />
            <x-password-input name="password" />
            <x-button value="forget Password? " href="{{ route('forget') }}" type="a"
                classes="text-decoration-none text-sm-light d-flex w-95 justify-content-end mb-4 primary-btn" />
            <div class="d-flex justify-content-center">
                <x-button value="Sign In" type="a" classes=" text-decoration-none from-primary-btn rounded-pill"  href="{{ route('home') }}" />
            </div>
            <p>New here? <span><x-button href="{{ route('signup') }}" type="a"
                        classes="text-dark text-decoration-none" value="Create an account" /></span></p>
        </x-slot>
    </x-auth.card>
@endsection
