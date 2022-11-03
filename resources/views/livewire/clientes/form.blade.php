<x-modal-header title="{{ $ComponentName }} " accion="{{ $accion }}" size="modal-lg" />

<div class="col-lg-12 layout-spacing">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <form class="form form-horizontal">

                    <div class="form-body">
                        <h4 class="form-section">
                            <i class="ft-user"> </i>
                            Información Personal
                        </h4>

                        <div class="form-group row">
                            <label for="nombre" class="col-md-3 label-control">Nombres </label>
                            <div class="col-md-9 pl-2">
                                <input type="text" for="nombre" wire:model='nombres' class="form-control"
                                    placeholder="Nombres">
                                @error('nombres')
                                    <span class="text-warning">{{ message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nombre" class="col-md-3 label-control">Apellidos </label>
                            <div class="col-md-9 pl-2">
                                <input type="text" wire:model='apellidos' class="form-control"
                                    placeholder="Apellidos">
                                @error('nombres')
                                    <span class="text-warning">{{ message }}</span>
                                @enderror
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<x-modal-footer enable="{{ $btnSaveEdit }}" />
