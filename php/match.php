<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

            include "php/pagination.php";
            include "php/page.php";
?>


        
<?php
           // display the retrieved result on the webpage   
            $items = ["firstname","name","gender","age","interest"];
           // echo $items[0];
            for($index = 1; $index < sizeof($items); $index++){
                ?>
                <div class="user">
                    <?php
                        $ind = $items[$index];
                     //var_dump($elements[$index]);
                    $json = json_encode($elements);
                    //echo $ind;
                        echo $items[$index] .": " . $elements[$ind];
                    ?>
                </div>
            <?php
             }
             
            ?>
    
        </form>
        
        <button type="submit" name="button" class="btn1 button" value="Like" id = "btn1">
                Like
        </button>
 
            <button type="submit" name="button" class="btn1 button" value="nextPerson" id = "btn2">
                Dislike
            </button>
        
        <br>
        <br>
        <?php

            mysqli_select_db($this->conn, 'pagination');
            $query = "SELECT * FROM users LIMIT " . $page_first_result . ',' . $results_per_page. ';';  
            // var_dump($query);
            $result = mysqli_query($this->conn, $query)->fetch_all(MYSQLI_ASSOC);

        //display the link of the pages in URL  
        for($page = 1; $page<= $number_of_page; $page++) {  
            echo '<a href = "vote.php?page=' . $page . '">' . $page . ' </a>';  
        }  
        ?>
       ...  Next
        <form action="conclude.php">
            <button type="submit" class="button">
                person selected
            </button>
        </form>
    </div>
    </body>

</body>
</html>
           



    





