const btnName = document.querySelector("#input");


    if(btnName == null){
        document.getElementById("btnSubmit").disabled = false; 
    }
    else{
        console.log("ERROR")
        document.getElementById("btnSubmit").disabled = true; 

    }