@component('mail::message')
# Introduction

Welcome to Jenny's Diary,{{ $user->name }}!


@component('mail::button', ['url' => ''])
Go to Jenny's Diary
@endcomponent

Thanks,<br>
Jenny
{{ config('app.name') }}
@endcomponent
