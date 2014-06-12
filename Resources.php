<?php

/**
 * Description of Resources
 *
 * @author m.piehl
 */
class Resources {

    public $status;
    public $resources = array();
    
    function __construct($new = true) {
        $this->status = $new;
        if ($this->status) {
            $this->resources = $resourcesData;
            echo "new game!" . '<br>';
            //var_dump($this->resources);
        } else {
            echo "loaded game!" . '<br>';
            //load game
        }
    }
    

    function incResource($name, $amt) {
        $resource[$name] += $amt;
        return $resource;
    }

    function decResource($name, $amt) {
        $resource[$name] -= $amt;
        return $resource;
    }

    function getAmt($name) {
        return $this->resources[$name];
    }

}
