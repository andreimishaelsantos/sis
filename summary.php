<!DOCTYPE HTML>
<?php


if (isset($_POST['evalz'])){

    $firstNum = $_POST['num1'];
    $secondNum = $_POST['num2'];    
}
else
{
    header('location: form.php');
}
?>
<html>
    <head>
    
    <link rel="icon" type="image/png" href="http://vignette1.wikia.nocookie.net/empireatwar/images/4/44/1756_-_empire_insignia_logo_star_wars.png/revision/latest?cb=20150125035321">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="main-container">
            
        </div>
        
        <div class="container">
        <div class="page-header">
        <h1>Summary</h1>
            <div class="container col-lg-6">
                <div class="panel panel-default">
                
                    <div class="panel-heading large"><b>Basic Math Operations</b></div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            First Number <span class="badge"><?php echo $firstNum; ?></span>
                        </li>
                        <li class="list-group-item">
                            Second Number <span class="badge"><?php echo $secondNum; ?></span>
                        </li>
                        <li class="list-group-item">
                            Sum <span class="badge"><?php echo $firstNum + $secondNum; ?></span>
                        </li>
                        <li class="list-group-item">
                            Difference <span class="badge"><?php echo $firstNum - $secondNum; ?></span>
                        </li>
                        <li class="list-group-item">
                            Product <span class="badge"><?php echo $firstNum * $secondNum; ?></span>
                        </li>
                        <li class="list-group-item">
                            Quotient <span class="badge"><?php echo $firstNum / $secondNum; ?></span>
                        </li>
                    </ul>
                
                
                
                
                </div>
                <div class="panel panel-default">
                
                    <div class="panel-heading"><b>Multiplication Table</b></div>
                    
                    <ul class="list-group">
                        <?php 
                            for ($i = 1; $i <= $secondNum; $i++ ){
                                echo "<li class='list-group-item'>" . $firstNum . " x " . $i .  "<span class='badge'>" . $firstNum * $i  . "</span></li>";
                                
                            }

                        ?>
                    </ul>
                
                
                
                
                </div>
            </div>
            
            
            <div class="panel panel-default col-lg-6">
                <div class="panel-heading"><b>FizzBuzz</b></div>
                <ul class="list-group">
                    <?php
                        for ($i = 1; $i <= $secondNum; $i++){
                            $stat = "";
                            if ($i % 3 == 0 && $i % 5 == 0){
                                $stat = "FizzBuzz";
                            } else if ($i % 3 ==0 && $i % 5 !=0){
                                $stat = "Fizz";
                            } else if ($i % 3 !=0 && $i % 5 ==0){
                                $stat = "Buzz";
                            } else {
                                $stat = "";
                            }
                                      
                            
                            echo "<li class='list-group-item'>" . $i .  "<span class='badge'>" . $stat . "</span></li>";
                        }
                    ?>
                </ul>
            </div>
            
        </div>
        </div>
        
      
    </body>
</html>