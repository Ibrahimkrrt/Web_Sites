function admSelectCheck(nameSelect)
{
    console.log(nameSelect);
    if(nameSelect){
        admOptionValue = document.getElementById("Add").value;
        if(admOptionValue == "Add-S"){
            document.getElementById("Hide-Show-Add-S").style.display = "block";
            document.getElementById("Hide-Show-Add-T").style.display = "none";
            document.getElementById("Hide-Show-Vew-S").style.display = "none";
            document.getElementById("Hide-Show-Vew-T").style.display = "none";
        }
        else if(admOptionValue == "Add-T"){
            document.getElementById("Hide-Show-Add-T").style.display = "block";
            document.getElementById("Hide-Show-Add-S").style.display = "none";
            document.getElementById("Hide-Show-Vew-S").style.display = "none";
            document.getElementById("Hide-Show-Vew-T").style.display = "none";
            
        }
        else if(admOptionValue == "Vew-S"){
            document.getElementById("Hide-Show-Vew-S").style.display = "block";
            document.getElementById("Hide-Show-Add-S").style.display = "none";
            document.getElementById("Hide-Show-Add-T").style.display = "none";
            document.getElementById("Hide-Show-Vew-T").style.display = "none";
        }
        else if(admOptionValue == "Vew-T"){
            document.getElementById("Hide-Show-Vew-T").style.display = "block";
            document.getElementById("Hide-Show-Add-T").style.display = "none"; 
            document.getElementById("Hide-Show-Vew-S").style.display = "none";
            document.getElementById("Hide-Show-Add-S").style.display = "none"; 
        }
        else {
            document.getElementById("Hide-Show-Add-S").style.display = "none";
            document.getElementById("Hide-Show-Add-T").style.display = "none";
            document.getElementById("Hide-Show-Vew-S").style.display = "none";
            document.getElementById("Hide-Show-Vew-T").style.display = "none";
        }
    }
    else{
        document.getElementById("Hide-Show-Add-S").style.display = "none";
        document.getElementById("Hide-Show-Add-T").style.display = "none";
        document.getElementById("Hide-Show-Vew-S").style.display = "none";
        document.getElementById("Hide-Show-Vew-T").style.display = "none";
    }
}

function MdlSelectCheck(nameSelect)
{
    console.log(nameSelect);
    if(nameSelect){
        admOptionValue = document.getElementById("Mdl").value;
        if(admOptionValue == "Add-M"){
            document.getElementById("Hide-Show-Add-M").style.display  = "block";
            document.getElementById("Hide-Show-Add-EM").style.display = "none";
            document.getElementById("Hide-Show-Vew-M").style.display  = "none";
            document.getElementById("Hide-Show-Vew-EM").style.display = "none";
        }
        else if(admOptionValue == "Add-EM"){
            document.getElementById("Hide-Show-Add-M").style.display  = "none";
            document.getElementById("Hide-Show-Add-EM").style.display = "block";
            document.getElementById("Hide-Show-Vew-M").style.display  = "none";
            document.getElementById("Hide-Show-Vew-EM").style.display = "none";
            
        }
        else if(admOptionValue == "Vew-M"){
            document.getElementById("Hide-Show-Add-M").style.display  = "none";
            document.getElementById("Hide-Show-Add-EM").style.display = "none";
            document.getElementById("Hide-Show-Vew-M").style.display  = "block";
            document.getElementById("Hide-Show-Vew-EM").style.display = "none";
        }
        else if(admOptionValue == "Vew-EM"){
            document.getElementById("Hide-Show-Add-M").style.display  = "none";
            document.getElementById("Hide-Show-Add-EM").style.display = "none";
            document.getElementById("Hide-Show-Vew-M").style.display  = "none";
            document.getElementById("Hide-Show-Vew-EM").style.display = "block";
        }
        else {
            document.getElementById("Hide-Show-Add-M").style.display  = "none";
            document.getElementById("Hide-Show-Add-EM").style.display = "none";
            document.getElementById("Hide-Show-Vew-M").style.display  = "none";
            document.getElementById("Hide-Show-Vew-EM").style.display = "none";
        }
    }
    else{
        document.getElementById("Hide-Show-Add-M").style.display  = "none";
        document.getElementById("Hide-Show-Add-EM").style.display = "none";
        document.getElementById("Hide-Show-Vew-M").style.display  = "none";
        document.getElementById("Hide-Show-Vew-EM").style.display = "none";
    }
}
