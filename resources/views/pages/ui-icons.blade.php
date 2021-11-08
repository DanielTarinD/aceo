@extends('layouts.default')

@section('title', 'Icons')

@push('scripts')
	<script src="/assets/plugins/@highlightjs/cdn-assets/highlight.min.js"></script>
	<script src="/assets/js/demo/render.highlight.js"></script>
@endpush

@section('content')
	<!-- BEGIN breadcrumb -->
	<ol class="breadcrumb float-xl-end">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">UI Elements</a></li>
		<li class="breadcrumb-item active">Icons</li>
	</ol>
	<!-- END breadcrumb -->
	<!-- BEGIN page-header -->
	<h1 class="page-header">Icons <small>FontAwesome v5.15.3 with 1,609 Free Icons</small></h1>
	<!-- END page-header -->
	
	<!-- BEGIN row -->
	<div class="row">
		<!-- BEGIN col-6 -->
		<div class="col-xl-6">
			<!-- BEGIN panel -->
			<div class="panel panel-inverse" data-sortable-id="ui-icons-1">
				<div class="panel-heading">
					<h4 class="panel-title">Icon Sizes</h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="alert alert-info rounded-0 mb-0">
					Font Awesome css has been <b>compiled</b> into <code>vendor.min.css</code>. As long as you include the <code>vendor.min.css</code>, you should be able to use Font Awesome in your page.
				</div>
				<div class="panel-body text-inverse">
					<i class="fas fa-camera-retro fa-xs"></i>
					<i class="fas fa-camera-retro fa-sm"></i>
					<i class="fas fa-camera-retro fa-lg"></i>
					<i class="fas fa-camera-retro fa-2x"></i>
					<i class="fas fa-camera-retro fa-3x"></i>
					<i class="fas fa-camera-retro fa-5x"></i>
					<i class="fas fa-camera-retro fa-7x"></i>
					<i class="fas fa-camera-retro fa-10x"></i>
				</div>
				<div class="hljs-wrapper">
					<pre><code class="html">&lt;i class="fas fa-camera-retro fa-xs"&gt;&lt;/i&gt;
&lt;i class="fas fa-camera-retro fa-sm"&gt;&lt;/i&gt;
&lt;i class="fas fa-camera-retro fa-lg"&gt;&lt;/i&gt;
&lt;i class="fas fa-camera-retro fa-2x"&gt;&lt;/i&gt;
&lt;i class="fas fa-camera-retro fa-3x"&gt;&lt;/i&gt;
&lt;i class="fas fa-camera-retro fa-5x"&gt;&lt;/i&gt;
&lt;i class="fas fa-camera-retro fa-7x"&gt;&lt;/i&gt;
&lt;i class="fas fa-camera-retro fa-10x"&gt;&lt;/i&gt;</code></pre>
				</div>
			</div>
			<!-- END panel -->
			<!-- BEGIN panel -->
			<div class="panel panel-inverse" data-sortable-id="ui-icons-2">
				<div class="panel-heading">
					<h4 class="panel-title">Fixed Width Icons</h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="panel-body fs-14px">
					<i class="fas fa-home fa-fw"></i> Home<br />
					<i class="fas fa-info fa-fw"></i> Info<br />
					<i class="fas fa-book fa-fw"></i> Library<br />
					<i class="fas fa-pencil-alt fa-fw"></i> Applications<br />
					<i class="fas fa-cog fa-fw"></i> Settings
				</div>
				<div class="hljs-wrapper">
					<pre><code class="html">&lt;i class="fas fa-home fa-fw"&gt;&lt;/i&gt; Home
&lt;i class="fas fa-info fa-fw"&gt;&lt;/i&gt; Info
&lt;i class="fas fa-book fa-fw"&gt;&lt;/i&gt; Library
&lt;i class="fas fa-pencil-alt fa-fw"&gt;&lt;/i&gt; Applications
&lt;i class="fas fa-cog fa-fw"&gt;&lt;/i&gt; Settings</code></pre>
				</div>
			</div>
			<!-- END panel -->
			<!-- BEGIN panel -->
			<div class="panel panel-inverse" data-sortable-id="ui-icons-3">
				<div class="panel-heading">
					<h4 class="panel-title">Animated Icons</h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="panel-body">
					<div class="fa-3x">
						<i class="fas fa-spinner fa-spin"></i>
						<i class="fas fa-circle-notch fa-spin"></i>
						<i class="fas fa-sync fa-spin"></i>
						<i class="fas fa-cog fa-spin"></i>
						<i class="fas fa-spinner fa-pulse"></i>
					</div>
				</div>
				<div class="hljs-wrapper">
					<pre><code class="html">&lt;div class="fa-3x"&gt;
  &lt;i class="fas fa-spinner fa-spin"&gt;&lt;/i&gt;
  &lt;i class="fas fa-circle-notch fa-spin"&gt;&lt;/i&gt;
  &lt;i class="fas fa-sync fa-spin"&gt;&lt;/i&gt;
  &lt;i class="fas fa-cog fa-spin"&gt;&lt;/i&gt;
  &lt;i class="fas fa-spinner fa-pulse"&gt;&lt;/i&gt;
&lt;/div&gt;</code></pre>
				</div>
			</div>
			<!-- END panel -->
			<!-- BEGIN panel -->
			<div class="panel panel-inverse" data-sortable-id="ui-icons-4">
				<div class="panel-heading">
					<h4 class="panel-title">Power Transforms: Rotating & Flipping</h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="panel-body fs-14px">
					<div class="fa-3x">
						<i class="fas fa-arrow-alt-circle-right"></i>
						<i class="fas fa-arrow-alt-circle-right fa-rotate-90"></i>
						<i class="fas fa-arrow-alt-circle-right fa-rotate-180"></i>
						<i class="fas fa-arrow-alt-circle-right fa-rotate-270"></i>
						<i class="fas fa-arrow-alt-circle-right fa-flip-horizontal"></i>
						<i class="fas fa-arrow-alt-circle-right fa-flip-vertical"></i>
					</div>
				</div>
				<div class="hljs-wrapper">
					<pre><code class="html">&lt;div class="fa-3x"&gt;
  &lt;i class="fas fa-arrow-alt-circle-right"&gt;&lt;/i&gt;
  &lt;i class="fas fa-arrow-alt-circle-right fa-rotate-90"&gt;&lt;/i&gt;
  &lt;i class="fas fa-arrow-alt-circle-right fa-rotate-180"&gt;&lt;/i&gt;
  &lt;i class="fas fa-arrow-alt-circle-right fa-rotate-270"&gt;&lt;/i&gt;
  &lt;i class="fas fa-arrow-alt-circle-right fa-flip-horizontal"&gt;&lt;/i&gt;
  &lt;i class="fas fa-arrow-alt-circle-right fa-flip-vertical"&gt;&lt;/i&gt;
&lt;/div&gt;</code></pre>
				</div>
			</div>
			<!-- END panel -->
		</div>
		<!-- END col-6 -->
		<!-- BEGIN col-6 -->
		<div class="col-xl-6">
			<!-- BEGIN panel -->
			<div class="panel panel-inverse" data-sortable-id="ui-icons-5">
				<div class="panel-heading">
					<h4 class="panel-title">List Icons</h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="panel-body fs-14px">
					<ul class="fa-ul">
						<li><span class="fa-li"><i class="fas fa-check-square text-primary"></i></span>List icons can</li>
						<li><span class="fa-li"><i class="fas fa-check-square text-muted"></i></span>be used to</li>
						<li><span class="fa-li"><i class="fas fa-spinner fa-pulse text-success"></i></span>replace bullets</li>
						<li><span class="fa-li"><i class="far fa-square text-inverse"></i></span>in lists</li>
					</ul>
				</div>
				<div class="hljs-wrapper">
					<pre><code class="html">&lt;ul class="fa-ul"&gt;
  &lt;li&gt;
    &lt;span class="fa-li"&gt;&lt;i class="fas fa-check-square"&gt;&lt;/i&gt;&lt;/span&gt;
    List icons can
  &lt;/li&gt;
  &lt;li&gt;
    &lt;span class="fa-li"&gt;&lt;i class="fas fa-check-square"&gt;&lt;/i&gt;&lt;/span&gt;
    be used to
  &lt;/li&gt;
  &lt;li&gt;
    &lt;span class="fa-li"&gt;&lt;i class="fas fa-spinner fa-pulse"&gt;&lt;/i&gt;&lt;/span&gt;
    replace bullets
  &lt;/li&gt;
  &lt;li&gt;
    &lt;span class="fa-li"&gt;&lt;i class="far fa-square"&gt;&lt;/i&gt;&lt;/span&gt;
    in lists
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>
				</div>
			</div>
			<!-- END panel -->
			<!-- BEGIN panel -->
			<div class="panel panel-inverse" data-sortable-id="ui-icons-6">
				<div class="panel-heading">
					<h4 class="panel-title">Bordered & Pulled Icons</h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="panel-body fs-14px">
					<i class="fas fa-quote-left fa-3x float-start me-3 fa-border"></i>
					Gatsby believed in the green light, the orgastic future that year by year recedes before us.
					It eluded us then, but that’s no matter — tomorrow we will run faster, stretch our arms further...
					And one fine morning — So we beat on, boats against the current, borne back ceaselessly into the past.
				</div>
				<div class="hljs-wrapper">
					<pre><code class="html">&lt;i class="fas fa-quote-left fa-2x float-start me-3 fa-border"&gt;&lt;/i&gt;
