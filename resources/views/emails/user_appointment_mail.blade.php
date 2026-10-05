@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
<img src="{{ getLogoUrl() }}" title="{{ env('APP_NAME') }}" alt="{{ env('APP_NAME') }}" class="logo">
@endcomponent
@endslot

{{-- Body --}}
<div>
    <h2>Halo <b>{{ $toName }}</b></h2>
    <br>
    <p><b>{{ $name }} memesan janji dengan Anda</b>.</p>
    <p><b>Waktu janji temu : </b> {{ $date }} - {{ $from_time }} sampai {{ $to_time }}</p>
    <p><b>Nama vCard : </b> {{ $vcard_name }}</p>
    <hr>
    <p>Terima kasih.. Regards!</p>
    <p>{{ getAppName() }}</p>
</div>

{{-- Footer --}}
@slot('footer')
@component('mail::footer')
<h6>©{{ date('Y') }} {{ getAppName() }}.</h6>
@endcomponent
@endslot
@endcomponent
