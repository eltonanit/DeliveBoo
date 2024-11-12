@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrazione') }}</div>

                <div class="card-body pb-0">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-4 row">
                            <div class="col-12 col-md-6 mb-md-3">
                                <label for="email" class="col-form-label text-md-right">{{ __('Indirizzo E-Mail *') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-12 col-md-6 mb-md-3">
                                <label for="restaurant_name" class="col-form-label text-md-right">{{ __('Nome Ristorante *') }}</label>
                                <input id="restaurant_name" type="text" class="form-control @error('restaurant_name') is-invalid @enderror" name="restaurant_name" value="{{ old('restaurant_name') }}" required>
                                @error('restaurant_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-12 col-md-6 mb-md-3">
                                <label for="password" class="col-form-label text-md-right">{{ __('Password *') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-12 col-md-6 mb-md-3">
                                <label for="password-confirm" class="col-form-label text-md-right">{{ __('Conferma Password *') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="col-12 col-md-4 mb-md-3">
                                <label for="address" class="col-form-label text-md-right">{{ __('Indirizzo *') }}</label>
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required>
                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-12 col-md-4 mb-md-3">
                                <label for="phone" class="col-form-label text-md-right">{{ __('Telefono *') }}</label>
                                <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required>
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-12 col-md-4 mb-3">
                                <label for="p_iva" class="col-form-label text-md-right">{{ __('P. IVA *') }}</label>
                                <input id="p_iva" type="text" class="form-control @error('p_iva') is-invalid @enderror" name="p_iva" value="{{ old('p_iva') }}" required>
                                @error('p_iva')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="col-12 mb-3">
                                <label for="type_ids" class="d-block mb-3">Tipologia Ristorante *</label>
                                <div class="row">
                                    @foreach($types as $type)
                                        <div class="col-4 col-md-3 col-lg-2">
                                            <label>
                                                <input type="checkbox" name="type_ids[]" value="{{ $type->id }}" 
                                                    {{ in_array($type->id, old('type_ids', [])) ? 'checked' : '' }} class="type-checkbox">
                                                {{ $type->name }}
                                            </label><br>
                                        </div>
                                    @endforeach
                                    @error('type_ids')
                                    <span class="invalid-feedback d-block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <span class="text-secondary fst-italic">* = campi obbligatori</span>

                            <div class="text-center mt-4 mt-md-5">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Conferma Registrazione') }}
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
