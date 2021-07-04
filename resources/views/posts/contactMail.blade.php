@component('mail::message')
Message from : {{$data['name']}}

says:
"{{$data['message']}} "
,
contact him back at : 
Email : {{$data['email']}},
Phone Number :{{$data['phone']}}


@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
