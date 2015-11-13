
console.log("common.js is loaded..",window.jQuery);

function showInformation(msg){
	console.log("showInformation() is called ...");
	if(window.jQuery){
		$("#infoModal").modal("show");
	 	$("#infoModalBody").html(msg);
	}else{
		console.log("jQuery is not working in showInformation() @ common.js ..")
	}
}

function showWarning(msg){ 
	console.log("showWarning() is called ...");
	if(window.jQuery){
		$("#warningModal").modal("show");
	 	$("#warningModalBody").html(msg);
	}else{
		console.log("jQuery is not working in showWarning() @ common.js ..")
	}
}

function resetForm(formId){
	console.log("resetForm() is called ...");
	if(window.jQuery){
		var elemId = '#'+formId;
		$(elemId).find( ":input" ).val("");
	}else{
		console.log("jQuery is not working in resetForm() @ common.js ..")
	}

}