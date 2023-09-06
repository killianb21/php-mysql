
<?php
$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => 'bbthb',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => 'btrbdh',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Salade Romaine',
        'recipe' => '',
        'author' => 'laurene.castor@exemple.com',
        'is_enabled' => false,
    ],
];
?>



 <!DOCTYPE html>
 <html>
    <head>
        <title>Affichage des recettes</title>
    </head>
    


    <body>
        <h1>Affichage des recettes</h1>
        <ul>
            <?php foreach ($recipes as $recipe): ?>
                <?php if ($recipe['is_enabled'] == true){
                    echo '<h2>'.$recipe['title']. '</h2><br>';
                    echo 'auteur : ' .$recipe['author'].'<br>'; 
                    echo 'recette : ' .$recipe['recipe']. '<br>';
                } ?>
                <?php endforeach; ?>
        </ul>
    </body>
 </html>