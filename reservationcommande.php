<?php include('inc/haut.inc.php'); ?>


<Div id="contenu">
<main>

<!--SECTION PAIEMENT COMMANDE-->
<Section >

<div class="titre_reservation">
    <h1>RESERVATION DE LA COMMANDE</h1> <br>

    <P>1.Veuillez valider votre réservation de commande avec le formulaire ci-dessous. <br>
        Si vous êtes membre connectez-vous directement.
         <br>
        <br>
        2. Un fois que vous validez votre reservation
        Medimancie se réserve le droit d'étudier votre commande
        et de la valider après un rendez-vous téléphonique de confirmation. <br>
        Un mail vous sera envoyez avec la reservation ci-présent et les coordonnées bancaires
        IBAN pour effectuer votre virement. <br> <br>
        3. La validation de la commande prendra effet à reception du paiement total
        du bon de commande. 
        
    </P>
</div>

 <div class="formulaire_dejamembre2">   
    <form method="post" action="" enctype="multipart/form-data">
        <h1 class="dejamembre">Déjà membre ?</h1> 
        <label for="pseudo">Pseudo *</label> <br>
        <input type="text" id="pseudo" name="pseudo" required><br>
        <label for="mdp">Mot de passe</label> <br>
        <input type="password" id="mdp" name="mdp"><br> <br>
        <input type="submit" value="Connection">
    </form>
</div>

<div class="reservation_commande">
    <div class="formulaire_non_membres">
        <div class="titre_formulaire_non_membres">
        <h3 class="titre_bleu">Formulaire à remplir pour les non membres</h3>
        </div>
        <form  method="post" action=""></form>  
        <label for="nom">Nom*</label> <br>
        <input type="text"id="nom" name="nom" required> <br> <br>
        <label for="prenom"> Prenom*</label> <br>
        <input type="text" id="prenom" name="prenom" required> <br> <br>
        <label for="expediteur"> Adresse mail*</label> <br>  
        <input type="email" name="expediteur" id="expediteur" required> <br> <br>      
        <label for="adresse">Adresse postale*</label> <br>
        <textarea name="adresse" id="adresse" cols="25" rows="5" required></textarea> <br> <br>
        <label for="cp">Code postale*</label> <br>
        <input type="text" id="cp" name="cp" maxlength="5" pattern="[0-9]{5}" title="5 chiffres requis entre 0 et 9" required> <br> <br>
        <label for="ville">Ville*</label> <br>
        <input type="text" id="ville" name="ville" required> <br> <br>
        <label for="expediteur"></label> <br>
        <textarea name="message" id="Message" title="votre message" placeholder="Votre message" cols="30" rows="10"></textarea> <br>
    </div>

    <div class="votre_commande">
        <div class="validation_reso_commande">
         <h3>VOTRE RESERVATION COMMANDE</h3>
    <table class="details_commande">
        <tr>
            <th>PRODUIT</th> <th>Sous total</th> 
        </tr>
        <tr>
            <td><label for="commande"></label>
                <input type="radio" name="commande" value="abonnement1an">
            Abonnement  1 an </td> <td> 450 € ttc</td>
        </tr>
        <tr>
            <td><label for="commande"></label>
                <input type="radio" name="commande" value="seanceindividuel">
                Séance individuel </td> <td> 150 € ttc</td>
        </tr>
        <tr>
            <th>TOTAL</th> <th> (prix )€ dont prix TVA</th>
        </tr>  
    </table>
   
    <table class="validation_details_commande">
        <tr>
            <td><input type="checkbox" name="choix" checked required> <br>
            <label for="choix">J’accepte les conditions d’utilisation  et les conditions
                générales de vente</label> <br>
            </td>
            </tr>
            <tr>
                <td><input type="checkbox" name="choix"> <br>
                <label for="choix">Je voudrais recevoir des e-mails
                     exclusifs avec des réductions et des informations
                      sur le produit (facultatif)</label> <br>
                </td>
                </tr>
            <tr>
       
               <td>
                <input type="submit" value="Validation"> 
               </td> 
            </tr>       
    </table>
   
        </div>
    </div>

</div>

<div class="iban_medimancie">
    <h2>Après confirmation de votre réservation:</h2>
    <h3>Coordonnées IBAN bancaire de Medimancie</h3>
    <p>XXXXXXXXXXXXXXXXXXXXXXXXX <br> XXXXXXXXXXXXXXXXXXXXXXXXX </p>
</div>




</Section>

</main>

<?php include('inc/bas.inc.php'); ?>