
<?php

if (isset($_SESSION['arrayError'])){
  $arrayErrors = $_SESSION['arrayError'];
  unset($_SESSION['arrayError']);
}

?>
    <body>
    <form action="<?=WEB_ROUTE ?>" method="POST" enctype="multipart/form-data">
         <input type="hidden" name="controlleurs" value="admin" />
        <input type="hidden" name="action" value="inscription" />  

    <div class="row">
        <div class="col-md-4"><?php require_once(ROUTE_DIR . "views/inc/menu.html.php"); ?>
        </div>
        <div class="col-md-6" style="margin-left:510px;margin-top:-454px;">
        <div class="moi" style="border:1px solid #F7586A;">
        <div class="container" style="margin-left: 25px;">
        <h3 style="margin-top:-30px" id="si"for="">S'INSCRIRE</h3>
        <div><p style="height:px;margin-top:-20px ">Pour proposer des quiz </p><div>
        <span><img src="../../public/img/illuminati.png" alt="" id="mo"  /></span>

    <div class="container1"> 
        <div id="sane">
        <div class="form-group"><br><br>
        <label for="">Prenom</label><br><br>
        <input type="text" class="form-control" name="prenom" id="" aria-describedby="helpId" placeholder="EL">
        <small id="helpId" class="form-text text-danger">
        <?php echo isset($arrayErrors['prenom']) ? $arrayErrors['prenom'] : ''; ?></div>
            <div>
        </small>
        </div><br>
        <div class="form-group">
            
        <label for="">Nom</label><br><br>
        <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="PHENOMENO">
        <small id="helpId" class="form-text text-danger">
        <?php echo isset($arrayErrors['name']) ? $arrayErrors['name'] : ''; ?>
        </small>
        </div><br>
        <div class="form-group">
        <label for="">Login</label><br><br>
        <input type="email" class="form-control" name="login" id="" aria-describedby="emailHelpId" placeholder="ptimein3@gmail.com">
        <small id="helpId" class="form-text text-danger">
        <?php echo isset($arrayErrors['login']) ? $arrayErrors['login'] : ''; ?>
        </small>
        </div><br>
    
       <div class="form-group">
       <label for="">password</label><br>
       <br>
       <input id="gana" type = "password" class="form-control" name="mdp"id="" placeholder="...........">
       <small id="helpId" class="form-text text-danger">
       <?php echo isset($arrayErrors['mdp']) ? $arrayErrors['mdp'] : ''; ?>
       </small>
       </div><br>

       <div class="form-group">
       <label for="">Confirmer password</label><br><br>
       <input id="messi" type="password" class ="form-control" name="password" id="" placeholder="...........">
       </div>    
       <div class="form-group">
       <label for="">Avatar</label>  
       <input type="file" class="form-control-file" name="" id="" placeholder="" aria-describedby="fileHelpId">
       <small id="fileHelpId" class="form-text text-muted"></small><br>
       <button type="submit" name="inscription" class="tra">Créer un compte</button>
    </div>
<div>

        
 </body>  
        
    
     
    <style>
     #si{
      
      color:black;
      height:1px;
      padding:45px;
     
        }
     #gana{
        border-color: red;
        }

      #messi{
      border-color: red;}
    
     
        
        .form-group{
            color: #8c8c8c;
         
        }

        .container1{
            height:498px;
            max-width: 200px;

        }
        .tra{
            margin-left:85px;
            background-color:red;

        }

    </style>
    <?php 
          require_once(ROUTE_DIR.'views/inc/footer.html.php');
      ?>