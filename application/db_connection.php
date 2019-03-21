  <!-- ! db_connection.php v1.0.5 | MIT License | github.com/StephaneJDeschamps/base_starter_website  -->

<?php include 'utilities/utilities.php';

function openDataBase($db, $user, $pwd, $params = [])
{
    try {
        $pdo = new PDO($db, $user, $pwd, $params);
        $pdo->exec('SET NAMES "utf8"');
        $pdo->exec('SET lc_time_names = "fr_FR"');
    } catch (PDOException $e) {
        var_dump($e->getMessage());
        die();
    }
    return $pdo;
}

$pdo = openDataBase(
    'mysql:host=localhost;dbname=yourdb;charset=utf8',
    'root',
    '',
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES "utf8"',
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET lc_time_names = "fr_FR"'
        ]
);

