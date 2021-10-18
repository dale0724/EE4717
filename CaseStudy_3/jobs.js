
function init(){
    var epattern="[a-z0-9.-]+@([a-z0-9]+\\.){1,3}[a-z]{2,3}$";
    var namePattern = "^[a-zA-Z\\s]+$"
    var nameFiled=document.getElementById("myName");
    var mailField=document.getElementById("myEmail");
    var dateField=document.getElementById("myStartDate")
    var expField=document.getElementById("myExperience");
    var form = document.getElementById("myForm")
    var keyTimer
    nameFiled.oninput = function(){
        clearTimeout(keyTimer)
        if(nameFiled.value){
            keyTimer = setTimeout(()=>{if(!nameFiled.value.match(namePattern)){
                alert("The name field contains alphabet characters and character spaces.")
            }},1000)
        }
    }
    mailField.oninput = function(){
        clearTimeout(keyTimer)
        if(mailField.value){
            console.log(mailField.value.match(epattern))
            keyTimer = setTimeout(()=>{if(!mailField.value.match(epattern)){
                alert("email wrong")
            }},2000)
        }
    }
    dateField.oninput = function(){
        date = new Date(dateField.value)
        today = new Date()
        console.log(date)
        console.log("today:"+today)
        if(date <= today){
            alert("wrong date")
        }
    }
    form.onsubmit=function(){
        date = new Date(dateField.value)
        today = new Date()
        if(nameFiled.value=="" || !nameFiled.value.match(namePattern))
	{
		alert('Please Enter Valid Name');
		return false;
	}
	else if(mailField.value==""||!(mailField.value.match(epattern)))
	{
		alert('Please Enter valid email');
		return false;
	}
    else if(date <= today){
        alert("wrong date")
        return false
    }
	else if(expField.value=="")
	{
		alert('Please Enter Experience');
		return false;
	}
	return true;
    }
    

}

window.onload = init
