{**
 * plugins/generic/reviewerInterests/templates/settingsForm.tpl
 *
 * Copyright (c) 2013-2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Reviewer Interests plugin settings
 *
 *}
{strip}
{assign var="pageTitle" value="plugins.generic.reviewerInterests.manager.reviewerInterestsSettings"}
{include file="common/header.tpl"}
{/strip}
<div id="reviewerInterestsSettings">
<div id="description">{translate key="plugins.generic.reviewerInterests.manager.settings.description"}</div>

<div class="separator"></div>

<br />

{include file="common/formErrors.tpl"}

<p><a href="{plugin_url path="manageInterest"}">{translate key="plugins.generic.reviewerInterests.manager.settings.createNewInterest"}</a></p>
<table width="100%" class="data">
	{foreach from=$interestEntries item=interest}
		<tr>
		<td>
			{foreach from=$formLocales item=locale name=localeLoop key=abbrev}{$interest->getKeyword($abbrev)}{if !$smarty.foreach.localeLoop.last} --- {/if}{/foreach}
		</td>
		<td>
		<td><a href="{plugin_url path="manageInterest" reviewerInterestEntryId=$interest->getId()}">{translate key="common.edit"}</a> | <a onclick="return confirm('{translate|escape:"jsparam" key="plugins.generic.reviewerInterests.manager.settings.confirmDelete"}')" href="{plugin_url path="deleteInterest" reviewerInterestEntryId=$interest->getId()}">{translate key="common.delete"}</a>
		</td>
		</tr>
	{/foreach}
</table>

<p><a href="{plugin_url path="syncInterests"}">{translate key="plugins.generic.reviewerInterests.manager.settings.syncInterests"}</a></p>

<br/>
</div>
{include file="common/footer.tpl"}
