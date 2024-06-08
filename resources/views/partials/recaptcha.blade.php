<div class="mb-4">
    <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
    @error('g-recaptcha-response')
    <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>
<div class="text-left">
    <button type="button" onclick="executeRecaptcha(event, '{{ $formId }}')" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">{{ $buttonText }}</button>
</div>

@push('scripts')
    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site_key') }}"></script>
    <script>
        function executeRecaptcha(e, formId) {
            e.preventDefault();
            grecaptcha.ready(function () {
                grecaptcha.execute('{{ config('services.recaptcha.site_key') }}', {action: 'submit'}).then(function (token) {
                    document.getElementById('g-recaptcha-response').value = token;
                    document.getElementById(formId).submit();
                });
            });
        }
    </script>
@endpush
