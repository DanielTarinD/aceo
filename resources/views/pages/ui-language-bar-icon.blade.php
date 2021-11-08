@extends('layouts.default', ['appHeaderLanguageBar' => true])

@section('title', 'Language Bar & Icon')

@push('css')
  <link href="/assets/plugins/flag-icon-css/css/flag-icon.min.css" rel="stylesheet" />
@endpush

@push('scripts')
	<script src="/assets/plugins/@highlightjs/cdn-assets/highlight.min.js"></script>
	<script src="/assets/js/demo/render.highlight.js"></script>
@endpush

@section('content')
	<!-- BEGIN breadcrumb -->
	<ol class="breadcrumb float-xl-end">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">UI Elements</a></li>
		<li class="breadcrumb-item active">UI Language Bar & Icon</li>
	</ol>
	<!-- END breadcrumb -->
	<!-- BEGIN page-header -->
	<h1 class="page-header">UI Language Bar & Icon <small>header small text goes here...</small></h1>
	<!-- END page-header -->
	
	<!-- BEGIN panel -->
	<div class="panel panel-inverse">
		<!-- BEGIN panel-heading -->
		<div class="panel-heading">
			<h4 class="panel-title">Installation</h4>
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
			<!-- BEGIN row -->
			<div class="row">
				<div class="col-lg col-md-3 col-sm-4 col-6">
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-ad h1 rounded mb-0" title="ad" id="ad"></div> <div class="ps-2 fw-bold">AD</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-ae h1 rounded mb-0" title="ae" id="ae"></div> <div class="ps-2 fw-bold">AE</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-af h1 rounded mb-0" title="af" id="af"></div> <div class="ps-2 fw-bold">AF</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-ag h1 rounded mb-0" title="ag" id="ag"></div> <div class="ps-2 fw-bold">AG</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-ai h1 rounded mb-0" title="ai" id="ai"></div> <div class="ps-2 fw-bold">AU</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-al h1 rounded mb-0" title="al" id="al"></div> <div class="ps-2 fw-bold">AL</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-am h1 rounded mb-0" title="am" id="am"></div> <div class="ps-2 fw-bold">AM</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-ao h1 rounded mb-0" title="ao" id="ao"></div> <div class="ps-2 fw-bold">AO</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-aq h1 rounded mb-0" title="aq" id="aq"></div> <div class="ps-2 fw-bold">AQ</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-ar h1 rounded mb-0" title="ar" id="ar"></div> <div class="ps-2 fw-bold">AR</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-as h1 rounded mb-0" title="as" id="as"></div> <div class="ps-2 fw-bold">AS</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-at h1 rounded mb-0" title="at" id="at"></div> <div class="ps-2 fw-bold">AT</div></div>
				
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-au h1 rounded mb-0" title="au" id="au"></div> <div class="ps-2 fw-bold">AU</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-aw h1 rounded mb-0" title="aw" id="aw"></div> <div class="ps-2 fw-bold">AW</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-ax h1 rounded mb-0" title="ax" id="ax"></div> <div class="ps-2 fw-bold">AX</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-az h1 rounded mb-0" title="az" id="az"></div> <div class="ps-2 fw-bold">AZ</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-ba h1 rounded mb-0" title="ba" id="ba"></div> <div class="ps-2 fw-bold">BA</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-bb h1 rounded mb-0" title="bb" id="bb"></div> <div class="ps-2 fw-bold">BB</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-bd h1 rounded mb-0" title="bd" id="bd"></div> <div class="ps-2 fw-bold">BD</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-be h1 rounded mb-0" title="be" id="be"></div> <div class="ps-2 fw-bold">BE</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-bf h1 rounded mb-0" title="bf" id="bf"></div> <div class="ps-2 fw-bold">BF</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-bg h1 rounded mb-0" title="bg" id="bg"></div> <div class="ps-2 fw-bold">BG</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-bh h1 rounded mb-0" title="bh" id="bh"></div> <div class="ps-2 fw-bold">BH</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-bi h1 rounded mb-0" title="bi" id="bi"></div> <div class="ps-2 fw-bold">BI</div></div>
				
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-bj h1 rounded mb-0" title="bj" id="bj"></div> <div class="ps-2 fw-bold">BJ</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-bl h1 rounded mb-0" title="bl" id="bl"></div> <div class="ps-2 fw-bold">BL</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-bm h1 rounded mb-0" title="bm" id="bm"></div> <div class="ps-2 fw-bold">BM</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-bn h1 rounded mb-0" title="bn" id="bn"></div> <div class="ps-2 fw-bold">BN</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-bo h1 rounded mb-0" title="bo" id="bo"></div> <div class="ps-2 fw-bold">BO</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-bq h1 rounded mb-0" title="bq" id="bq"></div> <div class="ps-2 fw-bold">BQ</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-br h1 rounded mb-0" title="br" id="br"></div> <div class="ps-2 fw-bold">BR</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-bs h1 rounded mb-0" title="bs" id="bs"></div> <div class="ps-2 fw-bold">BS</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-bt h1 rounded mb-0" title="bt" id="bt"></div> <div class="ps-2 fw-bold">BT</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-bv h1 rounded mb-0" title="bv" id="bv"></div> <div class="ps-2 fw-bold">BV</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-bw h1 rounded mb-0" title="bw" id="bw"></div> <div class="ps-2 fw-bold">BW</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-by h1 rounded mb-0" title="by" id="by"></div> <div class="ps-2 fw-bold">BY</div></div>
				</div>
				<div class="col-lg col-md-3 col-sm-4 col-6">
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-bz h1 rounded mb-0" title="bz" id="bz"></div> <div class="ps-2 fw-bold">BZ</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-ca h1 rounded mb-0" title="ca" id="ca"></div> <div class="ps-2 fw-bold">CA</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-cc h1 rounded mb-0" title="cc" id="cc"></div> <div class="ps-2 fw-bold">CC</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-cd h1 rounded mb-0" title="cd" id="cd"></div> <div class="ps-2 fw-bold">CD</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-cf h1 rounded mb-0" title="cf" id="cf"></div> <div class="ps-2 fw-bold">CF</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-cg h1 rounded mb-0" title="cg" id="cg"></div> <div class="ps-2 fw-bold">CG</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-ch h1 rounded mb-0" title="ch" id="ch"></div> <div class="ps-2 fw-bold">CH</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-ci h1 rounded mb-0" title="ci" id="ci"></div> <div class="ps-2 fw-bold">CI</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-ck h1 rounded mb-0" title="ck" id="ck"></div> <div class="ps-2 fw-bold">CK</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-cl h1 rounded mb-0" title="cl" id="cl"></div> <div class="ps-2 fw-bold">CL</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-cm h1 rounded mb-0" title="cm" id="cm"></div> <div class="ps-2 fw-bold">CM</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-cn h1 rounded mb-0" title="cn" id="cn"></div> <div class="ps-2 fw-bold">CN</div></div>
				
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-co h1 rounded mb-0" title="co" id="co"></div> <div class="ps-2 fw-bold">CO</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-cr h1 rounded mb-0" title="cr" id="cr"></div> <div class="ps-2 fw-bold">CR</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-cu h1 rounded mb-0" title="cu" id="cu"></div> <div class="ps-2 fw-bold">CU</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-cv h1 rounded mb-0" title="cv" id="cv"></div> <div class="ps-2 fw-bold">CV</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-cw h1 rounded mb-0" title="cw" id="cw"></div> <div class="ps-2 fw-bold">CW</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-cx h1 rounded mb-0" title="cx" id="cx"></div> <div class="ps-2 fw-bold">CX</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-cy h1 rounded mb-0" title="cy" id="cy"></div> <div class="ps-2 fw-bold">CY</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-cz h1 rounded mb-0" title="cz" id="cz"></div> <div class="ps-2 fw-bold">CZ</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-de h1 rounded mb-0" title="de" id="de"></div> <div class="ps-2 fw-bold">DE</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-dj h1 rounded mb-0" title="dj" id="dj"></div> <div class="ps-2 fw-bold">DJ</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-dk h1 rounded mb-0" title="dk" id="dk"></div> <div class="ps-2 fw-bold">DK</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-dm h1 rounded mb-0" title="dm" id="dm"></div> <div class="ps-2 fw-bold">DM</div></div>
				
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-do h1 rounded mb-0" title="do" id="do"></div> <div class="ps-2 fw-bold">DO</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-dz h1 rounded mb-0" title="dz" id="dz"></div> <div class="ps-2 fw-bold">DZ</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-ec h1 rounded mb-0" title="ec" id="ec"></div> <div class="ps-2 fw-bold">EC</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-ee h1 rounded mb-0" title="ee" id="ee"></div> <div class="ps-2 fw-bold">EE</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-eg h1 rounded mb-0" title="eg" id="eg"></div> <div class="ps-2 fw-bold">EG</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-eh h1 rounded mb-0" title="eh" id="eh"></div> <div class="ps-2 fw-bold">EH</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-er h1 rounded mb-0" title="er" id="er"></div> <div class="ps-2 fw-bold">ER</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-es h1 rounded mb-0" title="es" id="es"></div> <div class="ps-2 fw-bold">ES</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-et h1 rounded mb-0" title="et" id="et"></div> <div class="ps-2 fw-bold">ET</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-fi h1 rounded mb-0" title="fi" id="fi"></div> <div class="ps-2 fw-bold">FI</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-fj h1 rounded mb-0" title="fj" id="fj"></div> <div class="ps-2 fw-bold">FJ</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-fk h1 rounded mb-0" title="fk" id="fk"></div> <div class="ps-2 fw-bold">FK</div></div>
				</div>
				<div class="col-lg col-md-3 col-sm-4 col-6">
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-fm h1 rounded mb-0" title="fm" id="fm"></div> <div class="ps-2 fw-bold">FM</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-fo h1 rounded mb-0" title="fo" id="fo"></div> <div class="ps-2 fw-bold">FO</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-fr h1 rounded mb-0" title="fr" id="fr"></div> <div class="ps-2 fw-bold">FR</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-ga h1 rounded mb-0" title="ga" id="ga"></div> <div class="ps-2 fw-bold">GA</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-gb h1 rounded mb-0" title="gb" id="gb"></div> <div class="ps-2 fw-bold">GB</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-gd h1 rounded mb-0" title="gd" id="gd"></div> <div class="ps-2 fw-bold">GD</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-ge h1 rounded mb-0" title="ge" id="ge"></div> <div class="ps-2 fw-bold">GE</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-gf h1 rounded mb-0" title="gf" id="gf"></div> <div class="ps-2 fw-bold">GF</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-gg h1 rounded mb-0" title="gg" id="gg"></div> <div class="ps-2 fw-bold">GG</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-gh h1 rounded mb-0" title="gh" id="gh"></div> <div class="ps-2 fw-bold">GH</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-gi h1 rounded mb-0" title="gi" id="gi"></div> <div class="ps-2 fw-bold">GI</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-gl h1 rounded mb-0" title="gl" id="gl"></div> <div class="ps-2 fw-bold">GL</div></div>
				
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-gm h1 rounded mb-0" title="gm" id="gm"></div> <div class="ps-2 fw-bold">GM</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-gn h1 rounded mb-0" title="gn" id="gn"></div> <div class="ps-2 fw-bold">GN</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-gp h1 rounded mb-0" title="gp" id="gp"></div> <div class="ps-2 fw-bold">GP</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-gq h1 rounded mb-0" title="gq" id="gq"></div> <div class="ps-2 fw-bold">GQ</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-gr h1 rounded mb-0" title="gr" id="gr"></div> <div class="ps-2 fw-bold">GR</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-gs h1 rounded mb-0" title="gs" id="gs"></div> <div class="ps-2 fw-bold">GS</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-gt h1 rounded mb-0" title="gt" id="gt"></div> <div class="ps-2 fw-bold">GT</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-gu h1 rounded mb-0" title="gu" id="gu"></div> <div class="ps-2 fw-bold">GU</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-gw h1 rounded mb-0" title="gw" id="gw"></div> <div class="ps-2 fw-bold">GW</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-gy h1 rounded mb-0" title="gy" id="gy"></div> <div class="ps-2 fw-bold">GY</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-hk h1 rounded mb-0" title="hk" id="hk"></div> <div class="ps-2 fw-bold">HK</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-hm h1 rounded mb-0" title="hm" id="hm"></div> <div class="ps-2 fw-bold">HM</div></div>
				
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-hn h1 rounded mb-0" title="hn" id="hn"></div> <div class="ps-2 fw-bold">HN</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-hr h1 rounded mb-0" title="hr" id="hr"></div> <div class="ps-2 fw-bold">HR</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-ht h1 rounded mb-0" title="ht" id="ht"></div> <div class="ps-2 fw-bold">HT</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-hu h1 rounded mb-0" title="hu" id="hu"></div> <div class="ps-2 fw-bold">HU</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-id h1 rounded mb-0" title="id" id="id"></div> <div class="ps-2 fw-bold">ID</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-ie h1 rounded mb-0" title="ie" id="ie"></div> <div class="ps-2 fw-bold">IE</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-il h1 rounded mb-0" title="il" id="il"></div> <div class="ps-2 fw-bold">IL</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-im h1 rounded mb-0" title="im" id="im"></div> <div class="ps-2 fw-bold">IM</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-in h1 rounded mb-0" title="in" id="in"></div> <div class="ps-2 fw-bold">IN</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-io h1 rounded mb-0" title="io" id="io"></div> <div class="ps-2 fw-bold">IO</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-iq h1 rounded mb-0" title="iq" id="iq"></div> <div class="ps-2 fw-bold">IQ</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-ir h1 rounded mb-0" title="ir" id="ir"></div> <div class="ps-2 fw-bold">IR</div></div>
				</div>
				<div class="col-lg col-md-3 col-sm-4 col-6">
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-is h1 rounded mb-0" title="is" id="is"></div> <div class="ps-2 fw-bold">IS</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-it h1 rounded mb-0" title="it" id="it"></div> <div class="ps-2 fw-bold">IT</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-je h1 rounded mb-0" title="je" id="je"></div> <div class="ps-2 fw-bold">JE</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-jm h1 rounded mb-0" title="jm" id="jm"></div> <div class="ps-2 fw-bold">JM</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-jo h1 rounded mb-0" title="jo" id="jo"></div> <div class="ps-2 fw-bold">JO</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-jp h1 rounded mb-0" title="jp" id="jp"></div> <div class="ps-2 fw-bold">JP</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-ke h1 rounded mb-0" title="ke" id="ke"></div> <div class="ps-2 fw-bold">KE</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-kg h1 rounded mb-0" title="kg" id="kg"></div> <div class="ps-2 fw-bold">KG</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-kh h1 rounded mb-0" title="kh" id="kh"></div> <div class="ps-2 fw-bold">KH</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-ki h1 rounded mb-0" title="ki" id="ki"></div> <div class="ps-2 fw-bold">KI</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-km h1 rounded mb-0" title="km" id="km"></div> <div class="ps-2 fw-bold">KM</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-kn h1 rounded mb-0" title="kn" id="kn"></div> <div class="ps-2 fw-bold">KN</div></div>
				
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-kp h1 rounded mb-0" title="kp" id="kp"></div> <div class="ps-2 fw-bold">KP</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-kr h1 rounded mb-0" title="kr" id="kr"></div> <div class="ps-2 fw-bold">KR</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-kw h1 rounded mb-0" title="kw" id="kw"></div> <div class="ps-2 fw-bold">KW</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-ky h1 rounded mb-0" title="ky" id="ky"></div> <div class="ps-2 fw-bold">KY</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-kz h1 rounded mb-0" title="kz" id="kz"></div> <div class="ps-2 fw-bold">KZ</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-la h1 rounded mb-0" title="la" id="la"></div> <div class="ps-2 fw-bold">LA</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-lb h1 rounded mb-0" title="lb" id="lb"></div> <div class="ps-2 fw-bold">LB</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-lc h1 rounded mb-0" title="lc" id="lc"></div> <div class="ps-2 fw-bold">LC</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-li h1 rounded mb-0" title="li" id="li"></div> <div class="ps-2 fw-bold">LI</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-lk h1 rounded mb-0" title="lk" id="lk"></div> <div class="ps-2 fw-bold">LK</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-lr h1 rounded mb-0" title="lr" id="lr"></div> <div class="ps-2 fw-bold">LR</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-ls h1 rounded mb-0" title="ls" id="ls"></div> <div class="ps-2 fw-bold">LS</div></div>
				
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-lt h1 rounded mb-0" title="lt" id="lt"></div> <div class="ps-2 fw-bold">LT</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-lu h1 rounded mb-0" title="lu" id="lu"></div> <div class="ps-2 fw-bold">LU</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-lv h1 rounded mb-0" title="lv" id="lv"></div> <div class="ps-2 fw-bold">LV</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-ly h1 rounded mb-0" title="ly" id="ly"></div> <div class="ps-2 fw-bold">LY</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-ma h1 rounded mb-0" title="ma" id="ma"></div> <div class="ps-2 fw-bold">MA</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-mc h1 rounded mb-0" title="mc" id="mc"></div> <div class="ps-2 fw-bold">MC</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-md h1 rounded mb-0" title="md" id="md"></div> <div class="ps-2 fw-bold">MD</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-me h1 rounded mb-0" title="me" id="me"></div> <div class="ps-2 fw-bold">ME</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-mf h1 rounded mb-0" title="mf" id="mf"></div> <div class="ps-2 fw-bold">MF</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-mg h1 rounded mb-0" title="mg" id="mg"></div> <div class="ps-2 fw-bold">MG</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-mh h1 rounded mb-0" title="mh" id="mh"></div> <div class="ps-2 fw-bold">MH</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-mk h1 rounded mb-0" title="mk" id="mk"></div> <div class="ps-2 fw-bold">MK</div></div>
				</div>
				<div class="col-lg col-md-3 col-sm-4 col-6">
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-ml h1 rounded mb-0" title="ml" id="ml"></div> <div class="ps-2 fw-bold">ML</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-mm h1 rounded mb-0" title="mm" id="mm"></div> <div class="ps-2 fw-bold">MM</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-mn h1 rounded mb-0" title="mn" id="mn"></div> <div class="ps-2 fw-bold">MN</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-mo h1 rounded mb-0" title="mo" id="mo"></div> <div class="ps-2 fw-bold">MO</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-mp h1 rounded mb-0" title="mp" id="mp"></div> <div class="ps-2 fw-bold">MP</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-mq h1 rounded mb-0" title="mq" id="mq"></div> <div class="ps-2 fw-bold">MQ</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-mr h1 rounded mb-0" title="mr" id="mr"></div> <div class="ps-2 fw-bold">MR</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-ms h1 rounded mb-0" title="ms" id="ms"></div> <div class="ps-2 fw-bold">MS</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-mt h1 rounded mb-0" title="mt" id="mt"></div> <div class="ps-2 fw-bold">MT</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-mu h1 rounded mb-0" title="mu" id="mu"></div> <div class="ps-2 fw-bold">MU</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-mv h1 rounded mb-0" title="mv" id="mv"></div> <div class="ps-2 fw-bold">MV</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-mw h1 rounded mb-0" title="mw" id="mw"></div> <div class="ps-2 fw-bold">MW</div></div>
				
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-mx h1 rounded mb-0" title="mx" id="mx"></div> <div class="ps-2 fw-bold">MX</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-my h1 rounded mb-0" title="my" id="my"></div> <div class="ps-2 fw-bold">MY</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-mz h1 rounded mb-0" title="mz" id="mz"></div> <div class="ps-2 fw-bold">MZ</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-na h1 rounded mb-0" title="na" id="na"></div> <div class="ps-2 fw-bold">NA</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-nc h1 rounded mb-0" title="nc" id="nc"></div> <div class="ps-2 fw-bold">NC</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-ne h1 rounded mb-0" title="ne" id="ne"></div> <div class="ps-2 fw-bold">NE</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-nf h1 rounded mb-0" title="nf" id="nf"></div> <div class="ps-2 fw-bold">NF</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-ng h1 rounded mb-0" title="ng" id="ng"></div> <div class="ps-2 fw-bold">NG</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-ni h1 rounded mb-0" title="ni" id="ni"></div> <div class="ps-2 fw-bold">NI</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-nl h1 rounded mb-0" title="nl" id="nl"></div> <div class="ps-2 fw-bold">NL</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-no h1 rounded mb-0" title="no" id="no"></div> <div class="ps-2 fw-bold">NO</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-np h1 rounded mb-0" title="np" id="np"></div> <div class="ps-2 fw-bold">NP</div></div>
				
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-nr h1 rounded mb-0" title="nr" id="nr"></div> <div class="ps-2 fw-bold">NR</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-nu h1 rounded mb-0" title="nu" id="nu"></div> <div class="ps-2 fw-bold">NU</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-nz h1 rounded mb-0" title="nz" id="nz"></div> <div class="ps-2 fw-bold">NZ</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-om h1 rounded mb-0" title="om" id="om"></div> <div class="ps-2 fw-bold">OM</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-pa h1 rounded mb-0" title="pa" id="pa"></div> <div class="ps-2 fw-bold">PA</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-pe h1 rounded mb-0" title="pe" id="pe"></div> <div class="ps-2 fw-bold">PE</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-pf h1 rounded mb-0" title="pf" id="pf"></div> <div class="ps-2 fw-bold">PF</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-pg h1 rounded mb-0" title="pg" id="pg"></div> <div class="ps-2 fw-bold">PG</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-ph h1 rounded mb-0" title="ph" id="ph"></div> <div class="ps-2 fw-bold">PH</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-pk h1 rounded mb-0" title="pk" id="pk"></div> <div class="ps-2 fw-bold">PK</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-pl h1 rounded mb-0" title="pl" id="pl"></div> <div class="ps-2 fw-bold">PL</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-pm h1 rounded mb-0" title="pm" id="pm"></div> <div class="ps-2 fw-bold">PM</div></div>
				</div>
				<div class="col-lg col-md-3 col-sm-4 col-6">
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-pn h1 rounded mb-0" title="pn" id="pn"></div> <div class="ps-2 fw-bold">PN</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-pr h1 rounded mb-0" title="pr" id="pr"></div> <div class="ps-2 fw-bold">PR</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-ps h1 rounded mb-0" title="ps" id="ps"></div> <div class="ps-2 fw-bold">PS</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-pt h1 rounded mb-0" title="pt" id="pt"></div> <div class="ps-2 fw-bold">PT</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-pw h1 rounded mb-0" title="pw" id="pw"></div> <div class="ps-2 fw-bold">PW</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-py h1 rounded mb-0" title="py" id="py"></div> <div class="ps-2 fw-bold">PY</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-qa h1 rounded mb-0" title="qa" id="qa"></div> <div class="ps-2 fw-bold">QA</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-re h1 rounded mb-0" title="re" id="re"></div> <div class="ps-2 fw-bold">RE</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-ro h1 rounded mb-0" title="ro" id="ro"></div> <div class="ps-2 fw-bold">RO</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-rs h1 rounded mb-0" title="rs" id="rs"></div> <div class="ps-2 fw-bold">RS</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-ru h1 rounded mb-0" title="ru" id="ru"></div> <div class="ps-2 fw-bold">RU</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-rw h1 rounded mb-0" title="rw" id="rw"></div> <div class="ps-2 fw-bold">RW</div></div>
				
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-sa h1 rounded mb-0" title="sa" id="sa"></div> <div class="ps-2 fw-bold">SA</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-sb h1 rounded mb-0" title="sb" id="sb"></div> <div class="ps-2 fw-bold">SB</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-sc h1 rounded mb-0" title="sc" id="sc"></div> <div class="ps-2 fw-bold">SC</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-sd h1 rounded mb-0" title="sd" id="sd"></div> <div class="ps-2 fw-bold">SD</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-se h1 rounded mb-0" title="se" id="se"></div> <div class="ps-2 fw-bold">SE</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-sg h1 rounded mb-0" title="sg" id="sg"></div> <div class="ps-2 fw-bold">SG</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-sh h1 rounded mb-0" title="sh" id="sh"></div> <div class="ps-2 fw-bold">SH</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-si h1 rounded mb-0" title="si" id="si"></div> <div class="ps-2 fw-bold">SI</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-sj h1 rounded mb-0" title="sj" id="sj"></div> <div class="ps-2 fw-bold">SJ</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-sk h1 rounded mb-0" title="sk" id="sk"></div> <div class="ps-2 fw-bold">SK</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-sl h1 rounded mb-0" title="sl" id="sl"></div> <div class="ps-2 fw-bold">SL</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-sm h1 rounded mb-0" title="sm" id="sm"></div> <div class="ps-2 fw-bold">SM</div></div>
				
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-sn h1 rounded mb-0" title="sn" id="sn"></div> <div class="ps-2 fw-bold">SN</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-so h1 rounded mb-0" title="so" id="so"></div> <div class="ps-2 fw-bold">SO</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-sr h1 rounded mb-0" title="sr" id="sr"></div> <div class="ps-2 fw-bold">SR</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-ss h1 rounded mb-0" title="ss" id="ss"></div> <div class="ps-2 fw-bold">SS</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-st h1 rounded mb-0" title="st" id="st"></div> <div class="ps-2 fw-bold">ST</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-sv h1 rounded mb-0" title="sv" id="sv"></div> <div class="ps-2 fw-bold">SV</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-sx h1 rounded mb-0" title="sx" id="sx"></div> <div class="ps-2 fw-bold">SX</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-sy h1 rounded mb-0" title="sy" id="sy"></div> <div class="ps-2 fw-bold">SY</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-sz h1 rounded mb-0" title="sz" id="sz"></div> <div class="ps-2 fw-bold">SZ</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-tc h1 rounded mb-0" title="tc" id="tc"></div> <div class="ps-2 fw-bold">TC</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-td h1 rounded mb-0" title="td" id="td"></div> <div class="ps-2 fw-bold">TD</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-tf h1 rounded mb-0" title="tf" id="tf"></div> <div class="ps-2 fw-bold">TF</div></div>
				</div>
				<div class="col-lg col-md-3 col-sm-4 col-6">
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-tg h1 rounded mb-0" title="tg" id="tg"></div> <div class="ps-2 fw-bold">TG</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-th h1 rounded mb-0" title="th" id="th"></div> <div class="ps-2 fw-bold">TH</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-tj h1 rounded mb-0" title="tj" id="tj"></div> <div class="ps-2 fw-bold">TJ</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-tk h1 rounded mb-0" title="tk" id="tk"></div> <div class="ps-2 fw-bold">TK</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-tl h1 rounded mb-0" title="tl" id="tl"></div> <div class="ps-2 fw-bold">TL</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-tm h1 rounded mb-0" title="tm" id="tm"></div> <div class="ps-2 fw-bold">TM</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-tn h1 rounded mb-0" title="tn" id="tn"></div> <div class="ps-2 fw-bold">TN</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-to h1 rounded mb-0" title="to" id="to"></div> <div class="ps-2 fw-bold">TO</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-tr h1 rounded mb-0" title="tr" id="tr"></div> <div class="ps-2 fw-bold">TR</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-tt h1 rounded mb-0" title="tt" id="tt"></div> <div class="ps-2 fw-bold">TT</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-tv h1 rounded mb-0" title="tv" id="tv"></div> <div class="ps-2 fw-bold">TV</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-tw h1 rounded mb-0" title="tw" id="tw"></div> <div class="ps-2 fw-bold">TW</div></div>
				
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-tz h1 rounded mb-0" title="tz" id="tz"></div> <div class="ps-2 fw-bold">TZ</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-ua h1 rounded mb-0" title="ua" id="ua"></div> <div class="ps-2 fw-bold">UA</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-ug h1 rounded mb-0" title="ug" id="ug"></div> <div class="ps-2 fw-bold">UG</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-um h1 rounded mb-0" title="um" id="um"></div> <div class="ps-2 fw-bold">UM</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-us h1 rounded mb-0" title="us" id="us"></div> <div class="ps-2 fw-bold">US</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-uy h1 rounded mb-0" title="uy" id="uy"></div> <div class="ps-2 fw-bold">UY</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-uz h1 rounded mb-0" title="uz" id="uz"></div> <div class="ps-2 fw-bold">UZ</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-va h1 rounded mb-0" title="va" id="va"></div> <div class="ps-2 fw-bold">VA</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-vc h1 rounded mb-0" title="vc" id="vc"></div> <div class="ps-2 fw-bold">VC</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-ve h1 rounded mb-0" title="ve" id="ve"></div> <div class="ps-2 fw-bold">VE</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-vg h1 rounded mb-0" title="vg" id="vg"></div> <div class="ps-2 fw-bold">VG</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-vi h1 rounded mb-0" title="vi" id="vi"></div> <div class="ps-2 fw-bold">VI</div></div>
				
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-vn h1 rounded mb-0" title="vn" id="vn"></div> <div class="ps-2 fw-bold">VN</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-vu h1 rounded mb-0" title="vu" id="vu"></div> <div class="ps-2 fw-bold">VU</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-wf h1 rounded mb-0" title="wf" id="wf"></div> <div class="ps-2 fw-bold">WF</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-ws h1 rounded mb-0" title="ws" id="ws"></div> <div class="ps-2 fw-bold">WS</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-ye h1 rounded mb-0" title="ye" id="ye"></div> <div class="ps-2 fw-bold">YE</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-yt h1 rounded mb-0" title="yt" id="yt"></div> <div class="ps-2 fw-bold">YT</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-za h1 rounded mb-0" title="za" id="za"></div> <div class="ps-2 fw-bold">ZA</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-zm h1 rounded mb-0" title="zm" id="zm"></div> <div class="ps-2 fw-bold">ZM</div></div>
					<div class="mb-3 d-flex align-items-center"><div class="flag-icon flag-icon-zw h1 rounded mb-0" title="zw" id="zw"></div> <div class="ps-2 fw-bold">ZW</div></div>
				</div>
			</div>
			<!-- END row -->
		</div>
		<!-- END panel-body -->
		<!-- BEGIN hljs-wrapper -->
		<div class="hljs-wrapper">
			<pre><code class="html">&lt;!-- required files --&gt;
&lt;link href="/assets/plugins/flag-icon-css/css/flag-icon.min.css" rel="stylesheet" /&gt;

&lt;!-- html --&gt;
&lt;div class="flag-icon flag-icon-ad" title="ad"&gt;&lt;/div&gt;</code></pre>
		</div>
		<!-- END hljs-wrapper -->
	</div>
	<!-- END panel -->
@endsection
