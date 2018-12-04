<article class="markdown-body entry-content" itemprop="text"><h1><a id="user-content-1-introduction-to-elastos-wallet" class="anchor" aria-hidden="true" href="#1-introduction-to-elastos-wallet"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1. Introduction to Elastos Wallet</h1>
<ul>
<li>Elastos Wallet provides token transfer services.</li>
</ul>
<h2><a id="user-content-2-how-to-configure-wallet-for-payment" class="anchor" aria-hidden="true" href="#2-how-to-configure-wallet-for-payment"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2. How to configure Wallet for payment</h2>
<h3><a id="user-content-21-download-and-install-appmanager-plugin" class="anchor" aria-hidden="true" href="#21-download-and-install-appmanager-plugin"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.1. Download and Install appmanager plugin</h3>
<p>Plugin Directory：</p>
<p><a href="https://github.com/elastos/Elastos.ORG.Wallet.Mobile/tree/ds/appmanager">https://github.com/elastos/Elastos.ORG.Wallet.Mobile/tree/ds/appmanager</a></p>
<p>Installation instructions:</p>
<pre><code>ionic cordova plugin add D:\project\Elastos.ORG.Wallet.Mobile\appmanager
</code></pre>
<h3><a id="user-content-22-add-the-following-code-snippet-to-the-page-that-make-payment" class="anchor" aria-hidden="true" href="#22-add-the-following-code-snippet-to-the-page-that-make-payment"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.2. Add the following code snippet to the page that make payment</h3>
<pre><code>declare let cordova: any;
cordova.plugins.appmanager.StartApp("wallet/www/index.html" +
"?type=payment&amp;message=pay message&amp;account=10000&amp;address=EeDUy6TmGSFfVxXVzMpVkxLhqwCqujE1WL
&amp;memo=memo&amp;&amp;information=sss&amp;backurl=game/www/index.html",
function (data) {},
function (error) {});
</code></pre>
<p><a target="_blank" rel="noopener noreferrer" href="/elastos/Elastos.Developer.Doc/blob/master/EN/images/DApp_DID_1.png"><img src="/elastos/Elastos.Developer.Doc/raw/master/EN/images/DApp_DID_1.png" alt="DApp_DID_1" style="max-width:100%;"></a></p>
<h2><a id="user-content-3-explanation-of-configuring-the-parameters" class="anchor" aria-hidden="true" href="#3-explanation-of-configuring-the-parameters"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3. Explanation of Configuring the parameters</h2>
<pre><code>cordova.plugins.appmanager.StartApp("wallet/www/index.html" +
"? type=payment&amp;message=pay message&amp;amount=10000&amp;address=EeDUy6TmGSFfVxXVzMpVkxLhqwCqujE1WL
&amp;memo=memo&amp;&amp;information=sss&amp;backurl=game/www/index.html ",
function (data) {},
function (error) {});
</code></pre>
<ul>
<li>“wallet/www/index.html”: Root path of target DApp, the current path of wallet is wallet/www/index.html</li>
<li>type: logon type, payment is the type for using current wallet</li>
<li>amount: the amount to pay, this value is the actual paymnet divided by 100000000</li>
<li>address: receiver address</li>
<li>memo and information: payment transaction remarks, memo will be written to Blockchain</li>
<li>backurl: the returned root path of the DApp after payment transaction</li>
</ul>
<h2><a id="user-content-4-explanation-of-returned-parameters" class="anchor" aria-hidden="true" href="#4-explanation-of-returned-parameters"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>4. Explanation of Returned Parameters</h2>
<p><a target="_blank" rel="noopener noreferrer" href="/elastos/Elastos.Developer.Doc/blob/master/EN/images/DApp_Wallet_1.png"><img src="/elastos/Elastos.Developer.Doc/raw/master/EN/images/DApp_Wallet_1.png" alt="�DApp_Wallet_1" style="max-width:100%;"></a></p>
<ul>
<li>txId:  transaction ID,  32 bytes string</li>
</ul>
<h2><a id="user-content-5-the-effects-of-ruuning-in-trinity" class="anchor" aria-hidden="true" href="#5-the-effects-of-ruuning-in-trinity"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>5. The Effects of Ruuning in Trinity</h2>
<p><a target="_blank" rel="noopener noreferrer" href="/elastos/Elastos.Developer.Doc/blob/master/EN/images/DApp_1.png"><img src="/elastos/Elastos.Developer.Doc/raw/master/EN/images/DApp_1.png" alt="DApp_1" style="max-width:100%;"></a>
<a target="_blank" rel="noopener noreferrer" href="/elastos/Elastos.Developer.Doc/blob/master/EN/images/DApp_2.png"><img src="/elastos/Elastos.Developer.Doc/raw/master/EN/images/DApp_2.png" alt="DApp_2" style="max-width:100%;"></a>
<a target="_blank" rel="noopener noreferrer" href="/elastos/Elastos.Developer.Doc/blob/master/EN/images/DApp_Wallet_2.png"><img src="/elastos/Elastos.Developer.Doc/raw/master/EN/images/DApp_Wallet_2.png" alt="DApp_Wallet_2" style="max-width:100%;"></a></p>
</article>