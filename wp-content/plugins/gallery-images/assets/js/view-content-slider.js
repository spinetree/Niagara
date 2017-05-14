jQuery.each(param_obj, function (index, value) {
    if (!isNaN(value)) {
        param_obj[index] = parseInt(value);
    }
});

function Gallery_Img_Content_Slider(id) {
    var _this = this;
    _this.container = jQuery('#' + id + '.g-main-slider.liquid-slider');
    _this.pauseHover = _this.container.data("pause-hover") == "on";
    _this.autoSlide = _this.container.data("autoslide") == "on";
    _this.slideDuration = +_this.container.data("slide-duration");
    _this.slideInterval = +_this.container.data("slide-interval");
    _this.ratingType = _this.container.data("rating-type");
    _this.sliderOptons = {
        autoSlide: _this.autoSlide,
        pauseOnHover: _this.pauseHover,
        slideEaseDuration: _this.slideDuration,
        autoSlideInterval: _this.slideInterval,
    };
    _this.documentReady = function () {
        _this.container.liquidSlider(_this.sliderOptons);
        ratingCountsOptimize(_this.container,_this.ratingType);
    };
    _this.init = function () {
        _this.documentReady();
    };
    this.init();
}
var galleries = [];
jQuery(document).ready(function () {
    jQuery(".g-main-slider.view-content-slider").each(function (i) {
        var id = jQuery(this).attr('id');
        galleries[i] = new Gallery_Img_Content_Slider(id);
    });
});
