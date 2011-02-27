<!-- DIV Module title -->
<div class="moduleCodeTitle">
  <p class="moduleCodeTitleTxt"><?php printLgFileText("CODE"); ?></p>
  <div id="copyCode">
    <a id="copy" class="copy_code" href="javascript:;"><?php printLgFileText("COPY"); ?></a>
  </div>
  <input type="button" id="copyCodeInput" value="<?php printLgFileText("COPY_CLIPBOARD"); ?>" name="copy" id="copy">
</div>

<!-- DIV module -->
<div class="moduleCode">


<?php if (getLanguage() == LG_FR) { ?>
<!-- French content ////////////////////////////////////////////////////////-->
<pre id="code_content">
<span class="cod_php">&lt;?php</span>
<span class="cod_comment">///////////////////////////////////////////////////////////////////////////////
/**
 * File:
 * index.php
 * 
 * Description:
 * This file contains code
 * - to set language used in Bilazea template
 * - to define and initialize variables used in Bilazea template
 * 
 * Date:
 * 2010/10/10
 * R1: 2011/01/10
 * R2: 2011/02/27
 * 
 * @author Bilazea.com - Jean Perriault &lt;admin@bilazea.com&gt;
 * @copyright Copyright (c) 2000-2011, Bilazea.com Agence web
 */
///////////////////////////////////////////////////////////////////////////////


  // MAINTENANCE //////////////////////////////////////////////////////////////</span>
  <span class="cod_var_php">$maintenance</span> = <span class="cod_kw_php">false</span>;

  <span class="cod_comment">// INIT SET & SESSION ///////////////////////////////////////////////////////</span>
  <span class="cod_var_php">$init</span> = ini_set(<span class="cod_str_php">'session.use_trans_sid'</span>,<span class="cod_str_php">'0'</span>);
  <span class="cod_kw">session_start()</span>;
  <span class="cod_kw">header</span>(<span class="cod_str_php">'Content-Type: text/html; Charset=UTF-8'</span>);

  <span class="cod_comment">// INCLUDE UTILS FUNCTIONS</span>
  <span class="cod_kw">include</span>(<span class="cod_str_php">'./inc/utils.php'</span>);

  <span class="cod_comment">// LANGUAGES</span>
  <span class="cod_fct_php">setLanguage</span>();

  <span class="cod_comment">// DEFINE STUFF /////////////////////////////////////////////////////////////</span>
  <span class="cod_kw">define</span>(<span class="cod_cst_php">ST_EMPTY</span>,<span class="cod_str_php">""</span>);

  <span class="cod_comment">// DOCTYPE</span>
  <span class="cod_kw">define</span>(<span class="cod_cst_php">PROLOG_XML</span>, <span class="cod_str_php">'&lt;?xml version="1.0"?&gt;'</span>);
  <span class="cod_comment">//define(PROLOG_DOCTYPE5,  '&lt;!DOCTYPE html&gt;');</span>
  <span class="cod_kw">define</span>(<span class="cod_cst_php">PROLOG_DOCTYPE</span>, <span class="cod_str_php">'&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 '</span>
                             .<span class="cod_str_php">'Strict//EN"' "http://www.w3.org/TR/xhtml1/DTD '</span>
                             .<span class="cod_str_php">'/xhtml1-strict.dtd"&gt;'</span>);
  <span class="cod_kw">define</span>(<span class="cod_cst_php">PROLOG_DOCTYPE_IE6</span>, <span class="cod_str_php">'&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 '</span>
                             .<span class="cod_str_php">'Transitional//EN"' "http://www.w3.org/TR/ '</span>
                             .<span class="cod_str_php">'xhtml1/DTD/xhtml1-transitional.dtd"&gt;'</span>);

  <span class="cod_comment">// INCLUDE LINKS</span>
  <span class="cod_kw">include</span>(<span class="cod_str_php">'./inc/links.php'</span>);

  <span class="cod_comment">// META</span>
  <span class="cod_kw">define</span>(<span class="cod_cst_php">META_CONTENT</span>,       <span class="cod_str_php">'&lt;meta http-equiv="Content-Type" '</span>
                             .<span class="cod_str_php">'content="text/html; charset=utf-8;" /&gt;'</span>);
  <span class="cod_kw">define</span>(<span class="cod_cst_php">META_CONTENT_ROBOT</span>, <span class="cod_str_php">'&lt;meta content="index, follow" name="robots" /&gt;'</span>);
  <span class="cod_kw">include</span>(<span class="cod_cst_php">LINK_META</span>);
  <span class="cod_kw">define</span>(<span class="cod_cst_php">META_LINK_RSS</span>,      <span class="cod_str_php">'&lt;link title="RSS 2.0" '</span>
                             .<span class="cod_str_php">'type="application/rss+xml" '</span>
                             .<span class="cod_str_php">'rel="alternate" href="index.php?'</span>
                             .<span class="cod_fct_php">getLgFileText</span>(<span class="cod_str2_php">"CONTENT"</span>).<span class="cod_str_php">'=rss" /&gt;'</span>);
  <span class="cod_kw">define</span>(<span class="cod_cst_php">META_LINK_ATOM</span>,     <span class="cod_str_php">'&lt;link title="Atom 1.0" '</span>
                             .<span class="cod_str_php">'type="application/atom+xml" '</span>
                             .<span class="cod_str_php">'rel="alternate" href="/index.php?'</span>
                             .<span class="cod_fct_php">getLgFileText</span>(<span class="cod_str2_php">"CONTENT"</span>).<span class="cod_str_php">'=atom" /&gt;'</span>);

  <span class="cod_comment">/////////////////////////////////////////////////////////////////////////////
  // LAUNCH SITE</span>
  <span class="cod_kw">include</span>(<span class="cod_cst_php">LINK_TPL_SITE</span>);

<span class="cod_php">?&gt;</span>
</pre>
</div>



<?php } else if (getLanguage() == LG_EN) { ?>
<!-- English content ///////////////////////////////////////////////////////-->
<pre id="code_content">
<span class="cod_php">&lt;?php</span>
<span class="cod_comment">///////////////////////////////////////////////////////////////////////////////
/**
 * File:
 * index.php
 * 
 * Description:
 * This file contains code
 * - to set language used in Bilazea template
 * - to define and initialize variables used in Bilazea template
 * 
 * Date:
 * 2010/10/10
 * 
 * @author Bilazea.com - Jean Perriault <admin@bilazea.com>
 * @copyright Copyright (c) 2000-2011, Bilazea.com Agence web
 */
///////////////////////////////////////////////////////////////////////////////


  // MAINTENANCE //////////////////////////////////////////////////////////////</span>
  <span class="cod_var_php">$maintenance</span> = <span class="cod_kw_php">false</span>;

  <span class="cod_comment">// INIT SET & SESSION ///////////////////////////////////////////////////////</span>
  <span class="cod_var_php">$init</span> = ini_set(<span class="cod_str_php">'session.use_trans_sid'</span>,<span class="cod_str_php">'0'</span>);
  <span class="cod_kw">session_start()</span>;
  <span class="cod_kw">header</span>(<span class="cod_str_php">'Content-Type: text/html; Charset=UTF-8'</span>);

  <span class="cod_comment">// INCLUDE UTILS FUNCTIONS</span>
  <span class="cod_kw">include</span>(<span class="cod_str_php">'./inc/utils.php'</span>);

  <span class="cod_comment">// LANGUAGES</span>
  <span class="cod_fct_php">setLanguage</span>();

  <span class="cod_comment">// DEFINE STUFF /////////////////////////////////////////////////////////////</span>
  <span class="cod_kw">define</span>(<span class="cod_cst_php">ST_EMPTY</span>,<span class="cod_str_php">""</span>);

  <span class="cod_comment">// DOCTYPE</span>
  <span class="cod_kw">define</span>(<span class="cod_cst_php">PROLOG_XML</span>, <span class="cod_str_php">'&lt;?xml version="1.0"?&gt;'</span>);
  <span class="cod_comment">//define(PROLOG_DOCTYPE5,  '&lt;!DOCTYPE html&gt;');</span>
  <span class="cod_kw">define</span>(<span class="cod_cst_php">PROLOG_DOCTYPE</span>, <span class="cod_str_php">'&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 '</span>
                             .<span class="cod_str_php">'Strict//EN"' "http://www.w3.org/TR/xhtml1/DTD '</span>
                             .<span class="cod_str_php">'/xhtml1-strict.dtd"&gt;'</span>);
  <span class="cod_kw">define</span>(<span class="cod_cst_php">PROLOG_DOCTYPE_IE6</span>, <span class="cod_str_php">'&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 '</span>
                             .<span class="cod_str_php">'Transitional//EN"' "http://www.w3.org/TR/ '</span>
                             .<span class="cod_str_php">'xhtml1/DTD/xhtml1-transitional.dtd"&gt;'</span>);

  <span class="cod_comment">// INCLUDE LINKS</span>
  <span class="cod_kw">include</span>(<span class="cod_str_php">'./inc/links.php'</span>);

  <span class="cod_comment">// META</span>
  <span class="cod_kw">define</span>(<span class="cod_cst_php">META_CONTENT</span>,       <span class="cod_str_php">'&lt;meta http-equiv="Content-Type" '</span>
                             .<span class="cod_str_php">'content="text/html; charset=utf-8;" /&gt;'</span>);
  <span class="cod_kw">define</span>(<span class="cod_cst_php">META_CONTENT_ROBOT</span>, <span class="cod_str_php">'&lt;meta content="index, follow" name="robots" /&gt;'</span>);
  <span class="cod_kw">include</span>(<span class="cod_cst_php">LINK_META</span>);
  <span class="cod_kw">define</span>(<span class="cod_cst_php">META_LINK_RSS</span>,      <span class="cod_str_php">'&lt;link title="RSS 2.0" '</span>
                             .<span class="cod_str_php">'type="application/rss+xml" '</span>
                             .<span class="cod_str_php">'rel="alternate" href="index.php?'</span>
                             .<span class="cod_fct_php">getLgFileText</span>(<span class="cod_str2_php">"CONTENT"</span>).<span class="cod_str_php">'=rss" /&gt;'</span>);
  <span class="cod_kw">define</span>(<span class="cod_cst_php">META_LINK_ATOM</span>,     <span class="cod_str_php">'&lt;link title="Atom 1.0" '</span>
                             .<span class="cod_str_php">'type="application/atom+xml" '</span>
                             .<span class="cod_str_php">'rel="alternate" href="/index.php?'</span>
                             .<span class="cod_fct_php">getLgFileText</span>(<span class="cod_str2_php">"CONTENT"</span>).<span class="cod_str_php">'=atom" /&gt;'</span>);

  <span class="cod_comment">/////////////////////////////////////////////////////////////////////////////
  // LAUNCH SITE</span>
  <span class="cod_kw">include</span>(<span class="cod_cst_php">LINK_TPL_SITE</span>);

<span class="cod_php">?&gt;</span>
</pre>
</div>


<?php } else if (getLanguage() == LG_ES) { ?>
<!-- Spanich content ///////////////////////////////////////////////////////-->
<pre id="code_content">
<span class="cod_php">&lt;?php</span>
<span class="cod_comment">///////////////////////////////////////////////////////////////////////////////
/**
 * File:
 * index.php
 * 
 * Description:
 * This file contains code
 * - to set language used in Bilazea template
 * - to define and initialize variables used in Bilazea template
 * 
 * Date:
 * 2010/10/10
 * 
 * @author Bilazea.com - Jean Perriault <admin@bilazea.com>
 * @copyright Copyright (c) 2000-2011, Bilazea.com Agence web
 */
///////////////////////////////////////////////////////////////////////////////


  // MAINTENANCE //////////////////////////////////////////////////////////////</span>
  <span class="cod_var_php">$maintenance</span> = <span class="cod_kw_php">false</span>;

  <span class="cod_comment">// INIT SET & SESSION ///////////////////////////////////////////////////////</span>
  <span class="cod_var_php">$init</span> = ini_set(<span class="cod_str_php">'session.use_trans_sid'</span>,<span class="cod_str_php">'0'</span>);
  <span class="cod_kw">session_start()</span>;
  <span class="cod_kw">header</span>(<span class="cod_str_php">'Content-Type: text/html; Charset=UTF-8'</span>);

  <span class="cod_comment">// INCLUDE UTILS FUNCTIONS</span>
  <span class="cod_kw">include</span>(<span class="cod_str_php">'./inc/utils.php'</span>);

  <span class="cod_comment">// LANGUAGES</span>
  <span class="cod_fct_php">setLanguage</span>();

  <span class="cod_comment">// DEFINE STUFF /////////////////////////////////////////////////////////////</span>
  <span class="cod_kw">define</span>(<span class="cod_cst_php">ST_EMPTY</span>,<span class="cod_str_php">""</span>);

  <span class="cod_comment">// DOCTYPE</span>
  <span class="cod_kw">define</span>(<span class="cod_cst_php">PROLOG_XML</span>, <span class="cod_str_php">'&lt;?xml version="1.0"?&gt;'</span>);
  <span class="cod_comment">//define(PROLOG_DOCTYPE5,  '&lt;!DOCTYPE html&gt;');</span>
  <span class="cod_kw">define</span>(<span class="cod_cst_php">PROLOG_DOCTYPE</span>, <span class="cod_str_php">'&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 '</span>
                             .<span class="cod_str_php">'Strict//EN"' "http://www.w3.org/TR/xhtml1/DTD '</span>
                             .<span class="cod_str_php">'/xhtml1-strict.dtd"&gt;'</span>);
  <span class="cod_kw">define</span>(<span class="cod_cst_php">PROLOG_DOCTYPE_IE6</span>, <span class="cod_str_php">'&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 '</span>
                             .<span class="cod_str_php">'Transitional//EN"' "http://www.w3.org/TR/ '</span>
                             .<span class="cod_str_php">'xhtml1/DTD/xhtml1-transitional.dtd"&gt;'</span>);

  <span class="cod_comment">// INCLUDE LINKS</span>
  <span class="cod_kw">include</span>(<span class="cod_str_php">'./inc/links.php'</span>);

  <span class="cod_comment">// META</span>
  <span class="cod_kw">define</span>(<span class="cod_cst_php">META_CONTENT</span>,       <span class="cod_str_php">'&lt;meta http-equiv="Content-Type" '</span>
                             .<span class="cod_str_php">'content="text/html; charset=utf-8;" /&gt;'</span>);
  <span class="cod_kw">define</span>(<span class="cod_cst_php">META_CONTENT_ROBOT</span>, <span class="cod_str_php">'&lt;meta content="index, follow" name="robots" /&gt;'</span>);
  <span class="cod_kw">include</span>(<span class="cod_cst_php">LINK_META</span>);
  <span class="cod_kw">define</span>(<span class="cod_cst_php">META_LINK_RSS</span>,      <span class="cod_str_php">'&lt;link title="RSS 2.0" '</span>
                             .<span class="cod_str_php">'type="application/rss+xml" '</span>
                             .<span class="cod_str_php">'rel="alternate" href="index.php?'</span>
                             .<span class="cod_fct_php">getLgFileText</span>(<span class="cod_str2_php">"CONTENT"</span>).<span class="cod_str_php">'=rss" /&gt;'</span>);
  <span class="cod_kw">define</span>(<span class="cod_cst_php">META_LINK_ATOM</span>,     <span class="cod_str_php">'&lt;link title="Atom 1.0" '</span>
                             .<span class="cod_str_php">'type="application/atom+xml" '</span>
                             .<span class="cod_str_php">'rel="alternate" href="/index.php?'</span>
                             .<span class="cod_fct_php">getLgFileText</span>(<span class="cod_str2_php">"CONTENT"</span>).<span class="cod_str_php">'=atom" /&gt;'</span>);

  <span class="cod_comment">/////////////////////////////////////////////////////////////////////////////
  // LAUNCH SITE</span>
  <span class="cod_kw">include</span>(<span class="cod_cst_php">LINK_TPL_SITE</span>);

<span class="cod_php">?&gt;</span>
</pre>
</div>


<?php } ?>
</div>
