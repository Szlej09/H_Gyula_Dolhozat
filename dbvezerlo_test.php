<?php
include("dbvezerlopdo.php");
class DBContTest
{
    public function teszt()
    {
        echo "teszt indítása!";
        echo "<br>";
        $db=new DBController();
        if ($db->connectDB()) 
        {
            echo "Sikeres csatl...\n";
            echo "<br>";
        }
        else{
            echo "Sikertelen csatl...\n";
            echo "<br>";
        }
        if ($db->executeSelectQuery("SELECT * FROM movie",$params=[])) 
        {
            echo "Sikeres lekerd...\n";
            echo "<br>";
        }
        else{
            echo "Sikertelen lekerd...";
            echo "<br>";
        }
        $db->closeDB();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div><?php $teszt=new DBContTest();$teszt->teszt();?></div>
</body>
</html>