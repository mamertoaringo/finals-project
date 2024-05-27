<x-guest-layout>
    <form class="row g-3 needs-validation"  method="POST" action="{{ route('register') }}"  >
        @csrf

        <!-- Name -->
        <div class="col-12">
            <x-input-label for="name" :value="__('Name')"  class="form-label"/>
            <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="invalid-feedback" />
        </div>

        <!-- Email Address -->
        <div class="col-12">
            <x-input-label for="email" :value="__('Email')"  class="form-label"/>
            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="invalid-feedback" />
        </div>

        <!-- Password -->
        <div class="col-12">
            <x-input-label for="password" :value="__('Password')"  class="form-label"/>

            <x-text-input id="password" class="form-control"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="invalid-feedback" />
        </div>

        <!-- Confirm Password -->
        <div class="col-12">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')"  class="form-label"/>

            <x-text-input id="password_confirmation" class="form-control"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="invalid-feedback" />
        </div>

        <div class="col-12">
            <div class="col-12">
                <x-primary-button class="btn btn-primary w-100" type="submit">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
            <div class="col-12">
            <p class="small mb-0 mt-4">have an account? <a href="{{ route('login') }}">
                {{ __('Login') }}
            </a></p>
            </div>
        </div>
    </form>
</x-guest-layout>
