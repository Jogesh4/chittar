<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Chittarr | @yield('title')</title>
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet" />
    <link href="{{ asset('style.css') }}" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      @include('partials.header')
      @yield('content')
      @include('partials.footer')
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('vendors/@popperjs/popper.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/feather-icons/feather.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha512-uto9mlQzrs59VwILcLiRYeLKPPbS/bT71da/OEBYEwcdNUk8jYIy+D176RYoop1Da+f9mvkYrmj5MCLZWEtQuA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
!function ($) {

"use strict"; // jshint ;_;


/* MAGNIFY PUBLIC CLASS DEFINITION
 * =============================== */

var Magnify = function (element, options) {
    this.init('magnify', element, options)
}

Magnify.prototype = {

    constructor: Magnify

    , init: function (type, element, options) {
        var event = 'mousemove'
            , eventOut = 'mouseleave';

        this.type = type
        this.$element = $(element)
        this.options = this.getOptions(options)
        this.nativeWidth = 0
        this.nativeHeight = 0

        this.$element.wrap('<div class="magnify" \>');
        this.$element.parent('.magnify').append('<div class="magnify-large" \>');
        this.$element.siblings(".magnify-large").css("background","url('" + this.$element.attr("src") + "') no-repeat");

        this.$element.parent('.magnify').on(event + '.' + this.type, $.proxy(this.check, this));
        this.$element.parent('.magnify').on(eventOut + '.' + this.type, $.proxy(this.check, this));
    }

    , getOptions: function (options) {
        options = $.extend({}, $.fn[this.type].defaults, options, this.$element.data())

        if (options.delay && typeof options.delay == 'number') {
            options.delay = {
                show: options.delay
                , hide: options.delay
            }
        }

        return options
    }

    , check: function (e) {
        var container = $(e.currentTarget);
        var self = container.children('img');
        var mag = container.children(".magnify-large");

        // Get the native dimensions of the image
        if(!this.nativeWidth && !this.nativeHeight) {
            var image = new Image();
            image.src = self.attr("src");

            this.nativeWidth = image.width;
            this.nativeHeight = image.height;

        } else {

            var magnifyOffset = container.offset();
            var mx = e.pageX - magnifyOffset.left;
            var my = e.pageY - magnifyOffset.top;

            if (mx < container.width() && my < container.height() && mx > 0 && my > 0) {
                mag.fadeIn(100);
            } else {
                mag.fadeOut(100);
            }

            if(mag.is(":visible"))
            {
                var rx = Math.round(mx/container.width()*this.nativeWidth - mag.width()/2)*-1;
                var ry = Math.round(my/container.height()*this.nativeHeight - mag.height()/2)*-1;
                var bgp = rx + "px " + ry + "px";

                var px = mx - mag.width()/2;
                var py = my - mag.height()/2;

                mag.css({left: px, top: py, backgroundPosition: bgp});
            }
        }

    }
}


/* MAGNIFY PLUGIN DEFINITION
 * ========================= */

$.fn.magnify = function ( option ) {
    return this.each(function () {
        var $this = $(this)
            , data = $this.data('magnify')
            , options = typeof option == 'object' && option
        if (!data) $this.data('tooltip', (data = new Magnify(this, options)))
        if (typeof option == 'string') data[option]()
    })
}

$.fn.magnify.Constructor = Magnify

$.fn.magnify.defaults = {
    delay: 0
}


/* MAGNIFY DATA-API
 * ================ */

$(window).on('load', function () {
    $('[data-toggle="magnify"]').each(function () {
        var $mag = $(this);
        $mag.magnify()
    })
})

} ( window.jQuery );
</script>
    <script>
      // feather.replace();
    </script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
    @yield('extras')
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
  </body>
</html>