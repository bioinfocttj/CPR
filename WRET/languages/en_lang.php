 <?php
//---------------------------------------------------------
// index.php
//---------------------------------------------------------
define('TXT_HOMEPAGE_TITLE', 'Welcome on WebRegEfmTool');
define('TXT_SITE_TITLE', "Homepage of WebRegEfmTool");
define('TXT_HOMEPAGE_BODY', "This tool is used for regEfmtool.<br />
		You can create, load, modify a metabolic network.<br />
		The aim is to launch a simulation from you browser.");
define('TXT_HOMEPAGE_COPYRIGHT', "See the <a href=\"copyright.php\">Copyright</a>");
//---------------------------------------------------------
// page1.php
//---------------------------------------------------------
define('TXT_MENU_HOME', 'Home');
define('TXT_MENU_CREATE', 'Creation');
define('TXT_MENU_REVERSIBILITY', 'Reversibility');
define('TXT_MENU_RULES', 'Rules');
define('TXT_MENU_LOAD', 'Load');
define('TXT_MENU_MODIFY', 'Modify');
define('TXT_MENU_LAUNCH', 'Launch');
define('TXT_MENU_HELP', 'Help');
//---------------------------------------------------------
// create.php
//---------------------------------------------------------
define('TXT_CREATION_SITE_TITLE', "Creation of a new reaction");
define('TXT_INIT_FILES', "Initiate your files before creating a new network");
define('TXT_CREATION_INIT', "\"Init files\"");
define('TXT_CREATION_TITLE', "Creation of a new network");
define('TXT_CREATION_INSTRUCTION_1', "enter a new reaction");
define('TXT_CREATION_INSTRUCTION_2', "Check if the raction has already been registered :");
define('TXT_CREATION_WARNING_TITLE', "WARNING !");
define('TXT_CREATION_WARNING', "No space in the names, please use underscore '_' instead <br />
			This is how to write a reaction : <br />
			Name_of_reaction : 2 reactant1 + 5 reactant2 => 3 product1 + 7 product2 <br />
			Please be sure to let a space between the stoechiometry coefficient and the associate metabolite");
define('TXT_CREATION_WARNING_2', "You mustn't add or remove a reaction in this area<br />
				No space after the last metabolite");
define('TXT_CREATION_IS_REVERSIBLE', "Reversible :");
define('TXT_CREATION_YES', "Yes");
define('TXT_CREATION_NO', "No");
define('TXT_CREATION_ALREADY_OK', "Reactions already saved");
define('TXT_CREATION_FINISH', "Creation of the DAT file format network");
define('TXT_CREATION_CLIC', "You have to click one the button");
define('TXT_CREATE_EXT', "External metabolites :");
define('TXT_CREATE_INT', "Internal metabolites : ");
define('TXT_CREATE_BUTTON_ADD1', "Add");
define('TXT_CREATE_BUTTON_REMOVE1', "Remove");
define('TXT_CREATE_CHOOSE_EXT', "Choose external and internal metabolites");

//---------------------------------------------------------
// Buttons create.php
//---------------------------------------------------------
define('TXT_ADD_BUTTON', "Add");
define('TXT_MODIFY_BUTTON', "Modify");
define('TXT_NEXTSTEP_BUTTON', "Next step");
define('TXT_GO_BUTTON', "Go");
define('TXT_COMPARE_BUTTON', "Compare");
define('TXT_FINISH_BUTTON', "Finish");

//---------------------------------------------------------
// generules.php
//---------------------------------------------------------
define('TXT_GENERULES_SITE_TITLE', "Create the Gene rules");
define('TXT_GENERULES_TITLE', "Gene Rules");
define('TXT_GENERULES_INSTRUCTION_1', "Enter a new rule :");
define('TXT_GENERULES_INSTRUCTION_2', "Choose the number of reaction :");
define('TXT_GENERULES_INSTRUCTION_3', " Number of reaction in the form IF AND THEN");
define('TXT_GENERULES_NUMBER', "Enter a number higher than 1 ");
define('TXT_GENERULES_OPERATOR', "Choose an operator");
define('TXT_GENERULES_OP', "Operator:");
define('TXT_GENERULES_REAC', "Reaction:");
define('TXT_GENERULES_REAC_1', "Choose a reaction");
define('TXT_GENERULES_VALUE', "Value: ");
define('TXT_GENERULES_VALUE_2', "Choose a value");
define('TXT_GENERULES_BUTTON_ADD', "Add");
define('TXT_GENERULES_ALERT_1', "You have to choose a reaction and a value for the reaction");
define('TXT_GENERULES_ALERT_2', "You have to choose an operator, a reaction and a value for the reaction");
define('TXT_GENERULES_RULES', "Rules already created :");
define('TXT_GENERULES_HELP_RULES', "Help");

//---------------------------------------------------------
// load.php
//---------------------------------------------------------
define('TXT_LOAD_SITE_TITLE', "Load a network");
define('TXT_LOAD_TITLE', "Load a network");
define('TXT_LOAD_INSTRUCTION_1', "Please choose the files needed to build the metabolic network");
define('TXT_LOAD_INSTRUCTION_2', "metabolites files ( your_file.mfile):");
define('TXT_LOAD_FILE_NAME', "Choose the files to load :");
define('TXT_LOAD_SFILE', ".sfile file");
define('TXT_LOAD_MFILE', ".mfile file");
define('TXT_LOAD_RVFILE', ".rvfile file");
define('TXT_LOAD_GRFILE', ".grfile file");
define('TXT_LOAD_RFILE', ".rfile file");
//---------------------------------------------------------
// modify.php
//---------------------------------------------------------
define('TXT_MODIFY_SITE_TITLE', "Modification of a network");
define('TXT_MODIFY_TITLE', "Modification of a network");
define('TXT_MODIFY_INSTRUCTION_1', "Not yet implemented");

//---------------------------------------------------------
// options.php
//---------------------------------------------------------
define('TXT_OPTIONS_SITE_TITLE', "Choice of the options for the network analysis");
define('TXT_OPTIONS_TITLE', "Choice of the options for WRET running ");
define('TXT_OPTIONS_INSTRUCTION_1', "Please check the necessary options :");
define('TXT_OPTIONS_INSTRUCTION_1', "Please check the necessary options : <br/>
		(Mandatoru options are checked as default)");
define('TXT_OPTIONS_SAVING_1', "Loading  ");
define('TXT_OPTIONS_SAVING_2', "Results diplay  ");
define('TXT_OPTIONS_SAVING_3', "Online on WRET ");
define('TXT_OPTIONS_SAVING_4', "In a file : ");
define('TXT_OPTIONS_SAVING_5', "File name ");
define('TXT_OPTIONS_ERROR_1', "Type of warning / Level of information of processing  ");
define('TXT_OPTIONS_ERROR_2', "Warning ");
define('TXT_OPTIONS_ERROR_3', "Config ");
define('TXT_OPTIONS_ERROR_4', "Info ");
define('TXT_OPTIONS_ERROR_5', "Fine ");
define('TXT_OPTIONS_ERROR_6', "Finer ");
define('TXT_OPTIONS_ERROR_7', "Finest ");
define('TXT_OPTIONS_SAVING_6', "Format / kind of recording  ");
define('TXT_OPTIONS_SAVING_7', "As default ");
define('TXT_OPTIONS_SAVING_8', "Complete ");
define('TXT_OPTIONS_INPUT_1', "Input parameters ");
define('TXT_OPTIONS_INPUT_STOECH', "Kind of stoechiomotric files ");
define('TXT_OPTIONS_INPUT_STOECH_1', "Flux-analyzer-dir ");
define('TXT_OPTIONS_INPUT_STOECH_2', "Flux-analyzer-files ");
define('TXT_OPTIONS_INPUT_STOECH_3', "Reaction-list ");
define('TXT_OPTIONS_INPUT_STOECH_4', "Excel ");
define('TXT_OPTIONS_INPUT_STOECH_5', "Stoichiometry ");
define('TXT_OPTIONS_INPUT_STOECH_6', "Sbml ");
define('TXT_OPTIONS_INPUT_F_ANALY', "Flux analysor ");
define('TXT_OPTIONS_INPUT_F_ANALY_1', ".mfile file:");
define('TXT_OPTIONS_INPUT_F_ANALY_1b', "File name : ");
define('TXT_OPTIONS_INPUT_F_ANALY_2', ".rfile file : ");
define('TXT_OPTIONS_INPUT_F_ANALY_3', "File name : ");
define('TXT_OPTIONS_INPUT_F_ANALY_4', ".grfile file :");
define('TXT_OPTIONS_INPUT_F_ANALY_5', "File name : ");
define('TXT_OPTIONS_INPUT_F_ANALY_6', ".sfile file :");
define('TXT_OPTIONS_INPUT_F_ANALY_7', "File name : ");
define('TXT_OPTIONS_INPUT_F_ANALY_8', ".rvfile file :");
define('TXT_OPTIONS_INPUT_F_ANALY_9', "File name : ");
define('TXT_OPTIONS_COMPRESS', "Compression ");
define('TXT_OPTIONS_COMPRESS_1', "Default ");
define('TXT_OPTIONS_COMPRESS_2', "Off ");
define('TXT_OPTIONS_COMPRESS_3', "Unique");
define('TXT_OPTIONS_COMPRESS_4', "Nullspace ");
define('TXT_OPTIONS_COMPRESS_5', "Unique-no-recursion ");
define('TXT_OPTIONS_COMPRESS_6', "Nullspace-no-recursion ");
define('TXT_OPTIONS_OUTPUT', "Output parameters ");
define('TXT_OPTIONS_OUTPUT_1', "Null");
define('TXT_OPTIONS_OUTPUT_2', "Count ");
define('TXT_OPTIONS_OUTPUT_3', "Text-boolean : ");
define('TXT_OPTIONS_OUTPUT_4', "File name : ");
define('TXT_OPTIONS_OUTPUT_5', "Text-doubles : ");
define('TXT_OPTIONS_OUTPUT_6', "File name : ");
define('TXT_OPTIONS_OUTPUT_7', "Binary-boolean : ");
define('TXT_OPTIONS_OUTPUT_8', "File name : ");
define('TXT_OPTIONS_OUTPUT_9', "Binary-doubles : ");
define('TXT_OPTIONS_OUTPUT_10', "File name : ");
define('TXT_OPTIONS_OUTPUT_11', "Matlab : ");
define('TXT_OPTIONS_OUTPUT_12', "File name (no extension) ");
define('TXT_OPTIONS_EFMTOOL', "EfmTool parameters");
define('TXT_OPTIONS_EFM_CMD', "Command Line zu verwenden");
define('TXT_OPTIONS_EFM_LINE', "Rowordering");
define('TXT_OPTIONS_EFM_ADJA', "Adjency method ");
define('TXT_OPTIONS_EFM_ADJA_1', "Pattern-tree-minzero ");
define('TXT_OPTIONS_EFM_ADJA_2', "Pattern-tree-rank ");
define('TXT_OPTIONS_EFM_THREADS', "Maximal numbers of 'threads' ");
define('TXT_OPTIONS_EFM_THREADS_1', "MaxThreads : ");
define('TXT_OPTIONS_EFM_THREADS_2', "Number of threads : ");
define('TXT_OPTIONS_EFM_ARITHM', "Numbers arithmetic ");
define('TXT_OPTIONS_EFM_ARITHM_1', "Doubles ");
define('TXT_OPTIONS_EFM_ARITHM_2', "Fractionnary ");
define('TXT_OPTIONS_EFM_NORMAL', "Output normalization ");
define('TXT_OPTIONS_EFM_NORMAL_1', "Maximum ");
define('TXT_OPTIONS_EFM_NORMAL_2', "Minimum ");
define('TXT_OPTIONS_EFM_NORMAL_3', "norm2 ");
define('TXT_OPTIONS_EFM_NORMAL_4', "Square ");
define('TXT_OPTIONS_EFM_NORMAL_5', "None ");
define('TXT_OPTIONS_EFM_P_FRAC', "Fractionnary precision  ");
define('TXT_OPTIONS_EFM_P_FRAC_1', "Precision ");
define('TXT_OPTIONS_EFM_VALUE', "Value (bit count, e.g. 128, 256, -1 (infinite)) : ");
define('TXT_OPTIONS_EFM_AUTO_T', "Self-test after each iteration  ");
define('TXT_OPTIONS_EFM_AUTO_T_1', "Yes ");
define('TXT_OPTIONS_EFM_AUTO_T_2', "No ");

//---------------------------------------------------------
//help.php
//--------------------------------------------------------

define('TXT_HELP_TITLE', "Online help");
define('TXT_HELP_INTRO', " This is an aid for the use of online RegEfmtool.");
define('TXT_HELP_FILES_CREATE', "Create a new network");
define('TXT_HELP_CREATION', "Help to create a new network");
define('TXT_HELP_GENERULES', "Help to create the gene rules");

//---------------------------------------------------------
//help_rule.php
//--------------------------------------------------------
define('TXT_HELP_RULE_TITLE', "Help");
define('TXT_HELP_RULE_TITLE1', "Help to gene rule creation");
define('TXT_HELP_RULE_INTRO', "The gene-enzyme-reaction mapping is typically provided by boolean rules, e.g R2 = !R1.</br>
Which means that:");
define('TXT_HELP_RULE_FLUX_1', "The reaction R2 must not carry a flux, if R1 carries a flux ");
define('TXT_HELP_RULE_FLUX_2', "The reaction R2 must carry a flux, if R1 does not carry a flux");
define('TXT_HELP_RULE_1', "A reaction R either carries a flux (R = 1) or it does not carry a flux (R = 0).");
define('TXT_HELP_RULE_2', "Naturally, much more complex boolean rules occur in real-world metabolic networks.
These more complex rules can be described by combinations of NOT, OR, and AND operations.");
define('TXT_HELP_RULE_3', "In order to indicate the activity type of a reaction, the prefix '0', '1' or 'f' must be used in the grfile,");
define('TXT_HELP_RULE_4', "e.g. if the reaction R7 is a 0-active reaction then it must be named 0R7 in the grfile, whereas a full-active reaction R3 would be denoted fR3.");
define('TXT_HELP_RULE_INFO_TITLE', "Conversion of inital gene regulatory file into format used by regEfmtool");
define('TXT_HELP_RULE_INFO_1', "This web page allows to create the gene rules, like:");
define('TXT_HELP_RULE_R1', "IF R1 = 1 AND R2 = 0 THEN R3=1");
define('TXT_HELP_RULE_R2', "IF R4 = 0 OR R2 = 1 THEN R1 = 0");
define('TXT_HELP_RULE_INFO_2', "When you click on the \"Add\" button, the rules are translate and writting in the grfile.txt file, which will be used by regEfmtool when it computes elementary modes.");
define('TXT_HELP_RULE_INFO_3', "The traduction of the rules is:");
define('TXT_HELP_RULE_R1_2', "R3 = (1R1 & (!0R2))");
define('TXT_HELP_RULE_R2_2', "R1 = (!((!0R4) | 1R2))");

//---------------------------------------------------------
//help_create.php
//--------------------------------------------------------
define('TXT_HELP_CREATE_TITLE', "Help");
define('TXT_HELP_CREATE_TITLE1', "Help to create a new chemical network");
define('TXT_HELP_CREATE_INTRO', "To create your network, you have to generate some files.");
define('TXT_HELP_CREATE_1', "Click on the button \"Init files\".");
define('TXT_HELP_CREATE_2', "Write the reactions of the network one by one (you have to precise the stoechimetry each time). ");
define('TXT_HELP_CREATE_3', "Click on the button \"Add\" for validate your reactions. ");
define('TXT_HELP_CREATE_4', "If you have made a mistake, you can modify in the text-zone \"Reactions already saved\".");
define('TXT_HELP_CREATE_5', "Then, click on \"Modify\" for the changes to take effect.");
define('TXT_HELP_CREATE_6', "You can not write directly a reaction in this text-zone, or not delete one. ");
define('TXT_HELP_CREATE_7', "You can create a file.dat which will contain your chemical network by clicking on the button \"DAT\". ");
define('TXT_HELP_CREATE_8', "When you have finished, click on \"Next step\" to move to the creation of rules step. ");

//---------------------------------------------------------
// copyright.php
//---------------------------------------------------------
define('TXT_COPYRIGHT_TITLE', "Copyright");
define('TXT_COPYRIGHT_CPY', "© Copyright 2013 <br />
			WebRegEfmTool (WRET) is a web interface created by the students of the Master's Degree of BioInformatics from Bordeaux :<br />
			Arnaud FRÈCHE, Charlotte HÉRICÉ, Saraï MOLA, Typhaine PAYSAN-LAFOSSE and Joris SANSEN <br />
			Under the direction of Mrs. <a href=\"http://dept-info.labri.fr/~beurton\">Marie BEURTON-AIMAR</a>. <br />
			The aim of this interface is to give a user-friendly environment to the software <a href=\"http://www.biotec.boku.ac.at/regulatoryelementaryfluxmode.html\"> regEfmtool</a>. ");

//---------------------------------------------------------
// file_choose.php
//---------------------------------------------------------
define('TXT_FILE_CHOOSE_SITE_TITLE', "Results");
define('TXT_FILE_CHOOSE_TITLE', "Visualization of results");
define('TXT_FILE_CHOOSE_SUBTITLE', "Choose a file");
define('TXT_FILE_CHOOSE', "File : ");

//---------------------------------------------------------
// parse_results.php
//---------------------------------------------------------
define('TXT_PARSE_RESULTS_SITE_TITLE', "Results");
define('TXT_PARSE_RESULTS_TITLE', "Extraction results");
define('TXT_PARSE_RESULTS_FILE', "File processed : ");

//---------------------------------------------------------
// display_results.php
//---------------------------------------------------------
define('TXT_DISPLAY_RESULTS_SITE_TITLE', "Results");
define('TXT_DISPLAY_RESULTS_TITLE', "Display results");
define('TXT_DISPLAY_RESULTS_INSTRUCTION_1',"Choosen file");
define('TXT_DISPLAY_RESULTS_FILE', "File processed : ");
define('TXT_DISPLAY_RESULTS_ORIGINAL', "original : ");
define('TXT_DISPLAY_RESULTS_NEW', "new : ");

//---------------------------------------------------------
// Fin
//---------------------------------------------------------
?>
