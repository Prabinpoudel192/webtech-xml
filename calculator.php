<?php
class Divideby0Exception extends Exception
{

}
if(isset($_POST['calculate'])){

   $a=$_POST['First'];
   $b=$_POST['second'];
   $c=$_POST['select'];
 
   if($c=='add')
{
   $d=$a+$b;
  
}
else if($c=='sub'){
$d=$a-$b;
}
else if($c=='mul'){
   $d=$a*$b;
}
else if($c=='div')
{
   try{
      if($b==0){
         throw new Divideby0Exception("Cannot Divide by 0");
      }

   $d=$a/$b;
   }catch(Divideby0Exception $ex)
   {
      $d=$ex->getMessage();
   }
}

}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       .h1{
            height:50px;
            width:100%;
            color:white;
            background:black;
            text-align:center;
            margin:50px 0px 0px 0px;
         }
         .div{
            height:500px;
            width:600px;
            background:grey;
            color:white;
            margin:0px 0px 10px 100px;
            font-size:25px;
            position:relative;
         }
         .first{
            margin:100px 0px 0px 100px;
            height:40px;
            width:500px;
            font-size:25px;
         }
         .second{
            margin:50px 0px 0px 77px;
            font-size:25px;
            }
         .operator{
            margin:50px 0px 0px 50px;
            font-size:25px;
            }
         .but{
            height:50px;
            width:200px;
            margin:50px 0px 0px 200px;
            font-size:25px;
         }
         .select{
            height:50px;
            width:100px;
            margin:10px 0px 0px 10px;
            text-align:center;
            font-size:25px;
         }
         .set{
            height:40px;
            width:300px;
            font-size:25px;
         }
         .third{
            margin:50px 0px 0px 100px;
            font-size:25px;
         }
         .bor{
            height:800px;
            width:700px;
            border:2px solid black;
            background-color:grey;
            position:relative;
            
         }
         
         

    </style>
</head>
<body>
   <div class="bor">
    <h1 class="h1">A Simple Calculator.</h1>
    <form method="post" action="calculator.php">
     <label class="first">Frist Num:</label><input type="text" placeholder="enter number" name="First" class="set"><br><br><br>
     <label class="second">Second num:</label><input type="text" placeholder="enter number" name="second" class="set"><br><br><br>
     <label class="operator">Operator Select:</label><select name="select" class="select">
     <option value="add">+</option>
     <option value="sub">-</option>
     <option value="mul">*</option>
     <option value="div">/</option>
     </select><br>
     <input type="submit" value="Calculate" name="calculate" class="but"><br><br><br>
     <label class="third">result:<?php echo $d; ?></label>
   </form></div>
</body>
</html>
