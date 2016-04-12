{**
 * templates/catalog/book/book.tpl
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Display a public-facing book view in the catalog.
 *}
{strip}
{assign var="suppressPageTitle" value=true}
{assign var="pageTitleTranslated" value=$publishedMonograph->getLocalizedFullTitle()}
{include file="common/header.tpl"}
{/strip}

<div class="pkp_catalog_book">

{url|assign:bookImageLinkUrl router=$smarty.const.ROUTE_COMPONENT component="submission.CoverHandler" op="cover" submissionId=$publishedMonograph->getId()}
{include file="catalog/book/bookSpecs.tpl" bookImageLinkUrl=$bookImageLinkUrl}

{include file="catalog/book/bookInfo.tpl"}
{include file="catalog/book/souvisejiciPublikace.tpl"}

{include file="catalog/book/googlescholar.tpl"}
{include file="catalog/book/dublincore.tpl"}

</div><!-- pkp_catalog_book -->

{include file="common/footer.tpl"}
