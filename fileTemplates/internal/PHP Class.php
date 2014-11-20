<?php

#parse("Variables.vtl")
#if(${PROJECT_LICENSE})
#parse("PHP License ${PROJECT_LICENSE}.php")
#end
#if(${NAMESPACE})namespace ${NAMESPACE};
#end

#parse("PHP Class Doc Comment.php")
class ${NAME}
{


    // ----------------------------------------------------------------------------------------------------------------- Constants


    // @codingStandardsIgnoreStart
    /** @type string Short class name. */
    const name = "${NAME}";
    // @codingStandardsIgnoreEnd


    // ----------------------------------------------------------------------------------------------------------------- Properties





    // ----------------------------------------------------------------------------------------------------------------- Magic Methods


    /**
     * Construct new ${NAME} instance.
     */
    public function __construct()
    {

    }


    // ----------------------------------------------------------------------------------------------------------------- Methods



}
