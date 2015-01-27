{**
 * templates/catalog/carousel.tpl
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Display a carousel in the public-facing catalog view.
 *}
{* Only include if there are actually monographs to display *}
{if $publishedMonographs|@count > 0}

<script type="text/javascript">
	// Initialize JS handler for catalog header.
	$(function() {ldelim}
		$('#featuresCarousel').pkpHandler(
			'$.pkp.pages.catalog.CarouselHandler'
		);
	{rdelim});
</script>

<!-- Features carousel -->
<div class="pkp_catalog_carousel_wrapper pkp_helpers_clear" id="featuresCarousel">
	{*<h2 class="pkp_helpers_text_center"><em>{translate key="catalog.featuredBooks"}</em></h2>*}
	<div class="carousel_control" id="nextCarouselItem"></div>
	<div class="carousel_control" id="previousCarouselItem"></div>
	<ul class="pkp_catalog_carousel">
		{foreach from=$publishedMonographs item=publishedMonograph}
			{* Only include features in the carousel *}
			{assign var="submissionId" value=$publishedMonograph->getId()}
			{if isset($featuredMonographIds[$submissionId])}
			<li id="publishedMonograph-{$submissionId}" class="mover">
                            <span class="moverImg"><img src="{url router=$smarty.const.ROUTE_COMPONENT component="submission.CoverHandler" op="cover" submissionId=$publishedMonograph->getId() random=$publishedMonograph->getId()|uniqid}" alt="{$publishedMonograph->getLocalizedFullTitle()|strip_tags|escape}" data-caption="#publishedMonograph-{$submissionId}-caption"/></span>
				<div class="details_box" id="publishedMonograph-{$submissionId}-details">
                                    <a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="book" path=$submissionId}">{$publishedMonograph->getLocalizedFullTitle()|strip_unsafe_html}</a>
					<div class="pkp_catalog_monograph_authorship">{$publishedMonograph->getAuthorString()|escape}</div>
					
				</div>
				<div class="pkp_helpers_progressIndicator"></div>
			</li>
			{/if}
		{/foreach}
	</ul>
</div>

{/if}{* $publishedMonographs|@count > 0 *}
