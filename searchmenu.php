<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <style>
         form{
        text-align:center;
        margin-bottom:100px;
        margin-top:100px;
        width:100%;
    }
    .text{
            width:300px;
            height:40px;
  
    } 
    .btn{
            width:50px;
            height:45px;
     
    }
      .btn:hover{
        cursor:pointer;
    }
     </style>
</head>
<body>
<form action="" method="">
       
       <input class="text" type="text" placeholder="Enter Your Choice" name="search">
       <button class="btn">Search</button>

       <?php 
           include './db_connect.php';
  ?> 
   </form>
</body>
</html>