<div class="row">
    <div class="col-12 col-lg-8 offset-lg-2 d-flex align-content-start flex-wrap">
        <div class="row m-2">
            @for ($i = 0; $i < 25; $i++)
                @include('landing.tableItem', ["title" => "Product Title " . ($i+1), "price" => "999.00", "thumb" => asset("images/thumbnail-placeholder.png"), "extraClass" => ($i== 3 ? "fourItem": "") ])
            @endfor
        </div>
    </div>
</div>