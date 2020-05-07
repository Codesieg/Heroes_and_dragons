<!DOCTYPE html>
<html lang="french">

<head>
    <title>TheQuest - Gaming Magazine Template</title>
    <meta charset="UTF-8">
    <meta name="description" content="TheQuest Gaming Magazine Template">
    <meta name="keywords" content="gaming, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon" />

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />

    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/main.css" />

    <!-- include html-->
    <script src="js/w3.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>


    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

    <!-- PHP -->
    <?php 
    require_once("content/characterManager.php");
    require_once("content/characterSheet.php");
    ?>

</head>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
          
        <div class="loader">
        </div>
    </div> -->

    <!-- Header section -->
    <div w3-include-html="menu.html" class="menu-character-sheet"></div>
    <!-- Header section end -->

    <!-- Page top section -->
    <section class="page-top-section set-bg" data-setbg="img/header-bg/1.jpg">
        <div class="container">
            <h2><?php 
            echo $perso->
            ?>
            </h2>
        </div>
    </section>
    <!-- sheet character section -->
    <!-- Skills character section -->
    <section class="character-sheet">
        <div class="character-sheet-main">
            <div class="character-story">
                <div class="character-img">
                    <img src="img/game-characters/siegheart.jpg" alt="image-personnage">
                </div>
                <div class="story text-white">
                    <h2> Description :</h2>
                    <div contenteditable="true" class="text-white">
                        <?php
                        characterManager::characterSheetFromDBDebug();?>
                    </div>
                </div>
            </div>
            <div class="character-info">
                <table>
                    <thead>
                        <tr>
                            <th>Classe</td>
                                <th>Archétype</td>
                                    <th>Niveau</td>
                                        <th>Race</td>
                                            <th>Alignement</td>
                                                <th colspan="3">Point d'expérience</td>
                        </tr>
                    </thead>
                    <tbody id="edit-character-info" contenteditable="false">
                        <tr>
                            <td contenteditable="inherit">Chevalier Noir</td>
                            <td contenteditable="inherit"></td>
                            <td contenteditable="inherit">2</td>
                            <td contenteditable="inherit">Humain</td>
                            <td contenteditable="inherit"></td>
                            <td contenteditable="inherit"></td>
                            <td><i class="button edit" id="btn-character-info-edit">editer</i>
                                <i class="button save" id="btn-character-info-save">Sauvegarder</i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="character-skills">
                <div class="attributs-points">
                    <!-- Single skill -->
                    <div class="box-skill">
                        <div class="single-skill">
                            <!-- Skill strong -->
                            <div class="attribute-box">
                                <div class=" text-white">
                                    <h5>Force</h5>
                                    <h6>Modificateur</h6>
                                </div>
                                <div class="skill-points">
                                    <div class="points" contenteditable="true">+2</div>
                                    <div class="skill-checkbox">
                                        <label for="force-M">M</label>
                                        <input type="checkbox" id="force-M" name="scales" checked>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="skill-circle">
                            <div class="circle circle-align">
                                <h6>Valeur</h6>
                                <div contenteditable="true">+4</div>
                            </div>
                            <div class="circle circle-align">
                                <h6>Sauv</h6>
                                <div contenteditable="true">+4</div>
                            </div>
                        </div>
                    </div>
                    <!-- Skill strong end -->
                    <!-- Single skill end -->

                    <!-- Skill dexterity -->
                    <div class="box-skill">
                        <div class="single-skill">
                            <div class="attribute-box">
                                <div class=" text-white">
                                    <h5>Dextérité</h5>
                                    <h6>Modificateur</h6>
                                </div>
                                <div class="skill-points">
                                    <div class="points" contenteditable="true">+2</div>
                                    <div class="skill-checkbox">
                                        <label for="force-M">M</label>
                                        <input type="checkbox" id="force-M" name="scales">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="skill-circle">
                            <div class="circle circle-align">
                                <h6>Valeur</h6>
                                <div contenteditable="true">14</div>
                            </div>
                            <div class="circle circle-align">
                                <h6>Sauv</h6>
                                <div contenteditable="true">+2</div>
                            </div>
                        </div>
                    </div>

                    <div class="box-skill">
                        <div class="single-skill">

                            <!-- Skill constitution -->
                            <div class="attribute-box">
                                <div class=" text-white">
                                    <h5>Constitution</h5>
                                    <h6>Modificateur</h6>
                                </div>
                                <div class="skill-points">
                                    <div class="points" contenteditable="true">+2</div>
                                    <div class="skill-checkbox">
                                        <label for="force-M">M</label>
                                        <input type="checkbox" id="force-M" name="scales" checked>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="skill-circle">
                            <div class="circle circle-align">
                                <h6>Valeur</h6>
                                <div contenteditable="true">15</div>
                            </div>
                            <div class="circle circle-align">
                                <h6>Sauv</h6>
                                <div contenteditable="true">+4</div>
                            </div>
                        </div>
                    </div>

                    <!-- Skill intelligence -->
                    <div class="box-skill">
                        <div class="single-skill">
                            <div class="attribute-box">
                                <div class=" text-white">
                                    <h5>Intelligence</h5>
                                    <h6>Modificateur</h6>
                                </div>
                                <div class="skill-points">
                                    <div class="points" contenteditable="true">+1</div>
                                    <div class="skill-checkbox">
                                        <label for="force-M">M</label>
                                        <input type="checkbox" id="force-M" name="scales">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="skill-circle">
                            <div class="circle circle-align">
                                <h6>Valeur</h6>
                                <div contenteditable="true">12</div>
                            </div>
                            <div class="circle circle-align">
                                <h6>Sauv</h6>
                                <div contenteditable="true">+1</div>
                            </div>
                        </div>
                    </div>
                    <!-- Skill wisdom -->
                    <div class="box-skill">
                        <div class="single-skill">
                            <div class="attribute-box">
                                <div class=" text-white">
                                    <h5>Sagesse</h5>
                                    <h6>Modificateur</h6>
                                </div>
                                <div class="skill-points">
                                    <div class="points" contenteditable="true">-1</div>
                                    <div class="skill-checkbox">
                                        <label for="force-M">M</label>
                                        <input type="checkbox" id="force-M" name="scales">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="skill-circle">
                            <div class="circle circle-align">
                                <h6>Valeur</h6>
                                <div contenteditable="true">9</div>
                            </div>
                            <div class="circle circle-align">
                                <h6>Sauv</h6>
                                <div contenteditable="true">-1</div>
                            </div>
                        </div>
                    </div>

                    <!-- Skill charism -->
                    <div class="box-skill">
                        <div class="single-skill">
                            <div class="attribute-box">
                                <div class="text-white">
                                    <h5>Charisme</h5>
                                    <h6>Modificateur</h6>
                                </div>
                                <div class="skill-points">
                                    <div class="points" contenteditable="true">+2</div>
                                    <div class="skill-checkbox">
                                        <label for="force-M">M</label>
                                        <input type="checkbox" id="force-M" name="scales">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="skill-circle">
                            <div class="circle circle-align">
                                <h6>Valeur</h6>
                                <div contenteditable="true">15</div>
                            </div>
                            <div class="circle circle-align">
                                <h6>Sauv</h6>
                                <div contenteditable="true">+2</div>
                            </div>
                        </div>
                    </div>
                    <!-- Skills character section  end -->
                </div>
                <!-- Skills 2 character section -->
                <div class=" global-skills-bonus">
                    <div class="skills-bonus">
                        <!-- One Skills 2 character section -->

                        <div class="single-bonus-points">
                            <div class="title-points text-white">
                                <h5>Bonus <br/>de maitrise</h5>
                            </div>
                            <div class="circle circle-points">
                                <div class="circle-center" contenteditable="true">+2</div>
                            </div>
                        </div>

                        <div class="single-bonus-points">
                            <div class="title-points text-white">
                                <h5>Classe<br/>d'armure</h5>
                            </div>
                            <div class="circle circle-points">
                                <div class="circle-center" contenteditable="true">16</div>
                            </div>
                        </div>

                        <div class="single-bonus-points">
                            <div class="title-points text-white">
                                <h5>Initiative</h5>
                            </div>
                            <div class="circle circle-points">
                                <div class="circle-center" contenteditable="true">+2</div>
                            </div>
                        </div>

                        <div class="single-bonus-points">
                            <div class="title-points text-white">
                                <h5>Perception<br/>passive</h5>
                            </div>
                            <div class="circle circle-points">
                                <div class="circle-center" contenteditable="true">9</div>
                            </div>
                        </div>

                        <div class="single-bonus-points">
                            <div class="title-points text-white">
                                <h5>Vitesse (en M)</h5>
                            </div>
                            <div class="circle circle-points">
                                <div class="circle-center" contenteditable="true">9</div>
                            </div>
                        </div>
                    </div>

                    <!-- Detailed Skills character section -->
                    <div class="inspiration-checkbox">
                        <label for="inspiration">Inspiration</label>
                        <input type="checkbox" id="inspiration" name="scales">
                    </div>
                    <div class="detailed-skill">
                        <table>
                            <thead>
                                <tr>
                                    <th class="litle-marge">M</th>
                                    <th>Compétences</th>
                                    <th><i class="button edit">editer</i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="checkbox" id="force-M" name="scales"></td>
                                    <td> Acrobaties (DEX)</td>
                                    <td contenteditable="true">+2</td>
                                </tr>

                                <tr>
                                    <td><input type="checkbox" id="force-M" name="scales"></td>
                                    <td>Arcanes (INT)</td>
                                    <td contenteditable="true">+2</td>
                                </tr>

                                <tr>
                                    <td><input type="checkbox" id="force-M" name="scales"></td>
                                    <td>Athlétisme (FOR)</td>
                                    <td contenteditable="true">+2</td>
                                </tr>

                                <tr>
                                    <td><input type="checkbox" id="force-M" name="scales"></td>
                                    <td>Discrétion (DEX)</td>
                                    <td contenteditable="true">+2</td>
                                </tr>

                                <tr>
                                    <td><input type="checkbox" id="force-M" name="scales"></td>
                                    <td>Dressage (SAG)</td>
                                    <td contenteditable="true">+2</td>
                                </tr>

                                <tr>
                                    <td><input type="checkbox" id="force-M" name="scales"></td>
                                    <td>Escamotage (DEX)</td>
                                    <td contenteditable="true">+2</td>
                                </tr>

                                <tr>
                                    <td><input type="checkbox" id="force-M" name="scales"></td>
                                    <td>Histoire (INT)</td>
                                    <td contenteditable="true">+2</td>
                                </tr>

                                <tr>
                                    <td><input type="checkbox" id="force-M" name="scales"></td>
                                    <td>Intimidation (CHA)</td>
                                    <td contenteditable="true">+2</td>
                                </tr>

                                <tr>
                                    <td><input type="checkbox" id="force-M" name="scales"></td>
                                    <td>Investigation (CHA)</td>
                                    <td contenteditable="true">+2</td>
                                </tr>

                                <tr>
                                    <td><input type="checkbox" id="force-M" name="scales"></td>
                                    <td>Médecine (SAG)</td>
                                    <td contenteditable="true">+2</td>
                                </tr>

                                <tr>
                                    <td><input type="checkbox" id="force-M" name="scales"></td>
                                    <td>Nature (INT)</td>
                                    <td contenteditable="true">+2</td>
                                </tr>

                                <tr>
                                    <td><input type="checkbox" id="force-M" name="scales"></td>
                                    <td>Perception (SAG)</td>
                                    <td contenteditable="true">+2</td>
                                </tr>

                                <tr>
                                    <td><input type="checkbox" id="force-M" name="scales"></td>
                                    <td>Perspicacité (SAG)</td>
                                    <td contenteditable="true">+2</td>
                                </tr>

                                <tr>
                                    <td><input type="checkbox" id="force-M" name="scales"></td>
                                    <td>Persuasion (CHA)</td>
                                    <td contenteditable="true">+2</td>
                                </tr>

                                <tr>
                                    <td><input type="checkbox" id="force-M" name="scales"></td>
                                    <td>Religion (INT)</td>
                                    <td contenteditable="true">+2</td>
                                </tr>

                                <tr>
                                    <td><input type="checkbox" id="force-M" name="scales"></td>
                                    <td>Représentation (CHA)</td>
                                    <td contenteditable="true">+2</td>
                                </tr>

                                <tr>
                                    <td><input type="checkbox" id="force-M" name="scales"></td>
                                    <td>Supercherie (CHA)</td>
                                    <td contenteditable="true">+2</td>
                                </tr>

                                <tr>
                                    <td><input type="checkbox" id="force-M" name="scales"></td>
                                    <td>Survie (SAG)</td>
                                    <td contenteditable="true">+2</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Skills 2 character section end -->


                <!-- Skills 3 character section -->
                <div class="global-skills-3">
                    <div class="global-skills-3-1">
                        <div class="health-status text-white">
                            <h5>Santé</h5>
                            <div class="health-status-inline">
                                <div class="pv-max">
                                    <h6>Points de vie maximum</h6>
                                    <div contenteditable="true" class="value-pv-max">19</div>
                                </div>
                                <div class="life-dice">
                                    <h6>Dé de vie</h6>
                                    <div contenteditable="true" class="value-life-dice">1d10 </div>
                                </div>
                            </div>
                            <h6>Points de vie actuels</h6>
                            <div contenteditable="true" class="actual-life-points"></div>
                            <div class="tired-status-inline">
                                <div class="tired-level">
                                    <h6>Niveaux de fatigue</h6>
                                    <div contenteditable="true" class="value-tired-level"></div>
                                </div>
                                <div class="life-dice-used">
                                    <h6>Dés de vie dépensés</h6>
                                    <div contenteditable="true" class="value-life-dice-used"></div>
                                </div>
                            </div>
                            <h5>Sauvegardes de mort</h5>
                            <div class="saves-death-column">
                                <div class="success-checkbox">
                                    <label for="success">Réussies</label>
                                    <input type="checkbox" id="inspiration" name="scales">
                                    <input type="checkbox" id="inspiration" name="scales">
                                    <input type="checkbox" id="inspiration" name="scales">
                                </div>
                                <div class="failed-checkbox">
                                    <label for="failed">Ratées</label>
                                    <input type="checkbox" id="inspiration" name="scales">
                                    <input type="checkbox" id="inspiration" name="scales">
                                    <input type="checkbox" id="inspiration" name="scales">
                                </div>
                            </div>
                        </div>
                        <!-- Skills 3 character section end -->

                        <!-- Skills 4 character section -->
                        <div class="global-history-language text-white">
                            <div class="personality">
                                <div class="hystory-contenaire">
                                    <h6>Historique</h6>
                                    <div contenteditable="true" class="value-history"></div>
                                </div>
                                <div class="hystory-contenaire">
                                    <h6>Traits de personalités</h6>
                                    <div contenteditable="true" class="value-history"></div>
                                </div>
                                <div class="hystory-contenaire">
                                    <h6>Idéal</h6>
                                    <div contenteditable="true" class="value-history"></div>
                                </div>
                                <div class="hystory-contenaire">
                                    <h6>Lien</h6>
                                    <div contenteditable="true" class="value-history"></div>
                                </div>
                                <div class="hystory-contenaire">
                                    <h6>Défaut</h6>
                                    <div contenteditable="true" class="value-history"></div>
                                </div>
                            </div>
                            <div class="language">
                                <div class="language-contenaire">
                                    <h5>Maitrises et langues</h5>
                                    <div contenteditable="true" class="value-language"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="attacks-and-spells text-white">
                        <div class="table-attacks-and-spells">
                            <h5>Attaques et sorts</h5>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Armes ou sorts</th>
                                        <th>Attaque</th>
                                        <th>Dégats</th>
                                        <th>Type de dégat et Spécial</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <tr>
                                        <td contenteditable="true">Katana, une main</td>
                                        <td contenteditable="true">mod F</td>
                                        <td contenteditable="true">1d8</td>
                                        <td contenteditable="true">Tranchant</td>
                                    </tr>
                                    <tr>
                                        <td contenteditable="true">Katana, deux mains</td>
                                        <td contenteditable="true">mod F</td>
                                        <td contenteditable="true">1d10</td>
                                        <td contenteditable="true">Polyvalent</td>
                                    </tr>
                                    <tr>
                                        <th contenteditable="true"></th>
                                        <th contenteditable="true"></th>
                                        <th contenteditable="true"></th>
                                        <th contenteditable="true"></th>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        <div class="other-attacks-and-spells">
                            <div contenteditable="true" data-placeholder="Autres :"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="character-abilities-and-features text-white">
                <div class="abilities-and-features">
                    <div class="abilities-and-features-text text-white">
                        <h5>Aptitudes et traits</h5>
                        <p contenteditable="true"> Style de combat : duel (juste une arme à une main, bonus de +2 aux dégâts avec cette arme). Second souffle : action bonus pour regagner 1d10 + niveau guerrier de point de vie. Repos court pour pouvoir le réutiliser. Sursaut d'activité
                            : une action supplémentaire durant un tour. Repos court pour pouvoir le réutiliser.
                        </p>
                    </div>
                </div>
                <div class="gears-text-box">
                    <h5>Équipement</h5>
                    <div class="gear-text" contenteditable="true" data-placeholder="Descriptif :"></div>
                </div>
                <div class="skill-circle-gears">
                    <div class="circle circle-align-gears">
                        <h6>PP</h6>
                        <div contenteditable="true">15</div>
                    </div>
                    <div class="circle circle-align-gears">
                        <h6>PO</h6>
                        <div contenteditable="true">+2</div>
                    </div>
                    <div class="circle circle-align-gears">
                        <h6>PE</h6>
                        <div contenteditable="true">+2</div>
                    </div>
                    <div class="circle circle-align-gears">
                        <h6>PA</h6>
                        <div contenteditable="true">+2</div>
                    </div>
                    <div class="circle circle-align-gears">
                        <h6>PC</h6>
                        <div contenteditable="true">+2</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Skills 4 character section end -->
        </div>
    </section>
    <div>
        <a href="character_sheet.html" class="site-btn">Enregistrer</a>
    </div>
    <!-- sheet character section end -->
    <!-- Footer section  -->
    <!-- Footer section end -->

    <!--====== Javascripts & Jquery ======-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/circle-progress.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/main.js"></script>

    <!-- include html-->
    <script>
        w3.includeHTML();
    </script>

</body>

</html>