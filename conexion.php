<?
$dbname="id16129776_dpw2u2a2anea";
$user="enriquez_alvarado";
$password="HaciendoTarea*2021*";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4'",
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ);
try {
    // dsn: Data source name
    $dsn = "mysql:host=localhost;dbname=$dbname";
    //dbh: Data base handle
    $dbh = new PDO($dsn, $user, $password,$options);
} catch (PDOException $e){
    echo $e->getMessage();
}  ?>
