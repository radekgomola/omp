{**
 * templates/photoGallery/index.tpl
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 *}
{strip}
{assign var="pageTitle" value="navigation.galerie"}
{include file="common/header.tpl" suppressPageTitle=true}
{/strip}

{* Include the photo gallery list*}
{include file="photoGallery/records.tpl" photoGalleries=$photoGalleries}

{include file="common/footer.tpl"}
