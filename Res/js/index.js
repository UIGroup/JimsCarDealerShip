var oldHTML;
function NewUserSubmit()
{
    alert("Congradulations on creating a account");
}
function signIn()
{
    var email = document.getElementById("email").value;
    if (email == "student@my.utsa.edu")
    {
        oldHTML = $('#loginArea').html;
        $('#loginArea').html('<label>Welcome Adam!</label><button type="button" class="btn btn-danger" onclick="logout()">Logout</button>');
        
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
   $('#loginArea').html(oldHTML);
}