Gatsby believed in the green light, the orgastic future that year by year recedes before us. It eluded us then, but that’s no matter — tomorrow we will run faster, stretch our arms further... And one fine morning — So we beat on, boats against the current, borne back ceaselessly into the past.</code></pre>
				</div>
			</div>
			<!-- END panel -->
			<!-- BEGIN panel -->
			<div class="panel panel-inverse" data-sortable-id="ui-icons-7">
				<div class="panel-heading">
					<h4 class="panel-title">Stacked Icons</h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="panel-body fs-14px">
					<span class="fa-stack fa-2x">
						<i class="far fa-square fa-stack-2x"></i>
						<i class="fab fa-twitter fa-stack-1x"></i>
					</span>
					<span class="fa-stack fa-2x">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-flag fa-stack-1x fa-inverse"></i>
					</span>
					<span class="fa-stack fa-2x">
						<i class="fa fa-square fa-stack-2x"></i>
						<i class="fa fa-terminal fa-stack-1x fa-inverse"></i>
					</span>
					<span class="fa-stack fa-2x">
						<i class="fa fa-camera fa-stack-1x"></i>
						<i class="fa fa-ban fa-stack-2x"></i>
					</span>
					<span class="fa-stack fa-2x">
						<i class="far fa-circle fa-stack-2x"></i>
						<i class="fa fa-cog fa-stack-1x"></i>
					</span>
				</div>
				<div class="hljs-wrapper">
					<pre><code class="html">&lt;span class="fa-stack fa-2x text-primary"&gt;
  &lt;i class="far fa-square fa-stack-2x"&gt;&lt;/i&gt;
  &lt;i class="fab fa-twitter fa-stack-1x"&gt;&lt;/i&gt;
&lt;/span&gt;
&lt;span class="fa-stack fa-2x"&gt;
  &lt;i class="fa fa-circle fa-stack-2x"&gt;&lt;/i&gt;
  &lt;i class="fa fa-flag fa-stack-1x fa-inverse"&gt;&lt;/i&gt;
&lt;/span&gt;
&lt;span class="fa-stack fa-2x"&gt;
  &lt;i class="fa fa-square fa-stack-2x"&gt;&lt;/i&gt;
  &lt;i class="fa fa-terminal fa-stack-1x fa-inverse"&gt;&lt;/i&gt;
&lt;/span&gt;
&lt;span class="fa-stack fa-2x"&gt;
  &lt;i class="fa fa-camera fa-stack-1x"&gt;&lt;/i&gt;
  &lt;i class="fa fa-ban fa-stack-2x"&gt;&lt;/i&gt;
&lt;/span&gt;
&lt;span class="fa-stack fa-2x"&gt;
  &lt;i class="far fa-circle fa-stack-2x"&gt;&lt;/i&gt;
  &lt;i class="fa fa-cog fa-stack-1x"&gt;&lt;/i&gt;
