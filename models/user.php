<?php
function find_login_password(string $login, string $password): array{
    $json= file_get_contents(ROUTE_DIR.'data/user.data.json');
    $arrayUser = json_decode($json, true);
    

    foreach ($arrayUser as $user) {
        if($user['login']== $login && $user['password']== $password){
            return $user;
        }
    }
    return [];
}

function add_user(array $user){
   $json = file_get_contents(ROUTE_DIR.'data/user.data.json');
   $arrayUser = json_decode($json, true);
   $user['id'] = uniqid();
   $arrayUser[] = $user;
   $json = json_encode($arrayUser);
   file_put_contents(ROUTE_DIR.'data/user.data.json' , $json);
}
function add_question(array $question){
    $json = file_get_contents(ROUTE_DIR.'data/question.json');
    $arrayQuestion = json_decode($json, true);
    $question['id']= uniqid();
    $arrayQuestion[]= $question;
    ajout_question($arrayQuestion);
}
function find_user_by_id(string $id): array{
    $json= file_get_contents(ROUTE_DIR.'data/user.data.json');
    $arrayUser = json_decode($json, true);
    foreach ($arrayUser as $user){
        if ($user['id'] == $id){
            return $user;
        }
    }
    return [];
}
/* function del($id){

} */
function modify_user(array $user_new){
        $json= file_get_contents(ROUTE_DIR.'data/user.data.json');
        $arrayUser = json_decode($json, true);
        foreach ($arrayUser as $key => $user_old){
            if ($user_old['id'] == $user_new['id']){
                $arrayUser[$key] = $user_new;
            }
        }
        ajout_fichier($arrayUser);
    }

function ajout_fichier(array $array){
    $json= json_encode($array);
    file_put_contents(ROUTE_DIR.'data/user.data.json' , $json);

}
function ajout_question(array $array){
    $json= json_encode($array);
    file_put_contents(ROUTE_DIR.'data/question.json' , $json);

}
function find_all_admins(){
    $arrayUser=find_all_users();
    foreach ($arrayUser as $user) {
      if ($user['role']=='ROLE_ADMIN') {
          $admin_user[]=$user;
      }
     
  }
  return  $admin_user;
   }
   function find_all_questions(){
    $json =file_get_contents(FILE_QUESTIONS);
    return json_decode($json,true);
  
  }
   function find_all_joueurs(){
    $arrayUser=find_all_users();
    foreach ($arrayUser as $user) {
      if ($user['role']=='ROLE_JOUEUR') {
          $admin_user[]=$user;
      }
     
      }
      return  $admin_user;
   }
function suppression_user(string $id): bool{
   $json= file_get_contents(ROUTE_DIR.'data/user.data.json');
   $arrayUser = json_decode($json, true);
   /* $users[]= $arrayUser; */
   $tab = [];
   $ok= false;
   foreach ($arrayUser as $user) {
       if($user['id'] != $id){
        $users[] = $user;
           $ok = true;
           
       }else {
           $tab[] = $user;
       }
   }
   return $ok;
}
function valid_input($valeur, string $key, array &$arrayError)
{
    if (est_vide($valeur)) {
        $arrayError[$key] = "Le champ question est obligatoire  ";
    } elseif (est_entier($valeur)) {
        $arrayError[$key] = "Veuillez poser une question";
    }
}

function valid_point($valeur, string $key, array &$arrayError)
{
    if (est_vide($valeur)) {
        $arrayError[$key] = "Le champ doit etre obligatoire ";
    } elseif ($valeur <= 0) {
        $arrayError[$key] = "Veillez saisir un nombre positif";
    }
}


function valid_nbr_reponse($valeur, string $key, array &$arrayError)
{
    if (est_vide($valeur)) {
        $arrayError[$key] = "Ce champ est obligatoire ";
    } elseif ($valeur <= 0) {
        $arrayError[$key] = "Veillez saisir un nombre positif";
    }
}

function valid_type_reponse($valeur, string $key, array &$arrayError)
{
    if (est_vide($valeur)) {
        $arrayError[$key] = "Ce champ est obligatoire ";
    }
}
function find_all_users(){
    $json =file_get_contents(FILE_USERS);
    return json_decode($json,true);
  
  }
 function nombrePageTotal($array, $nombreElement): int{
    $nombrePage = 0;
    $longArray = count($array);
    if ($longArray % $nombreElement == 0) {
        $nombrePage = $longArray / $nombreElement;
    }else {
        $nombrePage = $longArray / $nombreElement;
    }
    return $nombrePage;
} 

 function get_element_to_play($array, $nombreElement, $page): array{
    $arrayElement = [];
    $indiceDepart = ($page*$nombreElement) - $nombreElement;
    $limitElement = $page*$nombreElement;
    for ($i=$indiceDepart; $i < $limitElement; $i++) { 
        if ($i >= count($array) ) {
            return $arrayElement;
        }else {
            $arrayElement[] = $array[$i];
        }
    }
    return $arrayElement;
} 
function delete_question(string $id): bool{
    $json= file_get_contents(ROUTE_DIR.'data/question.json');
   $arrayQuestion = json_decode($json, true);
  $newTab = [];
  
   $ok= false;
   foreach ($arrayQuestion as $user) {
       if($user['id'] == $id){
           $ok = true;
       } else {
           $newTab[] = $user;
       }
   }

   if($ok) {
       ajout_question($newTab);
   }
   return $ok;
}

function find_question_id(string $id): array{
    $json = file_get_contents(ROUTE_DIR.'data/question.json');
    $arrayQuestion = json_decode($json, true);
    foreach ($arrayQuestion as $question){
        if($question['id'] == $id){
            return $question;
        }
    }
    return [];
}
function modif_question(array $new_id){
    $json = file_get_contents(ROUTE_DIR.'data/question.json');
    $arrayQuestion = json_decode($json, true);
    foreach ($arrayQuestion as $question => $$new_id){
        if ($old_id['id'] == $new_id['id']){
            $arrayQuestion[$question] = $new_id;
        }
    }
    ajout_question($arrayQuestion);
}
?>