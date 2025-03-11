<?php
include("dbvezerlo.php");
class dbcontTest
{
    public function teszt()
    {
        echo "teszt indytása!";
        $db=new DBController();
        if ($db->connectDB()) 
        {
            echo "Sikeres csatl...";
        }
        else{
            echo "Sikertelen catl...";
        }
        if ($db->executeSelectQuery("SELECT * FROM movie")) 
        {
            echo "Sikeres lekerd...";
        }
        else{
            echo "Sikertelen lekerd...";
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
    <div><?php $teszt=new dbcontTest();$teszt->teszt();?></div>
</body>
</html>