<?php
	$title = 'Kód';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>02.07</strong>
						Boxy – Kód
					</h1>
					<p>
						<strong>Zdrojové CSS:</strong> /src/css/molecules/box/_code.scss
					</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí molekula pro ukázky kódu. V našich ukázkách navíc používáme highlighter <a href="https://highlightjs.org/" target="_blank">highlight.js</a>, který je linkován úplně na konci před uzavíracím tagem body. Do elementu code je potřeba vkládat escapovaný kód.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="box-code">
							<pre class="box-code__inner"><code>&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;
	&lt;h1&gt;My First Heading&lt;/h1&gt;
	&lt;p&gt;My first paragraph.&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php
	include 'part/footer.php';
?>
