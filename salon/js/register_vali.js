function formValidation()
{
var uid = document.registration.id;
var passid = document.registration.password;
var uname = document.registration.username;
var unamef = document.registration.firstname;
var unamel = document.registration.lastname;
var uemail = document.registration.email;
var umsex = document.registration.gender;
var ufsex = document.registration.fsex; if(userid_validation(uid,5,12))
{
if(passid_validation(passid,7,12))
{
if(allLetter(uname))
{
if(allLetter(firstname))
{
if(allLetter(lastname))
{    
if(ValidateEmail(uemail))
{
if(validsex(umsex,ufsex))
{
}
}
}
} 
}
}
}
return false;

} function userid_validation(uid,mx,my)
{
var uid_len = uid.value.length;
if (uid_len == 0 || uid_len >= my || uid_len < mx)
{
alert("User Id should not be empty / length be between "+mx+" to "+my);
uid.focus();
return false;
}
return true;
}
function passid_validation(passid,mx,my)
{
var passid_len = passid.value.length;
if (passid_len == 0 ||passid_len >= my || passid_len < mx)
{
alert("Password should not be empty / length be between "+mx+" to "+my);
passid.focus();
return false;
}
return true;
}
function allLetter(uname)
{ 
var letters = /^[A-Za-z]+$/;
if(uname.value.match(letters))
{
return true;
}
else
{
alert('Username must have alphabet characters only');
uname.focus();
return false;
}
}

function allLetter(unamef)
{ 
var letters = /^[A-Za-z]+$/;
if(unamef.value.match(letters))
{
return true;
}
else
{
alert('Username must have alphabet characters only');
unamef.focus();
return false;
}
}

function allLetter(unamel)
{ 
var letters = /^[A-Za-z]+$/;
if(unamel.value.match(letters))
{
return true;
}
else
{
alert('Username must have alphabet characters only');
unamel.focus();
return false;
}
}

function ValidateEmail(uemail)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(uemail.value.match(mailformat))
{
return true;
}
else
{
alert("You have entered an invalid email address!");
uemail.focus();
return false;
}
} function validsex(umsex,ufsex)
{
x=0;

if(umsex.checked) 
{
x++;
} if(ufsex.checked)
{
x++; 
}
if(x==0)
{
alert('Select Male/Female');
umsex.focus();
return false;
}
else
{
alert('Form Succesfully Submitted');
window.location.reload()
return true;
}
}