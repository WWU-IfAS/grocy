@once
@push('componentScripts')
<script src="{{ $U('/viewjs/components/calendarcard.js', true) }}?v={{ $version }}"></script>
@endpush
@endonce

<div class="card">
	<div class="card-header">
		<i class="fas fa-calendar"></i> {{ $__t('Calendar') }}
	</div>
	<div class="card-body">
		<div id="calendar"
			data-target-input="nearest"></div>
	</div>
</div>
