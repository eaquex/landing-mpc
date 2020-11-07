<div class="tableItem col-12 col-xs-6 col-sm-6 col-md-4 col-lg-4 p-4 {{ $extraClass }}" data-price="{{ $price }}" data-xxl="{{ $addons['XXL']['price'] }}" data-xl="{{ $addons['XL']['price'] }}" data-envelope="{{ $addons['Envelope']['price'] }}" data-premium="{{ $addons['Premium']['price'] }}">
    <a href="{{ route('download') }}?id={{ $id }}" target="_blank">
        <h6 class="text-center font-weight-bold">{{ isset($title) ? $title : 'Your title goes here' }}</h6>    
        <div class="price">€ <span class="price_value">{{ isset($price) ? number_format($price,2, ',', '.') : number_format(0, 2, ',', '.') }}</span></div>
        <img class="thumb-image" class="img-fluid" src="{{ isset($thumb) ? $thumb :  asset('images/thumbnail-placeholder.png')}}">
    </a>
</div>
