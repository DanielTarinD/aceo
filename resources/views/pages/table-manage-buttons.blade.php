@extends('layouts.default')

@section('title', 'Managed Tables - Buttons')

@push('css')
	<link href="/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
	<link href="/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" />
	<link href="/assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" />
@endpush

@push('scripts')
	<script src="/assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="/assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
	<script src="/assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
	<script src="/assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
	<script src="/assets/plugins/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
	<script src="/assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js"></script>
	<script src="/assets/plugins/datatables.net-buttons/js/buttons.flash.min.js"></script>
	<script src="/assets/plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
	<script src="/assets/plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
	<script src="/assets/plugins/pdfmake/build/pdfmake.min.js"></script>
	<script src="/assets/plugins/pdfmake/build/vfs_fonts.js"></script>
	<script src="/assets/plugins/jszip/dist/jszip.min.js"></script>
	<script src="/assets/js/demo/table-manage-buttons.demo.js"></script>
	<script src="/assets/plugins/@highlightjs/cdn-assets/highlight.min.js"></script>
	<script src="/assets/js/demo/render.highlight.js"></script>
@endpush

@section('content')
	<!-- BEGIN breadcrumb -->
	<ol class="breadcrumb float-xl-end">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">Tables</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">Managed Tables</a></li>
		<li class="breadcrumb-item active">Buttons</li>
	</ol>
	<!-- END breadcrumb -->
	<!-- BEGIN page-header -->
	<h1 class="page-header">Managed Tables - Buttons <small>header small text goes here...</small></h1>
	<!-- END page-header -->
	<!-- BEGIN row -->
	<div class="row">
		<!-- BEGIN col-2 -->
		<div class="col-xl-2">
			<h5>
				Key features include:
			</h5>
			<ul class="ps-25px mb-3">
				<li>HTML5 export buttons - Copy to clipboard; Save to Excel, CSV and PDF</li>
				<li>Flash export buttons - Copy to clipboard; Save to Excel, CSV and PDF for older browsers</li>
				<li>Print view</li>
				<li>Column visibility buttons</li>
			</ul>
			<p class="mb-20px">
				<a href="http://www.datatables.net/extensions/buttons/" target="_blank" class="btn btn-inverse btn-sm">View Official Website</a>
			</p>
		</div>
		<!-- END col-2 -->
		<!-- BEGIN col-10 -->
		<div class="col-xl-10">
			<!-- BEGIN panel -->
			<div class="panel panel-inverse">
				<!-- BEGIN panel-heading -->
				<div class="panel-heading">
					<h4 class="panel-title">DataTable - Buttons</h4>
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-default" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-success" data-toggle="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-warning" data-toggle="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-danger" data-toggle="panel-remove"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<!-- END panel-heading -->
				<!-- BEGIN alert -->
				<div class="alert alert-warning alert-dismissible rounded-0 mb-0 fade show">
					<button type="button" class="btn-close" data-bs-dismiss="alert">
					</button>
					The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
				</div>
				<!-- END alert -->
				<!-- BEGIN panel-body -->
				<div class="panel-body">
					<table id="data-table-buttons" class="table table-striped table-bordered align-middle">
						<thead>
							<tr>
								<th width="1%"></th>
								<th width="1%" data-orderable="false"></th>
								<th class="text-nowrap">Rendering engine</th>
								<th class="text-nowrap">Browser</th>
								<th class="text-nowrap">Platform(s)</th>
								<th class="text-nowrap">Engine version</th>
								<th class="text-nowrap">CSS grade</th>
							</tr>
						</thead>
						<tbody>
							<tr class="odd gradeX">
								<td width="1%" class="fw-bold text-inverse">1</td>
								<td width="1%"><img src="/assets/img/user/user-1.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Trident</td>
								<td>Internet Explorer 4.0</td>
								<td>Win 95+</td>
								<td>4</td>
								<td>X</td>
							</tr>
							<tr class="even gradeC">
								<td width="1%" class="fw-bold text-inverse">2</td>
								<td width="1%"><img src="/assets/img/user/user-2.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Trident</td>
								<td>Internet Explorer 5.0</td>
								<td>Win 95+</td>
								<td>5</td>
								<td>C</td>
							</tr>
							<tr class="odd gradeA">
								<td width="1%" class="fw-bold text-inverse">3</td>
								<td width="1%"><img src="/assets/img/user/user-3.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Trident</td>
								<td>Internet Explorer 5.5</td>
								<td>Win 95+</td>
								<td>5.5</td>
								<td>A</td>
							</tr>
							<tr class="even gradeA">
								<td width="1%" class="fw-bold text-inverse">4</td>
								<td width="1%"><img src="/assets/img/user/user-4.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Trident</td>
								<td>Internet Explorer 6</td>
								<td>Win 98+</td>
								<td>6</td>
								<td>A</td>
							</tr>
							<tr class="odd gradeA">
								<td width="1%" class="fw-bold text-inverse">5</td>
								<td width="1%"><img src="/assets/img/user/user-5.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Trident</td>
								<td>Internet Explorer 7</td>
								<td>Win XP SP2+</td>
								<td>7</td>
								<td>A</td>
							</tr>
							<tr class="even gradeA">
								<td width="1%" class="fw-bold text-inverse">6</td>
								<td width="1%"><img src="/assets/img/user/user-6.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Trident</td>
								<td>AOL browser (AOL desktop)</td>
								<td>Win XP</td>
								<td>6</td>
								<td>A</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="fw-bold text-inverse">7</td>
								<td width="1%"><img src="/assets/img/user/user-7.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Gecko</td>
								<td>Firefox 1.0</td>
								<td>Win 98+ / OSX.2+</td>
								<td>1.7</td>
								<td>A</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="fw-bold text-inverse">8</td>
								<td width="1%"><img src="/assets/img/user/user-8.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Gecko</td>
								<td>Firefox 1.5</td>
								<td>Win 98+ / OSX.2+</td>
								<td>1.8</td>
								<td>A</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="fw-bold text-inverse">9</td>
								<td width="1%"><img src="/assets/img/user/user-9.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Gecko</td>
								<td>Firefox 2.0</td>
								<td>Win 98+ / OSX.2+</td>
								<td>1.8</td>
								<td>A</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="fw-bold text-inverse">10</td>
								<td width="1%"><img src="/assets/img/user/user-10.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Gecko</td>
								<td>Firefox 3.0</td>
								<td>Win 2k+ / OSX.3+</td>
								<td>1.9</td>
								<td>A</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="fw-bold text-inverse">11</td>
								<td width="1%"><img src="/assets/img/user/user-11.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Gecko</td>
								<td>Camino 1.0</td>
								<td>OSX.2+</td>
								<td>1.8</td>
								<td>A</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="fw-bold text-inverse">12</td>
								<td width="1%"><img src="/assets/img/user/user-12.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Gecko</td>
								<td>Camino 1.5</td>
								<td>OSX.3+</td>
								<td>1.8</td>
								<td>A</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="fw-bold text-inverse">13</td>
								<td width="1%"><img src="/assets/img/user/user-13.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Gecko</td>
								<td>Netscape 7.2</td>
								<td>Win 95+ / Mac OS 8.6-9.2</td>
								<td>1.7</td>
								<td>A</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="fw-bold text-inverse">14</td>
								<td width="1%"><img src="/assets/img/user/user-14.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Gecko</td>
								<td>Netscape Browser 8</td>
								<td>Win 98SE+</td>
								<td>1.7</td>
								<td>A</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="fw-bold text-inverse">15</td>
								<td width="1%"><img src="/assets/img/user/user-1.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Gecko</td>
								<td>Netscape Navigator 9</td>
								<td>Win 98+ / OSX.2+</td>
								<td>1.8</td>
								<td>A</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="fw-bold text-inverse">16</td>
								<td width="1%"><img src="/assets/img/user/user-2.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Gecko</td>
								<td>Mozilla 1.0</td>
								<td>Win 95+ / OSX.1+</td>
								<td>1</td>
								<td>A</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="fw-bold text-inverse">17</td>
								<td width="1%"><img src="/assets/img/user/user-3.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Gecko</td>
								<td>Mozilla 1.1</td>
								<td>Win 95+ / OSX.1+</td>
								<td>1.1</td>
								<td>A</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="fw-bold text-inverse">18</td>
								<td width="1%"><img src="/assets/img/user/user-4.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Gecko</td>
								<td>Mozilla 1.2</td>
								<td>Win 95+ / OSX.1+</td>
								<td>1.2</td>
								<td>A</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="fw-bold text-inverse">19</td>
								<td width="1%"><img src="/assets/img/user/user-5.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Gecko</td>
								<td>Mozilla 1.3</td>
								<td>Win 95+ / OSX.1+</td>
								<td>1.3</td>
								<td>A</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="fw-bold text-inverse">20</td>
								<td width="1%"><img src="/assets/img/user/user-6.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Gecko</td>
								<td>Mozilla 1.4</td>
								<td>Win 95+ / OSX.1+</td>
								<td>1.4</td>
								<td>A</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="fw-bold text-inverse">21</td>
								<td width="1%"><img src="/assets/img/user/user-7.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Gecko</td>
								<td>Mozilla 1.5</td>
								<td>Win 95+ / OSX.1+</td>
								<td>1.5</td>
								<td>A</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="fw-bold text-inverse">22</td>
								<td width="1%"><img src="/assets/img/user/user-8.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Gecko</td>
								<td>Mozilla 1.6</td>
								<td>Win 95+ / OSX.1+</td>
								<td>1.6</td>
								<td>A</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="fw-bold text-inverse">23</td>
								<td width="1%"><img src="/assets/img/user/user-9.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Gecko</td>
								<td>Mozilla 1.7</td>
								<td>Win 98+ / OSX.1+</td>
								<td>1.7</td>
								<td>A</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="fw-bold text-inverse">24</td>
								<td width="1%"><img src="/assets/img/user/user-10.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Gecko</td>
								<td>Mozilla 1.8</td>
								<td>Win 98+ / OSX.1+</td>
								<td>1.8</td>
								<td>A</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="fw-bold text-inverse">25</td>
								<td width="1%"><img src="/assets/img/user/user-11.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Gecko</td>
								<td>Seamonkey 1.1</td>
								<td>Win 98+ / OSX.2+</td>
								<td>1.8</td>
								<td>A</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="fw-bold text-inverse">26</td>
								<td width="1%"><img src="/assets/img/user/user-12.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Gecko</td>
								<td>Epiphany 2.20</td>
								<td>Gnome</td>
								<td>1.8</td>
								<td>A</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="fw-bold text-inverse">27</td>
								<td width="1%"><img src="/assets/img/user/user-13.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Webkit</td>
								<td>Safari 1.2</td>
								<td>OSX.3</td>
								<td>125.5</td>
								<td>A</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="fw-bold text-inverse">28</td>
								<td width="1%"><img src="/assets/img/user/user-14.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Webkit</td>
								<td>Safari 1.3</td>
								<td>OSX.3</td>
								<td>312.8</td>
								<td>A</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="fw-bold text-inverse">29</td>
								<td width="1%"><img src="/assets/img/user/user-1.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Webkit</td>
								<td>Safari 2.0</td>
								<td>OSX.4+</td>
								<td>419.3</td>
								<td>A</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="fw-bold text-inverse">30</td>
								<td width="1%"><img src="/assets/img/user/user-2.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Webkit</td>
								<td>Safari 3.0</td>
								<td>OSX.4+</td>
								<td>522.1</td>
								<td>A</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="fw-bold text-inverse">31</td>
								<td width="1%"><img src="/assets/img/user/user-3.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Webkit</td>
								<td>OmniWeb 5.5</td>
								<td>OSX.4+</td>
								<td>420</td>
								<td>A</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="fw-bold text-inverse">32</td>
								<td width="1%"><img src="/assets/img/user/user-4.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Webkit</td>
								<td>iPod Touch / iPhone</td>
								<td>iPod</td>
								<td>420.1</td>
								<td>A</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="fw-bold text-inverse">33</td>
								<td width="1%"><img src="/assets/img/user/user-5.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Webkit</td>
								<td>S60</td>
								<td>S60</td>
								<td>413</td>
								<td>A</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="fw-bold text-inverse">34</td>
								<td width="1%"><img src="/assets/img/user/user-6.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Presto</td>
								<td>Opera 7.0</td>
								<td>Win 95+ / OSX.1+</td>
								<td>-</td>
								<td>A</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="fw-bold text-inverse">35</td>
								<td width="1%"><img src="/assets/img/user/user-7.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Presto</td>
								<td>Opera 7.5</td>
								<td>Win 95+ / OSX.2+</td>
								<td>-</td>
								<td>A</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="fw-bold text-inverse">36</td>
								<td width="1%"><img src="/assets/img/user/user-8.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Presto</td>
								<td>Opera 8.0</td>
								<td>Win 95+ / OSX.2+</td>
								<td>-</td>
								<td>A</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="fw-bold text-inverse">37</td>
								<td width="1%"><img src="/assets/img/user/user-9.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Presto</td>
								<td>Opera 8.5</td>
								<td>Win 95+ / OSX.2+</td>
								<td>-</td>
								<td>A</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="fw-bold text-inverse">38</td>
								<td width="1%"><img src="/assets/img/user/user-10.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Presto</td>
								<td>Opera 9.0</td>
								<td>Win 95+ / OSX.3+</td>
								<td>-</td>
								<td>A</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="fw-bold text-inverse">39</td>
								<td width="1%"><img src="/assets/img/user/user-11.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Presto</td>
								<td>Opera 9.2</td>
								<td>Win 88+ / OSX.3+</td>
								<td>-</td>
								<td>A</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="fw-bold text-inverse">40</td>
								<td width="1%"><img src="/assets/img/user/user-12.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Presto</td>
								<td>Opera 9.5</td>
								<td>Win 88+ / OSX.3+</td>
								<td>-</td>
								<td>A</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="fw-bold text-inverse">41</td>
								<td width="1%"><img src="/assets/img/user/user-13.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Presto</td>
								<td>Opera for Wii</td>
								<td>Wii</td>
								<td>-</td>
								<td>A</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="fw-bold text-inverse">42</td>
								<td width="1%"><img src="/assets/img/user/user-14.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Presto</td>
								<td>Nokia N800</td>
								<td>N800</td>
								<td>-</td>
								<td>A</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="fw-bold text-inverse">43</td>
								<td width="1%"><img src="/assets/img/user/user-1.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Presto</td>
								<td>Nintendo DS browser</td>
								<td>Nintendo DS</td>
								<td>8.5</td>
								<td>C/A<sup>1</sup></td>
							</tr>
							<tr class="gradeC">
								<td width="1%" class="fw-bold text-inverse">44</td>
								<td width="1%"><img src="/assets/img/user/user-2.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>KHTML</td>
								<td>Konqureror 3.1</td>
								<td>KDE 3.1</td>
								<td>3.1</td>
								<td>C</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="fw-bold text-inverse">45</td>
								<td width="1%"><img src="/assets/img/user/user-3.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>KHTML</td>
								<td>Konqureror 3.3</td>
								<td>KDE 3.3</td>
								<td>3.3</td>
								<td>A</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="fw-bold text-inverse">46</td>
								<td width="1%"><img src="/assets/img/user/user-4.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>KHTML</td>
								<td>Konqureror 3.5</td>
								<td>KDE 3.5</td>
								<td>3.5</td>
								<td>A</td>
							</tr>
							<tr class="gradeX">
								<td width="1%" class="fw-bold text-inverse">47</td>
								<td width="1%"><img src="/assets/img/user/user-5.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Tasman</td>
								<td>Internet Explorer 4.5</td>
								<td>Mac OS 8-9</td>
								<td>-</td>
								<td>X</td>
							</tr>
							<tr class="gradeC">
								<td width="1%" class="fw-bold text-inverse">48</td>
								<td width="1%"><img src="/assets/img/user/user-6.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Tasman</td>
								<td>Internet Explorer 5.1</td>
								<td>Mac OS 7.6-9</td>
								<td>1</td>
								<td>C</td>
							</tr>
							<tr class="gradeC">
								<td width="1%" class="fw-bold text-inverse">49</td>
								<td width="1%"><img src="/assets/img/user/user-7.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Tasman</td>
								<td>Internet Explorer 5.2</td>
								<td>Mac OS 8-X</td>
								<td>1</td>
								<td>C</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="fw-bold text-inverse">50</td>
								<td width="1%"><img src="/assets/img/user/user-8.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Misc</td>
								<td>NetFront 3.1</td>
								<td>Embedded devices</td>
								<td>-</td>
								<td>C</td>
							</tr>
							<tr class="gradeA">
								<td width="1%" class="fw-bold text-inverse">51</td>
								<td width="1%"><img src="/assets/img/user/user-9.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Misc</td>
								<td>NetFront 3.4</td>
								<td>Embedded devices</td>
								<td>-</td>
								<td>A</td>
							</tr>
							<tr class="gradeX">
								<td width="1%" class="fw-bold text-inverse">52</td>
								<td width="1%"><img src="/assets/img/user/user-10.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Misc</td>
								<td>Dillo 0.8</td>
								<td>Embedded devices</td>
								<td>-</td>
								<td>X</td>
							</tr>
							<tr class="gradeX">
								<td width="1%" class="fw-bold text-inverse">53</td>
								<td width="1%"><img src="/assets/img/user/user-11.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Misc</td>
								<td>Links</td>
								<td>Text only</td>
								<td>-</td>
								<td>X</td>
							</tr>
							<tr class="gradeX">
								<td width="1%" class="fw-bold text-inverse">54</td>
								<td width="1%"><img src="/assets/img/user/user-12.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Misc</td>
								<td>Lynx</td>
								<td>Text only</td>
								<td>-</td>
								<td>X</td>
							</tr>
							<tr class="gradeC">
								<td width="1%" class="fw-bold text-inverse">55</td>
								<td width="1%"><img src="/assets/img/user/user-13.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Misc</td>
								<td>IE Mobile</td>
								<td>Windows Mobile 6</td>
								<td>-</td>
								<td>C</td>
							</tr>
							<tr class="gradeC">
								<td width="1%" class="fw-bold text-inverse">57</td>
								<td width="1%"><img src="/assets/img/user/user-14.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Misc</td>
								<td>PSP browser</td>
								<td>PSP</td>
								<td>-</td>
								<td>C</td>
							</tr>
							<tr class="gradeU">
								<td width="1%" class="fw-bold text-inverse">58</td>
								<td width="1%"><img src="/assets/img/user/user-1.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
								<td>Other browsers</td>
								<td>All others</td>
								<td>-</td>
								<td>-</td>
								<td>U</td>
							</tr>
						</tbody>
					</table>
				</div>
				<!-- END panel-body -->
				<!-- BEGIN hljs-wrapper -->
				<div class="hljs-wrapper">
					<pre><code class="html">&lt;!-- required files --&gt;
