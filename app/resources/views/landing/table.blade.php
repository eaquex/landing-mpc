<div class="row">
    <div class="col-12 col-xl-8 offset-xl-2 d-flex align-content-start flex-wrap">
        <select id="option_price" name="option_price" class="form-control text-center">
            <option value="">--- Select an Greetcard AddOn option --</option>
            <option value="xxl">Greetcard XXL</option>
            <option value="xxl">Greetcard XL</option>
            <option value="envelope">Greetcard_Envelope</option>
            <option value="premium">Greetcard_Premium</option>
        </select>

        <div class="row m-2">
            @for ($i = 0; $i < 25; $i++)
                @include('landing.tableItem', ["id" => $designList[$i]["id"], "title" => $designList[$i]["title"], "addons" => $designList[$i]["addons"], "price" => $designList[$i]["price"], "thumb" => $designList[$i]["thumb"], "extraClass" => ($i== 3 ? "fourItem": "") ])
            @endfor
        </div>
    </div>
</div>