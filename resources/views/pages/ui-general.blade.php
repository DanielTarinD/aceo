@extends('layouts.default')

@section('title', 'General UI Elements')

@push('scripts')
	<script src="/assets/plugins/@highlightjs/cdn-assets/highlight.min.js"></script>
	<script src="/assets/js/demo/render.highlight.js"></script>
@endpush

@section('content')
	<!-- BEGIN breadcrumb -->
	<ol class="breadcrumb float-xl-end">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">UI Elements</a></li>
		<li class="breadcrumb-item active">General</li>
	</ol>
	<!-- END breadcrumb -->
	<!-- BEGIN page-header -->
	<h1 class="page-header">General UI Elements <small>header small text goes here...</small></h1>
	<!-- END page-header -->
	
	<!-- BEGIN row -->
	<div class="row">
		<!-- BEGIN col-6 -->
		<div class="col-xl-6">
			<!-- BEGIN panel -->
			<div class="panel panel-inverse" data-sortable-id="ui-general-1">
				<!-- BEGIN panel-heading -->
				<div class="panel-heading">
					<h4 class="panel-title">Alerts</h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<!-- END panel-heading -->
				<!-- BEGIN panel-body -->
				<div class="panel-body">
					<div class="alert alert-success alert-dismissible fade show mb-0">
						<strong>Success!</strong>
						This is a success alert with <a href="#" class="alert-link">an example link</a>.
						<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
					</div>
				</div>
				<!-- END panel-body -->
				<!-- BEGIN hljs-wrapper -->
				<div class="hljs-wrapper"><pre><code class="html">&lt;div class="alert alert-success alert-dismissible fade show"&gt;
  &lt;strong&gt;Success!&lt;/strong&gt;
  This is a success alert with 
  &lt;a href="#" class="alert-link"&gt;an example link&lt;/a&gt;. 
  &lt;button type="button" class="btn-close" data-bs-dismiss="alert"&gt;&lt;/span&gt;
&lt;/div&gt;</code></pre>
				</div>
				<!-- END hljs-wrapper -->
			</div>
			<!-- END panel -->
								
			<!-- BEGIN panel -->
			<div class="panel panel-inverse" data-sortable-id="ui-general-2">
				<!-- BEGIN panel-heading -->
				<div class="panel-heading">
					<h4 class="panel-title">Alerts Color <span class="badge bg-success ms-1">NEW</span></h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<!-- END panel-heading -->
				<!-- BEGIN panel-body -->
				<div class="panel-body">
					<div class="row gx-2">
						<div class="col-md-4">
							<div class="alert alert-primary alert-dismissible fade show mb-2">
								Primary alert with <a href="#" class="alert-link">an example link</a>.
								<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
							</div>
						</div>
						<div class="col-md-4">
							<div class="alert alert-info alert-dismissible fade show mb-2">
								Info alert with <a href="#" class="alert-link">an example link</a>.
								<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
							</div>
						</div>
						<div class="col-md-4">
							<div class="alert alert-purple alert-dismissible fade show mb-2">
								Purple alert with <a href="#" class="alert-link">an example link</a>.
								<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
							</div>
						</div>
						<div class="col-md-4">
							<div class="alert alert-indigo alert-dismissible fade show mb-2">
								Indigo alert with <a href="#" class="alert-link">an example link</a>.
								<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
							</div>
						</div>
						<div class="col-md-4">
							<div class="alert alert-success alert-dismissible fade show mb-2">
								Success alert with <a href="#" class="alert-link">an example link</a>.
								<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
							</div>
						</div>
						<div class="col-md-4">
							<div class="alert alert-green alert-dismissible fade show mb-2">
								Green alert with <a href="#" class="alert-link">an example link</a>.
								<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
							</div>
						</div>
						<div class="col-md-4">
							<div class="alert alert-lime alert-dismissible fade show mb-2">
								Lime alert with <a href="#" class="alert-link">an example link</a>.
								<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
							</div>
						</div>
						<div class="col-md-4">
							<div class="alert alert-warning alert-dismissible fade show mb-2">
								Warning alert with <a href="#" class="alert-link">an example link</a>.
								<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
							</div>
						</div>
						<div class="col-md-4">
							<div class="alert alert-yellow alert-dismissible fade show mb-2">
								Yellow alert with <a href="#" class="alert-link">an example link</a>.
								<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
							</div>
						</div>
						<div class="col-md-4">
							<div class="alert alert-danger alert-dismissible fade show mb-2">
								Danger alert with <a href="#" class="alert-link">an example link</a>.
								<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
							</div>
						</div>
						<div class="col-md-4">
							<div class="alert alert-pink alert-dismissible fade show mb-2">
								Pink alert with <a href="#" class="alert-link">an example link</a>.
								<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
							</div>
						</div>
						<div class="col-md-4">
							<div class="alert alert-dark alert-dismissible fade show mb-2">
								Dark alert with <a href="#" class="alert-link">an example link</a>.
								<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
							</div>
						</div>
						<div class="col-md-4">
							<div class="alert alert-secondary alert-dismissible fade show mb-2">
								Secondary alert with <a href="#" class="alert-link">an example link</a>.
								<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
							</div>
						</div>
						<div class="col-md-4">
							<div class="alert alert-light alert-dismissible fade show mb-2">
								Light alert with <a href="#" class="alert-link">an example link</a>.
								<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
							</div>
						</div>
					</div>
				</div>
				<!-- END panel-body -->
				<!-- BEGIN hljs-wrapper -->
				<div class="hljs-wrapper"><pre><code class="html">&lt;div class="alert alert-primary fade show"&gt;...&lt;/div&gt;
