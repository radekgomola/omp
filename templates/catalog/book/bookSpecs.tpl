{**
 * templates/catalog/book/bookSpecs.tpl
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Display the book specs portion of the public-facing book view.
 *}

<script type="text/javascript">
	// Initialize JS handler for catalog header.
	$(function() {ldelim}
		$('#bookAccordion').accordion({ldelim} autoHeight: false {rdelim});
	{rdelim});
</script>

<div class="bookSpecs">
	{assign var=coverImage value=$publishedMonograph->getCoverImage()}
	<a title="{$publishedMonograph->getLocalizedFullTitle()|strip_tags|escape}" href="{$bookImageLinkUrl}" onclick="return hs.expand(this)"><img class="pkp_helpers_container_center cover_img" alt="{$publishedMonograph->getLocalizedFullTitle()|escape}" src="{url router=$smarty.const.ROUTE_COMPONENT component="submission.CoverHandler" op="catalog" submissionId=$publishedMonograph->getId()}" /></a>
	<div id="bookAccordion">
		<h3><a href="#">{translate key="catalog.publicationInfo"}</a></h3>
		<div class="publicationInfo">
			{assign var="cena" value=$publishedMonograph->getCena()|strip_unsafe_html}
                        {assign var="cena_ebook" value=$publishedMonograph->getCenaEbook()|strip_unsafe_html}
                        {assign var="pocetStran" value=$publishedMonograph->getPocetStran()|strip_unsafe_html}
			{assign var="urlOC" value=$publishedMonograph->getUrlOC()|strip_unsafe_html}
                        {assign var="urlOC_ebook" value=$publishedMonograph->getUrlOCEbook()|strip_unsafe_html}
                        
                        {if !empty($cena) && $cena != 0}
                            <div class="infoPodKnihou">
                            <span>{translate key="submission.ceny.kniha"}:</span>
                            &nbsp;<span style="font-size: 1.3em; color: red;">{$cena} {translate key="submission.cena.mena"}</span><br />
                                {if !empty($urlOC) && $urlOC != 0}
                                    &nbsp;&nbsp;<span ><a href="http://is.muni.cz/obchod/baleni/{$urlOC}{translate key="submission.obchodniCentrum.prepinacJazyku"}" target="_blank">{translate key="informace.url.oc"}</a></span>
                            {/if}
                            </div>
                        {/if}
                        
                        {if !empty($cena_ebook) && $cena_ebook !=0}
                            <div class="infoPodKnihou">
                            <span >{translate key="submission.ceny.ekniha"}:</span>
                            &nbsp;<span style="font-size: 1.3em; color: red;">{$cena_ebook} {translate key="submission.cena.mena"}</span><br />
                            {if !empty($urlOC_ebook) && $urlOC_ebook != 0}
                                &nbsp;&nbsp;<span><a href="http://is.muni.cz/obchod/baleni/{$urlOC_ebook}{translate key="submission.obchodniCentrum.prepinacJazyku"}" target="_blank">{translate key="informace.url.oc"}</a></span>
                            {/if}
                            </div>
                        {/if}
                        
                        {if (empty($cena) && empty($cena_ebook)) || ($cena == 0 && $cena_ebook == 0)}
                            <div class="infoPodKnihou">
                            <span class="openAccess">{translate key="submission.ceny.openAccess"}</span><br />
                            </div>
                        {/if}
                        {if !empty($pocetStran)}
                            <div class="infoPodKnihou">
                            <span >{translate key="submission.pocetStran"}:</span>
                            &nbsp;{$pocetStran}
                            </div>
                        {/if}
			{if $series}
                <div class="seriesLink">{translate key="series.series"}: <a href="{url page="catalog" op="series" path=$series->getPath()}">{$series->getLocalizedFullTitle()}</a></div>
			{/if}

		</div>

		{assign var=categories value=$publishedMonograph->getCategories()}
		{if !$categories->wasEmpty()}
			<h3><a href="#">{translate key="catalog.relatedCategories"}</a></h3>
			<ul class="relatedCategories">
				{iterate from=categories item=category}
					<li><a href="{url op="category" path=$category->getPath()}">{$category->getLocalizedTitle()|strip_unsafe_html}</a></li>
				{/iterate}{* categories *}
			</ul>
		{/if}{* !$categories->wasEmpty() *}
	</div>
</div>
