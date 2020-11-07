<div class="tableItem col-12 col-xs-6 col-sm-6 col-md-4 col-lg-4 p-4 {{ $extraClass }}">
    <h2 class="text-center">{{ isset($title) ? $title : 'Your title goes here' }}</h2>
    <h4 class="text-center">€ {{ isset($price) ? number_format($price,2, ',', '.') : number_format(0, 2, ',', '.') }}</h4>
    <img class="thumb-image" class="img-fluid" src="@yield('thumb', asset('images/thumbnail-placeholder.png'))">
</div>