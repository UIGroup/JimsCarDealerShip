function takeOff(id)
{
    document.getElementById(id).parentNode.removeChild(document.getElementById(id));
}
function reserve()
{
    var dayEle = document.getElementById("day");
    var monthEle = document.getElementById("month");
    
    var day = dayEle.options[dayEle.selectedIndex].value;
    var month = monthEle.options[monthEle.selectedIndex].value;
    
    alert("You are scheduled for a test drive on "+month+" "+ day);
}
function search(){
    var searchString = $("#searchBar").val();
    if(searchString.toUpperCase() === "BLUE FIT")
    {
        alert("Awesome!");
    }
}
$(function()
{
    $("#searchBar").keypress(function (e)
    {
        if (e.keyCode == 13)
        {
            search();
        }
    });
});