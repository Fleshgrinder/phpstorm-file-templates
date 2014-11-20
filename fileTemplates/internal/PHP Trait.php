<?php

#parse("Author.vtl")
#parse("${PROJECT_NAME}.vtl")
#if(${PROJECT_LICENSE})#parse("PHP License ${PROJECT_LICENSE}.php")
#end
#if(${NAMESPACE})namespace ${NAMESPACE};
#end

/**
 * Defines the ${NAME} trait which can be used to implement the {@see ${NAME}Interface}.
 *
 * @author ${AUTHOR_NAME} <${AUTHOR_EMAIL}>
 * @copyright #if(${PROJECT_YEAR})${PROJECT_YEAR}#{else}${YEAR}#end #if(${PROJECT_COPYRIGHT})${PROJECT_COPYRIGHT}#{else}${AUTHOR_NAME}
#end
#if(${PROJECT_LICENSE}) * @license ${LICENSE_URL} ${LICENSE_NAME}
#end
 */
trait ${NAME}
{


    // ----------------------------------------------------------------------------------------------------------------- Properties




    // ----------------------------------------------------------------------------------------------------------------- Methods



}
