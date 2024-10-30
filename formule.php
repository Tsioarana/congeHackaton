<?php
include("include/header.php");
include("checkinfo/checkformule.php");
?>
<nav class="navbar">
  <ul class="navbar__ul">
  <li class="navbar__list" style="padding-left: 30px;"><a href="formule.php" id="demande">Aceuil</a></li>
    <li class="navbar__list" style="padding-left: 30px;"><a href="dmd_cng.php" id="demande">demandes de congé</a></li>
    <li class="navbar__list" style="padding-left: 40px;"><a href="voirconge.php" id="demande">Voir un demande</a></li>
    <li class="navbar__list" style="padding-left: 30px;"><a href="organigramme_conge.html" id="demande">Oranigramme</a></li>
    <li class="navbar__list" style="padding-left: 30px;"><a href="formule.php" id="demande">Calendrier</a></li>
  </ul>
  <form action="index.php" method="POST">
    <button style="width: 200px; height: 40px; margin-top: -70px;" id="demande" class="navbar__btn" type="submit" name="submit">Déconnecté</button>
  </form>
</nav>
</header>
<!-- --main-- -->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> 
<section>
  <div class="container">
    <div class="banana position-relative text-white">
      <h4 class="text-black display-5" style="padding-top: -10px; font-size: 70px; padding-left: 20px;"><b>LA PRISE DE CONGE PAYES DU SALARIE <br>NECESSITE L'ACCORD PREALABLE DE <br>L'EMPLOYEUR</b></h4>
      <p class="text-black lead" style="padding-top: 0px; font-size: 35px ; padding-left: 20px;">A défaut, le salarié qui s'en affranchit risque un licenciement pour faute grave</p>
      
      <div class="video-background">
        <video autoplay loop muted style="position: absolute; z-index: -1; top: 0; left: 0; width: 100%; height: 125%; object-fit: cover;">
          <source src="video/pexels-shvets-production-9057574-1280x720-25fps.mp4" type="video/mp4">
        </video>
      </div>
    </div>
  </div>
  <div class="container2">
    <div class="row">
      <h2 style="color: brown; font-size: 30px; margin-top: 20px; margin-left: 10px;">Entreprise, libérez-vous du casse-tete de la validation des <br> congés!</h2>
        <div class="col-lg-4 col-md-12 col-12" style="margin-top: 20px; margin-left: 0px;">
            <div class="about-img">
                <img src="image/entreprises-validation-liberez.jpg" alt="" width="400Px">
            </div>
        </div>
        <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
            <div class="about-text">
              <p style="font-size: 20px;">Aujourd'hui, les entreprises se tournet de plus en plus vers la dématérialisation des doucument.
                Des solutions adéquates existent pour gérer les suivis fournisseurs ou clients, etc, afin de faciliter
              les démarches bien souvent fastidieuses et lourdes. Dans ce cadre , opter pour l'automatisation des
            validation de congés permet de gagner du temps, augmentant ainsi la productivité. Le point. </p>
            </div>
        </div>
        
        <div class="row">
          <h2 class="text-brown fs-4 mt-4 ms-2" style="font-size:30px; color: red;">Comment fonctionne un outil de validation de congés</h2>
          <p class="fs-5" style="font-size: 20px;">Lorem ipsum dolor <a href="" class="text-brown fs-5 text-decoration-none">sit amet</a> consectetur adipisicing elit. Perferendis nesciunt, deleniti provident nam aperiam labore ipsa amet doloremque, veritatis, officiis libero atque eos pariatur? Odit tempore beatae explicabo ullam quibusdam?</p>
          <p class="fs-5" style="font-size: 20px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi eum aspernatur sint optio dolor sed doloremque aliquam maiores nobis mollitia totam quaerat ducimus, dicta alias autem voluptatibus soluta tempore doloribus! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum at dolore eius consequuntur, minus temporibus sint, animi delectus minima quia, architecto deserunt quasi distinctio officia libero neque soluta consequatur doloribus.</p>
          <img src="image/casse-tete-de-la-validation-des-conges.jpg" alt="" class="img-fluid" width="800">
        </div>
        
        <div class="container">
          <div class="row">
            <a href="" class="fs-1 ms-2" style="font-size:30px;">Prise de congés. Mode d'emploi</a>
            <p class="fs-5 ms-2" style="font-size: 20px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est laudantium, officia quasi tenetur error accusantium itaque aliquid repellendus in unde? Quas, voluptatibus? Ex molestias magni nesciunt hic, possimus dolores asperiores.</p>
            <div class="col-lg-4 col-md-12 col-12 mt-4">
              <div class="about-img">
                <img src="image/téléchargement.jpeg" alt="" class="img-fluid" width="470">
              </div>
            </div>
            <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
              <div class="about-text">
                <p class="fs-5" style="font-size: 20px;">Aujourd'hui, les entreprises se tournent de plus en plus vers la dématérialisation des documents. Des solutions adéquates existent pour gérer les suivis fournisseurs ou clients, etc, afin de faciliter les démarches bien souvent fastidieuses et lourdes. Dans ce cadre, opter pour l'automatisation des validations de congés permet de gagner du temps, augmentant ainsi la productivité. Le point.</p>
              </div>
            </div>
          </div>
        
        </div>
        
