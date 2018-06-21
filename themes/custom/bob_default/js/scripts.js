/* 2018-06-11 */
jQuery(document).ready(function() {
    var color_value = Math.floor(4 * Math.random());
    console.log("color_value = " + color_value);
    jQuery("body").addClass([ "ultra_violet", "greenery", "rose_quartz", "serenity" ][color_value]), 
    jQuery("#toggler_for_sidebar").find(".btn_toggle").click(function(e) {
        jQuery(this).hasClass("closed") ? (console.log("Open menu"), jQuery(this).removeClass("closed"), 
        jQuery(this).addClass("opened"), jQuery("#main_container").removeClass("closed"), 
        jQuery("#main_container").addClass("opened")) : jQuery(this).hasClass("opened") && (console.log("Close menu"), 
        jQuery(this).removeClass("opened"), jQuery(this).addClass("closed"), jQuery("#main_container").removeClass("opened"), 
        jQuery("#main_container").addClass("closed"));
    });
}), jQuery(document).ready(function(e) {
    jQuery(window).outerWidth();
    var window_height = jQuery(window).outerHeight(), wrapper_offset = jQuery("#wrapper").offset(), wrapper_top = wrapper_offset.top, wrapper_height = window_height - wrapper_top, header_height = jQuery("header").outerHeight(), footer_height = jQuery("footer").outerHeight(), content_height = wrapper_height - (header_height + footer_height);
    function set_layout() {
        jQuery(window).outerWidth(), window_height = jQuery(window).outerHeight(), wrapper_offset = jQuery("#wrapper").offset(), 
        wrapper_top = wrapper_offset.top, wrapper_height = window_height - wrapper_top, 
        header_height = jQuery("header").outerHeight(), footer_height = jQuery("footer").outerHeight(), 
        content_height = wrapper_height - (header_height + footer_height), jQuery("#wrapper").css({
            height: wrapper_height
        }), jQuery("#main_container").css({
            height: content_height,
            "padding-top": header_height,
            "padding-bottom": footer_height
        }), jQuery("aside").css({
            top: header_height,
            bottom: footer_height
        });
    }
    jQuery(window).smartresize(function(e) {
        set_layout();
    }).resize(), jQuery("#toolbar-bar").find(".trigger").click(function() {
        set_layout();
    });
}), jQuery(document).ready(function() {
    jQuery(".grid").masonry({
        itemSelector: ".views-row",
        gutter: 20,
        horizontalOrder: !0
    });
});