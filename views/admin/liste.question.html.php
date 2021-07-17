<style>
    body {
        margin: 0px;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-3"><?php require_once(ROUTE_DIR . "views/inc/menu.html.php"); ?>
        </div>
        <div class="col-md-6" style="margin-left:510px;margin-top:-500px;"><br /><br />
        <?php 
          $json = file_get_contents(ROUTE_DIR.'data/question.json');
          $arrayQuestion = json_decode($json, true);  
          /* $nombrePage = 0;
          $page = 0;
          $suivant = 2;
          $precedent = 0;
          
          if (!isset($_GET['page'])) {
            $page = 1;
            $_SESSION['questionlist'] = $arrayQuestion;
            $nombrePage = nombrePageTotal($_SESSION['questionlist'] , 3);
            $listquestions = get_element_to_play($_SESSION['questionlist'], 3 ,$page);
          }

          if (isset($_GET['page'])) {
            $page = $_GET['page'];
            $suivant = $page+1;
            $precedent = $page-1;
            $nombrePage = nombrePageTotal($_SESSION['questionlist'] , 3);
            $listquestions = get_element_to_play($_SESSION['questionlist'], 3 ,$page);
          } */
         ?>
        <div class="manga">
        <tr>
            <th scope="col">Question</th>
            <th scope="col">modif ou suppression</th><br/><br/>
        </tr>
        <?php foreach ($arrayQuestion as $question): ?>
          <tr> <td><?php echo ($question['question']) ; ?></td> <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                     <td><a name="" id="" class="btn bns btn-success" href="<?= WEB_ROUTE .'?controlleurs=admin&view=editer&id='.$question['id']?>" role="button">MODIFIER&nbsp;<i class="icon-edit"></i></a>
                          <a name="" id="" class="btn bt btn-danger" href="<?= WEB_ROUTE .'?controlleurs=admin&view=delete&id='.$question['id']?>"  role="button">SUPPRIMER&nbsp;<i class="icon-trash"></i></a><br/></td></tr><br/>
          <?php endforeach; ?>
          <?php foreach ($data as $question): ?>
          <?php endforeach; ?>
                    <div>
                    <?php if(empty($_GET['page']) || ($_GET['page']==1) ): ?>
                    <a name="" id="" class="btn btn-danger bx disabled  mt-2 " href="<?=WEB_ROUTE.'?controlleurs=admin&view=liste.question&page='.$precednt;  ?>" role="button">Precedent</a> 
                    <?php else: ?>
                        <a name="" id="" class="btn btn-danger bx mt-2  " href="<?=WEB_ROUTE.'?controlleurs=admin&view=liste.question&page='.$precednt;  ?>" role="button">Precedent</a> 
                    <?php endif ?>
                    <?php if($_GET['page'] > $nbrPage-1): ?>
                    <a name="" id="" class="btn bx btn-danger disabled  mt-2 suivant" href="<?=WEB_ROUTE.'?controlleurs=admin&view=liste.question&page='.$suivant; ?>" role="button">Suivant</a>
                    <?php else: ?>
                        <a name="" id="" class="btn bx btn-danger  mt-2 suivant" href="<?=WEB_ROUTE.'?controlleurs=admin&view=liste.question&page='.$suivant; ?>" role="button">Suivant</a>
                    <?php endif ?>
                          </div>
            </div>
        </div>
    </div>
</div>
<style>
  .bns{
      background-color: yellowgreen;
    }
       .manga{
          position: absolute;
          left: 49%;
          top: 42%;
          border-style: solid;
          border-color: red;
          background-color: lightgrey;
      }
      .btn{
        color: white;
      }
      .bx{
        background-color: red;
        text-decoration: none;
      }
      .bt{
        background-color: red;
      }
      @media screen and (max-width: 641px) {
  .manga {
    float: left;
    margin-top: 115%;
    margin-left: -39%;
  }
}
</style>