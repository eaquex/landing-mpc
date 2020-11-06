<div class="row">
    <div class="col-12 d-flex align-content-start flex-wrap">
        @for ($i = 0; $i < 25; $i++)
            @include('landing.tableItem', ["title" => "Product Title" . $i, "price" => "999.00", "thumb" => asset("images/thumbnail-placeholder.png")])
        @endfor
    </div>
</div>