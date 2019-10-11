//This library function ValidateEmail is from https://www.w3resource.com/javascript/form/email-validation.php 
function ValidateEmail(mail) 
{
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
  {
    return (true)
  }
    alert("You have entered an invalid email address!")
    return (false)
}


function reset() {
  var toys = document.getElementById("toys");
  var treats = document.getElementById("treats");
  var trees = document.getElementById("trees");
  var username = document.getElementById("username");
  var password = document.getElementById("password");

toys.value = "";
treats.value = "";
trees.value = "";
username.value = "";
password.value = "";

document.getElementsByName("shipping").forEach(element => element.checked = false);

}

function Validate() {

  var toys = document.getElementById("toys");
  var treats = document.getElementById("treats");
  var trees = document.getElementById("trees");
  var username = document.getElementById("username");
  var password = document.getElementById("password");

//validate username/email
 if (!ValidateEmail(username.value)){
 return(false);
}

//check if anything is blank
  if ( toys.value.length == 0 || treats.value.length == 0 || trees.value.length == 0 || 
  username.value.length == 0 || password.value.length == 0) {
  alert("All fields must have a value!");
  return (false);
}

//check to make sure a radio button is pressed. x returns true if any element is checked.
//Remember getelementsbyname returns a nodelist, array.from turns it into a proper array
//so THEN some will work correctly
  var x = Array.from(document.getElementsByName("shipping")).some(element => element.checked);
  if (!x){
 alert("Select a shipping option!");                                                                     return(false);                                                                                         }


//Check for valid order quantities (positive int)
var toyNum = parseInt(toys.value);
var treatNum = parseInt(treats.value);
var treeNum = parseInt(trees.value);
 if ( isNaN(toyNum) || toyNum < 0 || isNaN(treatNum) || treatNum < 0 || isNaN(treeNum) || treenum < 0) {
 alert("Not a valid order input!")
 return (false);
}

return true;
}
