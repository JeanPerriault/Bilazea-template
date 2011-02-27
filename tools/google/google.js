///////////////////////////////////////////////////////////////////////////////
/**
 * File:
 * js/google.js
 * 
 * Description:
 * This file contains code of google js functions used in Bilazea template
 * 
 * Date:
 * 2010/10/10
 * 
 * @author Bilazea.com - Jean Perriault <bilazea@aol.fr>
 * @copyright Copyright (c) 2000-2010, Bilazea.com Agence web
 */
///////////////////////////////////////////////////////////////////////////////

// Google analytics
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'GOOGLE_ANALYTICS_CODE']);
_gaq.push(['_trackPageview']);

(function() {
  var ga = document.createElement('script');
  ga.type = 'text/javascript';
  ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

// Google translate
function googleTranslateElementInit() {
  new google.translate.TranslateElement({
    pageLanguage: 'fr'
  }, 'google_translate_element');
}
