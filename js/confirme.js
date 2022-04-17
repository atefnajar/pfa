function confirmeClient( identifiant ){
	var confirmation = confirm( "Voulez vous vraiment ce Client d id="+identifiant+" ?" ) ;
   if( confirmation==1){
   document.location.href = "../controller/ClientController.php?action=delete&idc="+identifiant;
                        }
   }

   function confirmeProduit( identifiant ){
	var confirmation = confirm( "Voulez vous vraiment  supprimez ce produit de reference="+identifiant+" ?" ) ;
   if( confirmation==1){
   document.location.href = "../controller/ProduitController.php?action=delete&ref="+identifiant;

}
   }