<article class="markdown-body entry-content" itemprop="text"><h1><a id="user-content-1introduction-to-did" class="anchor" aria-hidden="true" href="#1introduction-to-did"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.Introduction to DID</h1>
<ul>
<li>DID is the identity of Blockchain similar to ID card of the real world</li>
<li>Elastos DID centrally control the wallets</li>
</ul>
<h2><a id="user-content-2-explanation-of-configuring-the-did-logon" class="anchor" aria-hidden="true" href="#2-explanation-of-configuring-the-did-logon"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2. Explanation of Configuring the DID logon</h2>
<h3><a id="user-content-21-download-and-install-the-appmanager-plugin" class="anchor" aria-hidden="true" href="#21-download-and-install-the-appmanager-plugin"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.1. Download and install the appmanager plugin</h3>
<p>Plugin source path：</p>
<p><a href="https://github.com/elastos/Elastos.ORG.Wallet.Mobile/tree/ds/appmanager">https://github.com/elastos/Elastos.ORG.Wallet.Mobile/tree/ds/appmanager</a></p>
<p>Installation instructions:</p>
<pre><code>ionic cordova plugin add D:\project\Elastos.ORG.Wallet.Mobile\appmanager
</code></pre>
<h3><a id="user-content-22-add-the-following-code-snippet-to-the-page-for-did-logon" class="anchor" aria-hidden="true" href="#22-add-the-following-code-snippet-to-the-page-for-did-logon"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.2. Add the following code snippet to the page for DID logon</h3>
<pre><code>declare let cordova: any;
cordova.plugins.appmanager.StartApp("wallet/www/index.html" +
"?type=did_login&amp;message=this is did login message&amp;backurl=game/www/index.html",
function (data) {},
function (error) {});
</code></pre>
<p><a target="_blank" rel="noopener noreferrer" href="/elastos/Elastos.Developer.Doc/blob/master/CN/images/DApp_DID_1.png"><img src="/elastos/Elastos.Developer.Doc/raw/master/CN/images/DApp_DID_1.png" alt="DApp_DID_1" style="max-width:100%;"></a></p>
<h2><a id="user-content-3-explanation-of-input-parameters" class="anchor" aria-hidden="true" href="#3-explanation-of-input-parameters"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3. Explanation of Input parameters</h2>
<pre><code>cordova.plugins.appmanager.StartApp("wallet/www/index.html" +
"?type=did_login&amp;message=this is did login message&amp;backurl=game/www/index.html",
function (data) {},
function (error) {});
</code></pre>
<ul>
<li>“wallet/www/index.html”：Root path of target DApp, the current path of wallet is wallet/www/index.html</li>
<li>type: logon type, did_login is the current DID value</li>
<li>message: use for encrypted verification</li>
<li>backurl: the returned root path of the DApp after otaining the DID value</li>
</ul>
<h2><a id="user-content-4-explanation-of-returned-parameters" class="anchor" aria-hidden="true" href="#4-explanation-of-returned-parameters"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>4. Explanation of Returned Parameters</h2>
<p><a target="_blank" rel="noopener noreferrer" href="/elastos/Elastos.Developer.Doc/blob/master/CN/images/DApp_DID_2.png"><img src="/elastos/Elastos.Developer.Doc/raw/master/CN/images/DApp_DID_2.png" alt="DApp_DID_2" style="max-width:100%;"></a></p>
<ul>
<li>
<p>didNum: the number of DID，32 bytes string</p>
</li>
<li>
<p>sign: teh signed message</p>
</li>
<li>
<p>didPubkey: user's public key</p>
</li>
<li>
<p>Message: input parameter for signing</p>
</li>
<li>
<p>The authorization will be checked by function Check_DID, just put the following line in index.html</p>
<pre><code>&lt;script src="assets/checkDID.js"&gt;&lt;/script&gt;
</code></pre>
</li>
<li>
<p>the checkDID.js file is in the following url
<a href="https://github.com/elastos/Elastos.ORG.Wallet.Mobile/tree/ds/build">https://github.com/elastos/Elastos.ORG.Wallet.Mobile/tree/ds/build</a></p>
</li>
</ul>
<h2><a id="user-content-5effect-of-running-in-trinity" class="anchor" aria-hidden="true" href="#5effect-of-running-in-trinity"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>5.Effect of Running in Trinity</h2>
<p><a target="_blank" rel="noopener noreferrer" href="/elastos/Elastos.Developer.Doc/blob/master/CN/images/DApp_1.png"><img src="/elastos/Elastos.Developer.Doc/raw/master/CN/images/DApp_1.png" alt="DApp_1" style="max-width:100%;"></a>
<a target="_blank" rel="noopener noreferrer" href="/elastos/Elastos.Developer.Doc/blob/master/CN/images/DApp_2.png"><img src="/elastos/Elastos.Developer.Doc/raw/master/CN/images/DApp_2.png" alt="DApp_2" style="max-width:100%;"></a>
<a target="_blank" rel="noopener noreferrer" href="/elastos/Elastos.Developer.Doc/blob/master/CN/images/DApp_DID_3.png"><img src="/elastos/Elastos.Developer.Doc/raw/master/CN/images/DApp_DID_3.png" alt="DApp_DID_3" style="max-width:100%;"></a></p>
</article>