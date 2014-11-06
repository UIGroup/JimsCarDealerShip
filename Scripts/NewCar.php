<?php
    include("./Models/Database.php");
    
    $db = new Database();
    
    
    $model = $_POST['model'];
    $sub = $_POST['sub'];
    $color = $_POST['color'];
    $interior = $_POST['interior'];
    $MPG = $_POST['MPG'];  
    $trans = $_POST['trans'];
    $body = $_POST['body'];
    $GPS = $_POST['GPS'];
    $smartready = $_POST['smartready'];
    $cup = $_POST['cup'];
    $keyless = $_POST['keyless'];
    $alarm = $_POST['alarm'];
    $year = $_POST['year'];
    $VIN = $_POST['VIN'];
    $pic = $_POST['pic'];
    
    $query = "
    INSERT INTO JimsCarDealerShip.inventory
    (
       model,
       sub_model,
       color,
       interior,
       mpg,
       transmission,
       body,
       gps,
       smartready,
       cupholders,
       keyless,
       alarm,
       year,
       vin,
       img
    )
    VALUES
    ('$model','$sub','$color','$interior','$MPG','$trans','$body','$GPS','$smartready','$cup','$keyless','$alarm','$year','$VIN','$pic')";
    
    $reply = $db -> query($query);
    
    if($reply)
    {
        $results['status'] = "Successful";
    }
    else
    {
        $results['status'] = "Error";
        $results['error'] = $db -> getError();
    }

    print json_encode($results);
    
?>
