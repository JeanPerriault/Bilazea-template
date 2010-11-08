///////////////////////////////////////////////////////////////////////////////
/**
 * File:
 * js/bilazea.js
 * 
 * Description:
 * This file contains js functions used in Bilazea template
 * It's using mootools framework
 * 
 * Date:
 * 2010/10/10
 * 
 * @author Bilazea.com - Jean Perriault <bilazea@aol.fr>
 * @copyright Copyright (c) 2000-2010, Bilazea.com Agence web
 */
///////////////////////////////////////////////////////////////////////////////


// MOOTOOLS STUFF /////////////////////////////////////////////////////////////

// BROWSER
// Get browser name and set corresponding css file
/*
Browser.Features.xpath - (boolean) True if the browser supports DOM queries 
using XPath.
Browser.Features.air - (boolean) True if the browser supports AIR.
Browser.Features.query - (boolean) True if the browser supports 
querySelectorAll.
Browser.Features.json - (boolean) True if the browser has a native 
JSON object.
Browser.Features.xhr - (boolean) True if the browser supports native 
XMLHTTP object.

Request:
Browser.Request - (object) The XMLHTTP object or equivalent.

Name:

Browser.ie - (boolean) True if the current browser is Internet Explorer.
Browser.ie6 - (boolean) True if the current browser is Internet Explorer 6.
Browser.ie7 - (boolean) True if the current browser is Internet Explorer 7.
Browser.ie8 - (boolean) True if the current browser is Internet Explorer 8.
Browser.firefox - (boolean) True if the current browser is Firefox
Browser.firefox2 - (boolean) True if the current browser is Firefox 2
Browser.firefox3 - (boolean) True if the current browser is Firefox 3
Browser.safari - (boolean) True if the current browser is Safari
Browser.safari3 - (boolean) True if the current browser is Safari 3
Browser.safari4 - (boolean) True if the current browser is Safari 4
Browser.chrome - (boolean) True if the current browser is Chrome
Browser.opera - (boolean) True if the current browser is Opera

If an IE document is set to backwards compatibility mode using 
the X-UA-Compatible header, then the Browser object is treated 
as if the earlier version of the browser is running.

Platform:
Browser.Platform.mac - (boolean) True if the platform is Mac.
Browser.Platform.win - (boolean) True if the platform is Windows.
Browser.Platform.linux - (boolean) True if the platform is Linux.
Browser.Platform.ios - (boolean) True if the platform is iOS.
Browser.Platform.android - (boolean) True if the platform is Android
Browser.Platform.webos - (boolean) True if the platform is WebOS
Browser.Platform.other - (boolean) True if the platform is neither Mac, 
Windows, Linux, Android, WebOS nor iOS.
Browser.Platform.name - (string) The name of the platform.

// Plugins
Browser.Plugins.Flash
*/

/*
var cssPath = "<?= $LINK_DIRECTORY_CSS ?>";
if(Browser.Engine.trident){
  browser = 'Internet Explorer';
  css = new Asset.css(cssPath+'bilazea_ie.css');
}
else if(Browser.Engine.gecko){
  browser = 'Firefox';
  css = new Asset.css(cssPath+'bilazea_ff.css');
}
else if(Browser.Engine.webkit){
  browser = 'Safari'; // The same for chrome
  css = new Asset.css(cssPath+'bilazea_safari.css');}
else if(Browser.Engine.presto){
  browser = 'Opera';
  css = new Asset.css(cssPath+'bilazea_opera.css');}
else{
  browser = 'Autres';
  css = new Asset.css(cssPath+'bilazea.css');
}
// Get OS name
if (Browser.Platform.mac){
  os = 'Mac';
}
else if (Browser.Platform.win){os = 'Windows';}
else if (Browser.Platform.linux){os = 'Linux';}
else if (Browser.Platform.ipod){os = 'iPod';}
else if (Browser.Platform.other){os = 'Autres';}
*/

