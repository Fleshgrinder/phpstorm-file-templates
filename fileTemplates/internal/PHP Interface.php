<?php

#parse("Variables.vtl")
#if(${PROJECT_LICENSE})
#parse("PHP License ${PROJECT_LICENSE}.php")
#end
#if(${NAMESPACE})namespace ${NAMESPACE};
#end

#parse("PHP Interface Doc Comment.php")
interface ${NAME}
{


    // ----------------------------------------------------------------------------------------------------------------- Constants


    // @codingStandardsIgnoreStart
    /** @type string Short class name. */
    const name = "${NAME}";
    // @codingStandardsIgnoreEnd


    // ----------------------------------------------------------------------------------------------------------------- Methods



}
