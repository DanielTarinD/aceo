@extends('layouts.default')

@section('title', 'Tabs & Accordions')

@push('scripts')
	<script src="/assets/plugins/@highlightjs/cdn-assets/highlight.min.js"></script>
	<script src="/assets/js/demo/render.highlight.js"></script>
@endpush

@section('content')
	<!-- BEGIN breadcrumb -->
	<ol class="breadcrumb float-xl-end">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">UI Elements</a></li>
		<li class="breadcrumb-item active">Tabs & Accordions</li>
	</ol>
	<!-- END breadcrumb -->
	<!-- BEGIN page-header -->
	<h1 class="page-header">Tabs & Accordions <small>header small text goes here...</small></h1>
	<!-- END page-header -->
	
	<!-- BEGIN row -->
	<div class="row">
		<!-- BEGIN col-6 -->
		<div class="col-xl-6">
			<!-- BEGIN nav-tabs -->
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a href="#default-tab-1" data-bs-toggle="tab" class="nav-link active">
						<span class="d-sm-none">Tab 1</span>
						<span class="d-sm-block d-none">Default Tab 1</span>
					</a>
				</li>
				<li class="nav-item">
					<a href="#default-tab-2" data-bs-toggle="tab" class="nav-link">
						<span class="d-sm-none">Tab 2</span>
						<span class="d-sm-block d-none">Default Tab 2</span>
					</a>
				</li>
				<li class="nav-item">
					<a href="#default-tab-3" data-bs-toggle="tab" class="nav-link">
						<span class="d-sm-none">Tab 3</span>
						<span class="d-sm-block d-none">Default Tab 3</span>
					</a>
				</li>
			</ul>
			<!-- END nav-tabs -->
			<!-- BEGIN tab-content -->
			<div class="tab-content bg-white p-3">
				<!-- BEGIN tab-pane -->
				<div class="tab-pane fade active show" id="default-tab-1">
					<h3 class="mt-10px"><i class="fa fa-cog"></i> Lorem ipsum dolor sit amet</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
						est diam sagittis orci, a ornare nisi quam elementum tortor. Proin interdum ante porta est convallis 
						dapibus dictum in nibh. Aenean quis massa congue metus mollis fermentum eget et tellus. 
						Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, nec eleifend orci eros id lectus.
					</p>
					<p class="text-end mb-0">
						<a href="javascript:;" class="btn btn-white me-5px">Default</a>
						<a href="javascript:;" class="btn btn-primary">Primary</a>
					</p>
				</div>
				<!-- END tab-pane -->
				<!-- BEGIN tab-pane -->
				<div class="tab-pane fade" id="default-tab-2">
					<blockquote class="blockquote">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</blockquote>
					<figcaption class="blockquote-footer">
						Someone famous in <cite title="Source Title">Source Title</cite>
					</figcaption>
					<h4>Lorem ipsum dolor sit amet</h4>
					<p>
						Nullam ac sapien justo. Nam augue mauris, malesuada non magna sed, feugiat blandit ligula. 
						In tristique tincidunt purus id iaculis. Pellentesque volutpat tortor a mauris convallis, 
						sit amet scelerisque lectus adipiscing.
					</p>
				</div>
				<!-- END tab-pane -->
				<!-- BEGIN tab-pane -->
				<div class="tab-pane fade" id="default-tab-3">
					<p>
						<span class="fa-stack fa-4x float-start me-10px">
							<i class="fa fa-square fa-stack-2x"></i>
							<i class="fab fa-twitter text-white fa-stack-1x"></i>
						</span>
						Praesent tincidunt nulla ut elit vestibulum viverra. Sed placerat magna eget eros accumsan elementum. 
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis lobortis neque. 
						Maecenas justo odio, bibendum fringilla quam nec, commodo rutrum quam. 
						Donec cursus erat in lacus congue sodales. Nunc bibendum id augue sit amet placerat. 
						Quisque et quam id felis tempus volutpat at at diam. Vivamus ac diam turpis.Sed at lacinia augue. 
						Nulla facilisi. Fusce at erat suscipit, dapibus elit quis, luctus nulla. 
						Quisque adipiscing dui nec orci fermentum blandit.
						Sed at lacinia augue. Nulla facilisi. Fusce at erat suscipit, dapibus elit quis, luctus nulla. 
						Quisque adipiscing dui nec orci fermentum blandit.
					</p>
				</div>
				<!-- END tab-pane -->
			</div>
			<!-- END tab-content -->
			<!-- BEGIN hljs-wrapper -->
			<div class="hljs-wrapper rounded-0 rounded-bottom mb-4">
				<pre><code class="html">&lt;ul class="nav nav-tabs"&gt;
  &lt;li class="nav-item"&gt;
    &lt;a href="#default-tab-1" data-bs-toggle="tab" class="nav-link active"&gt;Tab 1&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;
