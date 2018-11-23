<article class="markdown-body entry-content" itemprop="text"><h1><a id="user-content-1did-介绍" class="anchor" aria-hidden="true" href="#1did-介绍"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.DID 介绍</h1>
<ul>
<li>
<p>DID是区块链世界的身份标识，类似于现实世界的身份证</p>
</li>
<li>
<p>Elastos DID在Wallet统一集成</p>
</li>
</ul>
<h2><a id="user-content-2调用-did-登录说明" class="anchor" aria-hidden="true" href="#2调用-did-登录说明"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.调用 DID 登录说明</h2>
<h3><a id="user-content-21下载和安装-appmanager-插件" class="anchor" aria-hidden="true" href="#21下载和安装-appmanager-插件"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.1.下载和安装 appmanager 插件</h3>
<p>插件目录：</p>
<p><a href="https://github.com/elastos/Elastos.ORG.Wallet.Mobile/tree/ds/appmanager">https://github.com/elastos/Elastos.ORG.Wallet.Mobile/tree/ds/appmanager</a></p>
<p>安装指令:</p>
<pre><code>ionic cordova plugin add D:\project\Elastos.ORG.Wallet.Mobile\appmanager
</code></pre>
<h3><a id="user-content-22在需要使用-did-登录的-page-里面加入如下的代码" class="anchor" aria-hidden="true" href="#22在需要使用-did-登录的-page-里面加入如下的代码"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.2.在需要使用 DID 登录的 Page 里面加入如下的代码</h3>
<pre><code>declare let cordova: any;
cordova.plugins.appmanager.StartApp("wallet/www/index.html" +
"?type=did_login&amp;message=this is did login message&amp;backurl=game/www/index.html",
function (data) {},
function (error) {});
</code></pre>
<p><a target="_blank" rel="noopener noreferrer" href="/elastos/Elastos.Developer.Doc/blob/master/images/DApp_DID_1.png"><img src="/elastos/Elastos.Developer.Doc/raw/master/images/DApp_DID_1.png" alt="DApp_DID_1" style="max-width:100%;"></a></p>
<h2><a id="user-content-3调用参数说明" class="anchor" aria-hidden="true" href="#3调用参数说明"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3.调用参数说明</h2>
<pre><code>cordova.plugins.appmanager.StartApp("wallet/www/index.html" +
"?type=did_login&amp;message=this is did login message&amp;backurl=game/www/index.html",
function (data) {},
function (error) {});
</code></pre>
<ul>
<li>“wallet/www/index.html”：目标的Dapp根路径，目前钱包的路径是wallet/www/index.html</li>
<li>type: 登录类型，目前DID登录值为did_login</li>
<li>message: 用于加密校验的消息</li>
<li>backurl: 获取到did后返回的DApp的根路径</li>
</ul>
<h2><a id="user-content-4返回参数说明" class="anchor" aria-hidden="true" href="#4返回参数说明"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>4.返回参数说明</h2>
<p><a target="_blank" rel="noopener noreferrer" href="/elastos/Elastos.Developer.Doc/blob/master/images/DApp_DID_2.png"><img src="/elastos/Elastos.Developer.Doc/raw/master/images/DApp_DID_2.png" alt="�DApp_DID_2" style="max-width:100%;"></a></p>
<ul>
<li>
<p>didNum: DID数字，32位的一个字符串</p>
</li>
<li>
<p>sign: 对message签名后的结果</p>
</li>
<li>
<p>didPubkey: 用户的公钥</p>
</li>
<li>
<p>Message: Sign的输入参数</p>
</li>
<li>
<p>Check_DID函数我们会直接输出,在应用的index.html 包括下面一行代码即可</p>
<pre><code>&lt;script src="assets/checkDID.js"&gt;&lt;/script&gt;
</code></pre>
</li>
<li>
<p>checkDID.js的文件也在
<a href="https://github.com/elastos/Elastos.ORG.Wallet.Mobile/tree/ds/build">https://github.com/elastos/Elastos.ORG.Wallet.Mobile/tree/ds/build</a></p>
</li>
</ul>
<h2><a id="user-content-5运行在-trinity-内的效果" class="anchor" aria-hidden="true" href="#5运行在-trinity-内的效果"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>5.运行在 Trinity 内的效果</h2>
<p><a target="_blank" rel="noopener noreferrer" href="/elastos/Elastos.Developer.Doc/blob/master/images/DApp_1.png"><img src="/elastos/Elastos.Developer.Doc/raw/master/images/DApp_1.png" alt="DApp_1" style="max-width:100%;"></a>
<a target="_blank" rel="noopener noreferrer" href="/elastos/Elastos.Developer.Doc/blob/master/images/DApp_2.png"><img src="/elastos/Elastos.Developer.Doc/raw/master/images/DApp_2.png" alt="DApp_2" style="max-width:100%;"></a>
<a target="_blank" rel="noopener noreferrer" href="/elastos/Elastos.Developer.Doc/blob/master/images/DApp_DID_3.png"><img src="/elastos/Elastos.Developer.Doc/raw/master/images/DApp_DID_3.png" alt="DApp_DID_3" style="max-width:100%;"></a></p>
</article>