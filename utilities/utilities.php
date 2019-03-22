<!-- ! utilities.php v1.0.2 | MIT License | https://github.com/StephaneJDeschamps/base_starter_website  -->
<?php

// Utilities functions
function debug($variable)
{
    echo '<pre>'.print_r($variable, true).'</pre>';
}
// $test = 'coucou';
// var_dump($test);
// debug($test);

function secure_test($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function unknown_error($err='')
{
    $mess=($err!='')? $err:'Une erreur inconnue s\'est produite';
    exit('<div id="error">
                <p>'.$mess.'</p>
                <p>Cliquez <a href="../index.php">ici</a> pour revenir à l\'accueil !</p>
                </div>
          ');
}
