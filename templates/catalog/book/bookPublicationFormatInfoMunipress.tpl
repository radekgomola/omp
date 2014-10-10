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
    <h3 style="font-size: 1.1em;">{$publicationFormat->getLocalizedName()}:</h3>
    {foreach from=$identificationCodes item=identificationCode}
        <li id="bookIdentificationSpecs-{$publicationFormat->getId()}-{$identificationCode->getCode()|escape}">
            {$identificationCode->getNameForONIXCode()|escape} 
            <span class="vpravo">{$identificationCode->getValue()|escape}</span>
        </li>
    {/foreach}
{/if}{* $identificationCodes *}

    {if $publicationFormat->getWidth()|| $publicationFormat->getHeight() || $publicationFormat->getThickness()}
        <li>
            {translate key="book.rozmery"}:

            <span class="vpravo">
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
            </span>
        </li>
    {/if}


    {assign var=publicationDates value=$publicationFormat->getPublicationDates()}
    {assign var=publicationDates value=$publicationDates->toArray()}
    {if $publicationDates}
        {foreach from=$publicationDates item=publicationDate}
            <li id="bookPublicationDateSpecs-{$publicationDate->getId()|escape}">
                {$publicationDate->getNameForONIXCode()|escape}:
                <span class="vpravo">
                    {assign var=dates value=$publicationDate->getReadableDates()}
                    {* note: these dates have dateFormatShort applied to them in getReadableDates() if they need it *}
                    {if $publicationDate->isFreeText() || $dates|@count == 1}
                        {$dates[0]|escape}
                    {else}
                        {$dates[0]|escape} - {$dates[1]|escape}
                    {/if}
                    {if $publicationDate->isHijriCalendar()}({translate key="common.dateHijri"}){/if}
                </span>
            </li>
        {/foreach}{* publicationDates *}
            {/if}{* $publicationDates *}

                    {if $enabledPubIdTypes|@count > 0}
                        {foreach from=$enabledPubIdTypes item=pubIdType}
                            {assign var=storedPubId value=$publicationFormat->getStoredPubId($pubIdType)}
                            {if $storedPubId != ''}
                                <li id="bookPubId-{$publicationFormat->getId()|escape}-{$pubIdType|escape}">
                                    pub-id::{$pubIdType}:
                                    <span class="vpravo">
                                        {if $pubIdType == "doi"}<a href="http://dx.doi.org/{$storedPubId|escape}" target="_blank">{$storedPubId|escape}</a>{else}{$storedPubId|escape}
                                        {/if}
                                    </span>
                                {/if}
                            </li>
                        {/foreach}
                {/if}
