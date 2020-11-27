(function () {
    $("#agroVirtual").on("load", function () {
        let head = $("#agroVirtual").contents().find("head");
        let css = '<style>#cart{display:none !important};</style>';
        $(head).append(css);
    })
})()