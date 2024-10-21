
<!DOCTYPE html>
<html lang="en">  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
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
       
       .container form .f_con{
          
        display: flex;
        flex-direction: column;
        gap: 2rem;
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

       /*==================== button ==================== */
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
         
        <form  action="db_connection_for_signup.php" method="POST">
            <div class="f_con">
              <div class="user_n">
               <label for="username"> Enter UserName :</label>
               <input type="text"  id="username" name="u_name" placeholder="UserName">
              </div>
            
              <div class="user_p">
                <label for="password">Create Password :</label>
                <input type="password" id="password" name="u_pass" placeholder="Password">
              </div>

              <div class="user_p">
                <label for="password">Confirm Password :</label>
                <input type="password" id="password" name="cu_pass" placeholder="Password">
              </div>
            </div>

            
              <button type="submit" class="s_btn" id="s_btn">SignUp</button>    
        

        </form>
         
    </div>

  
</body>
</html>