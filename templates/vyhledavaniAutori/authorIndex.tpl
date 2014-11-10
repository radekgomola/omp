{**
 * templates/search/authorIndex.tpl
 *
 * Copyright (c) 2013-2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Index of published articles by author.
 *
 *}
{strip}
{assign var="pageTitle" value="search.authorIndex"}
{include file="common/header.tpl"}
{/strip}
<script type="text/javascript">
  hs.minWidth = 800;
</script>
<div id="authors">
    <div class="authors_left">
{iterate from=authors item=author}

	{assign var=lastFirstLetter value=$zobrazenePismeno}
	{assign var=firstLetter value=$author->getLastName()|String_substr:0:1}
        {assign var=first2Letters value=$author->getLastName()|String_substr:0:2}

        {if $first2Letters|lower == "ch"}
            {assign var=zobrazenePismeno value=$first2Letters}
        {else}
            {assign var=zobrazenePismeno value=$firstLetter}
        {/if}
	{if $lastFirstLetter|lower != $zobrazenePismeno|lower}

            <div id="{$zobrazenePismeno|escape}">
                    <h3>{$zobrazenePismeno|escape}</h3>
            </div>
	{/if}

	{assign var=lastAuthorName value=$authorName}
	{assign var=lastAuthorCountry value=$authorCountry}

	{assign var=authorAffiliation value=$author->getLocalizedAffiliation()}
	{assign var=authorCountry value=$author->getCountry()}

	{assign var=authorFirstName value=$author->getFirstName()}
	{assign var=authorMiddleName value=$author->getMiddleName()}
	{assign var=authorLastName value=$author->getLastName()}
        {assign var=authorId value=$author->getId()}
	{assign var=authorName value="$authorLastName, $authorFirstName"}
	{if $authorMiddleName != ''}{assign var=authorName value="$authorName $authorMiddleName"}{/if}
	{strip}
		<a href="{url router=$smarty.const.ROUTE_PAGE page="vyhledavaniAutori" op="seznam_publikaci" authorId=$authorId}" onclick="return hs.htmlExpand(this, {ldelim}objectType: 'iframe'{rdelim})">{$authorName|escape}</a>
		{if $authorAffiliation}, {$authorAffiliation|escape}{/if}
	{/strip}
	<br/>
{/iterate}
{if !$authors->wasEmpty()}
	<br />
        <h4>{page_links anchor="authors" iterator=$authors name="authors" searchInitial=$searchInitial }</h4>
{/if}


</div>
{include file="common/footer.tpl"}

