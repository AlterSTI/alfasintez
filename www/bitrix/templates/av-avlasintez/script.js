$( document ).ready(function() {

    $(".alfasintez-catalog-wrap")
        .on("click", ".fa-angle-right", function()
        {
            $(this)
                .closest(".alfasintez-catalog-wrap")
                .find(".alfasintez-catalog-section")
                .slideAvSlider("forward");
        })
            .on("click", ".fa-angle-left", function()
            {
                $(this)
                    .closest(".alfasintez-catalog-wrap")
                    .find(".alfasintez-catalog-section")
                    .slideAvSlider("back");
            });

    $(".alfasintez-catalog-section")
        .setAvSlider
        ({
            cyclicity : true,
            slidesCount : 3,
            slidesBreakpoints :
                {
                    991: 2,
                    670: 1
                }
        })
        .hover(function()
        {
            $(this).slideAutoAvSlider("forward", 3000);
        })
        .mouseleave(function()
        {
            $(this).stopSlideAutoAvSlider();
        });

});