@extends('layouts.app')

@section('title', 'Abrir Chamado - Help Desk')

@section('content')
<<<<<<< HEAD

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="d-flex justify-content-between align-items-center mb-4">

                <h3 class="fw-bold text-dark mb-0">
                    Abrir Novo Chamado
                </h3>

                <a
                    href="{{ route('tickets.index') }}"
                    class="btn btn-outline-secondary btn-sm"
                >
                    <i class="bi bi-arrow-left me-1"></i>
                    Voltar
                </a>

            </div>

            <div class="card border-0 shadow-sm">

                <div class="card-body p-4">

                    <form action="{{ route('tickets.store') }}" method="POST">

                        @csrf

                        <div class="row g-3">

                            <div class="col-12">

                                <label
                                    for="title"
                                    class="form-label fw-semibold"
                                >
                                    Título do Chamado
                                    <span class="text-danger">*</span>
=======
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="fw-bold text-dark mb-0">Abrir Novo Chamado</h3>

                <a href="{{ route('tickets.index') }}" class="btn btn-outline-secondary btn-sm">
                    <i class="bi bi-arrow-left me-1"></i> Voltar
                </a>
            </div>

            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <form action="{{ route('tickets.store') }}" method="POST">
                        @csrf

                        <div class="row g-3">
                            <div class="col-12">
                                <label for="title" class="form-label fw-semibold">
                                    Título do Chamado <span class="text-danger">*</span>
>>>>>>> d788b7efdef19113aba295f277e4b4d011d824a0
                                </label>

                                <input
                                    type="text"
                                    class="form-control @error('title') is-invalid @enderror"
                                    id="title"
                                    name="title"
                                    value="{{ old('title') }}"
                                    placeholder="Ex: Impressora do setor financeiro não responde"
                                >

                                @error('title')
<<<<<<< HEAD
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="col-md-6">

                                <label
                                    for="department_id"
                                    class="form-label fw-semibold"
                                >
                                    Departamento Destino
                                    <span class="text-danger">*</span>
=======
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            
                            <div class="col-md-6">
                                <label for="department_id" class="form-label fw-semibold">
                                    Departamento Destino <span class="text-danger">*</span>
>>>>>>> d788b7efdef19113aba295f277e4b4d011d824a0
                                </label>

                                <select
                                    class="form-select @error('department_id') is-invalid @enderror"
                                    id="department_id"
                                    name="department_id"
                                >
                                    <option value="" selected disabled>
                                        Selecione o setor...
                                    </option>

<<<<<<< HEAD
                                    @foreach($departments as $dept)
=======
                                    @foreach ($departments as $dept)
>>>>>>> d788b7efdef19113aba295f277e4b4d011d824a0
                                        <option
                                            value="{{ $dept->id }}"
                                            {{ old('department_id') == $dept->id ? 'selected' : '' }}
                                        >
                                            {{ $dept->name }}
                                        </option>
                                    @endforeach
<<<<<<< HEAD

                                </select>

                                @error('department_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="col-md-6">

                                <label
                                    for="requester_name"
                                    class="form-label fw-semibold"
                                >
                                    Nome do Solicitante
                                    <span class="text-danger">*</span>
=======
                                </select>

                                @error('department_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="requester_name" class="form-label fw-semibold">
                                    Nome do Solicitante <span class="text-danger">*</span>
>>>>>>> d788b7efdef19113aba295f277e4b4d011d824a0
                                </label>

                                <input
                                    type="text"
                                    class="form-control @error('requester_name') is-invalid @enderror"
                                    id="requester_name"
                                    name="requester_name"
                                    value="{{ old('requester_name') }}"
                                    placeholder="Seu nome completo"
                                >

                                @error('requester_name')
<<<<<<< HEAD
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="col-md-6">

                                <label
                                    for="priority"
                                    class="form-label fw-semibold"
                                >
                                    Nível de Prioridade
                                    <span class="text-danger">*</span>
=======
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="priority" class="form-label fw-semibold">
                                    Nível de Prioridade <span class="text-danger">*</span>
>>>>>>> d788b7efdef19113aba295f277e4b4d011d824a0
                                </label>

                                <select
                                    class="form-select @error('priority') is-invalid @enderror"
                                    id="priority"
                                    name="priority"
                                >
                                    <option value="" selected disabled>
                                        Selecione...
                                    </option>

<<<<<<< HEAD
                                    <option
                                        value="Baixa"
                                        {{ old('priority') == 'Baixa' ? 'selected' : '' }}
                                    >
                                        Baixa
                                    </option>

                                    <option
                                        value="Média"
                                        {{ old('priority') == 'Média' ? 'selected' : '' }}
                                    >
                                        Média
                                    </option>

                                    <option
                                        value="Alta"
                                        {{ old('priority') == 'Alta' ? 'selected' : '' }}
                                    >
                                        Alta
                                    </option>

                                    <option
                                        value="Urgente"
                                        {{ old('priority') == 'Urgente' ? 'selected' : '' }}
                                    >
                                        Urgente
                                    </option>

                                </select>

                                @error('priority')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="col-12">

                                <label
                                    for="description"
                                    class="form-label fw-semibold"
                                >
=======
                                    <option value="Baixa" {{ old('priority') == 'Baixa' ? 'selected' : '' }}>
                                        Baixa
                                    </option>

                                    <option value="Média" {{ old('priority') == 'Média' ? 'selected' : '' }}>
                                        Média
                                    </option>

                                    <option value="Alta" {{ old('priority') == 'Alta' ? 'selected' : '' }}>
                                        Alta
                                    </option>

                                    <option value="Urgente" {{ old('priority') == 'Urgente' ? 'selected' : '' }}>
                                        Urgente
                                    </option>
                                </select>

                                @error('priority')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="description" class="form-label fw-semibold">
>>>>>>> d788b7efdef19113aba295f277e4b4d011d824a0
                                    Descrição Detalhada do Problema
                                    <span class="text-danger">*</span>
                                </label>

                                <textarea
                                    class="form-control @error('description') is-invalid @enderror"
                                    id="description"
                                    name="description"
                                    rows="4"
                                    placeholder="Detalhe o ocorrido, mensagens de erro exibidas ou procedimentos já tentados..."
                                >{{ old('description') }}</textarea>

                                @error('description')
<<<<<<< HEAD
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                            <div class="col-12 text-end pt-3">

                                <a
                                    href="{{ route('tickets.index') }}"
                                    class="btn btn-light me-2"
                                >
                                    Cancelar
                                </a>

                                <button
                                    type="submit"
                                    class="btn btn-primary px-4"
                                >
                                    <i class="bi bi-check-lg me-1"></i>
                                    Confirmar Abertura
                                </button>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

@endsection
=======
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 text-end pt-3">
                                <a href="{{ route('tickets.index') }}" class="btn btn-light me-2">
                                    Cancelar
                                </a>

                                <button type="submit" class="btn btn-primary px-4">
                                    <i class="bi bi-check-lg me-1"></i>
                                    Confirmar Abertura
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
>>>>>>> d788b7efdef19113aba295f277e4b4d011d824a0
