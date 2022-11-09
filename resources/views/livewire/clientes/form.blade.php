<x-modal-header title="{{ $ComponentName }} " action="{{ $accion }}" size="modal-lg" />

<div class="col-lg-12 ">
    <div class="card">
        <div class="card-content">
            <form class="form">
                <div class="card-body">

                    <div class="tabpanel">
                        <ul class="nav nav-tabs nav-top-border no-hover-bg" role="tablist">

                            <li class="nav-item" role="presentation">
                                <a href="#dpersonal" class="nav-link active" type="button" role="tab"
                                    aria-controls="dpersonal" aria-selected="true" data-toggle="tab">Datos
                                    Personales</a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a href="#dadjuntos" class="nav-link " type="button" role="tab"
                                    aria-controls="dadjuntos" aria-selected="false" data-toggle="tab">Datos
                                    Adjuntos</a>
                            </li>

                        </ul>

                        <div class="tab-content">
                            <div class="tab-pane active" id="dpersonal" role="tabpanel" aria-labelledby="dpersonal">

                                <div class="form-body">
                                    <h4 class="form-section">
                                        <i class="ft-user"> </i>
                                        Información Personal
                                    </h4>
                                    <div class="row">

                                        <div class="form-group col-md-3 pl-2">
                                            <label for="nidentidad" class="label-control">No. Identidad </label>
                                            <input type="text" for="nidentidad" wire:model='nidentidad'
                                                class="form-control {{ $errors->first('nidentidad') ? ' text-danger' : '' }}"
                                                placeholder="No. Identidad">
                                            @error('nidentidad')
                                            <x-alert msg="{{ $message }}" />
                                            {{-- <span class="text-warning">{{ message }}</span> --}}
                                            @enderror
                                        </div>


                                        <div class="form-group col-md-4 pl-2">
                                            <label for="nombres" class="label-control">Nombres </label>
                                            <input type="text" for="nombre" wire:model='nombres' class="form-control"
                                                placeholder="Nombres">
                                            @error('nombres')
                                            <span class="text-warning">{{ message }}</span>
                                            @enderror
                                        </div>


                                        <div class="form-group col-md-5 pl-2">
                                            <label for="apellidos" class="label-control">Apellidos </label>
                                            <input type="text" for="apellidos" wire:model='apellidos'
                                                class="form-control" placeholder="apellidos">
                                            @error('apellidos')
                                            <span class="text-warning">{{ message }}</span>
                                            @enderror
                                        </div>


                                    </div>


                                    <div class="row">

                                        <div class="form-group col-md-3 pl-2">
                                            <label for="apodo" class="label-control">Apodo </label>
                                            <input type="text" wire:model='apodo' class="form-control"
                                                placeholder="apodo">
                                            @error('apodo')
                                            <span class="text-warning">{{ message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-3 pl-2">
                                            <label for="sexo" class=" label-control">Sexo </label>
                                            <select type="text" wire:model='sexo' class="form-control"
                                                placeholder="Sexo" for="inputSexo">
                                                <option selected>Masculino</option>
                                                <option>Feminino</option>
                                            </select>

                                            @error('sexo')
                                            <span class="text-warning">{{ message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-3 pl-2">
                                            <label for="fecha_nac" class=" label-control">Fecha Nacimiento </label>
                                            <div class="position-relative has-icon-left">
                                                <input type="date" wire:model='fecha_nac' class="form-control"
                                                    placeholder="Fecha Nacimiento">
                                                @error('fecha_nac')
                                                <span class="text-warning">{{ message }}</span>
                                                @enderror
                                                <div class="form-control-position">
                                                    <i class="ft-message-square"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-3 pl-2">
                                            <label for="idenacionalidad" class=" label-control">Nacionalidad </label>
                                            <select wire:model='idnacionalidad' class="form-control"
                                                placeholder="Nacionalidad">
                                                <option value="Seleccionar" disabled>Seleccionar</option>
                                                @foreach ($nacionalities as $item)
                                                <option value="{{ $item->id }}">{{ $item->nacionalidad }}
                                                </option>
                                                @endforeach
                                            </select>
                                            @error('idenacionalidad')
                                            <span class="text-warning">{{ message }}</span>
                                            @enderror
                                        </div>



                                    </div>
                                    <h4 class="form-section">
                                        <i class="ft-map"> </i>
                                        Ubicaci­ón
                                    </h4>
                                    <div class="row">

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12 pl-2">
                                            <label for="direccion" class="col-md-3 label-control">Dirección </label>
                                            <textarea name="direccion" wire:model='direccion' cols="30" rows="3"
                                                class="form-control" placeholder="Dirección"></textarea>

                                            @error('Direccion')
                                            <span class="text-warning">{{ message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="form-group col-md-4 pl-2">
                                            <label for="cliudad" class=" label-control">Ciudad</label>
                                            <div class="position-relative has-icon-left">
                                                <select type="text" wire:model='idciudad' class="form-control"
                                                    placeholder="Ciudad">
                                                    <option value="Seleccionar" disabled>Seleccionar</option>
                                            </div>
                                            @foreach ($vciudad as $item)
                                            <option value="{{ $item->id }}">{{ $item->ciudad }}
                                            </option>
                                            @endforeach
                                            </select>
                                            @error('ciudad')
                                            <span class="text-warning">{{ message }}</span>
                                            @enderror
                                            <div class="form-control-position">
                                                <i class="ft-map"></i>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-group col-md-4 pl-2">
                                        <label for="rutas" class=" label-control">Ruta</label>
                                        <div class="position-relative has-icon-left">
                                            <select type="text" wire:model='idruta' class="form-control"
                                                arial-placeholder="Ruta">
                                                <option value="Seleccionar" disabled>Seleccionar</option>
                                                @foreach ($vrutas as $item)
                                                <option value="{{ $item->id }}"> {{ $item->rutas }}</option>
                                                @endforeach

                                            </select>
                                            @error('ruta')
                                            <span class="text-warning">{{ message }}</span>
                                            @enderror
                                            <div class="form-control-position">
                                                <i class="ft-map-pin"></i>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group col-md-4 pl-2">
                                        <label for="estado" class=" label-control">Estado</label>
                                        <div class="position-relative has-icon-left">
                                            <select type="text" aria-placeholder="Estado" wire:model='estado'
                                                class="form-control">
                                                <option value="ACTIVO" @disabled($accion=='Agregar' )> ACTIVO </option>
                                                <option value="INACTIVO" @disabled($accion=='Agregar' )> INACTIVO
                                                </option>
                                            </select>
                                            @error('estado')
                                            <span class="text-warning">{{ message }}</span>
                                            @enderror
                                            <div class="form-control-position">
                                                <i class="ft-check-square"></i>
                                            </div>
                                        </div>
                                    </div>






                                </div>
                                <DIV class="row">
                                    <div class="form-group col-md-3 pl-2">
                                        <label for="phone1" class=" label-control">Teléfono # 1 </label>
                                        <div class="position-relative has-icon-left">
                                            <input type="text" wire:model='phone1' class="form-control"
                                                placeholder="Teléfono # 1">
                                            @error('phone1')
                                            <span class="text-warning">{{ message }}</span>
                                            @enderror
                                            <div class="form-control-position">
                                                <i class="ft-phone-call"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-3 pl-2">
                                        <label for="phone2" class=" label-control">Teléfono # 2 </label>
                                        <div class="position-relative has-icon-left">
                                            <input type="text" wire:model='phone2' class="form-control"
                                                placeholder="Teléfono # 2">
                                            @error('phone2')
                                            <span class="text-warning">{{ message }}</span>
                                            @enderror
                                            <div class="form-control-position">
                                                <i class="ft-phone-call"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6 pl-2">
                                        <label for="email" class=" label-control">Email </label>
                                        <div class="position-relative has-icon-left">
                                            <input type="text" wire:model='email' class="form-control"
                                                placeholder="Fecha Nacimiento">
                                            @error('email')
                                            <span class="text-warning">{{ message }}</span>
                                            @enderror
                                            <div class="form-control-position">
                                                <i class="ft-at-sign"></i>
                                            </div>
                                        </div>
                                    </div>


                                </DIV>

                            </div>

                        </div>


                        <div class="tab-pane" id="dadjuntos" role="tabpanel" aria-labelledby="dadjuntos">
                            <p>Probando</p>
                        </div>
                    </div>
                </div>


        </div>

        </form>
    </div>

    <x-modal-footer enable="{{ $btnSaveEdit }}" />

</div>
</div>
</div>