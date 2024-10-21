<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
</head>

<body>
    <div class="container">
        <!-- aside portion-->
        <aside>

            <div class="top">
                <div class="logo">
                    <i class="fa-solid fa-user"></i>
                </div>

                <!-- <div class="menu_bar">

                  <button class="s_btn" id="btn">
                    <i class="fa-solid fa-bars"></i>
                  </button>

                  <button class="c_btn" id="close_btn">
                    <i class="fa-solid fa-xmark"></i>
                  </button>


                </div> -->
            </div>
            <!-- top end-->

            <div class="sidebar">

                <a href="#" class="active">
                    <i class="fa-solid fa-clipboard"></i>
                    <h3>Dashboard</h3>
                </a>

                <a href="#">
                    <i class="fa-solid fa-person"></i>
                    <h3>Customers</h3>
                </a>

                <a href="#">
                    <i class="fa-solid fa-chart-pie"></i>
                    <h3>Analytics</h3>
                    
                </a>
  
                <a href="#">
                    <i class="fa-solid fa-square-envelope"></i>
                    <h3>Message</h3>
                    <h3 class="sms_count">14</h3>
                </a>

                <a href="#">
                    <i class="fa-brands fa-product-hunt"></i>
                    <h3>Product</h3>
                </a>

                <a href="#">
                    <i class="fa-solid fa-gear"></i>
                    <h3>Setting</h3>
                </a>

                <a href="Login.php">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <h3>Login</h3>
                </a>
                <a href="Logout.php">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <!-- aside portion end-->

        <!-- main start-->
        <main>

            <h1>Dashboard</h1>

            <div class="date">
                <input type="date">

            </div>

            <!--------------------------start insight---------------------------->
            <div class="insights">
                <!-----------  start selling  --------------->
                <div class="Sales">
                    <i class="fa-solid fa-arrow-up-right-dots"></i>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Sales</h3>
                            <h1>$25,000</h1>
                        </div>

                        <div class="progress">
                            <svg>
                                <circle r="30" cy="40" cx="40"></circle>
                            </svg>
                            <div class="number">80%</div>
                        </div>
                    </div>
                    <small>Last 24 Hours</small>
                </div>
                <!---------end sales--------------->


                <!---------expenses-2  --------------->

                <div class="expenses">
                    <i class="fa-solid fa-file-invoice-dollar"></i>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Expenses</h3>
                            <h1>$25,000</h1>
                        </div>

                        <div class="progress">
                            <svg>
                                <circle r="30" cy="40" cx="40"></circle>
                            </svg>
                            <div class="number">80%</div>
                        </div>
                    </div>
                    <small>Last 24 Hours</small>
                </div>
                <!---------expenses-2 ------------------->

                <!---------end sales -3 ------------------->

                <div class="income">
                    <i class="fa-solid fa-money-check-dollar"></i>
                    <div class="middle">
                        <div class="left">
                            <h3>Income</h3>
                            <h1>$25,000</h1>
                        </div>

                        <div class="progress">
                            <svg>
                                <circle r="30" cy="40" cx="40"></circle>
                            </svg>
                            <div class="number">80%</div>
                        </div>
                    </div>
                    <small>Last 24 Hours</small>
                </div>
                <!---------end sales -3 ------------------->
            </div>
            
            <!-----------------end insight------------------------------------------>
             




            <!----------------- start Add-data------------------------------------------>
            
            <div class="recent_order">
                  <h1>Add Data</h1>
                    
                  <table>
                       <thead>
                            <tr>
                                <th>Product ID</th>
                                <th>Product Name</th>
                                <th>Product quantity</th>
                                <th>Payment Status</th>
                            </tr>
                       </thead>

                       <tbody>
                           <form action="db_connection_for_recentorder.php" method="POST">
                             <tr class="tr">
                                 <td>
                                    <input type="text" name="productid"  placeholder="product ID">
                                 </td>
                                 <td>
                                    <input type="text" name="productname" placeholder="product Name">
                                 </td>
                                 <td>
                                    <input type="text" name="productq" placeholder="product quantity">
                                 </td>
                                 <td>
                                    <input type="text" name="payments" placeholder="Payment status">
                                 </td>
                             </tr>
                              <tr> 
                                <td>    
                                <button type="submit" id="btn" class="add_btn">Add</button>
                                </td>    
                            </tr>
                            </form>  
                       </tbody>
                  </table>  
            </div> 
            <!----------------- end Add-data------------------------------------------>


            <!-----------------start recent order---------------------------------->

            <div class="recent_order">
                <h1>Recent Orders</h1>

                <table>

                    <thead>
                           <tr>
                               <th>Product ID</th>
                               <th>Product Name</th>
                               <th>Product Quantity</th>
                               <th>Payments</th>
                           </tr>
                    </thead>

                    <tbody>
                    
   
                    </tbody>
                </table>
            </div>

            <!-----------------end recent order---------------------------------->

        </main>
        <!-------------------------------------------- main end--------------------->

        <!------------------------------- right start-------------------------------------------->

       
        <div class="right">
            <div class="top">
                
        
                <div class="theeme-toggle">
                    <!-- <i class="fa-solid fa-sun"></i>
                    <i class="fa-solid fa-moon"></i> -->
                    <i class="fa-solid fa-moon"></i>

                </div>
            
                <div class="profile">
                    <img src="emmy.jpg" alt="picture">
                    <a href="#">Profile</a>
                </div>
            </div>  
           
        </div>
        <!-------------------------------------- end right----------------------------->

    </div>
    <!--------------------------------end container----------------------------------->

      <script src="script.js"></script>
</body>

</html>