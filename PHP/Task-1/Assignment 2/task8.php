<?php

$track=["frontEnd"=>[0=>"HTML",
                     1=>"CSS",
                    "JS"=>
                        ["Vuejs"=>
                                [2=>"v2",
                                 3=>"v3"],
                        0=>"Reactj",
                        1=>"velte"]],
        "BackEnd"=>[0 => "PHP",
                    1 => "MySQL",
                    2 => "Security"],
        0 => "Git",
        1 => "Github",
        "Testing" => [ 0 => "Unit Testing",
                       1 => "End To End",
                       2=> "Integration"  
                     ]
];
echo '<pre>';
print_r($track);
echo '</pre>';

?>