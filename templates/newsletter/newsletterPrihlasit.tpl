{**
* templates/underConstruction/under_construction.tpl
*
* Under construction page.
*}
{strip}
    {assign var="pageTitle" value="newsletter.prihlasit.title"}
    {include file="common/header.tpl"}
{/strip}
<br />  
<div>

    <!-- Begin MailChimp Signup Form -->
    <div style="" id="mc_embed_signup">
        <h3><a href="{url router=$smarty.const.ROUTE_PAGE page="newsletter" op="archiv"}">{translate key="newsletter.archiv.long"}</a> {translate key="newsletter.czechOnly"}</h3>
         
        <br />
        <form action="//muni.us3.list-manage.com/subscribe/post?u=43fbe1373f33592efcd5310c5&amp;id=f9e61482c2" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="pkp_form validate" target="_blank" novalidate>
            {translate key="newsletter.popis"} {translate key="newsletter.czechOnly"}
            <div class="indicates-required"><span class="asterisk">*</span> {translate key="newsletter.required"}</div>
            <div class="mc-field-group">
                <label for="mce-EMAIL">{translate key="newsletter.email"}  <span class="asterisk">*</span>
                </label>
                <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
            </div>
            <div class="mc-field-group">
                <label for="mce-FNAME">{translate key="newsletter.jmeno"} </label>
                <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
            </div>
            <div class="mc-field-group">
                <label for="mce-LNAME">{translate key="newsletter.organizace"} </label>
                <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
            </div>
            <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;"><input type="text" name="b_43fbe1373f33592efcd5310c5_f9e61482c2" tabindex="-1" value=""></div>
            
            <div class="clear"><input type="submit" value="{translate key="newsletter.prihlasit"}" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
            
            <div style="float: right">
                <span class="poweredBy">
                    <a href="http://www.mailchimp.com/monkey-rewards/?utm_source=freemium_newsletter&utm_medium=email&utm_campaign=monkey_rewards&aid=43fbe1373f33592efcd5310c5&afl=1" target="_blank">
                        <img width="214" height="56" border="0" title="MailChimp Email Marketing" alt="Email Marketing Powered by MailChimp" src="https://cdn-images.mailchimp.com/monkey_rewards/MC_MonkeyReward_26.png">
                    </a>
                </span>
            </div>
        </form>
    </div>

    <!--End mc_embed_signup-->
    
</div>
{include file="common/footer.tpl"}
