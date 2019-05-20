<?php include_once("ressources/views/inc/header.php")?>
    <?php include_once("ressources/views/inc/nav.php")?>


        <section class="response_container">
           <div class="sidebar-1">
                <h1>Context</h1>
                    <p>
                       <strong>Prevention</strong> : <em> Process of trying to stop intruders from gaining access to the resources of the system. <br>
                       Barriers include firewalls, demilitarized zones(DMZs), and the use of access items like keys, <br>
                       biometrics, and others to allow only authorized users to use and access a facility.
                       </em>    
                   </p>
                   <p>
                        <strong>Principe : </strong> <em>After having the assurance that a user want to gain access to an unauthaurized files, the next step <br>
                        to stop him, is a prevention. We will take a example of SQLInjection.
                        <strong>example: </strong>Try to use a special character like <strong>' OR '1'='1</strong> or <strong>'--</strong> or <strong>" or ""="</strong>
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
                        if(!empty($error_message)){
                            echo "<p style='color:red'>" . $error_message. "</p>";
                            echo "<p style='color:red'>" . $error_descript . "</p>";
                            echo "<p class='color:indigo !important';><a href='?Q=detection' class='color:indigo !important'>Go to the detection aspect</a></p>";
                        }else{
                            echo "<p style='color:green'>" .$success_message. "</p>";
                            echo "<p style='color:green'>" .$success_descript. "</p>";
                            echo "<p class='color:indigo !important';><a href='?Q=detection' class='color:indigo !important'>Go to the detection aspect</a></p>";
                        }
                        echo 'User IP - '.$_SERVER['HTTP_X_FORWARDED_FOR'];
                    ?>
               </p>
               
           </div>
        </section>

      <?php include_once("ressources/views/inc/footer.php")?>
