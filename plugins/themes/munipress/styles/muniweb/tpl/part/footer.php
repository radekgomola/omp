		<?php if (!$hideHeader): ?>
			<?php include 'footers/type1.php' ?>
		<?php endif; ?>

		<script src="../js/jquery.js"></script>
		<script src="../js/app.js"></script>
		<script>
			App.run({})
		</script>
		<!-- soubory pro dokumentaci -->
		<link rel="stylesheet" href="../css/documentation.css" media="screen" />
		<script src="../js/documentation.js"></script>
		<script src="../js/highlight.pack.js"></script>
		<script>hljs.initHighlightingOnLoad();</script>
		<!-- / soubory pro dokumentaci -->
		<?php if ($hasGraphs) : ?>
			<script src="../js/d3.js"></script>
			<script src="../js/nv.d3.js"></script>
			<script src="../js/graphs.js"></script>
		<?php endif; ?>
	</body>
</html>
