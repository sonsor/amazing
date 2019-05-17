@extends('layouts.default')

@section('title', 'Examples')

@section('content')
<div class="feature-section">
    <div class="container">
        <h1 class="h1-sm">Examples how can use Amazing Neo</h1>
    </div>
</div>
<div class="container">
    <div class="row example-main">
        <div class="col-md-12">
            <div class="code html">
                <h2>Basic Integration</h2>
                <ol>
                    <li>
                        <p>Reference the CSS inside your head tag</p>
                        <pre class="htmlArea"><code>&lt;link <span class="typ">href</span>=<span class="nam">"css/amazing-neo.min.css"</span> <span class="typ">rel</span>=<span class="nam">"stylesheet"</span>&gt;</code></pre>
                    </li>
                    <li>
                        <p>Define the icon with the specified classname</p>
                        <pre class="htmlArea"><code>&lt;i <span class="typ">class</span>=<span class="nam">"an an-anchor"</span>&gt;&lt;/i&gt; </code> <i class="an an-anchor"></i></pre>
                    </li>
                </ol>
            </div>
        </div>
        <div class="code html">
            <div class="col-md-12">
                <div class="example">
                    <h2>You are able to change icon size with default calacess </h2>
                    <div class="col-md-12">
                        <span class="prefix"> an-1x </span>
                        <span class="prefix"> an-2x </span>
                        <span class="prefix"> an-3x </span>
                        <span class="prefix"> an-4x </span>
                        <span class="prefix"> an-5x </span>
                        <span class="prefix"> an-6x </span>
                        <span class="prefix"> an-7x </span>
                        <span class="prefix"> an-8x </span>
                        <span class="prefix"> an-9x </span>
                        <span class="prefix"> an-10x </span>
                        <span class="prefix"> an-11x </span>
                        <span class="prefix"> an-12x </span>
                        <span class="prefix"> an-13x </span>
                        <span class="prefix"> an-14x </span>
                        <span class="prefix"> an-15x </span>
                    </div>
                    <div class="col-md-6">
                        <pre class="htmlArea"><i class="an an-brain an-2x"></i><br /><code>&lt;i <span class="typ">class</span>=<span class="nam">"an an-brain an-2x"</span>&gt;&lt;/i&gt; </code> </pre>
                    </div>

                    <div class="col-md-6">
                        <pre class="htmlArea"><i class="an an-brain an-3x"></i><br /><code>&lt;i <span class="typ">class</span>=<span class="nam">"an an-brain an-3x"</span>&gt;&lt;/i&gt; </code> </pre>
                    </div>

                    <div class="col-md-6">
                        <pre class="htmlArea"><i class="an an-brain an-4x"></i><br /><code>&lt;i <span class="typ">class</span>=<span class="nam">"an an-brain an-4x"</span>&gt;&lt;/i&gt; </code> </pre>
                    </div>

                    <div class="col-md-6">
                        <pre class="htmlArea"><i class="an an-brain an-5x"></i><br /><code>&lt;i <span class="typ">class</span>=<span class="nam">"an an-brain an-5x"</span>&gt;&lt;/i&gt; </code> </pre>
                    </div>

                    <div class="col-md-6">
                        <pre class="htmlArea"><i class="an an-brain an-6x"></i><br /><code>&lt;i <span class="typ">class</span>=<span class="nam">"an an-brain an-6x"</span>&gt;&lt;/i&gt; </code> </pre>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="code html">
                <div class="example">
                    <h2>Animated Icons</h2>
                    <div class="col-md-12">
                        <span class="prefix"> an-spin </span>
                    </div>
                    <div class="col-md-12">
                    <pre class="htmlArea"><i class="an an-sync an-4x an-spin"></i> <i class="an an-loading an-4x an-spin"></i> <i class="an an-refresh an-4x an-spin"></i>
<br /><code>&lt;i <span class="typ">class</span>=<span class="nam">"an an-class an-spin"</span>&gt;&lt;/i&gt; </code> </pre>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="code html">
                <div class="example">
                    <h2>Animation Example two</h2>
                    <div class="col-md-12">
                        <span class="prefix">an-shrink </span>
                    </div>
                    <div class="col-md-12">
                    <pre class="htmlArea strocke"><i class="an an-heart an-4x an-shrink"></i>
