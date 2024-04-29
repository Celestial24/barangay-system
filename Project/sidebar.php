
   <head>

   <link rel="stylesheet" href="../Css/sidebar.css">

   </head>
   
   <div class="logo">
       <i class="fas fa-bars menu-icon"></i>
       <span class="logo-name">Welcome</span>

       <!-- header tags -->
       <div class="header">
           <?php
            include('header.php');
            ?>
       </div>
   </div>

   <div class="sidebar" style="z-index: 100;">
       <div class=" logo">
           <i class="fas fa-bars menu-icon"></i>
           <span class="logo-name">Barangay System</span>
       </div>

       <div class="sidebar-content">
           <!-- Home Page -->
           <ul class="lists">
               <li class="list">
                   <a href="../Services/Dashboard.php" class="nav-links">
                       <i class="fas fa-home icon"></i>
                       <span class="links">Dashboard</span>
                   </a>
               </li>
           </ul>

           <!-- About-->

           <ul class="lists">
               <li class="list">
                   <a href="" class="nav-links">
                       <i class="fa-solid fa-user icon"></i>
                       <span class="links">About</span>
                   </a>
               </li>
           </ul>

           <!-- Contact-->

           <ul class="lists">
               <li class="list">
                   <a href="" class="nav-links">
                       <i class="fa-solid fa-phone icon"></i>
                       <span class="links">Contact</span>
                   </a>
               </li>
           </ul>

           <!-- Notifications-->

           <ul class="lists">
               <li class="list">
                   <a href="" class="nav-links">
                       <i class="fa-solid fa-bell icon"></i>
                       <span class="links">Notification</span>
                   </a>
               </li>
           </ul>

           <!-- message-->

           <ul class="lists">
               <li class="list">
                   <a href="" class="nav-links">
                       <i class="fa-solid fa-message icon"></i>
                       <span class="links"> message</span>
                   </a>
               </li>
           </ul>


           <!-- members-->

           <ul class="lists">
               <li class="list">
                   <a href="" class="nav-links">
                       <i class="fa-solid fa-people-arrows icon"></i>
                       <span class="links"> members</span>
                   </a>
               </li>
           </ul>


           <!-- Files-->

           <ul class="lists">
               <li class="list">
                   <a href="" class="nav-links">
                       <i class="fa-solid fa-file icon"></i>
                       <span class="links"> Files</span>
                   </a>
               </li>
           </ul>


           <br>
           <br>

           <!--bottom content -->

           <div class="bottom-content">

               <ul class="lists">
                   <li class="list">
                       <a href="" class="nav-links">
                           <i class="fa-solid fa-gear icon"></i>
                           <span class="links"> Settings</span>
                       </a>
                   </li>
               </ul>


               <ul class="lists">
                   <li class="list">
                       <a href="../php/login.php" class="nav-links">
                           <i class="fa-solid fa-right-from-bracket icon"></i>
                           <span class="links"> log out</span>
                       </a>
                   </li>
               </ul>

           </div>
       </div>
   </div>
   </div>
