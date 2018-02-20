{**
 * templates/frontend/objects/monograph_googleScholar.tpl
 *
 * Copyright (c) 2014-2017 Simon Fraser University Library
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Print Dublin Core metadata for a monograph
 *
 * @uses $monograph Monograph The monograph to be displayed
 *}
 
<meta name="gs_meta_revision" content="1.1" />
{if $series && $series->getOnlineISSN()}
	<meta name="citation_issn" content="{$series->getOnlineISSN()|escape}"/>
{/if}
{foreach name="authors" from=$publishedMonograph->getAuthors() item=author}
	<meta name="citation_author" content="{$author->getFirstName()|escape}{if $author->getMiddleName() != ""} {$author->getMiddleName()|escape}{/if} {$author->getLastName()|escape}"/>
	{assign var=affiliation value=$author->getAffiliation($currentPress->getPrimaryLocale())}
	{if $affiliation}
		<meta name="citation_author_institution" content="{$affiliation|escape}"/>
	{/if}
{/foreach}

<meta name="citation_publication_date" content="{$monograph->getDatumVydani()|date_format:"%Y"}"/>

{assign var=publisher value=$currentPress->getSetting('publisher')}
{if $publisher}
	<meta name="citation_publisher" content="{$publisher|escape}"/>
{/if}

{if $monograph->getAbstract(null)}
    {foreach from=$monograph->getAbstract(null) key=metaLocale item=metaValue}
            <meta name="citation_abstract" xml:lang="{$metaLocale|String_substr:0:2|escape}" content="{$metaValue|strip_tags|escape}"/>
    {/foreach}
{/if}
	<meta name="citation_id" content="{$monograph->getId()|escape}"/>
        <meta name="citation_title" content="{$monograph->getTitle($currentPress->getPrimaryLocale())|escape}"/>
{foreach from=$submissionKeywords key=keywordLocale item=languageKeywords}
	{foreach from=$languageKeywords item=keyword}
		<meta name="citation_keywords" xml:lang="{$keywordLocale|String_substr:0:2|escape}" content="{$keyword|escape}"/>
	{/foreach}
{/foreach}

<meta name="citation_type" content="B">
