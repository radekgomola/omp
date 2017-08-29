{**
* templates/frontend/objects/monograph_slide.tpl
*
*}
<div class="smallSlide">
    <div class="obrazek">
        <a href="{url page="catalog" op="book" path=$monograph->getId()}" target="_blank">
            {url|assign:coverImageUrl router=$smarty.const.ROUTE_COMPONENT component="submission.CoverHandler" op="thumbnail" submissionId=$monograph->getId() random=$monograph->getId()|uniqid} 

            <img alt="{translate key="catalog.coverImageTitle" monographTitle=$monograph->getLocalizedFullTitle()|strip_tags|escape}" src={$coverImageUrl} class="box-article-list__imgMunipress"/>
        </a>
    </div>
    <p>
        <a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="book" path=$monograph->getId()}">
            {$monograph->getLocalizedFullTitle()|truncate:100:"…"}
        </a>
    </p>
</div>
