<div class="row">
    <div class="col-12 col-xl-8 offset-xl-2 d-flex align-content-start flex-wrap">
        <div class="row m-2">
            @for ($i = 0; $i < 25; $i++)
                @include('landing.tableItem', ["id" => $designList[$i]["id"], "title" => $designList[$i]["title"], "price" => ($designList[$i]["price"] + $designList[$i]["addOnPrice"]), "thumb" => $designList[$i]["thumb"], "extraClass" => ($i== 3 ? "fourItem": "") ])
            @endfor
        </div>
    </div>
</div>