 <?php
//---------------------------------------------------------
// home.php
//---------------------------------------------------------
define('TXT_SITE_TITLE', "Starseite von WebRegEfmTool");
define('TXT_HOMEPAGE_TITLE', 'Willkommen auf WebRegEfmTool');
define('TXT_HOMEPAGE_BODY', "Dieses Program ist für den Gebrauch der regEfmtool.<br />
		Sie können eine metabolische Netzwerk erstellen, laden, bearbeiten.<br />
		Das Ziel ist es, eine Simulation von Ihrem Web-browser ausgeführt werden.");
define('TXT_HOMEPAGE_COPYRIGHT', "<a href=\"copyright.php\">Copyright</a>");
//---------------------------------------------------------
// menu.php
//---------------------------------------------------------
define('TXT_MENU_HOME', 'LeitSeite');
define('TXT_MENU_CREATE', 'Uraufführung');
define('TXT_MENU_REVERSIBILITY', 'Übertragbarkeit');
define('TXT_MENU_RULES', 'Regeln');
define('TXT_MENU_LOAD', 'Beladung');
define('TXT_MENU_MODIFY', 'Änderung');
define('TXT_MENU_LAUNCH', 'Start');
define('TXT_MENU_HELP', 'Onlinehilfe');
//---------------------------------------------------------
// create.php
//---------------------------------------------------------
define('TXT_CREATION_SITE_TITLE', "Schaffung von neuen chemische Reaktionsrouten");
define('TXT_INIT_FILES', "Initialisieren Sie die Dateien vor dem Erstellen eines neuen Netzwerks");
define('TXT_CREATION_INIT', "\"Init-Dateien\"");
define('TXT_CREATION_TITLE', "Schaffung von neuen metabolische Netzwerk");
define('TXT_CREATION_INSTRUCTION_1', "Schreiben Sie eine neue Reaktion");
define('TXT_CREATION_INSTRUCTION_2', "Überprüfen Sie, ob die chemische Reaktion bereits registriert.");
define('TXT_CREATION_WARNING_TITLE', "Achtung !");
define('TXT_CREATION_WARNING', "Keine Leerzeichen in den Namen, verwenden Sie einen Unterstrich '_' statt.<br />
			Die Syntax der Reaktionen ist:
			Reaktion_Name : 2 Reaktive1 + 5 Reaktive2 => 3 Produkt1 + 7 Produkt2 (irreversible) <br />
			Reaktion_Name : 2 Reaktive1 + 5 Reaktive2 = 3 Produkt1 + 7 Produkt2 (reversible) <br />
			Bitte lassen Sie ein Leerzeichen zwischen den stöchiometrischen Koeffizienten und die damit verbundenen Metaboliten.");
define('TXT_CREATION_IS_REVERSIBLE', "Reversible :");
define('TXT_CREATION_YES', "Ja");
define('TXT_CREATION_NO', "Nein");
define('TXT_CREATION_ALREADY_OK', "Reaktionen zuvor gespeicherte :");
define('TXT_CREATION_FINISH', "Creation der DAT Datei Format");
define('TXT_CREATION_CLIC', "Sie müssen auf die Schaltfläche klicken");

//---------------------------------------------------------
// Buttons 
//---------------------------------------------------------
define('TXT_ADD_BUTTON', "Hinzufügen");
define('TXT_NEXTSTEP_BUTTON', "Nächsten Schritt");
define('TXT_GO_BUTTON', "Anfang");

//---------------------------------------------------------
// generules.php
//---------------------------------------------------------
define('TXT_GENERULES_SITE_TITLE', "Erstellung von Genen Regeln");
define('TXT_GENERULES_TITLE', "Genen Regeln");
define('TXT_GENERULES_INSTRUCTION_1', "Schreiben Sie eine neue Regel :");
define('TXT_GENERULES_INSTRUCTION_2', "Wählen Sie die Anzahl von chemischen Reaktionen :");
define('TXT_GENERULES_INSTRUCTION_3', " Die Anzahl von Reaktionen in Form von IF AND THEN");
define('TXT_GENERULES_OPERATOR', "Wählen Sie einen Operator");
define('TXT_GENERULES_OP', "Betreiber");
define('TXT_GENERULES_NUMBER', "Geben Sie eine Zahl größer als 1. ");
define('TXT_GENERULES_REAC', "Reaktion:");
define('TXT_GENERULES_REAC_1', "Wählen Sie eine Reaktion");
define('TXT_GENERULES_VALUE', "Wert : ");
define('TXT_GENERULES_VALUE_2', "Wählen Sie einen Wert");
define('TXT_GENERULES_BUTTON_ADD', "Hinzufügen");
define('TXT_GENERULES_ALERT_1', "Sie müssen eine Reaktion und einen Wert für die Reaktion");
define('TXT_GENERULES_ALERT_2', "Sie müssen einen Operator, eine Reaktion und einen Wert für réacion Reaktion");
define('TXT_GENERULES_RULES', "Regeln bereits erstellt :");
define('TXT_GENERULES_HELP_RULES', "OnlineHilfe");

//---------------------------------------------------------
// load.php
//---------------------------------------------------------
define('TXT_LOAD_SITE_TITLE', "Beladen eines Netzwerks");
define('TXT_LOAD_TITLE', "Beladen eines Netzwerks");
define('TXT_LOAD_INSTRUCTION_1', "Bitte laden Sie die benötigten Dateien, um das metabolische Netzwerk aufzubauen");
define('TXT_LOAD_INSTRUCTION_2', "Datei Metaboliten :");
define('TXT_LOAD_FILE_NAME', "Wählen Sie die Dateien zum Upload online :");
define('TXT_LOAD_SFILE', ".sfile Datei");
define('TXT_LOAD_MFILE', ".mfile Datei");
define('TXT_LOAD_RVFILE', ".rvfile Datei");
define('TXT_LOAD_GRFILE', ".grfile Datei");
define('TXT_LOAD_RFILE', ".rfile Datei");
//---------------------------------------------------------
// modify.php
//---------------------------------------------------------
define('TXT_MODIFY_SITE_TITLE', "Änderung eines Netzwerks");
define('TXT_MODIFY_TITLE', "Änderung eines Netzwerks");
define('TXT_MODIFY_INSTRUCTION_1', "Nicht verfügbar im Moment ...");

//---------------------------------------------------------
// options.php
//---------------------------------------------------------
define('TXT_OPTIONS_SITE_TITLE', "Walh der Analyse-Optionen");
define('TXT_OPTIONS_TITLE', "Wahl der Analyse Optionen, um die Software zu starten ");
define('TXT_OPTIONS_INSTRUCTION_1', "Wählen Sie die gewünschten Optionen :  <br/> 
			(Obligatorischen Optionen sind bereits geprüft)  ");
define('TXT_OPTIONS_SAVING_1', "Laden  ");
define('TXT_OPTIONS_SAVING_2', "Ergebnisse anzeigen  ");
define('TXT_OPTIONS_SAVING_3', "Online unter WRET ");
define('TXT_OPTIONS_SAVING_4', "In einer Datei : ");
define('TXT_OPTIONS_SAVING_5', "Dateinamen ");
define('TXT_OPTIONS_ERROR_1', "Art der Warnung / Informationen auf die Berechnung ");
define('TXT_OPTIONS_ERROR_2', "Warning ");
define('TXT_OPTIONS_ERROR_3', "Config ");
define('TXT_OPTIONS_ERROR_4', "Info ");
define('TXT_OPTIONS_ERROR_5', "Fine ");
define('TXT_OPTIONS_ERROR_6', "Finer ");
define('TXT_OPTIONS_ERROR_7', "Finest ");
define('TXT_OPTIONS_SAVING_6', "Format / Record Type  ");
define('TXT_OPTIONS_SAVING_7', "Default ");
define('TXT_OPTIONS_SAVING_8', "Ganze ");
define('TXT_OPTIONS_INPUT_1', "Eingabeparameter ");
define('TXT_OPTIONS_INPUT_STOECH', "Kind of stoechiomotric files ");
define('TXT_OPTIONS_INPUT_STOECH_1', "Flux-analyzer-dir ");
define('TXT_OPTIONS_INPUT_STOECH_2', "Flux-analyzer-files ");
define('TXT_OPTIONS_INPUT_STOECH_3', "Reaction-list ");
define('TXT_OPTIONS_INPUT_STOECH_4', "Excel ");
define('TXT_OPTIONS_INPUT_STOECH_5', "Stoichiometry ");
define('TXT_OPTIONS_INPUT_STOECH_6', "Sbml ");
define('TXT_OPTIONS_INPUT_F_ANALY', "Flux analysor ");
define('TXT_OPTIONS_INPUT_F_ANALY_1', "In ");
define('TXT_OPTIONS_INPUT_F_ANALY_2', "Repertory : ");
define('TXT_OPTIONS_INPUT_F_ANALY_3', "Repertory name : ");
define('TXT_OPTIONS_INPUT_F_ANALY_4', "File ");
define('TXT_OPTIONS_INPUT_F_ANALY_5', "Dateinamen : ");
define('TXT_OPTIONS_INPUT_F_ANALY_6', "File .sfile");
define('TXT_OPTIONS_INPUT_F_ANALY_7', "Dateinamen : ");
define('TXT_OPTIONS_INPUT_F_ANALY_8', "File .rvfile");
define('TXT_OPTIONS_INPUT_F_ANALY_9', "Dateinamen : ");
define('TXT_OPTIONS_COMPRESS', "Compression ");
define('TXT_OPTIONS_COMPRESS_1', "Default ");
define('TXT_OPTIONS_COMPRESS_2', "Off ");
define('TXT_OPTIONS_COMPRESS_3', "Single");
define('TXT_OPTIONS_COMPRESS_4', "Nullspace ");
define('TXT_OPTIONS_COMPRESS_5', "Unique-no-recursion ");
define('TXT_OPTIONS_COMPRESS_6', "Nullspace-no-recursion ");
define('TXT_OPTIONS_OUTPUT', "Ausgabeparameter ");
define('TXT_OPTIONS_OUTPUT_1', "Null");
define('TXT_OPTIONS_OUTPUT_2', "Count ");
define('TXT_OPTIONS_OUTPUT_3', "Text-boolean : ");
define('TXT_OPTIONS_OUTPUT_4', "Dateinamen : ");
define('TXT_OPTIONS_OUTPUT_5', "Text-doubles : ");
define('TXT_OPTIONS_OUTPUT_6', "Dateinamen : ");
define('TXT_OPTIONS_OUTPUT_7', "Binary-boolean : ");
define('TXT_OPTIONS_OUTPUT_8', "Dateinamen : ");
define('TXT_OPTIONS_OUTPUT_9', "Binary-doubles : ");
define('TXT_OPTIONS_OUTPUT_10', "Dateinamen : ");
define('TXT_OPTIONS_OUTPUT_11', "Matlab : ");
define('TXT_OPTIONS_OUTPUT_12', "Dateinamen (keine Verlängerung) ");
define('TXT_OPTIONS_EFMTOOL', "EfmTool Parameter");
define('TXT_OPTIONS_EFM_LINE', "Command Line ");
define('TXT_OPTIONS_EFM_ADJA', "Verfahren adjacency  ");
define('TXT_OPTIONS_EFM_ADJA_1', "Pattern-tree-minzero ");
define('TXT_OPTIONS_EFM_ADJA_2', "Pattern-tree-rank ");
define('TXT_OPTIONS_EFM_THREADS', "Maxime Nummer auf 'threads' ");
define('TXT_OPTIONS_EFM_THREADS_1', "MaxThreads : ");
define('TXT_OPTIONS_EFM_THREADS_2', "Threads Nummer : ");
define('TXT_OPTIONS_EFM_ARITHM', "Arithmetik Nummer  ");
define('TXT_OPTIONS_EFM_ARITHM_1', "Doubles ");
define('TXT_OPTIONS_EFM_ARITHM_2', "Spitzenbeträge ");
define('TXT_OPTIONS_EFM_NORMAL', "Output normalization ");
define('TXT_OPTIONS_EFM_NORMAL_1', "Maximum ");
define('TXT_OPTIONS_EFM_NORMAL_2', "Minimum ");
define('TXT_OPTIONS_EFM_NORMAL_3', "norm2 ");
define('TXT_OPTIONS_EFM_NORMAL_4', "Quadrat ");
define('TXT_OPTIONS_EFM_NORMAL_5', "None ");
define('TXT_OPTIONS_EFM_P_FRAC', "Spitzenbeträge Präzision ");
define('TXT_OPTIONS_EFM_P_FRAC_1', "Präzision : ");
define('TXT_OPTIONS_EFM_VALUE', "Value (bit count, e.g. 128, 256, -1 (infinite)) : ");
define('TXT_OPTIONS_EFM_AUTO_T', "Selbsttest nach der jeder Iteration ");
define('TXT_OPTIONS_EFM_AUTO_T_1', "Ja ");
define('TXT_OPTIONS_EFM_AUTO_T_2', "Nein ");


//---------------------------------------------------------
//help.php
//--------------------------------------------------------

define('TXT_HELP_TITLE', "Online-Hilfe");
define('TXT_HELP_INTRO', "Dies ist eine Beihilfe für die Verwendung von Online-RegEfmtool.");
define('TXT_HELP_FILES', "Lädt vorhandene Dateien von Ihrer Festplatte");
define('TXT_HELP_METABO', "Metaboliten");
define('TXT_HELP_EXTENSION', " Die Verlängerung muss vom Typ 'mfile' sein <br /> Der Inhalt der Form : 'A' 'B' 'C' 'D' 'P' ");
define('TXT_HELP_SUITE', "Der Rest kommt ...");

//---------------------------------------------------------
//help_rule.php
//--------------------------------------------------------
define('TXT_HELP_RULE_TITLE', "Diese Seite ist ein Hilfsmittel, um die Schaffung von Regeln für die Gene");
define('TXT_HELP_RULE_INTRO', "Die Reaktion Enzym-Gens wird durch Boolesche Regeln, wie R2 =! R1 erzeugt.\n
Dies bedeutet, :\n");
define('TXT_HELP_RULE_FLUX_1', "dass die Reaktion R2 muss nicht bringen Fluss wenn R1 enthält chemische Fluss.");
define('TXT_HELP_RULE_FLUX_2', "dass R2 muss eine chemische Fluss machen, wenn R1 nicht zur Verfügung stellt.");
define('TXT_HELP_RULE_1', "Eine Reaktion R kann einen Fluss (R = 1) oder nicht (R = 0) bringen.");
define('TXT_HELP_RULE_2', "Natürlich gibt es die komplexeren Boolean Regeln metabolischer Netzwerke. Sie lässt sich mit den Operatoren NOT, AND und OR werden.");
define('TXT_HELP_RULE_3', "Um den Typ der Aktivität in einer Reaktion anzuzeigen, muss das Präfix '0 ', '1' oder 'f' in der Datei grfile verwendet werden.");
define('TXT_HELP_RULE_4', "Zum Beispiel wenn die Reaktion R7 0 (aktiv) in der Datei grfile, wird diese in der Form 0R7, während Reaktion FR3 voll aktiv angemerkt.");
define('TXT_HELP_RULE_INFO_TITLE', "Konvertierungsregeln in dem Format von regEfmtool verwendet:");
define('TXT_HELP_RULE_INFO_1', "Auf dieser Seite Sie können Regeln für die folgenden Typs Genen erstellen:");
define('TXT_HELP_RULE_R1', "IF R1 = 1 AND R2 = 0 THEN R3=1");
define('TXT_HELP_RULE_R2', "IF R4 = 0 OR R2 = 1 THEN R1 = 0");
define('TXT_HELP_RULE_INFO_2', "Wenn Sie darauf \"Hinzufügen\" klicken, Regeln übersetzt und in die Datei grfile.txt geschrieben werden. Diese Datei kann durch von regEfmtool verwendet werden bei der Berechnung der elementaren Modi.");
define('TXT_HELP_RULE_INFO_3', "Die Übersetzung der oben genannten Regeln ist:");
define('TXT_HELP_RULE_R1_2', "R3 = (1R1 & (!0R2))");
define('TXT_HELP_RULE_R2_2', "R1 = (!((!0R4) | 1R2))");

//---------------------------------------------------------
// copyright.php
//---------------------------------------------------------
define('TXT_COPYRIGHT_TITLE', "Copyright");
define('TXT_COPYRIGHT_CPY', "© Copyright 2013 <br />
			WebRegEfmTool (WRET) ist ein Web-Interface von den Studierenden des Master of Bioinformatics 2 von Bordeaux erstellt: <br />
			Arnaud FRÈCHE, Charlotte HÉRICÉ, Saraï MOLA, Typhaine PAYSAN-LAFOSSE et Joris SANSEN <br />
			Unter der Regie von Frau <a href=\"http://dept-info.labri.fr/~beurton\">Marie BEURTON-AIMAR</a>.  <br />
			Das Ziel dieser Interface ist, um eine ergonomische Arbeitsumgebung Software <a href=\"http://www.biotec.boku.ac.at/regulatoryelementaryfluxmode.html\"> regEfmtool</a> bereitzustellen.");

//---------------------------------------------------------
// file_choose.php
//---------------------------------------------------------
define('TXT_FILE_CHOOSE_SITE_TITLE', "Ergebnisse");
define('TXT_FILE_CHOOSE_TITLE', "Visualisierung der Ergebnisse");
define('TXT_FILE_CHOOSE_SUBTITLE', "Wählen Sie eine Datei");
define('TXT_FILE_CHOOSE', "Datei : ");

//---------------------------------------------------------
// parse_results.php
//---------------------------------------------------------
define('TXT_PARSE_RESULTS_SITE_TITLE', "Ergebnisse");
define('TXT_PARSE_RESULTS_TITLE', "Extraction Ergebnisse");
define('TXT_PARSE_RESULTS_FILE', "Bearbeiteten Datei : ");

//---------------------------------------------------------
// display_results.php
//---------------------------------------------------------
define('TXT_DISPLAY_RESULTS_SITE_TITLE', "Ergebnisse");
define('TXT_DISPLAY_RESULTS_TITLE', "Ergebnisse anzeigen");
define('TXT_DISPLAY_RESULTS_INSTRUCTION_1',"Ausgewählte Datei");
define('TXT_DISPLAY_RESULTS_FILE', "Bearbeiteten Datei : ");
//---------------------------------------------------------
// Fin
//---------------------------------------------------------
?>
