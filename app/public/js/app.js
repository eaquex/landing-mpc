document.addEventListener('DOMContentLoaded', function() {
    $('#option_price').change(function() {
        const option = $(this).val();

        $('.price_value').each(function(i, v) {
            const pv        = $(this)
            const ti        = pv.closest('.tableItem')
            const price     = parseFloat(ti.data('price'))
            const addon     = option != "" ? parseFloat(ti.data(option)) : 0
            const total     = price + addon;

            pv.html(total.toLocaleString("es-ES", {minimumFractionDigits: 2}));
        })

    })    
});