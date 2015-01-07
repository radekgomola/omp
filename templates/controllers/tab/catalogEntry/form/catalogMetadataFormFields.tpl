{**
 * catalog/form/catalogMetadataFormFields.tpl
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 *}
<script type="text/javascript">
	$(function() {ldelim}
		// Attach the form handler.
		$('#catalogMetadataEntryForm').pkpHandler(
			'$.pkp.controllers.catalog.form.CatalogMetadataFormHandler',
			{ldelim}
				trackFormChanges: true,
				$uploader: $('#plupload_catalogMetadata'),
				uploaderOptions: {ldelim}
					uploadUrl: '{url|escape:javascript op="uploadCoverImage" escape=false stageId=$stageId submissionId=$submissionId}',
					baseUrl: '{$baseUrl|escape:javascript}'
				{rdelim}
			{rdelim}
		);
	{rdelim});
</script>

<form class="pkp_form" id="catalogMetadataEntryForm" method="post" action="{url router=$smarty.const.ROUTE_COMPONENT op="saveForm"}">
	{include file="controllers/notification/inPlaceNotification.tpl" notificationId="catalogMetadataFormFieldsNotification"}

	<input type="hidden" name="submissionId" value="{$submissionId|escape}" />
	<input type="hidden" name="stageId" value="{$stageId|escape}" />
	<input type="hidden" name="tabPos" value="1" />
	<input type="hidden" name="displayedInContainer" value="{$formParams.displayedInContainer|escape}" />
	<input type="hidden" name="tab" value="catalog" />

	{fbvFormSection title="monograph.coverImage"}
		<div class="pkp_help">{translate key="monograph.coverImage.uploadInstructions"}</div>
		<div id="plupload_catalogMetadata" class="pkp_helpers_threeQuarter pkp_helpers_align_right"></div>
		<div class="pkp_helpers_align_left">
			{capture assign="altTitle"}{translate key="monograph.currentCoverImage"}{/capture}
			<img height="{$coverImage.thumbnailHeight}" width="{$coverImage.thumbnailWidth}" src="{url router=$smarty.const.ROUTE_COMPONENT component="submission.CoverHandler" op="thumbnail" submissionId=$submissionId random=$submissionId|uniqid}" alt="{$altTitle|escape}" />
		</div>
	{/fbvFormSection}

	<input type="hidden" name="temporaryFileId" id="temporaryFileId" value="" />

	<div class="pkp_helpers_clear"></div>

	{*{fbvFormArea id="audienceInformation" title="monograph.audience" class="border"}
		{fbvFormSection for="audience"}
			{fbvElement label="monograph.audience" type="select" from=$audienceCodes selected=$audience translate=false id="audience" defaultValue="" defaultLabel=""}
			{fbvElement label="monograph.audience.rangeQualifier" type="select" from=$audienceRangeQualifiers selected=$audienceRangeQualifier translate=false id="audienceRangeQualifier" defaultValue="" defaultLabel=""}
			{fbvElement label="monograph.audience.rangeFrom" type="select" from=$audienceRanges selected=$audienceRangeFrom translate=false id="audienceRangeFrom" defaultValue="" defaultLabel=""}
			{fbvElement label="monograph.audience.rangeTo" type="select" from=$audienceRanges selected=$audienceRangeTo translate=false id="audienceRangeTo" defaultValue="" defaultLabel=""}
			{fbvElement label="monograph.audience.rangeExact" type="select" from=$audienceRanges selected=$audienceRangeExact translate=false id="audienceRangeExact" defaultValue="" defaultLabel=""}
		{/fbvFormSection}
	{/fbvFormArea}*}

	{fbvFormArea id="representatives"}
		{fbvFormSection description="grid.catalogEntry.representativesDescription"}
			<!-- Representatives -->
			{assign var="divId" value="representativesGridContainer"|concat:$publicationFormatId|escape}
			{url|assign:representativesGridUrl router=$smarty.const.ROUTE_COMPONENT component="grid.catalogEntry.RepresentativesGridHandler" op="fetchGrid" submissionId=$submissionId escape=false}
			{load_url_in_div id=$divId url=$representativesGridUrl}
		{/fbvFormSection}
	{/fbvFormArea}

	{fbvFormArea id="publicationFormats"}
		{fbvFormSection}
			<!--  Formats -->
			{url|assign:formatGridUrl router=$smarty.const.ROUTE_COMPONENT  component="grid.catalogEntry.PublicationFormatGridHandler" op="fetchGrid" submissionId=$submissionId inCatalogEntryModal=true escape=false}
			{load_url_in_div id="formatsGridContainer"|uniqid url=$formatGridUrl}
		{/fbvFormSection}
	{/fbvFormArea}

	{fbvFormButtons id="catalogMetadataFormSubmit" submitText="common.save"}
</form>
