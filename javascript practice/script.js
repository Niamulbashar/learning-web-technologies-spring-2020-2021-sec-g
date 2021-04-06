



function NameValidation()
{
	let data= document.getElementById('name').value;

	if(data == ''){
		document.getElementById('m1').innerHTML = 'Empty name field ';		
	}
	else if(data.length <2){
		document.getElementById('m1').innerHTML = 'Name required two words';	
	}

	else if (data >=0 && data <=9){
		document.getElementById('m1').innerHTML = 'Name is invalid';
	}
	
	else if(data >='a' && data <='z' || data>='A' && data <='Z' || data == '.' || data == '-'){
		document.getElementById('m1').innerHTML = data;
     }
    
    else{
		document.getElementById('m1').innerHTML = 'Name is invalid';
	}
	

}


function EmailValidation()
{
	let data= document.getElementById('email').value;

	if(data == ''){
		document.getElementById('m3').innerHTML = 'Empty Name field ';		
	}

	else if( data.includes("@")){
		document.getElementById('m3').innerHTML =" valid";
		     }
	else if( data.includes(".com")){
		document.getElementById('m3').innerHTML = "valid";
		     }	
         
      else{
		document.getElementById('m3').innerHTML = 'Email is invalid !';
	}

}
function GenderValidation()
{

 let male = document.getElementById('male');
 let female = document.getElementById('female');
 let other = document.getElementById('other');

     if(male.checked ==true ){
		document.getElementById('m2').innerHTML = male.value;		
	}
    else if(female.checked ==true){
		document.getElementById('m2').innerHTML = female.value;		
	}
	
     else{
		document.getElementById('m2').innerHTML = other.value;
	}

}