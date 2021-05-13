@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-sm-4">
            <div class="card">
              <div class="card-header align-center text-center">
                <div class="row">
                      <div class="col-md-3 text-left">
                        <button type="submit" class="btn btn-primary " onclick="location.href='{{ route('home') }}'"> Regresar</button>
                      </div>
                      <div class="col-md-6">
                        <h3>{{ __('Registrar') }}</h3>
                      </div>
                      <div class="col-md-3">
                      </div>
                </div>
              </div>
                <div class="card-body  ">
                  <form method="POST" action="{{ route('RegistrarEmpleado') }}">
                  @csrf

                    <div class="form-group row ">

                      <label for="name" class="p-3 col-md-4 col-form-label text-md-center">{{ __('Primer Nombre') }} <span class="text-red">*</span></label>
                      <div class="p-1 col-md-6">
                          <input id="ipt_primer_nombre" type="text" class="form-control " name="primer_nombre" value="{{ old('primer_nombre') }}"  >
                      </div>

                      <label for="name" class="p-3 col-md-4 col-form-label text-md-center">{{ __('Segundo Nombre') }} </label>
                      <div class="p-1 col-md-6">
                          <input id="ipt_segundo_nombre" type="text" class="form-control " name="segundo_nombre" value="{{ old('segundo_nombre') }}"  >
                      </div>

                      <label for="name" class="p-3 col-md-4 col-form-label text-md-center">{{ __('Apellido Paterno') }} <span class="text-red">*</span></label>
                      <div class="p-1 col-md-6">
                          <input id="ipt_apellido_paterno" type="text" class="form-control " name="apellido_paterno" value="{{ old('apellido_paterno') }}"  >
                      </div>

                      <label for="name" class="p-3 col-md-4 col-form-label text-md-center">{{ __('Apellido Materno') }}</label>
                      <div class="p-2 col-md-6">
                          <input id="ipt_apellido_materno" type="text" class="form-control " name="apellido_materno" value="{{ old('apellido_materno') }}"  >
                      </div>


                      <label for="name" class="col-md-4 col-form-label text-md-center">Fecha de Nacmimiento<span class="text-red">*</span></label>
                      <div class="p-2 col-md-6">
                          <input class="form-control text-center" type="date"  id="ipt_fecha_nacimiento" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" >
                      </div>


                      <label for="name" class="col-md-4 col-form-label text-md-center">Curp<span class="text-red">*</span></label>
                      <div class="p-2 col-md-6p-2 col-md-6">
                          <input class="form-control" type="name"  id="ipt_curp" name="curp" value=" {{ old( 'curp') }}" >
                      </div>

                      <label for="name" class="col-md-4 col-form-label text-md-center">RFC<span class="text-red">*</span></label>
                      <div class="p-2 col-md-6p-2 col-md-6">
                          <input class="form-control" type="name"  id="ipt_rfc" name="rfc" value= "{{ old('rfc') }}" >
                      </div>

                      <label for="name" class="col-md-4 col-form-label text-md-center">No. Seguro Social<span class="text-red">*</span></label>
                      <div class="p-2 col-md-6p-2 col-md-6">
                          <input class="form-control" type="name"  id="ipt_numero_seguro_social" name="numero_seguro_social" value="{{ old('numero_seguro_social') }}" >
                      </div>

                      <label for="name" class="col-md-4 col-form-label text-md-center">Correo Empresa<span class="text-red">*</span> </label>
                      <div class="p-2 col-md-6">
                          <input id="ipt_correo_empresa" type="text" class="form-control " name="correo_empresa" value="{{ old('correo_empresa') }}"  >
                      </div>

                      <label for="name" class="col-md-4 col-form-label text-md-center">Correo Personal<span class="text-red">*</span></label>
                      <div class="p-2 col-md-6">
                          <input id="ipt_correo_personal" type="text" class="form-control " name="correo_personal" value="{{ old('correo_personal') }}" >
                      </div>

                      <label for="name" class="col-md-4 col-form-label text-md-center">Contraseña<span class="text-red">*</span></label>
                      <div class="p-2 col-md-6">
                          <input id="ipt_contrasenia" type="password" class="form-control " name="contrasenia" value="{{ old('contrasenia') }}" >
                      </div>
                    </div>
                    <div class="form-group row mb-0">
                      <div class="col-md-3 ">
                      </div>
                      <div class="col-md-4 text-right">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Registrar') }}
                        </button>
                      </div>
                      <div class="p-3 col-md-5 ">
                        <span class="text-red">*</span><h7>Estos datos son obligatorios</h7>
                      </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection