{**
* templates/frontend/objects/monograph_slide.tpl
*
*}
<div class="smallSlide" id="smallSlide">
    <div class="smallSlide-img">
        <a href="{url page="catalog" op="book" path=$monograph->getId()}" class="cover">
            <div class="box-article-list__containerMunipress">
            <img alt="{translate key="catalog.coverImageTitle" monographTitle=$monograph->getLocalizedFullTitle()|strip_tags|escape}" src="{url router=$smarty.const.ROUTE_COMPONENT component="submission.CoverHandler" op="thumbnail" submissionId=$monograph->getId() random=$monograph->getId()|uniqid}" />
            </div>
        </a>
    </div>
    <p>
        <a href="{url router=$smarty.const.ROUTE_PAGE page="catalog" op="book" path=$monograph->getId()}" target="_blank" >
            {$monograph->getLocalizedFullTitle()|truncate:100:"…"}
        </a>
    </p>
</div>
