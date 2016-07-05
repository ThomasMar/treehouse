<? php 

$pageTitle = "Xbox One Games Overview";

if (isset($_GET[cat])){
	if($_GET[cat] == "Games"){
		$pageTitle = Games;
		elseif ($_GET[cat] == "Deals") {
			$pageTitle = Deals;
		}
		elseif ($_GET[cat] == "DLC") {
			$pageTitle = DLC;	
		}
	}
}

include("inc/header.php"); ?>

<div class="section page">
	<h1> Xbox Games </h1>
</div>

<? php include("inc/footer.php"); ?>