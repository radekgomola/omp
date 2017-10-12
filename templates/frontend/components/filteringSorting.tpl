{if $category}
    {assign var=cath value="category"}
{/if}
<form action="#" class="form-filter">     
    {if $category}
        {assign var=cath value="category"}
    {/if}
    <h3>
        {translate key="filtr.filtrovat"}:
    </h3>
    <div class="grid grid--bottom">
        {if !$category || ($category->getId() != 32 && $category->getParentId() !=32)}
            <div class="grid__cell size--l--3-12">
                <span class="inp-fix inp-fix--select">
                    <select class="inp-select" id="type-1" size="1" name="fakulty" onchange="location.href = ('{url|escape:"javascript" router=$smarty.const.ROUTE_PAGE page="catalog" op=$cath path=$cesta sort=$trideni obor=$filtrovaniObor rok=$filtrovaniRok jazyk=$filtrovaniJazyk fakulta="FAKULTA_CESTA"}'.replace('FAKULTA_CESTA', this.options[this.selectedIndex].value))">
                        <option {if !$filtrovaniFakulta} selected="selected"{/if} value="">{translate key="filtr.fakulty"}</option>
                        {foreach from=$fakulty item=fakulta}
                            {assign var=fakultaId value=$fakulta->getId()}
                            {if $filtrFakultyPocet[$fakultaId] > 0}
                            <option {if $filtrovaniFakulta == $fakulta->getPath()}selected="selected"{/if} value="{$fakulta->getPath()|escape}">{$fakulta->getLocalizedTitle()|escape} ({$filtrFakultyPocet[$fakultaId]})</option> {/if}
                        {/foreach}
                    </select>
                </span>
            </div>
        {/if}
        {if !$category || ($category->getId() != 1 && $category->getParentId() !=1)}
            <div class="grid__cell size--l--3-12">			
                <span class="inp-fix inp-fix--select">
                    <select class="inp-select" size="1" name="obory" onchange="location.href = ('{url|escape:"javascript" router=$smarty.const.ROUTE_PAGE page="catalog" op=$cath path=$cesta sort=$trideni obor="OBOR_CESTA" rok=$filtrovaniRok jazyk=$filtrovaniJazyk fakulta=$filtrovaniFakulta}'.replace('OBOR_CESTA', this.options[this.selectedIndex].value))">
                        <option {if !$filtrovaniObor} selected="selected"{/if} value="">{translate key="filtr.obory"}</option>
                        {foreach from=$obory item=obor}           
                            {assign var=oborId value=$obor->getId()}
                            {if $filtrOboryPocet[$oborId] > 0}
                            <option {if $filtrovaniObor == $obor->getPath()}selected="selected"{/if} value="{$obor->getPath()|escape}">{$obor->getLocalizedTitle()|escape} ({$filtrOboryPocet[$oborId]})</option>{/if}
                        {/foreach}
                    </select>
                </span>
            </div>
        {/if}
        <div class="grid__cell size--l--3-12">
            <span class="inp-fix inp-fix--select">
                <select class="inp-select" size="1" name="roky" onchange="location.href = ('{url|escape:"javascript" router=$smarty.const.ROUTE_PAGE page="catalog" op=$cath path=$cesta sort=$trideni obor=$filtrovaniObor rok="FILTR_ROK" jazyk=$filtrovaniJazyk fakulta=$filtrovaniFakulta }'.replace('FILTR_ROK', this.options[this.selectedIndex].value))">
                    <option {if !$filtrovaniRok} selected="selected"{/if} value="">{translate key="filtr.roky"}</option>
                    {foreach from=$filtrRoky item=jedenRok}
                        {if $filtrRokyPocet[$jedenRok] > 0}
                        <option {if $filtrovaniRok == $jedenRok}selected="selected"{/if} value="{$jedenRok|escape}">{$jedenRok} ({$filtrRokyPocet[$jedenRok]})</option>
                        {/if}
                    {/foreach}
                </select>
            </span>
        </div>

        <div class="grid__cell size--l--3-12">
            <span class="inp-fix inp-fix--select">
                <select class="inp-select" size="1" name="jazyky" onchange="location.href = ('{url|escape:"javascript" router=$smarty.const.ROUTE_PAGE page="catalog" op=$cath path=$cesta sort=$trideni obor=$filtrovaniObor rok=$filtrovaniRok jazyk="FILTR_JAZYK" fakulta=$filtrovaniFakulta }'.replace('FILTR_JAZYK', this.options[this.selectedIndex].value))">
                    <option {if !$filtrovaniJazyk} selected="selected"{/if} value="">{translate key="filtr.jazyky"}</option>
                    {foreach from=$filtrJazyky key=jedenJazykKlic item=jedenJazyk}
                        {if $jedenJazyk != "" && $filtrJazykyPocet[$jedenJazyk] > 0}
                        <option {if $filtrovaniJazyk == $jedenJazykKlic}selected="selected"{/if} value="{$jedenJazykKlic|escape}">{$jedenJazyk} ({$filtrJazykyPocet[$jedenJazyk]})</option>
                        {/if}
                    {/foreach}
                </select>
            </span>
        </div>
    </div>
    <div style="text-align: right;">
        <a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op=$cath path=$cesta}">
            {translate key="filter.reset"}
        </a>  
    </div>
    <h3>
        {translate key="filtr.tridit"}:
    </h3>
    <div class="menu-filter" role="navigation">
        <ul class="menu-filter__list">
            {assign var=counter value=1}     


            {foreach from=$sortOptions item=nazevTrideni key=typTrideni}
                {if $counter > 4}
                    {php}break;{/php}
                {else}
                    <li class="menu-filter__item">
                        <a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op=$cath path=$cesta trideni=$typTrideni obor=$filtrovaniObor rok=$filtrovaniRok jazyk=$filtrovaniJazyk fakulta=$filtrovaniFakulta }" target="_self" class="menu-filter__link {if $trideni == $typTrideni OR ($trideni == "" AND $counter == 4)}is-active{/if}">{$nazevTrideni}</a>
                    </li>
                {/if}
                {assign var=counter value=$counter+1}
            {/foreach}
        </ul>
    </div>
</form>