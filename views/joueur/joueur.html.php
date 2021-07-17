
<form method="post" action="<?php WEB_ROUTE ?>">
    <img style="position:absolute;height:70px;margin-left:1%;margin-top:0.5%" src=" <?= WEB_ROUTE . "img/logo.png" ?> ">
    <h4 style="background-color:red;text-align:center;color:white;height: 30px;padding:30px;font-size:20px;margin-top: -8px;width:100%;">LE PLAISIR DE JOUER</h4>
    <h3 style="background-color:#F7586A;text-align:center;color:white;height: 40px;padding:30px;margin-top: -20px; width:100%;">BIENVENUE SUR LA PLATEFORME DE JEU DE QUIZZ <br> JOUER ET TESTER VOTRE NIVEAU DE CULTURE GENERAL

        <a class="btn btn-primary" style="margin-left:1050px;margin-top:-20px;color:red;background-color:white;height:90px ;border-color:red" href="<?= WEB_ROUTE . '?controlleurs=security&view=connexion' ?>">Deconnexion</a>
    </h3>
   <div class="moi" style="border:1px solid #F7586A;width:60%; height: 52%;margin-left:6px;"> 
   
     <div class="titre" style="background-color:F7586A;width:100%;height: 60px; " >
        <h3 style="text-align:center;margin-top :-2px; color:aliceblue"><u>Question 1/5:</u></h3>
      <P style="text-align:center;margin-top:-15px; color:aliceblue">Les langages Web:</P>
     </div> 
     <div>
        <p style="margin-left:700px;border:1px solid;width:6%;background-color:F7586A;color:aliceblue"> 3 pts</p>
     </div> <br><br>
    <div class="form-check">
    <input type="checkbox" class="demo2" id="demo2">
    <label for="demo2"><b> HTML</b>
    </label><br><br>
    </div>

    <div class="form-check">
    <input type="checkbox" class="demo2" id="demo2">
    <label for="demo2"><b> R</b>
    </label><br><br>
    </div>

    <div class="form-check">
    <input type="checkbox" class="demo2" id="demo2">
    <label for="demo2"> <b> JAVA</b>
    </label><br><br>
    </div>
    <div>
        <button type="b" style="width:100px;height:30px;background-color:F7586A;color:white;;margin-top:10px;margin-left:5px" > PRECEDANT</button>
        <button type="buton" style="width:100px;height:30px;background-color:F7586A;color:white;;margin-top:-10px;margin-left:550px" > SUIVANT</button>
    </div>
   </div>
   <div class="col-md-6" style="margin-left:850px;margin-top:-300px;">
   <div class="moi" style="border:1px solid #F7586A;width:70%;height:47%">
   <table>
  <tr>
    <th>Top Score</th>
    <th>Mon meilleur Score</th>
    
  </tr>
  <tr>
    <td>MEIN TRAORE</td>
    <td>1022 pts</td>
  </tr>  
  <tr>
    <td>MEIN TRAORE</td>
    <td>1022 pts</td>
  </tr>
    <tr>
    <td>MEIN TRAORE</td>
    <td>1022 pts</td>
    </tr>
    </tr>
    <tr>
    <td>MEIN TRAORE</td>
    <td>1022 pts</td>
    </tr>
    </tr>
    <tr>
    <td>MEIN TRAORE</td>
    <td>1022 pts</td>
    </tr>
  
</table>
  
    
    
    
<style>
    table {
  font-family: arial, sans-serif;
  
  width: 100%;
}

td, th {
  
  text-align: left;
  padding: 8px;
}

/* tr:nth-child(even) {
  background-color: #dddddd;
} */

input[type="checkbox"].demo2 {
  display: none;
  
}
input[type="checkbox"].demo2 + label::before {
  content:'';
  border: 1px solid #F7586A;
  padding: 0 0.6rem;
  margin-right: 0.3rem;

}
.form-check{
    margin-left: 90px;
    
}



</style>
  