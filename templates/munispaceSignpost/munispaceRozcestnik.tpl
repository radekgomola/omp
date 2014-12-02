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
        <li><a href="https://omp.ics.muni.cz/index.php/munipress/index" target="_blank">Čítárna Munispace</a></li>
        <li><a href="http://digilib.phil.muni.cz/" target="_blank">Digitální knihovna Filozofické fakulty Masarykovy univerzity </a></li>
        <li><a href="http://is.muni.cz/elportal/studovna.pl" target="_blank">Elportál – elektronické výukové publikace MU</a></li>
        <li><a href="http://eknihy.knihovna.cz/" target="_blank">Knihy autorů z Kabinetu informačních studií a knihovnictví FF MU</a></li>
        <li><a href="http://www.phil.muni.cz/wuee/home/Links/elektronicka-knihovna" target="_blank">Multimediální podpora výuky klinických a zdravotnických oborů – portál LF MU</a></li>
        <li><a href="http://www.opvk.fss.muni.cz/ensec/publikace" target="_blank">Publikace Katedry mezinárodních vztahů a evropských studií FSS MU </a></li>
        <li><a href="http://www.fsps.muni.cz/impact/knihovna/" target="_blank">Portál elektronických studijních materiálů FSpS MU </a></li>
        <li><a href="https://publi.cz/eMUNI/" target="_blank">Knihy vydané v rámci projektu Spolupráce v kinantropologii na FSpS MU </a></li>
        <li><a href="http://www.fsps.muni.cz/~tvodicka/library/" target="_blank">http://www.fsps.muni.cz/~tvodicka/library/</a></li>
        <li><a href="http://portal.med.muni.cz/" target="_blank">http://portal.med.muni.cz/</a></li>
        <li><a href="http://www.fsps.muni.cz/impact/knihovna/biomechanicke-metody-ve-sportu/" target="_blank">http://www.fsps.muni.cz/impact/knihovna/biomechanicke-metody-ve-sportu/</a></li>
    </ul>
    <p>{translate key="munispace.ostatni.napisteNam"}</p>
</div>
{include file="common/footer.tpl"}
