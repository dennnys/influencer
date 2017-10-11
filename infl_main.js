jQuery(document).ready(function ($) {

	//$('#infl-form-ig').hide();

	$('#infl-yt-label').on('click', function() {
		//$('#infl-inp-search').attr("placeholder","YouTube input...");
		$('#infl-form-ig').hide();
		$('#infl-form-yt').show();
	});

	$('#infl-it-label').on('click', function() {
		//$('#infl-inp-search').attr("placeholder","Instagram input...");
		$('#infl-form-yt').hide();
		$('#infl-form-ig').show();
	});

	// Instagram	
	//var obj_reponse_ig = JSON.parse(reponse_ig);
	var obj_reponse_ig = reponse_ig;
	console.log(reponse_ig);
	console.log(obj_reponse_ig);

	if(Object.keys(obj_reponse_ig).length !== 0) {
		$('#infl-resultat').html(' ');
		var ig_output = '';
		ig_output += '<div class="col-md-12 row"><div class="col-md-6">Results '+obj_reponse_ig.total+'</div>';
		ig_output += '<div class="col-md-6 text-right">Remaining requests '+obj_reponse_ig.quota_remaining+'</div></div>';
		for(i=0; i<obj_reponse_ig.accounts.length; i++) {
			ig_output += '<div class="card col-md-4 col-lg-3 col-sm-6" ><img class="card-img-top" src="' + obj_reponse_ig.accounts[i].picture + '" alt="Card image cap"><div class="card-body"><h4 class="card-title"><a href="' + obj_reponse_ig.accounts[i].link + '" target="_blank">'+ obj_reponse_ig.accounts[i].fullname +'</a></h4>';
			ig_output +='<div class="card-text">' + obj_reponse_ig.accounts[i].geoLocation[0].title + '</div>';
			ig_output +='<div class="card-text">' + obj_reponse_ig.accounts[i].brandCategories[0].title + '</div>';
			ig_output +='<div class="card-text">' + obj_reponse_ig.accounts[i].followers + ' subscribers</div>';
			ig_output +='<p class="card-text">' + obj_reponse_ig.accounts[i].engagements + ' engagements</p><a href="#" class="btn btn-imm">report...</a></div></div>';
		};
				$('#infl-resultat').html(ig_output);
		if (obj_reponse_ig.accounts.length == 0) {
			$('#infl-resultat').html('<h2>Aucune rezultate pur instant</h2>');
		}

	} 

	// end Instagram


});