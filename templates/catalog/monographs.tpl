{**
 * templates/catalog/monographs.tpl
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Display a public-facing monograph list in the catalog.
 *}
<script type="text/javascript">
	// Initialize JS handler.
	$(function() {ldelim}
		$('#monographListContainer').pkpHandler(
			'$.pkp.pages.catalog.MonographPublicListHandler'
		);
	{rdelim});
</script>

<div class="pkp_catalog_monographs" id="monographListContainer">
        {if $search=='ano'}
            {assign var=count value=$publishedMonographs|@count}
        {else}           
            {assign var=count value=$publishedMonographs->getCount()}
        {/if}
    
	{if $monographListTitleKey}
		{translate|assign:"monographListTitle" key=$monographListTitleKey}
                {*<h3>{$monographListTitle}</h3><br />*}
                
	{else}
		{translate|assign:"monographListTitle" key="catalog.browseTitles"}
	{/if}
        <h3 class="pkp_helpers_munipress_underline">{$monographListTitle}</h3>
        {if $paging != 'false' }
            
            {if !$vyhledavaniAutori}
                <div class="filterPanel">
                    <div class="popis_pod">
                        {translate key="filtr.filtrovat"}:
                    </div>
                {if $category}
                
                    {if $category->getId() != 1 && $category->getParentId() !=1}                         
                        <form class="pkp_form" action="#">
                            <div id="filterCategoryContainer">
                                <select class="applyPlugin selectMenu" size="1" name="obory" onchange="location.href=('{url|escape:"javascript" router=$smarty.const.ROUTE_PAGE page="catalog" op="category" path=$cesta sort=$trideni obor="OBOR_CESTA" rok=$filtrovaniRok jazyk=$filtrovaniJazyk anchor="monographListContainer"}'.replace('OBOR_CESTA', this.options[this.selectedIndex].value))">
                                        <option {if !$filtrovaniObor} selected="selected"{/if} value="">{translate key="filtr.obory"}</option>
                                    {iterate from=obory item=obor}
                                        <option {if $filtrovaniObor == $obor->getPath()}selected="selected"{/if} value="{$obor->getPath()|escape}">{$obor->getLocalizedTitle()|escape}</option>
                                    {/iterate}
                                </select>
                            </div>                                
                        </form>
                                    
                    {/if}
                    <form class="pkp_form" action="#">
                        <div id="filterYearsContainer">
                            <select class="applyPlugin selectMenu" size="1" name="roky" onchange="location.href=('{url|escape:"javascript" router=$smarty.const.ROUTE_PAGE page="catalog" op="category" path=$cesta sort=$trideni obor=$filtrovaniObor rok="FILTR_ROK" jazyk=$filtrovaniJazyk anchor="monographListContainer"}'.replace('FILTR_ROK', this.options[this.selectedIndex].value))">
                                    <option {if !$filtrovaniRok} selected="selected"{/if} value="">{translate key="filtr.roky"}</option>
                                {foreach from=$filtrRoky item=jedenRok}
                                    <option {if $filtrovaniRok == $jedenRok}selected="selected"{/if} value="{$jedenRok|escape}">{$jedenRok}</option>
                                {/foreach}
                            </select>
                        </div>
                    </form>
                    <form class="pkp_form" action="#">
                        <div id="filterLanguageContainer">
                            <select class="applyPlugin selectMenu" size="1" name="jazyky" onchange="location.href=('{url|escape:"javascript" router=$smarty.const.ROUTE_PAGE page="catalog" op="category" path=$cesta sort=$trideni obor=$filtrovaniObor rok=$filtrovaniRok jazyk="FILTR_JAZYK" anchor="monographListContainer"}'.replace('FILTR_JAZYK', this.options[this.selectedIndex].value))">
                                    <option {if !$filtrovaniJazyk} selected="selected"{/if} value="">{translate key="filtr.jazyky"}</option>
                                {foreach from=$filtrJazyky key=jedenJazykKlic item=jedenJazyk}
                                    <option {if $filtrovaniJazyk == $jedenJazykKlic}selected="selected"{/if} value="{$jedenJazykKlic|escape}">{translate key=$jedenJazyk}</option>
                                {/foreach}
                            </select>
                        </div>
                    </form> 
                {else}
                        <form class="pkp_form" action="#">
                            <div id="filterCategoryContainer">
                                <select class="applyPlugin selectMenu" size="1" name="obory" onchange="location.href=('{url|escape:"javascript" router=$smarty.const.ROUTE_PAGE page="catalog" sort=$trideni obor="OBOR_CESTA" rok=$filtrovaniRok jazyk=$filtrovaniJazyk anchor="monographListContainer"}'.replace('OBOR_CESTA', this.options[this.selectedIndex].value))">
                                        <option {if !$filtrovaniObor} selected="selected"{/if} value="">{translate key="filtr.obory"}</option>
                                    {iterate from=obory item=obor}
                                        <option {if $filtrovaniObor == $obor->getPath()}selected="selected"{/if} value="{$obor->getPath()|escape}">{$obor->getLocalizedTitle()|escape}</option>
                                    {/iterate}
                                </select>
                            </div>                                
                        </form>
                    <form class="pkp_form" action="#">
                        <div id="filterYearsContainer">
                            <select class="applyPlugin selectMenu" size="1" name="roky" onchange="location.href=('{url|escape:"javascript" router=$smarty.const.ROUTE_PAGE page="catalog" sort=$trideni obor=$filtrovaniObor rok="FILTR_ROK" jazyk=$filtrovaniJazyk anchor="monographListContainer"}'.replace('FILTR_ROK', this.options[this.selectedIndex].value))">
                                    <option {if !$filtrovaniRok} selected="selected"{/if} value="">{translate key="filtr.roky"}</option>
                                {foreach from=$filtrRoky item=jedenRok}
                                    <option {if $filtrovaniRok == $jedenRok}selected="selected"{/if} value="{$jedenRok|escape}">{$jedenRok}</option>
                                {/foreach}
                            </select>
                        </div>
                    </form>
                    <form class="pkp_form" action="#">
                        <div id="filterLanguageContainer">
                            <select class="applyPlugin selectMenu" size="1" name="jazyky" onchange="location.href=('{url|escape:"javascript" router=$smarty.const.ROUTE_PAGE page="catalog" sort=$trideni obor=$filtrovaniObor rok=$filtrovaniRok jazyk="FILTR_JAZYK" anchor="monographListContainer"}'.replace('FILTR_JAZYK', this.options[this.selectedIndex].value))">
                                    <option {if !$filtrovaniJazyk} selected="selected"{/if} value="">{translate key="filtr.jazyky"}</option>
                                {foreach from=$filtrJazyky key=jedenJazykKlic item=jedenJazyk}
                                    <option {if $filtrovaniJazyk == $jedenJazykKlic}selected="selected"{/if} value="{$jedenJazykKlic|escape}">{translate key=$jedenJazyk}</option>
                                {/foreach}
                            </select>
                        </div>
                    </form> 

                {/if}
                </div>
            {/if}
            <div class="pagingPanel">
                <div class="pkp_helpers_align_left">
                    
                    {if !$vyhledavaniAutori}
                        
                        <div class="popis">
                             {translate key="filtr.tridit"}:                           
                        </div>
                        {if $category}
                            {if $trideni && $trideni == 'lex_desc'}
                                <a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="category" path=$cesta sort="lex_asc" obor=$filtrovaniObor rok=$filtrovaniRok jazyk=$filtrovaniJazyk anchor="monographListContainer"}" target="_self" class="sorting desc">Abecedně</a> | 
                            {else}
                                <a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="category" path=$cesta sort="lex_desc" obor=$filtrovaniObor rok=$filtrovaniRok jazyk=$filtrovaniJazyk anchor="monographListContainer"}" target="_self" class="sorting {if $trideni == 'pub_asc' || $trideni == 'pub_desc'} stejne {else}asc{/if}">Abecedně</a> | 
                            {/if}
                            {if $trideni && $trideni == 'pub_desc'}
                                <a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="category" path=$cesta sort="pub_asc" obor=$filtrovaniObor rok=$filtrovaniRok jazyk=$filtrovaniJazyk anchor="monographListContainer"}" target="_self" class="sorting desc">Podle data vydání</a>
                            {else}
                                <a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="category" path=$cesta sort="pub_desc" obor=$filtrovaniObor rok=$filtrovaniRok jazyk=$filtrovaniJazyk anchor="monographListContainer"}" target="_self" class="sorting {if $trideni == 'lex_asc' || $trideni == 'lex_desc' || !$trideni} stejne {else}asc{/if}">Podle data vydání</a>
                            {/if}
                       
                        {else}
                            {if $trideni && $trideni == 'lex_desc'}
                                <a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" sort="lex_asc" obor=$filtrovaniObor rok=$filtrovaniRok jazyk=$filtrovaniJazyk anchor="monographListContainer"}" target="_self" class="sorting desc">Abecedně</a> | 
                            {else}
                                <a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" sort="lex_desc" obor=$filtrovaniObor rok=$filtrovaniRok jazyk=$filtrovaniJazyk anchor="monographListContainer"}" target="_self" class="sorting {if $trideni == 'pub_asc' || $trideni == 'pub_desc'} stejne {else}asc{/if}">Abecedně</a> | 
                            {/if}
                            {if $trideni && $trideni == 'pub_desc'}
                                <a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" sort="pub_asc" obor=$filtrovaniObor rok=$filtrovaniRok jazyk=$filtrovaniJazyk anchor="monographListContainer"}" target="_self" class="sorting desc">Podle data vydání</a>
                            {else}
                                <a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" sort="pub_desc" obor=$filtrovaniObor rok=$filtrovaniRok jazyk=$filtrovaniJazyk anchor="monographListContainer"}" target="_self" class="sorting {if $trideni == 'lex_asc' || $trideni == 'lex_desc' || !$trideni} stejne {else}asc{/if}">Podle data vydání</a>
                            {/if}
                        {/if}
                    {/if}
                </div>
                
                <div class="pkp_helpers_align_right">
                    <div class="vypis_polozek">
                        {page_info iterator=$publishedMonographs itemsPerPage=$itemsPerPageHelp}{* This displays the "Items x-y of z" text *}
                    </div>
                    {page_links anchor="monographListContainer" name="catalogPaging" iterator=$publishedMonographs sort=$trideni}{* This generates the individual page links *}
                </div>
                
            </div>
        {/if}
	{if $count>0}
 		<ul class="pkp_helpers_clear" style="margin-left: 5px;">
                {if $search=='ano'}
                    {foreach from=$publishedMonographs item=publishedMonograph}
                        {include file="catalog/monograph.tpl" publishedMonograph=$publishedMonograph}
                    {/foreach}
                {else}

		{iterate from=publishedMonographs item=publishedMonograph name=loop}
			{include file="catalog/monograph.tpl" publishedMonograph=$publishedMonograph inline=true vyhledavaniAutori=$vyhledavaniAutori}
		{/iterate}
                {/if}
		</ul>
	{/if}
</div>
