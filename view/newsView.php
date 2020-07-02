<?php 
	require_once "../controllers/readNewsArr.php";
?>


<?php 

  $mass = new ReadNewsController();
  $arr = $mass -> readDataNews();
	var_dump($arr);

?>
	<!-- <div class="wrp__viewblock">
			
	</div> -->