<style>
    body {
        margin: 0px;
    }
    table {
  
  
  width: 100%;
}

td, th {
 
  text-align: left;
  padding: 20px;
}
h2{
    text-align: center;
}


  
</style>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4"><?php require_once(ROUTE_DIR . "views/inc/menu.html.php"); ?>
        </div>
        <div class="col-md-6" style="margin-left:520px;margin-top:-450px;"><br /><br />
        <div class="moi" style="border:1px solid #F7586A;">

<h2>LISTE DES JOUEURS PAR SCORE</h2> 

  
  <?php
        $json = file_get_contents(ROUTE_DIR.'data/user.data.json');
        $arrayUser = json_decode($json,true);
    ?>    

<table>
  <tr>
    <th>Prénom/Nom</th>
    
    <th>Role</th>
    <th>Score</th>
  </tr>
  <?php foreach ($arrayUser as $user): ?>
  <?php if ($user['role'] == 'ROLE_JOUEUR') : ?>
    <tbody>
     <td><?=$user['prenom'] .''. $user['name']  ?></td>
     <td><?=$user['role']  ?></td>
  
     </tr>
     <?php endif; ?>
     <?php endforeach; ?>
     </tbody>
     </table>
  
  

</table>

              
 </div>
 <button href="#" class="btn btn-primary btn-lg active" style="color:white;background-color:red;width:100px;height:30px;margin-top:2px;margin-left:662px" role=" button" aria-pressed="true">SUIVANT</button>
</body> 
    