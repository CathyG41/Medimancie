<?php include('inc/haut.inc.php'); ?>

    <main>
        <section class="tous_contacts">
            <div class="textebonjour_profil4">
            <div class="texte_bonjourmerci">
                <p>"Bonjour et merci pour votre visite, je m'appelle Cathy, je <br>
                      travaille comme medimancienne et je suis la fondatrice de <br>
                      la medimancie. J'espère que vous appréciez le site et que <br>
                       vous trouverez ce que vous chercher ici. <br>
                       <br><br>

                    N'hésitez pas à me contacter pour tout commentaire ou <br>
                     question. Votre curiosité pour la medimancie est à la fois <br>
                      inspirant et enthousiasmant…Merci ! <br>
                    J'espère que vous avez apprécié ce site web et que vous le <br>
                     visiterez à nouveau ! '' Cathy
                    </p>
            </div>
            <Div class="profil_4">
                <a href="index.php"><img src="img/Logo photo profil.jpg" alt="Logo photo de profil de Medimancie"></i></a>
                    </Div>
             
            </div>        


            
            <div class="textes_logos_contacts">
            <ul class="couleurfondcoordonnées">
                <li>L’adresse de Medimancie <br> 
                    xx xxxxxxxxx xxxxxxxxxx <br> 
                    xxx xxxxx xxxxxxxxxxxxx </li>
                <li></li> 
                <Li>Vous pouvez me contacter <br>
                    en remplissant le formulaire <br>
                    ou à info@medimancie.com</Li>
                <li></li>   
                <Li>Vous pouvez me joindre <br>
                    sur le n° xx.xx.xx.xx.xx <br>
                    Message sur WhatsApp</Li>  
               </ul>
            </div>     

       
      
        <div class="formulaire_contact">
            <div class="formulaire_message">
                <form method="post" action="">
                    <h1 class="nouscontacter">Nous contacter</h1> 
                    <label for="nom"></label> <br>
                    <input pattern= "[a-zA-Z]{2,10}" title="Veuillez écrire un nom valide" type="text"id="nom" name="nom" placeholder="Votre nom"> <br> 
                    <label for="prenom"></label> <br>
                    <input pattern= "[a-zA-Z]{2,10}" title="Veuillez écrire un prénom valide" type="text" id="prenom" name="prenom" placeholder="Votre prénom"> <br>
                    <label for="expediteur"></label> <br>  
                    <input title="Veuillez entrer une adresse valide" type="email" name="email" id="email" placeholder="Votre mail"> <br>   
                    <label for="sujet"></label> <br>
                    <select type="choix" id="subject" name="subject" placeholder="Sujet">
                    <option value="">Sujet</option>
                    <option value="abonnement">Abonnement</option>
                    <option value="rendez-vous">Rendez-vous</option>
                    <option value="autres">Autres</option>
                    </select>
                    <!-- <input pattern= "[a-zA-Z]{2,10}" title="Veuillez écrire un minimum de 5 caractères" type="text" id="subject" name="subject" placeholder="Sujet"> <br> -->
                    <label for="expediteur"></label> <br>
                    <textarea maxlength="200" minlength="20" name="message" id="Message" title="Veuillez écrire au minimum 20 caractères" placeholder="Votre message" cols="30" rows="10"></textarea> <br>
                    <input type="submit" value="Envoyer"> <br>
                </form>
            </div>
        

            <div class="formulaire_dejamembre">   
                <form method="post" action="" enctype="multipart/form-data">
                    <h1 class="dejamembre">Déjà membre ?</h1>
                    <label for="pseudo"></label> <br>
                    <input type="text" id="pseudo" name="pseudo" placeholder="Votre pseudo" required><br>
                    <label for="mdp"></label> <br>
                    <input type="password" id="mdp" name="mdp" placeholder="Votre mot de passe"><br> <br>
                    <input type="submit" value="Connection">
                </form>
            </div>   
        </div>
           <div class="pourquoi_membre">
            <h2 class="titre_pourquoi_membre">Pourquoi être membre ?</h2>
        <p class="texte_pourquoi_membre">
            Pour vous c’est avant tout un espace de soutien c’est
            pouvoir échanger entre nous lors des séances en ligne et
            tisser des liens sociaux, pour moi,c’est un moyen de vous
            connaître et de pouvoir intéragir avec vous, de vous envoyer
            un planning des séances et des news letters sur la Medimancie.   
        </p>
        </div>
        <Div class="formulaire_membre">
            <form  method="post" action="">
         

        <div class="formulaire_membre_1partie">     
            <h1 class="titre_formulaire_membre">Formulaire pour être membre</h1> <br>
            <input  type="checkbox" name="choix" id="choix" checked required>
            <label for="choix">J’accepte les conditions d’utilisation et les conditions
                générales de vente</label> <br>
        </div>  
           
            <!-- <label for="civilité">gvgygvygv</label> <br> -->
            <!-- <p>
                <input type="radio" name="civilité" value="H" > Homme
                <input type="radio" name="civilité" value="F" checked > Femme 
            
            </p> -->
        <div class="formulaire_membre_2partie">
            <ul>    
            <li> <input type="radio" name="civilité" id="Homme" value="H" >
             <label for="Homme">Homme</label></li> 
            <li> <input type="radio" name="civilité" id="Femme" value="F" checked >
             <label for="Femme">Femme</label></li>
            </ul>
        </div>    
           <div class="formulaire_membre_3partie">
            <label for="nom">Nom*</label> <br>
            <input type="text"id="nom" name="nom" required> <br> <br>
            <label for="prenom"> Prenom*</label> <br>
            <input type="text" id="prenom" name="prenom" required> <br> <br>
            <label for="pseudo">Pseudo *</label> <br>
            <input type="text" id="pseudo" name="pseudo" required><br> <br>
            <label for="avatar">Avatar</label> <br>
            <input type="file" id="avatar" name="avatar" multiple> <br> <br>
            <label for="mdp">Mot de passe*</label> <br>
            <input type="password" id="mdp" name="mdp" required> <br> <br>
            <label for="mdp">Confirmation du mot de passe*</label> <br>
            <input type="password" id="mdp" name="mdp" required> <br> <br>
            <label for="expediteur"> Adresse mail*</label> <br>  
            <input type="email" name="expediteur" id="expediteur" required> <br> <br>      
            <label for="adresse">Adresse postale*</label> <br>
            <textarea name="adresse" id="adresse" cols="25" rows="5" required></textarea> <br> <br>
            <label for="cp">Code postale*</label> <br>
            <input type="text" id="cp" name="cp" maxlength="5" pattern="[0-9]{5}" title="5 chiffres requis entre 0 et 9" required> <br> <br>
            <label for="ville">Ville*</label> <br>
            <input type="text" id="ville" name="ville"  required> <br> <br>
            <label for="expediteur"></label> <br>
            <textarea name="message" id="Message" title="votre message" placeholder="Votre message" cols="30" rows="10"></textarea> <br>
            <input type="submit" value="Envoyer"> 
            </div>
        </form>
        </Div>
    </section>

        <div class="liencommande_pagemembre">
        <a href="reservationcommande.php">Lien direct pour finaliser ma commande</a>
        </div>

        
   
    <div class="fleche">
     <a href="#fleche"><img src="img/Flèche orange.jpg" alt="Flèche de navigatiopn"></a>
    </div>
    </main>


    <?php 
    include('traitement.php');
    include('inc/bas.inc.php'); 
    
    ?>

