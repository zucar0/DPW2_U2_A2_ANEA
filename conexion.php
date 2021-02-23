<?
$dbname="id16129776_progweb2";
$user="id16129776_antonioenriquez";
$password="zjo_%H=)I6S/s1fm";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4'",
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ);
try {
    // dsn: Data source name
    $dsn = "mysql:host=localhost;dbname=$dbname";
    //dbh: Data base handle (controlador)
    $dbh = new PDO($dsn, $user, $password,$options);
} catch (PDOException $e){
    echo $e->getMessage();
}  ?>
