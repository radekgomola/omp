{**
 * templates/frontend/components/searchForm_simple.tpl
 *
 * Copyright (c) 2014-2017 Simon Fraser University Library
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Simple display of a search form with just text input and search button
 *
 * @uses $searchQuery string Previously input search query
 *}
{* 
<form class="cmp_form cmp_search" action="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="results"}" method="post" role="search">
	<input name="query" value="{$searchQuery|escape}" type="text" aria-label="{translate|escape key="common.searchQuery"}">
	<button type="submit">
		{translate key="common.search"}
	</button>
	<div class="search_controls" aria-hidden="true">
		<a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="results"}" class="headerSearchPrompt search_prompt" aria-hidden="true">
			{translate key="common.search"}
		</a>
		<a href="#" class="search_cancel headerSearchCancel" aria-hidden="true"></a>
		<span class="search_loading" aria-hidden="true"></span>
	</div>
</form>*}
 
<form class="search {if $header}header__search{elseif $simpleSearch}simple__search{/if}" action="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="resultsGoogle"}" method="get" id="form-search" role="search">
    <fieldset>
        <p>
                <label for="search" class="header__search__label icon icon-search"><span class="vhide">Vyhledávání</span></label>
                <span class="inp-fix inp-icon inp-icon--after">
                        <input type="text" name="q" id="search" class="inp-text" placeholder="{translate|escape key="common.searchQuery"}" value="{$searchQuery|escape}"/>
                        <button type="submit" class="btn-icon icon icon-search">
                                <span class="vhide">{translate key="common.search"}</span>
                        </button>
                </span>
        </p>
    </fieldset>
</form>
{*<div class="header__search">
<div class="gcse-searchbox-only" data-resultsUrl="{$baseUrl}/library/catalog/resultsGoogle"></div>
</div>*}