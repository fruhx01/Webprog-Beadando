<div class="row">
	<div class="col-sm-6">
		<!--Youtube videó-->
		<div class="box">
		<iframe width="320" height="240" src="https://www.youtube.com/embed/pP2C1cA1Cgg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>               
		</div>
	</div>
	<div class="col-sm-6">
		<div class="box">
			<video width="320" height="240" controls>
			<!--Beágyazott videó a gépről, images mappában található-->
				<source src="<?=$video['link']?>" type="video/mp4">
				Your browser does not support the video tag.
			</video> 
		</div>
	</div>
	
</div>