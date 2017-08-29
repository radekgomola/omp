{**
* templates/frontend/objects/monograph_slide.tpl
*
*}
<div>
    <div class="obrazek">
        <a href="{url page="catalog" op="book" path=$monograph->getId()}">
            {url|assign:coverImageUrl router=$smarty.const.ROUTE_COMPONENT component="submission.CoverHandler" op="catalog" submissionId=$monograph->getId() random=$monograph->getId()|uniqid} 

            <img alt="{translate key="catalog.coverImageTitle" monographTitle=$monograph->getLocalizedFullTitle()|strip_tags|escape}" src={$coverImageUrl} class="box-article-list__imgMunipress"/>
{*            <div class="over">
            </div>*}
        </a>
    </div>
    <p>
        <a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="book" path=$monograph->getId()}">
            {$monograph->getLocalizedFullTitle()|truncate:80:" …"}
        </a>
    </p>
</div>
