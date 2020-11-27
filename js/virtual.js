(function () {
    $("#agroVirtual").on("load", function () {
        let head = $("#agroVirtual").contents().find("head");
        let css = '<style>#cart{display:none !important};</style>';
        $(head).append(css);
    })
})()

//show only if current date is after January 16, 20018
var date_to_check_with = new Date("20201127:").getTime();

//.getTime() will give time in milliseconds (epoch time) 
var current_date = new Date().getTime();

console.log(date_to_check_with < current_date);