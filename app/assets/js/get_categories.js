$(document).ready(function(){

	$.ajax({
		"url": ,
		"type": ,
		"data": {},
		"success": showCatergories

	});

	function showCategories(jsondata) {
		if (jsondata !== "") {
			const categories = JSON.parse(jsondata);
			let listItems = ``;
			categories.forEach(category, function(){
				listItems += `
					<li> id="${categories.id}"> ${categories.category_name}</li>
				`;
			});
			$("#category-container").html(listItems);
		}
	}


})