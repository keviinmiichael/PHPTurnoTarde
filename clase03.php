<?php

$ceu = [
	"Argentina"	=> [
        'ciudades' =>["Buenos Aires", "Córdoba", "Santa Fé"],
        'esAmericano' => true,
    ],
	"Brasil" => [
        'ciudades' => ["Brasilia", "Rio de Janeiro", "Sao Pablo"],
        'esAmericano' => true,
    ],
	"Colombia" => [
        'ciudades'=>["Cartagena", "Bogota", "Barranquilla"],
        'esAmericano' => true,
    ],
	"Francia" => [
        'ciudades' => ["Paris", "Nantes", "Lyon"],
        'esAmericano' => false,
    ],
	"Italia" => [
        'ciudades' => ["Roma", "Milan", "Venecia"],
        'esAmericano' => false,
    ],
	"Alemania" => [
        'ciudades' => ["Munich", "Berlin", "Frankfurt"],
        'esAmericano' => false,
    ]
];

echo "<pre>";
foreach ($ceu as $pais => $contenido) {
    if ($pais == 'Alemania' || $pais == 'Francia'|| $pais == 'Italia') {
        continue;
    }
    echo "Las ciudades de $pais";
    echo "<br>";
    if ($contenido['esAmericano']) {
        foreach ($contenido['ciudades'] as $ciudad) {
            echo "$ciudad";
            echo "<br>";
            echo "<br>";
        }
    }
}







 ?>
