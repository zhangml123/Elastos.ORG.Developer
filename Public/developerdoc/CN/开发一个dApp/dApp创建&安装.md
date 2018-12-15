<article class="markdown-body entry-content" itemprop="text"><h1><a id="user-content-目录" class="anchor" aria-hidden="true" href="#目录"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>目录</h1>
<ul>
<li>Trinity 介绍</li>
<li>DApp 定义</li>
<li>环境搭建</li>
<li>创建应用</li>
<li>运行应用</li>
<li>调试应用</li>
<li>内置插件</li>
</ul>
<h2><a id="user-content-1trinity-介绍" class="anchor" aria-hidden="true" href="#1trinity-介绍"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.Trinity 介绍</h2>
<ul>
<li>Trinity is a container that provides DApp running environment. Based on the trusted running environment of Elastos Runtime, Trinity provides a reliable running environment for applications to protect digital content 。</li>
<li>Trinity为了便于应用开发者，采用兼容ionic开发框架来支持应用开发。应用开发者可用直接把基于ionic的输出目录下的文件来生成DApp的包. 同一个DApp可运行在Android, IOS, Windows, Linux等设备上。</li>
<li>Ionic 是一个强大的 HTML5 应用程序开发框架(HTML5 Hybrid Mobile App Framework )。可以帮助您使用 Web 技术，比如 HTML、CSS 和 JavaScript 构建接近原生体验的移动应用程序。ionic 主要关注外观和体验，以及和你的应用程序的 UI 交互，特别适合用于基于 Hybird 模式的 HTML5 移动应用程序开发。</li>
<li>Ionic是一个轻量的手机UI库，具有速度快，界面现代化、美观等特点。</li>
</ul>
<h3><a id="user-content-11trinity-特点" class="anchor" aria-hidden="true" href="#11trinity-特点"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.1.Trinity 特点</h3>
<p><a target="_blank" rel="noopener noreferrer" href="/elastos/Elastos.Developer.Doc/blob/master/Ignore/images/DApp_manual_1.png"><img src="/elastos/Elastos.Developer.Doc/raw/master/Ignore/images/DApp_manual_1.png" alt="DApp_manual_1" style="max-width:100%;"></a></p>
<h3><a id="user-content-12trinity-的优势" class="anchor" aria-hidden="true" href="#12trinity-的优势"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.2.Trinity 的优势</h3>
<ul>
<li>
<p>DApp运行在用户的个人设备上，永远属于用户</p>
</li>
<li>
<p>DApp运行不依赖中心服务器</p>
</li>
<li>
<p>数字产权登记在区块链上，去中介交易</p>
</li>
<li>
<p>DApp可以由用户自由打包生成，自由创新</p>
</li>
<li>
<p>保护数字资产，产权不被泄露、破坏</p>
</li>
</ul>
<h3><a id="user-content-13trinity-architecture" class="anchor" aria-hidden="true" href="#13trinity-architecture"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.3.Trinity Architecture</h3>
<p><a target="_blank" rel="noopener noreferrer" href="/elastos/Elastos.Developer.Doc/blob/master/Ignore/images/DApp_manual_2.png"><img src="/elastos/Elastos.Developer.Doc/raw/master/Ignore/images/DApp_manual_2.png" alt="DApp_manual_2" style="max-width:100%;"></a></p>
<h2><a id="user-content-2dapp-定义" class="anchor" aria-hidden="true" href="#2dapp-定义"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2.DApp 定义</h2>
<p>DApp有两部分组成：DApp的所有权和DApp文件。</p>
<p>DApp的所有权登记在区块链上，就像比特币一样放在个人的钱包里，如果钱包里没有这个DApp的所有权的话，是无法运行它的。当然DApp作者可以设置免费模式。如果一个游戏DApp玩够了想转卖，可以像交易比特币一样去出售，当然这个交易必须使用支付，类似币币交换，可以是中心化的交换或者是去中心化的交换。DApp文件的分发方式可以是多种多样的，可以是在中心化网站，类似hao123，雅虎黄页，这样的推荐网站，或者是各种App Store，也可能是云盘，再或者是点对点发送文件。</p>
<h2><a id="user-content-3环境搭建" class="anchor" aria-hidden="true" href="#3环境搭建"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3.环境搭建</h2>
<p><a target="_blank" rel="noopener noreferrer" href="/elastos/Elastos.Developer.Doc/blob/master/Ignore/images/DApp_manual_3.png"><img src="/elastos/Elastos.Developer.Doc/raw/master/Ignore/images/DApp_manual_3.png" alt="DApp_manual_3" style="max-width:100%;"></a></p>
<h2><a id="user-content-4创建应用" class="anchor" aria-hidden="true" href="#4创建应用"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>4.创建应用</h2>
<p><a target="_blank" rel="noopener noreferrer" href="/elastos/Elastos.Developer.Doc/blob/master/Ignore/images/DApp_manual_4.png"><img src="/elastos/Elastos.Developer.Doc/raw/master/Ignore/images/DApp_manual_4.png" alt="DApp_manual_4" style="max-width:100%;"></a></p>
<h2><a id="user-content-5运行应用" class="anchor" aria-hidden="true" href="#5运行应用"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>5.运行应用</h2>
<p><a target="_blank" rel="noopener noreferrer" href="/elastos/Elastos.Developer.Doc/blob/master/Ignore/images/DApp_manual_5.png"><img src="/elastos/Elastos.Developer.Doc/raw/master/Ignore/images/DApp_manual_5.png" alt="DApp_manual_5" style="max-width:100%;"></a></p>
<h3><a id="user-content-51运行在-trinity-内" class="anchor" aria-hidden="true" href="#51运行在-trinity-内"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>5.1.运行在 Trinity 内</h3>
<ul>
<li>
<p>1 安装Trinity基座程序</p>
</li>
<li>
<p>2 调用Ionic扩展工具升级加密的epk文件</p>
<p><a href="https://github.com/elastos/Elastos.ORG.Wallet.Mobile/tree/ds/build">https://github.com/elastos/Elastos.ORG.Wallet.Mobile/tree/ds/build</a></p>
<pre><code>ionic cordova build android --prod &amp;&amp; node epk xxx
</code></pre>
</li>
<li>
<p>3 将生成的epk文件拷贝或者下载到设备上</p>
</li>
<li>
<p>4 通过Trinity 导入epk文件，回到桌面运行</p>
</li>
</ul>
<p><a target="_blank" rel="noopener noreferrer" href="/elastos/Elastos.Developer.Doc/blob/master/Ignore/images/DApp_manual_6.png"><img src="/elastos/Elastos.Developer.Doc/raw/master/Ignore/images/DApp_manual_6.png" alt="DApp_manual_6" style="max-width:100%;"></a> <a target="_blank" rel="noopener noreferrer" href="/elastos/Elastos.Developer.Doc/blob/master/Ignore/images/DApp_manual_7.png"><img src="/elastos/Elastos.Developer.Doc/raw/master/Ignore/images/DApp_manual_7.png" alt="DApp_manual_7" style="max-width:100%;"></a></p>
<h2><a id="user-content-6调试应用" class="anchor" aria-hidden="true" href="#6调试应用"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>6.调试应用</h2>
<h3><a id="user-content-61ui-components" class="anchor" aria-hidden="true" href="#61ui-components"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>6.1.UI Components</h3>
<ul>
<li>Ionic应用程序由称为组件的高级构建块组成。 组件允许您快速构建应用程序的接口。 Ionic带有许多组件，包括模态，弹出窗口和卡片。 查看下面的示例，了解每个组件的外观，并了解如何使用每个组件。 熟悉基础知识后，请访问API文档，了解如何自定义每个组件。</li>
</ul>
<h3><a id="user-content-62native-apis" class="anchor" aria-hidden="true" href="#62native-apis"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>6.2.Native APIs</h3>
<p><a target="_blank" rel="noopener noreferrer" href="/elastos/Elastos.Developer.Doc/blob/master/Ignore/images/DApp_manual_8.png"><img src="/elastos/Elastos.Developer.Doc/raw/master/Ignore/images/DApp_manual_8.png" alt="DApp_manual_8" style="max-width:100%;"></a></p>
<h2><a id="user-content-7内置插件" class="anchor" aria-hidden="true" href="#7内置插件"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>7.内置插件</h2>
<p><a target="_blank" rel="noopener noreferrer" href="/elastos/Elastos.Developer.Doc/blob/master/Ignore/images/DApp_manual_9.png"><img src="/elastos/Elastos.Developer.Doc/raw/master/Ignore/images/DApp_manual_9.png" alt="DApp_manual_9" style="max-width:100%;"></a></p>
</article>