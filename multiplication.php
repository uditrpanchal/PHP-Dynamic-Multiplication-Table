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

        for($row=0; $row < $num_count+1; $row++)
        {
            echo"<tr>";
            for($col=0; $col<$num_count+1; $col++)
            {
                if($row==0 && $col==0)
                {
                    echo"<th> </th>";
                }

                if($row==0 && $col!=0)
                {
                    echo"<th> $col </th>";
                }

                if($col==0 && $row!=0)
                {
                   echo"<th> $row </th>";
                }

                if($row!=0 && $col!=0)
                {
                    $row_col = $row*$col;
                    echo"<td> {$row_col} </td>";
                }
            }
            echo"</tr>";
        }
    ?>
</table>
</body>
</html>