
<?php
if (!est_admin()) header("location:" . WEB_ROUTE . '?controlleurs=security&view=connexion');
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['view'])) {
        if ($_GET['view'] == 'liste.question') {
            require_once(ROUTE_DIR . 'views/admin/liste.question.html.php');
        } elseif ($_GET['view'] == 'creer.question') {
            require(ROUTE_DIR . 'views/admin/creer.question.html.php');
        } elseif ($_GET['view'] == 'liste.joueur') {
            require(ROUTE_DIR . 'views/admin/liste.joueur.html.php');
        } elseif ($_GET['view'] == 'creer.admin') {
            require(ROUTE_DIR . 'views/admin/creer.admin.html.php');
        } elseif ($_GET['view'] == 'tableau.bord') {
            require(ROUTE_DIR . 'views/admin/tableau.bord.html.php');
        } elseif ($_GET['view'] == 'liste.admin') {
            require(ROUTE_DIR . 'views/admin/liste.admin.html.php');
        } elseif ($_GET['view'] == 'edit') {
            $id=$_GET['id'];
            $utilisateur=find_user_by_id($id);
            require(ROUTE_DIR . 'views/admin/creer.admin.html.php');
        }
    } /* else {
        require_once(ROUTE_DIR . 'views/admin/liste.admin.html.php');
    } */
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
if ($_POST['action'] == 'creer.question') {
        if (isset($_POST['btn_submit'])) {
            unset($_POST['controlleurs']);
            unset($_POST['action']);
            question($_POST);
            header("location:" . WEB_ROUTE . '?controlleurs=admin&view=creer.question');
        }elseif (isset($_POST['btn_plus'])) {
           $nbr_reps = $_POST['nbr_reps'];
           $_SESSION['nbr_reps'] = $nbr_reps;
           $typrep = $_POST['typrep'];
           $_SESSION['typrep'] = $typrep;
           header("location:" . WEB_ROUTE . '?controlleurs=admin&view=creer.question');
        }
    }elseif (isset($_POST['action'])) {
        if ($_POST['action']=='inscription') {
            unset($_POST['controlleurs']);
            unset($_POST['connexion']);
            unset($_POST['confirmpassword']);
            unset($_POST['inscription']);
            unset($_POST['action']);
            inscription_admin($_POST);
            header("location:" . WEB_ROUTE . '?controlleurs=admin&view=creer.admin');
          
        }
       
         if ($_POST['action']=='modification') {
            unset($_POST['controlleurs']);
            unset($_POST['connexion']);
            inscription_admin($_POST);
            header("location:". WEB_ROUTE .'?controlleurs=admin&view=liste.admin');
        }
    }
   
}

function inscription_admin(array $data) : void{
    $arrayError=array();
    extract($data);
    valide_email($login,'login' ,$arrayError);
    validation_password($mdp ,$arrayError, 'mdp');
 
    validation_username($prenom , 'prenom',$arrayError);
    validation_username($name , 'name',$arrayError);
    if ($mdp != $password) {
        $arrayError['password'] = 'les deux password ne sont pas identique';
    }
    if (form_valid($arrayError)){
        if (est_admin()){
                $data[ 'role']= 'ROLE_ADMIN';
        }else{
                $data['role']='ROLE_JOUEUR';
        } 
        if (est_admin()) {
            if (isset($data['id'])) {
                modify_user($data);
                header("location:" .WEB_ROUTE.'?controlleurs=admin&view=liste.admin');
            }else {
                add_user($data);
            header("location:" .WEB_ROUTE.'?controlleurs=admin&view=liste.admin');
   
            }
        }

    } else{
        $_SESSION['arrayError'] = $arrayError;
        header("location:" .WEB_ROUTE.'?controlleurs=admin&view=creer.admin');
    }
   
    
}
function question(array $data): void {
    $arrayError = [];
    extract($data);
    /* valid_input($question, 'question', $arrayError); */
    valid_point($nbr_reps, 'nbre_reps', $arrayError);

    if (form_valid($arrayError)) {
        add_question($data);
        header("location:".WEB_ROUTE.'?controlleurs=admin&view=liste.question');
    }else{
        $_SESSION['arrayError']= $arrayError;
        header("location:".WEB_ROUTE.'?controlleurs=admin&view=creer.question');
    }
}
function pagination($data,$position){
    $nbrPage =0;
    $page=1;
    $suivant=2;
    $nbrElement = NOMBRE_PAR_PAGE;
   $precednt=0;
  
  
  
  if (!isset($position)) {
    $page=1;
     $_SESSION['user_admin'] =  $data;
     $nbrPage = nombre_page_total( $_SESSION['user_admin'], NOMBRE_PAR_PAGE);
     $list_user= paginer( $_SESSION['user_admin'],$page, NOMBRE_PAR_PAGE);
   
  }
  
    if (isset($position)) {
        $page=$position;
     $suivant=$page+1;
     $precednt=$page-1;
         if (isset($_SESSION['user_admin'])) {
             $_SESSION['user_admin'] =  $data;
             $nbrPage = nombre_page_total( $_SESSION['user_admin'], NOMBRE_PAR_PAGE);
             $list_user= paginer( $_SESSION['user_admin'],$page, NOMBRE_PAR_PAGE);
            }
  
     }
     return[
  
       'precednt'=> $precednt,
       'suivant'=>$suivant,
       'nbrPage'=>$nbrPage,
       'data'=>$list_user,
    
    ];
  
  }
function delet(array $data): void {
    $id= $_SESSION['id'];
    $ok = suppression_user($id);
    if ($ok){
        unset($data[$id]);
        header("location:".WEB_ROUTE.'?controlleurs=admin&view=liste.admin');
    }
}
?>
