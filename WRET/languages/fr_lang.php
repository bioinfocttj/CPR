 <?php
//---------------------------------------------------------
// index.php
//---------------------------------------------------------
define('TXT_SITE_TITLE', "Page d'accueil de WebRegEfmTool");
define('TXT_HOMEPAGE_TITLE', 'Bienvenue sur WebRegEfmTool');
define('TXT_HOMEPAGE_BODY', "Cet outil sert à l'utilisation du logiciel regEfmtool.<br />
		Vous pourrez créer, charger, modifier un réseau métabolique.<br />
		 Le but est de lancer une simualtion depuis votre navigateur.");
define('TXT_HOMEPAGE_COPYRIGHT', "Voir le <a href=\"copyright.php\">Copyright</a>");
//---------------------------------------------------------
// menu.php
//---------------------------------------------------------
define('TXT_MENU_HOME', 'Accueil');
define('TXT_MENU_CREATE', 'Cr&eacute;ation');
define('TXT_MENU_REVERSIBILITY', 'R&eacute;versibilit&eacute;');
define('TXT_MENU_RULES', 'R&egrave;gles');
define('TXT_MENU_LOAD', 'Chargement');
define('TXT_MENU_MODIFY', 'Modification');
define('TXT_MENU_LAUNCH', 'Lancement');
define('TXT_MENU_HELP', 'Aide');
//---------------------------------------------------------
// create.php
//---------------------------------------------------------
define('TXT_CREATION_SITE_TITLE', "Cr&eacute;ation d'une nouvelle r&eacute;action");
define('TXT_INIT_FILES', "Initialisez vos fichiers avant de créer un nouveau réseau");
define('TXT_CREATION_INIT', "\"Initialiser fichiers\"");
define('TXT_CREATION_TITLE', "Cr&eacute;ation d'un nouveau r&eacute;seau");
define('TXT_CREATION_INSTRUCTION_1', "Ecrivez une nouvelle réaction");
define('TXT_CREATION_INSTRUCTION_2', "Verifier si la r&eacute;action &agrave; d&eacute;j&agrave; &eacute;t&eacute; enregistr&eacute;e :");
define('TXT_CREATION_WARNING_TITLE', "Attention !");
define('TXT_CREATION_WARNING', "Pas d'espaces dans les noms, utiliser un underscore '_' à la place.<br />
			La synthaxe des réactions est la suivante :<br />
			Nom_reaction : 2 reactif1 + 5 reactif2 => 3 produit1 + 7 produit2 (irréversible) <br />
			Nom_reaction : 2 reactif1 + 5 reactif2 = 3 produit1 + 7 produit2 (réversible) <br />
			Attention a laisser un espace entre le coefficient stoechiométrique et le métabolite associé.");
define('TXT_CREATION_IS_REVERSIBLE', "R&eacute;versibili&eacute; :");
define('TXT_CREATION_YES', "Oui");
define('TXT_CREATION_NO', "Non");
define('TXT_CREATION_ALREADY_OK', "R&eacute;actions déjà entrées :");
define('TXT_CREATION_FINISH', "Création du fichier au format \"DAT\"");
define('TXT_CREATION_HELP_REV', "(0 = irréversible et 1 = réversible)");
define('TXT_CREATION_CLIC', "Vous devez cliquer sur le bouton");

//---------------------------------------------------------
// Buttons 
//---------------------------------------------------------
define('TXT_ADD_BUTTON', "Ajouter");
define('TXT_NEXTSTEP_BUTTON', "Étape suivante");
define('TXT_GO_BUTTON', "Lancement");

//---------------------------------------------------------
// generules.php
//---------------------------------------------------------
define('TXT_GENERULES_SITE_TITLE', "Cr&eacute;ation des r&egrave;gles des g&egrave;nes");
define('TXT_GENERULES_TITLE', "R&egrave;gle des g&egrave;enes");
define('TXT_GENERULES_INSTRUCTION_1', "Ecrivez une nouvelle r&egrave;gle :");
define('TXT_GENERULES_INSTRUCTION_2', "Choisissez le nombre de r&eacute;action :");
define('TXT_GENERULES_INSTRUCTION_3', " Nombre de r&eacute;action dans la forme IF AND THEN");
define('TXT_GENERULES_NUMBER', "Entrez un nombre supérieur à 1 ");
define('TXT_GENERULES_OPERATOR', "Choisir un opérateur");
define('TXT_GENERULES_OP', "Op&eacute;rateur:");
define('TXT_GENERULES_REAC', "R&eacute;action:");
define('TXT_GENERULES_REAC_1', "Choisir une r&eacute;action");
define('TXT_GENERULES_VALUE', "Valeur: ");
define('TXT_GENERULES_VALUE_2', "Choisir une valeur");
define('TXT_GENERULES_BUTTON_ADD', "Ajouter");
define('TXT_GENERULES_ALERT_1', "Vous devez choisir une réacion et une valeur pour la réaction");
define('TXT_GENERULES_ALERT_2', "Vous devez choisir une opérateur, une réacion et une valeur pour la réaction");
define('TXT_GENERULES_RULES', "R&egrave;gles d&eacute;j&agrave; cr&eacute;&eacute;es :");
define('TXT_GENERULES_HELP_RULES', "Aide");

//---------------------------------------------------------
// load.php
//---------------------------------------------------------
define('TXT_LOAD_SITE_TITLE', "Chargement d'un r&eacute;seau");
define('TXT_LOAD_TITLE', "Chargement d'un r&eacute;seau");
define('TXT_LOAD_INSTRUCTION_1', "Veuillez charger les fichiers n&eacute;cessaires &agrave; la construction du r&eacute;seau m&eacute;tabolique");
define('TXT_LOAD_INSTRUCTION_2', "Fichier des m&eacute;tabolites :");
//---------------------------------------------------------
// modify.php
//---------------------------------------------------------
define('TXT_MODIFY_SITE_TITLE', "Modification d'un r&eacute;seau");
define('TXT_MODIFY_TITLE', "Modification d'un r&eacute;seau");
define('TXT_MODIFY_INSTRUCTION_1', "Non disponible pour le moment...");

//---------------------------------------------------------
// options.php
//---------------------------------------------------------
define('TXT_OPTIONS_SITE_TITLE', "Choix des options pour l'analyse du r&eacute;seau");
define('TXT_OPTIONS_TITLE', "Choix des options de lancement de WRET ");
define('TXT_OPTIONS_INSTRUCTION_1', "Veuillez cocher les options n&eacute;c&eacute;ssaires : ");
define('TXT_OPTIONS_SAVING_1', "Enregistrement  ");
define('TXT_OPTIONS_SAVING_2', "Affichage des r&eacute;sultats  ");
define('TXT_OPTIONS_SAVING_3', "En ligne sur WRET ");
define('TXT_OPTIONS_SAVING_4', "Dans un fichier : ");
define('TXT_OPTIONS_SAVING_5', "Nom du fichier :");
define('TXT_OPTIONS_ERROR_1', "Type de messages d'erreurs / Niveau d'informations sur le d&eacute;roulement des calculs ");
define('TXT_OPTIONS_ERROR_2', "Warning ");
define('TXT_OPTIONS_ERROR_3', "Config ");
define('TXT_OPTIONS_ERROR_4', "Info ");
define('TXT_OPTIONS_ERROR_5', "Fine ");
define('TXT_OPTIONS_ERROR_6', "Finer ");
define('TXT_OPTIONS_ERROR_7', "Finest ");
define('TXT_OPTIONS_SAVING_6', "Format/m&eacute;thode de l'enregistrement  ");
define('TXT_OPTIONS_SAVING_7', "Par d&eacute;faut ");
define('TXT_OPTIONS_SAVING_8', "Complet ");
define('TXT_OPTIONS_INPUT_1', "Param&egrave;tres d'entr&eacute;e ");
define('TXT_OPTIONS_INPUT_STOECH', "Type des fichiers soechiom&eacute;triques ");
define('TXT_OPTIONS_INPUT_STOECH_1', "Flux-analyzer-dir ");
define('TXT_OPTIONS_INPUT_STOECH_2', "Flux-analyzer-files ");
define('TXT_OPTIONS_INPUT_STOECH_3', "Reaction-list ");
define('TXT_OPTIONS_INPUT_STOECH_4', "Excel ");
define('TXT_OPTIONS_INPUT_STOECH_5', "Stoichiometry ");
define('TXT_OPTIONS_INPUT_STOECH_6', "Sbml ");
define('TXT_OPTIONS_INPUT_F_ANALY', "Analyseur de flux ");
define('TXT_OPTIONS_INPUT_F_ANALY_1', "In ");
define('TXT_OPTIONS_INPUT_F_ANALY_2', "Dossier : ");
define('TXT_OPTIONS_INPUT_F_ANALY_3', "Nom du Dossier : ");
define('TXT_OPTIONS_INPUT_F_ANALY_4', "Fichier ");
define('TXT_OPTIONS_INPUT_F_ANALY_5', "Nom du fichier : ");
define('TXT_OPTIONS_INPUT_F_ANALY_6', "Fichier .sfile");
define('TXT_OPTIONS_INPUT_F_ANALY_7', "Nom du fichier : ");
define('TXT_OPTIONS_INPUT_F_ANALY_8', "Fichier .rvfile");
define('TXT_OPTIONS_INPUT_F_ANALY_9', "Nom du fichier : ");
define('TXT_OPTIONS_COMPRESS', "Compression ");
define('TXT_OPTIONS_COMPRESS_1', "Default ");
define('TXT_OPTIONS_COMPRESS_2', "Off ");
define('TXT_OPTIONS_COMPRESS_3', "Unique");
define('TXT_OPTIONS_COMPRESS_4', "Nullspace ");
define('TXT_OPTIONS_COMPRESS_5', "Unique-no-recursion ");
define('TXT_OPTIONS_COMPRESS_6', "Nullspace-no-recursion ");
define('TXT_OPTIONS_OUTPUT', "Param&egrave;tres de sortie ");
define('TXT_OPTIONS_OUTPUT_1', "Null");
define('TXT_OPTIONS_OUTPUT_2', "Count ");
define('TXT_OPTIONS_OUTPUT_3', "Text-boolean : ");
define('TXT_OPTIONS_OUTPUT_4', "Nom du fichier : ");
define('TXT_OPTIONS_OUTPUT_5', "Text-doubles : ");
define('TXT_OPTIONS_OUTPUT_6', "Nom du fichier : ");
define('TXT_OPTIONS_OUTPUT_7', "Binary-boolean : ");
define('TXT_OPTIONS_OUTPUT_8', "Nom du fichier : ");
define('TXT_OPTIONS_OUTPUT_9', "Binary-doubles : ");
define('TXT_OPTIONS_OUTPUT_10', "Nom du fichier : ");
define('TXT_OPTIONS_OUTPUT_11', "Matlab : ");
define('TXT_OPTIONS_OUTPUT_12', "Nom du fichier (sans extension) ");
define('TXT_OPTIONS_EFMTOOL', "Param&egrave;tres d'EfmTool ");
define('TXT_OPTIONS_EFM_LINE', "Ligne de commandes ");
define('TXT_OPTIONS_EFM_ADJA', "M&eacute;thode d'adjacence  ");
define('TXT_OPTIONS_EFM_ADJA_1', "Pattern-tree-minzero ");
define('TXT_OPTIONS_EFM_ADJA_2', "Pattern-tree-rank ");
define('TXT_OPTIONS_EFM_THREADS', "Nombre maximal de 'threads'  ");
define('TXT_OPTIONS_EFM_THREADS_1', "MaxThreads  ");
define('TXT_OPTIONS_EFM_THREADS_2', "Nombre de threads : ");
define('TXT_OPTIONS_EFM_ARITHM', "Arithm&eacute;tique des nombres  ");
define('TXT_OPTIONS_EFM_ARITHM_1', "Doubles ");
define('TXT_OPTIONS_EFM_ARITHM_2', "Fractionnaire ");
define('TXT_OPTIONS_EFM_NORMAL', "Type de normalisation pour la sortie  ");
define('TXT_OPTIONS_EFM_NORMAL_1', "Maximum ");
define('TXT_OPTIONS_EFM_NORMAL_2', "Minimum ");
define('TXT_OPTIONS_EFM_NORMAL_3', "norm2 ");
define('TXT_OPTIONS_EFM_NORMAL_4', "Carr&eacute; ");
define('TXT_OPTIONS_EFM_NORMAL_5', "Aucune ");
define('TXT_OPTIONS_EFM_P_FRAC', "Pr&eacute;cision fractionnaire  ");
define('TXT_OPTIONS_EFM_P_FRAC_1', "Pr&eacute;cision  ");
define('TXT_OPTIONS_EFM_VALUE', "Valeur (bit count, e.g. 128, 256, -1 (infinite)) : ");
define('TXT_OPTIONS_EFM_AUTO_T', "Auto-test apr&egrave;s chaque it&eacute;ration  ");
define('TXT_OPTIONS_EFM_AUTO_T_1', "Oui ");
define('TXT_OPTIONS_EFM_AUTO_T_2', "Non ");

//---------------------------------------------------------
//help.php
//--------------------------------------------------------

define('TXT_HELP_TITLE', "Aide en ligne");
define('TXT_HELP_INTRO', " Ceci est une aide pour l'usage de RegEfmtool en ligne.");
define('TXT_HELP_FILES', "Chargement de fichiers pré-existants depuis votre disque dur");
define('TXT_HELP_METABO', "Métabolites");
define('TXT_HELP_EXTENSION', "L'extension doit être du type 'mfile' <br /> 
					Le contenu de la forme : 'A' 'B' 'C' 'D' 'P' ");
define('TXT_HELP_SUITE', "Le reste est à venir ...");

//---------------------------------------------------------
//help_rule.php
//--------------------------------------------------------
define('TXT_HELP_RULE_TITLE', "Aide à la création des règles des gène");
define('TXT_HELP_RULE_INTRO', "La réaction gène-enzyme est générée grâce à des règles booléennes, comme par exemple R2= !R1.\n
Ce qui veut dire:\n");
define('TXT_FLUX_1', "Que la réaction R2 ne doit pas apporter de flux si R1 apporte un flux");
define('TXT_FLUX_2', "Que R2 doit apporter un flux si R1 n'en apporte pas");
define('TXT_HELP_RULE_1', "Une réaction R peut apporter un flux (R = 1) ou non (R = 0).");
define('TXT_HELP_RULE_2', "Evidemment, des règles booléennes plus complexes existent dans les réseaux métaboliques. Elles peuvent être décrites à l'aide des opérateurs NOT, OR et AND.");
define('TXT_HELP_RULE_3', "Pour indiquer le type d'activité d'une réaction , le préfix '0', '1' ou 'f' doit être utilisé dans le grfile.");
define('TXT_HELP_RULE_4', "Par exemple, si la réaction R7 est 0-active, dans grfile elle se présentera sous la forme 0R7, tandis qu'une réaction pleinement active sera notée fR3.");
define('TXT_HELP_RULE_INFO_TITLE', "Conversion des règles dans le format utilisé par regEfmtool");
define('TXT_HELP_RULE_INFO_1', "Cette page vous permet de créer des règles sur les gènes du type:");
define('TXT_R1', "IF R1 = 1 AND R2 = 0 THEN R3=1");
define('TXT_R2', "IF R4 = 0 OR R2 = 1 THEN R1 = 0");
define('TXT_HELP_RULE_INFO_2', "Lorsque vous cliquez sur le bouton \"ajouter\", les règles sont traduites et écrites dans le fichier grfile.txt qui pourra ensuite être utilisé par regEfmtool
lors du calcul des modes élémentaires.");
define('TXT_HELP_RULE_INFO_3', "La traduction des règles précédentes est:");
define('TXT_R1_2', "R3 = (1R1 & (!0R2))");
define('TXT_R2_2', "R1 = (!((!0R4) | 1R2))");

//---------------------------------------------------------
// copyright.php
//---------------------------------------------------------
define('TXT_COPYRIGHT_TITLE', "Copyright");
define('TXT_COPYRIGHT_CPY', "© Copyright 2013 <br />
			WebRegEfmTool (WRET) est une interface Web créée par les étudiants du Master 2 de BioInformatique de Bordeaux : <br />
			Arnaud FRÈCHE, Charlotte HÉRICÉ, Saraï MOLA, Typhaine PAYSAN-LAFOSSE et Joris SANSEN <br />
			Sous la direction de Mme <a href=\"http://dept-info.labri.fr/~beurton\">Marie BEURTON-AIMAR</a>. <br />
			Le but de cette interface est de fournir un environnement ergonomique au logiciel <a href=\"http://www.biotec.boku.ac.at/regulatoryelementaryfluxmode.html\"> regEfmtool</a>. ");

//---------------------------------------------------------
// file_choose.php
//---------------------------------------------------------
define('TXT_FILE_CHOOSE_SITE_TITLE', "Résultats");
define('TXT_FILE_CHOOSE_TITLE', "Visualisation de résultatS");
define('TXT_FILE_CHOOSE_SUBTITLE', "Choisir un fichier");
define('TXT_FILE_CHOOSE', "Fichier : ");

//---------------------------------------------------------
// parse_results.php
//---------------------------------------------------------
define('TXT_PARSE_RESULTS__SITE_TITLE', "Résultats");
define('TXT_PARSE_RESULTS_TITLE', "Extraction des résultats");
define('TXT_PARSE_RESULTS_FILE', "Fichier traité : ");

//---------------------------------------------------------
// display_results.php
//---------------------------------------------------------
define('TXT_DISPLAY_RESULTS_SITE_TITLE', "Résultats");
define('TXT_DISPLAY_RESULTS_TITLE', "Affichage des résultats");
define('TXT_DISPLAY_RESULTS_INSTRUCTION_1',"Fichier choisi");
define('TXT_DISPLAY_RESULTS_FILE', "Fichier traité : ");

//---------------------------------------------------------
// Fin
//---------------------------------------------------------
?>
