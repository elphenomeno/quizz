<?php

if (isset($_SESSION['arrayError'])){
  $arrayError = $_SESSION['arrayError'];
  unset($_SESSION['arrayError']);
}
require_once(ROUTE_DIR."views/inc/header.html.php");
/* if (est_admin()) {
    require_once(ROUTE_DIR.'views/inc/menu.html.php');
  } */
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Quizz Project</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/css/styles.css">
  </head>
  <body>
  <img src="../../public/img/logo.png" alt="" id="ko"  />
      <h3 id="ya">Le plaisir de jouer</h3>
      <form action="<?=WEB_ROUTE ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="controlleurs" value="security" />
                <input type="hidden" name="action" value="inscription" />
                
      <div class="container">
    <h3 id="si"for="">S'INSCRIRE</h3>
    <div><p><hr style="height:2px; ">pour tester votre niveau de culture générale </p></hr><div>
    <span><img src="../../public/img/illuminati.png" alt="" id="mo"  /></span>
    
    <div id="sane">
    <div class="form-group">
      <label for="">Prenom</label>
      <input type="text" class="form-control" name="prenom" id="" aria-describedby="helpId" placeholder="EL">
     <small id="helpId" class="form-text text-danger">
      <?php echo isset($arrayError['prenom']) ? $arrayError['prenom'] : ''; ?></div>
            <div>
      </small>
    </div>
    <div class="form-group">
      <label for="">Nom</label>
      <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="PHENOMENO">
      <small id="helpId" class="form-text text-danger">
      <?php echo isset($arrayError['name']) ? $arrayError['name'] : ''; ?>
      </small>
    </div>
    <div class="form-group">
      <label for="">Login</label>
      <input type="email" class="form-control" name="login" id="" aria-describedby="emailHelpId" placeholder="ptimein3@gmail.com">
      <small id="helpId" class="form-text text-danger">
      <?php echo isset($arrayError['login']) ? $arrayError['login'] : ''; ?>
      </small>
    </div>
   
        <div class="form-group">
          <label for="">password</label>
          <input id="gana" type = "password" class="form-control" name="mdp"id="" placeholder="...........">
          <small id="helpId" class="form-text text-danger">
          <?php echo isset($arrayError['mdp']) ? $arrayError['mdp'] : ''; ?>
         </small>
        </div>

        <div class="form-group">
          <label for="">Confirmer password</label>
          <input id="messi" type="password" class ="form-control" name="password" id="" placeholder="...........">
        </div>
    
    
    <div class="form-group">
      <label for="">Avatar</label>
     
      
      <input type="file" class="form-control-file" name="" id="" placeholder="" aria-describedby="fileHelpId">
      <small id="fileHelpId" class="form-text text-muted"></small>
    </div>


    <br/>
    <button type="submit" class="btn btn-primary">Créer un compte</button>
    </div>
    </div>
    <style type="text/css">
   





    </style>
    <?php 
          require_once(ROUTE_DIR.'views/inc/footer.html.php');
      ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<style>

#ya{
	text-align:center;
	background-color:red;
	height:60px;
	color:white;
	padding:10px;
  
      }
      #sane{
	margin-top:0%;
      }
      #ko{
	height:50px;
	position: absolute;
	margin-left:1%;
	margin-top:0.5%;
      }
      #mo{
	margin-left:65%;
	margin-top:1%;
	height:22%;
	position:absolute;
	max-width:22%;
      }
      #si{
      
	margin-left:-2%;
	margin-right:-2%;
	color:black;
	height:50px;
	padding:10px;
	border-radius: 10px 10px 0px 0px;
      }
      .container{
	border:0px solid white;
	max-width:55%;
	background-color:white;
	height:auto;
	position: relative;
	
      }
      #gana{ border-color: red;
  
      }
      #messi{
	border-color: red;
      }
      
      
   
      
      
      a{
	margin-left:30%;
	border-bottom:1px solid black;
	color:black;
      }
      .btn{
	background-color:red;
	border:0px;
	margin-left:15%;
	 
      }
      body {
  background-image:url(hel.png);
  background-repeat:no-repeat;
  background-position:center center ;
  margin:0%;
  background-size:100%;
  background-size: cover;
  
  
  }
  #logo{
    
    position:absolute;
  }
  .form-group{
  
    max-width:50%;
    color: #8c8c8c;
    
  }