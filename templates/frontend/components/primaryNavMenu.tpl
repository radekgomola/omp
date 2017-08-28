{**
* templates/frontend/components/primaryNavMenu.tpl
*
* Copyright (c) 2014-2017 Simon Fraser University Library
* Copyright (c) 2003-2017 John Willinsky
* Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
*
* Primary navigation menu list for OMP
*}
{*
<ul id="navigationPrimary" class="pkp_navigation_primary pkp_nav_list">

{if $enableAnnouncements}
<li>
<a href="{url router=$smarty.const.ROUTE_PAGE page="announcement"}">
{translate key="announcement.announcements"}
</a>
</li>
{/if}

<li>
<a href="{url router=$smarty.const.ROUTE_PAGE page="catalog"}">
{translate key="navigation.catalog"}
</a>
</li>

{if $currentPress && ($currentPress->getLocalizedSetting('masthead') || $currentPress->getLocalizedSetting('submissions'))}
{assign var="submenu_attr" value=" aria-haspopup='true' aria-expanded='false'"}
{/if}
<li{$submenu_attr}>
<a href="{url router=$smarty.const.ROUTE_PAGE page="about"}">
{translate key="navigation.about"}
</a>
{if $submenu_attr}
<ul>
<li>
<a href="{url router=$smarty.const.ROUTE_PAGE page="about"}">
{translate key="about.aboutContext"}
</a>
</li>
{if $currentPress && $currentPress->getLocalizedSetting('masthead') != ''}
<li>
<a href="{url router=$smarty.const.ROUTE_PAGE page="about" op="editorialTeam"}">
{translate key="about.editorialTeam"}
</a>
</li>
{/if}
<li>
<a href="{url router=$smarty.const.ROUTE_PAGE page="about" op="submissions"}">
{translate key="about.submissions"}
</a>
</li>
{if $currentPress && ($currentPress->getSetting('mailingAddress') || $currentPress->getSetting('contactName'))}
<li>
<a href="{url router=$smarty.const.ROUTE_PAGE page="about" op="contact"}">
{translate key="about.contact"}
</a>
</li>
{/if}
</ul>
{/if}
</li>
</ul>
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
                    <li class="header__menu__submenu__item">
                        <a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="category" path=$browseCategory->getPath()|escape}" class="header__menu__submenu__link {if $browseBlockSelectedCategory == $browseCategory->getPath()|escape}is-active{/if}">{$browseCategory->getLocalizedTitle()|escape}</a>
                    </li>
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
    <li class="header__menu__primary__item">
        <a href="{url router=$smarty.const.ROUTE_PAGE page="vyhledavaniAutori"}" class="header__menu__primary__link">
            {translate key="browse.authors"}
        </a>
    </li>
    <li class="header__menu__primary__item">
        <a href="{$baseUrl}/index.php/munispace/munispaceSignpost" class="header__menu__primary__link">
            {translate key="navigation.munispace.signpost"} 
        </a>
    </li>
    <li class="header__menu__primary__item">
        <a href="{$baseUrl}/index.php/munispace/contact" class="header__menu__primary__link">
            {translate key="about.contact"}
        </a>
    </li>


</ul>
