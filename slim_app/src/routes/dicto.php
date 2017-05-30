<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;  

$app->get('/api/dicto/{word}',function(Request $request,Response $reposnse)
          {
    $word = $request->getAttribute('word');
    $sql = "SELECT `word`, `mean` FROM `dic` WHERE `word` LIKE '$word'";
    
    try{
        //get db object
        $db = new db();
        //connect
        $db = $db->connect();
        
        $stmt =$db->query($sql);
        $mean=$stmt->fetchAll(PDO::FETCH_OBJ);
        $db = null;
        echo json_encode($mean);
    }
    catch(PDOException $e)
    {
       echo   '{"error": {"text":'.$e->getMessage().'}';
    }
    
    
    
});
?>
