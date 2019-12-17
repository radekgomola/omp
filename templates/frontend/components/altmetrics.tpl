{**
* templates/frontend/components/altmetrics.tpl
*
*}

<hr />
{if $doiAltmetric}
    <a href="https://plu.mx/plum/a/?doi={$doiAltmetric}" class="plumx-details" data-hide-when-empty="true"></a>
{elseif $isbnAltmetric}
    <a href="https://plu.mx/plum/a/?isbn={$isbnAltmetric}" class="plumx-details" data-hide-when-empty="true"></a>
{/if}