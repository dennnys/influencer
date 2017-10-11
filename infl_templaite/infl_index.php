	<div class="influencer container">

<?php 
	require_once dirname(__FILE__) . "/infl_form_search.php" ;
 ?>
<?php  
 	echo ("<script>var reponse_ig = ".$reponse_ig.";</script>");
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
			
			<h2>Efectue le recherche</h2>


		</div>




	</div>