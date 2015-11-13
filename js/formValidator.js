
console.log("formValidator() is called ...");
function formValidator(formName){
	//console.log("hello...");
	var messageArray = "";
	var blankFieldIds = [];
	var msgText = "";
	var requiredFieldLeft = false;
	var elemName = "#"+formName;
	var allInputs = $(elemName).find( ":input" );
	for(var i = 0; i < allInputs.length; i++){
		var elemId = '#'+allInputs[i].id;
		var elemMandatory = $(elemId).attr("mandatory");
		if(elemMandatory === "yes"){
			var elemVal = $(elemId).val();
			if(elemVal == "" || elemVal == undefined){
				requiredFieldLeft = true;
				blankFieldIds.push(elemId);
				msgText = "<br><b> * "+ $(elemId).attr("placehoder") +"</b>";
				messageArray += msgText;

			}else{
				if(allInputs[i].type == "text"){

				}
				else if(allInputs[i].type == "number"  ){
					if($(elemId).attr("numberType") == "mobile"){
						if(elemVal.length != 10  || !(/^[0-9]{1,10}$/.test(elemVal)) ){
							requiredFieldLeft = true;
							msgText = "<br><b> * "+ $(elemId).attr("placehoder") +"</b>";
							messageArray += msgText;
						}
					}
					
				}
				else if(allInputs[i].type == "email"){
					var re = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
					if(!re.test(elemVal)){
						requiredFieldLeft = true;
						blankFieldIds.push(elemId);
						msgText = "<br><b> * "+ $(elemId).attr("placehoder") +"</b>";
						messageArray += msgText;

					}
					
				}
				else if(allInputs[i].type == "date"){
					
				}
				else if(allInputs[i].type == "url"){
					var valid = /((ftp|https?):\/\/)?(www\.)?[a-z0-9\-\.]{3,}\.[a-z]{3}$/
					if(!valid.test(elemVal)){
						requiredFieldLeft = true;
						blankFieldIds.push(elemId);
						msgText = "<br><b> * "+ $(elemId).attr("placehoder") +"</b>";
						messageArray += msgText;

					}
					
				}
			}
		}
	}
	//console.log($(elemName).html());

	if(requiredFieldLeft == true){
		//$("#infoModal").modal("show");
		var noticeText = "<span class='valueRequired'>Note : Following field values are Either left Blank or Have Invalid Input ..</span>"
		//$("#infoModalBody").html(noticeText + messageArray);
		//console.log("messageArray -->",messageArray);
		showWarning(noticeText+ messageArray);
		return false;
	}else{
		return true;
	}
}