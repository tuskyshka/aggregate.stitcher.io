<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @isset($title)
        <title>{{ $title }} — {{ config('app.name') }}</title>
    @else
        <title>{{ config('app.name') }}</title>
    @endisset

    {{--@include('admin.layouts.partials.favicons')--}}

    {{--<link rel="stylesheet" href="{{ mix('css/app.css') }}">--}}
    {{--<link rel="stylesheet" href="{{ mix('css/vendor.css') }}" media="none" onload="this.media='all'">--}}

    {{-- <script defer src="{{ mix('vendor.js') }}"></script> --}}
    {{--<script defer src="{{ mix('js/app.js') }}"></script>--}}
</head>
<body>

{{ $slot }}

{{--<script>--}}
    {{--window.locales = {!! json_encode(config('app.available_locales')) !!};--}}
{{--</script>--}}

{{--@include('admin.layouts.partials.bugsnag')--}}
</body>
</html>