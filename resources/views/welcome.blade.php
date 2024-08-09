<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('components.head')
<body>
    @include('components.navbar')
    @include('components.descriptionPage')
    @include('components.carousel')
    @include('components.conheca')
    @include('components.novidades')
    @include('components.service')
    @include('components.footer')
    @include('components.scripts')
</body>
</html>