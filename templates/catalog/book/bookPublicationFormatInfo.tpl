{**
 * templates/catalog/book/bookPublicationFormatInfo.tpl
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Publication format information to be presented in book page.
 *}


{assign var=identificationCodes value=$publicationFormat->getIdentificationCodes()}
{assign var=identificationCodes value=$identificationCodes->toArray()}
{if $identificationCodes}
	<div class="bookIdentificationSpecs">
	{foreach from=$identificationCodes item=identificationCode}
		<div id="bookIdentificationSpecs-{$publicationFormat->getId()}-{$identificationCode->getCode()|escape}">
                    <span style="font-weight: bold;">{$identificationCode->getNameForONIXCode()|escape} ({$publicationFormat->getLocalizedName()}):</span><br />&nbsp;&nbsp;{$identificationCode->getValue()|escape}
		</div>
	{/foreach}{* identification codes *}
	</div>
{/if}{* $identificationCodes *}
        
        <div class="bookDimensionSpecs">
            {if $publicationFormat->getWidth()|| $publicationFormat->getHeight() || $publicationFormat->getThickness()}
                <span style="font-weight: bold;">{translate key="book.rozmery"}:</span><br />&nbsp;
            {/if}
            {assign var=notFirst value=0}
            {if $publicationFormat->getWidth()}
                {$publicationFormat->getWidth()|escape} {$publicationFormat->getWidthUnitCode()|escape}
                {assign var=notFirst value=1}
            {/if}
            {if $publicationFormat->getHeight()}
                {if $notFirst} x {/if}
                {$publicationFormat->getHeight()|escape} {$publicationFormat->getHeightUnitCode()|escape}
                {assign var=notFirst value=1}
            {/if}
            {if $publicationFormat->getThickness()}
                {if $notFirst} x {/if}
                {$publicationFormat->getThickness()|escape} {$publicationFormat->getThicknessUnitCode()|escape}
                {assign var=notFirst value=1}
            {/if}
        </div>
        
{assign var=publicationDates value=$publicationFormat->getPublicationDates()}
{assign var=publicationDates value=$publicationDates->toArray()}
{if $publicationDates}
	<div class="bookPublicationDateSpecs">
	{foreach from=$publicationDates item=publicationDate}
		<div id="bookPublicationDateSpecs-{$publicationDate->getId()|escape}">
                    <span style="font-weight: bold;">{$publicationDate->getNameForONIXCode()|escape}:</span><br />&nbsp;
			{assign var=dates value=$publicationDate->getReadableDates()}
			{* note: these dates have dateFormatShort applied to them in getReadableDates() if they need it *}
			{if $publicationDate->isFreeText() || $dates|@count == 1}
				{$dates[0]|escape}
			{else}
				{$dates[0]|escape} - {$dates[1]|escape}
			{/if}
			{if $publicationDate->isHijriCalendar()}({translate key="common.dateHijri"}){/if}
		</div>
	{/foreach}{* publicationDates *}
	</div>
{/if}{* $publicationDates *}
        
{if $enabledPubIdTypes|@count > 0}
	<div class="bookPubIds-{$publicationFormat->getId()|escape}">
		{foreach from=$enabledPubIdTypes item=pubIdType}
			<div id="bookPubId-{$publicationFormat->getId()|escape}-{$pubIdType|escape}">
				{assign var=storedPubId value=$publicationFormat->getStoredPubId($pubIdType)}
				{if $storedPubId != ''}
                                    <span style="font-weight: bold;">pub-id::{$pubIdType}:</span><br />&nbsp;&nbsp;{if $pubIdType == "doi"}<a href="http://dx.doi.org/{$storedPubId|escape}">{$storedPubId|escape}</a>{else}{$storedPubId|escape}{/if}
				{/if}
			</div>
		{/foreach}
	</div>
{/if}
{assign var="publicationFormatId" value=$publicationFormat->getId()}
{if !empty($availableFiles.$publicationFormatId)}
	<div class="ecommerce">
		{if $availableFiles.$publicationFormatId|@count == 1}
			{* FIXME: unimplemented. One file available; shortcut to purchase *}
		{else}
			{* FIXME: unimplemented. Several files available; display options *}
		{/if}
	</div>
{/if}{* !empty($availableFiles) *}
