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


    // ----------------------------------------------------------------------------------------------------------------- Properties


    /** @type string The canonical absolute name of the class to test. */
    protected $class = "#if(${NAMESPACE})\\\\${NAMESPACE.replaceAll("\\", "\\\\")}#end\\\\${NAME.replaceAll("Test$", "")}";


    // ----------------------------------------------------------------------------------------------------------------- Tests


    /**
     * @covers ::
     */
    public function testSomething()
    {
        
    }

}
