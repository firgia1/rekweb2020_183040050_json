<?php

$mahasiswa = [
    [
        "nama" => "Mochamad Firgia",
        "nrp" => "183040050",
        "email" => "firgia.183040050@mail.unpas.ac.id"
    ],
    [
        "nama" => "Mochamad Firgia-2",
        "nrp" => "183040050 - 2",
        "email" => "firgia.183040050@mail.unpas.ac.id"
    ]
];



$data = json_encode($mahasiswa);
echo $data;
