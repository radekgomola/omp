{**
 * templates/munispaceSignpost/munispaceRozcestnik.tpl
 *
 * Under construction page.
 *}
{strip}
{assign var="pageTitle" value="munispace.ostatni"}
{include file="common/header.tpl" suppressPageTitle=true}
{/strip}
<div>
    <h2 class="pkp_helpers_text_left">{translate key="munispace.ostatni"}</h2>
    {translate key="munispace.ostatni.description"}
    <ul class="odr_classic2">
        <li><a href="https://omp.ics.muni.cz/index.php/munipress/index" target="_blank">{translate key="signpost.munispace"}</a></li>
        <li><a href="http://digilib.phil.muni.cz/" target="_blank">{translate key="signpost.digilib"}</a></li>
        <li><a href="http://is.muni.cz/elportal/studovna.pl" target="_blank">{translate key="signpost.elportal"}</a></li>
        <li><a href="http://eknihy.knihovna.cz/" target="_blank">{translate key="signpost.knihovnictvi"}</a></li>
        <li><a href="http://www.phil.muni.cz/wuee/home/Links/elektronicka-knihovna" target="_blank">{translate key="signpost.etnologie"}</a></li>
        <li><a href="http://portal.med.muni.cz/" target="_blank">{translate key="signpost.med"}</a></li>
        <li><a href="http://www.opvk.fss.muni.cz/ensec/publikace" target="_blank">{translate key="signpost.evropskaStudia"}</a></li>
        <li><a href="http://www.fsps.muni.cz/impact/knihovna/" target="_blank">{translate key="signpost.knihovnaFSPS"}</a></li>
        <li><a href="https://publi.cz/eMUNI/" target="_blank">{translate key="signpost.kinantropologie"}</a></li>
    </ul>
    <p>{translate key="munispace.ostatni.napisteNam"}</p>
</div>
{include file="common/footer.tpl"}
