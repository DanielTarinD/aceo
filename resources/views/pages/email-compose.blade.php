@extends('layouts.default', ['appContentFullHeight' => true, 'appContentClass' => 'p-0'])

@section('title', 'Email - Compose')

@push('css')
	<link href="/assets/plugins/tag-it/css/jquery.tagit.css" rel="stylesheet" />
	<link href="/assets/plugins/summernote/dist/summernote-lite.css" rel="stylesheet" />
@endpush

@push('scripts')
	<script src="/assets/plugins/jquery-migrate/dist/jquery-migrate.min.js"></script>
	<script src="/assets/plugins/tag-it/js/tag-it.min.js"></script>
	<script src="/assets/plugins/summernote/dist/summernote-lite.min.js"></script>
	<script src="/assets/js/demo/email-compose.demo.js"></script>
@endpush

@section('content')
	<!-- BEGIN mailbox -->
	<div class="mailbox">
		<!-- BEGIN mailbox-sidebar -->
		<div class="mailbox-sidebar">
			<div class="mailbox-sidebar-header d-flex justify-content-center">
				<a href="#emailNav" data-bs-toggle="collapse" class="btn btn-inverse btn-sm me-auto d-block d-lg-none">
					<i class="fa fa-cog"></i>
				</a>
				<a href="/email/compose" class="btn btn-inverse ps-40px pe-40px btn-sm">
					Compose
				</a>
			</div>
			<div class="mailbox-sidebar-content collapse d-lg-block" id="emailNav">
				<!-- BEGIN scrollbar -->
				<div data-scrollbar="true" data-height="100%" data-skip-mobile="true">
					<div class="nav-title"><b>FOLDERS</b></div>
					<ul class="nav nav-inbox">
						<li><a href="/email/inbox"><i class="fa fa-hdd fa-lg fa-fw me-2"></i> Inbox <span class="badge bg-gray-600 fs-10px rounded-pill ms-auto fw-bolder pt-4px pb-5px px-8px">52</span></a></li>
						<li><a href="/email/inbox"><i class="fa fa-flag fa-lg fa-fw me-2"></i> Important</a></li>
						<li><a href="/email/inbox"><i class="fa fa-envelope fa-lg fa-fw me-2"></i> Sent</a></li>
						<li><a href="/email/inbox"><i class="fa fa-save fa-lg fa-fw me-2"></i> Drafts</a></li>
						<li><a href="/email/inbox"><i class="fa fa-trash-alt fa-lg fa-fw me-2"></i> Trash</a></li>
					</ul>
					<div class="nav-title"><b>LABEL</b></div>
					<ul class="nav nav-inbox">
						<li><a href="javascript:;"><i class="fa fa-fw fa-lg fs-12px me-2 fa-circle text-inverse"></i> Admin</a></li>
						<li><a href="javascript:;"><i class="fa fa-fw fa-lg fs-12px me-2 fa-circle text-blue"></i> Designer & Employer</a></li>
						<li><a href="javascript:;"><i class="fa fa-fw fa-lg fs-12px me-2 fa-circle text-success"></i> Staff</a></li>
						<li><a href="javascript:;"><i class="fa fa-fw fa-lg fs-12px me-2 fa-circle text-warning"></i> Sponsorer</a></li>
						<li><a href="javascript:;"><i class="fa fa-fw fa-lg fs-12px me-2 fa-circle text-danger"></i> Client</a></li>
					</ul>
				</div>
				<!-- END scrollbar -->
			</div>
		</div>
		<!-- END mailbox-sidebar -->
		<!-- BEGIN mailbox-content -->
		<div class="mailbox-content">
			<div class="mailbox-content-header">
				<!-- BEGIN btn-toolbar -->
				<div class="btn-toolbar align-items-center">
					<div class="btn-group me-2">
						<a href="javascript:;" class="btn btn-white btn-sm"><i class="fa fa-fw fa-envelope"></i> <span class="hidden-xs">Send</span></a>
						<a href="javascript:;" class="btn btn-white btn-sm"><i class="fa fa-fw fa-paperclip"></i> <span class="hidden-xs">Attach</span></a>
					</div>
					<div>
						<a href="#" class="btn btn-white btn-sm" data-bs-toggle="dropdown"><i class="fa fa-fw fa-ellipsis-h"></i></a>
						<div class="dropdown-menu dropdown-menu-end">
							<a href="javascript:;" class="dropdown-item">Save draft</a>
							<a href="javascript:;" class="dropdown-item">Show From</a>
							<a href="javascript:;" class="dropdown-item">Check names</a>
							<a href="javascript:;" class="dropdown-item">Switch to plain text</a>
							<a href="javascript:;" class="dropdown-item">Check for accessibility issues</a>
						</div>
					</div>
					<div class="ms-auto">
						<a href="/email/inbox" class="btn btn-white btn-sm"><i class="fa fa-fw fa-times"></i> <span class="hidden-xs">Discard</span></a>
					</div>
				</div>
				<!-- END btn-toolbar -->
			</div>
			<div class="mailbox-content-body">
				<!-- BEGIN scrollbar -->
				<div data-scrollbar="true" data-height="100%" data-skip-mobile="true">
					<!-- BEGIN form -->
					<form action="/" method="POST" name="email_to_form" class="mailbox-form">
						<!-- BEGIN mailbox-to -->
						<div class="mailbox-to">
							<label class="control-label">To:</label>
							<ul id="email-to" class="primary line-mode">
								<li>bootstrap@gmail.com</li>
								<li>google@gmail.com</li>
							</ul>
							<div class="mailbox-float-link">
								<a href="#" data-click="add-cc" data-name="Cc" class="me-5px">Cc</a>
								<a href="#" data-click="add-cc" data-name="Bcc">Bcc</a>
							</div>
						</div>
						<!-- END mailbox-to -->

						<div data-id="extra-cc"></div>

						<!-- BEGIN mailbox-subject -->
						<div class="mailbox-subject">
							<input type="text" class="form-control" placeholder="Subject" />
						</div>
						<!-- END mailbox-subject -->
						<!-- BEGIN mailbox-input -->
						<div class="mailbox-input">
							<textarea class="summernote"></textarea>
						</div>
						<!-- END mailbox-input -->
					</form>
					<!-- END form -->
				</div>
				<!-- END scrollbar -->
			</div>
			<div class="mailbox-content-footer d-flex align-items-center justify-content-end">
				<button type="submit" class="btn btn-white ps-40px pe-40px me-5px">Discard</button>
				<button type="submit" class="btn btn-primary ps-40px pe-40px">Send</button>
			</div>
		</div>
		<!-- END mailbox-content -->
	</div>
	<!-- END mailbox -->
@endsection
