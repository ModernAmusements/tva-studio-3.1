<script>
var logger = function()
{
    var oldConsoleLog = null;
    var pub = {};

    pub.enableLogger =  function enableLogger()
                        {
                            if(oldConsoleLog == null)
                                return;

                            window['console']['log'] = oldConsoleLog;
                        };

    pub.disableLogger = function disableLogger()
                        {
                            oldConsoleLog = console.log;
                            window['console']['log'] = function() {};
                        };

    return pub;
}();

$(document).ready(
    function()
    {
        console.log('hello');

        logger.disableLogger();
        console.log('hi', 'hiya');
        console.log('this wont show up in console');

        logger.enableLogger();
        console.log('This will show up!');
    }
 );
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script type="text/plain" data-src="https://www.googletagmanager.com/gtag/js?id=G-MCQYE5C158" data-cookiecategory="analytics" defer></script>

<!-- Facebook Pixel Code -->
<meta name="facebook-domain-verification" content="fmcg9xviozcih2kn9te6zzyo8vkxbw" />
<!-- Facebook Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '652960739008659');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=652960739008659&ev=PageView&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
