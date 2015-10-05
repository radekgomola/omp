{**
 * templates/controllers/tab/catalogEntry/form/publicationMetadataFormFields.tpl
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 *}
{* generate a unique form id since this form is used on several tabs *}
{capture assign=publicationFormId}publicationMetadataEntryForm-{$publicationFormatId}{/capture}

<script type="text/javascript">
	$(function() {ldelim}
		// Attach the form handler.
		$('#{$publicationFormId|escape:"javascript"}').pkpHandler(
			'$.pkp.controllers.modals.catalogEntry.form.PublicationFormatMetadataFormHandler',
			{ldelim}
				trackFormChanges: true
			{rdelim}
		);
	{rdelim});
</script>

<form class="pkp_form" id="{$publicationFormId|escape}" method="post" action="{url router=$smarty.const.ROUTE_COMPONENT op="saveForm"}">
	{include file="controllers/notification/inPlaceNotification.tpl" notificationId=$publicationFormId|concat:"-notification" requestOptions=$notificationRequestOptions}

	<input type="hidden" name="submissionId" value="{$submissionId|escape}" />
	<input type="hidden" name="stageId" value="{$stageId|escape}" />
	<input type="hidden" name="tabPos" value="{$formParams.tabPos|escape}" />
	<input type="hidden" name="publicationFormatId" value="{$publicationFormatId|escape}" />
	<input type="hidden" name="displayedInContainer" value="{$formParams.displayedInContainer|escape}" />
	<input type="hidden" name="tab" value="publication" />

	<h3>{translate key="monograph.publicationFormat.formatMetadata"}</h3>

	{fbvFormArea id="catalogInclusion"}
		{fbvFormSection list="true"}
			{fbvElement type="checkbox" id="isApproved" checked=$isApproved label="monograph.publicationFormat.isApproved"}
		{/fbvFormSection}
	{/fbvFormArea}

	{* E-commerce settings *}
	{if $paymentConfigured}
		{url|assign:approvedProofGridUrl router=$smarty.const.ROUTE_COMPONENT component="grid.files.proof.ApprovedProofFilesGridHandler" op="fetchGrid" submissionId=$submissionId publicationFormatId=$publicationFormatId escape=false}
		{load_url_in_div id="approvedProofGrid-$publicationFormatId" url=$approvedProofGridUrl}
	{/if}

	{fbvFormArea id="productIdentifier"}
		{fbvFormSection}
			<!-- Product Identification Codes -->
			{assign var="divId" value="identificationCodeGridContainer"|concat:$publicationFormatId|escape}
			{url|assign:identGridUrl router=$smarty.const.ROUTE_COMPONENT component="grid.catalogEntry.IdentificationCodeGridHandler" op="fetchGrid" submissionId=$submissionId publicationFormatId=$publicationFormatId escape=false}
			{load_url_in_div id=$divId url=$identGridUrl}
		{/fbvFormSection}
	{/fbvFormArea}

	{*{fbvFormArea id="salesRights"}
		{fbvFormSection}
			<!-- Sales rights and regions -->
			{assign var="divId" value="salesRightsGridContainer"|concat:$publicationFormatId|escape}
			{url|assign:salesGridUrl router=$smarty.const.ROUTE_COMPONENT component="grid.catalogEntry.SalesRightsGridHandler" op="fetchGrid" submissionId=$submissionId publicationFormatId=$publicationFormatId escape=false}
			{load_url_in_div id=$divId url=$salesGridUrl}
		{/fbvFormSection}
	{/fbvFormArea}

	{fbvFormArea id="marketRegions"}
		{fbvFormSection}
			<!-- Market regions -->
			{assign var="divId" value="marketsGridContainer"|concat:$publicationFormatId|escape}
			{url|assign:marketsGridUrl router=$smarty.const.ROUTE_COMPONENT component="grid.catalogEntry.MarketsGridHandler" op="fetchGrid" submissionId=$submissionId publicationFormatId=$publicationFormatId escape=false}
			{load_url_in_div id=$divId url=$marketsGridUrl}
		{/fbvFormSection}
	{/fbvFormArea}*}

	{fbvFormArea id="publicationDates"}
		{fbvFormSection}
			<!-- Product Publication/Embargo dates -->
			{assign var="divId" value="publicationDateGridContainer"|concat:$publicationFormatId|escape}
			{url|assign:dateGridUrl router=$smarty.const.ROUTE_COMPONENT component="grid.catalogEntry.PublicationDateGridHandler" op="fetchGrid" submissionId=$submissionId publicationFormatId=$publicationFormatId escape=false}
			{load_url_in_div id=$divId url=$dateGridUrl}
		{/fbvFormSection}
	{/fbvFormArea}

	{*{fbvFormArea id="productComposition" class="border"}
		{fbvFormSection for="productCompositionCode" title="monograph.publicationFormat.productFormDetailCode" }
			{fbvElement type="select" from=$productCompositionCodes selected=$productCompositionCode translate=false id="productCompositionCode" required="true" defaultValue="" defaultLabel="" size=$fbvStyles.size.MEDIUM inline=true}
			{fbvElement type="select" from=$productFormDetailCodes selected=$productFormDetailCode translate=false id="productFormDetailCode" defaultValue="" defaultLabel="" size=$fbvStyles.size.MEDIUM inline=true}
		{/fbvFormSection}
	{/fbvFormArea}*}

	{*{fbvFormArea id="productAvailability" title="monograph.publicationFormat.productAvailability" class="border"}
		{fbvFormSection for="productAvailability" required="true"}
			{fbvElement type="select" from=$productAvailabilityCodes required=true selected=$productAvailabilityCode translate=false id="productAvailabilityCode"}
		{/fbvFormSection}
	{/fbvFormArea}*}
        
        <input type="hidden" name="productAvailabilityCode" value={$productAvailabilityCode} />

	{fbvFormArea id="imprintFormArea" title="monograph.publicationFormat.imprint"}
		{fbvFormSection for="imprint"}
			{fbvElement type="text" name="imprint" id="imprint" value=$imprint maxlength="255"}
		{/fbvFormSection}
	{/fbvFormArea}
       
        
        {fbvFormArea id="verejneInformace" title="submission.informace.verejne" class="border"}
                {fbvFormSection label="submission.ostatni"}
                        {fbvElement type="text" name="pocetStran" id="pocetStran" value=$pocetStran maxlength="40" inline=true size=$fbvStyles.size.SMALL label="submission.pocetStran"}
                        {fbvElement type="text" name="poradiVydani" id="poradiVydani" value=$poradiVydani maxlength="40" inline=true size=$fbvStyles.size.SMALL label="submission.poradiVydani"}
                        <script>
                            $('input[id^="datumVydani"]').datepicker({ldelim} dateFormat: 'yy-mm-dd' {rdelim});
                        </script>
                        {fbvElement type="text" label="submission.manazer.datumVydani" id="datumVydani" name="datumVydani" value=$datumVydani|date_format:"%Y-%m-%d" inline=true size=$fbvStyles.size.MEDIUM}
                {/fbvFormSection}
                {fbvFormSection label="submission.url.keStazeni" for="urlWeb"}
                        {fbvElement type="text" name="urlStazeni" multilingual="true" id="urlStazeni" value=$urlStazeni maxlength="255" readonly=$readOnly}
                {/fbvFormSection}
                {fbvFormSection label="submission.url.youtube" for="urlYtb"}
                        {fbvElement type="text" name="urlYtb" multilingual="true" id="urlYtb" value=$urlYtb maxlength="255" readonly=$readOnly}
                {/fbvFormSection}
		{fbvFormSection for="calameoHash" label="monograph.publicationFormat.calameoHash"}
                        {fbvElement type="text" multilingual=true name="calameoHash" id="calameoHash" value=$calameoHash maxlength="255" readonly=$readOnly }
		{/fbvFormSection}
                
                {fbvFormSection title="submission.bibliografickaCitace" for="bibliografickaCitace"}
                        {fbvElement type="textarea" multilingual=true name="bibliografickaCitace" id="bibliografickaCitace" value=$bibliografickaCitace rich=true readonly=$readOnly}
                {/fbvFormSection}
        {/fbvFormArea}                       
        {fbvFormArea id="munipressFormArea" title="submission.informace.munipress" class="border"}
                {fbvFormSection list="true" title="submission.licence"}
                        {if $licenceTypPrepinac eq "0"}
				{assign var="checked" value=true}
			{else}
				{assign var="checked" value=false}
			{/if}
                        
                        {fbvElement type="radio" id="licenceTypPrepinac" name="licenceTypPrepinac" required="true" value="0" checked=$checked label="submission.licence.openAccess"}<br /><br />
                        {if $licenceTypPrepinac eq "1"}
				{assign var="checked" value=true}
			{else}
				{assign var="checked" value=false}
			{/if}
			{fbvElement type="radio" id="licenceTypPrepinac" name="licenceTypPrepinac" required="true" value="1" checked=$checked label="submission.licence.munipress"}<br /><br />
			{if !in_array($licenceTypPrepinac, array("0", "1"))}
				{assign var="checked" value=true}
			{else}
				{assign var="checked" value=false}
			{/if}
			{fbvElement type="radio" id="licenceTypPrepinac" name="licenceTypPrepinac" required="true" value="2" checked=$checked label="submission.licence.jinyTyp"}
                {/fbvFormSection}
                {fbvFormSection}
                        {fbvElement label="submission.licence.typ" type="text" name="licenceTyp" id="licenceTyp" value=$licenceTyp maxlength="255" inline=true  size=$fbvStyles.size.MEDIUM}
                        {fbvElement label="submission.licence.drzitel" type="text" name="licenceDrzitel" id="licenceDrzitel" value=$licenceDrzitel maxlength="255" inline=true  size=$fbvStyles.size.MEDIUM}
                {/fbvFormSection}
                {fbvFormSection}
                <script>
                    $('input[id^="licenceExpirace"]').datepicker({ldelim} dateFormat: 'yy-mm-dd' {rdelim});
                    $('input[id^="licenceVznik"]').datepicker({ldelim} dateFormat: 'yy-mm-dd' {rdelim});
                </script>
                        {fbvElement type="text" label="submission.licence.trvani" id="licenceExpirace" name="licenceExpirace" value=$licenceExpirace|date_format:"%Y-%m-%d" inline=true size=$fbvStyles.size.MEDIUM}
                        {fbvElement type="text" label="submission.licence.vznik" id="licenceVznik" name="licenceVznik" value=$licenceVznik|date_format:"%Y-%m-%d" inline=true size=$fbvStyles.size.MEDIUM}
                {/fbvFormSection} 

                {fbvFormSection label="submission.naklad"}
                        {fbvElement type="text" name="naklad" id="naklad" value=$naklad maxlength="40" inline=true size=$fbvStyles.size.MEDIUM}
                {/fbvFormSection}
                
                {fbvFormSection title="submission.povinneVytisky"}
                <script>
                    $('input[id^="povVytiskyOdesly"]').datepicker({ldelim} dateFormat: 'yy-mm-dd' {rdelim});
                    $('input[id^="povVytiskyDosly"]').datepicker({ldelim} dateFormat: 'yy-mm-dd' {rdelim});
                </script>
                        {fbvElement type="text" label="submission.povinneVytisky.dosly" id="povVytiskyDosly" name="povVytiskyDosly" value=$povVytiskyDosly|date_format:"%Y-%m-%d" inline=true size=$fbvStyles.size.MEDIUM}
                        {fbvElement type="text" label="submission.povinneVytisky.odesly" id="povVytiskyOdesly" name="povVytiskyOdesly" value=$povVytiskyOdesly|date_format:"%Y-%m-%d" inline=true size=$fbvStyles.size.MEDIUM}
                {/fbvFormSection} 

                {fbvFormSection title="submission.tiskarna"}
                        {fbvElement type="textarea" name="tiskarna" id="tiskarna" value=$tiskarna rich=true}
                {/fbvFormSection} 
                
                
                
	{/fbvFormArea}

	{foreach from=$pubIdPlugins item=pubIdPlugin}
		{assign var=pubIdMetadataFile value=$pubIdPlugin->getPubIdMetadataFile()}
		{include file=$pubIdMetadataFile pubObject=$publicationFormat}
	{/foreach}

	{if $isPhysicalFormat}
		{include file="controllers/tab/catalogEntry/form/physicalPublicationFormat.tpl"}
	{else}
		{include file="controllers/tab/catalogEntry/form/digitalPublicationFormat.tpl"}
	{/if}

	{fbvFormButtons id="publicationMetadataFormSubmit" submitText="common.save"}
</form>
<p><span class="formRequired">{translate key="common.requiredField"}</span></p>
