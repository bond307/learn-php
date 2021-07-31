<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Woking with oo</title>
</head>
<body>
    <?php
    include "function.php";// include function.php form main directory Function.Php
        //get value
        if(isset($_POST['submit'])){
            //get first value
            $first_val = $_POST['first_value'];
            //get secound value
            $sec_val = $_POST['sec_value'];


            if(empty($first_val) OR empty($sec_val)){
                echo '<div style="width:500px;padding:5px 20px; color:red; margin:0px auto; border:1px solid #ddd; border-radious:5px;">
                    <p>Fild Must not be empty...!</p>     
                </div>

                ';

                
            }else{

               
               

            }

           

        }//end submition
    
    ?>

    <div style="width:500px;padding:10px; margin:30px auto; border:1px solid #ddd; border-radious:5px;">
    <h4 style="border:1px solid #ddd; padding:5px;">Working with Class, Object, Method in OOP</h4>
       <form action="" method="post" style="border:1px solid #ddd; padding:5px;">
              <table>
                  <tr>
                      <th>First Value: </th>
                      <td><input type="number" name="first_value"></td>
                  </tr>
                  <tr>
                      <th>Secound Value: </th>
                      <td><input type="number" name="sec_value"></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td><input type="submit" name="submit" value="Submit"></td>
                  </tr>
              </table>
       </form>


    </div>

    <div style="width:500px;padding:10px; margin:30px auto; border:1px solid #ddd; border-radious:5px;">
        <?php 
        echo "First Value: {$first_val} & Secound Value: {$sec_val} <br>";

         $cal = new Calculation();//object 
        $cal->add($first_val, $sec_val);
        $cal->sub($first_val, $sec_val);
        $cal->mul($first_val, $sec_val);
        $cal->div($first_val, $sec_val);
        ?>
    </div>

</body>
</html>