&lt;link href="/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" /&gt;
&lt;link href="/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" /&gt;
&lt;link href="/assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" /&gt;
&lt;script src="/assets/plugins/datatables.net/js/jquery.dataTables.min.js"&gt;&lt;/script&gt;
&lt;script src="/assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"&gt;&lt;/script&gt;
&lt;script src="/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"&gt;&lt;/script&gt;
&lt;script src="/assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"&gt;&lt;/script&gt;
&lt;script src="/assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js"&gt;&lt;/script&gt;
&lt;script src="/assets/plugins/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"&gt;&lt;/script&gt;
&lt;script src="/assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js"&gt;&lt;/script&gt;
&lt;script src="/assets/plugins/datatables.net-buttons/js/buttons.flash.min.js"&gt;&lt;/script&gt;
&lt;script src="/assets/plugins/datatables.net-buttons/js/buttons.html5.min.js"&gt;&lt;/script&gt;
&lt;script src="/assets/plugins/datatables.net-buttons/js/buttons.print.min.js"&gt;&lt;/script&gt;
&lt;script src="/assets/plugins/pdfmake/build/pdfmake.min.js"&gt;&lt;/script&gt;
&lt;script src="/assets/plugins/pdfmake/build/vfs_fonts.js"&gt;&lt;/script&gt;
&lt;script src="/assets/plugins/jszip/dist/jszip.min.js"&gt;&lt;/script&gt;

&lt;!-- html --&gt;
&lt;table id="data-table-buttons" class="table table-striped table-bordered align-middle"&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th width="1%"&gt;&lt;/th&gt;
      &lt;th width="1%" data-orderable="false"&gt;&lt;/th&gt;
      ...
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    ...
  &lt;/tbody&gt;
&lt;/table&gt;

&lt;!-- script --&gt;
&lt;script&gt;
  $('#data-table-default').DataTable({
    responsive: true,
    dom: '<"row"<"col-sm-5"B><"col-sm-7"fr>>t<"row"<"col-sm-5"i><"col-sm-7"p>>',
    buttons: [
      { extend: 'copy', className: 'btn-sm' },
      { extend: 'csv', className: 'btn-sm' },
      { extend: 'excel', className: 'btn-sm' },
      { extend: 'pdf', className: 'btn-sm' },
      { extend: 'print', className: 'btn-sm' }
    ],
  });
&lt;/script&gt;</code></pre>
				</div>
				<!-- END hljs-wrapper -->
			</div>
			<!-- END panel -->
		</div>
		<!-- END col-10 -->
	</div>
	<!-- END row -->
@endsection