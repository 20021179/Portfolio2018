// JavaScript Document
var dayName= Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

var monName = new Array("January", "February", "March", "April ","May", "June", "July", "August ", "September ","October", "November", "December");
var now = new Date();

//function validateForm(contact)
//{
	//if(document.forms.contact.fullName.value=="")
	//{
		//alert("Please enter your full name.");
		//document.forms.contact.fullName.focus();
		//return false;
	//}
	
	//if(document.forms.contact.phoneNum.value=="")
	//{
		//alert("Please enter your phone number.");
		//document.forms.contact.phoneNum.focus();
		//return false;
	//}
	
	//if(document.forms.contact.email.value="")
	//{
		
		//alert("Please enter your email address.");
		//document.forms.contact.email.focus();
		//return false;
	//}
	
	
//}
		
// checks name, address, email and phone fields
function checkData(formObj){
	if(emptyField(formObj.first)){
		formObj.first.focus();
		alert("Please enter a first Name!");
		return false;
	}
	else if(emptyField(formObj.last)){
		formObj.last.focus();
		alert("Please enter a last name!");
		return false;
	}
	
	
	
	else if(checkEmail(formObj.email)){
		formObj.email.focus();
		alert("Please enter an email!");
		return false;
	}
	
	else{
		return true;
	}
}
		
		
function emptyField(fieldObj){
	if(fieldObj.value.length==0){
		return true;
	}
	var i;
	for(i=0; i<fieldObj.value.length; i++){
		var ch = fieldObj.value.charAt(i);
		if(ch !=''&& ch !='\t'){
			return false;
		}
	}
	return true;
}
		
//-------------------------------------------------------------------------------------------------//

	//checks if email is valid

function checkEmail(fieldObj){
	var chEmail=fieldObj.value;
	if(chEmail.length<7){
		return true;
	}
	else if((chEmail.indexOf("@")==-1)&&(chEmail.indexOf(".")==-1)){
		return true;
	}
	else{
		return false; 
	}
}


//------------------------------------------------------------End hiding script from older browsers
function newWindow(){
	
	signsWindow = window.open("images/safety1.jpg", "signsWin", "width=303,height=404")
	
}
function newWindow2(){
	warningsWindow = window.open("images/safety2.jpg", "warningsWin", "width=307,height=404")
}