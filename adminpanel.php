<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN PANEL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" integrity="sha512-F5QTlBqZlvuBEs9LQPqc1iZv2UMxcVXezbHzomzS6Df4MZMClge/8+gXrKw2fl5ysdk4rWjR0vKS7NNkfymaBQ==" crossorigin="anonymous"></script>-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <a href="#">
                <li>
                    <span class="icon"><i class="fab fa-houzz"></i></i></span>
                    <span class="title"><h2>ENYUMBA</h2></span>
                    </a>
             </li>
             <li>
                <a href="#">
                    <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
                    <span class="title">Dashboard</span>
                    </a>
             </li>
             <li>
                <a href="adminview.php">
                    <span class="icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                    <span class="title">Landlords</span>
                    </a>

             </li>
             <li>
                <a href="tenantview.php">
                    <span class="icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                    <span class="title">Tenants</span>
                    </a>

             </li>
             <li>
                <a href="#">
                    <span class="icon"><i class="fa fa-question-circle" aria-hidden="true"></i></span>
                    <span class="title">Help</span>
              </a>      
             </li>
             <li>
                <a href="changepassword.php">
                    <span class="icon"><i class="fa fa-key" aria-hidden="true"></i></span>
                    <span class="title">Password</span>
                    </a>
             </li>
             <li>
                <a href="adminhouse.php">
                    <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
                    <span class="title">AdminHouse</span>
                    </a>
             </li>
             <li>
                <a href="#">
                    <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
                    <span class="title">Logout</span>
                    </a>
             </li>
            </ul>
        </div>
        <div class="main">
            <div class="topbar">
                <div class="toggle" onclick="toggleMenu();"></div>
                <div class="search">
                    <label>
                        <input type="text" placeholder="search here">
                        <i class="fas fa-search"></i>
                    </label>
                </div>
                 <div class="user">
                        <img src="user1.jpg">
                        
                    </div>
           </div>
           <div class="cardBox">
            <div class="card">
                <div>
                    <div class="numbers">50</div>
                    <div class="cardName">Daily Views</div>
                </div>
                <div class="iconBox">
                    <i class="fas fa-eye"></i>   
                </div>
                </div>
               <div class="card">
                <div>
                    <div class="numbers">80</div>
                    <div class="cardName">Users</div>
                </div>
                <div class="iconBox">
                   <i class="fas fa-user-friends"></i>     
                </div>
               </div>
               <div class="card">
                <div>
                    <div class="numbers">5</div>
                    <div class="cardName">Apartments</div>
                </div>
                <div class="iconBox">
                <i class="fas fa-building"></i>   
                </div>
               </div>
                <div class="card">
                <div>
                    <div class="numbers">100</div>
                    <div class="cardName">Reviews</div>
                </div>
                <div class="iconBox">
             <i class="fas fa-comments"></i>
     
                </div>
               </div>
          </div>
           <div class="details">
            <div class="recentApartments">
                <div class="cardHeader">
                    <h2>Recent Apartments</h2> 
                    <a href="#" class="btn">View All</a>      
                </div>
                  </div>
                  <div class="recentUsers">
                    <div class="cardHeader">
                        <h2>Recent Users</h2>
                    </div>
                    <table>
                       <tbody>
                           <tr>
                               <td width="60px"><div class="imgBx"><img src="user1.jpg"></div></td>
                               <td><h4>Wanjiru<br><span>Email</span></h4></td>
                           </tr>
                           <tr>
                               <td width="60px"><div class="imgBx"><img src="user1.jpg"></div></td>
                               <td><h4>Wanjiru<br><span>Email</span></h4></td>
                           </tr>
                           <tr>
                               <td width="60px"><div class="imgBx"><img src="user1.jpg"></div></td>
                               <td><h4>Wanjiru<br><span>Email</span></h4></td>
                           </tr>
                           <tr>
                               <td width="60px"><div class="imgBx"><img src="user1.jpg"></div></td>
                               <td><h4>Wanjiru<br><span>Email</span></h4></td>
                           </tr>
                       </tbody>
                    </table>
                      
                  </div>
               
           </div>
             </div>
    </div>
    <script>
        function toggleMenu() {
            let toggle = document.querySelector('.toggle');
             let navigation = document.querySelector('.navigation');
               let main = document.querySelector('.main');
            toggle.classList.toggle('active');
             navigation.classList.toggle('active');
              main.classList.toggle('active');
        }
    </script>
</body>
</html>