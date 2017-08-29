<?php
	$title = 'Formulářové prvky';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>03</strong>
						Formulářové prvky
					</h1>
					<p>
						<strong>Zdrojové CSS:</strong><br /> /src/css/atoms/forms/_input.scss,<br /> /src/css/atoms/forms/_select.scss<br /> a /src/css/atoms/_message.scss<br /><br />
						<strong>Zdrojové JS:</strong><br /> /src/js/components/selectize.coffee
					</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Textové inputy</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Pro různé typy inputů používejte různé type atributy (např. type="email" pro emailový input apod.). Jeden z důvodů proč: na touch zařízeních se pak zobrazí správná klávesnice a usnadníte tím použitelnost vašich stránek.
						</p>
						<p>
							Každý input má svůj holder inp-fix, kvůli pozdějšímu použití ikonek, pozicování buttonů apod. Každý input / textarea má classu inp-text, od které se vše styluje.
						</p>
						<p>
							Pro zvýraznění povinného políčka slouží span require, který se umísťuje do elementu label a má dvě možnosti použití viz. příklad.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<p>
							<label for="text">Label pro textový input</label><br />
							<span class="inp-fix">
								<input type="text" name="text" id="text" class="inp-text" />
							</span>
						</p>
						<p>
							<label for="required">Povinný textový input <span class="required">(povinné)</span></label><br />
							<span class="inp-fix">
								<input type="text" name="required" id="required" class="inp-text" value="Hodnota inputu" />
							</span>
						</p>
						<p>
							<label for="required-star">Povinný textový input s hvězdičkou <span class="required required--asterisk">&ast;</span></label><br />
							<span class="inp-fix">
								<input type="text" name="required" id="required-star" class="inp-text" value="Hodnota inputu" />
							</span>
						</p>
						<p>
							<label for="disabled">Disabled input</label><br />
							<span class="inp-fix">
								<input type="text" name="disabled" id="disabled" class="inp-text" value="Hodnota inputu" disabled="disabled" />
							</span>
						</p>
						<p>
							<label for="email">E-mail input</label><br />
							<span class="inp-fix">
								<input type="email" name="email" id="email" class="inp-text" />
							</span>
						</p>
						<p>
							<label for="password">Heslo input</label><br />
							<span class="inp-fix">
								<input type="password" name="password" id="password" class="inp-text" />
							</span>
						</p>
						<p>
							<label for="phone">Input pro zadání telefonního čísla</label><br />
							<span class="inp-fix">
								<input type="tel" name="phone" id="phone" class="inp-text" />
							</span>
						</p>
						<p>
							<label for="number">Číselný input</label><br />
							<span class="inp-fix">
								<input type="number" name="number" id="number" class="inp-text" />
							</span>
						</p>
						<p>
							<label for="placeholder" class="vhide">Input se skrytým labelem (placeholder)</label>
							<span class="inp-fix">
								<input type="text" name="placeholder" id="placeholder" class="inp-text" placeholder="Input se skrytým labelem (placeholder)" />
							</span>
						</p>
						<p>
							<label for="textarea">Textarea</label><br />
							<span class="inp-fix">
								<textarea name="textarea" id="textarea" cols="50" rows="5" class="inp-text"></textarea>
							</span>
						</p>
						<p>
							<label for="text-big">Velký input</label><br />
							<span class="inp-fix">
								<input type="text" name="text-big" id="text-big" class="inp-text inp-text--big" />
							</span>
						</p>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Inputy inline na řádku</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Inputy na řádku je možné skládat do klasického gridu nebo využít následující konstrukce.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="form-inline">
							<p class="size--m--4-4 size--l--6-12">
								<label for="email-1" class="vhide">E-mail input</label>
								<span class="inp-fix">
									<input type="email" name="email" id="email-1" class="inp-text" placeholder="Zadejte Váš e-mail" />
								</span>
							</p>
							<p>
								<a href="#" class="btn btn-primary btn-s nowrap">
									<span>Přihlásit k odběru</span>
								</a>
							</p>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Inputy inline na řádku s mezerami</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Stejná jako atom Inputy inline na řádku. Pouze se na element .form-inline přidá modifikátor .form-inline--spaced
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="form-inline form-inline--spaced">
							<p>
								<label for="email-2" class="vhide">E-mail input</label>
								<span class="inp-fix">
									<input type="email" name="email" id="email-2" class="inp-text" placeholder="E-mail" />
								</span>
							</p>
							<p>
								<label for="password-1" class="vhide">Heslo input</label>
								<span class="inp-fix">
									<input type="password" name="password" id="password-1" class="inp-text" placeholder="Heslo" />
								</span>
							</p>
							<p>
								<label class="inp-item inp-item--checkbox">
									<input type="checkbox" name="checkbox" value="1" />
									<span>Zapamatovat</span>
								</label>
							</p>
							<p>
								<a href="#" class="btn btn-primary btn-s">
									<span>Přihlásit</span>
								</a>
							</p>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Velký inline select s tlačítkem</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Stejná jako atom Inputy inline na řádku. Pouze s jinými variantami obsahu.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="form-inline">
							<p class="size--m--4-4 size--l--6-12">
								<label for="type" class="vhide">Nadpis pole</label>
								<span class="inp-fix inp-fix--select">
									<select name="type" id="type" class="inp-select inp-select--big">
										<option value="0">Celá MUNI</option>
										<option value="law">Právnická fakulta</option>
										<option value="med">Lékařská fakulta</option>
										<option value="sci">Přírodovědecká fakulta</option>
										<option value="fi">Fakulta informatiky</option>
										<option value="fss">Fakulta sociálnách studií</option>
										<option value="fsps">Fakulta sportovních studií</option>
										<option value="phil">Filozofická fakulta</option>
										<option value="ped">Pedagogická fakulta</option>
										<option value="econ">Ekonomicko-správní fakulta</option>
									</select>
								</span>
							</p>
							<p>
								<a href="#" class="btn btn-primary nowrap">
									<span>Odeslat</span>
								</a>
							</p>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Inputy s ikonkami</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Atom po zobrazení ikonky na začátku inputu nebo na konci inputu. Pro zobrazení je potřeba přidat modifikátor .inp-icon na element .inp-fix spolu s modifikátorem inp-icon--before / inp-icon--after, podle toho kde chceme aby se ikonka zobrazila. Lze vložit jakýkoliv atom <a href="a-05-ikonky.html">ikonky</a>.
						</p>
						<p>
							Ikonka může být také buttonem, který bude odesílat formulář. Také ji lze obarvit pomocí class z <a href="a-00-framework.html">SK mini frameworku</a>.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<p>
							<label for="icon-before">Ikonka před s modifikátorem oranžové barvy</label><br />
							<span class="inp-fix inp-icon inp-icon--before">
								<input type="text" name="icon-before" id="icon-before" class="inp-text" />
								<span class="icon icon-warning orange"></span>
							</span>
						</p>
						<p>
							<label for="btn-before">Ikonka před button</label><br />
							<span class="inp-fix inp-icon inp-icon--before">
								<input type="text" name="btn-before" id="btn-before" class="inp-text" />
								<button type="submit" class="btn-icon icon icon-envelope-o" title="Odeslat">
									<span class="vhide">Odeslat</span>
								</button>
							</span>
						</p>
						<p>
							<label for="icon-after">Ikonka za s modifikátorem červené barvy</label><br />
							<span class="inp-fix inp-icon inp-icon--after">
								<input type="text" name="icon-after" id="icon-after" class="inp-text" />
								<span class="icon icon-warning red"></span>
							</span>
						</p>
						<p>
							<label for="btn-after">Ikonka jako button</label><br />
							<span class="inp-fix inp-icon inp-icon--after">
								<input type="text" name="btn-after" id="btn-after" class="inp-text" />
								<button type="submit" class="btn-icon icon icon-envelope-o" title="Odeslat">
									<span class="vhide">Odeslat</span>
								</button>
							</span>
						</p>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Inputy se stavy a nápověda k inputu</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Nápověda či doplňující info k inputu se vkládá do elementu .inp-fix jako span.inp-info, který může mít <a href="a-05-ikonky.html">ikonku</a> dle pořeby.
						</p>
						<p>
							Stavy se určují pomocí class .error, .warning, .success na obalující elementu p. Modifikátor způsobí přebarvení doplňujícího info inputu a případně borderu inputu.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<p>
							<label for="help-inp">Input s nápovědou <span class="required">(povinné)</span></label><br />
							<span class="inp-fix">
								<input type="text" name="help-inp" id="help-inp" class="inp-text" />
								<span class="inp-info">Nápověda k inputu</span>
							</span>
						</p>
						<p>
							<label for="help-inp-icon">Input s nápovědou <span class="required">(povinné)</span></label><br />
							<span class="inp-fix">
								<input type="text" name="help-inp-icon" id="help-inp-icon" class="inp-text" />
								<span class="inp-info">
									<span class="icon icon-warning"></span>
									Nápověda k inputu s ikonkou
								</span>
							</span>
						</p>
						<p class="error">
							<label for="error">Error input <span class="required">(povinné)</span></label><br />
							<span class="inp-fix">
								<input type="text" name="error" id="error" class="inp-text" />
								<span class="inp-info">Popis nesprávně vyplněného pole</span>
							</span>
						</p>
						<p class="error">
							<label for="error-icon">Error input <span class="required">(povinné)</span></label><br />
							<span class="inp-fix">
								<input type="text" name="error-icon" id="error-icon" class="inp-text" />
								<span class="inp-info">
									<span class="icon icon-warning"></span>
									Popis nesprávně vyplněného pole
								</span>
							</span>
						</p>
						<p class="warning">
							<label for="warning">Warning input <span class="required">(povinné)</span></label><br />
							<span class="inp-fix">
								<input type="text" name="warning" id="warning" class="inp-text" />
								<span class="inp-info">Popis pole</span>
							</span>
						</p>
						<p class="warning">
							<label for="warning-icon">Warning input <span class="required">(povinné)</span></label><br />
							<span class="inp-fix">
								<input type="text" name="warning-icon" id="warning-icon" class="inp-text" />
								<span class="inp-info">
									<span class="icon icon-warning"></span>
									Popis pole
								</span>
							</span>
						</p>
						<p class="success">
							<label for="success">Success input <span class="required">(povinné)</span></label><br />
							<span class="inp-fix">
								<input type="text" name="success" id="success" class="inp-text" />
								<span class="inp-info">Popis pole</span>
							</span>
						</p>
						<p class="success">
							<label for="success-icon">Success input <span class="required">(povinné)</span></label><br />
							<span class="inp-fix">
								<input type="text" name="success-icon" id="success-icon" class="inp-text" />
								<span class="inp-info">
									<span class="icon icon-check"></span>
									Popis pole
								</span>
							</span>
						</p>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Našeptávač a selecty</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Základní select bez použití JS se styluje classou .inp-select s obalem .inp-fix a modifikátorem .inp-fix--select.
						</p>
						<p>
							K možnosti customizace vzhledu selectu a našeptávač pro standardní input se využívá plugin <a href="http://selectize.github.io/selectize.js/">http://selectize.github.io/selectize.js/</a>. JS se naváže classou js-select na selectu / inputu (pro našeptávač)
						</p>
						<p>
							Pro našeptávač je potřeba nastavit atribut data-suggest dle příkladu. Více v dokumentaci pluginu výše.
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<p>
							<label for="select-0">Standardní select bez JS</label><br />
							<span class="inp-fix inp-fix--select">
								<select name="select" id="select-0" class="inp-select">
									<option value="0">Aperiam, maxime, nulla</option>
									<option value="1">Lorem ipsum dolorLorem ipsum dolorLorem ipsum dolorLorem ipsum dolorLorem ipsum dolorLorem ipsum dolorLorem ipsum dolorLorem ipsum dolorLorem ipsum dolorLorem ipsum dolorLorem ipsum dolor</option>
									<option value="2">Libero, at mollitia</option>
									<option value="3">Eius, repellendus, nihil</option>
									<option value="4">Omnis, fuga dolores</option>
									<option value="5">Natus, dolorum harum</option>
									<option value="6">Temporibus reiciendis, ipsa</option>
									<option value="7">Vitae, officia, explicabo</option>
									<option value="8">Delectus ad, rerum</option>
									<option value="9">Ab, laborum dignissimos</option>
								</select>
							</span>
						</p>
						<p>
							<label for="select-0-big">Standardní velký select bez JS</label><br />
							<span class="inp-fix inp-fix--select">
								<select name="select" id="select-0-big" class="inp-select inp-select--big">
									<option value="0">Aperiam, maxime, nulla</option>
									<option value="1">Lorem ipsum dolorLorem ipsum dolorLorem ipsum dolorLorem ipsum dolorLorem ipsum dolorLorem ipsum dolorLorem ipsum dolorLorem ipsum dolorLorem ipsum dolorLorem ipsum dolorLorem ipsum dolor</option>
									<option value="2">Libero, at mollitia</option>
									<option value="3">Eius, repellendus, nihil</option>
									<option value="4">Omnis, fuga dolores</option>
									<option value="5">Natus, dolorum harum</option>
									<option value="6">Temporibus reiciendis, ipsa</option>
									<option value="7">Vitae, officia, explicabo</option>
									<option value="8">Delectus ad, rerum</option>
									<option value="9">Ab, laborum dignissimos</option>
								</select>
							</span>
						</p>
						<p>
							<label for="select-1">Select s js</label><br />
							<span class="inp-fix inp-fix--select">
								<select name="select" id="select-1" class="js-select inp-select">
									<option value="0">Aperiam, maxime, nulla</option>
									<option value="1">Lorem ipsum dolorLorem ipsum dolorLorem ipsum dolorLorem ipsum dolorLorem ipsum dolorLorem ipsum dolorLorem ipsum dolorLorem ipsum dolorLorem ipsum dolorLorem ipsum dolorLorem ipsum dolor</option>
									<option value="2">Libero, at mollitia</option>
									<option value="3">Eius, repellendus, nihil</option>
									<option value="4">Omnis, fuga dolores</option>
									<option value="5">Natus, dolorum harum</option>
									<option value="6">Temporibus reiciendis, ipsa</option>
									<option value="7">Vitae, officia, explicabo</option>
									<option value="8">Delectus ad, rerum</option>
									<option value="9">Ab, laborum dignissimos</option>
								</select>
							</span>
						</p>
						<p id="reload">
							<label for="select-2">Select s reloadem na url</label><br />
							<span class="inp-fix inp-fix--select">
								<select name="select" id="select-2" class="js-select inp-select">
									<option value="0">Vyberte</option>
									<option value="http://www.seznam.cz/">Seznam.cz</option>
									<option value="http://www.google.com/">Google.com</option>
								</select>
							</span>
						</p>
						<form action="?">
							<p>
								<label for="suggest">Našeptávač</label><br />
								<span class="inp-fix">
									<input type="text" name="suggest" id="suggest" class="inp-text js-suggest"
										data-suggest='{
											"url":"../ajax/suggest.php",
											"optgroups":[
												{"id": "category", "name": "Kategorie"},
												{"id": "item", "name": "Textové výsledky"}
											]
										}'
									/>
								</span>
							</p>
						</form>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Checkboxy &amp; radia</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Důležitá je struktura label.inp-item > input + span, která díky css3 selektorům dokáže přestylovat checkbox/radio pomocí pseudoelementu :before a :after. Pro .inp-item se používají modifikátory inp-item--checkbox pro checkbox a inp-item--radio pro radio.
						</p>
						<p>
							Radia a checkboxy se mohou použí v různých souvislosech. Samostatně v elementu p. V elementu .inp--items jako výpis ul.inp-items__list > li nebo inlinově s modifikátorem inp-items--inline na elementu .inp-items.
						</p>
						<p>
							Error stav se řeší stejně jako u klasických inputů, tedy vložením class error na obalující element. Pokud chceme zvýraznit celý výpis, pak error classu nevložíme na obalující li, ale na ul.
						</p>
						<p>
							Disabled stav inputu se řeší pomocí atributu disabled="disabled". Checked stav se řeší pomocí atributu checked="checked"
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<p>
							<label class="inp-item inp-item--checkbox">
								<input type="checkbox" name="checkbox" value="1" />
								<span>Samostatný checkbox</span>
							</label>
						</p>
						<div class="inp-items">
							<p class="inp-items__label">Blokové checkboxy</p>
							<ul class="inp-items__list">
								<li class="inp-items__item">
									<label class="inp-item inp-item--checkbox">
										<input type="checkbox" name="checkbox1" value="1" />
										<span>Checkbox 1</span>
									</label>
								</li>
								<li class="inp-items__item">
									<label class="inp-item inp-item--checkbox">
										<input type="checkbox" name="checkbox1" value="2" checked="checked" />
										<span>Checkbox 2</span>
									</label>
								</li>
								<li class="inp-items__item">
									<label class="inp-item inp-item--checkbox">
										<input type="checkbox" name="checkbox1" value="3" disabled="disabled" />
										<span>Checkbox 3</span>
									</label>
								</li>
								<li class="inp-items__item">
									<label class="inp-item inp-item--checkbox">
										<input type="checkbox" name="checkbox1" value="4" disabled="disabled" checked="checked" />
										<span>Checkbox 4</span>
									</label>
								</li>
								<li class="inp-items__item error">
									<label class="inp-item inp-item--checkbox">
										<input type="checkbox" name="checkbox1" value="5" />
										<span>Checkbox 5</span>
									</label>
								</li>
								<li class="inp-items__item error">
									<label class="inp-item inp-item--checkbox">
										<input type="checkbox" name="checkbox1" value="6" checked="checked" />
										<span>Checkbox 6</span>
									</label>
								</li>
							</ul>
						</div>
						<div class="inp-items inp-items--inline">
							<p class="inp-items__label">Inlinové checkboxy</p>
							<ul class="inp-items__list">
								<li class="inp-items__item">
									<label class="inp-item inp-item--checkbox">
										<input type="checkbox" name="checkbox2" value="1" />
										<span>Checkbox 1</span>
									</label>
								</li>
								<li class="inp-items__item">
									<label class="inp-item inp-item--checkbox">
										<input type="checkbox" name="checkbox2" value="2" />
										<span>Checkbox 2</span>
									</label>
								</li>
							</ul>
						</div>
						<div class="inp-items inp-items--inline error">
							<p class="inp-items__label">Error inline checkboxy <span class="required">(povinné)</span></p>
							<ul class="inp-items__list">
								<li class="inp-items__item">
									<label class="inp-item inp-item--checkbox">
										<input type="checkbox" name="checkbox2" value="1" />
										<span>Checkbox 1</span>
									</label>
								</li>
								<li class="inp-items__item">
									<label class="inp-item inp-item--checkbox">
										<input type="checkbox" name="checkbox2" value="2" />
										<span>Checkbox 2</span>
									</label>
								</li>
							</ul>
						</div>
						<p>
							<label class="inp-item inp-item--radio">
								<input type="radio" name="radio" value="1" />
								<span>Samostatný radio - nemělo by se používat samo -> nejde odškrtnout</span>
							</label>
						</p>
						<div class="inp-items">
							<p class="inp-items__label">Blokové radia</p>
							<ul class="inp-items__list">
								<li class="inp-items__item">
									<label class="inp-item inp-item--radio">
										<input type="radio" name="radio1" value="1" />
										<span>Radio 1</span>
									</label>
								</li>
								<li class="inp-items__item">
									<label class="inp-item inp-item--radio">
										<input type="radio" name="radio1" value="2" disabled="disabled" checked="checked" />
										<span>Radio 2</span>
									</label>
								</li>
								<li class="inp-items__item error">
									<label class="inp-item inp-item--radio">
										<input type="radio" name="radio1" value="3" />
										<span>Radio 3</span>
									</label>
								</li>
							</ul>
						</div>
						<div class="inp-items inp-items--inline">
							<p class="inp-items__label">Řádkové radia</p>
							<ul class="inp-items__list">
								<li class="inp-items__item">
									<label class="inp-item inp-item--radio">
										<input type="radio" name="radio2" value="1" />
										<span>Radio 1</span>
									</label>
								</li>
								<li class="inp-items__item">
									<label class="inp-item inp-item--radio">
										<input type="radio" name="radio2" value="2" />
										<span>Radio 2</span>
									</label>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Všeobecná oznámení</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Standardní atom pro hlášky je .message, který je dále modifikován dle potřeby zvýraznění:<br />
							<strong>message--error</strong> - červená<br />
							<strong>message--warning</strong> - oranžová<br />
							<strong>message--info</strong> - modrá<br />
							<strong>message--success</strong> - zelená
						</p>
						<p>
							Ikonka lze použít kterákoliv z <a href="a-05-ikonky.html">atomů</a> ikonek.
						</p>
						<p>
							Pokud nechcete možnost zavření hlášky, pak stačí odstranit .message__close
						</p>
					</div>
					<div class="sk-example__content u-mb-50">
						<div class="message message--error">
							<a href="#" class="message__close icon icon-times" title="Zavřít">
								<span class="vhide">Zavřít</span>
							</a>
							<span class="message__icon icon icon-ban"></span>
							<h2 class="message__title">
								Chyba
							</h2>
							<p class="message__desc">
								Popis mollis laoreet nisl id tincidunt. Pellentesque mollis
							</p>
						</div>
						<div class="message message--warning">
							<a href="#" class="message__close icon icon-times" title="Zavřít">
								<span class="vhide">Zavřít</span>
							</a>
							<span class="message__icon icon icon-warning"></span>
							<h2 class="message__title">
								Výstraha
							</h2>
							<p class="message__desc">
								Popis mollis laoreet nisl id tincidunt. Pellentesque mollis
							</p>
						</div>
						<div class="message message--info">
							<a href="#" class="message__close icon icon-times" title="Zavřít">
								<span class="vhide">Zavřít</span>
							</a>
							<span class="message__icon icon icon-info-circle"></span>
							<h2 class="message__title">
								Informace
							</h2>
							<p class="message__desc">
								Popis mollis laoreet nisl id tincidunt. Pellentesque mollis
							</p>
						</div>
						<div class="message message--success">
							<a href="#" class="message__close icon icon-times" title="Zavřít">
								<span class="vhide">Zavřít</span>
							</a>
							<span class="message__icon icon icon-check-circle"></span>
							<h2 class="message__title">
								OK
							</h2>
							<p class="message__desc">
								Popis mollis laoreet nisl id tincidunt. Pellentesque mollis
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php
	include 'part/footer.php';
?>
