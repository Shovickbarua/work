<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Shopix') }}</title>
        <x-favicon/>
        {{-- Scripts --}}
        @vite(['resources/css/app.scss', 'resources/js/custom/store.js'])
    </head>
    <body>

        <div class="loginwrapper">
            <div class="lg-inner-column">

                <div class="left-column relative z-[1]">
                    <div class="pt-40 ltr:pl-36 rtl:pr-20">
                        <!-- APPLICATION LOGO -->
                        <div class="mb-80 ml-24 text-center">
                            <x-application-logo />
                        </div>
                        <h4 class="pl-10 text-white">
                            {{ __('Unlock your project') }}
                            <span class="text-white  font-bold">
                                {{ __('Performance') }}
                            </span>
                        </h4>
                    </div>
                    <div class="absolute left-0 2xl:bottom-0 bottom-0 h-full w-full z-[-1]">
                        <img class="h-full w-full object-containll" src="https://dashcode.codeshaper.net/assets/login-bg-4b614fc6.png" alt="image">
                    </div>
                </div>

                <div class="right-column  relative" >
                    <div class="inner-content h-full flex flex-col bg-white dark:bg-slate-800">
                        {{ $slot }}
                        <div class="auth-footer text-center">
                            {{ __('Copyright') }}
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            , <a href="#">{{ __('Shopix') }}</a>
                            {{ __('All Rights Reserved.') }}
                        </div>
                    </div>
                </div>

            </div>
        </div>


        @vite(['resources/js/app.js'])
    </body>
</html>
