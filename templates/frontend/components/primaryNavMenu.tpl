{**
* templates/frontend/components/primaryNavMenu.tpl
*
* Copyright (c) 2014-2017 Simon Fraser University Library
* Copyright (c) 2003-2017 John Willinsky
* Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
*
* Primary navigation menu list for OMP
*}

{**
* templates/frontend/components/primaryNavMenu.tpl
*
* Copyright (c) 2014-2016 Simon Fraser University Library
* Copyright (c) 2003-2016 John Willinsky
* Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
*
* Primary navigation menu list for OMP
*}

<ul class="header__menu__primary">

    <li class="header__menu__primary__item">
        <a href="{url router=$smarty.const.ROUTE_PAGE page="index"}" class="header__menu__primary__link" >
            {translate key="navigation.home"}
        </a>
    </li>
    <li class="header__menu__primary__item with-submenu header__menu__primary__item--dark">
        <span class="header__menu__primary__links">
            <a href="{url router=$smarty.const.ROUTE_PAGE page="catalog"}" class="header__menu__primary__link">
                {translate key="navigation.catalog"}
                <span class="icon icon-angle-down"></span>
            </a>
            <a href="#" class="header__menu__primary__toggle icon icon-plus" aria-hidden="true"></a>
        </span>
        <div class="header__menu__submenu">
            <ul class="header__menu__submenu__list">
                <li class="header__menu__submenu__item">
                    <a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="category" path="munispace_books"}" target="_self" class="header__menu__submenu__link">
                        {translate key="navigation.munispace.books"}
                    </a>
                </li>
                <li class="header__menu__submenu__item">
                    <a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="category" path="munispace_textbooks"}" target="_self" class="header__menu__submenu__link">
                        {translate key="navigation.munispace.coursebooks"} 
                    </a>
                </li>
                <li class="header__menu__submenu__item">
                    <a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="category" path="munispace_proceedings"}" target="_self" class="header__menu__submenu__link">
                        {translate key="navigation.munispace.proceedings"} 
                    </a>
                </li>
                <li class="header__menu__submenu__item">
                    <a href="https://journals.muni.cz" target="_blank" class="header__menu__submenu__link">
                        {translate key="navigation.munispace.journals"} 
                    </a>
                </li>
            </ul>
        </div>
    </li>

    <li class="header__menu__primary__item with-subbox header__menu__primary__item--dark">
        <span class="header__menu__primary__links">
            <a href="#" class="header__menu__primary__link">
                {translate key="browse.obory"}
                <span class="icon icon-angle-down"></span>
            </a>
            <a href="#" class="header__menu__primary__toggle icon icon-plus" aria-hidden="true"></a>
        </span>
        <div class="header__menu__subbox">
            <a href="#" class="header__menu__subbox__close icon icon-chevron-left" aria-hidden="true"></a>
            <div class="grid">
                <div class="grid__cell header__menu__subbox--size-s-l--1  header__menu__subbox--size-m-l--4 header__menu__subbox--size--l--3 header__menu__subbox__toggle is-open">
                    <div class="header__menu__subbox__box">
                        <ul class="header__menu__subbox__list">
                            {iterate from=kategorieObory item=browseCategory}
                            <li class="header__menu__subbox__list__item">
                                <a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="category" path=$browseCategory->getPath()|escape}" class="header__menu__subbox__link {if $browseBlockSelectedCategory == $browseCategory->getPath()|escape}is-active{/if}">{$browseCategory->getLocalizedTitle()|escape}</a>
                            </li>
                            {/iterate}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </li>
    <li class="header__menu__primary__item with-submenu header__menu__primary__item--dark">
        <span class="header__menu__primary__links">
            <a href="#" class="header__menu__primary__link">
                {translate key="browse.fakulty"}
                <span class="icon icon-angle-down"></span>
            </a>
            <a href="#" class="header__menu__primary__toggle icon icon-plus" aria-hidden="true"></a>
        </span>
            
        <div class="header__menu__submenu">
            <ul class="header__menu__submenu__list">
                {iterate from=kategorieFakulty item=browseCategory}
                    {if $browseCategory->getId() != 44 && $browseCategory->getId() != 54}
                        {assign var=kategorieId value=$browseCategory->getId()}
                        {if $filtrFakultyPocetMenu[$kategorieId] > 0}
                        <li class="header__menu__submenu__item">
                            <a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="category" path=$browseCategory->getPath()|escape}" class="header__menu__submenu__link {if $browseBlockSelectedCategory == $browseCategory->getPath()|escape}is-active{/if}">{$browseCategory->getLocalizedTitle()|escape}</a>
                        </li>
                        {/if}
                    {/if}
                {/iterate}
                    <li class="header__menu__submenu__item">
                        <a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="category" path=$kategorieOstatni->getPath()|escape}" class="header__menu__submenu__link {if $browseBlockSelectedCategory == $kategorieOstatni->getPath()|escape}is-active{/if}">{$kategorieOstatni->getLocalizedTitle()|escape}</a>
                    </li>
            </ul>
        </div>
    </li>
    <li class="header__menu__primary__item">
        <a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="newReleases"}" class="header__menu__primary__link">
            {translate key="navigation.newReleases"}
        </a>
    </li>
    <li class="header__menu__primary__item with-submenu header__menu__primary__item--dark">
        <span class="header__menu__primary__links">
            <a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="category" path="zlaty-fond"}" class="header__menu__primary__link">
                {translate key="navigation.zlatyFond"}
                <span class="icon icon-angle-down"></span>
            </a>
            <a href="#" class="header__menu__primary__toggle icon icon-plus" aria-hidden="true"></a>
        </span>
        <div class="header__menu__submenu">
            <ul class="header__menu__submenu__list zlaty-fond_prim-nav">
                {iterate from=kategorieFakultyZlatyFond item=browseCategory}
                    {*{if $browseCategory->getId() != 44}*}
                        {assign var=kategorieIdZlatyFond value=$browseCategory->getId()}
                        {if $filtrFakultyPocetMenuZlatyFond[$kategorieIdZlatyFond] > 0}
                        <li class="header__menu__submenu__item">
                            <a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="category" path="zlaty-fond" fakulta=$browseCategory->getPath()|escape}" class="header__menu__submenu__link {if $browseBlockSelectedCategory == $browseCategory->getPath()|escape}is-active{/if}">{$browseCategory->getLocalizedTitle()|escape}</a>
                        </li>
                        {/if}
{*                    {/if}*}
                {/iterate}
                
            </ul>
        </div>
    </li>
    <li class="header__menu__primary__item">
        <a href="{url router=$smarty.const.ROUTE_PAGE page="vyhledavaniAutori"}" class="header__menu__primary__link">
            {translate key="browse.authors"}
        </a>
    </li>
    <li class="header__menu__primary__item">
        <a href="{$baseUrl}/library/munispaceSignpost" class="header__menu__primary__link">
            {translate key="navigation.munispace.signpost"} 
        </a>
    </li>
    <li class="header__menu__primary__item">
        <a href="{translate key="navigation.munispace.oa.link"}" class="header__menu__primary__link" target="_blank">
            {translate key="navigation.munispace.oa"} 
        </a>
    </li>
    <li class="header__menu__primary__item">
        <a href="http://www.press.muni.cz/nakladatelstvi/kontakty" class="header__menu__primary__link" target="_blank">
            {translate key="about.contact"}
        </a>
    </li>
</ul>
