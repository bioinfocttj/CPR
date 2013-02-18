function choixParam(formulaire) {

  var valeur1 = "";
  var valeur2 = "";
  var valeur3 = "";
  var valeur4 = "";
  var valeur5 = "";
  var valeur51 = "";
  var valeur52 = "";
  var valeur53 = "";
  var valeur54 = "";
  var valeur6 = "";
  var valeur7 = "";
  var valeur8 = "";
  var valeur9 = "";
  var valeur10 = "";
  var valeur11 = "";
  var valeur12 = "";
  var valeur13 = "";
  var valeur14 = "";

  // Test
  // if (formulaire.choix[0].checked) { 
  //   valeur = " -" + formulaire.choix[0].value); 
  // }
  // if (formulaire.choix[1].checked) { 
  //   valeur = " -" + formulaire.choix[1].value); 
  // }
  // if (formulaire.choix[2].checked) { 
  //   valeur = " -" + formulaire.choix[2].value); 
  // }
 
  var commande = "java -Xmx1G -jar ../regEfmTool/regEfmtool.jar";

  // SAVE
  // Display
  if (formulaire.choix1[0].checked) { 
    valeur1 = " -" + formulaire.choix1[0].value; 
    commande = commande + valeur1;
  }
  else if (formulaire.choix1[1].checked) { 
    var nom1 = document.getElementById('texte1').value;
    valeur1 = " -" + formulaire.choix1[1].value + " " + nom1; 
    commande = commande + valeur1;
  }
  // Errors
  if (formulaire.choix2[0].checked) { 
    valeur2 = " -" + formulaire.choix2[0].value; 
    commande = commande + valeur2;
  }
  else if (formulaire.choix2[1].checked) { 
    valeur2 = " -" + formulaire.choix2[1].value; 
    commande = commande + valeur2;
  }
  else if (formulaire.choix2[2].checked) { 
    valeur2 = " -" + formulaire.choix2[2].value; 
    commande = commande + valeur2;
  }
  else if (formulaire.choix2[3].checked) { 
    valeur2 = " -" + formulaire.choix2[3].value; 
    commande = commande + valeur2;
  }
  else if (formulaire.choix2[4].checked) { 
    valeur2 = " -" + formulaire.choix2[4].value; 
    commande = commande + valeur2;
  }
  else if (formulaire.choix2[5].checked) { 
    valeur2 = " -" + formulaire.choix2[5].value; 
    commande = commande + valeur2;
  }
  // Format
  if (formulaire.choix3[0].checked) { 
    valeur3 = " -" + formulaire.choix3[0].value;  
    commande = commande + valeur3;
  }
  else if (formulaire.choix3[1].checked) { 
    valeur3 = " -" + formulaire.choix3[1].value; 
    commande = commande + valeur3;
  }

  // INPUT
  // Type
  if (formulaire.choix4[0].checked) { 
    valeur4 = " -" + formulaire.choix4[0].value; 
    commande = commande + valeur4;
  }
  else if (formulaire.choix4[1].checked) { 
    valeur4 = " -" + formulaire.choix4[1].value; 
    commande = commande + valeur4;
  }
  else if (formulaire.choix4[2].checked) { 
    valeur4 = " -" + formulaire.choix4[2].value; 
    commande = commande + valeur4;
  }
  else if (formulaire.choix4[3].checked) { 
    valeur4 = " -" + formulaire.choix4[3].value; 
    commande = commande + valeur4;
  }
  // else if (formulaire.choix4[4].checked) { 
  //   valeur4 = " -" + formulaire.choix4[4].value; 
  //   commande = commande + valeur4;
  // }
  // else if (formulaire.choix4[5].checked) { 
  //   valeur4 = " -" + formulaire.choix4[5].value; 
  //   commande = commande + valeur4;
  // }
  // Analysor
  // var nom5 = document.getElementById('stoich').value;
  // valeur5 = " -" + formulaire.stoich.id + " " + nom5; 
  // commande = commande + valeur5;

  // var nom51 = document.getElementById('meta').value;
  // valeur51 = " -" + formulaire.meta.id + " " + nom51; 
  // commande = commande + valeur51;
  
  // var nom52 = document.getElementById('rev').value;
  // valeur52 = " -" + formulaire.rev.id + " " + nom52; 
  // commande = commande + valeur52;
  
  // var nom53 = document.getElementById('generule').value;
  // valeur53 = " -" + formulaire.generule.id + " " + nom53; 
  // commande = commande + valeur53;
  
  // var nom54 = document.getElementById('reac').value;
  // valeur54 = " -" + formulaire.reac.id + " " + nom54; 
  // commande = commande + valeur54;
  
  // if (formulaire.choix51.checked) { 
  //   var nom5 = document.getElementById('texte50').value;
  //   valeur5 = " -" + formulaire.choix51.value + " " + nom5; 
  //   commande = commande + valeur5;
  // }
  // if (formulaire.choix52.checked) { 
  //   var nom5 = document.getElementById('texte5').value;
  //   valeur5 = " -" + formulaire.choix52.value + " " + nom5; 
  //   commande = commande + valeur5;
  // }
  // if (formulaire.choix53.checked) { 
  //   var nom5 = document.getElementById('texte51').value;
  //   valeur5 = " -" + formulaire.choix53.value + " " + nom5; 
  //   commande = commande + valeur5;
  // }
  // if (formulaire.choix54.checked) { 
  //   var nom5 = document.getElementById('texte52').value;
  //   valeur5 = " -" + formulaire.choix54.value + " " + nom5; 
  //   commande = commande + valeur5;
  // }
  // if (formulaire.choix55.checked) { 
  //   var nom5 = document.getElementById('texte53').value;
  //   valeur5 = " -" + formulaire.choix55.value + " " + nom5; 
  //   commande = commande + valeur5;
  // }
  
  // COMPRESSION
  if (formulaire.choix6[0].checked) { 
    valeur6 = " -" + formulaire.choix6[0].value; 
    commande = commande + valeur6;
  }
  else if (formulaire.choix6[1].checked) { 
    valeur6 = " -" + formulaire.choix6[1].value; 
    commande = commande + valeur6;
  }
  else if (formulaire.choix6[2].checked) { 
    valeur6 = " -" + formulaire.choix6[2].value; 
    commande = commande + valeur6;
  }
  else if (formulaire.choix6[3].checked) { 
    valeur6 = " -" + formulaire.choix6[3].value; 
    commande = commande + valeur6;
  }
  else if (formulaire.choix6[4].checked) { 
    valeur6 = " -" + formulaire.choix6[4].value; 
    commande = commande + valeur6;
  }
  else if (formulaire.choix6[5].checked) { 
    valeur6 = " -" + formulaire.choix6[5].value; 
    commande = commande + valeur6;
  }

  // OUTPUT
  if (formulaire.choix7[0].checked) { 
    valeur7 = " -" + formulaire.choix7[0].value; 
    commande = commande + valeur7;
  }
  else if (formulaire.choix7[1].checked) { 
    valeur7 = " -" + formulaire.choix7[1].value; 
    commande = commande + valeur7;
  }
  else if (formulaire.choix7[2].checked) { 
    var nom7 = document.getElementById('texte7').value;
    valeur7 = " -" + formulaire.choix7[2].value + " " + nom7; 
    commande = commande + valeur7;
  }
  else if (formulaire.choix7[3].checked) { 
    var nom7 = document.getElementById('texte71').value;
    valeur7 = " -" + formulaire.choix7[3].value + " " + nom7; 
    commande = commande + valeur7;
  }
  else if (formulaire.choix7[4].checked) { 
    var nom7 = document.getElementById('texte72').value;
    valeur7 = " -" + formulaire.choix7[4].value + " " + nom7; 
    commande = commande + valeur7;
  }
  else if (formulaire.choix7[5].checked) { 
    var nom7 = document.getElementById('texte73').value;
    valeur7 = " -" + formulaire.choix7[5].value + " " + nom7; 
    commande = commande + valeur7;
  }
  else if (formulaire.choix7[6].checked) { 
    var nom7 = document.getElementById('texte74').value;
    valeur7 = " -" + formulaire.choix7[6].value + " " + nom7; 
    commande = commande + valeur7;
  }
  
  // PARAMETERS
  // Command
  if (formulaire.choix8.checked) { 
    valeur8 = " -" + formulaire.choix8.value; 
    commande = commande + valeur8;
  }
  // Adjency
  if (formulaire.choix9[0].checked) { 
    valeur9 = " -" + formulaire.choix9[0].value; 
    commande = commande + valeur9;
  }
  else if (formulaire.choix9[1].checked) { 
    valeur9 = " -" + formulaire.choix9[1].value; 
    commande = commande + valeur9;
  }
  // Threads
  if (formulaire.choix10.checked) { 
    var nom10 = document.getElementById('texte10').value;
    valeur10 = " -" + formulaire.choix10.value + " " + nom10; 
    commande = commande + valeur10;
  }
  // Arithmetic
  if (formulaire.choix11[0].checked) { 
    valeur11 = " -" + formulaire.choix11[0].value; 
    commande = commande + valeur11;
  }
  else if (formulaire.choix11[1].checked) { 
    valeur11 = " -" + formulaire.choix11[1].value; 
    commande = commande + valeur11;
  }
  // Normalize
  if (formulaire.choix12[0].checked) { 
    valeur12 = " -" + formulaire.choix12[0].value; 
    commande = commande + valeur12;
  }
  else if (formulaire.choix12[1].checked) { 
    valeur12 = " -" + formulaire.choix12[1].value; 
    commande = commande + valeur12;
  }
  else if (formulaire.choix12[2].checked) { 
    valeur12 = " -" + formulaire.choix12[2].value; 
    commande = commande + valeur12;
  }
  else if (formulaire.choix12[3].checked) { 
    valeur12 = " -" + formulaire.choix12[3].value; 
    commande = commande + valeur12;
  }
  else if (formulaire.choix12[4].checked) { 
    valeur12 = " -" + formulaire.choix12[4].value; 
    commande = commande + valeur12;
  }
  // Fraction
  if (formulaire.choix13.checked) { 
    var nom13 = document.getElementById('texte13').value;
    valeur13 = " -" + formulaire.choix13.value + " " + nom13; 
    commande = commande + valeur13;
  }
  // Self-test
   if (formulaire.choix14[0].checked) { 
    valeur14 = " -" + formulaire.choix14[0].value; 
    commande = commande + valeur14;
  }
  else if (formulaire.choix14[1].checked) { 
    valeur14 = " -" + formulaire.choix14[1].value; 
    commande = commande + valeur14;
  }
  alert(commande);
  document.cookie="commande="+commande;
  window.location.assign('load_files.php');
}

