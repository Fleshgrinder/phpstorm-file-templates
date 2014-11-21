#parse("Variables.vtl")
#if(${PROJECT_LICENSE})
#parse("JS License ${PROJECT_LICENSE}.js")
#end

/* jshint browser:true */

#parse("JS Header.js")
(function ${NAME.replaceAll("(?i) ([a-z0-9])", "$1")}(window, document, $) {
    "use strict";



})(window, window.document, window.jQuery);