&lt;/span&gt;</code></pre>
				</div>
			</div>
			<!-- END panel -->
		</div>
		<!-- END col-6 -->
	</div>
	<!-- END row -->
	
	<!-- BEGIN row -->
	<div class="row">
		<!-- BEGIN col-6 -->
		<div class="col-xl-6">
			<h3 class="mb-10px"><b>Solid</b></h3>
			<p class="mb-20px">
				Solid type Font Awesome Icon prefix 
				<code>fas fa-*</code>
			</p>
			<!-- BEGIN row -->
			<div class="row mb-20px fs-13px">
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-address-book"></i> <span class="text-inverse">address-book</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-address-card"></i> <span class="text-inverse">address-card</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-adjust"></i> <span class="text-inverse">adjust</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-align-center"></i> <span class="text-inverse">align-center</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-align-justify"></i> <span class="text-inverse">align-justify</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-align-left"></i> <span class="text-inverse">align-left</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-align-right"></i> <span class="text-inverse">align-right</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-ambulance"></i> <span class="text-inverse">ambulance</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-american-sign-language-interpreting"></i> <span class="text-inverse">american-sign-language-interpreting</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-anchor"></i> <span class="text-inverse">anchor</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-angle-double-down"></i> <span class="text-inverse">angle-double-down</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-angle-double-left"></i> <span class="text-inverse">angle-double-left</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-angle-double-right"></i> <span class="text-inverse">angle-double-right</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-angle-double-up"></i> <span class="text-inverse">angle-double-up</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-angle-down"></i> <span class="text-inverse">angle-down</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-angle-left"></i> <span class="text-inverse">angle-left</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-angle-right"></i> <span class="text-inverse">angle-right</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-angle-up"></i> <span class="text-inverse">angle-up</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-archive"></i> <span class="text-inverse">archive</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-arrow-alt-circle-down"></i> <span class="text-inverse">arrow-alt-circle-down</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-arrow-alt-circle-left"></i> <span class="text-inverse">arrow-alt-circle-left</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-arrow-alt-circle-right"></i> <span class="text-inverse">arrow-alt-circle-right</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-arrow-alt-circle-up"></i> <span class="text-inverse">arrow-alt-circle-up</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-arrow-circle-down"></i> <span class="text-inverse">arrow-circle-down</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-arrow-circle-left"></i> <span class="text-inverse">arrow-circle-left</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-arrow-circle-right"></i> <span class="text-inverse">arrow-circle-right</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-arrow-circle-up"></i> <span class="text-inverse">arrow-circle-up</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-arrow-down"></i> <span class="text-inverse">arrow-down</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-arrow-left"></i> <span class="text-inverse">arrow-left</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-arrow-right"></i> <span class="text-inverse">arrow-right</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-arrow-up"></i> <span class="text-inverse">arrow-up</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-arrows-alt"></i> <span class="text-inverse">arrows-alt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-arrows-alt-h"></i> <span class="text-inverse">arrows-alt-h</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-arrows-alt-v"></i> <span class="text-inverse">arrows-alt-v</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-assistive-listening-systems"></i> <span class="text-inverse">assistive-listening-systems</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-asterisk"></i> <span class="text-inverse">asterisk</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-at"></i> <span class="text-inverse">at</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-audio-description"></i> <span class="text-inverse">audio-description</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-backward"></i> <span class="text-inverse">backward</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-balance-scale"></i> <span class="text-inverse">balance-scale</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-ban"></i> <span class="text-inverse">ban</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-barcode"></i> <span class="text-inverse">barcode</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-bars"></i> <span class="text-inverse">bars</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-bath"></i> <span class="text-inverse">bath</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-battery-empty"></i> <span class="text-inverse">battery-empty</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-battery-full"></i> <span class="text-inverse">battery-full</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-battery-half"></i> <span class="text-inverse">battery-half</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-battery-quarter"></i> <span class="text-inverse">battery-quarter</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-battery-three-quarters"></i> <span class="text-inverse">battery-three-quarters</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-bed"></i> <span class="text-inverse">bed</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-beer"></i> <span class="text-inverse">beer</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-bell"></i> <span class="text-inverse">bell</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-bell-slash"></i> <span class="text-inverse">bell-slash</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-bicycle"></i> <span class="text-inverse">bicycle</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-binoculars"></i> <span class="text-inverse">binoculars</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-birthday-cake"></i> <span class="text-inverse">birthday-cake</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-blind"></i> <span class="text-inverse">blind</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-bold"></i> <span class="text-inverse">bold</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-bolt"></i> <span class="text-inverse">bolt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-bomb"></i> <span class="text-inverse">bomb</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-book"></i> <span class="text-inverse">book</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-bookmark"></i> <span class="text-inverse">bookmark</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-braille"></i> <span class="text-inverse">braille</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-briefcase"></i> <span class="text-inverse">briefcase</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-bug"></i> <span class="text-inverse">bug</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-building"></i> <span class="text-inverse">building</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-bullhorn"></i> <span class="text-inverse">bullhorn</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-bullseye"></i> <span class="text-inverse">bullseye</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-bus"></i> <span class="text-inverse">bus</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-calculator"></i> <span class="text-inverse">calculator</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-calendar"></i> <span class="text-inverse">calendar</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-calendar-alt"></i> <span class="text-inverse">calendar-alt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-calendar-check"></i> <span class="text-inverse">calendar-check</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-calendar-minus"></i> <span class="text-inverse">calendar-minus</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-calendar-plus"></i> <span class="text-inverse">calendar-plus</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-calendar-times"></i> <span class="text-inverse">calendar-times</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-camera"></i> <span class="text-inverse">camera</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-camera-retro"></i> <span class="text-inverse">camera-retro</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-car"></i> <span class="text-inverse">car</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-caret-down"></i> <span class="text-inverse">caret-down</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-caret-left"></i> <span class="text-inverse">caret-left</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-caret-right"></i> <span class="text-inverse">caret-right</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-caret-square-down"></i> <span class="text-inverse">caret-square-down</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-caret-square-left"></i> <span class="text-inverse">caret-square-left</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-caret-square-right"></i> <span class="text-inverse">caret-square-right</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-caret-square-up"></i> <span class="text-inverse">caret-square-up</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-caret-up"></i> <span class="text-inverse">caret-up</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-cart-arrow-down"></i> <span class="text-inverse">cart-arrow-down</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-cart-plus"></i> <span class="text-inverse">cart-plus</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-certificate"></i> <span class="text-inverse">certificate</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-chart-area"></i> <span class="text-inverse">chart-area</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-chart-bar"></i> <span class="text-inverse">chart-bar</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-chart-line"></i> <span class="text-inverse">chart-line</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-chart-pie"></i> <span class="text-inverse">chart-pie</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-check"></i> <span class="text-inverse">check</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-check-circle"></i> <span class="text-inverse">check-circle</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-check-square"></i> <span class="text-inverse">check-square</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-chevron-circle-down"></i> <span class="text-inverse">chevron-circle-down</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-chevron-circle-left"></i> <span class="text-inverse">chevron-circle-left</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-chevron-circle-right"></i> <span class="text-inverse">chevron-circle-right</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-chevron-circle-up"></i> <span class="text-inverse">chevron-circle-up</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-chevron-down"></i> <span class="text-inverse">chevron-down</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-chevron-left"></i> <span class="text-inverse">chevron-left</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-chevron-right"></i> <span class="text-inverse">chevron-right</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-chevron-up"></i> <span class="text-inverse">chevron-up</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-child"></i> <span class="text-inverse">child</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-circle"></i> <span class="text-inverse">circle</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-circle-notch"></i> <span class="text-inverse">circle-notch</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-clipboard"></i> <span class="text-inverse">clipboard</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-clock"></i> <span class="text-inverse">clock</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-clone"></i> <span class="text-inverse">clone</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-closed-captioning"></i> <span class="text-inverse">closed-captioning</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-cloud"></i> <span class="text-inverse">cloud</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-cloud-download-alt"></i> <span class="text-inverse">cloud-download-alt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-cloud-upload-alt"></i> <span class="text-inverse">cloud-upload-alt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-code"></i> <span class="text-inverse">code</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-code-branch"></i> <span class="text-inverse">code-branch</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-coffee"></i> <span class="text-inverse">coffee</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-cog"></i> <span class="text-inverse">cog</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-cogs"></i> <span class="text-inverse">cogs</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-columns"></i> <span class="text-inverse">columns</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-comment"></i> <span class="text-inverse">comment</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-comment-alt"></i> <span class="text-inverse">comment-alt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-comments"></i> <span class="text-inverse">comments</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-compass"></i> <span class="text-inverse">compass</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-compress"></i> <span class="text-inverse">compress</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-copy"></i> <span class="text-inverse">copy</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-copyright"></i> <span class="text-inverse">copyright</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-credit-card"></i> <span class="text-inverse">credit-card</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-crop"></i> <span class="text-inverse">crop</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-crosshairs"></i> <span class="text-inverse">crosshairs</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-cube"></i> <span class="text-inverse">cube</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-cubes"></i> <span class="text-inverse">cubes</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-cut"></i> <span class="text-inverse">cut</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-database"></i> <span class="text-inverse">database</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-deaf"></i> <span class="text-inverse">deaf</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-desktop"></i> <span class="text-inverse">desktop</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-dollar-sign"></i> <span class="text-inverse">dollar-sign</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-dot-circle"></i> <span class="text-inverse">dot-circle</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-download"></i> <span class="text-inverse">download</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-edit"></i> <span class="text-inverse">edit</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-eject"></i> <span class="text-inverse">eject</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-ellipsis-h"></i> <span class="text-inverse">ellipsis-h</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-ellipsis-v"></i> <span class="text-inverse">ellipsis-v</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-envelope"></i> <span class="text-inverse">envelope</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-envelope-open"></i> <span class="text-inverse">envelope-open</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-envelope-square"></i> <span class="text-inverse">envelope-square</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-eraser"></i> <span class="text-inverse">eraser</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-euro-sign"></i> <span class="text-inverse">euro-sign</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-exchange-alt"></i> <span class="text-inverse">exchange-alt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-exclamation"></i> <span class="text-inverse">exclamation</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-exclamation-circle"></i> <span class="text-inverse">exclamation-circle</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-exclamation-triangle"></i> <span class="text-inverse">exclamation-triangle</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-expand"></i> <span class="text-inverse">expand</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-expand-arrows-alt"></i> <span class="text-inverse">expand-arrows-alt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-external-link-alt"></i> <span class="text-inverse">external-link-alt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-external-link-square-alt"></i> <span class="text-inverse">external-link-square-alt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-eye"></i> <span class="text-inverse">eye</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-eye-dropper"></i> <span class="text-inverse">eye-dropper</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-eye-slash"></i> <span class="text-inverse">eye-slash</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-fast-backward"></i> <span class="text-inverse">fast-backward</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-fast-forward"></i> <span class="text-inverse">fast-forward</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-fax"></i> <span class="text-inverse">fax</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-female"></i> <span class="text-inverse">female</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-fighter-jet"></i> <span class="text-inverse">fighter-jet</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-file"></i> <span class="text-inverse">file</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-file-alt"></i> <span class="text-inverse">file-alt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-file-archive"></i> <span class="text-inverse">file-archive</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-file-audio"></i> <span class="text-inverse">file-audio</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-file-code"></i> <span class="text-inverse">file-code</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-file-excel"></i> <span class="text-inverse">file-excel</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-file-image"></i> <span class="text-inverse">file-image</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-file-pdf"></i> <span class="text-inverse">file-pdf</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-file-powerpoint"></i> <span class="text-inverse">file-powerpoint</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-file-video"></i> <span class="text-inverse">file-video</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-file-word"></i> <span class="text-inverse">file-word</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-film"></i> <span class="text-inverse">film</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-filter"></i> <span class="text-inverse">filter</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-fire"></i> <span class="text-inverse">fire</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-fire-extinguisher"></i> <span class="text-inverse">fire-extinguisher</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-flag"></i> <span class="text-inverse">flag</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-flag-checkered"></i> <span class="text-inverse">flag-checkered</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-flask"></i> <span class="text-inverse">flask</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-folder"></i> <span class="text-inverse">folder</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-folder-open"></i> <span class="text-inverse">folder-open</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-font"></i> <span class="text-inverse">font</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-forward"></i> <span class="text-inverse">forward</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-frown"></i> <span class="text-inverse">frown</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-futbol"></i> <span class="text-inverse">futbol</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-gamepad"></i> <span class="text-inverse">gamepad</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-gavel"></i> <span class="text-inverse">gavel</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-gem"></i> <span class="text-inverse">gem</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-genderless"></i> <span class="text-inverse">genderless</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-gift"></i> <span class="text-inverse">gift</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-glass-martini"></i> <span class="text-inverse">glass-martini</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-globe"></i> <span class="text-inverse">globe</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-graduation-cap"></i> <span class="text-inverse">graduation-cap</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-h-square"></i> <span class="text-inverse">h-square</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-hand-lizard"></i> <span class="text-inverse">hand-lizard</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-hand-paper"></i> <span class="text-inverse">hand-paper</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-hand-peace"></i> <span class="text-inverse">hand-peace</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-hand-point-down"></i> <span class="text-inverse">hand-point-down</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-hand-point-left"></i> <span class="text-inverse">hand-point-left</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-hand-point-right"></i> <span class="text-inverse">hand-point-right</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-hand-point-up"></i> <span class="text-inverse">hand-point-up</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-hand-pointer"></i> <span class="text-inverse">hand-pointer</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-hand-rock"></i> <span class="text-inverse">hand-rock</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-hand-scissors"></i> <span class="text-inverse">hand-scissors</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-hand-spock"></i> <span class="text-inverse">hand-spock</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-handshake"></i> <span class="text-inverse">handshake</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-hashtag"></i> <span class="text-inverse">hashtag</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-hdd"></i> <span class="text-inverse">hdd</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-heading"></i> <span class="text-inverse">heading</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-headphones"></i> <span class="text-inverse">headphones</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-heart"></i> <span class="text-inverse">heart</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-heartbeat"></i> <span class="text-inverse">heartbeat</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-history"></i> <span class="text-inverse">history</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-home"></i> <span class="text-inverse">home</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-hospital"></i> <span class="text-inverse">hospital</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-hourglass"></i> <span class="text-inverse">hourglass</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-hourglass-end"></i> <span class="text-inverse">hourglass-end</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-hourglass-half"></i> <span class="text-inverse">hourglass-half</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-hourglass-start"></i> <span class="text-inverse">hourglass-start</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-i-cursor"></i> <span class="text-inverse">i-cursor</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-id-badge"></i> <span class="text-inverse">id-badge</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-id-card"></i> <span class="text-inverse">id-card</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-image"></i> <span class="text-inverse">image</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-images"></i> <span class="text-inverse">images</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-inbox"></i> <span class="text-inverse">inbox</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-indent"></i> <span class="text-inverse">indent</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-industry"></i> <span class="text-inverse">industry</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-info"></i> <span class="text-inverse">info</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-info-circle"></i> <span class="text-inverse">info-circle</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-italic"></i> <span class="text-inverse">italic</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-key"></i> <span class="text-inverse">key</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-keyboard"></i> <span class="text-inverse">keyboard</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-language"></i> <span class="text-inverse">language</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-laptop"></i> <span class="text-inverse">laptop</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-leaf"></i> <span class="text-inverse">leaf</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-lemon"></i> <span class="text-inverse">lemon</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-level-down-alt"></i> <span class="text-inverse">level-down-alt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-level-up-alt"></i> <span class="text-inverse">level-up-alt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-life-ring"></i> <span class="text-inverse">life-ring</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-lightbulb"></i> <span class="text-inverse">lightbulb</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-link"></i> <span class="text-inverse">link</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-lira-sign"></i> <span class="text-inverse">lira-sign</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-list"></i> <span class="text-inverse">list</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-list-alt"></i> <span class="text-inverse">list-alt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-list-ol"></i> <span class="text-inverse">list-ol</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-list-ul"></i> <span class="text-inverse">list-ul</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-location-arrow"></i> <span class="text-inverse">location-arrow</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-lock"></i> <span class="text-inverse">lock</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-lock-open"></i> <span class="text-inverse">lock-open</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-long-arrow-alt-down"></i> <span class="text-inverse">long-arrow-alt-down</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-long-arrow-alt-left"></i> <span class="text-inverse">long-arrow-alt-left</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-long-arrow-alt-right"></i> <span class="text-inverse">long-arrow-alt-right</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-long-arrow-alt-up"></i> <span class="text-inverse">long-arrow-alt-up</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-low-vision"></i> <span class="text-inverse">low-vision</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-magic"></i> <span class="text-inverse">magic</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-magnet"></i> <span class="text-inverse">magnet</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-male"></i> <span class="text-inverse">male</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-map"></i> <span class="text-inverse">map</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-map-marker"></i> <span class="text-inverse">map-marker</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-map-marker-alt"></i> <span class="text-inverse">map-marker-alt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-map-pin"></i> <span class="text-inverse">map-pin</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-map-signs"></i> <span class="text-inverse">map-signs</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-mars"></i> <span class="text-inverse">mars</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-mars-double"></i> <span class="text-inverse">mars-double</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-mars-stroke"></i> <span class="text-inverse">mars-stroke</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-mars-stroke-h"></i> <span class="text-inverse">mars-stroke-h</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-mars-stroke-v"></i> <span class="text-inverse">mars-stroke-v</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-medkit"></i> <span class="text-inverse">medkit</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-meh"></i> <span class="text-inverse">meh</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-mercury"></i> <span class="text-inverse">mercury</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-microchip"></i> <span class="text-inverse">microchip</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-microphone"></i> <span class="text-inverse">microphone</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-microphone-slash"></i> <span class="text-inverse">microphone-slash</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-minus"></i> <span class="text-inverse">minus</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-minus-circle"></i> <span class="text-inverse">minus-circle</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-minus-square"></i> <span class="text-inverse">minus-square</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-mobile"></i> <span class="text-inverse">mobile</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-mobile-alt"></i> <span class="text-inverse">mobile-alt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-money-bill-alt"></i> <span class="text-inverse">money-bill-alt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-moon"></i> <span class="text-inverse">moon</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-motorcycle"></i> <span class="text-inverse">motorcycle</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-mouse-pointer"></i> <span class="text-inverse">mouse-pointer</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-music"></i> <span class="text-inverse">music</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-neuter"></i> <span class="text-inverse">neuter</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-newspaper"></i> <span class="text-inverse">newspaper</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-object-group"></i> <span class="text-inverse">object-group</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-object-ungroup"></i> <span class="text-inverse">object-ungroup</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-outdent"></i> <span class="text-inverse">outdent</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-paint-brush"></i> <span class="text-inverse">paint-brush</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-paper-plane"></i> <span class="text-inverse">paper-plane</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-paperclip"></i> <span class="text-inverse">paperclip</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-paragraph"></i> <span class="text-inverse">paragraph</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-paste"></i> <span class="text-inverse">paste</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-pause"></i> <span class="text-inverse">pause</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-pause-circle"></i> <span class="text-inverse">pause-circle</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-paw"></i> <span class="text-inverse">paw</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-pen-square"></i> <span class="text-inverse">pen-square</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-pencil-alt"></i> <span class="text-inverse">pencil-alt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-percent"></i> <span class="text-inverse">percent</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-phone"></i> <span class="text-inverse">phone</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-phone-square"></i> <span class="text-inverse">phone-square</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-phone-volume"></i> <span class="text-inverse">phone-volume</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-plane"></i> <span class="text-inverse">plane</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-play"></i> <span class="text-inverse">play</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-play-circle"></i> <span class="text-inverse">play-circle</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-plug"></i> <span class="text-inverse">plug</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-plus"></i> <span class="text-inverse">plus</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-plus-circle"></i> <span class="text-inverse">plus-circle</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-plus-square"></i> <span class="text-inverse">plus-square</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-podcast"></i> <span class="text-inverse">podcast</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-pound-sign"></i> <span class="text-inverse">pound-sign</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-power-off"></i> <span class="text-inverse">power-off</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-print"></i> <span class="text-inverse">print</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-puzzle-piece"></i> <span class="text-inverse">puzzle-piece</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-qrcode"></i> <span class="text-inverse">qrcode</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-question"></i> <span class="text-inverse">question</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-question-circle"></i> <span class="text-inverse">question-circle</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-quote-left"></i> <span class="text-inverse">quote-left</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-quote-right"></i> <span class="text-inverse">quote-right</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-random"></i> <span class="text-inverse">random</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-recycle"></i> <span class="text-inverse">recycle</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-redo"></i> <span class="text-inverse">redo</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-redo-alt"></i> <span class="text-inverse">redo-alt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-registered"></i> <span class="text-inverse">registered</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-reply"></i> <span class="text-inverse">reply</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-reply-all"></i> <span class="text-inverse">reply-all</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-retweet"></i> <span class="text-inverse">retweet</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-road"></i> <span class="text-inverse">road</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-rocket"></i> <span class="text-inverse">rocket</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-rss"></i> <span class="text-inverse">rss</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-rss-square"></i> <span class="text-inverse">rss-square</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-ruble-sign"></i> <span class="text-inverse">ruble-sign</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-rupee-sign"></i> <span class="text-inverse">rupee-sign</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-save"></i> <span class="text-inverse">save</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-search"></i> <span class="text-inverse">search</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-search-minus"></i> <span class="text-inverse">search-minus</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-search-plus"></i> <span class="text-inverse">search-plus</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-server"></i> <span class="text-inverse">server</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-share"></i> <span class="text-inverse">share</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-share-alt"></i> <span class="text-inverse">share-alt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-share-alt-square"></i> <span class="text-inverse">share-alt-square</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-share-square"></i> <span class="text-inverse">share-square</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-shekel-sign"></i> <span class="text-inverse">shekel-sign</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-shield-alt"></i> <span class="text-inverse">shield-alt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-ship"></i> <span class="text-inverse">ship</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-shopping-bag"></i> <span class="text-inverse">shopping-bag</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-shopping-basket"></i> <span class="text-inverse">shopping-basket</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-shopping-cart"></i> <span class="text-inverse">shopping-cart</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-shower"></i> <span class="text-inverse">shower</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-sign-in-alt"></i> <span class="text-inverse">sign-in-alt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-sign-language"></i> <span class="text-inverse">sign-language</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-sign-out-alt"></i> <span class="text-inverse">sign-out-alt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-signal"></i> <span class="text-inverse">signal</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-sitemap"></i> <span class="text-inverse">sitemap</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-sliders-h"></i> <span class="text-inverse">sliders-h</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-smile"></i> <span class="text-inverse">smile</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-snowflake"></i> <span class="text-inverse">snowflake</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-sort"></i> <span class="text-inverse">sort</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-sort-alpha-down"></i> <span class="text-inverse">sort-alpha-down</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-sort-alpha-up"></i> <span class="text-inverse">sort-alpha-up</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-sort-amount-down"></i> <span class="text-inverse">sort-amount-down</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-sort-amount-up"></i> <span class="text-inverse">sort-amount-up</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-sort-down"></i> <span class="text-inverse">sort-down</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-sort-numeric-down"></i> <span class="text-inverse">sort-numeric-down</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-sort-numeric-up"></i> <span class="text-inverse">sort-numeric-up</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-sort-up"></i> <span class="text-inverse">sort-up</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-space-shuttle"></i> <span class="text-inverse">space-shuttle</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-spinner"></i> <span class="text-inverse">spinner</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-square"></i> <span class="text-inverse">square</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-star"></i> <span class="text-inverse">star</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-star-half"></i> <span class="text-inverse">star-half</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-step-backward"></i> <span class="text-inverse">step-backward</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-step-forward"></i> <span class="text-inverse">step-forward</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-stethoscope"></i> <span class="text-inverse">stethoscope</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-sticky-note"></i> <span class="text-inverse">sticky-note</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-stop"></i> <span class="text-inverse">stop</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-stop-circle"></i> <span class="text-inverse">stop-circle</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-stopwatch"></i> <span class="text-inverse">stopwatch</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-street-view"></i> <span class="text-inverse">street-view</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-strikethrough"></i> <span class="text-inverse">strikethrough</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-subscript"></i> <span class="text-inverse">subscript</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-subway"></i> <span class="text-inverse">subway</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-suitcase"></i> <span class="text-inverse">suitcase</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-sun"></i> <span class="text-inverse">sun</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-superscript"></i> <span class="text-inverse">superscript</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-sync"></i> <span class="text-inverse">sync</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-sync-alt"></i> <span class="text-inverse">sync-alt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-table"></i> <span class="text-inverse">table</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-tablet"></i> <span class="text-inverse">tablet</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-tablet-alt"></i> <span class="text-inverse">tablet-alt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-tachometer-alt"></i> <span class="text-inverse">tachometer-alt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-tag"></i> <span class="text-inverse">tag</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-tags"></i> <span class="text-inverse">tags</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-tasks"></i> <span class="text-inverse">tasks</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-taxi"></i> <span class="text-inverse">taxi</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-terminal"></i> <span class="text-inverse">terminal</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-text-height"></i> <span class="text-inverse">text-height</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-text-width"></i> <span class="text-inverse">text-width</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-th"></i> <span class="text-inverse">th</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-th-large"></i> <span class="text-inverse">th-large</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-th-list"></i> <span class="text-inverse">th-list</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-thermometer-empty"></i> <span class="text-inverse">thermometer-empty</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-thermometer-full"></i> <span class="text-inverse">thermometer-full</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-thermometer-half"></i> <span class="text-inverse">thermometer-half</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-thermometer-quarter"></i> <span class="text-inverse">thermometer-quarter</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-thermometer-three-quarters"></i> <span class="text-inverse">thermometer-three-quarters</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-thumbs-down"></i> <span class="text-inverse">thumbs-down</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-thumbs-up"></i> <span class="text-inverse">thumbs-up</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-thumbtack"></i> <span class="text-inverse">thumbtack</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-ticket-alt"></i> <span class="text-inverse">ticket-alt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-times"></i> <span class="text-inverse">times</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-times-circle"></i> <span class="text-inverse">times-circle</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-tint"></i> <span class="text-inverse">tint</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-toggle-off"></i> <span class="text-inverse">toggle-off</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-toggle-on"></i> <span class="text-inverse">toggle-on</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-trademark"></i> <span class="text-inverse">trademark</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-train"></i> <span class="text-inverse">train</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-transgender"></i> <span class="text-inverse">transgender</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-transgender-alt"></i> <span class="text-inverse">transgender-alt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-trash"></i> <span class="text-inverse">trash</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-trash-alt"></i> <span class="text-inverse">trash-alt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-tree"></i> <span class="text-inverse">tree</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-trophy"></i> <span class="text-inverse">trophy</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-truck"></i> <span class="text-inverse">truck</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-tty"></i> <span class="text-inverse">tty</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-tv"></i> <span class="text-inverse">tv</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-umbrella"></i> <span class="text-inverse">umbrella</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-underline"></i> <span class="text-inverse">underline</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-undo"></i> <span class="text-inverse">undo</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-undo-alt"></i> <span class="text-inverse">undo-alt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-universal-access"></i> <span class="text-inverse">universal-access</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-university"></i> <span class="text-inverse">university</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-unlink"></i> <span class="text-inverse">unlink</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-unlock"></i> <span class="text-inverse">unlock</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-unlock-alt"></i> <span class="text-inverse">unlock-alt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-upload"></i> <span class="text-inverse">upload</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-user"></i> <span class="text-inverse">user</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-user-circle"></i> <span class="text-inverse">user-circle</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-user-md"></i> <span class="text-inverse">user-md</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-user-plus"></i> <span class="text-inverse">user-plus</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-user-secret"></i> <span class="text-inverse">user-secret</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-user-times"></i> <span class="text-inverse">user-times</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-users"></i> <span class="text-inverse">users</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-utensil-spoon"></i> <span class="text-inverse">utensil-spoon</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-utensils"></i> <span class="text-inverse">utensils</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-venus"></i> <span class="text-inverse">venus</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-venus-double"></i> <span class="text-inverse">venus-double</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-venus-mars"></i> <span class="text-inverse">venus-mars</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-video"></i> <span class="text-inverse">video</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-volume-down"></i> <span class="text-inverse">volume-down</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-volume-off"></i> <span class="text-inverse">volume-off</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-volume-up"></i> <span class="text-inverse">volume-up</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-wheelchair"></i> <span class="text-inverse">wheelchair</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-wifi"></i> <span class="text-inverse">wifi</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-window-close"></i> <span class="text-inverse">window-close</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-window-maximize"></i> <span class="text-inverse">window-maximize</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-window-minimize"></i> <span class="text-inverse">window-minimize</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-window-restore"></i> <span class="text-inverse">window-restore</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-won-sign"></i> <span class="text-inverse">won-sign</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-wrench"></i> <span class="text-inverse">wrench</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fas fa-lg fa-fw me-10px fa-yen-sign"></i> <span class="text-inverse">yen-sign</span></div>
			</div>
			<!-- END row -->
		</div>
		<!-- END col-6 -->
		<!-- BEGIN col-6 -->
		<div class="col-xl-6">
			<h3 class="mb-10px"><b>Regular</b></h3>
			<p class="mb-20px">
				Regular type Font Awesome Icon prefix 
				<code>far fa-*</code>
			</p>
			<!-- BEGIN row -->
			<div class="row mb-20px fs-13px">
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-address-book"></i> <span class="text-inverse">address-book</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-address-card"></i> <span class="text-inverse">address-card</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-arrow-alt-circle-down"></i> <span class="text-inverse">arrow-alt-circle-down</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-arrow-alt-circle-left"></i> <span class="text-inverse">arrow-alt-circle-left</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-arrow-alt-circle-right"></i> <span class="text-inverse">arrow-alt-circle-right</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-arrow-alt-circle-up"></i> <span class="text-inverse">arrow-alt-circle-up</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-bell"></i> <span class="text-inverse">bell</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-bell-slash"></i> <span class="text-inverse">bell-slash</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-bookmark"></i> <span class="text-inverse">bookmark</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-building"></i> <span class="text-inverse">building</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-calendar"></i> <span class="text-inverse">calendar</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-calendar-alt"></i> <span class="text-inverse">calendar-alt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-calendar-check"></i> <span class="text-inverse">calendar-check</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-calendar-minus"></i> <span class="text-inverse">calendar-minus</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-calendar-plus"></i> <span class="text-inverse">calendar-plus</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-calendar-times"></i> <span class="text-inverse">calendar-times</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-caret-square-down"></i> <span class="text-inverse">caret-square-down</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-caret-square-left"></i> <span class="text-inverse">caret-square-left</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-caret-square-right"></i> <span class="text-inverse">caret-square-right</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-caret-square-up"></i> <span class="text-inverse">caret-square-up</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-chart-bar"></i> <span class="text-inverse">chart-bar</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-check-circle"></i> <span class="text-inverse">check-circle</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-check-square"></i> <span class="text-inverse">check-square</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-circle"></i> <span class="text-inverse">circle</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-clipboard"></i> <span class="text-inverse">clipboard</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-clock"></i> <span class="text-inverse">clock</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-clone"></i> <span class="text-inverse">clone</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-closed-captioning"></i> <span class="text-inverse">closed-captioning</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-comment"></i> <span class="text-inverse">comment</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-comment-alt"></i> <span class="text-inverse">comment-alt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-comments"></i> <span class="text-inverse">comments</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-compass"></i> <span class="text-inverse">compass</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-copy"></i> <span class="text-inverse">copy</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-copyright"></i> <span class="text-inverse">copyright</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-credit-card"></i> <span class="text-inverse">credit-card</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-dot-circle"></i> <span class="text-inverse">dot-circle</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-edit"></i> <span class="text-inverse">edit</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-envelope"></i> <span class="text-inverse">envelope</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-envelope-open"></i> <span class="text-inverse">envelope-open</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-eye-slash"></i> <span class="text-inverse">eye-slash</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-file"></i> <span class="text-inverse">file</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-file-alt"></i> <span class="text-inverse">file-alt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-file-archive"></i> <span class="text-inverse">file-archive</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-file-audio"></i> <span class="text-inverse">file-audio</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-file-code"></i> <span class="text-inverse">file-code</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-file-excel"></i> <span class="text-inverse">file-excel</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-file-image"></i> <span class="text-inverse">file-image</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-file-pdf"></i> <span class="text-inverse">file-pdf</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-file-powerpoint"></i> <span class="text-inverse">file-powerpoint</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-file-video"></i> <span class="text-inverse">file-video</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-file-word"></i> <span class="text-inverse">file-word</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-flag"></i> <span class="text-inverse">flag</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-folder"></i> <span class="text-inverse">folder</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-folder-open"></i> <span class="text-inverse">folder-open</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-frown"></i> <span class="text-inverse">frown</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-futbol"></i> <span class="text-inverse">futbol</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-gem"></i> <span class="text-inverse">gem</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-hand-lizard"></i> <span class="text-inverse">hand-lizard</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-hand-paper"></i> <span class="text-inverse">hand-paper</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-hand-peace"></i> <span class="text-inverse">hand-peace</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-hand-point-down"></i> <span class="text-inverse">hand-point-down</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-hand-point-left"></i> <span class="text-inverse">hand-point-left</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-hand-point-right"></i> <span class="text-inverse">hand-point-right</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-hand-point-up"></i> <span class="text-inverse">hand-point-up</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-hand-pointer"></i> <span class="text-inverse">hand-pointer</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-hand-rock"></i> <span class="text-inverse">hand-rock</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-hand-scissors"></i> <span class="text-inverse">hand-scissors</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-hand-spock"></i> <span class="text-inverse">hand-spock</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-handshake"></i> <span class="text-inverse">handshake</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-hdd"></i> <span class="text-inverse">hdd</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-heart"></i> <span class="text-inverse">heart</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-hospital"></i> <span class="text-inverse">hospital</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-hourglass"></i> <span class="text-inverse">hourglass</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-id-badge"></i> <span class="text-inverse">id-badge</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-id-card"></i> <span class="text-inverse">id-card</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-image"></i> <span class="text-inverse">image</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-images"></i> <span class="text-inverse">images</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-keyboard"></i> <span class="text-inverse">keyboard</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-lemon"></i> <span class="text-inverse">lemon</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-life-ring"></i> <span class="text-inverse">life-ring</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-lightbulb"></i> <span class="text-inverse">lightbulb</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-list-alt"></i> <span class="text-inverse">list-alt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-map"></i> <span class="text-inverse">map</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-meh"></i> <span class="text-inverse">meh</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-minus-square"></i> <span class="text-inverse">minus-square</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-money-bill-alt"></i> <span class="text-inverse">money-bill-alt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-moon"></i> <span class="text-inverse">moon</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-newspaper"></i> <span class="text-inverse">newspaper</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-object-group"></i> <span class="text-inverse">object-group</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-object-ungroup"></i> <span class="text-inverse">object-ungroup</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-paper-plane"></i> <span class="text-inverse">paper-plane</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-pause-circle"></i> <span class="text-inverse">pause-circle</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-play-circle"></i> <span class="text-inverse">play-circle</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-plus-square"></i> <span class="text-inverse">plus-square</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-question-circle"></i> <span class="text-inverse">question-circle</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-registered"></i> <span class="text-inverse">registered</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-save"></i> <span class="text-inverse">save</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-share-square"></i> <span class="text-inverse">share-square</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-smile"></i> <span class="text-inverse">smile</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-snowflake"></i> <span class="text-inverse">snowflake</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-square"></i> <span class="text-inverse">square</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-star"></i> <span class="text-inverse">star</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-star-half"></i> <span class="text-inverse">star-half</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-sticky-note"></i> <span class="text-inverse">sticky-note</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-stop-circle"></i> <span class="text-inverse">stop-circle</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-sun"></i> <span class="text-inverse">sun</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-thumbs-down"></i> <span class="text-inverse">thumbs-down</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-thumbs-up"></i> <span class="text-inverse">thumbs-up</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-times-circle"></i> <span class="text-inverse">times-circle</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-trash-alt"></i> <span class="text-inverse">trash-alt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-user"></i> <span class="text-inverse">user</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-user-circle"></i> <span class="text-inverse">user-circle</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-window-close"></i> <span class="text-inverse">window-close</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-window-maximize"></i> <span class="text-inverse">window-maximize</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-window-minimize"></i> <span class="text-inverse">window-minimize</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="far fa-lg fa-fw me-10px fa-window-restore"></i> <span class="text-inverse">window-restore</span></div>
			</div>
			<!-- END row -->
			
			<h3 class="mb-10px"><b>Brands</b></h3>
			<p class="mb-20px">
				Brand type Font Awesome Icon prefix 
				<code>fab fa-*</code>
			</p>
			<!-- BEGIN row -->
			<div class="row mb-20px fs-13px">
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-500px"></i> <span class="text-inverse">500px</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-accessible-icon"></i> <span class="text-inverse">accessible-icon</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-accusoft"></i> <span class="text-inverse">accusoft</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-adn"></i> <span class="text-inverse">adn</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-adversal"></i> <span class="text-inverse">adversal</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-affiliatetheme"></i> <span class="text-inverse">affiliatetheme</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-algolia"></i> <span class="text-inverse">algolia</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-amazon"></i> <span class="text-inverse">amazon</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-amazon-pay"></i> <span class="text-inverse">amazon-pay</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-amilia"></i> <span class="text-inverse">amilia</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-android"></i> <span class="text-inverse">android</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-angellist"></i> <span class="text-inverse">angellist</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-angrycreative"></i> <span class="text-inverse">angrycreative</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-angular"></i> <span class="text-inverse">angular</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-app-store"></i> <span class="text-inverse">app-store</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-app-store-ios"></i> <span class="text-inverse">app-store-ios</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-apper"></i> <span class="text-inverse">apper</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-apple"></i> <span class="text-inverse">apple</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-apple-pay"></i> <span class="text-inverse">apple-pay</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-asymmetrik"></i> <span class="text-inverse">asymmetrik</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-audible"></i> <span class="text-inverse">audible</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-autoprefixer"></i> <span class="text-inverse">autoprefixer</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-avianex"></i> <span class="text-inverse">avianex</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-aviato"></i> <span class="text-inverse">aviato</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-aws"></i> <span class="text-inverse">aws</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-bandcamp"></i> <span class="text-inverse">bandcamp</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-behance"></i> <span class="text-inverse">behance</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-behance-square"></i> <span class="text-inverse">behance-square</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-bimobject"></i> <span class="text-inverse">bimobject</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-bitbucket"></i> <span class="text-inverse">bitbucket</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-bitcoin"></i> <span class="text-inverse">bitcoin</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-bity"></i> <span class="text-inverse">bity</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-black-tie"></i> <span class="text-inverse">black-tie</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-blackberry"></i> <span class="text-inverse">blackberry</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-blogger"></i> <span class="text-inverse">blogger</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-blogger-b"></i> <span class="text-inverse">blogger-b</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-bluetooth"></i> <span class="text-inverse">bluetooth</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-bluetooth-b"></i> <span class="text-inverse">bluetooth-b</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-btc"></i> <span class="text-inverse">btc</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-buromobelexperte"></i> <span class="text-inverse">buromobelexperte</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-buysellads"></i> <span class="text-inverse">buysellads</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-cc-amazon-pay"></i> <span class="text-inverse">cc-amazon-pay</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-cc-amex"></i> <span class="text-inverse">cc-amex</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-cc-apple-pay"></i> <span class="text-inverse">cc-apple-pay</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-cc-diners-club"></i> <span class="text-inverse">cc-diners-club</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-cc-discover"></i> <span class="text-inverse">cc-discover</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-cc-jcb"></i> <span class="text-inverse">cc-jcb</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-cc-mastercard"></i> <span class="text-inverse">cc-mastercard</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-cc-paypal"></i> <span class="text-inverse">cc-paypal</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-cc-stripe"></i> <span class="text-inverse">cc-stripe</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-cc-visa"></i> <span class="text-inverse">cc-visa</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-centercode"></i> <span class="text-inverse">centercode</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-chrome"></i> <span class="text-inverse">chrome</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-cloudscale"></i> <span class="text-inverse">cloudscale</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-cloudsmith"></i> <span class="text-inverse">cloudsmith</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-cloudversify"></i> <span class="text-inverse">cloudversify</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-codepen"></i> <span class="text-inverse">codepen</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-codiepie"></i> <span class="text-inverse">codiepie</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-connectdevelop"></i> <span class="text-inverse">connectdevelop</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-contao"></i> <span class="text-inverse">contao</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-cpanel"></i> <span class="text-inverse">cpanel</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-creative-commons"></i> <span class="text-inverse">creative-commons</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-css3"></i> <span class="text-inverse">css3</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-css3-alt"></i> <span class="text-inverse">css3-alt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-cuttlefish"></i> <span class="text-inverse">cuttlefish</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-d-and-d"></i> <span class="text-inverse">d-and-d</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-dashcube"></i> <span class="text-inverse">dashcube</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-delicious"></i> <span class="text-inverse">delicious</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-deploydog"></i> <span class="text-inverse">deploydog</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-deskpro"></i> <span class="text-inverse">deskpro</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-deviantart"></i> <span class="text-inverse">deviantart</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-digg"></i> <span class="text-inverse">digg</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-digital-ocean"></i> <span class="text-inverse">digital-ocean</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-discord"></i> <span class="text-inverse">discord</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-discourse"></i> <span class="text-inverse">discourse</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-dochub"></i> <span class="text-inverse">dochub</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-docker"></i> <span class="text-inverse">docker</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-draft2digital"></i> <span class="text-inverse">draft2digital</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-dribbble"></i> <span class="text-inverse">dribbble</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-dribbble-square"></i> <span class="text-inverse">dribbble-square</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-dropbox"></i> <span class="text-inverse">dropbox</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-drupal"></i> <span class="text-inverse">drupal</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-dyalog"></i> <span class="text-inverse">dyalog</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-earlybirds"></i> <span class="text-inverse">earlybirds</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-edge"></i> <span class="text-inverse">edge</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-elementor"></i> <span class="text-inverse">elementor</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-ember"></i> <span class="text-inverse">ember</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-empire"></i> <span class="text-inverse">empire</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-envira"></i> <span class="text-inverse">envira</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-erlang"></i> <span class="text-inverse">erlang</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-ethereum"></i> <span class="text-inverse">ethereum</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-etsy"></i> <span class="text-inverse">etsy</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-expeditedssl"></i> <span class="text-inverse">expeditedssl</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-facebook"></i> <span class="text-inverse">facebook</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-facebook-f"></i> <span class="text-inverse">facebook-f</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-facebook-messenger"></i> <span class="text-inverse">facebook-messenger</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-facebook-square"></i> <span class="text-inverse">facebook-square</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-firefox"></i> <span class="text-inverse">firefox</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-first-order"></i> <span class="text-inverse">first-order</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-firstdraft"></i> <span class="text-inverse">firstdraft</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-flickr"></i> <span class="text-inverse">flickr</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-fly"></i> <span class="text-inverse">fly</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-font-awesome"></i> <span class="text-inverse">font-awesome</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-font-awesome-alt"></i> <span class="text-inverse">font-awesome-alt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-font-awesome-flag"></i> <span class="text-inverse">font-awesome-flag</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-fonticons"></i> <span class="text-inverse">fonticons</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-fonticons-fi"></i> <span class="text-inverse">fonticons-fi</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-fort-awesome"></i> <span class="text-inverse">fort-awesome</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-fort-awesome-alt"></i> <span class="text-inverse">fort-awesome-alt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-forumbee"></i> <span class="text-inverse">forumbee</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-foursquare"></i> <span class="text-inverse">foursquare</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-free-code-camp"></i> <span class="text-inverse">free-code-camp</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-freebsd"></i> <span class="text-inverse">freebsd</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-get-pocket"></i> <span class="text-inverse">get-pocket</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-gg"></i> <span class="text-inverse">gg</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-gg-circle"></i> <span class="text-inverse">gg-circle</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-git"></i> <span class="text-inverse">git</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-git-square"></i> <span class="text-inverse">git-square</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-github"></i> <span class="text-inverse">github</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-github-alt"></i> <span class="text-inverse">github-alt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-github-square"></i> <span class="text-inverse">github-square</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-gitkraken"></i> <span class="text-inverse">gitkraken</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-gitlab"></i> <span class="text-inverse">gitlab</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-gitter"></i> <span class="text-inverse">gitter</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-glide"></i> <span class="text-inverse">glide</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-glide-g"></i> <span class="text-inverse">glide-g</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-gofore"></i> <span class="text-inverse">gofore</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-goodreads"></i> <span class="text-inverse">goodreads</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-goodreads-g"></i> <span class="text-inverse">goodreads-g</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-google"></i> <span class="text-inverse">google</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-google-drive"></i> <span class="text-inverse">google-drive</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-google-play"></i> <span class="text-inverse">google-play</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-google-plus"></i> <span class="text-inverse">google-plus</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-google-plus-g"></i> <span class="text-inverse">google-plus-g</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-google-plus-square"></i> <span class="text-inverse">google-plus-square</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-google-wallet"></i> <span class="text-inverse">google-wallet</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-gratipay"></i> <span class="text-inverse">gratipay</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-grav"></i> <span class="text-inverse">grav</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-gripfire"></i> <span class="text-inverse">gripfire</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-grunt"></i> <span class="text-inverse">grunt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-gulp"></i> <span class="text-inverse">gulp</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-hacker-news"></i> <span class="text-inverse">hacker-news</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-hacker-news-square"></i> <span class="text-inverse">hacker-news-square</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-hire-a-helper"></i> <span class="text-inverse">hire-a-helper</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-hooli"></i> <span class="text-inverse">hooli</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-hotjar"></i> <span class="text-inverse">hotjar</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-houzz"></i> <span class="text-inverse">houzz</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-html5"></i> <span class="text-inverse">html5</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-hubspot"></i> <span class="text-inverse">hubspot</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-imdb"></i> <span class="text-inverse">imdb</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-instagram"></i> <span class="text-inverse">instagram</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-internet-explorer"></i> <span class="text-inverse">internet-explorer</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-ioxhost"></i> <span class="text-inverse">ioxhost</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-itunes"></i> <span class="text-inverse">itunes</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-itunes-note"></i> <span class="text-inverse">itunes-note</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-jenkins"></i> <span class="text-inverse">jenkins</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-joget"></i> <span class="text-inverse">joget</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-joomla"></i> <span class="text-inverse">joomla</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-js"></i> <span class="text-inverse">js</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-js-square"></i> <span class="text-inverse">js-square</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-jsfiddle"></i> <span class="text-inverse">jsfiddle</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-keycdn"></i> <span class="text-inverse">keycdn</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-kickstarter"></i> <span class="text-inverse">kickstarter</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-kickstarter-k"></i> <span class="text-inverse">kickstarter-k</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-korvue"></i> <span class="text-inverse">korvue</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-laravel"></i> <span class="text-inverse">laravel</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-lastfm"></i> <span class="text-inverse">lastfm</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-lastfm-square"></i> <span class="text-inverse">lastfm-square</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-leanpub"></i> <span class="text-inverse">leanpub</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-less"></i> <span class="text-inverse">less</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-line"></i> <span class="text-inverse">line</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-linkedin"></i> <span class="text-inverse">linkedin</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-linkedin-in"></i> <span class="text-inverse">linkedin-in</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-linode"></i> <span class="text-inverse">linode</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-linux"></i> <span class="text-inverse">linux</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-lyft"></i> <span class="text-inverse">lyft</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-magento"></i> <span class="text-inverse">magento</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-maxcdn"></i> <span class="text-inverse">maxcdn</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-medapps"></i> <span class="text-inverse">medapps</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-medium"></i> <span class="text-inverse">medium</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-medium-m"></i> <span class="text-inverse">medium-m</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-medrt"></i> <span class="text-inverse">medrt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-meetup"></i> <span class="text-inverse">meetup</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-microsoft"></i> <span class="text-inverse">microsoft</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-mix"></i> <span class="text-inverse">mix</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-mixcloud"></i> <span class="text-inverse">mixcloud</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-mizuni"></i> <span class="text-inverse">mizuni</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-modx"></i> <span class="text-inverse">modx</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-monero"></i> <span class="text-inverse">monero</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-napster"></i> <span class="text-inverse">napster</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-nintendo-switch"></i> <span class="text-inverse">nintendo-switch</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-node"></i> <span class="text-inverse">node</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-node-js"></i> <span class="text-inverse">node-js</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-npm"></i> <span class="text-inverse">npm</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-ns8"></i> <span class="text-inverse">ns8</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-nutritionix"></i> <span class="text-inverse">nutritionix</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-odnoklassniki"></i> <span class="text-inverse">odnoklassniki</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-odnoklassniki-square"></i> <span class="text-inverse">odnoklassniki-square</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-opencart"></i> <span class="text-inverse">opencart</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-openid"></i> <span class="text-inverse">openid</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-opera"></i> <span class="text-inverse">opera</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-optin-monster"></i> <span class="text-inverse">optin-monster</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-osi"></i> <span class="text-inverse">osi</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-page4"></i> <span class="text-inverse">page4</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-pagelines"></i> <span class="text-inverse">pagelines</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-palfed"></i> <span class="text-inverse">palfed</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-patreon"></i> <span class="text-inverse">patreon</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-paypal"></i> <span class="text-inverse">paypal</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-periscope"></i> <span class="text-inverse">periscope</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-phabricator"></i> <span class="text-inverse">phabricator</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-phoenix-framework"></i> <span class="text-inverse">phoenix-framework</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-pied-piper"></i> <span class="text-inverse">pied-piper</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-pied-piper-alt"></i> <span class="text-inverse">pied-piper-alt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-pied-piper-pp"></i> <span class="text-inverse">pied-piper-pp</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-pinterest"></i> <span class="text-inverse">pinterest</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-pinterest-p"></i> <span class="text-inverse">pinterest-p</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-pinterest-square"></i> <span class="text-inverse">pinterest-square</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-playstation"></i> <span class="text-inverse">playstation</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-product-hunt"></i> <span class="text-inverse">product-hunt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-pushed"></i> <span class="text-inverse">pushed</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-python"></i> <span class="text-inverse">python</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-qq"></i> <span class="text-inverse">qq</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-quora"></i> <span class="text-inverse">quora</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-ravelry"></i> <span class="text-inverse">ravelry</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-react"></i> <span class="text-inverse">react</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-rebel"></i> <span class="text-inverse">rebel</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-red-river"></i> <span class="text-inverse">red-river</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-reddit"></i> <span class="text-inverse">reddit</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-reddit-alien"></i> <span class="text-inverse">reddit-alien</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-reddit-square"></i> <span class="text-inverse">reddit-square</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-rendact"></i> <span class="text-inverse">rendact</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-renren"></i> <span class="text-inverse">renren</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-replyd"></i> <span class="text-inverse">replyd</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-resolving"></i> <span class="text-inverse">resolving</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-rocketchat"></i> <span class="text-inverse">rocketchat</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-rockrms"></i> <span class="text-inverse">rockrms</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-safari"></i> <span class="text-inverse">safari</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-sass"></i> <span class="text-inverse">sass</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-schlix"></i> <span class="text-inverse">schlix</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-scribd"></i> <span class="text-inverse">scribd</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-searchengin"></i> <span class="text-inverse">searchengin</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-sellcast"></i> <span class="text-inverse">sellcast</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-sellsy"></i> <span class="text-inverse">sellsy</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-servicestack"></i> <span class="text-inverse">servicestack</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-shirtsinbulk"></i> <span class="text-inverse">shirtsinbulk</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-simplybuilt"></i> <span class="text-inverse">simplybuilt</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-sistrix"></i> <span class="text-inverse">sistrix</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-skyatlas"></i> <span class="text-inverse">skyatlas</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-skype"></i> <span class="text-inverse">skype</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-slack"></i> <span class="text-inverse">slack</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-slack-hash"></i> <span class="text-inverse">slack-hash</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-slideshare"></i> <span class="text-inverse">slideshare</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-snapchat"></i> <span class="text-inverse">snapchat</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-snapchat-ghost"></i> <span class="text-inverse">snapchat-ghost</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-snapchat-square"></i> <span class="text-inverse">snapchat-square</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-soundcloud"></i> <span class="text-inverse">soundcloud</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-speakap"></i> <span class="text-inverse">speakap</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-spotify"></i> <span class="text-inverse">spotify</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-stack-exchange"></i> <span class="text-inverse">stack-exchange</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-stack-overflow"></i> <span class="text-inverse">stack-overflow</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-staylinked"></i> <span class="text-inverse">staylinked</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-steam"></i> <span class="text-inverse">steam</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-steam-square"></i> <span class="text-inverse">steam-square</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-steam-symbol"></i> <span class="text-inverse">steam-symbol</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-sticker-mule"></i> <span class="text-inverse">sticker-mule</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-strava"></i> <span class="text-inverse">strava</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-stripe"></i> <span class="text-inverse">stripe</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-stripe-s"></i> <span class="text-inverse">stripe-s</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-studiovinari"></i> <span class="text-inverse">studiovinari</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-stumbleupon"></i> <span class="text-inverse">stumbleupon</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-stumbleupon-circle"></i> <span class="text-inverse">stumbleupon-circle</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-superpowers"></i> <span class="text-inverse">superpowers</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-supple"></i> <span class="text-inverse">supple</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-telegram"></i> <span class="text-inverse">telegram</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-telegram-plane"></i> <span class="text-inverse">telegram-plane</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-tencent-weibo"></i> <span class="text-inverse">tencent-weibo</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-themeisle"></i> <span class="text-inverse">themeisle</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-trello"></i> <span class="text-inverse">trello</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-tripadvisor"></i> <span class="text-inverse">tripadvisor</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-tumblr"></i> <span class="text-inverse">tumblr</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-tumblr-square"></i> <span class="text-inverse">tumblr-square</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-twitch"></i> <span class="text-inverse">twitch</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-twitter"></i> <span class="text-inverse">twitter</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-twitter-square"></i> <span class="text-inverse">twitter-square</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-typo3"></i> <span class="text-inverse">typo3</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-uber"></i> <span class="text-inverse">uber</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-uikit"></i> <span class="text-inverse">uikit</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-uniregistry"></i> <span class="text-inverse">uniregistry</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-untappd"></i> <span class="text-inverse">untappd</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-usb"></i> <span class="text-inverse">usb</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-ussunnah"></i> <span class="text-inverse">ussunnah</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-vaadin"></i> <span class="text-inverse">vaadin</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-viacoin"></i> <span class="text-inverse">viacoin</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-viadeo"></i> <span class="text-inverse">viadeo</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-viadeo-square"></i> <span class="text-inverse">viadeo-square</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-viber"></i> <span class="text-inverse">viber</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-vimeo"></i> <span class="text-inverse">vimeo</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-vimeo-square"></i> <span class="text-inverse">vimeo-square</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-vimeo-v"></i> <span class="text-inverse">vimeo-v</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-vine"></i> <span class="text-inverse">vine</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-vk"></i> <span class="text-inverse">vk</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-vnv"></i> <span class="text-inverse">vnv</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-vuejs"></i> <span class="text-inverse">vuejs</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-weibo"></i> <span class="text-inverse">weibo</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-weixin"></i> <span class="text-inverse">weixin</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-whatsapp"></i> <span class="text-inverse">whatsapp</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-whatsapp-square"></i> <span class="text-inverse">whatsapp-square</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-whmcs"></i> <span class="text-inverse">whmcs</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-wikipedia-w"></i> <span class="text-inverse">wikipedia-w</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-windows"></i> <span class="text-inverse">windows</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-wordpress"></i> <span class="text-inverse">wordpress</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-wordpress-simple"></i> <span class="text-inverse">wordpress-simple</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-wpbeginner"></i> <span class="text-inverse">wpbeginner</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-wpexplorer"></i> <span class="text-inverse">wpexplorer</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-wpforms"></i> <span class="text-inverse">wpforms</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-xbox"></i> <span class="text-inverse">xbox</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-xing"></i> <span class="text-inverse">xing</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-xing-square"></i> <span class="text-inverse">xing-square</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-y-combinator"></i> <span class="text-inverse">y-combinator</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-yahoo"></i> <span class="text-inverse">yahoo</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-yandex"></i> <span class="text-inverse">yandex</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-yandex-international"></i> <span class="text-inverse">yandex-international</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-yelp"></i> <span class="text-inverse">yelp</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-yoast"></i> <span class="text-inverse">yoast</span></div>
				<div class="col-md-6 col-sm-6 col-xs-6 mb-10px text-ellipsis"><i class="fab fa-lg fa-fw me-10px fa-youtube"></i> <span class="text-inverse">youtube</span></div>
			</div>
			<!-- END row -->
		</div>
		<!-- END col-6 -->
	</div>
	<!-- END row -->
@endsection