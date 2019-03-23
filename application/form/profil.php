<style type="text/css">
	.profil a{
		color: grey;
	}
	.profil a:hover{
		color: blue;
	}
</style>
<div class="profil" style="background-color: #d0f0f0; width: 100px; height: 345px; padding: 10px; position: -webkit-sticky; position: sticky; top: 45px; float: left;">
	<div style="border-bottom: 1px solid black; "><h2>Profil</h2></div>
		<p><a href="index.php?page=profil&file=sambutan">Sambutan</a></p>
		<p><a href="index.php?page=profil&file=sejarah">Sejarah</a></p>
</div>

<?php 
	if (isset($_GET['file'])) {
		$page = $_GET['file'];
		switch ($page) {
			case 'sambutan':
      				include "application/form/sambutan.php";
      				break;
			case 'sejarah':
      				include "application/form/sejarah.php";
      				break;
			default:
      				include "application/form/sambutan.php";
      				break;
		}
	}
	else{
      				include "application/form/sambutan.php";
	}
?>