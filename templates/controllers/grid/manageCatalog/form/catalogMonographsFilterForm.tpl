{**
 * templates/controllers/grid/manageCatalog/form/catalogMonographsFilterForm.tpl
 *
 * Copyright (c) 2014-2017 Simon Fraser University Library
 * Copyright (c) 2003-2017 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Catalog monographs grid filter form.
 *}
<script type="text/javascript">
	$(function() {ldelim}
		// Attach the form handler.
		$('#catalogMonographsFilterForm-{$grid->getId()}').pkpHandler('$.pkp.controllers.form.ToggleFormHandler');
	{rdelim});
</script>

<form class="pkp_form filter" id="catalogMonographsFilterForm-{$grid->getId()}">
	{fbvFormArea id="catalogMonographFilterElements"}
		{fbvFormSection list=true}
		{if $filterData.categoryId}
			{fbvElement type="select" label="catalog.selectCategory" id=categoryId from=$filterData.categoryOptions selected=$filterData.categoryId translate=false size=$fbvStyles.size.SMALL inline=true}
		{elseif $filterData.seriesId}
			{fbvElement type="select" label="catalog.selectSeries" id=seriesId from=$filterData.seriesOptions selected=$filterData.seriesId translate=false size=$fbvStyles.size.SMALL inline=true}
		{/if}
			{fbvElement type="text" id="searchText" value=$filterData.searchText label="catalog.manage.filter.searchByAuthorOrTitle" size=$fbvStyles.size.SMALL inline=true}
			{fbvElement type="checkbox" id="featured" checked=$filterData.featured value=1 label="common.feature" inline=true}
			{fbvElement type="checkbox" id="newReleased" checked=$filterData.newReleased value=1 label="catalog.manage.newReleases" inline=true}
                        {fbvFormButtons submitText="common.search" hideCancel=true}
                        
                {/fbvFormSection}
                {fbvFormSection list=true}
                    {*MUNIPRESS*}                      
                        {if $filterData.trideni == "title-1"}
                            {assign var="checked_1" value=true}
                        {elseif $filterData.trideni == "title-2"}
                            {assign var="checked_2" value=true}
                        {elseif $filterData.trideni == "datePublished-1"}
                            {assign var="checked_3" value=true}
                        {elseif $filterData.trideni == "datePublished-2"}
                            {assign var="checked_4" value=true}
                        {elseif $filterData.trideni == "dateModified-1"}
                            {assign var="checked_5" value=true}
                        {elseif $filterData.trideni == "dateModified-2"}
                            {assign var="checked_6" value=true}
                        {/if}
                        {fbvElement type="radio" id="trideni" checked=$checked_1 value="title-1" label="catalog.manage.trideni.abecedneASC" inline=true}
                        {fbvElement type="radio" id="trideni" checked=$checked_2 value="title-2" label="catalog.manage.trideni.abecedneDESC" inline=true}
                        {fbvElement type="radio" id="trideni" checked=$checked_3 value="datePublished-1" label="catalog.manage.trideni.vydaniASC" inline=true}
                        {fbvElement type="radio" id="trideni" checked=$checked_4 value="datePublished-2" label="catalog.manage.trideni.vydaniDESC" inline=true}
                        {fbvElement type="radio" id="trideni" checked=$checked_5 value="dateModified-1" label="catalog.manage.trideni.upravenoASC" inline=true}
                        {fbvElement type="radio" id="trideni" checked=$checked_6 value="dateModified-2" label="catalog.manage.trideni.upravenoDESC" inline=true}
                        {*--------------*}
                {/fbvFormSection}  
	{/fbvFormArea}
</form>

