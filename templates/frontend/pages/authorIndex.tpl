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
{include file="frontend/components/header.tpl" pageTitle="search.authorIndex"}

<script type="text/javascript">
    hs.minWidth = 800;
</script>
<div id="authors">
    <div class="menu-inside" role="navigation">
        <div class="menu-inside__wrap">
            <ul class="menu-inside__list js-scroll-nav">
                {if !$cestaPismeno}
                    {assign var=cestaPismeno value="A"}
                {/if}
                {foreach from=$abeceda item=pismeno}
                    {if $pismeno == 'ostatni'}
                        {translate|assign:"zobrazenePismeno" key=abeceda.ostatni}
                    {else}
                        {assign var=zobrazenePismeno value=$pismeno}
                    {/if}
                    <li class="menu-inside__item"><a href="{url op="index" path=$pismeno}" class="menu-inside__link {if $pismeno == $cestaPismeno}is-active{/if}">{$zobrazenePismeno}</a></li>
                    {/foreach}
            </ul>
        </div>
    </div>
    <div id="authors-{$cestaPismeno|escape}">
        <h3>{$cestaPismeno|escape}</h3>
    </div>
    <div class="flow-grid--size-s-l--1  flow-grid--size-m-l--6 flow-grid--size--l--4">
        {iterate from=authors item=author}
            {assign var=lastAuthorName value=$authorName}
            {assign var=lastAuthorCountry value=$authorCountry}

            {assign var=authorAffiliation value=$author->getLocalizedAffiliation()}
            {assign var=authorCountry value=$author->getCountry()}

            {assign var=authorFirstName value=$author->getFirstName()}
            {assign var=authorMiddleName value=$author->getMiddleName()}
            {assign var=authorLastName value=$author->getLastName()}
            {assign var=authorId value=$author->getId()}
            {assign var=authorName value="$authorLastName, $authorFirstName"}
            {if $authorMiddleName != ''}
                {assign var=authorName value="$authorName $authorMiddleName"}
            {/if}
            {url|assign:authorPublications router=$smarty.const.ROUTE_PAGE page="vyhledavaniAutori" op="authorPublications" authorId=$authorId} 
            {strip}       
                <a href="{$authorPublications}" data-rel="lightcase:profile">{$authorName|escape}</a>
            {/strip}
            {if $author->getTitulyPred() || $author->getTitulyZa()} ({/if}
            {if $author->getTitulyPred()}{$author->getTitulyPred()|escape}{/if}
            {if $author->getTitulyPred() && $author->getTitulyZa()},{/if}
            {if $author->getTitulyZa()} {$author->getTitulyZa()}{/if}
            {if $author->getTitulyPred() || $author->getTitulyZa()}){/if}
            <br/>
        {/iterate}
  
    </div>
</div>
{include file="frontend/components/footer.tpl"}