&lt;div class="alert alert-secondary fade show"&gt;...&lt;/div&gt;
&lt;div class="alert alert-success fade show"&gt;...&lt;/div&gt;
&lt;div class="alert alert-danger fade show"&gt;...&lt;/div&gt;
&lt;div class="alert alert-warning fade show"&gt;...&lt;/div&gt;
&lt;div class="alert alert-yellow fade show"&gt;...&lt;/div&gt;
&lt;div class="alert alert-info fade show"&gt;...&lt;/div&gt;
&lt;div class="alert alert-lime fade show"&gt;...&lt;/div&gt;
&lt;div class="alert alert-purple fade show"&gt;...&lt;/div&gt;
&lt;div class="alert alert-light fade show"&gt;...&lt;/div&gt;
&lt;div class="alert alert-dark fade show"&gt;...&lt;/div&gt;
&lt;div class="alert alert-indigo fade show"&gt;...&lt;/div&gt;
&lt;div class="alert alert-pink fade show"&gt;...&lt;/div&gt;
&lt;div class="alert alert-green fade show"&gt;...&lt;/div&gt;</code></pre>
				</div>
				<!-- END hljs-wrapper -->
			</div>
			<!-- END panel -->
			
			<!-- BEGIN panel -->
			<div class="panel panel-inverse" data-sortable-id="ui-general-3">
				<!-- BEGIN panel-heading -->
				<div class="panel-heading">
					<h4 class="panel-title">Notes</h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<!-- END panel-heading -->
				<!-- BEGIN panel-body -->
				<div class="panel-body">
					<div class="note note-primary mb-2">
						<div class="note-icon"><i class="fab fa-facebook-f"></i></div>
						<div class="note-content">
							<h4><b>Note with icon!</b></h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
								Maecenas id gravida libero. Etiam semper id sem a ultricies.
							</p>
						</div>
					</div>
					<div class="note note-warning note-with-end-icon mb-2">
						<div class="note-content text-end">
							<h4><b>Note with end icon!</b></h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
								Maecenas id gravida libero. Etiam semper id sem a ultricies.
							</p>
						</div>
						<div class="note-icon"><i class="fa fa-lightbulb"></i></div>
					</div>
					<div class="note note-gray-500 mb-0">
						<div class="note-content">
							<h4><b>Note without icon!</b></h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
								Maecenas id gravida libero. Etiam semper id sem a ultricies.
							</p>
						</div>
					</div>
				</div>
				<!-- END panel-body -->
				<!-- BEGIN hljs-wrapper -->
				<div class="hljs-wrapper"><pre><code>&lt;!-- default --&gt;
&lt;div class="note note-primary"&gt;
  &lt;div class="note-icon"&gt;&lt;i class="fab fa-facebook-f"&gt;&lt;/i&gt;&lt;/div&gt;
  &lt;div class="note-content"&gt;
    &lt;h4&gt;&lt;b&gt;Note with icon!&lt;/b&gt;&lt;/h4&gt;
    &lt;p&gt; ... &lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- with end icon --&gt;
