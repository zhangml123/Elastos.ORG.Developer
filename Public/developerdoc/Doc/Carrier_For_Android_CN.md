<article class="markdown-body entry-content" itemprop="text"><h1><a id="user-content-carrier-for-android-开发文档" class="anchor" aria-hidden="true" href="#carrier-for-android-开发文档"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Carrier for Android 开发文档</h1>
<h2><a id="user-content-1-环境准备" class="anchor" aria-hidden="true" href="#1-环境准备"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1 环境准备</h2>
<ol>
<li>两台API21以上的 Android 手机。</li>
<li>安装有 AndroidStudio 的PC机。</li>
</ol>
<h2><a id="user-content-2-建立工程" class="anchor" aria-hidden="true" href="#2-建立工程"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2 建立工程</h2>
<ol>
<li>在网址 <a href="https://github.com/elastos/Elastos.NET.Carrier.Android.SDK/releases">https://github.com/elastos/Elastos.NET.Carrier.Android.SDK/releases</a> 中下载 android.sdk-debug.tar.gz。</li>
<li>在 AndroidStudio 中新建 android 工程如 CarrierDemo，minimum SDK 选择 API21 或以上。</li>
<li>将 android.sdk-debug.tar.gz 中的 elacarrier.jar 和 libs/* 文件夹拷贝到 CarrierDemo/app/libs/ 下。
<a target="_blank" rel="noopener noreferrer" href="/elastos/Elastos.Developer.Doc/blob/master/images/Carrier_For_Android/2.3.png"><img src="/elastos/Elastos.Developer.Doc/raw/master/images/Carrier_For_Android/2.3.png" alt="2.3" style="max-width:100%;"></a></li>
<li>修改 CarrierDemo/app/build.gradle，在其中添加：
<div class="highlight highlight-source-java"><pre>android {
    <span class="pl-c1">......</span>
    sourceSets {
        main {
            jniLibs<span class="pl-k">.</span>srcDirs <span class="pl-k">=</span> [<span class="pl-s"><span class="pl-pds">'</span>libs<span class="pl-pds">'</span></span>]
        }
    }
}</pre></div>
</li>
<li>在 AndroidManifest.xml 中添加 internet 权限。</li>
</ol>
<h2><a id="user-content-3-启动-carrier" class="anchor" aria-hidden="true" href="#3-启动-carrier"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3 启动 Carrier</h2>
<ol>
<li>新建 DefaultCarrierOptions.java，并继承于 Carrier.Options。设置 BootstrapNodes，可参照 CarrierDemo/app/src/main/java/org/elastos/carrier/demo/DefaultCarrierOptions.java。</li>
<li>新建 DefaultCarrierHandler.java，并继承于 AbstractCarrierHandler。可参照 CarrierDemo/app/src/main/java/org/elastos/carrier/demo/DefaultCarrierHandler.java。</li>
<li>新建 CarrierHelper.java，用于对外提供简单的 API。新建 startCarrier函数用于启动 Carrier。在这个函数中添加 DefaultCarrierHandler 和 DefaultCarrierHandler 的实例，最后调用 Carrier.start()。 实现可参照 CarrierDemo/app/src/main/java/org/elastos/carrier/demo/CarrierHelper.java。
<div class="highlight highlight-source-java"><pre><span class="pl-k">public</span> <span class="pl-k">final</span> <span class="pl-k">class</span> <span class="pl-en">CarrierHelper</span> {
    <span class="pl-c1">......</span>
    <span class="pl-k">public</span> <span class="pl-k">static</span> <span class="pl-k">void</span> <span class="pl-en">startCarrier</span>(<span class="pl-smi">Context</span> <span class="pl-v">context</span>) {
        <span class="pl-k">try</span> {
            <span class="pl-smi">String</span> dir <span class="pl-k">=</span> context<span class="pl-k">.</span>getFilesDir()<span class="pl-k">.</span>getAbsolutePath();
            <span class="pl-smi">Carrier</span><span class="pl-k">.</span><span class="pl-smi">Options</span> options <span class="pl-k">=</span> <span class="pl-k">new</span> <span class="pl-smi">DefaultCarrierOptions</span>(dir);
            <span class="pl-smi">CarrierHandler</span> handler <span class="pl-k">=</span> <span class="pl-k">new</span> <span class="pl-smi">DefaultCarrierHandler</span>();

            <span class="pl-smi">Carrier</span><span class="pl-k">.</span>getInstance(options, handler);
            <span class="pl-smi">Carrier</span> carrier <span class="pl-k">=</span> <span class="pl-smi">Carrier</span><span class="pl-k">.</span>getInstance();

            carrier<span class="pl-k">.</span>start(<span class="pl-c1">1000</span>);
            <span class="pl-smi">Logger</span><span class="pl-k">.</span>info(<span class="pl-s"><span class="pl-pds">"</span>start carrier.<span class="pl-pds">"</span></span>);
        } <span class="pl-k">catch</span> (<span class="pl-smi">Exception</span> e) {
            <span class="pl-smi">Logger</span><span class="pl-k">.</span>error(<span class="pl-s"><span class="pl-pds">"</span>Failed to start carrier.<span class="pl-pds">"</span></span>, e);
        }
    }
}</pre></div>
</li>
<li>在 MainActivity.java 中调用 CarrierHelper.startCarrier()。</li>
<li>在 DefaultCarrierHandler.java 中重载 onConnection() 函数，监听 Carrier 和 BootstrapNode 的连接状态（Online/Offline）。</li>
<li>运行 CarrierDemo， Carrier 就启动起来了。</li>
</ol>
<h2><a id="user-content-4-显示和扫描地址可选" class="anchor" aria-hidden="true" href="#4-显示和扫描地址可选"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>4 显示和扫描地址（可选）</h2>
<p>为了快速添加好友，在 CarrierDemo 中添加了扫描二维码功能，这个功能与 Carrier 使用无关，可忽略。</p>
<ol>
<li>显示地址。添加 MyAddr 按钮，并实现点击显示二维码，具体实现可参照 MainActivity.java 的 showAddress() 函数。</li>
<li>扫描好友地址。添加 CAMERA， VIBRATE 等权限，添加 ScanAddr 按钮，并实现点击扫描二维码，具体实现可参照 MainActivity.java 的 scanAddress() 函数。</li>
</ol>
<h2><a id="user-content-5-添加好友" class="anchor" aria-hidden="true" href="#5-添加好友"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>5 添加好友</h2>
<ol>
<li>两个手机分别称为A和B。均安装有 CarrierDemo。</li>
<li>在A、B双方都处于 Online 状态时，A获取到B的好友地址，并调用 addFriend() 函数添加好友B，该函数使用的是B的 Address。可参照 CarrierHelper.java 的 addFriend()。
<div class="highlight highlight-source-java"><pre><span class="pl-k">public</span> <span class="pl-k">final</span> <span class="pl-k">class</span> <span class="pl-en">CarrierHelper</span> {
    <span class="pl-c1">......</span>
    <span class="pl-k">public</span> <span class="pl-k">static</span> <span class="pl-k">void</span> <span class="pl-en">addFriend</span>(<span class="pl-smi">String</span> <span class="pl-v">peerAddr</span>) {
        <span class="pl-k">try</span> {
            <span class="pl-smi">String</span> userId <span class="pl-k">=</span> <span class="pl-smi">Carrier</span><span class="pl-k">.</span>getIdFromAddress(peerAddr);
            <span class="pl-k">if</span>(<span class="pl-smi">Carrier</span><span class="pl-k">.</span>getInstance()<span class="pl-k">.</span>isFriend(userId)) {
                <span class="pl-smi">Logger</span><span class="pl-k">.</span>info(<span class="pl-s"><span class="pl-pds">"</span>Carrier ignore to add friend address: <span class="pl-pds">"</span></span> <span class="pl-k">+</span> peerAddr);
                <span class="pl-k">return</span>;
            }

            <span class="pl-smi">Carrier</span><span class="pl-k">.</span>getInstance()<span class="pl-k">.</span>addFriend(peerAddr, <span class="pl-c1">CARRIER_HELLO_AUTH</span>);
            <span class="pl-smi">Logger</span><span class="pl-k">.</span>info(<span class="pl-s"><span class="pl-pds">"</span>Carrier add friend address: <span class="pl-pds">"</span></span> <span class="pl-k">+</span> peerAddr);
        } <span class="pl-k">catch</span> (<span class="pl-smi">Exception</span> e) {
            <span class="pl-smi">Logger</span><span class="pl-k">.</span>error(<span class="pl-s"><span class="pl-pds">"</span>Failed to add friend.<span class="pl-pds">"</span></span>, e);
        }
        <span class="pl-k">return</span>;
    }
}</pre></div>
</li>
<li>当A调用 addFriend() 后，被添加的一方会收到 onFriendRequest() 回调，在该回调中， Carrier 会将A的 Address 转换为 UserId，从此处开始， Carrier 将全部使用 UserId 进行身份辨识。可以在 DefaultCarrierHandler.java 重载此函数进行好友认证处理，可参照 CarrierHelper.java 的 acceptFriend()。
<div class="highlight highlight-source-java"><pre><span class="pl-k">public</span> <span class="pl-k">final</span> <span class="pl-k">class</span> <span class="pl-en">CarrierHelper</span> {
    <span class="pl-c1">......</span>
    <span class="pl-k">public</span> <span class="pl-k">static</span> <span class="pl-k">void</span> <span class="pl-en">acceptFriend</span>(<span class="pl-smi">String</span> <span class="pl-v">peerUserId</span>, <span class="pl-smi">String</span> <span class="pl-v">hello</span>) {
        <span class="pl-k">try</span> {
            <span class="pl-k">if</span> (hello<span class="pl-k">.</span>equals(<span class="pl-c1">CARRIER_HELLO_AUTH</span>) <span class="pl-k">==</span> <span class="pl-c1">false</span>) {
                <span class="pl-smi">Logger</span><span class="pl-k">.</span>error(<span class="pl-s"><span class="pl-pds">"</span>Ignore to accept friend, not expected.<span class="pl-pds">"</span></span>);
                <span class="pl-k">return</span>;
            }

            <span class="pl-smi">Carrier</span><span class="pl-k">.</span>getInstance()<span class="pl-k">.</span>AcceptFriend(peerUserId);
            <span class="pl-smi">Logger</span><span class="pl-k">.</span>info(<span class="pl-s"><span class="pl-pds">"</span>Carrier accept friend UserId: <span class="pl-pds">"</span></span> <span class="pl-k">+</span> peerUserId);
        } <span class="pl-k">catch</span> (<span class="pl-smi">Exception</span> e) {
            <span class="pl-smi">Logger</span><span class="pl-k">.</span>error(<span class="pl-s"><span class="pl-pds">"</span>Failed to add friend.<span class="pl-pds">"</span></span>, e);
        }
    }
}</pre></div>
</li>
<li>通过B的认证后，A会收到 onFriendAdded() 回调，可以在 DefaultCarrierHandler.java 重载此函数进行后续处理。</li>
<li>已经存在的好友不能重复添加，可以通过 getFriends() 函数获取好友列表。</li>
</ol>
<h2><a id="user-content-6-发送消息" class="anchor" aria-hidden="true" href="#6-发送消息"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>6 发送消息</h2>
<ol>
<li>A、B双方 Online 后，对方均会收到 onFriendConnection() 回调，可以在 DefaultCarrierHandler.java 重载此函数进行后续处理。
<div class="highlight highlight-source-java"><pre><span class="pl-k">public</span> <span class="pl-k">class</span> <span class="pl-en">DefaultCarrierHandler</span> <span class="pl-k">extends</span> <span class="pl-e">AbstractCarrierHandler</span> {
    <span class="pl-c1">......</span>
    <span class="pl-k">@Override</span>
    <span class="pl-k">public</span> <span class="pl-k">void</span> <span class="pl-en">onFriendConnection</span>(<span class="pl-smi">Carrier</span> <span class="pl-v">carrier</span>, <span class="pl-smi">String</span> <span class="pl-v">friendId</span>, <span class="pl-smi">ConnectionStatus</span> <span class="pl-v">status</span>) {
        <span class="pl-smi">Logger</span><span class="pl-k">.</span>info(<span class="pl-s"><span class="pl-pds">"</span>Carrier friend connect. peer UserId: <span class="pl-pds">"</span></span> <span class="pl-k">+</span> friendId <span class="pl-k">+</span> <span class="pl-s"><span class="pl-pds">"</span> status:<span class="pl-pds">"</span></span> <span class="pl-k">+</span> status);
        <span class="pl-k">if</span>(status <span class="pl-k">==</span> <span class="pl-smi">ConnectionStatus</span><span class="pl-k">.</span><span class="pl-smi">Connected</span>) {
            <span class="pl-smi">CarrierHelper</span><span class="pl-k">.</span>setPeerUserId(friendId);
        }
    }
}</pre></div>
</li>
<li>在A、B双方都处于 Online 状态时，可以通过 sendFriendMessage() 函数向对方发送消息，可参照 CarrierHelper.java 的 sendMessage()。
<div class="highlight highlight-source-java"><pre><span class="pl-k">public</span> <span class="pl-k">final</span> <span class="pl-k">class</span> <span class="pl-en">CarrierHelper</span> {
    <span class="pl-c1">......</span>
    <span class="pl-k">public</span> <span class="pl-k">static</span> <span class="pl-k">void</span> <span class="pl-en">sendMessage</span>(<span class="pl-smi">String</span> <span class="pl-v">message</span>) {
        <span class="pl-k">if</span>(sPeerUserId <span class="pl-k">==</span> <span class="pl-c1">null</span>) {
            <span class="pl-smi">Logger</span><span class="pl-k">.</span>error(<span class="pl-s"><span class="pl-pds">"</span>Failed to send message, friend not found.<span class="pl-pds">"</span></span>);
            <span class="pl-k">return</span>;
        }

        <span class="pl-k">try</span> {
            <span class="pl-smi">Carrier</span><span class="pl-k">.</span>getInstance()<span class="pl-k">.</span>sendFriendMessage(sPeerUserId, message);
            <span class="pl-smi">Logger</span><span class="pl-k">.</span>info(<span class="pl-s"><span class="pl-pds">"</span>Carrier send message to UserId: <span class="pl-pds">"</span></span> <span class="pl-k">+</span> sPeerUserId
                    <span class="pl-k">+</span> <span class="pl-s"><span class="pl-pds">"</span><span class="pl-cce">\n</span>message: <span class="pl-pds">"</span></span> <span class="pl-k">+</span> message);
        } <span class="pl-k">catch</span> (<span class="pl-smi">Exception</span> e) {
            <span class="pl-smi">Logger</span><span class="pl-k">.</span>error(<span class="pl-s"><span class="pl-pds">"</span>Failed to send message.<span class="pl-pds">"</span></span>, e);
        }
    }
}</pre></div>
</li>
<li>当A发送消息给B后，B会收到 onFriendMessage() 回调，可以在 DefaultCarrierHandler.java 重载此函数进行消息处理。
<div class="highlight highlight-source-java"><pre><span class="pl-k">public</span> <span class="pl-k">class</span> <span class="pl-en">DefaultCarrierHandler</span> <span class="pl-k">extends</span> <span class="pl-e">AbstractCarrierHandler</span> {
    <span class="pl-c1">......</span>
    <span class="pl-k">@Override</span>
    <span class="pl-k">public</span> <span class="pl-k">void</span> <span class="pl-en">onFriendMessage</span>(<span class="pl-smi">Carrier</span> <span class="pl-v">carrier</span>, <span class="pl-smi">String</span> <span class="pl-v">from</span>, <span class="pl-smi">String</span> <span class="pl-v">message</span>) {
        <span class="pl-smi">Logger</span><span class="pl-k">.</span>info(<span class="pl-s"><span class="pl-pds">"</span>Carrier receiver message from UserId: <span class="pl-pds">"</span></span> <span class="pl-k">+</span> from
                <span class="pl-k">+</span> <span class="pl-s"><span class="pl-pds">"</span><span class="pl-cce">\n</span>message: <span class="pl-pds">"</span></span> <span class="pl-k">+</span> message);
    }
}</pre></div>
</li>
</ol>
<h2><a id="user-content-7-建立-session" class="anchor" aria-hidden="true" href="#7-建立-session"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>7 建立 Session</h2>
<ol>
<li>
<p>Carrier 可以通过 session 建立 P2P 连接。</p>
</li>
<li>
<p>首先需要初始化 Session 的 manager， manager 的回调在当有另一方发出连接请求时触发。可参照 CarrierSessionHelper.java 的 initSessionManager() 函数实现。</p>
<div class="highlight highlight-source-java"><pre><span class="pl-k">public</span> <span class="pl-k">final</span> <span class="pl-k">class</span> <span class="pl-en">CarrierSessionHelper</span> {
    <span class="pl-c1">......</span>
    <span class="pl-k">public</span> <span class="pl-k">static</span> <span class="pl-k">void</span> <span class="pl-en">initSessionManager</span>(<span class="pl-smi">ManagerHandler</span> <span class="pl-v">handler</span>) {
        <span class="pl-k">try</span> {
            <span class="pl-smi">Manager</span> manager <span class="pl-k">=</span> <span class="pl-smi">Manager</span><span class="pl-k">.</span>getInstance();
            <span class="pl-k">if</span>(manager <span class="pl-k">!=</span> <span class="pl-c1">null</span>) {
                <span class="pl-k">return</span>;
            }

            <span class="pl-smi">Manager</span><span class="pl-k">.</span>getInstance(<span class="pl-smi">Carrier</span><span class="pl-k">.</span>getInstance(), handler);
            <span class="pl-smi">Logger</span><span class="pl-k">.</span>info(<span class="pl-s"><span class="pl-pds">"</span>Session manager initialized.<span class="pl-pds">"</span></span>);
        } <span class="pl-k">catch</span> (<span class="pl-smi">Exception</span> e) {
            <span class="pl-smi">Logger</span><span class="pl-k">.</span>error(<span class="pl-s"><span class="pl-pds">"</span>Failed to init session manager.<span class="pl-pds">"</span></span>, e);
        }
    }
}</pre></div>
</li>
<li>
<p>session 状态可以通过 StreamHandler.onStateChanged() 回调获得，可以在 DefaultSessionHandler.java 重载此函数进行状态处理。</p>
</li>
<li>
<p>A创建 session，可参照 CarrierSessionHelper.java 的 newSessionAndStream() 函数实现。</p>
<ul>
<li>初始化 SessionManager ，调用 Manager.getInstance(Carrier.getInstance(), sessionHandler) 实现初始化。</li>
<li>Manager.newSession() 函数创建一个 session。</li>
<li>通过 Session.addStream 函数添加一个 Stream。</li>
</ul>
<div class="highlight highlight-source-java"><pre><span class="pl-k">public</span> <span class="pl-k">final</span> <span class="pl-k">class</span> <span class="pl-en">CarrierSessionHelper</span> {
    <span class="pl-k">public</span> <span class="pl-k">static</span> <span class="pl-smi">CarrierSessionInfo</span> <span class="pl-en">newSessionAndStream</span>(<span class="pl-smi">String</span> <span class="pl-v">peer</span>) {
        <span class="pl-smi">CarrierSessionInfo</span> sessionInfo <span class="pl-k">=</span> <span class="pl-c1">null</span>;

        <span class="pl-k">try</span> {
            sessionInfo <span class="pl-k">=</span> <span class="pl-k">new</span> <span class="pl-smi">CarrierSessionInfo</span>();

            <span class="pl-smi">Logger</span><span class="pl-k">.</span>info(<span class="pl-s"><span class="pl-pds">"</span>Carrier new session. peer:<span class="pl-pds">"</span></span> <span class="pl-k">+</span> peer);
            <span class="pl-smi">Manager</span> carrierSessionManager <span class="pl-k">=</span> <span class="pl-smi">Manager</span><span class="pl-k">.</span>getInstance();
            <span class="pl-k">if</span> (carrierSessionManager <span class="pl-k">==</span> <span class="pl-c1">null</span>) {
                <span class="pl-smi">Logger</span><span class="pl-k">.</span>error(<span class="pl-s"><span class="pl-pds">"</span>Failed to new session, manager not initialized.<span class="pl-pds">"</span></span>);
                <span class="pl-k">return</span> <span class="pl-c1">null</span>;
            }
            sessionInfo<span class="pl-k">.</span>mSession <span class="pl-k">=</span> carrierSessionManager<span class="pl-k">.</span>newSession(peer);

            <span class="pl-smi">Logger</span><span class="pl-k">.</span>info(<span class="pl-s"><span class="pl-pds">"</span>Carrier add a unreliable stream to session.<span class="pl-pds">"</span></span>);
            <span class="pl-k">int</span> dataOptions <span class="pl-k">=</span> <span class="pl-c1">0</span>;
            sessionInfo<span class="pl-k">.</span>mStream0 <span class="pl-k">=</span> sessionInfo<span class="pl-k">.</span>mSession<span class="pl-k">.</span>addStream(<span class="pl-smi">StreamType</span><span class="pl-k">.</span><span class="pl-smi">Application</span>, dataOptions, sessionInfo<span class="pl-k">.</span>mSessionHandler);

            <span class="pl-smi">Logger</span><span class="pl-k">.</span>info(<span class="pl-s"><span class="pl-pds">"</span>Carrier add a reliable stream to session.<span class="pl-pds">"</span></span>);
            dataOptions <span class="pl-k">=</span> <span class="pl-smi">Stream</span><span class="pl-c1"><span class="pl-k">.</span>PROPERTY_RELIABLE</span>;
            sessionInfo<span class="pl-k">.</span>mStream1 <span class="pl-k">=</span> sessionInfo<span class="pl-k">.</span>mSession<span class="pl-k">.</span>addStream(<span class="pl-smi">StreamType</span><span class="pl-k">.</span><span class="pl-smi">Text</span>, dataOptions, sessionInfo<span class="pl-k">.</span>mSessionHandler);
        } <span class="pl-k">catch</span> (<span class="pl-smi">Exception</span> e) {
            <span class="pl-smi">Logger</span><span class="pl-k">.</span>error(<span class="pl-s"><span class="pl-pds">"</span>Failed to new session or stream.<span class="pl-pds">"</span></span>, e);
        }

        <span class="pl-k">return</span> sessionInfo;
    }
}</pre></div>
</li>
<li>
<p>A创建 session 并初始化完成后，调用 Session.request() 函数后，B会收到 Manager 的 onSessionRequest() 回调，在回调中，同样调用 newSessionAndStream() 函数建立B端的 session。</p>
</li>
<li>
<p>B创建 session 并初始化完成后，调用 Session.replyRequest() ，A会收到 SessionRequestCompleteHandler.onCompletion() 回调。</p>
</li>
<li>
<p>当B的 Stream 状态均变成 TransportReady 时，调用 Session.start()。</p>
<div class="highlight highlight-source-java"><pre><span class="pl-k">public</span> <span class="pl-k">class</span> <span class="pl-en">MainActivity</span> <span class="pl-k">extends</span> <span class="pl-e">Activity</span> {
    <span class="pl-c1">......</span>
    <span class="pl-k">private</span> <span class="pl-smi">ManagerHandler</span> mSessionManagerHandler <span class="pl-k">=</span> <span class="pl-k">new</span> <span class="pl-smi">ManagerHandler</span>() {
        <span class="pl-k">@Override</span>
        <span class="pl-k">public</span> <span class="pl-k">void</span> <span class="pl-en">onSessionRequest</span>(<span class="pl-smi">Carrier</span> <span class="pl-v">carrier</span>, <span class="pl-smi">String</span> <span class="pl-v">from</span>, <span class="pl-smi">String</span> <span class="pl-v">sdp</span>) {
            <span class="pl-smi">CarrierSessionInfo</span> sessionInfo <span class="pl-k">=</span> <span class="pl-smi">CarrierSessionHelper</span><span class="pl-k">.</span>newSessionAndStream(<span class="pl-smi">CarrierHelper</span><span class="pl-k">.</span>getPeerUserId());
            <span class="pl-k">if</span>(sessionInfo <span class="pl-k">==</span> <span class="pl-c1">null</span>) {
                <span class="pl-smi">Logger</span><span class="pl-k">.</span>error(<span class="pl-s"><span class="pl-pds">"</span>Failed to new session.<span class="pl-pds">"</span></span>);
                <span class="pl-k">return</span>;
            }
            <span class="pl-k">boolean</span> wait <span class="pl-k">=</span> sessionInfo<span class="pl-k">.</span>mSessionState<span class="pl-k">.</span>waitForState(<span class="pl-smi">CarrierSessionInfo</span><span class="pl-k">.</span><span class="pl-smi">SessionState</span><span class="pl-c1"><span class="pl-k">.</span>SESSION_STREAM_INITIALIZED</span>, <span class="pl-c1">10000</span>);
            <span class="pl-k">if</span>(wait <span class="pl-k">==</span> <span class="pl-c1">false</span>) {
                deleteSession();
                <span class="pl-smi">Logger</span><span class="pl-k">.</span>error(<span class="pl-s"><span class="pl-pds">"</span>Failed to wait session initialize.<span class="pl-pds">"</span></span>);
                <span class="pl-k">return</span>;
            }

            <span class="pl-smi">CarrierSessionHelper</span><span class="pl-k">.</span>replyRequest(sessionInfo);
            wait <span class="pl-k">=</span> sessionInfo<span class="pl-k">.</span>mSessionState<span class="pl-k">.</span>waitForState(<span class="pl-smi">CarrierSessionInfo</span><span class="pl-k">.</span><span class="pl-smi">SessionState</span><span class="pl-c1"><span class="pl-k">.</span>SESSION_STREAM_TRANSPORTREADY</span>, <span class="pl-c1">10000</span>);
            <span class="pl-k">if</span>(wait <span class="pl-k">==</span> <span class="pl-c1">false</span>) {
                deleteSession();
                <span class="pl-smi">Logger</span><span class="pl-k">.</span>error(<span class="pl-s"><span class="pl-pds">"</span>Failed to wait session initialize.<span class="pl-pds">"</span></span>);
                <span class="pl-k">return</span>;
            }

            sessionInfo<span class="pl-k">.</span>mSdp <span class="pl-k">=</span> sdp;
            <span class="pl-smi">CarrierSessionHelper</span><span class="pl-k">.</span>startSession(sessionInfo);

            mCarrierSessionInfo <span class="pl-k">=</span> sessionInfo;
        }
    }
}</pre></div>
</li>
<li>
<p>A在等待 onCompletion() 后，调用 Session.start()。</p>
<div class="highlight highlight-source-java"><pre><span class="pl-k">public</span> <span class="pl-k">class</span> <span class="pl-en">CarrierSessionInfo</span> {
    <span class="pl-c1">......</span>
    <span class="pl-k">public</span> <span class="pl-en">CarrierSessionInfo</span>() {
        <span class="pl-c1">......</span>
        mSessionListener <span class="pl-k">=</span> <span class="pl-k">new</span> <span class="pl-smi">DefaultSessionHandler</span>.<span class="pl-smi">OnSessionListener</span>() {
            <span class="pl-c1">......</span>
            <span class="pl-k">@Override</span>
            <span class="pl-k">public</span> <span class="pl-k">void</span> <span class="pl-en">onCompletion</span>(<span class="pl-smi">Session</span> <span class="pl-v">session</span>, <span class="pl-k">int</span> <span class="pl-v">state</span>, <span class="pl-smi">String</span> <span class="pl-v">reason</span>, <span class="pl-smi">String</span> <span class="pl-v">sdp</span>) {
                mSdp <span class="pl-k">=</span> sdp;
                mSessionState<span class="pl-k">.</span>maskState(<span class="pl-smi">SessionState</span><span class="pl-c1"><span class="pl-k">.</span>SESSION_REQUEST_COMPLETED</span>);
            }
        }
    }
}

<span class="pl-k">public</span> <span class="pl-k">class</span> <span class="pl-en">MainActivity</span> <span class="pl-k">extends</span> <span class="pl-e">Activity</span> {
    <span class="pl-c1">......</span>
    <span class="pl-k">private</span> <span class="pl-k">void</span> <span class="pl-en">createSession</span>() {
        <span class="pl-c1">......</span>
        <span class="pl-smi">CarrierSessionHelper</span><span class="pl-k">.</span>requestSession(sessionInfo);
        wait <span class="pl-k">=</span> sessionInfo<span class="pl-k">.</span>mSessionState<span class="pl-k">.</span>waitForState(<span class="pl-smi">CarrierSessionInfo</span><span class="pl-k">.</span><span class="pl-smi">SessionState</span><span class="pl-c1"><span class="pl-k">.</span>SESSION_REQUEST_COMPLETED</span>, <span class="pl-c1">10000</span>);
        <span class="pl-k">if</span>(wait <span class="pl-k">==</span> <span class="pl-c1">false</span>) {
            deleteSession();
            <span class="pl-smi">Logger</span><span class="pl-k">.</span>error(<span class="pl-s"><span class="pl-pds">"</span>Failed to wait session request.<span class="pl-pds">"</span></span>);
            <span class="pl-k">return</span>;
        }

        <span class="pl-smi">CarrierSessionHelper</span><span class="pl-k">.</span>startSession(sessionInfo);

        mCarrierSessionInfo <span class="pl-k">=</span> sessionInfo;
    }
}</pre></div>
</li>
<li>
<p>当A、B的 Stream 状态均变成 Connected 时，说明 Session 连接创建成功。</p>
</li>
</ol>
<h2><a id="user-content-8-通过-session-发送数据" class="anchor" aria-hidden="true" href="#8-通过-session-发送数据"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>8 通过 Session 发送数据</h2>
<ol>
<li>A、B双方的 Session 均处于 Connected 状态时，可以通过 Stream.writeData() 函数向对方发送数据，可参照 CarrierSessionHelper.java 的 sendData()。
<div class="highlight highlight-source-java"><pre><span class="pl-k">public</span> <span class="pl-k">final</span> <span class="pl-k">class</span> <span class="pl-en">CarrierSessionHelper</span> {
    <span class="pl-c1">......</span>
    <span class="pl-k">public</span> <span class="pl-k">static</span> <span class="pl-k">int</span> <span class="pl-en">sendData</span>(<span class="pl-smi">Stream</span> <span class="pl-v">stream</span>, <span class="pl-k">byte</span>[] <span class="pl-v">data</span>) {
        <span class="pl-k">int</span> sent <span class="pl-k">=</span> <span class="pl-k">-</span><span class="pl-c1">1</span>;
        <span class="pl-k">try</span> {
            sent <span class="pl-k">=</span> stream<span class="pl-k">.</span>writeData(data);
            <span class="pl-smi">Logger</span><span class="pl-k">.</span>info(<span class="pl-s"><span class="pl-pds">"</span>Session send data to stream: <span class="pl-pds">"</span></span> <span class="pl-k">+</span> stream
                    <span class="pl-k">+</span> <span class="pl-s"><span class="pl-pds">"</span><span class="pl-cce">\n</span>data: <span class="pl-pds">"</span></span> <span class="pl-k">+</span> <span class="pl-k">new</span> <span class="pl-smi">String</span>(data)
                    <span class="pl-k">+</span> <span class="pl-s"><span class="pl-pds">"</span><span class="pl-cce">\n</span>sent: <span class="pl-pds">"</span></span> <span class="pl-k">+</span> sent);
        } <span class="pl-k">catch</span> (<span class="pl-smi">Exception</span> e) {
            <span class="pl-smi">Logger</span><span class="pl-k">.</span>error(<span class="pl-s"><span class="pl-pds">"</span>Failed to send session data.<span class="pl-pds">"</span></span>, e);
        }

        <span class="pl-k">return</span> sent;
    }
}</pre></div>
</li>
<li>当A发送数据给B后，B会收到 onStreamData() 回调，可以在 DefaultSessionHandler.java 重载此函数进行数据处理。
<div class="highlight highlight-source-java"><pre><span class="pl-k">public</span> <span class="pl-k">class</span> <span class="pl-en">DefaultSessionHandler</span> <span class="pl-k">extends</span> <span class="pl-e">AbstractStreamHandler</span> <span class="pl-k">implements</span> <span class="pl-e">SessionRequestCompleteHandler</span> {
    <span class="pl-c1">......</span>
    <span class="pl-k">@Override</span>
    <span class="pl-k">public</span> <span class="pl-k">void</span> <span class="pl-en">onStreamData</span>(<span class="pl-smi">Stream</span> <span class="pl-v">stream</span>, <span class="pl-k">byte</span>[] <span class="pl-v">data</span>) {
        <span class="pl-k">if</span>(mOnSessionListener <span class="pl-k">!=</span> <span class="pl-c1">null</span>) {
            mOnSessionListener<span class="pl-k">.</span>onStreamData(stream, data);
        }
    }
}</pre></div>
</li>
</ol>
</article>