<article class="markdown-body entry-content" itemprop="text"><h1><a id="user-content-carrier-for-android-development-document" class="anchor" aria-hidden="true" href="#carrier-for-android-development-document"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Carrier for Android development document</h1>
<h2><a id="user-content-1-environmental-preparation" class="anchor" aria-hidden="true" href="#1-environmental-preparation"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1 Environmental preparation</h2>
<ol>
<li>Two Android phones with API21 or higher.</li>
<li>A personal computer with AndroidStudio installed.</li>
</ol>
<h2><a id="user-content-2-build-the-project" class="anchor" aria-hidden="true" href="#2-build-the-project"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2 Build the project</h2>
<ol>
<li>Download android.sdk-debug.tar.gz at <a href="https://github.com/elastos/Elastos.NET.Carrier.Android.SDK/releases">https://github.com/elastos/Elastos.NET.Carrier.Android.SDK/releases</a>.</li>
<li>Create a new android project like CarrierDemo in AndroidStudio, select API21 or above for minimum SDK.</li>
<li>Copy the elacarrier.jar and libs/* folders in android.sdk-debug.tar.gz to CarrierDemo/app/libs/.
<a target="_blank" rel="noopener noreferrer" href="/elastos/Elastos.Developer.Doc/blob/master/images/Carrier_For_Android/2.3.png"><img src="/elastos/Elastos.Developer.Doc/raw/master/images/Carrier_For_Android/2.3.png" alt="2.3" style="max-width:100%;"></a></li>
<li>Modify CarrierDemo/app/build.gradle, Add the following to it：
<div class="highlight highlight-source-java"><pre>android {
    <span class="pl-c1">......</span>
    sourceSets {
        main {
            jniLibs<span class="pl-k">.</span>srcDirs <span class="pl-k">=</span> [<span class="pl-s"><span class="pl-pds">'</span>libs<span class="pl-pds">'</span></span>]
        }
    }
}</pre></div>
</li>
<li>Add internet permissions in AndroidManifest.xml.</li>
</ol>
<h2><a id="user-content-3-start-carrier" class="anchor" aria-hidden="true" href="#3-start-carrier"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3 Start Carrier</h2>
<ol>
<li>Create a new DefaultCarrierOptions.java and inherit it from Carrier.Options. Set BootstrapNodes, you can refer to CarrierDemo/app/src/main/java/org/elastos/carrier/demo/DefaultCarrierOptions.java.</li>
<li>Create a new DefaultCarrierHandler.java and inherit from the AbstractCarrierHandler, you can refer to CarrierDemo/app/src/main/java/org/elastos/carrier/demo/DefaultCarrierHandler.java.</li>
<li>Create a new CarrierHelper.java to provide a simple API. The new startCarrier function is used to start the Carrier. Add an instance of DefaultCarrierHandler and DefaultCarrierHandler to this function, and finally call Carrier.start(). The implementation can refer to CarrierDemo/app/src/main/java/org/elastos/carrier/demo/CarrierHelper.java.
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
<li>Call CarrierHelper.startCarrier() in MainActivity.java.</li>
<li>Override the onConnection() function in DefaultCarrierHandler.java to listen for the connection state of the Carrier and BootstrapNode (Online/Offline).</li>
<li>Run CarrierDemo and the carrier will start up.</li>
</ol>
<h2><a id="user-content-4-display-and-scan-address-optional" class="anchor" aria-hidden="true" href="#4-display-and-scan-address-optional"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>4 Display and scan address (optional)</h2>
<p>In order to add friends quickly, the Scan QR code function has been added to CarrierDemo. This function is independent of Carrier usage and can be ignored.</p>
<ol>
<li>Display the address. Add the MyAddr button and click to display the QR code. For details, see the showAddress() function of MainActivity.java.</li>
<li>Scan your friend's address. Add CAMERA, VIBRATE and other permissions, add ScanAddr button, and click to scan the QR code. The specific implementation can refer to the scanAddress() function of MainActivity.java.</li>
</ol>
<h2><a id="user-content-5-add-a-friend" class="anchor" aria-hidden="true" href="#5-add-a-friend"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>5 Add a friend</h2>
<ol>
<li>The two phones are called A and B respectively. CarrierDemo is installed.</li>
<li>When both A and B are in the Online state, A obtains the B's friend address and calls the addFriend() function to add B. This function uses B's Address. See addHelp() for CarrierHelper.java.
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
<li>When A calls addFriend(), the added party receives the onFriendRequest() callback, in which the Carrier converts A's Address to UserId, from which Carrier will use UserId for identification. This function can be overridden in DefaultCarrierHandler.java for friend authentication processing. Refer to acceptHelp() of CarrierHelper.java.
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
<li>After passing B's authentication, A will receive the onFriendAdded() callback, which can be overridden in DefaultCarrierHandler.java for subsequent processing.</li>
<li>Existing friends can't be added repeatedly. You can get the list of friends through the getFriends() function.</li>
</ol>
<h2><a id="user-content-6-sending-a-message" class="anchor" aria-hidden="true" href="#6-sending-a-message"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>6 Sending a message</h2>
<ol>
<li>After both A and B are online, the other party will receive the onFriendConnection() callback, which can be overridden in DefaultCarrierHandler.java for subsequent processing.
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
<li>When both A and B are in the Online state, you can send a message to the other party via the sendFriendMessage() function. You can refer to the SendMessage() of CarrierHelper.java.
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
<li>When A sends a message to B, B receives the onFriendMessage() callback, which can be overridden in DefaultCarrierHandler.java for message processing.
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
<h2><a id="user-content-7-create-session" class="anchor" aria-hidden="true" href="#7-create-session"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>7 Create Session</h2>
<ol>
<li>
<p>Carrier can establish a P2P connection through session.</p>
</li>
<li>
<p>First you need to initialize the manager of the Session. The manager's callback is triggered when another party makes a connection request. This can be done with reference to the initSessionManager() function of CarrierSessionHelper.java.</p>
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
<p>The session state can be obtained through the StreamHandler.onStateChanged() callback. This function can be overridden in DefaultSessionHandler.java for state processing.</p>
</li>
<li>
<p>A creates session, which can be implemented by referring to the newSessionAndStream() function of CarrierSessionHelper.java.</p>
<ul>
<li>Initialize SessionManager and call Manager.getInstance(Carrier.getInstance(), sessionHandler) to initialize.</li>
<li>The Manager.newSession() function creates a session.</li>
<li>Add a Stream via the Session.addStream function.</li>
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
<p>After creating the session and initializing it, after calling the Session.request() function, B will receive the manager's onSessionRequest() callback. In the callback, the newSessionAndStream() function is also called to establish the B-side session.</p>
</li>
<li>
<p>After creating the session and initializing it, call Session.replyRequest() and A will receive a SessionRequestCompleteHandler.onCompletion() callback.</p>
</li>
<li>
<p>When B's Stream state becomes TransportReady, Session.start() is called.</p>
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
<p>A waits for onCompletion() and calls Session.start().</p>
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
<p>When the Stream status of both A and B become Connected, the Session connection is created successfully.</p>
</li>
</ol>
<h2><a id="user-content-8-sending-data-via-session" class="anchor" aria-hidden="true" href="#8-sending-data-via-session"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>8 Sending data via Session</h2>
<ol>
<li>When both Sessions A and B are in the Connected state, you can send data to the other party through the Stream.writeData() function. Refer to sendData() of CarrierSessionHelper.java.
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
<li>When A sends data to B, B will receive the onStreamData() callback, which can be overridden in DefaultSessionHandler.java for data processing.
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