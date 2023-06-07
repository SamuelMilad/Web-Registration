@extends('layouts.app')

@section('title', __('messages.index'))

@section('content')

    <div class="form-container">
        <form action="/" method="POST" enctype="multipart/form-data" id="form" onsubmit="return validateInputs()">
            @csrf
            <h1>{{ __('messages.registration_form') }}</h1>
            <div class="input-control">
                <input type="text" id="fullname" name="full_name" placeholder="{{ __('messages.enter_full_name') }}"
                       class="box">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <input type="text" id="username" name="user_name" placeholder="{{ __('messages.enter_user_name') }}"
                       class="box">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <input type="email" id="email" name="email" placeholder="{{ __('messages.enter_email') }}" class="box">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <input type="password" id="password" name="password" placeholder="{{ __('messages.enter_password') }}"
                       class="box">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <input type="password" id="password2" name="confirm_password"
                       placeholder="{{ __('messages.confirm_password') }}" class="box">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <input type="date" name="birthdate" class="box" id="birthdate">
                <div class="error"></div>
            </div>
            <button onclick="getActors()" type="button">{{ __('messages.get_actors') }}</button>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="{{ asset('script.js') }}"></script>

            <div class="input-control">
                <input type="tel" id="phone" name="phone" placeholder="{{ __('messages.enter_phone') }}" class="box">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <textarea name="address" id="address" placeholder="{{ __('messages.enter_address') }}"
                          class="box"></textarea>
                <div class="error"></div>
            </div>
            <div class="input-control">
                <input type="file" id="file" name="user_image" accept="image/*" class="box">
                <div class="error"></div>
            </div>
            <button type="submit" name="submit" class="btn">{{ __('messages.register') }}</button>
        </form>
    </div>

    <div class="actorscontainer">
        <ul id="actors"></ul>
    </div>

@endsection