</div>
  
  
</section>


<footer style="background: #333;">
  <div class="container">
    <div class="row" style="display: flex;">
      <div class="col-md-3" style="margin-left: -50px">
        <h4 style="font-size:30px; color: #615e91">MADAGASCAR</h4>
        <p style="font-size:16px; color: white;">41, boulevard Henri IV,<br>75004 Paris<br>Tel: 01 45 00 97 22</p>
        <div class="social-icons">
          <i style="font-size:40px; color: #615e91" class='bx bxl-facebook-square'></i>
          <i style="font-size:40px; color: #615e91" class='bx bxl-whatsapp-square'></i>
          <i style="font-size:40px; color: #615e91" class='bx bxl-instagram'></i>
          <i style="font-size:40px; color: #615e91" class='bx bxl-linkedin-square'></i>
          
        </div>
      
      </div>
      <div class="col-md-3" style="margin-left: 100px">
        <h4 style="font-size:30px; color: #615e91">Mes derniers articles</h4>
        <p style="font-size:16px; color: white;">Actions, stock-options, BSPCE…:<br>obtenir une indemnisation après la<br>rupture du contrat de travail<br>La divulgation d’informations<br>confidentielles constitue-t-elle un<br>motif de licenciement?<br>Pas d’annulation d’une rupture<br>conventionnelle faisant suite à un<br>licenciement verbal<br>Dans quelle mesure le cumul<br>d’emplois est-il possible?</p>
      </div>
      <div class="col-md-3" style="margin-left: 100px">
        <h4 style="font-size:30px; color: #615e91">Mes compétences</h4>
        <p style="font-size:16px; color: white;">Avocat droit du travail</p>
        <p style="font-size:16px; color: white;">Licenciement pour motif personnel</p>
        <p style="font-size:16px; color: white;">Licenciement économique</p>
        <p style="font-size:16px; color: white;">Avocat licenciement pour faute grave</p>
        <p style="font-size:16px; color: white;">Prise d’acte</p>
        <p style="font-size:16px; color: white;">Avocat rupture conventionnelle</p>
      </div>
      <div class="col-md-3" style="margin-left: 100px">
        <h4 style="font-size:30px; color: #615e91">Liens utiles</h4>
        <p style="font-size:16px; color: white;">Mentions légales</p>
        <p style="font-size:16px; color: white;">Plan du site</p>
        <p style="font-size:16px; color: white;">Contact</p>
        <p style="font-size:16px; color: white;">Questions</p>
      </div>
    </div>
  </div>
  <hr>
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <p style="font-size:16px; color: white;"> © 2023</p>
        <p style="font-size:16px; color: white;"><b>by MINAFIJA</b></p>
      </div>
    </div>
  </div>
</footer>



<script src="js/script.js"></script>
</body>

</html>