{**
 * templates/manageCatalog/monographs.tpl
 *
 * Copyright (c) 2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Present a list of monographs for management.
 *}

{* Generate a unique ID for this monograph list *}
{capture assign=monographContainerId}monographsContainer-{$listName}{/capture}

<script type="text/javascript">
	// Initialize JS handler.
	$(function() {ldelim}
		$('#{$monographContainerId|escape:"javascript"}').pkpHandler(
			'$.pkp.pages.manageCatalog.MonographManagementListHandler'
		);
	{rdelim});
</script>

{if $messageKey}<p>{translate key=$messageKey}</p>{/if}
<div id="{$monographContainerId|escape}">
	{if $category}
		<div id="categoryDescription">                    
			{$category->getLocalizedDescription()}
		</div>
	{elseif $series}
		<div id="seriesDescription">
			{$series->getLocalizedDescription()}
		</div>
	{/if}
	<div class="pkp_helpers_align_right">
		<div class="submission_actions pkp_linkActions">
			{if $includeFeatureAction && !$publishedMonographs->wasEmpty()}{null_link_action id="feature-$monographContainerId" key="common.feature" image="feature"}{/if}
		</div>
	</div>
                <div id="manageMonographsContainer">
                    <br />
                    <br />
                    {if !$category && !$series && !$vyhledavani}                        
                        <div class="filterPanel" style="height: 40px;">
                            <div class="pkp_helpers_align_right" style="font-size: 14px;">
                                <div class="vypis_polozek">
                                    {page_info iterator=$publishedMonographs itemsPerPage=$itemsPerPageHelp}{* This displays the "Items x-y of z" text *}
                                </div>
                                {page_links anchor="manageMonographsContainer" name="managerCatalogPaging" iterator=$publishedMonographs sort=$trideni obor=$filtrovaniObor rok=$filtrovaniRok jazyk=$filtrovaniJazyk fakulta=$filtrovaniFakulta speckat=$speckat}
                            </div>
                            <div style="font-size:14px;">
                                {translate key="filtr.filtrovat"}:
                            </div>
                                <form class="pkp_form" action="#">
                                    <div id="filterFacultyContainer" class="filtr_kontejner">
                                        <select class="applyPlugin selectMenu" size="1" name="fakulty" onchange="location.href=('{url|escape:"javascript" router=$smarty.const.ROUTE_PAGE page="manageCatalog" sort=$trideni obor=$filtrovaniObor rok=$filtrovaniRok jazyk=$filtrovaniJazyk fakulta="FAKULTA_CESTA" speckat=$speckat anchor="monographListContainer"}'.replace('FAKULTA_CESTA', this.options[this.selectedIndex].value))">
                                                <option {if !$filtrovaniFakulta} selected="selected"{/if} value="">{translate key="filtr.fakulty"}</option>
                                            {iterate from=fakulty item=fakulta}
                                                <option {if $filtrovaniFakulta == $fakulta->getPath()}selected="selected"{/if} value="{$fakulta->getPath()|escape}">{$fakulta->getLocalizedTitle()|escape}</option>
                                            {/iterate}
                                        </select>
                                    </div>                                
                                </form> 
                                <form class="pkp_form" action="#">
                                    <div id="filterCategoryContainer" class="filtr_kontejner">
                                        <select class="applyPlugin selectMenu" size="1" name="obory" onchange="location.href=('{url|escape:"javascript" router=$smarty.const.ROUTE_PAGE page="manageCatalog" sort=$trideni obor="OBOR_CESTA" rok=$filtrovaniRok jazyk=$filtrovaniJazyk fakulta=$filtrovaniFakulta  speckat=$speckat anchor="monographListContainer"}'.replace('OBOR_CESTA', this.options[this.selectedIndex].value))">
                                                <option {if !$filtrovaniObor} selected="selected"{/if} value="">{translate key="filtr.obory"}</option>
                                            {iterate from=obory item=obor}
                                                <option {if $filtrovaniObor == $obor->getPath()}selected="selected"{/if} value="{$obor->getPath()|escape}">{$obor->getLocalizedTitle()|escape}</option>
                                            {/iterate}
                                        </select>
                                    </div>                                
                                </form>                     
                                <form class="pkp_form" action="#">
                                <div id="filterYearsContainer">
                                    <select class="applyPlugin selectMenu" size="1" name="roky" onchange="location.href=('{url|escape:"javascript" router=$smarty.const.ROUTE_PAGE page="manageCatalog" sort=$trideni obor=$filtrovaniObor rok="FILTR_ROK" jazyk=$filtrovaniJazyk fakulta=$filtrovaniFakulta speckat=$speckat anchor="monographListContainer"}'.replace('FILTR_ROK', this.options[this.selectedIndex].value))">
                                            <option {if !$filtrovaniRok} selected="selected"{/if} value="">{translate key="filtr.roky"}</option>
                                        {foreach from=$filtrRoky item=jedenRok}
                                            <option {if $filtrovaniRok == $jedenRok}selected="selected"{/if} value="{$jedenRok|escape}">{$jedenRok}</option>
                                        {/foreach}
                                    </select>
                                </div>
                            </form>
                            <form class="pkp_form" action="#">
                                <div id="filterLanguageContainer" class="filter_kontejner">
                                    <select class="applyPlugin selectMenu" size="1" name="jazyky" onchange="location.href=('{url|escape:"javascript" router=$smarty.const.ROUTE_PAGE page="manageCatalog" sort=$trideni obor=$filtrovaniObor rok=$filtrovaniRok jazyk="FILTR_JAZYK" fakulta=$filtrovaniFakulta speckat=$speckat anchor="monographListContainer"}'.replace('FILTR_JAZYK', this.options[this.selectedIndex].value))">
                                            <option {if !$filtrovaniJazyk} selected="selected"{/if} value="">{translate key="filtr.jazyky"}</option>
                                        {foreach from=$filtrJazyky key=jedenJazykKlic item=jedenJazyk}
                                            <option {if $filtrovaniJazyk == $jedenJazykKlic}selected="selected"{/if} value="{$jedenJazykKlic|escape}">{translate key=$jedenJazyk}</option>
                                        {/foreach}
                                    </select>
                                </div>
                            </form>
                        </div>
                        
                        <div class="pagingPanel">
                            <div>
                                {translate key="filtr.tridit"}:                           
                           </div>
                           
                            <div class="pkp_helpers_align_left" style="clear:both">
                                {if $trideni && $trideni == 'lex_desc'}
                                <a href="{url router=$smarty.const.ROUTE_PAGE page="manageCatalog" sort="lex_asc" obor=$filtrovaniObor rok=$filtrovaniRok jazyk=$filtrovaniJazyk fakulta=$filtrovaniFakulta  speckat=$speckat anchor="monographListContainer"}" target="_self" class="sorting desc">{translate key="sorting.alphabetically"}</a> | 
                            {else}
                                <a href="{url router=$smarty.const.ROUTE_PAGE page="manageCatalog" sort="lex_desc" obor=$filtrovaniObor rok=$filtrovaniRok jazyk=$filtrovaniJazyk fakulta=$filtrovaniFakulta speckat=$speckat anchor="monographListContainer"}" target="_self" class="sorting {if $trideni == 'pub_asc' || $trideni == 'pub_desc' || $trideni == 'change_asc' || $trideni == 'change_desc'} stejne {else}asc{/if}">{translate key="sorting.alphabetically"}</a> | 
                            {/if}
                            {if $trideni && $trideni == 'pub_desc'}
                                <a href="{url router=$smarty.const.ROUTE_PAGE page="manageCatalog" sort="pub_asc" obor=$filtrovaniObor rok=$filtrovaniRok jazyk=$filtrovaniJazyk fakulta=$filtrovaniFakulta  speckat=$speckat anchor="monographListContainer"}" target="_self" class="sorting desc">{translate key="sorting.byPublishingDate"}</a> |
                            {else}
                                <a href="{url router=$smarty.const.ROUTE_PAGE page="manageCatalog" sort="pub_desc" obor=$filtrovaniObor rok=$filtrovaniRok jazyk=$filtrovaniJazyk fakulta=$filtrovaniFakulta speckat=$speckat anchor="monographListContainer"}" target="_self" class="sorting {if $trideni == 'lex_asc' || $trideni == 'lex_desc' || $trideni == 'change_asc' || $trideni == 'change_desc' || !$trideni} stejne {else}asc{/if}">{translate key="sorting.byPublishingDate"}</a> |
                            {/if}
                            {if $trideni && $trideni == 'change_desc'}
                                <a href="{url router=$smarty.const.ROUTE_PAGE page="manageCatalog" sort="change_asc" obor=$filtrovaniObor rok=$filtrovaniRok jazyk=$filtrovaniJazyk fakulta=$filtrovaniFakulta speckat=$speckat anchor="monographListContainer"}" target="_self" class="sorting desc">{translate key="sorting.byLastModificationDate"}</a> |
                            {else}
                                <a href="{url router=$smarty.const.ROUTE_PAGE page="manageCatalog" sort="change_desc" obor=$filtrovaniObor rok=$filtrovaniRok jazyk=$filtrovaniJazyk fakulta=$filtrovaniFakulta speckat=$speckat anchor="monographListContainer"}" target="_self" class="sorting {if $trideni == 'lex_asc' || $trideni == 'lex_desc' || $trideni == 'pub_asc' || $trideni == 'pub_desc' || !$trideni} stejne {else}asc{/if}">{translate key="sorting.byLastModificationDate"}</a> |
                            {/if}                                
                            </div>
                            <div class="pkp_helpers_aighn_right" style="padding-right:5px">
                           <form class="pkp_form" action="#" >
                                <div id="filterSpeckatContainer" style="width: 200px; float: right;">
                                    <select class="applyPlugin selectMenu" size="1" name="speckat" onchange="location.href=('{url|escape:"javascript" router=$smarty.const.ROUTE_PAGE page="manageCatalog" sort=$trideni speckat=FILTR_SPECKAT anchor="monographListContainer"}'.replace('FILTR_SPECKAT', this.options[this.selectedIndex].value))">
                                            <option {if $speckat !="nezarazeno" && $speckat != "ke_kontrole_pro_munipress"} selected="selected"{/if} value="">{translate key="filtr.speckat"}</option>
                                            <option {if $speckat =="nezarazeno"}selected="selected"{/if} value="nezarazeno">{translate key="filtr.speckat.nezarazeno"}</option>
                                            <option {if $speckat =="ke_kontrole_pro_munipress"}selected="selected"{/if} value="ke_kontrole_pro_munipress">{translate key="filtr.speckat.ke_kontrole"}</option>
                                    </select>
                                </div>
                           </form>
                            </div>
                        </div>                     
                            
                    {/if}
                    <br />
                    <br />
                    <br />
                    <br />
                    <ul class="pkp_manageCatalog_monographList pkp_helpers_container_center">
                            {if !$publishedMonographs->wasEmpty()}
                                    {iterate from=publishedMonographs item=monograph}
                                            {include file="manageCatalog/monograph.tpl"}
                                    {/iterate}
                            {else}
                                    <p>{translate key="catalog.manage.noMonographs"}</p>
                            {/if}
                    </ul>
                </div>
</div>
