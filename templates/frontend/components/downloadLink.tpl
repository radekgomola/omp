{**
* templates/frontend/components/download_link.tpl
*
* Copyright (c) 2014-2017 Simon Fraser University Library
* Copyright (c) 2003-2017 John Willinsky
* Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
*
* @brief Display a download link for files
*
* @uses $downloadFile SubmissionFile The download file object
* @uses $monograph Monograph The monograph this file is attached to
* @uses $publicationFormat PublicationFormat The publication format this file is attached to
* @uses $currency Currency The currency object
* @uses $useFilename string Whether or not to use the file name in link. Default is false and pub format name is used
*}

{assign var=publicationFormatId value=$publicationFormat->getBestId()}

{*TODO FLIPBOOK*}

{* Generate the download URL *}
{url|assign:downloadUrl op="view" path=$monograph->getBestId()|to_array:$publicationFormatId:$downloadFile->getBestId()}

{*Show icon*}
{if $downloadFile->getDocumentType()==$smarty.const.DOCUMENT_TYPE_PDF}
    {assign var=iconType value="icon-file-pdf-o"}
{elseif $downloadFile->getDocumentType()==$smarty.const.DOCUMENT_TYPE_HTML}
    {assign var=iconType value="icon-eye"}
{else}
    {assign var=iconType value="icon-download"}
{/if}
{* Display the download link *}
<a href="{$downloadUrl}" class="cmp_download_link {$downloadFile->getDocumentType()}">
    {if $useFilename}
        {if $downloadFile->getDirectSalesPrice()}
            <span class="icon {$iconType}"></span>{translate key="payment.directSales.purchase" format=$downloadFile->getLocalizedName() amount=$currency->format($downloadFile->getDirectSalesPrice()) currency=$currency->getCodeAlpha()}
        {else}
            <span class="icon {$iconType}"></span>{$downloadFile->getLocalizedName()}
        {/if}
        <span class="tag tag__format">{$downloadFile->getDocumentType()}, {$downloadFile->getNiceFileSize()}</span>
    {else}
        {if $downloadFile->getDirectSalesPrice()}
            <span class="icon {$iconType}"></span>{translate key="payment.directSales.purchase" format=$publicationFormat->getLocalizedName() amount=$currency->format($downloadFile->getDirectSalesPrice()) currency=$currency->getCodeAlpha()}
        {else}
            <span class="icon {$iconType}"></span>{$publicationFormat->getLocalizedName()}
        {/if}
        <span class="tag tag__format">{$downloadFile->getDocumentType()}, {$downloadFile->getNiceFileSize()}</span>
    {/if}
</a>
