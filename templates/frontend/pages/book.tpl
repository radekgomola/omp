{**
* templates/frontend/pages/book.tpl
*
* Copyright (c) 2014-2017 Simon Fraser University Library
* Copyright (c) 2003-2017 John Willinsky
* Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
*
* @brief Display the page which represents a single book.
*
* @uses $representationId int Publication format ID
* @uses $availableFiles array List of available MonographFiles
* @uses $publishedMonograph PublishedMonograph The published monograph object.
* @uses $series Series The series this monograph is assigned to, if any.
*}
{assign var=categories value=$publishedMonograph->getCategories()}
{assign var=fakulta value=""}
{if !$categories->wasEmpty()}

    {iterate from=categories item=category}
    {if $category->getParentId() == 32}
        {if $category->getPath() == "pdf"}
            {assign var=fakulta value ="PEDF"}
        {else}
            {assign var=fakulta value =$category->getPath()|upper}
        {/if}
    {/if}
    {/iterate}
{/if}

{assign var=bookTitle value=$publishedMonograph->getLocalizedFullTitle()|cat:" | "|cat:$fakulta}
{include file="frontend/components/header.tpl" pageTitleTranslated=$bookTitle monograph=$publishedMonograph}

<div class="page page_book">

    {* Display book details *}
    {include file="frontend/objects/monograph_full.tpl" monograph=$publishedMonograph fakulta=$fakulta}
</div><!-- .page -->

{include file="frontend/components/footer.tpl"}
