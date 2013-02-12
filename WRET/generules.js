function choice(f, val){ 
	for(var i=0; i<f.length;i++) {
		if (i!=0 && f[i].selected){
			select.push(f[i].value);
		}
	}
	
	var p=val+1;
	var id2="box"+p;
	if (val==num-1){
		mytab2=mytab.slice(0);

		for(var z=0; z<mytab.length; z++){
			for (var m=0; m<select.length;m++){
				if(mytab[z]==select[m]){
					for (var k=0; k<mytab2.length;k++){
						if (mytab[z]==mytab2[k]){
							mytab2.splice(k,1);
						}
					}
				}
			}
		}
		for(var z=0; z<mytab2.length; z++){
			document.getElementById(id2).innerHTML+="<option>"+mytab2[z]+"</option>";
		}
	}
	else if (val<num){
		for(var z=0; z<mytab.length; z++){
			document.getElementById(id2).innerHTML+="<option>"+mytab[z]+"</option>";
		}
	}
	else{
		return;
	}

}

