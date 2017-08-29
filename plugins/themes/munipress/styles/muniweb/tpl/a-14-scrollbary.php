<?php
	$title = 'Scrollbary';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>14</strong>
						Scrollbary
					</h1>
					<p>
						<strong>Zdrojové CSS:</strong> /src/css/atoms/_scrollbar.scss<br />
						<strong>Zdrojové JS:</strong> /src/js/components/_scrollbar.coffee
					</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní vertikální scrollbar</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Pro zobrazení scrollbarů slouží atom .js-scrollbar. Pro zobrazení verikálního scrollbaru se používá modifikátor js-scrollbar--y (umístěný na js-scrollbar) a je potřeba na .viewport nastavit výška pomocí inline stylů.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="js-scrollbar js-scrollbar--y">
							<div class="scrollbar">
								<div class="track">
									<div class="thumb"></div>
								</div>
							</div>
							<div class="viewport" style="height: 300px;">
								<div class="overview">
									<h3>Magnis dis parturient montes</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae velit at velit pretium sodales. Maecenas egestas imperdiet mauris, vel elementum turpis iaculis eu. Duis egestas augue quis ante ornare eu tincidunt magna interdum. Vestibulum posuere risus non ipsum sollicitudin quis viverra ante feugiat. Pellentesque non faucibus lorem. Nunc tincidunt diam nec risus ornare quis porttitor enim pretium. Ut adipiscing tempor massa, a ullamcorper massa bibendum at. Suspendisse potenti. In vestibulum enim orci, nec consequat turpis. Suspendisse sit amet tellus a quam volutpat porta. Mauris ornare augue ut diam tincidunt elementum. Vivamus commodo dapibus est, a gravida lorem pharetra eu. Maecenas ultrices cursus tellus sed congue. Cras nec nulla erat.</p>

									<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque eget mauris libero. Nulla sit amet felis in sem posuere laoreet ut quis elit. Aenean mauris massa, pretium non bibendum eget, elementum sed nibh. Nulla ac felis et purus adipiscing rutrum. Pellentesque a bibendum sapien. Vivamus erat quam, gravida sed ultricies ac, scelerisque sed velit. Integer mollis urna sit amet ligula aliquam ac sodales arcu euismod. Fusce fermentum augue in nulla cursus non fermentum lorem semper. Quisque eu auctor lacus. Donec justo justo, mollis vel tempor vitae, consequat eget velit.</p>

									<p>Vivamus sed tellus quis orci dignissim scelerisque nec vitae est. Duis et elit ipsum. Aliquam pharetra auctor felis tempus tempor. Vivamus turpis dui, sollicitudin eget rhoncus in, luctus vel felis. Curabitur ultricies dictum justo at luctus. Nullam et quam et massa eleifend sollicitudin. Nulla mauris purus, sagittis id egestas eu, pellentesque et mi. Donec bibendum cursus nisi eget consequat. Nunc sit amet commodo metus. Integer consectetur lacus ac libero adipiscing ut tristique est viverra. Maecenas quam nibh, molestie nec pretium interdum, porta vitae magna. Maecenas at ligula eget neque imperdiet faucibus malesuada sed ipsum. Nulla auctor ligula sed nisl adipiscing vulputate. Curabitur ut ligula sed velit pharetra fringilla. Cras eu luctus est. Aliquam ac urna dui, eu rhoncus nibh. Nam id leo nisi, vel viverra nunc. Duis egestas pellentesque lectus, a placerat dolor egestas in. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec vitae ipsum non est iaculis suscipit.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Horizontální scrollbar</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Stejná HTML syntaxe jako u vertikálního scrollbaru. Pro zobrazení horizontální scrollbaru se používá modifikátor js-scrollbar--x (umístěný na js-scrollbar) a je potřeba na .viewport nastavit šířka pomocí inline stylů.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="js-scrollbar js-scrollbar--x">
							<div class="scrollbar">
								<div class="track">
									<div class="thumb"></div>
								</div>
							</div>
							<div class="viewport">
								<div class="overview" style="width: 2000px;">
									<h3>Magnis dis parturient montes</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae velit at velit pretium sodales. Maecenas egestas imperdiet mauris, vel elementum turpis iaculis eu. Duis egestas augue quis ante ornare eu tincidunt magna interdum. Vestibulum posuere risus non ipsum sollicitudin quis viverra ante feugiat. Pellentesque non faucibus lorem. Nunc tincidunt diam nec risus ornare quis porttitor enim pretium. Ut adipiscing tempor massa, a ullamcorper massa bibendum at. Suspendisse potenti. In vestibulum enim orci, nec consequat turpis. Suspendisse sit amet tellus a quam volutpat porta. Mauris ornare augue ut diam tincidunt elementum. Vivamus commodo dapibus est, a gravida lorem pharetra eu. Maecenas ultrices cursus tellus sed congue. Cras nec nulla erat.</p>

									<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque eget mauris libero. Nulla sit amet felis in sem posuere laoreet ut quis elit. Aenean mauris massa, pretium non bibendum eget, elementum sed nibh. Nulla ac felis et purus adipiscing rutrum. Pellentesque a bibendum sapien. Vivamus erat quam, gravida sed ultricies ac, scelerisque sed velit. Integer mollis urna sit amet ligula aliquam ac sodales arcu euismod. Fusce fermentum augue in nulla cursus non fermentum lorem semper. Quisque eu auctor lacus. Donec justo justo, mollis vel tempor vitae, consequat eget velit.</p>

									<p>Vivamus sed tellus quis orci dignissim scelerisque nec vitae est. Duis et elit ipsum. Aliquam pharetra auctor felis tempus tempor. Vivamus turpis dui, sollicitudin eget rhoncus in, luctus vel felis. Curabitur ultricies dictum justo at luctus. Nullam et quam et massa eleifend sollicitudin. Nulla mauris purus, sagittis id egestas eu, pellentesque et mi. Donec bibendum cursus nisi eget consequat. Nunc sit amet commodo metus. Integer consectetur lacus ac libero adipiscing ut tristique est viverra. Maecenas quam nibh, molestie nec pretium interdum, porta vitae magna. Maecenas at ligula eget neque imperdiet faucibus malesuada sed ipsum. Nulla auctor ligula sed nisl adipiscing vulputate. Curabitur ut ligula sed velit pharetra fringilla. Cras eu luctus est. Aliquam ac urna dui, eu rhoncus nibh. Nam id leo nisi, vel viverra nunc. Duis egestas pellentesque lectus, a placerat dolor egestas in. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec vitae ipsum non est iaculis suscipit.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Scrollbar s borderem</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Stejná syntaxe HTML jako výše. Jen je na element .js-scrollbar přidán modifikátor js-scrollbar--bordered.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="js-scrollbar js-scrollbar--y js-scrollbar--bordered u-mb-50">
							<div class="scrollbar">
								<div class="track">
									<div class="thumb"></div>
								</div>
							</div>
							<div class="viewport" style="height: 300px;">
								<div class="overview">
									<h3>Magnis dis parturient montes</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae velit at velit pretium sodales. Maecenas egestas imperdiet mauris, vel elementum turpis iaculis eu. Duis egestas augue quis ante ornare eu tincidunt magna interdum. Vestibulum posuere risus non ipsum sollicitudin quis viverra ante feugiat. Pellentesque non faucibus lorem. Nunc tincidunt diam nec risus ornare quis porttitor enim pretium. Ut adipiscing tempor massa, a ullamcorper massa bibendum at. Suspendisse potenti. In vestibulum enim orci, nec consequat turpis. Suspendisse sit amet tellus a quam volutpat porta. Mauris ornare augue ut diam tincidunt elementum. Vivamus commodo dapibus est, a gravida lorem pharetra eu. Maecenas ultrices cursus tellus sed congue. Cras nec nulla erat.</p>

									<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque eget mauris libero. Nulla sit amet felis in sem posuere laoreet ut quis elit. Aenean mauris massa, pretium non bibendum eget, elementum sed nibh. Nulla ac felis et purus adipiscing rutrum. Pellentesque a bibendum sapien. Vivamus erat quam, gravida sed ultricies ac, scelerisque sed velit. Integer mollis urna sit amet ligula aliquam ac sodales arcu euismod. Fusce fermentum augue in nulla cursus non fermentum lorem semper. Quisque eu auctor lacus. Donec justo justo, mollis vel tempor vitae, consequat eget velit.</p>

									<p>Vivamus sed tellus quis orci dignissim scelerisque nec vitae est. Duis et elit ipsum. Aliquam pharetra auctor felis tempus tempor. Vivamus turpis dui, sollicitudin eget rhoncus in, luctus vel felis. Curabitur ultricies dictum justo at luctus. Nullam et quam et massa eleifend sollicitudin. Nulla mauris purus, sagittis id egestas eu, pellentesque et mi. Donec bibendum cursus nisi eget consequat. Nunc sit amet commodo metus. Integer consectetur lacus ac libero adipiscing ut tristique est viverra. Maecenas quam nibh, molestie nec pretium interdum, porta vitae magna. Maecenas at ligula eget neque imperdiet faucibus malesuada sed ipsum. Nulla auctor ligula sed nisl adipiscing vulputate. Curabitur ut ligula sed velit pharetra fringilla. Cras eu luctus est. Aliquam ac urna dui, eu rhoncus nibh. Nam id leo nisi, vel viverra nunc. Duis egestas pellentesque lectus, a placerat dolor egestas in. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec vitae ipsum non est iaculis suscipit.</p>
								</div>
							</div>
						</div>

						<div class="js-scrollbar js-scrollbar--x js-scrollbar--bordered">
							<div class="scrollbar">
								<div class="track">
									<div class="thumb"></div>
								</div>
							</div>
							<div class="viewport">
								<div class="overview" style="width: 2000px;">
									<h3>Magnis dis parturient montes</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vitae velit at velit pretium sodales. Maecenas egestas imperdiet mauris, vel elementum turpis iaculis eu. Duis egestas augue quis ante ornare eu tincidunt magna interdum. Vestibulum posuere risus non ipsum sollicitudin quis viverra ante feugiat. Pellentesque non faucibus lorem. Nunc tincidunt diam nec risus ornare quis porttitor enim pretium. Ut adipiscing tempor massa, a ullamcorper massa bibendum at. Suspendisse potenti. In vestibulum enim orci, nec consequat turpis. Suspendisse sit amet tellus a quam volutpat porta. Mauris ornare augue ut diam tincidunt elementum. Vivamus commodo dapibus est, a gravida lorem pharetra eu. Maecenas ultrices cursus tellus sed congue. Cras nec nulla erat.</p>

									<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque eget mauris libero. Nulla sit amet felis in sem posuere laoreet ut quis elit. Aenean mauris massa, pretium non bibendum eget, elementum sed nibh. Nulla ac felis et purus adipiscing rutrum. Pellentesque a bibendum sapien. Vivamus erat quam, gravida sed ultricies ac, scelerisque sed velit. Integer mollis urna sit amet ligula aliquam ac sodales arcu euismod. Fusce fermentum augue in nulla cursus non fermentum lorem semper. Quisque eu auctor lacus. Donec justo justo, mollis vel tempor vitae, consequat eget velit.</p>

									<p>Vivamus sed tellus quis orci dignissim scelerisque nec vitae est. Duis et elit ipsum. Aliquam pharetra auctor felis tempus tempor. Vivamus turpis dui, sollicitudin eget rhoncus in, luctus vel felis. Curabitur ultricies dictum justo at luctus. Nullam et quam et massa eleifend sollicitudin. Nulla mauris purus, sagittis id egestas eu, pellentesque et mi. Donec bibendum cursus nisi eget consequat. Nunc sit amet commodo metus. Integer consectetur lacus ac libero adipiscing ut tristique est viverra. Maecenas quam nibh, molestie nec pretium interdum, porta vitae magna. Maecenas at ligula eget neque imperdiet faucibus malesuada sed ipsum. Nulla auctor ligula sed nisl adipiscing vulputate. Curabitur ut ligula sed velit pharetra fringilla. Cras eu luctus est. Aliquam ac urna dui, eu rhoncus nibh. Nam id leo nisi, vel viverra nunc. Duis egestas pellentesque lectus, a placerat dolor egestas in. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec vitae ipsum non est iaculis suscipit.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php
	include 'part/footer.php';
?>
