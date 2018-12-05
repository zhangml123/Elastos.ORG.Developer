<article class="markdown-body entry-content" itemprop="text"><h1><a id="user-content-table-of-contents" class="anchor" aria-hidden="true" href="#table-of-contents"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Table of Contents</h1>
<ol>
<li>Introduction to Trinity</li>
<li>Definition of DApp</li>
<li>Setup Elastos Dapp Development Environment</li>
<li>How to create Dapp</li>
<li>Run the Dapp</li>
<li>How to develop Ionic App</li>
<li>Plugin for Trinity</li>
</ol>
<br>
<h2><a id="user-content-1-introduction-to-trinity" class="anchor" aria-hidden="true" href="#1-introduction-to-trinity"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1. Introduction to Trinity</h2>
<ul>
<li>Trinity is a container that provides Elastos DApp running environment. Based on the trusted running environment of Elastos Runtime, Trinity provides a reliable running environment for applications to protect digital contents.</li>
<li>Trinity makes developers develop their App easliy by using Ionic frameworks.  Developers can create Elastos DApp package directly in the Ionic export directory. The created DApp can run on Android, IOS, Windows, Linux devices.</li>
<li>Ionic is a powerful HTML5 application development framework (HTML5 Hybrid Mobile App Framework). The developers can use HTML, CSS and Javascript web develoment skills to create an App with near native  experiences. Ionic framework focus on outlook, users' experiences and interaction. It is most suitable for devlopment of HTML5 hybrid mobile App.</li>
<li>Ionic is a lightweight UI library. It is responsive with modern and beautiful interfaces.</li>
</ul>
<h3><a id="user-content-11-features-of-trinity" class="anchor" aria-hidden="true" href="#11-features-of-trinity"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.1. Features of Trinity</h3>
<p><a target="_blank" rel="noopener noreferrer" href="/elastos/Elastos.Developer.Doc/blob/master/Ignore/images/DApp_manual_1.png"><img src="/elastos/Elastos.Developer.Doc/raw/master/Ignore/images/DApp_manual_1.png" alt="DApp_manual_1" style="max-width:100%;"></a></p>
<h3><a id="user-content-12-advantages-of-trinity" class="anchor" aria-hidden="true" href="#12-advantages-of-trinity"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.2. Advantages of Trinity</h3>
<ul>
<li>The Dapp run on users' devices which permanently owned by them</li>
<li>DApp does not rely on the centralized server</li>
<li>Digital assets ownerships are recorded in the Blockchain using decentralized transactions</li>
<li>The DApp can be freely packaged and innovated by users</li>
<li>Protect the digital assets. The assets owensership will not be disclosed and destroyed</li>
</ul>
<h3><a id="user-content-13-trinity-architecture" class="anchor" aria-hidden="true" href="#13-trinity-architecture"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>1.3. Trinity Architecture</h3>
<p><a target="_blank" rel="noopener noreferrer" href="/elastos/Elastos.Developer.Doc/blob/master/Ignore/images/DApp_manual_2.png"><img src="/elastos/Elastos.Developer.Doc/raw/master/Ignore/images/DApp_manual_2.png" alt="DApp_manual_2" style="max-width:100%;"></a>
<br></p>
<h2><a id="user-content-2-definition-of-dapp" class="anchor" aria-hidden="true" href="#2-definition-of-dapp"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>2. Definition of DApp</h2>
<p>There are two components in DApp: The DApp owenership and DApp document.</p>
<p>The ownership of DApp is recorded in Blockchain like bitcoin in the personal wallet. The DApp cannot run if there is no ownership in the wallet. But of course the DApp can configure as free app for everyone.</p>
<p>You can resell the DApp similar to  bitcoin. Of course you must pay for this transaction similar to transfer of token. This transfer can be either centralized or decentralized.</p>
<p>There are various ways to distribute the DApp such as Yahoo Yellow page, different App Store, Cloud drives to peer to peer.
<br></p>
<h2><a id="user-content-3-setup-elastos-dapp-development-environment" class="anchor" aria-hidden="true" href="#3-setup-elastos-dapp-development-environment"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>3. Setup Elastos DApp Development Environment</h2>
<p><a target="_blank" rel="noopener noreferrer" href="/elastos/Elastos.Developer.Doc/blob/master/Ignore/images/DApp_manual_3.png"><img src="/elastos/Elastos.Developer.Doc/raw/master/Ignore/images/DApp_manual_3.png" alt="DApp_manual_3" style="max-width:100%;"></a>
<br></p>
<h2><a id="user-content-4-how-to-create-dapp" class="anchor" aria-hidden="true" href="#4-how-to-create-dapp"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>4. How to create Dapp</h2>
<p><a target="_blank" rel="noopener noreferrer" href="/elastos/Elastos.Developer.Doc/blob/master/Ignore/images/DApp_manual_4.png"><img src="/elastos/Elastos.Developer.Doc/raw/master/Ignore/images/DApp_manual_4.png" alt="DApp_manual_4" style="max-width:100%;"></a>
<br></p>
<h2><a id="user-content-5-run-the-dapp" class="anchor" aria-hidden="true" href="#5-run-the-dapp"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>5. Run the DApp</h2>
<p><a target="_blank" rel="noopener noreferrer" href="/elastos/Elastos.Developer.Doc/blob/master/Ignore/images/DApp_manual_5.png"><img src="/elastos/Elastos.Developer.Doc/raw/master/Ignore/images/DApp_manual_5.png" alt="DApp_manual_5" style="max-width:100%;"></a></p>
<h3><a id="user-content-51-run-inside-trinity" class="anchor" aria-hidden="true" href="#51-run-inside-trinity"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>5.1. Run inside Trinity</h3>
<ol>
<li>
<p>Install Trinity</p>
</li>
<li>
<p>Use Ionic to compile a encrypted epk document
<a href="https://github.com/elastos/Elastos.ORG.Wallet.Mobile/tree/ds/build">https://github.com/elastos/Elastos.ORG.Wallet.Mobile/tree/ds/build</a></p>
<pre><code>ionic cordova build android --prod &amp;&amp; node epk xxx
</code></pre>
</li>
<li>
<p>Copy or download the epk to the device</p>
</li>
<li>
<p>Import the epk document through Trinity, then run on the desktop</p>
</li>
</ol>
<p><a target="_blank" rel="noopener noreferrer" href="/elastos/Elastos.Developer.Doc/blob/master/Ignore/images/DApp_manual_6.png"><img src="/elastos/Elastos.Developer.Doc/raw/master/Ignore/images/DApp_manual_6.png" alt="DApp_manual_6" style="max-width:100%;"></a> <a target="_blank" rel="noopener noreferrer" href="/elastos/Elastos.Developer.Doc/blob/master/Ignore/images/DApp_manual_7.png"><img src="/elastos/Elastos.Developer.Doc/raw/master/Ignore/images/DApp_manual_7.png" alt="DApp_manual_7" style="max-width:100%;"></a>
<br></p>
<h2><a id="user-content-6-develop-ionic-app" class="anchor" aria-hidden="true" href="#6-develop-ionic-app"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>6. Develop Ionic App</h2>
<h3><a id="user-content-61-ui-components" class="anchor" aria-hidden="true" href="#61-ui-components"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>6.1. UI Components</h3>
<ul>
<li>Ionic apps are made of high-level building blocks called components. Components allow you to quickly construct an interface for your app. Ionic comes with a number of components, including modals, popups, and cards. Check out the examples below to see what each component looks like and to learn how to use each one. Once you’re familiar with the basics, head over to the API docs for ideas on how to customize each component.</li>
</ul>
<h3><a id="user-content-62-native-apis" class="anchor" aria-hidden="true" href="#62-native-apis"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>6.2. Native APIs</h3>
<p><a target="_blank" rel="noopener noreferrer" href="/elastos/Elastos.Developer.Doc/blob/master/Ignore/images/DApp_manual_8.png"><img src="/elastos/Elastos.Developer.Doc/raw/master/Ignore/images/DApp_manual_8.png" alt="DApp_manual_8" style="max-width:100%;"></a>
<br></p>
<h2><a id="user-content-7-plugin-for-trinity" class="anchor" aria-hidden="true" href="#7-plugin-for-trinity"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>7. Plugin for Trinity</h2>
<p><a target="_blank" rel="noopener noreferrer" href="/elastos/Elastos.Developer.Doc/blob/master/Ignore/images/DApp_manual_9.png"><img src="/elastos/Elastos.Developer.Doc/raw/master/Ignore/images/DApp_manual_9.png" alt="DApp_manual_9" style="max-width:100%;"></a></p>
</article>