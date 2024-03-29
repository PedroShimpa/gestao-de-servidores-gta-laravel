@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar Evento') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('eventos.editar', $data->id) }}">
                        @method('PUT')
                        @csrf
                        <div class="row mb-3">
                            <label for="titulo" class="col-md-4 col-form-label text-md-end">{{ __('Titulo') }}</label>

                            <div class="col-md-6">
                                <input id="titulo" type="text" class="form-control @error('titulo') is-invalid @enderror" name="titulo" value="{{ $data->titulo }}" required autocomplete="titulo" autofocus>

                                @error('titulo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="proximo_evento" class="col-md-4 col-form-label text-md-end">{{ __('Data/hora') }}</label>
                            <div class="col-md-6">
                                <input id="proximo_evento" type="text" class="form-control @error('proximo_evento') is-invalid @enderror" name="proximo_evento" value="{{ $data->proximo_evento }}" required autocomplete="proximo_evento" autofocus>
                                @error('proximo_evento')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="status_evento" class="col-md-4 col-form-label text-md-end">{{ __('Status do Evento') }}</label>
                            <div class="col-md-6">
                                <select id="status_evento" type="text" class="form-control @error('status_evento') is-invalid @enderror" name="status_evento" required>
                                    @foreach($status as $item)
                                    <option value="{{ $item }}" {{ $item == $data->status_evento ? 'selected' : ''}}>{{ $item}}</option>
                                    @endforeach
                                </select>
                                @error('status_evento')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="min_players" class="col-md-4 col-form-label text-md-end">{{ __('Minimo de Jogadores') }}</label>

                            <div class="col-md-6">
                                <input id="min_players" type="number" class="form-control @error('min_players') is-invalid @enderror" name="min_players" value="{{ $data->min_players }}" required autocomplete="min_players">

                                @error('min_players')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="min_staffs" class="col-md-4 col-form-label text-md-end">{{ __('Minimo de Staffs') }}</label>
                            <div class="col-md-6">
                                <input id="min_staffs" type="number" class="form-control @error('min_staffs') is-invalid @enderror" name="min_staffs" value="{{  $data->min_staffs}}" required autocomplete="min_staffs">
                                @error('min_staffs')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="frequencia" class="col-md-4 col-form-label text-md-end">{{ __('Frequencia') }}</label>
                            <div class="col-md-6">
                            <select id="frequencia" type="text" class="form-control @error('frequencia') is-invalid @enderror" name="frequencia" required>
                                    @foreach($frequencia as $item)
                                    <option value="{{ $item }}" {{ $item == $data->frequencia ? 'selected' : ''}}>{{ $item}}</option>
                                    @endforeach
                                </select>
                                @error('frequencia')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="backstory" class="col-md-4 col-form-label text-md-end">{{ __('Back Story') }}</label>
                            <div class="col-md-6">
                                <textarea id="backstory" type="text" rows="7" class="form-control @error('backstory') is-invalid @enderror" name="backstory" autocomplete="backstory">{{ $data->backstory  }}</textarea>
                                @error('backstory')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="realizacao" class="col-md-4 col-form-label text-md-end">{{ __('Como Realizar') }}</label>
                            <div class="col-md-6">
                                <textarea id="realizacao" type="text" rows="7" class="form-control @error('realizacao') is-invalid @enderror" name="realizacao" autocomplete="realizacao">{{$data->realizacao }}</textarea>
                                @error('realizacao')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="regras" class="col-md-4 col-form-label text-md-end">{{ __('Regras') }}</label>
                            <div class="col-md-6">
                                <textarea id="realizacao" type="text" rows="7" class="form-control @error('regras') is-invalid @enderror" name="regras" rows="7" autocomplete="regras">{{ $data->regras }}</textarea>
                                @error('regras')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="observacoes" class="col-md-4 col-form-label text-md-end">{{ __('Observações') }}</label>
                            <div class="col-md-6">
                                <textarea id="observacoes" type="text"  rows="7" class="form-control @error('observacoes') is-invalid @enderror" name="observacoes" autocomplete="observacoes">{{ $data->observacoes }}</textarea>
                                @error('observacoes')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="premio" class="col-md-4 col-form-label text-md-end">{{ __('Prêmio') }}</label>
                            <div class="col-md-6">
                                <textarea id="premio" rows="7" type="text" class="form-control @error('premio') is-invalid @enderror" name="premio" autocomplete="premio">{{ $data->premio }}</textarea>
                                @error('premio')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="vencedor" class="col-md-4 col-form-label text-md-end">{{ __('Vencedor') }}</label>
                            <div class="col-md-6">
                                <input id="vencedor" rows="7" type="text" class="form-control @error('premio') is-invalid @enderror" name="vencedor" value="{{ $data->vencedor }}" autocomplete="vencedor">
                                @error('vencedor')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="responsavel" class="col-md-4 col-form-label text-md-end">{{ __('Responsável') }}</label>
                            <div class="col-md-6">
                                <select id="responsavel" type="text" class="form-control @error('responsavel') is-invalid @enderror" name="responsavel" required>
                                    @foreach($users as $user)
                                    <option value="{{ $user->id}}" {{ $user->id == $data->responsavel ? 'selected' : ''}}>{{ $user->name}}</option>
                                    @endforeach
                                </select>
                                @error('responsavel')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Editar Evento') }}
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