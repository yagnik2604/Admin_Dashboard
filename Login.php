
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>  
    <style>
        .container{
               
            
            width: 400px;
            height: 300px;
            background-color: azure;
            
            margin: 80px auto;

        }

       .container form{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        gap: 2rem;
        padding:50px;
       }

       .user_n input{
          outline: none;
          border: none;
          padding: 8px 4px;
       }
       .user_n input:hover{
          border: 2px solid rgb(176, 235, 176);
          border-radius: 20px;
          transition: all 0.4s ease;
       }

       .user_p input{
          outline: none;
          border: none;
          padding: 8px 4px;
          
       }

       .user_p input:hover{
          border: 2px solid rgb(176, 235, 176);
          border-radius: 20px;
          transition: all 0.4s ease;
       }
       .container form button{
         
        font-size: 15px;
        padding: 5px 5px;
         outline: none;
         border: none;
         background: transparent;
         cursor: pointer;
       }
       .container form button:hover{
          
        background-color: rgb(165, 220, 165);
         box-shadow: 2px black;
         border-radius: 20px;
         transition: all 0.4s ease;
         padding: 10px;
       }
       
       .container .s_btn{
         
        display: flex;
        font-size: 15px;
         margin-left: 170px;
         padding: 3px 5px;
         cursor: pointer;
         outline: none;
         border: none;
         background: transparent;
         
        
       }
       .container .s_btn:hover{
        
        background-color: rgb(165, 220, 165);
         box-shadow: 2px black;
         border-radius: 20px;
         transition: all 0.4s ease;
         padding: 10px;
       }
    
       .container a{
        text-decoration: none;
       }



        
    </style>
</head>
<body>
    <div class="container">
         
        <form action = "db_connection_for_login.php" method="POST">
              <div class="user_n">
               <label for="username">UserName :</label>
               <input type="text"  id="username" name="username" placeholder="UserName">
              </div>
            
              <div class="user_p">
                <label for="password">Password :</label>
                <input type="password" id="password" name="password" placeholder="Password">
              </div>

              <button type="submit" class="l_btn" id="l_btn">Login</button>

        </form>
         
        <a href="Singup.php">

        <button type="submit" class="s_btn" id="s_btn">SignUp</button>

         </a>
    </div>
</body>
</html>