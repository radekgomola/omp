<?php
	$title = 'Standardní';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>01.01</strong>
						Formuláře - standardní
					</h1>
					<p><strong>Zdrojové CSS:</strong> /src/css/molecules/form/_std.scss</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Standardní formulář</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Základní obal standardních formulářů.
						</p>
					</div>
					<div class="sk-example__content">
						<form action="?" class="form-std">
							<fieldset class="form-std__fieldset">
								<legend class="form-std__legend">Nadpis</legend>
								<p>Sem přijdou <a href="a-02-grid.html">grid</a>, <a href="a-03-formulare.html">formulářové prvky</a>, <a href="a-04-tlacitka.html">tlačítka</a> apod.</p>
							</fieldset>
						</form>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Formulář s více fieldsety</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Ukázka použití více fieldsetů pod sebou v případě potřeby a tlačítko až pod fieldsetem.
						</p>
					</div>
					<div class="sk-example__content">
						<form action="?" class="form-std">
							<fieldset class="form-std__fieldset">
								<legend class="form-std__legend">Nadpis první části</legend>
								<p>Sem přijdou <a href="a-02-grid.html">grid</a>, <a href="a-03-formulare.html">formulářové prvky</a> apod.</p>
							</fieldset>
							<fieldset class="form-std__fieldset">
								<legend class="form-std__legend">Nadpis druhé části</legend>
								<p>Sem přijdou <a href="a-02-grid.html">grid</a>, <a href="a-03-formulare.html">formulářové prvky</a> apod.</p>
							</fieldset>
							<p class="right">
								<button type="submit" class="btn btn-primary">
									<span>Odeslat</span>
								</button>
							</p>
						</form>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Ukázka formuláře</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí molekula s formulářem doplněná o atomy <a href="a-02-grid.html">grid</a>, <a href="a-03-formulare.html">formulářové prvky</a> a <a href="a-04-tlacitka.html">tlačítka</a>.
						</p>
					</div>
					<div class="sk-example__content">
						<form action="?" class="form-std">
							<fieldset class="form-std__fieldset">
								<legend class="form-std__legend">Konktaktujte nás</legend>
								<div class="grid">
									<div class="grid__cell size--m--2-4">
										<p>
											<label for="firstname">Jméno <span class="required">(povinné)</span></label><br />
											<span class="inp-fix">
												<input type="text" name="firstname" id="firstname" class="inp-text" />
											</span>
										</p>
									</div>
									<div class="grid__cell size--m--2-4">
										<p>
											<label for="lastname">Příjmení <span class="required">(povinné)</span></label><br />
											<span class="inp-fix">
												<input type="text" name="lastname" id="lastname" class="inp-text" />
											</span>
										</p>
									</div>
									<div class="grid__cell size--m--2-4">
										<p>
											<label for="email">E-mail <span class="required">(povinné)</span></label><br />
											<span class="inp-fix">
												<input type="email" name="email" id="email" class="inp-text" />
											</span>
										</p>
									</div>
									<div class="grid__cell size--m--2-4">
										<p>
											<label for="phone">Telefon</label><br />
											<span class="inp-fix">
												<input type="tel" name="phone" id="phone" class="inp-text" />
											</span>
										</p>
									</div>
								</div>
								<p>
									<label for="message">Vaše zpráva <span class="required">(povinné)</span></label><br />
									<span class="inp-fix">
										<textarea name="textarea" id="message" cols="50" rows="5" class="inp-text"></textarea>
									</span>
								</p>
								<div class="row">
									<p class="l">
										<label class="inp-item inp-item--checkbox">
											<input type="checkbox" name="newsletter" value="1" checked="checked" />
											<span>Chci dostávat pravidelný newsletter</span>
										</label>
									</p>
									<p class="r">
										<button type="submit" class="btn btn-primary">
											<span>Odeslat</span>
										</button>
									</p>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>

<?php
	include 'part/footer.php';
?>
