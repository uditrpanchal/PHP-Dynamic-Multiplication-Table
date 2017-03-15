<!-- Author : Udit Panchal <uditrpanchalca@gmail.com> -->
<!-- Description : Dynamically generated Multiplication Table based on user input -->

<?php

$num_count = 12;

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if(isset($_POST['send']))
        {
            $num_count = $_POST['getNum'];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Challenge: using loops</title>
   <link href="styles.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<h1>Multiplication Table</h1>

<form name="multiTable" id="multiTable" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    <p class="dataEnter"><span>Enter number for multiplication Table :</span>
        <input type="text" name="getNum" id="getNum"/>&nbsp;&nbsp;
        <input type="submit" name="send" id="send" value="Submit"/>
    </p>


</form>
<table>
    <?php

        for($i=0; $i < $num_count+1; $i++)
        {
            echo"<tr>";
            for($j=0; $j<$num_count+1; $j++)
            {
                if($i==0 && $j==0)
                {
                    echo"<th> </th>";
                }

                if($i==0 && $j!=0)
                {
                    echo"<th> $j </th>";
                }

                if($j==0 && $i!=0)
                {
                   echo"<th> $i </th>";
                }

                if($i!=0 && $j!=0)
                {
                    $ij = $i*$j;
                    echo"<td> {$ij} </td>";
                }
            }
            echo"</tr>";
        }
    ?>
</table>
</body>
</html>