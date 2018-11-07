@extends('layouts.app')

@section('content')
<div class="container login">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Controleer uw E-mail adres') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Er is een nieuwe verificatielink verzonden naar uw e-mailadres.') }}
                        </div>
                    @endif

                    {{ __('Voordat u doorgaat controleer uw e-mail voor een verificatielink.') }}
                    {{ __('Als de mail niet hebt gekregen') }}, <a href="{{ route('verification.resend') }}">{{ __('klik dan hier om er nog een te versturen.') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
