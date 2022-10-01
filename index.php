<?php
$eng_ua = [
    "apple" => "яблуко",
    "table" => [
        "таблиця",
        "стіл"
    ],
    "banana" => "банан",
    "house" => "дім",
    "glass" => [
        "склянка",
        "скло"
    ],
    "orange" => "апельсин",
    "wall" => "стіна",
    "light" => "світло"
];

echo "Words - ";
// $ua_eng = array_flip($eng_ua);
$ua_eng = [];
// $arrayT = [];

foreach ($eng_ua as $eng1 => $ua) {
    if (!is_array($ua)) {
        // $arrayT[$eng1] = $ua;
        // $ua_eng = array_flip($eng_ua[$eng1[$ua]]);
        // print_r($eng1);
        // $ua_eng = array_flip($arrayT);
        // $ua_eng[$ua][] = array_flip($arrayT);
        // print_r($arrayT);
        // $ua_eng[$ua][] = array_flip($eng_ua[$eng1[$ua]]);
        // if($eng1 === "array"){
        //     $ua_eng = array_flip($eng_ua[$eng1]);
        // } else {
        //     $ua_eng[$ua][] = $eng1;
        //     // $ua_eng = array_flip($eng_ua);
        // }
        $ua_eng[$ua][] = $eng1;
    } else {
        foreach ($ua as $eng2) {
            $ua_eng[$eng2][] = $eng1;
        }
    }
    

}
// print_r($ua_eng);
foreach ($ua_eng as $key => $value) {
    if (!is_array($value)) {
        echo "$key: $value";
    } else {
        echo "$key: ";
        foreach ($value as $v) {
            echo " $v ";
        }

    }
}
echo "\n\n";
