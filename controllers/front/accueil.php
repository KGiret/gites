<?php
      
	  $titre = 'Accueil'; // titre de la page
	  $title = 'Accueil';//meta title
	 
	  if(!empty($_GET['page']))
	  {
		if($_GET['page'] != 'accueil')
		{
			$page = 'accueil';
		}
		else
		{
			$page = 'accueil';
		}
	  }
	 
	  else
	  {
		$page = 'accueil';
	  }
	  
	  //on envoie les variables au template
	
	$smarty->assign('page', $page);
	$smarty->assign('titre', $titre);
	$smarty->assign('title', $title);

?>