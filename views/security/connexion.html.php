<?php
if (isset($_SESSION['arrayError'])){
  $arrayError = $_SESSION['arrayError'];
  unset($_SESSION['arrayError']);
}
require_once(ROUTE_DIR."views/inc/header.html.php"); 
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Quiz Project</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/css/style.">
  </head>
  <body>
  <img src="../../public/img/logo.png" alt="" id="ko"  />
      <h3 id="titre">Le plaisir de jouer</h3><br/><br/>
      </div> 
      <?php if (isset($arrayError['userConnect'])) :?>
            <div class="alert alert-danger" role="alert">
            <strong><?php echo isset($arrayError['userConnect']) ? $arrayError['userConnect'] : ''; ?></strong>
      <?php endif;?>
      <form action="<?=WEB_ROUTE ?>" method="POST">
            <input type="hidden" name="controlleurs" value="security" />
        <input type="hidden" name="action" value="connexion" />
       

      <div class="container">
    <h3 id="si"for="">Login Form</h3>
    <div class="form-group">
      <label for=""></label>
      <input type="email" class="form-control" name="login" id="" aria-describedby="emailHelpId" placeholder="Login">
      <small id="emailHelpId" class="form-text text-muted">
      <small class="text-danger">
      <?php echo isset($arrayError['login']) ? $arrayError['login'] : ''; ?>
      </small>
    </div>
    <div class="form-group">
      <label for=""></label>
      <input type="password" class="form-control" name="password" id="" placeholder="Password">
      <small class="text-danger">
      <?php echo isset($arrayError['password']) ? $arrayError['password'] : ''; ?>
    </div><br/>
    <button type="submit" class="btn btn-primary">Connexion</button>


    <a href="<?=WEB_ROUTE.'?controlleurs=security&view=inscription'?>" >S'inscrire pour jouer?</a>
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
   #titre{
      text-align:center;
      background-color:red;
      height:60px;
      color:white;
      padding:10px;

    }
    #ko{
      height:50px;
      position: absolute;
      margin-left:1%;
      margin-top:0.5%;
    }
    #si{
      background-color:red;
      margin-left:-15px;
      margin-right:-15px;
      color:white;
      height:50px;
      padding:10px;
    
    }
    .container{
      border:0px solid white;
      max-width:45%;
      background-color:white;
      height:320px;
      
    }
    a{
      margin-left:30%;
      color: #8c8c8c;
    }
    .btn{
      background-color:red;
      border:0px;
    }
    body {
background-image:url(hel.jpg);
background-repeat:no-repeat;
background-position:center center ;
margin:0%;
background-size:100%;
background-size: cover;


}
#logo{
  
  position:absolute;
}
</style>