{**
* templates/catalog/book/authorsMonographs.tpl
*
* Copyright (c) 2014 Simon Fraser University Library
* Copyright (c) 2003-2014 John Willinsky
* Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
*
* Display a public-facing monograph list in the catalog.
*}


{assign var=count value=$publishedMonographs->getCount()}
{if $count>0}
    <div class="pkp_catalog_monographs"  style="margin-top:25px">
        <h4>{translate key="author.publikace"}</h4>
        <ul class="pkp_helpers_clear" style="margin-left: 5px;">
            {iterate from=publishedMonographs item=publishedMonograph}
            <li class="pkp_catalog_monograph pkp_helpers_align_left" style="min-height: 210px;">
                <a class="pkp_helpers_image_left" href="{url page="catalog" op="book" path=$publishedMonograph->getId()}" target="_blank">
                    {include file="controllers/monographList/coverImage.tpl" monograph=$publishedMonograph}
                </a>
                <div class="pkp_catalog_monographDetails">
                    <div class="pkp_catalog_monographTitle"><a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="book" path=$publishedMonograph->getId()}" target="_blank">{$publishedMonograph->getLocalizedFullTitle()}</a></div>
                    <div class="pkp_catalog_monograph_authorship">
                        {$publishedMonograph->getAuthorString()|escape}{if $publishedMonograph->getAKolektiv()==1} {translate key="submission.a_kolektiv"}{/if}
                    </div>
                </div>
            </li>
            {/iterate}
        </ul>
    </div>
{/if}

