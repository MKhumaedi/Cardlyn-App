<footer class="border-top w-100 pt-4 mt-7">
	<p class="fs-6 text-gray-600">
		{{__('auth.copyright_by')." "}} &copy;{{ date('Y') }} {{ env('APP_BRAND') }}.
	</p>
	<p class="fs-6 text-gray-600">
		{{__('messages.made_by')." "}} <a href="{{ env('APP_COMPANY_URL') }}" alt="{{ env('APP_COMPANY') }}" title="{{ env('APP_COMPANY') }}" target="_blank" rel="dofollow" class="text-decoration-none">{{ env('APP_COMPANY') }}</a>.
	</p>
</footer>