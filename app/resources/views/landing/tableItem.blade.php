<div class="tableItem col-12 col-xs-6 col-sm-6 col-md-4 col-lg-4 p-4 {{ $extraClass }}" rel="{{ $id }}">
    <h6 class="text-center font-weight-bold">{{ isset($title) ? $title : 'Your title goes here' }}</h6>    
    <div class="price">€ {{ isset($price) ? number_format($price,2, ',', '.') : number_format(0, 2, ',', '.') }}</div>
    <img class="thumb-image" class="img-fluid" src="{{ isset($thumb) ? $thumb :  asset('images/thumbnail-placeholder.png')}}">
</div>