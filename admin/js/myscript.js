function validation(){
 
    if(checkfname()==false || checkgender()==false){
    
        return false;
    }
    return true;   
}

function checkfname(){
    var fname= document.getElementById("fname").value;
    if(fname=="" || fname.length <3){
      document.getElementById("fnameerror").innerHTML=
      "name must be mentioned";
        return false;
    }
    else{
        return true;
    }
}

function checkgender(){
  if(document.getElementById("gender").checked==false)
  {
    document.getElementById("gendererror").innerHTML=
    "gender must be specified";
    return false;
  }
  return true; 

}

function fetchUsers(){
var email = document.getElementById("email").value;

var xttp= new XMLHttpRequest();
xttp.onreadystatechange = function(){
  if(this.readyState == 4 && this.status== 200)
  {
 document.getElementById("print").innerHTML=this.responseText;
  }
}



xttp.open("POST", "http://localhost/secg/admin/control/searchuser.php", true);
xttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xttp.send("email="+email);



}