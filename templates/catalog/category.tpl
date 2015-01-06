{**
 * templates/catalog/category.tpl
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Display a public-facing category view in the catalog.
 *}
{strip}
{if $category}
    {assign var="pageTitleName" value=$category->getLocalizedTitle()}
{/if}
{include file="common/header.tpl" suppressPageTitle=true}
{/strip}

{if $category}
	<h2 class="pkp_helpers_text_left">{$category->getLocalizedTitle()}</h2>
{/if}

<div class="catalogContainer" style="max-width: 765px;">

{if $category}
    
	{assign var="image" value=$category->getImage()}

	{* Include the carousel view of featured content *}
	{if $featuredMonographIds|@count}
            
		{include file="catalog/carousel.tpl" publishedMonographs=$publishedMonographsFeature featuredMonographIds=$featuredMonographIds}
	{/if}
        
        {if $category->getLocalizedDescription() || $image}
		<div class="pkp_catalog_categoryDescription">
			{if $image}
				<a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="fullSize" type="category" id=$category->getId()}">
					<img class="pkp_helpers_align_left" height="{$image.thumbnailHeight}" width="{$image.thumbnailWidth}" src="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="thumbnail" type="category" id=$category->getId()}" alt="{$category->getLocalizedTitle()|escape}" />
				</a>
			{/if}
                        {$category->getLocalizedDescription()|strip_unsafe_html}
		</div>
	{/if}

	{* Include the highlighted feature *}
	{*{include file="catalog/feature.tpl" publishedMonographs=$publishedMonographsFeature featuredMonographIds=$featuredMonographIds}*}

	{* Include the new release monograph list *}
	{*{if !$newReleasesMonographs->wasEmpty()}
		{include file="catalog/monographs.tpl" 
                        publishedMonographs=$newReleasesMonographs 
                        monographListTitleKey="navigation.newReleases"
                        paging = 'false'
                }
	{/if}*}
        

	{* Include the full monograph list *}
	{include file="catalog/monographs.tpl" publishedMonographs=$publishedMonographs}
{/if}
</div><!-- catalogContainer -->

{include file="common/footer.tpl"}
