var NewModelString;
function submitNewCar()
{
    var NewModel = document.getElementById("NewModel");
    var NewSub = document.getElementById("NewSub");
    var NewColor = document.getElementById("NewColor");
    var NewInterior = document.getElementById("NewInterior");
    var NewMPG = document.getElementById("NewMPG");
    var NewTrans = document.getElementById("NewTrans");
    var NewBody = document.getElementById("NewBody");
    var NewSmartReady = document.getElementById("NewSmartReady");
    var NewCup = document.getElementById("NewCup");
    var NewGPS = document.getElementById("NewGPS");
    var NewKeyless = document.getElementById("NewKeyless");
    var NewAlarm = document.getElementById("NewAlarm");
    var NewYear = document.getElementById("NewYear");
    var NewVIN = document.getElementById("NewVIN");
    var NewPic = document.getElementById("NewPic");
    
    
    
    var NewModel = NewSub.options[NewModel.selectedIndex].value;
    var NewSubString = NewSub.options[NewSub.selectedIndex].value;
    var NewColorString = NewColor.options[NewColor.selectedIndex].value;
    var NewInteriorString = NewInterior.options[NewInterior.selectedIndex].value;
    var NewMPGString = NewMPG.value;
    var NewTransString = NewTrans.options[NewTrans.selectedIndex].value;
    var NewBodyString = NewBody.options[NewBody.selectedIndex].value;
    var NewGPSString = NewGPS.checked;
    var NewSmartReadyString = NewSmartReady.checked;
    var NewCupString = NewCup.value;
    var NewKeylessString = NewKeyless.checked;
    var NewAlarmString = NewAlarm.checked;
    var NewYearString = NewYear.value;
    var NewVINString = NewVIN.value;
    
    
    
    
    
    if (NewSmartReadyString)
    {
        NewSmartReadyString = "Yes";
    }
    else
    {
        NewSmartReadyString = "No";
    }
    
    if (NewKeylessString)
    {
        NewKeylessString = "Yes";
    }
    else
    {
        NewKeylessString = "No";
    }
    
    if (NewAlarmString)
    {
        NewAlarmString = "Yes";
    }
    else
    {
        NewAlarmString = "No";
    }
    
    
    console.log("%s",NewModelString);
}

function readImage(input)
{
    if ( input.files && input.files[0] )
    {
        var FR = new FileReader();
        FR.onload = function(e)
        {
             NewModelString = e.target.result;
        };       
        FR.readAsDataURL( input.files[0] );
    }
}

$("#NewPic").change(function()
{
    readImage(this);
});