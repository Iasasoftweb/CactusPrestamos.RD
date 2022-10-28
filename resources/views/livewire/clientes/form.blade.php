<x-modal-header title="{{$ComponentName}} " action="{{$accion}}" size="modal-lg" />

    <div class="col-lg-12 layout-spacing">
        <div class="card">
            <div class="card-content">
                <form action="gow g-3" autocomplete="off">
                    <div class="col-ms-12">
                        <input type="text" wire:model='nombres' class="form-control form-control-sm" placeholder="Nombres">
                        @error('nombres') <span class="text-warning">{{message}}</span> @enderror
                    </div>

                    <div class="col-ms-12">
                        <input type="text" wire:model='apellidos' class="form-control form-control-sm" placeholder="apellidos">
                        @error('nombres') <span class="text-warning">{{message}}</span> @enderror
                    </div>


                </form>
            </div>
        </div>
    </div>
    
    
    <x-modal-footer enable="{{ $btnSaveEdit }}" />