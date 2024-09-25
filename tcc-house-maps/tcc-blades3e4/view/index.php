<?php Include("blades/top.php")?>

<div id="leftside">
   <img src="../img/icon.png" class="logo">
   <img src="../img/Foto_entrar.png" class="people">
</div>
<div class="container mt-5"> 
   <div class="container mt-3 bg-white rounded p-3">
      <p id="ttl">Bem Vindo!</p>
       <div id="linha"></div>
         <div class="triangulo"></div>
         <p id="subttl">Decida sua forma de cadastro</p>
         <form action="cadastroemp.php">
         <button class="btn_emp" style="
         width=;
         hight=40rem;
         border: 1px solid #fff;
         box-shadow: 0px 0px 10px #000;
         margin-left:115rem;
         ">
            <img src="../img/emp_icon.png">
            Empresa
         </button>
         </form>

         <form action="cadastro.php">
         <button class="btn_user" style="
         width=;
         hight=40rem;
         border: 1px solid #fff;
         box-shadow: 0px 0px 10px #000;
         margin-left:65rem;
         ">
            <img src="../img/user_icon.png">
            Pessoal
         </button>
         </form>
            
   </div>
</div>
<script src="../script.js"></script>
<?php Include("blades/footer5.php")?>
