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
    <div class="authors_left blok_seznamu_autoru">
        
        {foreach from=$abeceda item=pismeno}
            {if $pismeno == 'ostatni'}
                {translate|assign:"zobrazenePismeno" key=abeceda.ostatni}
            {else}
                {assign var=zobrazenePismeno value=$pismeno}
            {/if}
            {if $pismeno == $cestaPismeno}
                <span class="pismeno_selected">{$zobrazenePismeno}</span>
            {else}    
                <a href="{url op="index" path=$pismeno}" >{$zobrazenePismeno}</a>
            {/if}
        {/foreach}
        <a href="{url op="index"}" >{translate key="abeceda.vse"}</a>
        <hr />
    
    <div style="width: 50%; float: left;">
    {counter assign=y print=false start=1}   
    {assign var =pocetAutoru value=$autori|@count}
{foreach from=$autori item=author}

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
		
	{/strip}
        {if $author->getTitulyPred() || $author->getTitulyZa()} ({/if}
        {if $author->getTitulyPred()}{$author->getTitulyPred()|escape}{/if}
        {if $author->getTitulyPred() && $author->getTitulyZa()},{/if}
        {if $author->getTitulyZa()} {$author->getTitulyZa()}{/if}
        {if $author->getTitulyPred() || $author->getTitulyZa()}){/if}
	<br/>
        {if $y == $pocetAutoru/2|round:0 && $pocetAutoru > 15}
            </div>
            <div style="width: 50%; float: right;">
        {/if}
        {counter}
{/foreach}
</div>
<div style="width: 50%; float: left;">
    {counter assign=x print=false start=1}
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
		
	{/strip}
        {if $author->getTitulyPred() || $author->getTitulyZa()} ({/if}
        {if $author->getTitulyPred()}{$author->getTitulyPred()|escape}{/if}
        {if $author->getTitulyPred() && $author->getTitulyZa()},{/if}
        {if $author->getTitulyZa()} {$author->getTitulyZa()}{/if}
        {if $author->getTitulyPred() || $author->getTitulyZa()}){/if}
	<br/>
        {if $x == $itemsPerPageAuthors/2}
            {if $authors != NULL && !$authors->wasEmpty()}
                    <br />
                    {page_info iterator=$authors itemsPerPage=$itemsPerPageAuthors}
                    <h4>{page_links anchor="authors" iterator=$authors name="authors" searchInitial=$searchInitial itemsPerPage=$itemsPerPageAuthors}</h4>
            {/if}
            </div>
            <div style="width: 50%; float: right;">
        {/if}
        {counter}
{/iterate}
</div>
</div>
{include file="common/footer.tpl"}

