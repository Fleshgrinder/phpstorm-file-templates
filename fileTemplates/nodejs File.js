#parse("Variables.vtl")
#if(${PROJECT_LICENSE})
#parse("JS License ${PROJECT_LICENSE}.js")
#end

#parse("JS Header.js")
"use strict";

module.exports = function ${NAME.replaceAll("(?i) ([a-z0-9])", "$1")}() {



};
