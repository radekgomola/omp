<?php
	$title = 'Embed video';
	include 'part/header.php';
?>


		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>17</strong>
						Embed video
					</h1>
				</div>


				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Default</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Funguje jak pro YouTube/Vimeo video (v podstatně jakýkoliv iframe), tak i pro HTML5 video tag.
						</p>
						<p>
							Lze vložit jakkoli do gridu a video se proporčně zmenší.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="video">
							<div class="video__holder">
								<iframe width="1280" height="720" src="https://www.youtube.com/embed/BZP1rYjoBgI" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php
	include 'part/footer.php';
?>
