{**
 * templates/frontend/components/breadcrumbs_catalog.tpl
 *
 * Copyright (c) 2014-2017 Simon Fraser University Library
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Display a breadcrumb nav item showing the location in the catalog.
 *  This only supports one-level of nesting, as does the category hierarchy data.
 *
 * @uses $type string What kind of page should we use to construct urls
 *       (category, series, new)?
 * @uses $parent Category A parent category if one exists
 * @uses $currentTitle string The title to use for the current page.
 * @uses $currentTitleKey string Translation key for title of current page.
 *}

{*<nav class="cmp_breadcrumbs cmp_breadcrumbs_catalog" role="navigation" aria-label="{translate key="navigation.breadcrumbLabel"}">
	<ol>
		<li>
			<a href="{url page="index" router=$smarty.const.ROUTE_PAGE}">
				{translate key="common.homepageNavigationLabel"}
			</a>
			<span class="separator">{translate key="navigation.breadcrumbSeparator"}</span>
		</li>
		<li>
			<a href="{url router=$smarty.const.ROUTE_PAGE page="catalog"}">
				{translate key="navigation.catalog"}
			</a>
			<span class="separator">{translate key="navigation.breadcrumbSeparator"}</span>
		</li>
		{if $parent}
			<li>
				<a href="{url op=$type path=$parent->getPath()}">
					{$parent->getLocalizedTitle()|escape}
				</a>
				<span class="separator">{translate key="navigation.breadcrumbSeparator"}</span>
			</li>
		{/if}
		<li class="current">
			<h1>
				{if $currentTitleKey}
					{translate key=$currentTitleKey}
				{else}
					{$currentTitle|escape}
				{/if}
			</h1>
		</li>
	</ol>
</nav>*}
<nav class="menu-breadcrumb" role="navigation" aria-label="{translate key="navigation.breadcrumbLabel"}">

    <p>
        <a href="{url page="index" router=$smarty.const.ROUTE_PAGE}" class="menu-breadcrumb__item menu-breadcrumb__item--home">
            {translate key="common.homepageNavigationLabel"}
        </a>
        <span class="icon icon-angle-right"></span>
        <span class="menu-breadcrumb__mobile-hidden">
            <span class="icon icon-ellipsis-h"></span>
            <a href="{url router=$smarty.const.ROUTE_PAGE page="catalog"}" class="menu-breadcrumb__item">{translate key="navigation.catalog"}</a>
            {if $parent}
            <span class="icon icon-angle-right"></span>
            <a href="{url op=$type path=$parent->getPath()}" class="menu-breadcrumb__item">{$parent->getLocalizedTitle()|escape}</a>
            {/if}
        </span>
            
        <span class="icon icon-angle-right"></span>

        <strong class="menu-breadcrumb__item">
            {if $currentTitleKey}
                {translate key=$currentTitleKey}
            {else}
                {$currentTitle|escape}
            {/if}
        </strong>
    </p>
    {* Count of new releases being dispalyed *}
	{*<div class="monograph_count">
		{translate key="catalog.browseTitles" numTitles=$monographCount}
	</div>*}
</nav>