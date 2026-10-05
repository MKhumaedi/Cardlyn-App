@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
<img src="{{ getLogoUrl() }}" title="{{ env('APP_NAME') }}" alt="{{ env('APP_NAME') }}" class="logo">
@endcomponent
@endslot

{{-- Body --}}
<div>
    <h2>Berikut adalah Pertanyaan Detail</h2>
    <br>
    <p><b>Nama : </b>{{$input['name']}}</p>
    <p><b>Email : </b>{{$input['email']}}</p>
    <p><b>Pesan : </b>{{$input['message']}}</p>
    <p><b>Telp : </b>{{is_null($input['phone']) ? 'N/A' : $input['phone']}}</p>
    <p><b>Nama vCard : </b>{{$input['vcard_name']}}</p>
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