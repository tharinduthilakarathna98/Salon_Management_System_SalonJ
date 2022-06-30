function myFunction(btn) {
    if (btn == 'haircut'){
		document.getElementById("images/haircutting.jpg").src="img/Hp.jpg";
		
	}
	else if(btn == 'hairdressing'){
		document.getElementById("images/hairdressing.jpg").src="img/dell.jpg";
		
	}
	else if(btn == 'facial'){
		document.getElementById("images/facial.jpg").src="img/asus.jpg";
		
	}
	else if(btn == 'massage'){
		document.getElementById("images/massage.jpg").src="img/asus.jpg";
		
	}
	else if(btn == 'tattoo'){
		document.getElementById("images/tattoo.jpg").src="img/asus.jpg";
		
	}
	else if(btn == 'shaving'){
		document.getElementById("images/barber.jpg").src="img/asus.jpg";
		
	}
	else if(btn == 'wax'){
		document.getElementById("images/body-waxing.jpg").src="img/asus.jpg";
		
	}
	else{
		alert("Invalid");
	}
}