<?php

$fruits = ['apel', 'semangka', 'nangka'];

print_r($fruits);

echo'<br>';

$fruits[] = 'salak';
print_r($fruits);

echo'<br>';

array_push($fruits, 'Mangga');
print_r($fruits);

echo'<br>';

echo $fruits[4];

$student = [
    [
    'nama'      =>'romei',
    'nim'       =>'20101106010',
    'umur'      =>'21',
    'hobi'      =>['makan', 'tidur'],
    'profil'    =>[
        'facebook'=>'romei',
        'IG'=>'romei',
                    ],
    ],

    [
        'nama'      =>'alex',
        'nim'       =>'20101106011',
        'umur'      =>'21',
        'hobi'      =>['makan', 'tidur'],
        'profil'    =>[
            'facebook'=>'romei',
            'IG'=>'romei',
                        ],
        ],
];

echo'<br>'; 


echo'<pre>';
print_r($student);
echo'</pre>';

