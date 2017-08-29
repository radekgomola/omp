<?php
	$title = 'Citace';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>21</strong>
						Citace
					</h1>
					<p>
						<strong>Zdrojové CSS:</strong> /src/css/molecules/box/_quote.scss
					</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí molekula s citaci. Pro tuto molekulu slouží div.box-quote
						</p>
					</div>
					<div class="sk-example__content">
						<div class="box-quote">
							<blockquote>
								<p>
									„Great things in business are never done by one person. They're done by a team of people.“
								</p>
								<cite>Steve Jobs</cite>
							</blockquote>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">S pozadím</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí molekula s pozadím. Na box-quote se přidává modifikátor box-quote--bg.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="box-quote box-quote--bg">
							<blockquote>
								<p>
									„Great things in business are never done by one person. They're done by a team of people.“
								</p>
								<cite>Steve Jobs</cite>
							</blockquote>
						</div>
					</div>
				</div>
			</div>

			<div class="sk-example">
				<div class="row-main">
					<div class="sk-annot">
						<h2 class="sk-annot__title">S pozadím přes celou šířku</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí molekula s pozadím. Na box-quote se přidává modifikátor box-quote--bg.
						</p>
					</div>
				</div>
				<div class="sk-example__content">
					<div class="box-quote box-quote--bg">
						<div class="row-main">
							<blockquote>
								<p>
									„Great things in business are never done by one person. They're done by a team of people.“
								</p>
								<cite>Steve Jobs</cite>
							</blockquote>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php
	include 'part/footer.php';
?>
