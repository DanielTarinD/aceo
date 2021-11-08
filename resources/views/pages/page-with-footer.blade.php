@extends('layouts.default')

@section('title', 'Page with Footer')

@push('scripts')
	<script src="/assets/plugins/@highlightjs/cdn-assets/highlight.min.js"></script>
	<script src="/assets/js/demo/render.highlight.js"></script>
@endpush

@section('content')
	<!-- BEGIN breadcrumb -->
	<ol class="breadcrumb float-xl-end">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">Page Options</a></li>
		<li class="breadcrumb-item active">Page with Footer</li>
	</ol>
	<!-- END breadcrumb -->
	<!-- BEGIN page-header -->
	<h1 class="page-header">Page with Footer <small>header small text goes here...</small></h1>
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
				Add the <code>.app-footer</code> element to <code>.app-content</code> container for footer page element.
			</p>
		</div>
		<div class="hljs-wrapper">
			<pre><code class="html">&lt;div id="content" class="app-content"&gt;
  ...
  &lt;div id="footer" class="app-footer mx-0 px-0"&gt;
    &amp;copy; 2021 SeanTheme All Right Reserved
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
		</div>
	</div>
	<!-- END panel -->

	<!-- BEGIN #footer -->
	<div id="footer" class="app-footer mx-0 px-0">
		&copy; 2021 Color Admin Responsive Admin Template - Sean Ngu All Rights Reserved
	</div>
	<!-- END #footer -->
@endsection