&lt;div class="note note-warning note-with-end-icon"&gt;
  &lt;div class="note-icon"&gt;...&lt;/div&gt;
  &lt;div class="note-content text-end"&gt;
    ...
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
				</div>
				<!-- END hljs-wrapper -->
			</div>
			<!-- END panel -->
		</div>
		<!-- END col-6 -->
		<!-- BEGIN col-6 -->
		<div class="col-xl-6">
			<!-- BEGIN panel -->
			<div class="panel panel-inverse" data-sortable-id="ui-general-4">
				<!-- BEGIN panel-heading -->
				<div class="panel-heading">
					<h4 class="panel-title">Badges <span class="badge bg-success ms-1">NEW</span></h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<!-- END panel-heading -->
				<!-- BEGIN panel-body -->
				<div class="panel-body">
					<div class="row fs-14px">
						<div class="col-md-8">
							<div class="mb-3px">
								<span class="badge bg-danger">Danger</span>
								<span class="badge bg-warning">Warning</span>
								<span class="badge bg-yellow text-black">Yellow</span>
								<span class="badge bg-lime">Lime</span>
								<span class="badge bg-green">Green</span>
								<span class="badge bg-success">Success</span>
							</div>
							<div class="mb-3px">
								<span class="badge bg-primary">Primary</span>
								<span class="badge bg-info">Info</span>
								<span class="badge bg-purple">Purple</span>
								<span class="badge bg-indigo">Indigo</span>
								<span class="badge bg-dark">Dark</span>
							</div>
							<div class="">
								<span class="badge bg-pink">Pink</span>
								<span class="badge bg-secondary">Secondary</span>
								<span class="badge bg-default">Default</span>
								<span class="badge bg-light text-black">Light</span>
							</div>
						</div>
						<div class="col-md-4">
							<div class="mb-3px">
								<span class="badge bg-inverse rounded-pill">Badge pill</span>
							</div>
							<div>
								<span class="badge bg-secondary rounded-0">Badge square</span>
							</div>
						</div>
					</div>
				</div>
				<!-- END panel-body -->
				<!-- BEGIN hljs-wrapper -->
				<div class="hljs-wrapper"><pre><code>&lt;!-- badge --&gt;
&lt;span class="badge bg-primary"&gt;badge&lt;/span&gt;

&lt;!-- badge-pill --&gt;
&lt;span class="badge bg-danger rounded-pill"&gt;badge-pill&lt;/span&gt;

&lt;!-- badge-square --&gt;
&lt;span class="badge bg-inverse rounded-0"&gt;badge-square&lt;/span&gt;</code></pre>
				</div>
				<!-- END hljs-wrapper -->
			</div>
			<!-- END panel -->
								
			<!-- BEGIN panel -->
			<div class="panel panel-inverse" data-sortable-id="ui-general-5">
				<!-- BEGIN panel-heading -->
				<div class="panel-heading">
					<h4 class="panel-title">Pagination</h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<!-- END panel-heading -->
				<!-- BEGIN panel-body -->
				<div class="panel-body">
					<div>
						<div class="pagination pagination-lg mb-2">
							<div class="page-item disabled"><a href="javascript:;" class="page-link">«</a></div>
							<div class="page-item active"><a href="javascript:;" class="page-link">1</a></div>
							<div class="page-item"><a href="javascript:;" class="page-link">2</a></div>
							<div class="page-item"><a href="javascript:;" class="page-link">3</a></div>
							<div class="page-item"><a href="javascript:;" class="page-link">4</a></div>
							<div class="page-item"><a href="javascript:;" class="page-link">5</a></div>
							<div class="page-item"><a href="javascript:;" class="page-link">»</a></div>
						</div>
					</div>
					<div>
						<ul class="pagination mb-2">
							<div class="page-item disabled"><a href="javascript:;" class="page-link">«</a></div>
							<div class="page-item active"><a href="javascript:;" class="page-link">1</a></div>
							<div class="page-item"><a href="javascript:;" class="page-link">2</a></div>
							<div class="page-item"><a href="javascript:;" class="page-link">3</a></div>
							<div class="page-item"><a href="javascript:;" class="page-link">4</a></div>
							<div class="page-item"><a href="javascript:;" class="page-link">5</a></div>
							<div class="page-item"><a href="javascript:;" class="page-link">»</a></div>
						</ul>
					</div>
					<div>
						<div class="pagination pagination-sm mb-3">
							<div class="page-item disabled"><a href="javascript:;" class="page-link">«</a></div>
							<div class="page-item active"><a href="javascript:;" class="page-link">1</a></div>
							<div class="page-item"><a href="javascript:;" class="page-link">2</a></div>
							<div class="page-item"><a href="javascript:;" class="page-link">3</a></div>
							<div class="page-item"><a href="javascript:;" class="page-link">4</a></div>
							<div class="page-item"><a href="javascript:;" class="page-link">5</a></div>
							<div class="page-item"><a href="javascript:;" class="page-link">»</a></div>
						</div>
					</div>
					<div class="pagination mb-2">
						<div class="page-item ms-auto"><a href="javascript:;" class="page-link rounded-pill px-3">Previous</a></div>
						<div class="page-item me-auto"><a href="javascript:;" class="page-link rounded-pill px-3">Next</a></div>
					</div>
					<div class="pagination">
						<div class="page-item disabled"><a href="javascript:;" class="page-link rounded-pill px-3">&larr; Older</a></div>
						<div class="page-item ms-auto"><a href="javascript:;" class="page-link rounded-pill px-3">Newer &rarr;</a></div>
					</div>
				</div>
				<!-- END panel-body -->
				<!-- BEGIN hljs-wrapper -->
				<div class="hljs-wrapper"><pre><code>&lt;!-- pagination --&gt;