&lt;div class="tab-content bg-white p-3 rounded-bottom"&gt;
  &lt;div class="tab-pane fade active show" id="default-tab-1"&gt;
    ...
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
			</div>
			<!-- END hljs-wrapper -->
			
			<!-- BEGIN nav-pills -->
			<ul class="nav nav-pills mb-2">
				<li class="nav-item">
					<a href="#nav-pills-tab-1" data-bs-toggle="tab" class="nav-link active">
						<span class="d-sm-none">Pills 1</span>
						<span class="d-sm-block d-none">Pills Tab 1</span>
					</a>
				</li>
				<li class="nav-item">
					<a href="#nav-pills-tab-2" data-bs-toggle="tab" class="nav-link">
						<span class="d-sm-none">Pills 2</span>
						<span class="d-sm-block d-none">Pills Tab 2</span>
					</a>
				</li>
				<li class="nav-item">
					<a href="#nav-pills-tab-3" data-bs-toggle="tab" class="nav-link">
						<span class="d-sm-none">Pills 3</span>
						<span class="d-sm-block d-none">Pills Tab 3</span>
					</a>
				</li>
				<li class="nav-item">
					<a href="#nav-pills-tab-4" data-bs-toggle="tab" class="nav-link">
						<span class="d-sm-none">Pills 4</span>
						<span class="d-sm-block d-none">Pills Tab 4</span>
					</a>
				</li>
			</ul>
			<!-- END nav-pills -->
			<!-- BEGIN tab-content -->
			<div class="tab-content p-3 rounded-top bg-white">
				<!-- BEGIN tab-pane -->
				<div class="tab-pane fade active show" id="nav-pills-tab-1">
					<h3 class="mt-10px">Nav Pills Tab 1</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
						est diam sagittis orci, a ornare nisi quam elementum tortor. 
						Proin interdum ante porta est convallis dapibus dictum in nibh. 
						Aenean quis massa congue metus mollis fermentum eget et tellus. 
						Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
						nec eleifend orci eros id lectus.
					</p>
				</div>
				<!-- END tab-pane -->
				<!-- BEGIN tab-pane -->
				<div class="tab-pane fade" id="nav-pills-tab-2">
					<h3 class="mt-10px">Nav Pills Tab 2</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
						est diam sagittis orci, a ornare nisi quam elementum tortor. 
						Proin interdum ante porta est convallis dapibus dictum in nibh. 
						Aenean quis massa congue metus mollis fermentum eget et tellus. 
						Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
						nec eleifend orci eros id lectus.
					</p>
				</div>
				<!-- END tab-pane -->
				<!-- BEGIN tab-pane -->
				<div class="tab-pane fade" id="nav-pills-tab-3">
					<h3 class="mt-10px">Nav Pills Tab 3</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
						est diam sagittis orci, a ornare nisi quam elementum tortor. 
						Proin interdum ante porta est convallis dapibus dictum in nibh. 
						Aenean quis massa congue metus mollis fermentum eget et tellus. 
						Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
						nec eleifend orci eros id lectus.
					</p>
				</div>
				<!-- END tab-pane -->
				<!-- BEGIN tab-pane -->
				<div class="tab-pane fade" id="nav-pills-tab-4">
					<h3 class="mt-10px">Nav Pills Tab 4</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						Integer ac dui eu felis hendrerit lobortis. Phasellus elementum, nibh eget adipiscing porttitor, 
						est diam sagittis orci, a ornare nisi quam elementum tortor. 
						Proin interdum ante porta est convallis dapibus dictum in nibh. 
						Aenean quis massa congue metus mollis fermentum eget et tellus. 
						Aenean tincidunt, mauris ut dignissim lacinia, nisi urna consectetur sapien, 
						nec eleifend orci eros id lectus.
					</p>
				</div>
				<!-- END tab-pane -->
			</div>
			<!-- END tab-content -->
			<!-- BEGIN hljs-wrapper -->
			<div class="hljs-wrapper rounded-0 rounded-bottom mb-4">
				<pre><code class="html">&lt;ul class="nav nav-pills"&gt;
  &lt;li class="nav-item"&gt;
    &lt;a href="#default-tab-1" data-bs-toggle="tab" class="nav-link active"&gt;Tab 1&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;

