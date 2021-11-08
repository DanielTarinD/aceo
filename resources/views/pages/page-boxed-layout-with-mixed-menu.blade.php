@extends('layouts.default', ['appBoxedLayout' => true, 'appTopMenu' => true])

@section('title', 'Boxed Layout with Mixed Menu')

@push('scripts')
	<script src="/assets/plugins/@highlightjs/cdn-assets/highlight.min.js"></script>
	<script src="/assets/js/demo/render.highlight.js"></script>
@endpush

@section('content')
	<!-- BEGIN breadcrumb -->
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">Page Options</a></li>
		<li class="breadcrumb-item active">Boxed Layout with Mixed Menu</li>
	</ol>
	<!-- END breadcrumb -->
	<!-- BEGIN page-header -->
	<h1 class="page-header">Boxed Layout with Mixed Menu <small>header small text goes here...</small></h1>
	<!-- END page-header -->
	
	<!-- BEGIN panel -->
	<div class="panel panel-inverse">
		<div class="panel-heading">
			<h4 class="panel-title">Installation Settings</h4>
			<div class="panel-heading-btn">
				<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
				<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
			</div>
		</div>
		<div class="panel-body">
			<p>
				Add the <code>.boxed-layout</code> css class to <code>body</code> tag for boxed layout page setting.
				Add the <code>.app-with-top-menu</code>, <code>.app-sidebar-fixed</code> css class to <code>.app</code> container for mixed page setting. You might need to add <b>app-top-menu</b> and <b>app-sidebar</b> elements into the page as well.
			</p>
		</div>
		<div class="hljs-wrapper">
			<pre><code class="html">&lt;body class="boxed-layout"&gt;
  &lt;div id="app" class="app app-sidebar-fixed app-with-top-menu"&gt;
    &lt;div class="app-header"&gt;
      &lt;a href="index.html" class="navbar-brand"&gt;...&lt;/a&gt;
    
      &lt;button type="button" class="navbar-mobile-toggler" data-bs-toggle="collapse" data-bs-target="#top-navbar"&gt;
        &lt;span class="fa-stack fa-lg text-inverse"&gt;
          &lt;i class="far fa-square fa-stack-2x"&gt;&lt;/i&gt;
          &lt;i class="fa fa-cog fa-stack-1x mt-1px"&gt;&lt;/i&gt;
        &lt;/span&gt;
      &lt;/button&gt;
    
      &lt;button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile"&gt;
        &lt;span class="icon-bar"&gt;&lt;/span&gt;
        &lt;span class="icon-bar"&gt;&lt;/span&gt;
        &lt;span class="icon-bar"&gt;&lt;/span&gt;
      &lt;/button&gt;
    &lt;/div&gt;
    &lt;/div&gt;
          
    &lt;div class="app-top-menu"&gt;
      ...
    &lt;/div&gt;
  
    &lt;div class="app-sidebar"&gt;
      ...
    &lt;/div&gt;
    &lt;div class="app-sidebar-bg"&gt;&lt;/div&gt;
  
    ...
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
		</div>
	</div>
	<!-- END panel -->
@endsection