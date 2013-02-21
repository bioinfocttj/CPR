/*
This file is part of Foobar.

    Foobar is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    Foobar is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Foobar.  If not, see <http://www.gnu.org/licenses/>.*/

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

