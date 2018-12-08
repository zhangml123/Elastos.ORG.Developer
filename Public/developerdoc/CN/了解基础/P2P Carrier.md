<article class="markdown-body entry-content" itemprop="text"><h1><a id="user-content-elastos-carrier" class="anchor" aria-hidden="true" href="#elastos-carrier"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Elastos Carrier</h1>
<p>Elastos Carrier解决了互联网上的应用节点没有公网IP而无法直接连接的问题。 通常解决此问题需要部署中央服务器进行数据传输。 此外，Elastos Carrier实现了基于P2P通信技术，不需要中心节点就可以直接连接的通信方案。</p>
<p>Elastos Carrier提供跨网络访问功能。 例如，任何两个app节点都可以在不同的子网中，一个在家庭wifi环境中，另一个在企业wifi环境中。 应用程序可以使用“地址”字符串直接通信，并通过向对方添加“朋友”来确认授权。</p>
<h2><a id="user-content-1-接口" class="anchor" aria-hidden="true" href="#1-接口"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1. 接口</h2>
<h3><a id="user-content-c" class="anchor" aria-hidden="true" href="#c"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>C++</h3>
<p>默认情况下提供API。</p>
<p>打开文档，进入到html目录，找到index.html并单击，可以在浏览器中打开API文档。</p>
<ul>
<li><a href="/elastos/Elastos.Developer.Doc/blob/master/CN/%E4%BA%86%E8%A7%A3%E5%9F%BA%E7%A1%80/SDK/Elastos.NET.Carrier.Native.SDK_API.zip">Carrier_API</a></li>
</ul>
<p>请参阅以下文档的最后一部分来导出最新的API文档：</p>
<ul>
<li><a href="https://github.com/elastos/Elastos.NET.Carrier.Native.SDK/blob/master/README.md#Build_API_documentation">如何创建API文档</a></li>
</ul>
<h3><a id="user-content-android" class="anchor" aria-hidden="true" href="#android"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Android</h3>
<ul>
<li>
<p><a href="https://github.com/elastos/Elastos.NET.Carrier.Android.SDK">代码仓库</a></p>
</li>
<li>
<p><a href="https://github.com/elastos/Elastos.NET.Carrier.Android.SDK#build-docs">接口文档</a></p>
</li>
</ul>
<h3><a id="user-content-js" class="anchor" aria-hidden="true" href="#js"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>JS</h3>
<ul>
<li><a href="https://github.com/elastos/Elastos.NET.Carrier.Nodejs.SDK">代码仓库</a></li>
</ul>
<h2><a id="user-content-2-示例" class="anchor" aria-hidden="true" href="#2-示例"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2. 示例</h2>
<p>示例： <a href="https://github.com/elastos/Elastos.Developer.Doc/tree/master/Demo/android">https://github.com/elastos/Elastos.Developer.Doc/tree/master/Demo/android</a></p>
<ul>
<li><a href="/elastos/Elastos.Developer.Doc/blob/master/Ignore/Doc/Carrier_For_Android.md">doc</a></li>
</ul>
<h2><a id="user-content-3-常见问题" class="anchor" aria-hidden="true" href="#3-常见问题"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3. 常见问题</h2>
<ul>
<li><a href="/elastos/Elastos.Developer.Doc/blob/master/Ignore/Doc/How_to_use_Carrier_API_FAQ.md">FAQ</a></li>
</ul>
</article>