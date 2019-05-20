<?php include_once("ressources/views/inc/header.php")?>
    <?php include_once("ressources/views/inc/nav.php")?>


        <section class="response_container">
           <div class="sidebar-1">
                <h1>Context</h1>
                   <p>
                       <strong>Deterrence</strong> : <em> First line of defnese against intuders who may try gain access. <br>
                       It works by creating an atmosphere intended to frigten intruders. </em>    
                   </p>
                   <p>
                        <strong>Principe : </strong> <em>If a user try to force the access by using multiple kinds of username or password <br>
                            Our system show a kind of defense system to prevent the user.
                        </em>
                   </p>
           </div>
           <div class="response_content">                  
                
                <form class="form" method="POST" action="#">
                    <h1>Deterrence simulation</h1> <br>
                    <input type="text" name="username" id="username" placeholder="Veuillez saisir votre nom d'utilisateur"> <br>
                    <input type="password" name="password" id="password" placeholder="Entrez votre mot de passe"><br>
                    <input type="submit" value="Connect">
                </form>
           </div>
           <div class="sidebar-2">
               <h1>Result</h1>

               <p>
                    <?php
                        if(!empty($error_message) && !empty($error_descript)){
                            echo "<img src='https://images.pexels.com/photos/249597/pexels-photo-249597.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500' class='img'>" .$error_message;
                            echo $error_descript;
                            echo "<p class='color:indigo !important';><a href='?Q=prevention' class='color:indigo !important'>Go to the prevention aspect</a></p>";
                        }
                    ?>
               </p>
               
                        
           </div>
        </section>

      <?php include_once("ressources/views/inc/footer.php")?>
