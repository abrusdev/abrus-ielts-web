$("#filter").change(function ($val) {
    filterPart(this.value())
})

function filterPart(part){
    [$("#part-1"), $("#part-2"), $("#part-3")].forEach(function ($item) {
        $item.addClass("d-none");
    })
    if (parseInt(part) === 1){
        $("#part-1").removeClass("d-none")
    }
    if (parseInt(part) === 2){
        $("#part-2").removeClass("d-none")
    }
    if (parseInt(part) === 3){
        $("#part-3").removeClass("d-none")
    }
}
