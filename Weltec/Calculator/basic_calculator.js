var total = 0; // set variable to zero to represent a integer
var TheOperator = ""; // variable is set to empty by default
var number=true; // set boolean value for validation use
var resultDisplay=false;
var hasDP=false;
//uses number to append to object
	function calculate(number) {
		if (resultDisplay) {
		   document.calculator.screen.value = "";// resets screen
		   resultDisplay = false;
		}
		frm = document.calculator.screen
		
		// Check if input has a decimal place already, don't allow a further one if so
		if (number != "." || !hasDP) {
			frm.value = frm.value + number
		}
		if (number == ".") {
		   hasDP = true;
		}
	}
	function calClear() {
	   // clear state, including display an internal state
	   document.calculator.screen.value = "";// resets screen
	   TheOperator = "";
	   total = 0;
	   hasDP = false;
	}

// this retrieves value for operator using opval
	function operator(opval) 	{
	if (TheOperator != "") {
	    // recalculate the result if we already have an operator
		equals()
		total = document.calculator.screen.value// stores value
	}
	else {
		total = document.calculator.screen.value// stores value
		document.calculator.screen.value = ""// resets screen
 	    hasDP = false;
	}
	TheOperator = opval;
	if (TheOperator == "sqrt" || TheOperator == "x^2") {
		// for operations with only a single operand, recalculate now
		equals()
	}
	}

	function equals() {
	CurentDisplayValue = eval(document.calculator.screen.value)// eval is used to seperate values 
	PreviousDisplayValue = eval(total)// retrieves last storage
	if(TheOperator =="+") {
	answer = PreviousDisplayValue + CurentDisplayValue //adds values by using addition
	}
	else if(TheOperator == "x") {
	answer = PreviousDisplayValue * CurentDisplayValue // multiplys values
	}
		else if(TheOperator == "-") {
		answer = PreviousDisplayValue - CurentDisplayValue // subtracts
		}
			else if(TheOperator == "/") {
			answer = PreviousDisplayValue / CurentDisplayValue // divides
				}
				else if(TheOperator == "sqrt"){
				answer = Math.sqrt(PreviousDisplayValue) // calculates the square root
					}
					else if(TheOperator == "x^2"){
					answer = Math.pow(PreviousDisplayValue,2) // add value to the power of the second parameter
						}
	TheOperator = "";
	// validation section, section is checked if is not a number (invalid)
	if(isNaN(answer)){
	number=false;
	answer="Invalid Input";
	}
	else {
		// resultDisplay flag prevents futher input appending to displayed result
		document.calculator.screen.value = answer;// displays answer to output screen
		resultDisplay=true;
	}
}



//help section
function popWesel(){
var popUp;
//Window is called for displaying the help section

popUp=window.open('help.html','newWin','width=300, height=200,scrollbars=yes');


} //	

