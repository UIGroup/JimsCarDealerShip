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
        takeOff(2);
        takeOff(6);
        takeOff(12);
        takeOff(13);
        takeOff(14);
        takeOff(15);
        takeOff(16);
        takeOff(17);
        takeOff(18);
        takeOff(19);
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