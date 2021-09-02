<?php

   $host= "127.0.0.1";
   $user = "root";
   $pass = "";
   $dbname="test";
   $port= 3306;

try {
        $con = new PDO("mysql:$host;port=$port;dbname=".$dbname, $user, $pass); 
} catch (PDOException $e) {
        echo "Erro com banco de dados: ".$e->getMessage(); //conecta a mensagem com o erro que está dentro da variável $e
}
catch (Exception $e) {
        echo "Erro generico: ".$e->getMessage();

}

$cmd= $con->prepare('SELECT * FROM precos_json');
$cmd->execute();
$resultado= $cmd->fetchAll(PDO::FETCH_ASSOC);


foreach ($resultado as $key => $value){
        echo $key.": ".$value."<br>";
};

/*echo "<pre>";
print_r($resultado);
echo "</pre>";
*/
?>