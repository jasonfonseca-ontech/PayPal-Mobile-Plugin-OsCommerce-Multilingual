<h4><a href="#english"><img src="https://raw.github.com/ontech/PayPal-Mobile-Plugin-Zen-Cart-Multilingual/master/mobile/images/flags/gb.png" alt="English" /> English</a> | <a href="#french"><img src="https://raw.github.com/ontech/PayPal-Mobile-Plugin-Zen-Cart-Multilingual/master/mobile/images/flags/fr.png" alt="Français" /> Français</a></h4>

<a name="french">Français</a>
------

Guide d'installation du plugin PayPal Mobile
============================================

Produit par ezimerchant
-----------------------

1. Cliquez sur le bouton ‘ZIP’ en haut de la page pour télécharger le plugin. 

2. Si vous n’avez pas encore configuré le module PayPal Express Checkout sur Zen Cart, suivez les instructions ci-dessous. Si le module est déjà configuré, passez directement à l’étape 3.
 * a. Connectez-vous à votre compte PayPal
 * b. Sous l’onglet “Mon compte”, cliquez sur “Préférences”
 * c. Allez sur “Mes Ventes”. Dans la partie “Vendre en ligne”, vous verrez la ligne “Accès à l’API“. Cliquez sur “Mettre à jour “.<br />
 * d. Un nouvel écran s’affichera. Cliquez sur “Demander des informations d’authentification API” en bas de l’option 2.  
 * e. Vous aurez besoin de toutes ces données pour renseigner les informations d’identification PayPal sur Zen Cart
 * f. Connectez-vous à Zen Cart
 * g. Allez sur Modules -> Paiement et cliquez sur PayPal Express checkout.
 * h. Copiez/collez les données obtenues lors de l’étape 2e. 
 * i. Cliquez sur “Enregistrer”

3. Extrayez le contenu du plugin dans votre dossier ‘public’. mobile.php doit être à la racine de votre dossier ‘public’, qui contient le sous-répertoire ‘mobile’.  

4. Si vous avez un fichier .htaccess dans le dossier ‘hosting’, faites-en une sauvegarde. 

5. Fusionnez le fichier mobile.htaccess avec le fichier .htaccess (si vous en avez). Il contient la détection Mobile User Agent. Remarque : Si vous n’aviez pas de fichier .htaccess, renommez le fichier mobile.htaccess en .htaccess.
Vérifiez que le site Web s’affiche correctement sur votre ordinateur. 

6. Faites de même sur le téléphone et testez le processus de commande

Annuler l'installation
----------------------

Annulez les modifications apportées au fichier .htaccess ou remettez le fichier .htaccess pré-sauvegardé pour annuler les modifications. Ceci devrait suffire à revenir à une configuration précédente 

Etapes optionnelles
-------------------

Supprimez le fichier mobile.php à la racine de du dossier ‘public hosting’
Supprimez le sous-répertoire‘mobile’ qui a été créé précédemment.

<a name="english">English</a>
-------
PayPal Mobile Plugin Installation Instructions
==============================================
<sup> Powered by [ezimerchant](http://ezimerchant.com/)</sup><br>
 <sup>OsCommerce 2.2+ instructions</sup>


1. Install the <a href="https://cms.paypal.com/us/cgi-bin/?cmd=_render-content&content_ID=developer/library_plugins_oscommerce">Paypal OsCommercce Express Checkout</a> plugin if you do not already have it.

1. Click the 'ZIP' button at the top of this page to download the plugin.

2. If you haven't already setup PayPal Express Checkout inside your OsCommerce installation, please follow these instructions, if you have already done so, please skip to step 3:
    + a. Login into your PayPal account
    + b. Under the 'My Account' tab, click 'Profile'
    + c. Under the 'Account Information' section, click the 'Request API credentials' link or 'API Access' link.
    + d. Under Option 2 on the next screen, click 'View API Signature' or 'Request API credentials'. You may need to click 'Agree and Submit'
    + e. You will use these details on the page to fill out the API credentials in OsCommerce. You should see API Username, API Password and Signature.
    + f. Login to OsCommerce
    + g. Go to Modules -> Payment and click on PayPal Express checkout.
    + h. Use the details from step 2e. and copy and paste the details accross. 
    + i. Hit Save.

3. Unpack the contents of the plugin into the catalog folder of your webserver directory. mobile.php will be in the in catalog directory, while the 'mobile' folder will be a subdirectory within that catalog folder. When you extract the zip, it will create a directory for the files called something like "PayPal-Mobile-Plugin-OsCommerce". You must move the files out of this directory and into the catalog directory. 

4. Make a backup your current .htaccess file inside your public hosting directory - if you have one.

5. Merge mobile.htaccess file with your existing .htaccess file (if you already have one). This contains the mobile user agent detection.
Note: You will need to add "RewriteBase /catalog_folder/" (where catalog_folder is the full path from the webroot to your store) if your your oscommerce install is not in the webserver root directory.

6. Check the site is still functional on your desktop computer.

7. Check the site on your phone and test the transaction flow.


Revert Installation Instructions
--------------------------------

1. Remove the changes to the .htacess file that you have made. Or use the backed up .htaccess to overwrite the changes. This should restore previous functionality in itself.

Supported & Tested Versions
-------------------
OsCommerce: 2.3.1, 2.2 (rc1,rc2,rc2a)

### Optional Steps


2. Remove the mobile.php file in the root of your public hosting directory.

3. Remove the mobile subdirectory uploaded previously.