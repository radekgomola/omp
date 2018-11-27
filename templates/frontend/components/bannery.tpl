{**
* templates/frontend/components/bannery.tpl
*
*}
<div class="crossroad-std">
    <ul class="grid">
        <li class="grid__cell size--m--2-4 size--l--3-12">
            <a href="https://journals.muni.cz/" target="_blank">
                <img src="{$baseUrl}/images/img/bannery/journals.png"  alt="journal.muni.cz" class="box-article-list__imgMunipress box-article-list__imgMunipress--banner" />
            </a>
        </li>
        <li class="grid__cell size--m--2-4 size--l--3-12">
            <a href="{$baseUrl}/public/flipbooks/katalogy/katalog2018podzim/index.html" target="_blank">
                <img src="https://cdn.muni.cz/media/3100224/katalog2018podzim.png" alt="catalog" class="box-article-list__imgMunipress box-article-list__imgMunipress--banner" />
            </a>
        </li>
        <li class="grid__cell size--m--2-4 size--l--3-12">
            <a href="http://discovery.muni.cz/" target="_blank">
                <img src="{$baseUrl}/images/img/bannery/ebsco_host.png" alt="discovery" class="box-article-list__imgMunipress box-article-list__imgMunipress--banner"/>
            </a>
        </li>
        <li class="grid__cell size--m--2-4 size--l--3-12">
            <a href="http://www.press.muni.cz{translate key="banner.web.link"}" target="_blank">
                <img src="{$baseUrl}/images/img/bannery/web_munipress{translate key="banner.web"}.png" alt="{translate key="banner.web.description"}" class="box-article-list__imgMunipress box-article-list__imgMunipress--banner" />
            </a>
        </li>
    </ul>
</div>
