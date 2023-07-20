<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piza delivery</title>
</head>
<style>

  @import url('https://fonts.googleapis.com/css2?family=Belanosima&family=Concert+One&family=Geologica:wght@500&family=IBM+Plex+Mono:wght@600&family=Merriweather+Sans&family=Poppins:wght@200&family=Prata&family=Signika:wght@500&display=swap');

    *{
        margin:0%;
        padding:0%;
    }
    body{
       background-color: #1A1C1A;
       background-image: url('./img/main logo.png');
        background-repeat: no-repeat;
        background-repeat: no-repeat;
        background-size: 100% 600px;
    }
    h1{
        font-size:80px;
        color:white;
        text-align:center;
        margin-top:100px;
 
        font-family: 'Signika', sans-serif;

    }
    h4{
        font-size:30px;
        
    }
    p{
        padding:10px 60px 10px 60px;
        font-size:20px;
        font-style:italic;
        
    }
    .main{
        display: grid;
        grid-template-columns: auto auto auto;
        grid-gap: 20px;
        justify-content:center;
  font-family: 'Signika', sans-serif;
      
      
        
    }
    .grid{
        display: flex;
        flex-direction:column;
        gap: 10px;
        justify-content:center;
        background-color:white;
        text-align:center;
        width:350px;
        height:500px;
       
    }
    img{
        margin-top:5%;
        height:250px;
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 270px;
      
    }
    .price{
        font-size:20px;
        color:red;
    }
    footer{
        height:100px;
        color:white;
        text-align:center;
        margin-top:20px;
    }
    i{
          text-decoration: underline;
    }
   
</style>
<body>
    <h1>Italy Pizza Menu</h1>

    <?php   include './searchmenu.php'; ?>
         

  <!-- <div class="main">
       <div class="grid">
           <img src="https://assets.nicepagecdn.com/d2cc3eaa/3955079/images/09.jpg" alt="">
           <h4>Veggie Pizza</h4>
           <p>Black olives, green pepper, onion, mushroom & tomato</p>
           <h4 class="price">$12.45</h4>
       </div> -->
              

       <div class="main">
    <?php 
           include './db_connect.php';
           
           
           $sql = "SELECT * FROM pizza_content";

           $result = mysqli_query($conn, $sql);

           if (mysqli_num_rows($result) > 0) {
        
            while($row = mysqli_fetch_assoc($result)) {
         echo "
            <div class='grid'>
            <img src='".$row["img"]."' alt=''>
            <h4>".$row["name"]."</h4>
            <p>".$row["paragraph"]."</p>
            <h4 class='price'>$".$row["price"]."</h4>
            </div>";
            }
          } else {
            echo "0 results"; 
          }
    
  ?> 
     </div>
         <footer>
        <h2> Image From <i>freepik</i></h2>
    </footer>
</body>
</html>