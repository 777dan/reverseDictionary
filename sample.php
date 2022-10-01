<?php
// $users1 = ["John" => "qwerty", "Nicole" => "asdf", "Mark" => "ww"];
// $users2 = ["Joan" => "1234", "Mark" => "poiu", "Nicole" => "ggg"];
// print_r(array_merge($users1, $users2));

$countries = [
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

echo "Сountries\n\n";

// foreach ($countries as $key => $value) {
//     //   if (!is_array ( $value ))
//     //       echo "$key:\n\t$value\n";
//     //   else {
//     //       echo "$key: \n";
//     //       foreach ( $value as $v )
//     //           echo "\t$v\n";
//     //   }
//     //      echo "\n";
//     echo "$key: \n";
//     // print_r($value);
//     if (is_array($value)) {
//         foreach ($value as $v) {
//             echo "$v\t";
//         }
//     } else {
//         echo "$value";
//     }

//     echo "\n\n";
// }
// echo "\n\n";
// echo "\n\n";
$languages = [];

foreach ($countries as $country => $cl) {
    // if (!is_array ($cl)) {
    //     $languages[$cl][] = $country;
    // } else {
    //     foreach ($cl as $l) {
    //         $languages [$l] [] = $country;
    //     }
    // }
    if (!is_array($cl)) {
        $languages[$cl][] = $country;
    } else {
        foreach ($cl as $l) {
            $languages[$l][] = $country;
        }
    }

}
print_r($languages);
// foreach ($languages as $key => $value) {
//     if (!is_array($value)) {
//         echo "$key:\n\t$value";
//     } else {
//         echo "$key: \n";
//         foreach ($value as $v) {
//             echo "\t$v\n";
//         }

//     }
// }
// echo "\n\n";