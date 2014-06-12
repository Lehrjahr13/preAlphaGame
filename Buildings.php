<?php

class Buildings {

    public $status;
    public $buildings = array();
    
    function __construct($new = true) {
        $this->status = $new;
        if ($this->status) {
            $this->buildings = $buildingData;
            //var_dump($this->resources);
        } else {
            //load game
        }
    }
    

    function incBuilding($name, $amt) {
        $buildings[$name] += $amt;
        return $buildings;
    }

    function decBuilding($name, $amt) {
        $buildings[$name] -= $amt;
        return $buildings;
    }

    function getAmt($name) {
        return $this->buildings[$name]["Amt"];
    }
    function getRequirements($name) {
        $Requirements = "";
        $i = 1;
        $amtOfRequ = count($this->buildings[$name]['Requirements']);
        foreach ($this->buildings[$name]['Requirements'] as $key => $value) {
            
            $Requirements .= $key . ": " . $value;
            if ($amtOfRequ > $i) {
                $Requirements .= ", ";
            }    
            $i++;
        }
        return $Requirements;
    }

}

