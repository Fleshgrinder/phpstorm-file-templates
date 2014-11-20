<?php

#parse("Variables.vtl")
#if(${PROJECT_LICENSE})
#parse("PHP License ${PROJECT_LICENSE}.php")
#end
#if(${NAMESPACE})
namespace ${NAMESPACE};
#end

#parse("PHP Trait Doc Comment.php")
trait ${NAME}
{


    // ----------------------------------------------------------------------------------------------------------------- Properties




    // ----------------------------------------------------------------------------------------------------------------- Methods



}
