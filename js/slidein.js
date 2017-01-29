var price = 3000;
var description = 3000;
var hr = 1000;

(function($) {
    	$(document).ready(function(){
        $("#lunch_special_price").hide().fadeIn(price);
        $("hr").hide().fadeIn(hr);
        $(".lunch_special_description_container").hide().fadeIn(description);
	});
})(jQuery);
