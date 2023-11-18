<!-- File: components/hero.blade.php -->
<div class="hero-wrap hero-bread" style="background-image: url('{{ $backgroundImageUrl }}');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs">
                    <span class="mr-2"><a href="{{ $homeUrl }}">{{ $homeText }}</a></span>
                    <span>{{ $pageName }}</span>
                </p>
                <h1 class="mb-0 bread">{{ $pageTitle }}</h1>
            </div>
        </div>
    </div>
</div>
