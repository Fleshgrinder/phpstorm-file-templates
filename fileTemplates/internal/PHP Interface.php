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

    /**
     * @todo Define public interface.
     *
     * @return $this
     */
    public function fn();

}
