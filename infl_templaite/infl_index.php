	<div class="influencer container">

<?php 
	require_once dirname(__FILE__) . "/infl_form_search.php" ;
 ?>
<?php  
 	echo ("<script>var reponse_ig = '".$reponse_ig."';</script>");
?>
		<div class="row">
			<div class="infl-sort col-md-8">
				<div class="form-group">
					<label for="">Sort:</label>
					<select name="infl-category" id="infl-category" class="form-control col-md-2">
					  <option value="1">Name</option>
					  <option value="2">Subscribers</option>
					  <option value="3">Videos</option>
					  <option value="4">Date</option>
					</select>
					<select name="infl-category" id="infl-category" class="form-control col-md-2">
					  <option value="1">UP</option>
					  <option value="2">DOWN</option>
					</select>
				</div>
			</div>
			<div class="infl-export col-md-4">
				export result: 
				<a href="#">PDF</a> - 
				<a href="#">CSV</a>
			</div>
		</div>

		<div class="row" id="infl-resultat">
			<div class="card col-md-4 col-lg-3 col-sm-6" >
			  <img class="card-img-top" src="https://instagram.fymq1-1.fna.fbcdn.net/t51.2885-15/s640x640/sh0.08/e35/c73.0.877.877/21147617_446723475727781_2399774008401723392_n.jpg" alt="Card image cap">
			  <div class="card-body">
			    <h4 class="card-title">Denis Birnaz</h4>
			    <div class="card-text">Category</div>
			    <div class="card-text">125 subscribers</div>
			    <p class="card-text">59 videos</p>
			    <a href="#" class="btn btn-imm">more...</a>
			  </div>
			</div>
			<div class="card col-md-4 col-lg-3 col-sm-6" >
			  <img class="card-img-top" src="https://instagram.fymq1-1.fna.fbcdn.net/t51.2885-15/e35/22344401_725240994327658_663570566036324352_n.jpg" alt="Card image cap">
			  <div class="card-body">
			    <h4 class="card-title">Denis Birnaz</h4>
			    <div class="card-text">Category</div>
			    <div class="card-text">125 subscribers</div>
			    <p class="card-text">59 videos</p>
			    <a href="#" class="btn btn-imm">more...</a>
			  </div>
			</div>
			<div class="card col-md-4 col-lg-3 col-sm-6" >
			  <img class="card-img-top" src="https://instagram.fymq1-1.fna.fbcdn.net/t51.2885-15/e35/22280526_975876352550245_3044646679128047616_n.jpg" alt="Card image cap">
			  <div class="card-body">
			    <h4 class="card-title">Denis Birnaz</h4>
			    <div class="card-text">Category</div>
			    <div class="card-text">125 subscribers</div>
			    <p class="card-text">59 videos</p>
			    <a href="#" class="btn btn-imm">more...</a>
			  </div>
			</div>
			<div class="card col-md-4 col-lg-3 col-sm-6" >
			  <img class="card-img-top" src="https://instagram.fymq1-1.fna.fbcdn.net/t51.2885-15/e35/c236.0.608.608/14583443_205443676555856_1166432208999677952_n.jpg" alt="Card image cap">
			  <div class="card-body">
			    <h4 class="card-title">Denis Birnaz</h4>
			    <div class="card-text">Category</div>
			    <div class="card-text">125 subscribers</div>
			    <p class="card-text">59 videos</p>
			    <a href="#" class="btn btn-imm">more...</a>
			  </div>
			</div>


		</div>




	</div>