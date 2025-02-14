<?php

// si il existe la variable $_GET['page']
if(isset($_GET['page'])){

    switch($_GET['page']){
        case "formations" :
            include "../pages/formationsView.php";
            break;
        case "programme" :
            include "../pages/programmeView.php";
            break;
        case "newsletter" :
            include "../pages/newsletterView.php";
            break;
        case "contact" :
            include "../pages/contactView.php";
            break;
        default:
            include "../pages/error404View.php";
    }

// sinon accueil    
}else{
    include "../pages/indexView.php";
}

