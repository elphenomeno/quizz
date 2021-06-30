
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
        }
    } /* else {
        require_once(ROUTE_DIR . 'views/admin/liste.admin.html.php');
    } */
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['action'])) {
        $_POST['action'] == 'inscription';
    }
    unset($_POST['controlleurs']);
    unset($_POST['connexion']);
    unset($_POST['confirmpassword']);
    unset($_POST['inscription']);
    unset($_POST['action']);
    inscription_admin($_POST, $_FILES);
    header("location:" . WEB_ROUTE . '?controlleurs=admin&view=creer.admin');
} /* else {
    $_SESSION['arrayError'] = $arrayError;
    header("location:" . WEB_ROUTE . '?controlleurs=admin&view=creer.admin');

} */
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
            }/* else{
                $data['role']='ROLE_JOUEUR';
            } */
            add_user($data);
        
            header("location:" .WEB_ROUTE.'?controlleurs=admin&view=liste.admin');
    } else{
        $_SESSION['arrayError'] = $arrayError;
        header("location:" .WEB_ROUTE.'?controlleurs=admin&view=creer.admin');
    }
   
    
}
?>