&lt;div class="pagination"&gt;
  &lt;div class="page-item disabled"&gt;&lt;a href="#" class="page-link"&gt;«&lt;/a&gt;&lt;/div&gt;
  &lt;div class="page-item active"&gt;&lt;a href="#" class="page-link"&gt;1&lt;/a&gt;&lt;/div&gt;
  &lt;div class="page-item"&gt;&lt;a href="#" class="page-link"&gt;2&lt;/a&gt;&lt;/div&gt;
  &lt;div class="page-item"&gt;&lt;a href="#" class="page-link"&gt;3&lt;/a&gt;&lt;/div&gt;
  &lt;div class="page-item"&gt;&lt;a href="#" class="page-link"&gt;4&lt;/a&gt;&lt;/div&gt;
  &lt;div class="page-item"&gt;&lt;a href="#" class="page-link"&gt;5&lt;/a&gt;&lt;/div&gt;
  &lt;div class="page-item"&gt;&lt;a href="#" class="page-link"&gt;»&lt;/a&gt;&lt;/div&gt;
&lt;/div&gt;

&lt;!-- pagination rounded --&gt;
&lt;div class="pagination"&gt;
  &lt;div class="page-item me-auto"&gt;
    &lt;a href="#" class="page-link rounded-pill px-3"&gt;Previous&lt;/a&gt;
  &lt;/div&gt;
  &lt;div class="page-item"&gt;
    &lt;a href="#" class="page-link rounded-pill px-3"&gt;Next&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
				</div>
				<!-- END hljs-wrapper -->
			</div>
			<!-- END panel -->
								
			<!-- BEGIN panel -->
			<div class="panel panel-inverse" data-sortable-id="ui-general-6">
				<!-- BEGIN panel-heading -->
				<div class="panel-heading">
					<h4 class="panel-title">Progress bar</h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<!-- END panel-heading -->
				<!-- BEGIN panel-body -->
				<div class="panel-body">
					<div class="row">
						<div class="col-md-6 mb-3 mb-md-0">
							<div class="progress mb-2">
								<div class="progress-bar fs-10px fw-bold" style="width: 80%">Basic</div>
							</div>
							<div class="progress">
								<div class="progress-bar bg-warning progress-bar-striped fs-10px fw-bold" style="width: 80%">Striped</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="progress rounded-pill mb-2">
								<div class="progress-bar bg-indigo progress-bar-striped progress-bar-animated rounded-pill fs-10px fw-bold" style="width: 80%">Animated</div>
							</div>
							<div class="progress rounded-pill">
								<div class="progress-bar bg-dark fs-10px fw-bold" style="width: 25%">Stacked</div>
								<div class="progress-bar bg-grey fs-10px fw-bold" style="width: 25%">Stacked</div>
								<div class="progress-bar bg-lime fs-10px fw-bold" style="width: 25%">Stacked</div>
							</div>
						</div>
					</div>
				</div>
				<!-- END panel-body -->
				<!-- BEGIN hljs-wrapper -->
				<div class="hljs-wrapper"><pre><code>&lt;!-- default --&gt;
&lt;div class="progress"&gt;
  &lt;div class="progress-bar fs-10px fw-bold" style="width: 80%"&gt;Basic&lt;/div&gt;
&lt;/div&gt;

&lt;!-- striped --&gt;
&lt;div class="progress progress-striped"&gt;
  &lt;div class="progress-bar bg-warning" style="width: 80%"&gt;
    Striped
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- animated --&gt;
&lt;div class="progress progress-striped active"&gt;
  ...
&lt;/div&gt;

&lt;!-- stacked --&gt;
&lt;div class="progress"&gt;
  &lt;div class="progress-bar bg-dark" style="width: 25%"&gt;...&lt;/div&gt;
  &lt;div class="progress-bar bg-grey" style="width: 25%"&gt;...&lt;/div&gt;
  &lt;div class="progress-bar bg-lime" style="width: 25%"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
				</div>
				<!-- END hljs-wrapper -->
			</div>
			<!-- END panel -->
		</div>
		<!-- END col-6 -->
	</div>
	<!-- END row -->
@endsection

@push('scripts')
	<script src="/assets/plugins/@highlightjs/cdn-assets/highlight.min.js"></script>
	<script src="/assets/js/demo/render.highlight.js"></script>
@endpush
