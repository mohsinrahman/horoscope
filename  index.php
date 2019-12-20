<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sunshiney&display=swap" rel="stylesheet">
    
   <title>Horoscope</title>
    <style>
    body{
        height: 100vh;
        font-family: 'Luckiest Guy', cursive;
        background-image: linear-gradient(#51C5BC, #77CB77);
        color: #ffffff;
    }
    #horoscope-heading{
        color: #ffffff;
    }
    #horoscope{
        font-family: 'Open Sans', sans-serif;
        flex-direction: column;
        width: 90%;
        display: flex;
        justify-content: space-around;
        align-items: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    #horoscope-form, #horoscope-heading{
        display: flex;
        flex-direction: column;
        text-align: center;
        justify-content: space-around;
        
    }

    *:focus {
    outline: none;
}
#horoscope-inputText{
        width: 300px;
        border: 0;
        border-bottom: 1px solid white;
        background: transparent;
        font-family: 'Open Sans', sans-serif;
        font-weight: normal;
        font-size: 1.5em;
        color: #ffffff;
    }
    #horoscope-btn, #horoscope-update-btn, #horoscope-delete-btn, #horoscope-read-btn{
        width: 100px;
       height: 30px;
       background: transparent;
       box-shadow: 2px 2px 5px #808080;
       margin-top:20px;
       border: 0;
       border-radius: 5px;
       font-family: 'Open Sans', sans-serif;
       color: #ffffff;
   }
   input{
  align-self: center;
   }
   #horoscope-text{
    font-family: 'Sunshiney', cursive;
    font-size: 30px;
   }
ul{
       display:flex;
       flex-direction: row;
       margin-top: 50px;
       list-style:none;
       justify-content: space-around;
   }
   li{
      
   }
   img{
       height:100px;
       width:75px;
   }
    </style>
</head>
<body>
   <div id="horoscope-heading">
   <h1>Daily Horoscope</h1>
   </div>
    <div id="horoscope">
    <form  id="horoscope-form" class="form">
        <input type="text" name="date" id="horoscope-inputText">
        <input type="submit" value="Save" id="horoscope-btn" >
        <input type="submit" value="Read" id="horoscope-read-btn">
        <input type="submit" value="Update" id="horoscope-update-btn">
        <input type="submit" value="Delete" id="horoscope-delete-btn">
    </form>
    <p id="horoscope-text">
 
    </p>
    <ul id="horoscope-images">
    <li><img src="images/Aquarius.png" alt=""></li>
    <li><img src="images/Aries.png" alt=""></li>
    <li><img src="images/Cancer.png" alt=""></li>
    <li><img src="images/Capricorn.png" alt=""></li>
    <li><img src="images/Gemini.png" alt=""></li>
    <li><img src="images/Leo.png" alt=""></li>
    <li><img src="images/Libra.png" alt=""></li>
    <li><img src="images/Pisces.png" alt=""></li>
    <li><img src="images/Sagittarius.png" alt=""></li>
    <li><img src="images/Scorpio.png" alt=""></li>
    <li><img src="images/Taurus.png" alt=""></li>
    <li><img src="images/Virgo.png" alt=""></li>
    </ul>
    </div>
    <div >
    
    </div>
    <script>
    
//https://www.youtube.com/watch?v=MNuJECU2uHM action = "server/addHoroscope.php" method= "POST"
</script>
<script src="snow.js"></script>
<script src="logic.js"></script>
</body>
</html>