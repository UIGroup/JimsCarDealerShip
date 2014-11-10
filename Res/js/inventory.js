var ImageString;
var reply;
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
    
    
    
    var NewModelString = NewModel.options[NewModel.selectedIndex].value;
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
    if(NewGPSString)
    {
        NewGPSString = "Yes";
    }
    else
    {
        NewGPSString = "No";
    }
    var formData =
    {
        model:NewModelString,
        sub:NewSubString,
        color:NewColorString,
        interior:NewInteriorString,
        MPG:NewMPGString,
        trans:NewTransString,
        body:NewBodyString,
        GPS:NewGPSString,
        smartready:NewSmartReadyString,
        cup:NewCupString,
        keyless:NewKeylessString,
        alarm:NewAlarmString,
        year:NewYearString,
        VIN:NewVINString,
        pic: ImageString,
    };
    $.ajax(
    {
        url:"./Scripts/NewCar.php",
        type: "POST",
        data : formData,
        
        success:function(result)
        {
            reply = JSON.parse(result);
            if (reply.status == "Successful")
            {
                alert("New car submitted");
                NewVIN.value = "";
            }
            else
            {
                alert("New car submission failed");
            }
        }
        
    });
}

function readImage(input)
{
    if ( input.files && input.files[0] )
    {
        var FR = new FileReader();
        FR.onload = function(e)
        {
             ImageString = e.target.result;
        };       
        FR.readAsDataURL( input.files[0] );
    }
}

$("#NewPic").change(function()
{
    readImage(this);
});