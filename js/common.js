console.log("common.js is loaded..",document);



function showInformation(msg){
	console.log("showInformation() is called ...");
	$(document).ready(function(){
	  $("#infoModal").modal("show");
	  $("#infoModalBody").html(msg);

	})
	
}