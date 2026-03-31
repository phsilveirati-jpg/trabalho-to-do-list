<!DOCTYPE html>
<html lang="pt-BR">
<head>
    @include('landing.partials.head')
</head>
<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed">
    <div id="app-wrapper">
        @include('landing.partials.header')

        <main id="main-content" class="bg-light">
            @include('landing.partials.hero')
            <div class="container py-10">
                @include('landing.partials.features')
                @include('landing.partials.cta')
            </div>
        </main>

        @include('landing.partials.footer')
    </div>

    @include('landing.partials.scripts')
</body>
</html>