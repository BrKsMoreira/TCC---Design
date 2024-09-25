<?php Include("blades/top.php")?>
<?php
   Include("../model/connect.php");
   
   if(isset($_POST['email']) || isset($_POST['senha']))
   {
      if(strlen($_POST['email']) == 0)
      {
         echo "<div class='alert alert-warning' role='alert'>
                  Preencha seu Email!
               </div>";
      }   

      else if(strlen($_POST['senha']) == 0)
      {  
         echo "<div class='alert alert-warning' role='alert'>
                  Preencha sua senha!
               </div>";
      }

      else
      {

         $email = mysqli_real_escape_string($connect, trim($_POST['email']));
         $senha = mysqli_real_escape_string($connect, trim($_POST['senha']));

         $sql_code = "SELECT usuario.senha AS Senha, usuario.email AS Email_Usuario FROM usuario WHERE usuario.senha = '$senha' AND usuario.email = '$email';";


         $sql_query = $connect-> query($sql_code);

         $qtd = $sql_query->num_rows;

         if($qtd == 1)
         {
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION))
            {
               session_start();
            }

            $_SESSION['Email'] = $usuario['email'];

            header("Location: home.php");
         }
         else
         {
            echo"<script>alert('Email ou senha incorretos')</script>";
         }
      }
   }
?>

<div id="leftside">
   <img src="../img/icon.png" class="logo">
   <img src="../img/Foto_entrar.png" class="people">
</div>
<div class="container mt-5"> 
   <div class="container mt-3 bg-white rounded p-3">
      <p id="ttl">Login</p>
       <div id="linha"></div>
         <div class="triangulo"></div>
         <p id="subttl">Entrar em sua conta</p>
            <form action="" method="POST">
               <p id="lbl1">Email</p>
               <input type="text" class="inputemail" name="email">
               <br>
               <br>
               <p id="lbl2">Senha</p>
               <input type="password" class="inputsenha" id="password" name="senha">
               <div id="icon2" onclick="showHide()"></div>
               <br>
               <br>
               <p class="txt_bx">Você ainda não tem uma conta?<a href="index.php" class="hl">Cadastrar</a></p>
               <button id="showsweetalert" type="submit" class="btn" style="    
               background-color:#01E581; 
               color: #fff; 
               border-radius:20px; 
               font-size: 3.4rem; 
               align-items: center; 
               text-align: center;"
               >Entrar</button>
            </form>
            
   </div>
</div>
<script src="../script.js"></script>
<?php Include("blades/footer.php")?>


