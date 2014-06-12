<?php

$websiteTitle = "AlphaAnno";
$charSet = "UTF-8";
$language = "de";
$resourcesData = array("Gold" => 1000,
                        "Level" => 1,
                        "Holz" => 50, 
                        "Nahrung" => 0, 
                        "Werkzeuge" => 0, 
                        "Waffen" => 0, 
                        "Erfahrung" => 0,
                    );


$buildingData = array("Holzfällerhütte" => array("Requirements" => array("Gold" => 100), 
                                                 "Amt" => 0),
                      "Fischerhütte"  => array("Requirements" => array("Gold" => 150, "Holz" => 20), 
                                               "Amt" => 0),
                      "Wohnhaus" => array("Requirements" => array("Gold" => 50),
                                          "Amt" => 0),
                      "Steinmetz"  => array("Requirements" => array("Gold" => 150),
                                            "Amt" => 0),
                      "Pommesbude" => array("Requirements" => array("Gold" => 200),
                                            "Amt" => 0),
                      "Freudenhaus" => array("Requirements" => array("Gold" => 500),
                                             "Amt" => 0),
                      "Tanzschule" => array("Requirements" => array("Gold" => 300),
                                            "Amt" => 0)
                );
