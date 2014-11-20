<?php

#parse("Variables.vtl")
#if(${PROJECT_LICENSE})
#parse("PHP License ${PROJECT_LICENSE}.php")
#end
#if(${NAMESPACE})
namespace ${NAMESPACE};
#end

#parse("PHPUnit Test Doc Comment.php")
class ${NAME} extends \PHPUnit_Framework_TestCase
{


    // ----------------------------------------------------------------------------------------------------------------- Constants


    // @codingStandardsIgnoreStart
    /** @type string Short class name. */
    const name = "${NAME}";
    // @codingStandardsIgnoreEnd


    // ----------------------------------------------------------------------------------------------------------------- Tests




}
