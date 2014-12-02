var isLoggedIn = false;

window.onload = function()
{
    jQuery('#datetimepicker').datetimepicker();
};

function NewUserSubmit()
{
    alert("Congratulations on creating an account");
}
function signIn()
{
    var email = document.getElementById("email").value;
    if (email == "student@my.utsa.edu")
    {
        $('#loginArea').html('<label>Welcome!</label><button type="button" class="btn btn-danger" onclick="logout()">Logout</button>');
        isLoggedIn = true;
    }
    else if (email == "jim@jims.com")
    {
        window.location.replace('inventory.php');
    }
    else
    {
        alert("Your username and password do not match");    
    }
}
function logout()
{
   window.location.replace('index.php');
}
function reserve()
{
    var dayEle = document.getElementById("day");
    var monthEle = document.getElementById("month");
    
    var day = dayEle.options[dayEle.selectedIndex].value;
    var month = monthEle.options[monthEle.selectedIndex].value;
    
    if (isLoggedIn)
    {
        alert("You are scheduled for "+month+" "+ day);
    }
    else
    {
        alert("You must be logged in to schedule a visit");
    }
}