<br /><code>&lt;i <span class="typ">class</span>=<span class="nam">"an an-class an-shrink"</span>&gt;&lt;/i&gt; </code> </pre>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="code html">
                <div class="example">
                    <h2>Rotated Icons</h2>
                    <div class="col-md-12">
                        <span class="prefix"> an-rotate-90 </span>
                        <span class="prefix"> an-rotate-180 </span>
                        <span class="prefix"> an-rotate-270 </span>
                    </div>
                    <div class="col-md-12">
                    <pre class="htmlArea"><i class="an an-umbrella an-4x an-rotate-90"></i> <i class="an an-umbrella an-4x an-rotate-180"></i> <i class="an an-umbrella an-4x an-rotate-270"></i>
<br /><code>&lt;i <span class="typ">class</span>=<span class="nam">"an an-class an-rotate-top"</span>&gt;&lt;/i&gt; </code> </pre>
                    </div>
                    <div class="col-md-12">
                        <span class="prefix"> an-flip-horizonta </span>
                        <span class="prefix"> an-flip-vertical </span>
                    </div>
                    <div class="col-md-12">
                    <pre class="htmlArea"> <i class="an an-network-wired an-4x an-flip-horizonta"></i>  <i class="an an-network-wired an-4x an-flip-vertical"></i>
<br /><code>&lt;i <span class="typ">class</span>=<span class="nam">"an an-class an-rotate-top"</span>&gt;&lt;/i&gt; </code> </pre>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="code html">
                <div class="example">
                    <h2>strocke Icons</h2>
                    <div class="col-md-12">
                        <span class="prefix"> an-strocke-1x </span>
                        <span class="prefix"> an-strocke-2x </span>
                    </div>
                    <div class="col-md-12"><pre class="htmlArea stroke"> <i style=" padding:10px;" class="an an-birthday an-4x an-stroke-1x"></i> <i style=" padding:10px;" class="an an-birthday an-4x an-stroke-2x"></i>
<br><code>&lt;i <span class="typ">class</span>=<span class="nam">"an an-class an-stroke-1x"</span>&gt;&lt;/i&gt; </code> </pre>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="code html">
                <div class="example">
                    <h2>List with Icons</h2>
                    <h5>Replace default bullets easily with an-ul & an-li</h5>
                    <div class="col-md-12">
                        <span class="prefix"> an-ul </span>
                        <span class="prefix"> an-li </span>
                    </div>

                    <div class="col-md-12">
                        <div class="view">

                            <div class="row">
                                <div class="col-md-4">
                                    <ul class="an-ul dark">
                                        <li><i class="an-li an an-bullet"></i>List row one</li>
                                        <li><i class="an-li an an-bullet"></i>List row two</li>
                                        <li><i class="an-li an an-bullet"></i>List row three</li>
                                        <li><i class="an-li an an-bullet-diamond"></i>List row four</li>
                                        <li><i class="an-li an an-bullet-diamond"></i>List row five</li>
                                        <li><i class="an-li an an-bullet-diamond"></i>List row six</li>
                                    </ul>
                                </div>

                                <div class="col-md-8">
                                <pre class="htmlArea stroke"><code>&lt;ul <span class="typ">class</span>=<span class="nam">"an-ul"</span>&gt;
&lt;li&gt;
    &lt;i <span class="typ">class</span>=<span class="nam">"an-li an an-bullet"</span>&gt;&lt;/i&gt; <span>List row one</span>
&lt;/li&gt;
&lt;li&gt;
    &lt;i <span class="typ">class</span>=<span class="nam">"an-li an an-bullet"</span>&gt;&lt;/i&gt; List row two
&lt;/li&gt;
&lt;li&gt;
    &lt;i <span class="typ">class</span>=<span class="nam">"an-li an an-bullet"</span>&gt;&lt;/i&gt; List row three
&lt;/li&gt;
&lt;li&gt;
    &lt;i <span class="typ">class</span>=<span class="nam">"an-li an an-bullet-diamond"</span>&gt;&lt;/i&gt; List row four
&lt;/li&gt;
    &lt;li&gt;
    &lt;i <span class="typ">class</span>=<span class="nam">"an-li an an-bullet-diamond"</span>&gt;&lt;/i&gt; List row five
&lt;/li&gt;
&lt;li&gt;
    &lt;i <span class="typ">class</span>=<span class="nam">"an-li an an-bullet-diamond"</span>&gt;&lt;/i&gt; List row six
&lt;/li&gt;
&lt;/ul&gt;</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="code html">
                <div class="example">
                    <div class="code css">
                        <h2>CSS</h2>
                        <div class="col-md-12">
                            <p class="warning">Currently content code update support not available</p>
                            <p>Define the icon with content</p>

                            <pre class="htmlArea"><code>content: <span class="nam">'\66'</span>;
                            <br>font-family: <span class="nam">'amazingneo'</span>;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop