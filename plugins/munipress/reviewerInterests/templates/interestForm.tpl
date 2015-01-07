{**
 * plugins/generic/reviewerInterests/templates/interestForm.tpl
 *
 * Copyright (c) 2013-2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Reviewer Interests plugin interest form
 *
 *}
{strip}
{assign var="pageTitle" value="plugins.generic.reviewerInterests.manager.reviewerInterestsSettings"}
{include file="common/header.tpl"}
{/strip}
<div id="reviewerInterest">

<div class="separator"></div>

<br />

<form method="post" action="{plugin_url path="manageInterest"}">
{if $reviewerInterestEntry}
  <input type="hidden" value="{$reviewerInterestEntry->getId()}" name="reviewerInterestEntryId" />
{/if}
{include file="common/formErrors.tpl"}


<table width="100%" class="data">
{foreach from=$formLocales item=locale key=abbrev}
<tr valign="top">
	<td class="label">{$locale|escape}</td>
	<td class="value">
		<input type="text" name="interest[{$abbrev}]" class="textField" value="{if $reviewerInterestEntry}{$reviewerInterestEntry->getKeyword($abbrev)|escape}{/if}" size="100" />
	</td>
</tr>
{/foreach}

</table>

<br/>

<input type="submit" name="save" class="button defaultButton" value="{translate key="common.save"}"/><input type="button" class="button" value="{translate key="common.cancel"}" onclick="history.go(-1)"/>
</form>

<p><span class="formRequired">{translate key="common.requiredField"}</span></p>
</div>
{include file="common/footer.tpl"}
