<?php
/* 
   Tableau simple = une suite d'éléments
   ATTENTION : on numérotte à partir de 0
          0      1      2
         vvv    vvv    vvv                */
$tab = ['el1', 'el2', 'el3'];
// Permet d'afficher tout le contenu du tableau
var_dump($tab);
// Affiche la deuxième case du tableau (ici 'elem2')
echo  $tab[1];
// Comme les cases sont numérottés, on peut boucler dessus
for($i = 0; $i < 3; $i++) {
    echo '<b>'. $i . $tab[$i] . '</b><br />';
}
// Les tableaux peuvent eux même contenir des tableaux
$persons = [
    // Ce tableau est un tableau associatif
    // = on donne un nom à nos clés
    [
        'lastname'  => 'Perraut',
        'firstname' => 'Nicolas',
        'children' => [
            [
                'lastname'  => 'Perraut',
                'firstname' => 'Paul',
            ],
            [
                'lastname'  => 'Perraut',
                'firstname' => 'Pauline',
            ]
        ]
    ],
    [
        'lastname'  => 'Fayolle',
        'firstname' => 'Marc',
        'children' => null
    ],
];
echo '<h1>Boucle for</h1>';
echo '<ul>';
// On boucle sur le gros tableau
//               Permet d'obtenir la longueur de notre tableau
//               vvvvv
for($i = 0; $i < count($persons); $i++) {
    //                    Element $i du tableau $persons
    //                    |   Element 'firstname' de l'élément $i du tableau $persons
    //                    |   |
    //                   vvv  vvvvvvvvvvv
    echo '<li>'. $persons[$i]['firstname'] .' ' . $persons[$i]['lastname'] . '</li>';
}
echo '</ul>';
echo '<h1>Boucle foreach</h1>';
echo '<ul>';
// La boucle foreach permet d'itérer sur un tableau plus facilement
// Cette boucle est équivalente à la boucle for précédente
//         Tableau sur lequel on veut boucler
//         |           Variable contenant l'élément courant ~= $persons[$i]
//         |           |
//      vvvvvvv     vvvvvvv
foreach($persons as $person) {
    echo '<li>'. $person['firstname'] .' ' . $person['lastname'] . '</li>';
    // empty() permet de vérifier sur une variable est vide.
    // Dans le cas de Marc, elle renverra true car l'élément 'children' vaut null
    if(!empty($person['children'])) {
        // L'élément 'children' de $person est un tableau, on peut donc également itérer dessus
        foreach($person['children'] as $child) {
            echo '<li>' . $child['firstname'] . '</li>';
        }
    } else {
        echo "N'a pas d'enfants ;)";
    }
}
echo '</ul>';