<?php
	$title = 'Časové osy';
	include 'part/header.php';
?>

		<div id="main" class="main" role="main">
			<div class="row-main">
				<div class="sk-annot--main">
					<h1>
						<strong>02.08</strong>
						Boxy – Časové osy
					</h1>
					<p>
						<strong>Zdrojové CSS:</strong> /src/css/molecules/box/_timeline.scss
					</p>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Defaultní</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Výchozí molekula pro zobrazení událostí v časovém sledu. Každá položka může být klikatelná a docílíme toho tak, že .box-timeline__inner změníme z elementu span na element a s atributem href.
						</p>
						<p>
							Tento výpis má jeden stav pro méně důležité události (např. konce akcí), který obarví bod a změnší písmo. Nastavuje se modifikátorem box-timeline__item--end na .box-timeline__item.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="box-timeline">
							<ul class="box-timeline__list">
								<li class="box-timeline__item">
									<a href="#" class="box-timeline__inner">
										<span class="box-timeline__point"></span>
										<strong class="box-timeline__title">Zveřejnění rozvrhu</strong>
										<span class="box-timeline__date">1. července 2015 v 0:00 hod.</span>
									</a>
								</li>
								<li class="box-timeline__item">
									<span class="box-timeline__inner">
										<span class="box-timeline__point"></span>
										<strong class="box-timeline__title">Začátek registrace předmětů</strong>
										<span class="box-timeline__date">1. července 2015 v 0:00 hod.</span>
									</span>
								</li>
								<li class="box-timeline__item box-timeline__item--end">
									<span class="box-timeline__inner">
										<span class="box-timeline__point"></span>
										<span class="box-timeline__title">Začátek registrace předmětů</span>
										<span class="box-timeline__date">1. července 2015 v 0:00 hod.</span>
									</span>
								</li>
								<li class="box-timeline__item">
									<a href="#" class="box-timeline__inner">
										<span class="box-timeline__point"></span>
										<strong class="box-timeline__title">Zveřejnění rozvrhu</strong>
										<span class="box-timeline__date">1. července 2015 v 0:00 hod.</span>
									</a>
								</li>
								<li class="box-timeline__item">
									<span class="box-timeline__inner">
										<span class="box-timeline__point"></span>
										<strong class="box-timeline__title">Začátek registrace předmětů</strong>
										<span class="box-timeline__date">1. července 2015 v 0:00 hod.</span>
									</span>
								</li>
								<li class="box-timeline__item box-timeline__item--end">
									<span class="box-timeline__inner">
										<span class="box-timeline__point"></span>
										<span class="box-timeline__title">Začátek registrace předmětů</span>
										<span class="box-timeline__date">1. července 2015 v 0:00 hod.</span>
									</span>
								</li>
							</ul>
							<p>
								<a href="#" class="btn btn-primary btn-s btn-icon-before">
									<span>
										<span class="icon icon-calendar-o"></span>
										Do Google kalendáře
									</span>
								</a>
							</p>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Zarovnaná doprostřed</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Molekula vychází z defaultní molekuly, pouze je zarovnaná doprostřed. Nastavuje se modifikátorem box-timeline--center na .box-timeline
						</p>
					</div>
					<div class="sk-example__content">
						<div class="box-timeline box-timeline--center">
							<ul class="box-timeline__list">
								<li class="box-timeline__item">
									<a href="#" class="box-timeline__inner">
										<span class="box-timeline__point"></span>
										<strong class="box-timeline__title">Zveřejnění rozvrhu</strong>
										<span class="box-timeline__date">1. července 2015 v 0:00 hod.</span>
									</a>
								</li>
								<li class="box-timeline__item">
									<span class="box-timeline__inner">
										<span class="box-timeline__point"></span>
										<strong class="box-timeline__title">Začátek registrace předmětů</strong>
										<span class="box-timeline__date">1. července 2015 v 0:00 hod.</span>
									</span>
								</li>
								<li class="box-timeline__item box-timeline__item--end">
									<span class="box-timeline__inner">
										<span class="box-timeline__point"></span>
										<span class="box-timeline__title">Začátek registrace předmětů</span>
										<span class="box-timeline__date">1. července 2015 v 0:00 hod.</span>
									</span>
								</li>
								<li class="box-timeline__item">
									<a href="#" class="box-timeline__inner">
										<span class="box-timeline__point"></span>
										<strong class="box-timeline__title">Zveřejnění rozvrhu</strong>
										<span class="box-timeline__date">1. července 2015 v 0:00 hod.</span>
									</a>
								</li>
								<li class="box-timeline__item">
									<span class="box-timeline__inner">
										<span class="box-timeline__point"></span>
										<strong class="box-timeline__title">Začátek registrace předmětů</strong>
										<span class="box-timeline__date">1. července 2015 v 0:00 hod.</span>
									</span>
								</li>
								<li class="box-timeline__item box-timeline__item--end">
									<span class="box-timeline__inner">
										<span class="box-timeline__point"></span>
										<span class="box-timeline__title">Začátek registrace předmětů</span>
										<span class="box-timeline__date">1. července 2015 v 0:00 hod.</span>
									</span>
								</li>
							</ul>
							<p>
								<a href="#" class="btn btn-primary btn-s btn-icon-before">
									<span>
										<span class="icon icon-calendar-o"></span>
										Do Google kalendáře
									</span>
								</a>
							</p>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">S boxy</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Rozšíření defaultní molekuly – Obsah jednolivých událostí ohraničí. Nastavuje se modifikátorem box-timeline--boxes na .box-timeline a lehce se změní HTML vnitřního boxu.
						</p>
						<p>
							Celý box může být opět odkazem – viz. dokumentace defaultní komponenty.
						</p>
						<p>
							Uvnitř boxu se může objevit "jakékoliv" HTML. Avšak pokud je obalující .box-timeline__inner elementem a, pak by se uvnitř neměly žádné další objevit. Pokud chcete uvnitř použít atom <a href="a-04-tlacitka.html">buttonu</a>, pak ho vytvořte jako element span viz. příklad na dvě třetiny.
						</p>
						<p>
							Nad boxem může být nadpis, který např. může rozdělovat výpis na roky. Tento nadpis se umisťuje nad .box-timeline__box a může nabývat modifikátor box-timeline__title-date--big pro výraznější nadpis.
						</p>
						<p>
							Další možností je box podbarvit primární barvou. Toto lze nastavit modifikátorem box-timeline__box--bg na .box-timeline__box.
						</p>
						<p>
							Poslední možností je do boxu přidat obrázek. Toto lze nastavit modifikátorem box-timeline__box--img na .box-timeline__box a lehce tomu přizpůsobit html (přidat element s obrázkem).
						</p>
					</div>
					<div class="sk-example__content">
						<div class="box-timeline box-timeline--boxes">
							<ul class="box-timeline__list">
								<li class="box-timeline__item">
									<a href="#" class="box-timeline__inner">
										<div class="box-timeline__box">
											<span class="box-timeline__point"></span>
											<h2 class="box-timeline__box__title">1. Rozmyslete si, co vás baví</h2>
											<p>V jakých předmětech jste nejlepší? Co vás baví? Do jakých kroužků chodíte? Čemu se věnujete ve volném čase? Udělejte si seznam toho, co připadá v úvahu. A poraďte se s rodiči, kamarády a lidmi, kteří vás dobře znají. Nemusíte se jejich doporučením řídit, ale může vám přinést úplně jiný pohled.</p>
										</div>
									</a>
								</li>
								<li class="box-timeline__item">
									<div class="box-timeline__inner">
										<div class="box-timeline__box">
											<span class="box-timeline__point"></span>
											<h2 class="box-timeline__box__title">2. Projděte si nabídku oborů a vyberte favority</h2>
											<p>V naší nabídce je přes 1 400 oborů a jejich kombinací. U každého oboru jsou navíc vypsané příbuzné obory. Přečtěte si ohlasy studentů, podívejte se na předměty a vyberte si své favority.</p>
										</div>
									</div>
								</li>
								<li class="box-timeline__item">
									<div class="box-timeline__inner">
										<p class="box-timeline__title-date box-timeline__title-date--big">Velký nadpis</p>
										<div class="box-timeline__box">
											<span class="box-timeline__point"></span>
											<h2 class="box-timeline__box__title">3. Zajděte na den otevřených dveří</h2>
											<p>V lednu a únoru vyrazte na den otevřených dveří. Promluvíte si se studenty a vyučujícími, získáte spoustu informací z první ruky a budete mít <a href="#">jasnou představu</a> o tom, jestli je tento obor ten pravý. Nic vám nebrání vypravit se na nějakou z přednášek špionážně po vlastní ose.</p>
										</div>
									</div>
								</li>
								<li class="box-timeline__item">
									<div class="box-timeline__inner">
										<p class="box-timeline__title-date">V září nebo v lednu</p>
										<div class="box-timeline__box">
											<span class="box-timeline__point"></span>
											<h2 class="box-timeline__box__title">3. Zajděte na den otevřených dveří</h2>
											<p>V lednu a únoru vyrazte na den otevřených dveří. Promluvíte si se studenty a vyučujícími, získáte spoustu informací z první ruky a budete mít <a href="#">jasnou představu</a> o tom, jestli je tento obor ten pravý. Nic vám nebrání vypravit se na nějakou z přednášek špionážně po vlastní ose.</p>
										</div>
									</div>
								</li>
								<li class="box-timeline__item">
									<div class="box-timeline__inner">
										<div class="box-timeline__box">
											<span class="box-timeline__point"></span>
											<h2 class="box-timeline__box__title">4. Projděte si nabídku oborů a vyberte favority</h2>
											<p>V naší nabídce je přes 1 400 oborů a jejich kombinací. U každého oboru jsou navíc vypsané příbuzné obory. Přečtěte si ohlasy studentů, podívejte se na předměty a vyberte si své favority.</p>
										</div>
									</div>
								</li>
								<li class="box-timeline__item">
									<div class="box-timeline__inner">
										<div class="box-timeline__box box-timeline__box--bg">
											<span class="box-timeline__point"></span>
											<h2 class="box-timeline__box__title">6. Projděte si nabídku oborů a vyberte favority</h2>
											<p>V naší nabídce je přes 1 400 oborů a jejich kombinací. U každého oboru jsou navíc vypsané příbuzné obory. Přečtěte si ohlasy studentů, podívejte se na předměty a vyberte si své favority.</p>
										</div>
									</div>
								</li>
								<li class="box-timeline__item">
									<div class="box-timeline__inner">
										<div class="box-timeline__box box-timeline__box--img">
											<span class="box-timeline__point"></span>
											<p class="box-timeline__box__img">
												<img src="../img/illust/testimonial-photo.jpg" width="980" height="653" alt="">
											</p>
											<h2 class="box-timeline__box__title">5. Projděte si nabídku oborů a vyberte favority</h2>
											<p>V naší nabídce je přes 1 400 oborů a jejich kombinací. U každého oboru jsou navíc vypsané příbuzné obory. Přečtěte si ohlasy studentů, podívejte se na předměty a vyberte si své favority.</p>
											<p>V naší nabídce je přes 1 400 oborů a jejich kombinací. U každého oboru jsou navíc vypsané příbuzné obory. Přečtěte si ohlasy studentů, podívejte se na předměty a vyberte si své favority.</p>
											<p>V naší nabídce je přes 1 400 oborů a jejich kombinací. U každého oboru jsou navíc vypsané příbuzné obory. Přečtěte si ohlasy studentů, podívejte se na předměty a vyberte si své favority.</p>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">S boxy s omezení šířky</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Modifikace molekuly s boxy. Maximální šířka boxu se omezí na 800px. Nastavuje se modifikátorem box-timeline--two-third na .box-timeline, kterému se nechává modifikátor box-timeline--boxes.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="box-timeline box-timeline--boxes box-timeline--two-third">
							<ul class="box-timeline__list">
								<li class="box-timeline__item">
									<a href="#" class="box-timeline__inner">
										<div class="box-timeline__box">
											<span class="box-timeline__point"></span>
											<h2 class="box-timeline__box__title">Sociální pedagogové pomáhají v Angole</h2>
											<p>V jakých předmětech jste nejlepší? Co vás baví? Do jakých kroužků chodíte? Čemu se věnujete ve volném čase? Udělejte si seznam toho, co připadá v úvahu. A poraďte se s rodiči, kamarády a lidmi, kteří vás dobře znají. Nemusíte se jejich doporučením řídit, ale může vám přinést úplně jiný pohled.</p>
											<p>
												<span class="btn btn-s btn-primary">
													<span>Button</span>
												</span>
											</p>
										</div>
									</a>
								</li>
								<li class="box-timeline__item">
									<a href="#" class="box-timeline__inner">
										<div class="box-timeline__box">
											<span class="box-timeline__point"></span>
											<h2 class="box-timeline__box__title">Patent pomůže boji s rakovinou</h2>
											<p>V jakých předmětech jste nejlepší? Co vás baví? Do jakých kroužků chodíte? Čemu se věnujete ve volném čase? Udělejte si seznam toho, co připadá v úvahu. A poraďte se s rodiči, kamarády a lidmi, kteří vás dobře znají. Nemusíte se jejich doporučením řídit, ale může vám přinést úplně jiný pohled.</p>
										</div>
									</a>
								</li>
								<li class="box-timeline__item">
									<a href="#" class="box-timeline__inner">
										<div class="box-timeline__box">
											<span class="box-timeline__point"></span>
											<h2 class="box-timeline__box__title">Rok 2007 v Muni</h2>
											<p>V jakých předmětech jste nejlepší? Co vás baví? Do jakých kroužků chodíte? Čemu se věnujete ve volném čase? Udělejte si seznam toho, co připadá v úvahu. A poraďte se s rodiči, kamarády a lidmi, kteří vás dobře znají. Nemusíte se jejich doporučením řídit, ale může vám přinést úplně jiný pohled.</p>
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">S boxy s větším omezení šířky</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Modifikace molekuly s boxy. Maximální šířka boxu se omezí na 542px. Nastavuje se modifikátorem box-timeline--half na .box-timeline, kterému se nechává modifikátor box-timeline--boxes.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="box-timeline box-timeline--boxes box-timeline--half">
							<ul class="box-timeline__list">
								<li class="box-timeline__item">
									<a href="#" class="box-timeline__inner">
										<div class="box-timeline__box">
											<span class="box-timeline__point"></span>
											<h2 class="box-timeline__box__title">Sociální pedagogové pomáhají v Angole</h2>
											<p>
												<img src="../img/illust/timeline.jpg" alt="" width="410" height="205" />
											</p>
											<p>V jakých předmětech jste nejlepší? Co vás baví? Do jakých kroužků chodíte? Čemu se věnujete ve volném čase? Udělejte si seznam toho, co připadá v úvahu. A poraďte se s rodiči, kamarády a lidmi, kteří vás dobře znají. Nemusíte se jejich doporučením řídit, ale může vám přinést úplně jiný pohled.</p>
											<p>
												<span class="btn btn-s btn-primary">
													<span>Button</span>
												</span>
											</p>
										</div>
									</a>
								</li>
								<li class="box-timeline__item">
									<a href="#" class="box-timeline__inner">
										<div class="box-timeline__box">
											<span class="box-timeline__point"></span>
											<h2 class="box-timeline__box__title">Patent pomůže boji s rakovinou</h2>
											<p>V jakých předmětech jste nejlepší? Co vás baví? Do jakých kroužků chodíte? Čemu se věnujete ve volném čase? Udělejte si seznam toho, co připadá v úvahu. A poraďte se s rodiči, kamarády a lidmi, kteří vás dobře znají. Nemusíte se jejich doporučením řídit, ale může vám přinést úplně jiný pohled.</p>
										</div>
									</a>
								</li>
								<li class="box-timeline__item">
									<a href="#" class="box-timeline__inner">
										<div class="box-timeline__box">
											<span class="box-timeline__point"></span>
											<h2 class="box-timeline__box__title">Rok 2007 v Muni</h2>
											<p>V jakých předmětech jste nejlepší? Co vás baví? Do jakých kroužků chodíte? Čemu se věnujete ve volném čase? Udělejte si seznam toho, co připadá v úvahu. A poraďte se s rodiči, kamarády a lidmi, kteří vás dobře znají. Nemusíte se jejich doporučením řídit, ale může vám přinést úplně jiný pohled.</p>
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Časová osa událostí</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Tato molekula slouží jako kostra pro výpis událostí v nějakém sledu. Do .box-timeline-dates__item lze vkládat "jakékoliv" boxové molekuly. V našem případě používáme molekuly boxů s <a href="m-02-14-udalosti.html">událostmi</a> a <a href="m-02-13-clanky.html">článku</a>.
						</p>
						<p>
							Defaultně je připaravené s čárou pod kalendáříky, která opticky spojuje celý výpis – což se hodí pouze pro výpis událostí s kalendáři. Pokud chceme tento výpis bez čar, pak k tomu slouží modifikátor box-timeline-dates__item--no-line na .box-timeline-dates__item.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="box-timeline-dates">
							<div class="box-timeline-dates__box">
								<h3 class="box-timeline-dates__title">Listopad 2016</h3>
								<ul class="box-timeline-dates__list">
									<li class="box-timeline-dates__item">
										<div class="box-event box-event--side">
											<div class="box-event__content">
												<div class="datebox datebox--phil">
													<p class="datebox__day">
														Čtvrtek
													</p>
													<p class="datebox__date">
														24.&nbsp;3.<br />
														– 4.&nbsp;5.
													</p>
												</div>
												<h3 class="box-event__title"><a href="#">Workshopy iPAD v akademickém prostředí – jaro 2016</a></h3>
												<p>Kancelář e-learningu FF MU připravila pro jarní semestr 2016 další sérii workshopů iPAD v akademické...</p>
												<p class="meta meta--inline">
													<strong class="meta__item">od 9:00 do 10:00</strong>
													<span class="meta__item">pro Studenti FF</span>
													<a href="#" class="meta__item">Ekonomicko správní fakulta</a>
												</p>
											</div>
										</div>
									</li>
									<li class="box-timeline-dates__item">
										<div class="box-event box-event--side">
											<div class="box-event__content">
												<div class="datebox datebox--ped">
													<p class="datebox__day">
														Čtvrtek
													</p>
													<p class="datebox__date">
														24.&nbsp;3.
													</p>
												</div>
												<h3 class="box-event__title"><a href="#">Workshopy iPAD v akademickém prostředí – jaro 2016</a></h3>
												<p>Kancelář e-learningu FF MU připravila pro jarní semestr 2016 další sérii workshopů iPAD v akademické...</p>
												<p class="meta meta--inline">
													<strong class="meta__item">od 9:00 do 10:00</strong>
													<span class="meta__item">pro Studenti FF</span>
													<a href="#" class="meta__item">Ekonomicko správní fakulta</a>
												</p>
											</div>
										</div>
									</li>
									<li class="box-timeline-dates__item">
										<div class="box-event box-event--side">
											<div class="box-event__content">
												<div class="datebox datebox--econ">
													<p class="datebox__day">
														Čtvrtek
													</p>
													<p class="datebox__date">
														24.&nbsp;3.
													</p>
												</div>
												<h3 class="box-event__title"><a href="#">Workshopy iPAD v akademickém prostředí – jaro 2016</a></h3>
												<p>Kancelář e-learningu FF MU připravila pro jarní semestr 2016 další sérii workshopů iPAD v akademické...</p>
												<p class="meta meta--inline">
													<strong class="meta__item">od 9:00 do 10:00</strong>
													<span class="meta__item">pro Studenti FF</span>
													<a href="#" class="meta__item">Ekonomicko správní fakulta</a>
												</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="box-timeline-dates__box">
								<h3 class="box-timeline-dates__title">Prosinec 2016</h3>
								<ul class="box-timeline-dates__list">
									<li class="box-timeline-dates__item">
										<div class="box-event box-event--side">
											<div class="box-event__content">
												<div class="datebox datebox--phil">
													<p class="datebox__day">
														Čtvrtek
													</p>
													<p class="datebox__date">
														24.&nbsp;3.
													</p>
												</div>
												<h3 class="box-event__title"><a href="#">Workshopy iPAD v akademickém prostředí – jaro 2016</a></h3>
												<p>Kancelář e-learningu FF MU připravila pro jarní semestr 2016 další sérii workshopů iPAD v akademické...</p>
												<p class="meta meta--inline">
													<strong class="meta__item">od 9:00 do 10:00</strong>
													<span class="meta__item">pro Studenti FF</span>
													<a href="#" class="meta__item">Ekonomicko správní fakulta</a>
												</p>
											</div>
										</div>
									</li>
									<li class="box-timeline-dates__item">
										<div class="box-event box-event--side">
											<div class="box-event__content">
												<div class="datebox datebox--ped">
													<p class="datebox__day">
														Čtvrtek
													</p>
													<p class="datebox__date">
														24.&nbsp;3.
													</p>
												</div>
												<h3 class="box-event__title"><a href="#">Workshopy iPAD v akademickém prostředí – jaro 2016</a></h3>
												<p>Kancelář e-learningu FF MU připravila pro jarní semestr 2016 další sérii workshopů iPAD v akademické...</p>
												<p class="meta meta--inline">
													<strong class="meta__item">od 9:00 do 10:00</strong>
													<span class="meta__item">pro Studenti FF</span>
													<a href="#" class="meta__item">Ekonomicko správní fakulta</a>
												</p>
											</div>
										</div>
									</li>
									<li class="box-timeline-dates__item">
										<div class="box-event box-event--side">
											<div class="box-event__content">
												<div class="datebox datebox--econ">
													<p class="datebox__day">
														Čtvrtek
													</p>
													<p class="datebox__date">
														24.&nbsp;3.
													</p>
												</div>
												<h3 class="box-event__title"><a href="#">Workshopy iPAD v akademickém prostředí – jaro 2016</a></h3>
												<p>Kancelář e-learningu FF MU připravila pro jarní semestr 2016 další sérii workshopů iPAD v akademické...</p>
												<p class="meta meta--inline">
													<strong class="meta__item">od 9:00 do 10:00</strong>
													<span class="meta__item">pro Studenti FF</span>
													<a href="#" class="meta__item">Ekonomicko správní fakulta</a>
												</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="box-timeline-dates__box">
								<h3 class="box-timeline-dates__title">Leden - ukázka kombinace s jinými boxy</h3>
								<ul class="box-timeline-dates__list">
									<li class="box-timeline-dates__item box-timeline-dates__item--no-line">
										<a href="#" class="box-article">
											<p class="box-article__img">
												<img src="../img/illust/article.jpg" alt="" width="270" height="151" />
											</p>
											<p class="box-article__meta meta">
												<span class="meta__item">19.11.2015</span>
												<span class="meta__item">Jméno autora</span>
											</p>
											<h2 class="box-article__title">Soutěž Pro vodu - úvodní worshop "Od nápadu k realizaci"</h2>
											<p class="box-article__desc">
												Cílem vyhlašované soutěže o Cenu rektora Masarykovy univerzity pro vynikající pedagogy je ocenit kvalitní pedagogickou činnost zaměstnanců Masarykovy univerzity. Záměrně jsou proto posuzovány pouze pedagogické aktivity nominovaných.
											</p>
										</a>
									</li>
									<li class="box-timeline-dates__item box-timeline-dates__item--no-line">
										<a href="#" class="box-article">
											<p class="box-article__img">
												<img src="../img/illust/article.jpg" alt="" width="270" height="151" />
											</p>
											<p class="box-article__meta meta">
												<span class="meta__item">19.11.2015</span>
												<span class="meta__item">Jméno autora</span>
											</p>
											<h2 class="box-article__title">Soutěž Pro vodu - úvodní worshop "Od nápadu k realizaci"</h2>
											<p class="box-article__desc">
												Cílem vyhlašované soutěže o Cenu rektora Masarykovy univerzity pro vynikající pedagogy je ocenit kvalitní pedagogickou činnost zaměstnanců Masarykovy univerzity. Záměrně jsou proto posuzovány pouze pedagogické aktivity nominovaných.
											</p>
										</a>
									</li>
									<li class="box-timeline-dates__item box-timeline-dates__item--no-line">
										<a href="#" class="box-article">
											<p class="box-article__img">
												<img src="../img/illust/article.jpg" alt="" width="270" height="151" />
											</p>
											<p class="box-article__meta meta">
												<span class="meta__item">19.11.2015</span>
												<span class="meta__item">Jméno autora</span>
											</p>
											<h2 class="box-article__title">Soutěž Pro vodu - úvodní worshop "Od nápadu k realizaci"</h2>
											<p class="box-article__desc">
												Cílem vyhlašované soutěže o Cenu rektora Masarykovy univerzity pro vynikající pedagogy je ocenit kvalitní pedagogickou činnost zaměstnanců Masarykovy univerzity. Záměrně jsou proto posuzovány pouze pedagogické aktivity nominovaných.
											</p>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>


				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Progress bar s čísly</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Defaultní molekula pro horizontální výpis kroků. Standardní ukázka bez modifikátorů je krok 3.
						</p>
						<p>
							První krok je ukázka již hotového stavu. Nastavuje se modifikátorem box-timeline-progress__item--ok na .box-timeline-progress__item. Navíc se do .box-timeline-progress__illust doplní <a href="a-05-ikonky.html">ikonka</a>.
						</p>
						<p>
							Druhý krok je ukázka aktivní položky. Nastavuje se modifikátorem box-timeline-progress__item--active na .box-timeline-progress__item.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="box-timeline-progress">
							<ol class="box-timeline-progress__list">
								<li class="box-timeline-progress__item box-timeline-progress__item--ok">
									<p class="box-timeline-progress__illust">
										<span class="icon icon-check"></span>
									</p>
									<p class="box-timeline-progress__title"><a href="#">Nadpis vyplněného kroku</a></p>
									<p class="box-timeline-progress__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet</p>
								</li>
								<li class="box-timeline-progress__item box-timeline-progress__item--active">
									<p class="box-timeline-progress__illust">
										2
									</p>
									<p class="box-timeline-progress__title">Nadpis aktivního kroku</p>
									<p class="box-timeline-progress__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet</p>
								</li>
								<li class="box-timeline-progress__item">
									<p class="box-timeline-progress__illust">
										3
									</p>
									<p class="box-timeline-progress__title">Nadpis kroku</p>
									<p class="box-timeline-progress__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet</p>
								</li>
							</ol>
						</div>
					</div>
				</div>

				<div class="sk-example">
					<div class="sk-annot">
						<h2 class="sk-annot__title">Progress bar s ikonami</h2>
					</div>
					<div class="sk-example__comment">
						<p>
							Horizontální výpis kroků lze také využít i pro vypis nějakých informací s ikonkami. Princip je stejný jako u předchozí molekuly a namísto čísla se vloží atom jakékoliv <a href="a-05-ikonky.html">ikonky</a>.
						</p>
					</div>
					<div class="sk-example__content">
						<div class="box-timeline-progress">
							<ol class="box-timeline-progress__list">
								<li class="box-timeline-progress__item box-timeline-progress__item--ok">
									<p class="box-timeline-progress__illust">
										<span class="icon icon-check"></span>
									</p>
									<p class="box-timeline-progress__title"><a href="#">Nadpis vyplněného kroku</a></p>
									<p class="box-timeline-progress__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet</p>
								</li>
								<li class="box-timeline-progress__item box-timeline-progress__item--active">
									<p class="box-timeline-progress__illust">
										<span class="icon icon-calendar-plus-o"></span>
									</p>
									<p class="box-timeline-progress__title">Nadpis aktivního kroku</p>
									<p class="box-timeline-progress__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet</p>
								</li>
								<li class="box-timeline-progress__item">
									<p class="box-timeline-progress__illust">
										<span class="icon icon-info-circle"></span>
									</p>
									<p class="box-timeline-progress__title">Nadpis kroku</p>
									<p class="box-timeline-progress__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet</p>
								</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php
	include 'part/footer.php';
?>