// WHEN DOM IS READY
window.addEvent('domready',function()
{

  /* Get language *************************************************************/
  var lg = MooTools.lang.getCurrentLanguage();
  MooTools.lang.set('FR', 'cascade', ['FR', 'gbENG', 'ESP']);
  MooTools.lang.set('FR', 'Home', 'Accueil');

  /* Images preload **********************************************************/
  var imagesToPreload = [
    './img/externalLink_h.gif',
    './img/arrow_top_h.gif',
    './img/arrow_bot_h.gif',
    './img/panel_h2.gif',
    './img/panel_h.gif',
    './img/settings_h.gif'
  ];
  new Asset.images(imagesToPreload);

  /* Left title link *********************************************************/
  $('titleLink').addEvents({
    'mouseover': function(){
      $('titleLink').fade(0.6);
    },
    'mouseout': function(){
      $('titleLink').fade(1);
    }
  });

  /* Accordion ***************************************************************/
  var myAccordion = new Fx.Accordion($$('h2.cvTitle1'), $$('div.cvPanel'),{
    opacity: false,
    onActive: function(toggler, element){
      var myTog = new Fx.Tween(toggler);
      var myEl = new Fx.Tween(element);
      myTog.set('color', '#FFF');
      myTog.set('background-color', '#4C4C4C');
      myTog.set('background-image', 'url("./img/opened.png")');
      myTog.set('background-position', 'right center');
      myTog.set('background-repeat', 'no-repeat');
    },
    onBackground: function(toggler, element){
      var myTog = new Fx.Tween(toggler);
      var myEl = new Fx.Tween(element);
      myTog.set('color', '#EEE');
      myTog.set('background-color', '#61615F');
      myTog.set('background-image', 'url("./img/closed.png")');
      myTog.set('background-position', 'right center');
      myTog.set('background-repeat', 'no-repeat');
    }
  });

  /* Tips ********************************************************************/
  var toolTips = new Tips('.toolTips',{showDelay:200});
  toolTips.addEvent('show',function(tip){tip.fade('in');});
  toolTips.addEvent('hide',function(tip){tip.fade('out');});

  /* Scroll to the top *******************************************************/
  var winScroller = new Fx.Scroll(window,{duration:500});
  if ($('iconGoToTopR') != null){
    $('iconGoToTopR').addEvent('click', function(e){
      winScroller.toTop();
    });
  }
  if ($('iconGoToTopL') != null){
    $('iconGoToTopL').addEvent('click', function(e){
      winScroller.toTop();
    });
  }

  /* Check active menu ********************************************************/
  function checkActive(){
    var a =$$('a.menu');
    if (window.location.href.substr(location.href.length - 1, 1) == '/'){
      var loc = window.location.href + 'index.php'; 
    }
    else{
      var loc = window.location.href;
    }
    for(var i=0; i < a.length; i++) {
      if (a[i].href == loc) {
        a[i].setAttribute("class", "menu activeMenu");
        //alert(a[i].class);
      }
    }
  }
  checkActive();

  /* External links **********************************************************/
  var extLink =$$('a.external');
  for(var i=0; i < extLink.length; i++){
    extLink[i].addEvent('click', function(e){
      e.stop();
      window.open(this.get('href'));
      return false;
    });
  }

  /* COOKIES STUFF ***********************************************************/
  var cookies = new Hash.Cookie('JPWEB Cookies - For design',{duration: 3600});
  var cookTop = cookies.get('top');
  var cookAside = cookies.get('aside');
  var cookSettings = cookies.get('settings');


  
  if ($('lastMost'))
  {
	var verticalLastmost = new Fx.Slide('lastMost') || null;
    var verticalLastmostHidden = new Fx.Slide('lastMostHidden') || null;
    var verticalLastmostLinkSlideIn = $('lastmostLinkSlideIn') || null;
    var verticalLastmostLinkSlideOut = $('lastmostLinkSlideOut') || null;  
  }

  var verticalFooter = new Fx.Slide('footer') || null;
  var verticalFooterHidden = new Fx.Slide('footerHidden') || null;
  var verticalFooterLinkSlideIn = $('footerLinkSlideIn') || null;
  var verticalFooterLinkSlideOut = $('footerLinkSlideOut') || null;

  var verticalSettings = new Fx.Slide('settings') || null;
  var verticalSettingsHidden = new Fx.Slide('settingsHidden') || null;
  var verticalSettingsLinkSlideIn = $('settingsLinkSlideIn') || null;
  var verticalSettingsLinkSlideOut = $('settingsLinkSlideOut') || null;

  if ($('lastMost'))
  {
    if (cookTop)
    {
      if (cookTop == 'opened')
      {
        verticalLastmost.show();
        verticalLastmostHidden.hide();
      }
      else
      {
        verticalLastmost.hide();
        verticalLastmostHidden.show();
      }
    }
    else
    {
      verticalLastmost.show();
      verticalLastmostHidden.hide();
    }
  }

  if (cookAside){
    if (cookAside == 'opened')
    {
      verticalFooter.show();
      verticalFooterHidden.hide();
    }
    else
    {
      verticalFooter.hide();
      verticalFooterHidden.show();
    }
  }
  else
  {
    verticalFooter.show();
    verticalFooterHidden.hide();
  }

  if (cookSettings){
    if (cookSettings == 'opened')
    {
      verticalSettings.show();
      verticalSettingsHidden.hide();
    }
    else
    {
      verticalSettings.hide();
      verticalSettingsHidden.show();
    }
  }
  else
  {
    verticalSettings.hide();
    verticalSettingsHidden.show();
  }

  /* SLIDES ******************************************************************/
  if ($('lastMost'))
  {
    verticalLastmostLinkSlideIn.addEvent('click', function(e)
    {
      e.stop();
      verticalLastmost.slideIn();
      verticalLastmostHidden.slideOut();
      cookies.set('top', 'opened');
    });
    verticalLastmostLinkSlideOut.addEvent('click', function(e)
    {
      e.stop();
      verticalLastmost.slideOut();
      verticalLastmostHidden.slideIn();
      cookies.set('top', 'closed');
    });
  }
  verticalFooterLinkSlideIn.addEvent('click', function(e)
  {
    e.stop();
    verticalFooter.slideIn();
    verticalFooterHidden.slideOut();
    cookies.set('aside', 'opened');
  });
  verticalFooterLinkSlideOut.addEvent('click', function(e)
  {
    e.stop();
    verticalFooter.slideOut();
    verticalFooterHidden.slideIn();
    cookies.set('aside', 'closed');
  });
  verticalSettingsLinkSlideIn.addEvent('click', function(e)
  {
    e.stop();
    verticalSettings.slideIn();
    verticalSettingsHidden.slideOut();
    cookies.set('settings', 'opened');
  });
  verticalSettingsLinkSlideOut.addEvent('click', function(e)
  {
    e.stop();
    verticalSettings.slideOut();
    verticalSettingsHidden.slideIn();
    cookies.set('settings', 'closed');
  });
});