&lt;div class="tab-content bg-white p-3 rounded"&gt;
  &lt;div class="tab-pane fade active show" id="default-tab-1"&gt;
    ...
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
			</div>
			<!-- END hljs-wrapper -->
		</div>
		<!-- END col-6 -->
		<!-- BEGIN col-6 -->
		<div class="col-xl-6">
			<!-- BEGIN #accordion -->
			<div class="accordion" id="accordion">
				<div class="accordion-item border-0">
					<div class="accordion-header" id="headingOne">
						<button class="accordion-button bg-gray-900 text-white px-3 py-10px pointer-cursor" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
							<i class="fa fa-circle fa-fw text-blue me-2 fs-8px"></i> Collapsible Group Item #1
						</button>
					</div>
					<div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordion">
						<div class="accordion-body bg-gray-800 text-white">
							Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						</div>
					</div>
				</div>
				<div class="accordion-item border-0">
					<div class="accordion-header" id="headingTwo">
						<button class="accordion-button bg-gray-900 text-white px-3 pt-10px pb-10px pointer-cursor collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
							<i class="fa fa-circle fa-fw text-indigo me-2 fs-8px"></i> Collapsible Group Item #2
						</button>
					</div>
					<div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordion">
						<div class="accordion-body bg-gray-800 text-white">
							Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						</div>
					</div>
				</div>
				<div class="accordion-item border-0">
					<div class="accordion-header" id="headingThree">
						<button class="accordion-button bg-gray-900 text-white px-3 pt-10px pb-10px pointer-cursor collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
							<i class="fa fa-circle fa-fw text-teal me-2 fs-8px"></i> Collapsible Group Item #3
						</button>
					</div>
					<div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordion">
						<div class="accordion-body bg-gray-800 text-white">
							Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						</div>
					</div>
				</div>
				<div class="accordion-item border-0">
					<div class="accordion-header" id="headingFour">
						<button class="accordion-button bg-gray-900 text-white px-3 pt-10px pb-10px pointer-cursor collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
							<i class="fa fa-circle fa-fw text-info me-2 fs-8px"></i> Collapsible Group Item #4
						</button>
					</div>
					<div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordion">
						<div class="accordion-body bg-gray-800 text-white">
							Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						</div>
					</div>
				</div>
				<div class="accordion-item border-0">
					<div class="accordion-header" id="headingFive">
						<button class="accordion-button bg-gray-900 text-white px-3 pt-10px pb-10px pointer-cursor collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
							<i class="fa fa-circle fa-fw text-warning me-2 fs-8px"></i> Collapsible Group Item #5
						</button>
					</div>
					<div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordion">
						<div class="accordion-body bg-gray-800 text-white">
							Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						</div>
					</div>
				</div>
				<div class="accordion-item border-0">
					<div class="accordion-header" id="headingSix">
						<button class="accordion-button bg-gray-900 text-white px-3 pt-10px pb-10px pointer-cursor collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix">
							<i class="fa fa-circle fa-fw text-danger me-2 fs-8px"></i> Collapsible Group Item #6
						</button>
					</div>
					<div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordion">
						<div class="accordion-body bg-gray-800 text-white">
							Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						</div>
					</div>
				</div>
				<div class="accordion-item border-0">
					<div class="accordion-header" id="headingSeven">
						<button class="accordion-button bg-gray-900 text-white px-3 pt-10px pb-10px pointer-cursor collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven">
							<i class="fa fa-circle fa-fw text-muted me-2 fs-8px"></i> Collapsible Group Item #7
						</button>
					</div>
					<div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordion">
						<div class="accordion-body bg-gray-800 text-white">
							Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						</div>
					</div>
				</div>
				<!-- BEGIN hljs-wrapper -->
				<div class="hljs-wrapper rounded-0 rounded-bottom m-0">
					<pre class="m-0"><code class="html">&lt;div class="accordion" id="accordion"&gt;
  &lt;div class="accordion-item border-0"&gt;
    &lt;div class="accordion-header" id="headingOne"&gt;
      &lt;button class="accordion-button bg-gray-900 text-white px-3 py-10px pointer-cursor" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"&gt;
        &lt;i class="fa fa-circle fa-fw text-blue me-2 fs-8px"&gt;&lt;/i&gt; Collapsible Group Item #1
      &lt;/button&gt;
    &lt;/div&gt;
    &lt;div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordion"&gt;
      &lt;div class="accordion-body bg-gray-800 text-white"&gt;
        ...
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  ...
&lt;/div&gt;</code></pre>
				</div>
				<!-- END hljs-wrapper -->
			</div>
			<!-- END #accordion -->
		</div>
		<!-- END col-6 -->
	</div>
	<!-- END row -->
@endsection