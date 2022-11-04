<x-modal-header title="{{ $ComponentName }} " accion="{{ $accion }}" size="modal-lg" />

<div class="col-lg-12 ">
    <div class="card">
        <div class="card-content">
            <div class="card-body">

                <div class="tabpanel">
                    <ul class="nav nav-tabs nav-top-border no-hover-bg" role="tablist">

                        <li class="nav-item" role="presentation">
                            <a href="#dpersonal" class="nav-link active" type="button" role="tab"
                                aria-controls="dpersonal" aria-selected="true" data-toggle ="tab">Datos
                                Personales</a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a href="#dadjuntos" class="nav-link " type="button" role="tab" aria-controls="dadjuntos"
                                aria-selected="false" data-toggle ="tab">Datos
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
                                    <div class="form-group col-md-6 pl-2">
                                        <label for="nidentidad" class="label-control">Nombres </label>
                                        <input type="text" for="nombre" wire:model='nombres' class="form-control"
                                            placeholder="Nombres">
                                        @error('nombres')
                                            <span class="text-warning">{{ message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6 pl-2">
                                        <label for="nombre" class="label-control">Nombres </label>
                                        <input type="text" for="nombre" wire:model='nombres' class="form-control"
                                            placeholder="Nombres">
                                        @error('nombres')
                                            <span class="text-warning">{{ message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6 pl-2">
                                        <label for="apellidos" class="label-control">Apellidos </label>
                                        <input type="text" for="apellidos" wire:model='apellidos'
                                            class="form-control" placeholder="Apellidos">
                                        @error('apellidos')
                                            <span class="text-warning">{{ message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="form-group col-md-6 pl-2">
                                        <label for="sexo" class="col-md-3 label-control">Sexo </label>
                                        <select type="text" wire:model='sexo' class="form-control" placeholder="Sexo"
                                            for="inputSexo">
                                            <option selected>Masculino</option>
                                            <option>Feminino</option>
                                        </select>

                                        @error('sexo')
                                            <span class="text-warning">{{ message }}</span>
                                        @enderror
                                    </div>


                                    <div class="form-group col-md-6 pl-2">
                                        <label for="apodo" class="col-md-3 label-control">Apodo </label>
                                        <input type="text" wire:model='apodo' class="form-control"
                                            placeholder="apodo">
                                        @error('apodo')
                                            <span class="text-warning">{{ message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <h4 class="form-section col-md-12">
                                        <i class="ft-user"> </i>
                                        Ubicaci­ón
                                    </h4>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-12 pl-2">
                                        <label for="direccion" class="col-md-3 label-control">Dirección </label>
                                        <textarea name="direccion" wire:model='direccion' cols="30" rows="3" class="form-control"
                                            placeholder="Dirección"></textarea>

                                        @error('Direccion')
                                            <span class="text-warning">{{ message }}</span>
                                        @enderror
                                    </div>

                                </div>

                            </div>

                        </div>


                        <div class="tab-pane" id="dadjuntos" role="tabpanel" aria-labelledby="dadjuntos">
                            <p>Probando</p>
                        </div>
                    </div>
                </div>
                <form class="form">

            </div>

            </form>
        </div>

        <x-modal-footer enable="{{ $btnSaveEdit }}" />

    </div>
</div>
</div>