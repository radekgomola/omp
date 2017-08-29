<?php
	$title = 'Záložky';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>02.03</strong>
						Boxy – Záložky
					</h1>
					<p>
						<strong>Zdrojové CSS:</strong> /src/css/molecules/box/_tabs.scss<br />
						<strong>Zdrojové JS:</strong> /src/js/components/tabs.coffee
					</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní - bez ohraničení obsahu</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí molekula se záložkami. Záložky se překlikávají pomocí JavaScriptu. Pro správnou funčnost je potřeba spárovat href odkazu na .js-tab-links s id na elementu .box-tabs__fragment. Pozor ID musí být unikátní. Do .box-tabs__fragment lze vkládat jakýkoliv obsah (např. grid, molekuly boxů, molekuly výpisů, formuláře apod.)
						</p>
						<p>
							Dále je potřeba zvolit aktivní záložku pomocí modifikátorů is-active na js-tab-links a box-tabs__fragment – díky tomuto můžete jednoduše mít aktivní např. druhou záložku.
						</p>
						<p>
							Pokud je některá záložka neaktivní pak doporučuji ji do kódu vůbec nedávat. Druhá možnost je z .js-tab-links odstranit href a přidat modifikátor is-disabled.
						</p>
						<p>
							Pro responsive byly přidán do .box-tabs__fragment odkaz .box-tabs__responsive-link, který sekunduje skryté horizontální menu. Navíc byl obsah ještě obalen do box-tabs__content.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="box-tabs">
							<ul class="box-tabs__menu">
								<li class="box-tabs__menu__item">
									<a href="#tab-1" class="box-tabs__menu__link js-tab-links">Bez borderu</a>
								</li>
								<li class="box-tabs__menu__item">
									<a href="#tab-2" class="box-tabs__menu__link js-tab-links is-active">Tab name</a>
								</li>
								<li class="box-tabs__menu__item">
									<a href="#tab-3" class="box-tabs__menu__link js-tab-links">Tab name</a>
								</li>
								<li class="box-tabs__menu__item">
									<a class="box-tabs__menu__link js-tab-links is-disabled">Disabled</a>
								</li>
							</ul>
							<div id="tab-1" class="box-tabs__fragment">
								<a href="#" class="box-tabs__responsive-link">
									<span class="box-tabs__responsive-link__name">Bez borderu</span>
									<span class="icon icon-plus"></span>
								</a>
								<div class="box-tabs__content">
									<p>Tab1 - Nulla facilisi. Sed interdum orci interdum sapien. Nulla quam. Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. Donec cursus sapien et neque. Aenean nisi sapien, sagittis a, eleifend sed, tristique pretium, enim. Proin pulvinar sollicitudin augue. Vivamus ac lorem. Quisque ut ipsum. Vivamus in pede quis erat condimentum adipiscing. Curabitur risus erat, scelerisque sit amet, mollis id, consectetuer eu, neque. Sed vitae risus sed enim fermentum venenatis.</p>
								</div>
							</div>
							<div id="tab-2" class="box-tabs__fragment is-active">
								<a href="#" class="box-tabs__responsive-link">
									<span class="box-tabs__responsive-link__name">Tab name</span>
									<span class="icon icon-plus"></span>
								</a>
								<div class="box-tabs__content">
									<p>Tab2 - Nulla facilisi. Sed interdum orci interdum sapien. Nulla quam. Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. Donec cursus sapien et neque. Aenean nisi sapien, sagittis a, eleifend sed, tristique pretium, enim. Proin pulvinar sollicitudin augue. Vivamus ac lorem. Quisque ut ipsum. Vivamus in pede quis erat condimentum adipiscing. Curabitur risus erat, scelerisque sit amet, mollis id, consectetuer eu, neque. Sed vitae risus sed enim fermentum venenatis.</p>
								</div>
							</div>
							<div id="tab-3" class="box-tabs__fragment">
								<a href="#" class="box-tabs__responsive-link">
									<span class="box-tabs__responsive-link__name">Tab name</span>
									<span class="icon icon-plus"></span>
								</a>
								<div class="box-tabs__content">
									<p>Tab3 - Nulla facilisi. Sed interdum orci interdum sapien. Nulla quam. Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. Donec cursus sapien et neque. Aenean nisi sapien, sagittis a, eleifend sed, tristique pretium, enim. Proin pulvinar sollicitudin augue. Vivamus ac lorem. Quisque ut ipsum. Vivamus in pede quis erat condimentum adipiscing. Curabitur risus erat, scelerisque sit amet, mollis id, consectetuer eu, neque. Sed vitae risus sed enim fermentum venenatis.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">S ohraničením obsahu</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Molekula vycházející z defaultní molekuly. Pro ohraničení obsahu je potřeba přidat modifikátor box-tabs__fragment--bordered na .box-tabs__fragment.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="box-tabs">
							<ul class="box-tabs__menu">
								<li class="box-tabs__menu__item">
									<a href="#tab-4" class="box-tabs__menu__link js-tab-links is-active">Bez borderu</a>
								</li>
								<li class="box-tabs__menu__item">
									<a href="#tab-5" class="box-tabs__menu__link js-tab-links">Tab name</a>
								</li>
								<li class="box-tabs__menu__item">
									<a href="#tab-6" class="box-tabs__menu__link js-tab-links">Tab name</a>
								</li>
							</ul>
							<div id="tab-4" class="box-tabs__fragment box-tabs__fragment--bordered is-active">
								<a href="#" class="box-tabs__responsive-link">
									<span class="box-tabs__responsive-link__name">Bez borderu</span>
									<span class="icon icon-plus"></span>
								</a>
								<div class="box-tabs__content">
									<p>Tab4 - Nulla facilisi. Sed interdum orci interdum sapien. Nulla quam. Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. Donec cursus sapien et neque. Aenean nisi sapien, sagittis a, eleifend sed, tristique pretium, enim. Proin pulvinar sollicitudin augue. Vivamus ac lorem. Quisque ut ipsum. Vivamus in pede quis erat condimentum adipiscing. Curabitur risus erat, scelerisque sit amet, mollis id, consectetuer eu, neque. Sed vitae risus sed enim fermentum venenatis.</p>
								</div>
							</div>
							<div id="tab-5" class="box-tabs__fragment box-tabs__fragment--bordered">
								<a href="#" class="box-tabs__responsive-link">
									<span class="box-tabs__responsive-link__name">Tab name</span>
									<span class="icon icon-plus"></span>
								</a>
								<div class="box-tabs__content">
									<p>Tab5 - Nulla facilisi. Sed interdum orci interdum sapien. Nulla quam. Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. Donec cursus sapien et neque. Aenean nisi sapien, sagittis a, eleifend sed, tristique pretium, enim. Proin pulvinar sollicitudin augue. Vivamus ac lorem. Quisque ut ipsum. Vivamus in pede quis erat condimentum adipiscing. Curabitur risus erat, scelerisque sit amet, mollis id, consectetuer eu, neque. Sed vitae risus sed enim fermentum venenatis.</p>
								</div>
							</div>
							<div id="tab-6" class="box-tabs__fragment box-tabs__fragment--bordered">
								<a href="#" class="box-tabs__responsive-link">
									<span class="box-tabs__responsive-link__name">Tab name</span>
									<span class="icon icon-plus"></span>
								</a>
								<div class="box-tabs__content">
									<p>Tab6 - Nulla facilisi. Sed interdum orci interdum sapien. Nulla quam. Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. Donec cursus sapien et neque. Aenean nisi sapien, sagittis a, eleifend sed, tristique pretium, enim. Proin pulvinar sollicitudin augue. Vivamus ac lorem. Quisque ut ipsum. Vivamus in pede quis erat condimentum adipiscing. Curabitur risus erat, scelerisque sit amet, mollis id, consectetuer eu, neque. Sed vitae risus sed enim fermentum venenatis.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">S ohraničením obsahu ze spodu</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Molekula vycházející z defaultní molekuly. Pro ohraničení obsahu je potřeba přidat modifikátor box-tabs__fragment--bordered-bottom na .box-tabs__fragment.
						</p>
					</div>
					<div class="sk-example__content">
						<?php
							include 'part/molecules/box-tabs-1.php';
						?>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title"><a href="#tab-h8" class="link-slide">S historií</a></h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Molekula vycházející z defaultní molekuly a může se kombinovat se vzhledem viz. víše. Navíc je na .box-tabs přídán modifikátor with-history, který naváže události hashchange. Opět je potřeba spárovat href .js-tab-links s ID na .box-tabs__fragment.
						</p>
						<p>
							 Záložky s historií mohou být pouze jedny na stránce.
						</p>
						<p>
							<strong>Ajaxová záložka:</strong><br />
							Obsah záložky lze donačítat ajaxem. Na .js-tab-links je potřeba přidat modifikátor is-ajax spolu s atributem data-ajax s url ajaxového požadavku. Do html normálně vytvořte element .box-tabs__fragment s obsahem viz níže, aby při kliku na záložku bylo vidět, že se něco načítá. Pokud se budu přepínat mezi záložkami, pak se ajaxový požadavek provede pouze jednou pro načtení a dál funguje jako standardní záložky s historií.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="box-tabs with-history">
							<ul class="box-tabs__menu">
								<li class="box-tabs__menu__item">
									<a href="#tab-h7" class="box-tabs__menu__link js-tab-links is-active">Bez borderu</a>
								</li>
								<li class="box-tabs__menu__item">
									<a href="#tab-h8" class="box-tabs__menu__link js-tab-links">Tab name</a>
								</li>
								<li class="box-tabs__menu__item">
									<a href="#tab-h9" class="box-tabs__menu__link js-tab-links">Tab name</a>
								</li>
								<li class="box-tabs__menu__item">
									<a href="#tab-h10" data-ajax="./tabh10.html" class="box-tabs__menu__link js-tab-links is-ajax">Ajax tab</a>
								</li>
							</ul>
							<div id="tab-h7" class="box-tabs__fragment is-active">
								<a href="#" class="box-tabs__responsive-link">
									<span class="box-tabs__responsive-link__name">Tab name</span>
									<span class="icon icon-plus"></span>
								</a>
								<div class="box-tabs__content">
									<p>Tabh7 - Nulla facilisi. Sed interdum orci interdum sapien. Nulla quam. Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. Donec cursus sapien et neque. Aenean nisi sapien, sagittis a, eleifend sed, tristique pretium, enim. Proin pulvinar sollicitudin augue. Vivamus ac lorem. Quisque ut ipsum. Vivamus in pede quis erat condimentum adipiscing. Curabitur risus erat, scelerisque sit amet, mollis id, consectetuer eu, neque. Sed vitae risus sed enim fermentum venenatis.</p>
								</div>
							</div>
							<div id="tab-h8" class="box-tabs__fragment">
								<a href="#" class="box-tabs__responsive-link">
									<span class="box-tabs__responsive-link__name">Tab name</span>
									<span class="icon icon-plus"></span>
								</a>
								<div class="box-tabs__content">
									<p>Tabh8 - Nulla facilisi. Sed interdum orci interdum sapien. Nulla quam. Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. Donec cursus sapien et neque. Aenean nisi sapien, sagittis a, eleifend sed, tristique pretium, enim. Proin pulvinar sollicitudin augue. Vivamus ac lorem. Quisque ut ipsum. Vivamus in pede quis erat condimentum adipiscing. Curabitur risus erat, scelerisque sit amet, mollis id, consectetuer eu, neque. Sed vitae risus sed enim fermentum venenatis.</p>
								</div>
							</div>
							<div id="tab-h9" class="box-tabs__fragment">
								<a href="#" class="box-tabs__responsive-link">
									<span class="box-tabs__responsive-link__name">Tab name</span>
									<span class="icon icon-plus"></span>
								</a>
								<div class="box-tabs__content">
									<p>Tabh9 - Nulla facilisi. Sed interdum orci interdum sapien. Nulla quam. Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. Donec cursus sapien et neque. Aenean nisi sapien, sagittis a, eleifend sed, tristique pretium, enim. Proin pulvinar sollicitudin augue. Vivamus ac lorem. Quisque ut ipsum. Vivamus in pede quis erat condimentum adipiscing. Curabitur risus erat, scelerisque sit amet, mollis id, consectetuer eu, neque. Sed vitae risus sed enim fermentum venenatis.</p>
								</div>
							</div>
							<div id="tab-h10" class="box-tabs__fragment">
								<a href="#" class="box-tabs__responsive-link">
									<span class="box-tabs__responsive-link__name">Ajax tab</span>
									<span class="icon icon-plus"></span>
								</a>
								<div class="box-tabs__content">
									<div class="center">
										<br />
										<span class="icon icon-rotate-right icon-2x icon-spin light"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Filtrační záložky</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Ukázka záložek s menu využívájící molekulu <a href="m-03-05-filtrace.html">filtračního menu</a>.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="box-tabs">
							<div class="menu-filter">
								<ul class="menu-filter__list">
									<li class="menu-filter__item">
										<a href="#tab-h20" class="menu-filter__link js-tab-links is-active">Menu item 1</a>
									</li>
									<li class="menu-filter__item">
										<a href="#tab-h21" class="menu-filter__link js-tab-links">Menu item 2</a>
									</li>
									<li class="menu-filter__item">
										<a href="#tab-h22" class="menu-filter__link js-tab-links">Menu item 3</a>
									</li>
								</ul>
							</div>
							<div id="tab-h20" class="box-tabs__fragment is-active">
								<a href="#" class="box-tabs__responsive-link">
									<span class="box-tabs__responsive-link__name">Menu item 1</span>
									<span class="icon icon-plus"></span>
								</a>
								<div class="box-tabs__content">
									<p>Tab 1 - Nulla facilisi. Sed interdum orci interdum sapien. Nulla quam. Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. Donec cursus sapien et neque. Aenean nisi sapien, sagittis a, eleifend sed, tristique pretium, enim. Proin pulvinar sollicitudin augue. Vivamus ac lorem. Quisque ut ipsum. Vivamus in pede quis erat condimentum adipiscing. Curabitur risus erat, scelerisque sit amet, mollis id, consectetuer eu, neque. Sed vitae risus sed enim fermentum venenatis.</p>
								</div>
							</div>
							<div id="tab-h21" class="box-tabs__fragment">
								<a href="#" class="box-tabs__responsive-link">
									<span class="box-tabs__responsive-link__name">Menu item 2</span>
									<span class="icon icon-plus"></span>
								</a>
								<div class="box-tabs__content">
									<p>Tab 2 - Nulla facilisi. Sed interdum orci interdum sapien. Nulla quam. Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. Donec cursus sapien et neque. Aenean nisi sapien, sagittis a, eleifend sed, tristique pretium, enim. Proin pulvinar sollicitudin augue. Vivamus ac lorem. Quisque ut ipsum. Vivamus in pede quis erat condimentum adipiscing. Curabitur risus erat, scelerisque sit amet, mollis id, consectetuer eu, neque. Sed vitae risus sed enim fermentum venenatis.</p>
								</div>
							</div>
							<div id="tab-h22" class="box-tabs__fragment">
								<a href="#" class="box-tabs__responsive-link">
									<span class="box-tabs__responsive-link__name">Menu item 3</span>
									<span class="icon icon-plus"></span>
								</a>
								<div class="box-tabs__content">
									<p>Tab 3 - Nulla facilisi. Sed interdum orci interdum sapien. Nulla quam. Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. Donec cursus sapien et neque. Aenean nisi sapien, sagittis a, eleifend sed, tristique pretium, enim. Proin pulvinar sollicitudin augue. Vivamus ac lorem. Quisque ut ipsum. Vivamus in pede quis erat condimentum adipiscing. Curabitur risus erat, scelerisque sit amet, mollis id, consectetuer eu, neque. Sed vitae risus sed enim fermentum venenatis.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní - zabalené na mobilní zařízení</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Případ kdy je potřeba mít položky zabalené na mobilních zařízeních.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="box-tabs mobile-hide">
							<ul class="box-tabs__menu">
								<li class="box-tabs__menu__item">
									<a href="#tab-100" class="box-tabs__menu__link js-tab-links">Bez borderu</a>
								</li>
								<li class="box-tabs__menu__item">
									<a href="#tab-200" class="box-tabs__menu__link js-tab-links is-active">Tab name</a>
								</li>
								<li class="box-tabs__menu__item">
									<a href="#tab-300" class="box-tabs__menu__link js-tab-links">Tab name</a>
								</li>
							</ul>
							<div id="tab-100" class="box-tabs__fragment">
								<a href="#" class="box-tabs__responsive-link">
									<span class="box-tabs__responsive-link__name">Bez borderu</span>
									<span class="icon icon-plus"></span>
								</a>
								<div class="box-tabs__content">
									<p>Tab1 - Nulla facilisi. Sed interdum orci interdum sapien. Nulla quam. Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. Donec cursus sapien et neque. Aenean nisi sapien, sagittis a, eleifend sed, tristique pretium, enim. Proin pulvinar sollicitudin augue. Vivamus ac lorem. Quisque ut ipsum. Vivamus in pede quis erat condimentum adipiscing. Curabitur risus erat, scelerisque sit amet, mollis id, consectetuer eu, neque. Sed vitae risus sed enim fermentum venenatis.</p>
								</div>
							</div>
							<div id="tab-200" class="box-tabs__fragment is-active">
								<a href="#" class="box-tabs__responsive-link">
									<span class="box-tabs__responsive-link__name">Tab name</span>
									<span class="icon icon-plus"></span>
								</a>
								<div class="box-tabs__content">
									<p>Tab2 - Nulla facilisi. Sed interdum orci interdum sapien. Nulla quam. Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. Donec cursus sapien et neque. Aenean nisi sapien, sagittis a, eleifend sed, tristique pretium, enim. Proin pulvinar sollicitudin augue. Vivamus ac lorem. Quisque ut ipsum. Vivamus in pede quis erat condimentum adipiscing. Curabitur risus erat, scelerisque sit amet, mollis id, consectetuer eu, neque. Sed vitae risus sed enim fermentum venenatis.</p>
								</div>
							</div>
							<div id="tab-300" class="box-tabs__fragment">
								<a href="#" class="box-tabs__responsive-link">
									<span class="box-tabs__responsive-link__name">Tab name</span>
									<span class="icon icon-plus"></span>
								</a>
								<div class="box-tabs__content">
									<p>Tab3 - Nulla facilisi. Sed interdum orci interdum sapien. Nulla quam. Curabitur eu neque a felis dictum iaculis. Curabitur sodales dui sit amet mi. Donec cursus sapien et neque. Aenean nisi sapien, sagittis a, eleifend sed, tristique pretium, enim. Proin pulvinar sollicitudin augue. Vivamus ac lorem. Quisque ut ipsum. Vivamus in pede quis erat condimentum adipiscing. Curabitur risus erat, scelerisque sit amet, mollis id, consectetuer eu, neque. Sed vitae risus sed enim fermentum venenatis.</p>
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
