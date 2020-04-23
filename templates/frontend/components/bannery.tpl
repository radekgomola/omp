{**
* templates/frontend/components/bannery.tpl
*
*}
<div class="crossroad-std">
    <ul class="grid">
        <li class="grid__cell size--m--2-4 size--l--3-12">
            <a href="https://journals.muni.cz/" target="_blank">
                <img src="{$baseUrl}/images/img/bannery/muni_journals{translate key="banner.web"}.png"  alt="journal.muni.cz" class="box-article-list__imgMunipress box-article-list__imgMunipress--banner" />
            </a>
        </li>
        <li class="grid__cell size--m--2-4 size--l--3-12">
            <a href="{$baseUrl}/public/flipbooks/katalogy/katalog2019podzim/index.html" target="_blank">
                <img src="{$baseUrl}/images/img/bannery/katalog{translate key="banner.web"}.png" alt="catalog" class="box-article-list__imgMunipress box-article-list__imgMunipress--banner" />
            </a>
        </li>
        <li class="grid__cell size--m--2-4 size--l--3-12">
            <a href="http://discovery.muni.cz/" target="_blank">
                <img src="https://webcentrum.muni.cz/media/3211736/discovery.png" alt="discovery" class="box-article-list__imgMunipress box-article-list__imgMunipress--banner"/>
            </a>
        </li>
        <li class="grid__cell size--m--2-4 size--l--3-12">
            <a href="http://www.press.muni.cz{translate key="banner.web.link"}" target="_blank">
                <img src="{$baseUrl}/images/img/bannery/munipress{translate key="banner.web"}.png" alt="{translate key="banner.web.description"}" class="box-article-list__imgMunipress box-article-list__imgMunipress--banner" />
            </a>
        </li>
    </ul>
</div>
<div style="text-align:center; padding-bottom: 30px;">
<span style="padding-right: 30px;"><a href="https://ezdroje.muni.cz/" style="text-decoration: none;">{translate key="banner.erp"}</a></span>
<span style="padding-right: 30px;"><a href="https://is.muni.cz/thesis/" style="text-decoration: none;">{translate key="banner.zaverecnePrace"}</a></span>
<span style="padding-right: 30px;"><a href="https://katalog.muni.cz" style="text-decoration: none;">{translate key="banner.katalog"}</a></span>
<span style="padding-right: 30px;"><a href="https://is.muni.cz/repozitar/" style="text-decoration: none;">{translate key="banner.repozitar"}</a></span>
<span><a href="https://www.muni.cz/services/library/" style="text-decoration: none;">{translate key="banner.knihovny"}</a></span>
</div>
