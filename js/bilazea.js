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
 * 10/10/2010
 * M1. 23/01/2011
 * 
 * @author Bilazea.com - Jean Perriault <admin@bilazea.com>
 * @copyright Copyright (c) 2000-2011, Bilazea.com Agence web
 */
///////////////////////////////////////////////////////////////////////////////


// INITIALIZATION ////////////////////////////////////////////////////////////

// Get browser name and set corresponding css file
var cssPath = "./css/adapt/"
var css = "", os = "", flash="";
if(Browser.ie6)
{
  css = new Asset.css(cssPath+'bilazea_ie6.css');
}
else if(Browser.ie)
{
  css = new Asset.css(cssPath+'bilazea_ie.css');
}
else if(Browser.firefox)
{
  css = new Asset.css(cssPath+'bilazea_ff.css');
}
else if(Browser.safari)
{
  css = new Asset.css(cssPath+'bilazea_sa.css');
}
else if(Browser.chrome)
{
  css = new Asset.css(cssPath+'bilazea_ch.css');
}
else if(Browser.opera)
{
  css = new Asset.css(cssPath+'bilazea_op.css');
}

// Platform
if(Browser.Platform.mac)
{
  css = new Asset.css(cssPath+'bilazea_mac.css');
}
if(Browser.Platform.win)
{
  css = new Asset.css(cssPath+'bilazea_win.css');
}
if(Browser.Platform.linux){
  css = new Asset.css(cssPath+'bilazea_lin.css');
}

if(Browser.Platform.ios)
{
  css = new Asset.css(cssPath+'bilazea_ios.css');
}
if(Browser.Platform.android)
{
  css = new Asset.css(cssPath+'bilazea_android.css');
}
if(Browser.Platform.webos)
{
  css = new Asset.css(cssPath+'bilazea_webos.css');
}
if(Browser.Platform.other)
{
  os = Browser.Platform.name;
  css = new Asset.css(cssPath+'bilazea_others.css');
}

// Flash
if(Browser.Plugins.Flash)
{
  flash = true;
}


// WHEN DOM IS READY //////////////////////////////////////////////////////////
window.addEvent('domready',function()
{

  /* Images preload **********************************************************/
  var imagesToPreload = [
    './img/externalLink_h.gif',
    './img/arrow_top_h.gif',
    './img/panel_h2.gif',
    './img/panel_h.gif',
    './img/settings_h.gif'
  ];
  new Asset.images(imagesToPreload);



  /* Left title link *********************************************************/
  if($('titleLink'))
  {
    $('titleLink').addEvents({
      'mouseover': function()
      {
        $('titleLink').fade(0.6);
      },
      'mouseout': function()
      {
        $('titleLink').fade(1);
      }
    });
  }



  /* Accordion ***************************************************************/
  if ($$('h2.accordionTitle1'))
  {
    var myAccordion = new Fx.Accordion($$('h2.accordionTitle1'),$$('div.accordionPanel1'),
    {
      opacity : false,
      onActive : function(toggler, element)
      {
        var myTog = new Fx.Tween(toggler);
        var myEl = new Fx.Tween(element);
        myTog.set('color', '#FFF');
        myTog.set('background-color','#222222');
        myTog.set('background-image','url("./img/opened.png")');
        myTog.set('background-position','right center');
        myTog.set('background-repeat','no-repeat');
      },
      onBackground : function(toggler, element)
      {
        var myTog = new Fx.Tween(toggler);
        var myEl = new Fx.Tween(element);
        myTog.set('color', '#EEE');
        myTog.set('background-color', '#61615F');
        myTog.set('background-image', 'url("./img/closed.png")');
        myTog.set('background-position', 'right center');
        myTog.set('background-repeat', 'no-repeat');
      }
    });
  }

  if($$('h4.accordionTitle1_1'))
  {
    var myAccordionPart = new Fx.Accordion($$('h4.accordionTitle1_1'), $$('div.accordionPanel1_1'),
    {
      opacity: false,
      onActive: function(toggler, element)
      {
        var myTog = new Fx.Tween(toggler);
        var myEl = new Fx.Tween(element);
        myTog.set('color', '#FFF');
        myTog.set('background-color', '#333333');
        myTog.set('background-image', 'url("./img/opened.png")');
        myTog.set('background-position', 'right center');
        myTog.set('background-repeat', 'no-repeat');
      },
      onBackground: function(toggler, element)
      {
        var myTog = new Fx.Tween(toggler);
        var myEl = new Fx.Tween(element);
        myTog.set('color', '#EEE');
        myTog.set('background-color', '#61615F');
        myTog.set('background-image', 'url("./img/closed.png")');
        myTog.set('background-position', 'right center');
        myTog.set('background-repeat', 'no-repeat');
      }
    });
  }

  /* Blog ********************************************************************/
  if ($$('div.blog_head'))
  {
    var myAccordionBlog = new Fx.Accordion($$('div.blog_head'),$$('div.blog_content'),
    {
      opacity : false,
      onActive : function(toggler, element)
      {
        var myTog = new Fx.Tween(toggler);
        var myEl = new Fx.Tween(element);
        myTog.set('color', '#FFF');
        myTog.set('background-color','#222222');
      },
      onBackground : function(toggler, element)
      {
        var myTog = new Fx.Tween(toggler);
        var myEl = new Fx.Tween(element);
        myTog.set('color', '#EEE');
        myTog.set('background-color', '#61615F');
      }
    });
  }


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
  var cookies = new Hash.Cookie('Bilazea.com Cookies - For design',{duration: 3600});
  var cookTop = cookies.get('top');
  var cookAside = cookies.get('aside');
  var cookSettings = cookies.get('settings');

  // Last most
  if ($('lastMost'))
  {
	var verticalLastmost = new Fx.Slide('lastMost') || null;
    var verticalLastmostHidden = new Fx.Slide('lastMostHidden') || null;
    var verticalLastmostLinkSlideIn = $('lastmostLinkSlideIn') || null;
    var verticalLastmostLinkSlideOut = $('lastmostLinkSlideOut') || null;

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
    // Last most slide
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

  // Footer
  if ($('footer'))
  {
    var verticalFooter = new Fx.Slide('footer') || null;
    var verticalFooterHidden = new Fx.Slide('footerHidden') || null;
    var verticalFooterLinkSlideIn = $('footerLinkSlideIn') || null;
    var verticalFooterLinkSlideOut = $('footerLinkSlideOut') || null;
    if (cookAside)
    {
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
      verticalFooter.hide();
      verticalFooterHidden.show();
    }
    // Footer slides
    verticalFooterLinkSlideIn.addEvent('click', function(e)
    {
      e.stop();
      verticalFooter.slideIn();
      verticalFooterHidden.slideOut().chain(function ()
      {
        var winScroller = new Fx.Scroll(window);
        winScroller.toBottom();
      });
      cookies.set('aside', 'opened');
    });
    verticalFooterLinkSlideOut.addEvent('click', function(e)
    {
      e.stop();
      verticalFooter.slideOut();
      verticalFooterHidden.slideIn();
      cookies.set('aside', 'closed');
    });
  }


  // Settings
  if ($('settings'))
  {
    var verticalSettings = new Fx.Slide('settings') || null;
    var verticalSettingsHidden = new Fx.Slide('settingsHidden') || null;
    var verticalSettingsLinkSlideIn = $('settingsLinkSlideIn') || null;
    var verticalSettingsLinkSlideOut = $('settingsLinkSlideOut') || null;
    if (cookSettings)
    {
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
    // Settings slide
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
  }

});
