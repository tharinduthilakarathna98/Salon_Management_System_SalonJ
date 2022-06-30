
function checkPasswords(){
  if(document.getElementById("pass1").value != document.getElementById("pass2").value){
        alert("Passwards are not match");
    return false;
  }
  else{
    alert("submitted!");
    return true;
  }
}
  
