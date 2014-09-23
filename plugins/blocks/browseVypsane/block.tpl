{**
 * plugins/blocks/browseVypsane/block.tpl
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Common site sidebar menu -- "browse" tools.
 *
 *}
<div class="block" id="sidebarBrowse">

	<span class="blockTitle pkp_helpers_dotted_underline"><a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="newReleases"}">{translate key="navigation.newReleases"}</a></span>
	<span class="blockTitle">{translate key="plugins.block.browse"}</span>

	<form class="pkp_form" action="#">
		<div id="browseCategoryContainer">
			{*<select class="applyPlugin selectMenu" size="1" name="browseCategory" onchange="location.href=('{url|escape:"javascript" router=$smarty.const.ROUTE_PAGE page="catalog" op="category" path="CATEGORY_PATH"}'.replace('CATEGORY_PATH', this.options[this.selectedIndex].value))">
				<option disabled="disabled"{if !$browseBlockSelectedCategory} selected="selected"{/if}>{translate key="plugins.block.browse.category"}</option>
				{iterate from=browseCategories item=browseCategory}
					<option {if !$browseCategory->getParentId()}style="font-weight: bolder;"{/if}{if $browseBlockSelectedCategory == $browseCategory->getPath()}selected="selected"{/if} value="{$browseCategory->getPath()|escape}">{if $browseCategory->getParentId()}&nbsp;&nbsp;{/if}{$browseCategory->getLocalizedTitle()|escape}</option>
				{/iterate}
			</select>*}
                                {assign var=test value=true}
                                {iterate from=browseCategories item=browseCategory}
				  {if !$browseCategory->getParentId()}
                                  {if $test == true}    
                                  </ul>
                                  {else}
                                      {assign var=test value=true}
                                  {/if}
                                      <h3><a href="{url|escape router=$smarty.const.ROUTE_PAGE page="catalog" op="category" path=$browseCategory->getPath()}">{$browseCategory->getLocalizedTitle()|escape}</a></h3>
                                      <ul class="odr_classic">
                                  {/if}                         
                                  
                                 {if $browseCategory->getParentId()}<li><a href="{url|escape router=$smarty.const.ROUTE_PAGE page="catalog" op="category" path=$browseCategory->getPath()}">{$browseCategory->getLocalizedTitle()|escape}</a></li>{/if}
				{/iterate}
		</div>
                        
                <div id="userExtraFormFields" class="left full">
                    {include file="controllers/extrasOnDemand.tpl"
                            id=edicniOddeleni
                            widgetWrapper="#userExtraFormFields"
                            moreDetailsTextNT=Více
                            lessDetailsTextNT=Méně
                            extraContent=$edicniOddeleni
                    }
                </div>        
                        
                        
                        
                        
                        
                        
                        
		<div id="browseSeriesContainer">
			<select class="applyPlugin selectMenu" size="1" name="browseSeries" onchange="location.href=('{url|escape:"javascript" router=$smarty.const.ROUTE_PAGE page="catalog" op="series" path="SERIES_PATH"}'.replace('SERIES_PATH', this.options[this.selectedIndex].value))">
				<option disabled="disabled"{if !$browseBlockSelectedSeries} selected="selected"{/if}>{translate key="plugins.block.browse.series"}</option>
				{iterate from=browseSeries item=browseSeriesItem}
					<option {if $browseBlockSelectedSeries == $browseSeriesItem->getPath()}selected="selected"{/if} value="{$browseSeriesItem->getPath()|escape}">{$browseSeriesItem->getLocalizedTitle()|escape}</option>
				{/iterate}
			</select>
		</div>
	</form>
</div>
