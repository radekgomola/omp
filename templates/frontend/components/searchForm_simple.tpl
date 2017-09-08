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
 
<form class="search {if $header}header__search{elseif $simpleSearch}simple__search{/if}" action="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="results"}" method="post" id="form-search" role="search">
    <fieldset>
        <p>
                <label for="search" class="header__search__label icon icon-search"><span class="vhide">Vyhledávání</span></label>
                <span class="inp-fix inp-icon inp-icon--after">
                        <input type="text" name="query" id="search" class="inp-text" placeholder="{translate|escape key="common.searchQuery"}" value="{$searchQuery|escape}"/>
                        <button type="submit" class="btn-icon icon icon-search">
                                <span class="vhide">{translate key="common.search"}</span>
                        </button>
                </span>
        </p>
    </fieldset>
</form>