<?php
	$title = 'Sdílení';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>08</strong>
						Sdílení
					</h1>
					<p>
						<strong>Zdrojové CSS:</strong> /src/css/atoms/_share.scss<br />
						<strong>Zdrojové JS:</strong> /src/js/components/share.coffee
					</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Pro sdílení slouží atom .share. Do elementu .share lze vkládat jakékoli ikonky - jen je potřeba doplnit do stylopisu pozadí dle sociální sítě.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<p class="share">
							<a href="#" class="share__item icon icon-facebook" title="Facebook">
								<span class="vhide">Facebook</span>
							</a>
							<a href="#" class="share__item icon icon-twitter" title="Twitter">
								<span class="vhide">Twitter</span>
							</a>
							<a href="#" class="share__item icon icon-linkedin" title="LinkedIn">
								<span class="vhide">LinkedIn</span>
							</a>
							<a href="#" class="share__item icon icon-envelope" title="E-mailem">
								<span class="vhide">E-mailem</span>
							</a>
							<a href="#" class="share__item icon icon-google-plus" title="Google">
								<span class="vhide">Google</span>
							</a>
							<a href="#" class="share__item icon icon-instagram" title="Instagram">
								<span class="vhide">Instagram</span>
							</a>
						</p>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Velké</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Stejné jako defaultní. Pouze přidán modifikátor share--big na element .share
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<p class="share share--big">
							<a href="#" class="share__item icon icon-facebook" title="Facebook">
								<span class="vhide">Facebook</span>
							</a>
							<a href="#" class="share__item icon icon-twitter" title="Twitter">
								<span class="vhide">Twitter</span>
							</a>
							<a href="#" class="share__item icon icon-linkedin" title="LinkedIn">
								<span class="vhide">LinkedIn</span>
							</a>
							<a href="#" class="share__item icon icon-envelope" title="E-mailem">
								<span class="vhide">E-mailem</span>
							</a>
							<a href="#" class="share__item icon icon-google-plus" title="Google">
								<span class="vhide">Google</span>
							</a>
							<a href="#" class="share__item icon icon-instagram" title="Instagram">
								<span class="vhide">Instagram</span>
							</a>
						</p>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Rozklikávací</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Struktura vycházející z defaultního atomu, která je doplněna o rozklikávací button a obal sociálních ikonek. Pro zajištění fuknčknosti je potřeba JavaScript, který po kliku na button toggluje mofidifikátor is-open na obalující elementu .share
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<p class="share">
							<a href="#" class="share__btn share__item icon icon-share-alt" title="Sdílet">
								<span class="vhide">Sdílet</span>
							</a>
							<span class="share__box">
								<a href="#" class="share__item icon icon-facebook" title="Facebook">
									<span class="vhide">Facebook</span>
								</a>
								<a href="#" class="share__item icon icon-twitter" title="Twitter">
									<span class="vhide">Twitter</span>
								</a>
								<a href="#" class="share__item icon icon-linkedin" title="LinkedIn">
									<span class="vhide">LinkedIn</span>
								</a>
								<a href="#" class="share__item icon icon-envelope" title="E-mailem">
									<span class="vhide">E-mailem</span>
								</a>
								<a href="#" class="share__item icon icon-google-plus" title="Google">
									<span class="vhide">Google</span>
								</a>
							</span>
						</p>
						<p class="share">
							<a href="#" class="share__btn share__btn--text">
								<span class="icon icon-share-alt"></span>
								Sdílet
							</a>
							<span class="share__box">
								<a href="#" class="share__item icon icon-facebook" title="Facebook">
									<span class="vhide">Facebook</span>
								</a>
								<a href="#" class="share__item icon icon-twitter" title="Twitter">
									<span class="vhide">Twitter</span>
								</a>
								<a href="#" class="share__item icon icon-linkedin" title="LinkedIn">
									<span class="vhide">LinkedIn</span>
								</a>
								<a href="#" class="share__item icon icon-envelope" title="E-mailem">
									<span class="vhide">E-mailem</span>
								</a>
								<a href="#" class="share__item icon icon-google-plus" title="Google">
									<span class="vhide">Google</span>
								</a>
							</span>
						</p>
					</div>
				</div>
			</div>
		</div>

<?php
	include 'part/footer.php';
?>
