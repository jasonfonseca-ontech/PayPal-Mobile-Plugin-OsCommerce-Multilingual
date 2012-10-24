<?php
$_['Products'] = "Produits";
$_['Featured Products'] = "Top produits";
$_['Oops'] = "Oops";
$_['Total'] = "Total";
$_['Sorry the page you visited does not exist'] = "D�sol�, la page que vous avez visit� n'existe pas";
$_['Cart'] = $_['cart'] = "Panier";
$_['Name'] = "Nom";
$_['Price']= "Prix";
$_['Delete'] = "Delete";
$_['TITLE'] = "TITRE";
$_['Qty'] = $_['qty'] =  "Quantit�";
$_['Thank You! We Appreciate your Business!'] = "Nous vous remercions de votre confiance. D�tails de votre commande";
$_['OsCommerce'] = "OsCommerce";
$_['cookies'] = "D�sol�, les cookies ne sont pas actuellement activ� sur votre navigateur, les cookies sont n�cessaires pour acheter sur ce site, vous serez en mesure de trouver une pr�f�rence dans le navigateur de votre t�l�phone pour les r�activer � nouveau si vous le souhaitez";
$_['You can click here once you have enabled them again to start shopping.'] = 'You can <a href="./">click here</a>once you have enabled them again to start shopping.';
$_['Done'] = "fini";
$_['Home'] = "Accueil";
$_['Your search has produced no results'] = "Aucun r�sultat trouv�";
$_['Categories'] = "Cat�gories";
$_['Search'] = "Recherche";
$_['OR'] = "OU";
 $_['Cookies are not enabled'] = "les cookies ne sont pas actuellement activ�";
$_['Your customer id:'] = "Votre num�ro client:";
$_['Cookies are not enabled'] = "Cookies are not enabled";
$_['Results'] = "R�sultats";
$_['More info...'] = "Plus d'infos";
$_['You can'] = "Vous pouvez";
$_['click here'] = "Cliquer ici";
$_['once you have enabled them again to start shopping.'] = "une fois que vous les avez r�activer pour continuer vos achats.";
$_['Your cart is empty'] = "Votre panier est vide";
$_['Shopping Cart'] = "Panier";
$_['Edit...'] = "Modifier";
$_['Product'] = "Product";
$_['OR'] = "OU";
$_['Gallery'] = "galerie";
$_['Continue Shopping'] = "Continuer vos achats";
$_['clear text'] = "texte clair";
$_['Return to Desktop site']  = "Revenir � la version web";
$_['Search Results'] = "R�sultats de la recherche";
$_['Add to Cart'] = "Ajouter au panier";
$_['Update Cart'] = "Mettre � jour le panier";
$_['Edit Cart'] = "Modifier le panier";
$_['There is no description for this product'] = 'There is no description for this product';
$_['You have x items in your cart the total is y'] = 'Votre panier contient <span class="itemcount">{count}</span> article(s).<br/>Total: <span class="total">{total}</span>';
$_['Your order number is x'] = "Votre num�ro de commande : {order}";
$_['You have'] = "vous avez";
$_['items in your cart'] = "articles dans votre panier";
$_['the total is'] = "le total est";
$_['Product Options'] = "options du produit";
$_['No Products in this category'] = "Pas de produits dans cette cat�gorie";


$_['Address'] = "Adresse";
$_['Billing Address'] = "Adresse de facturation";
$_['Shipping Address'] = "Adresse de livraison";
$_['Addresses'] = "Les adresses";
$_['Pay Now'] = "Payer Maintenant";


foreach($_ as $k => $v){
	$_[$k] =  iconv("ISO-8859-1//TRANSLIT",CHARSET, $v);
}
