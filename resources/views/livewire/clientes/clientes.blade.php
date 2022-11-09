<div>

    <div class="content-overlay"></div>

    <div class="col-md-12">
        <div class="card cardF">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex justify-content-between">


                        <div class="media-body text-left d-flex justify-content-start">
                            <div>
                                <i class="icon-user font-large-2 mr-2"></i>
                            </div>
                            <div>
                                <h3 class="info">{{ $ComponentName }} | Listado</h3>
                                <h6>{{ $DetalleComponent }}</h6>
                            </div>
                        </div>


                        <button class="btn btn-primary white" onclick="fireModal(1)"
                            wire:click.enter="$set('accion', 'Agregar')" data-toggle="modal"
                            data-target="#modalCustomers">Agregar Nuevo Cliente</button>
                        {{-- <a href="javascript:void(0)" class="btn btn-info bg-dark" data-toggle="modal"
                            data-target="#theModal"> Agregar </a> --}}
                    </div>

                  

                </div>
            </div>


            <div class="card-content m-1">
                <div class="table-responsive ">
                    <table class="table ">
                        <thead class="bg-dark white">
                            <tr>
                                <th>Id</th>
                                <th>No. Identidad</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Tel. 1</th>
                                <th>Tel. 2</th>
                                <th>Acciones</th>


                            </tr>
                        </thead>
                        @foreach ($vclientes as $item)
                            <tbody>
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nidentidad }}</td>
                                    <td>{{ $item->nombres }}</td>
                                    <td>{{ $item->apellidos }}</td>
                                    <td>{{ $item->phone1 }}</td>
                                    <td>{{ $item->phone2 }}</td>
                                    <td>

                                        <a href="javascript:void(0)" class="btn btn-success mtmobile" title="Edit"
                                            onclick="fireModal(1)" wire:click.enter="$set('accion', 'Editar')"
                                            data-toggle="modal" data-target="#modalCustomers">
                                            Editar
                                        </a>
                                        <a href="javascript:void(0)" class="btn btn-danger" title="Delete">
                                            Borrar
                                        </a>
                                    </td>

                                </tr>

                            </tbody>
                        @endforeach




                    </table>
                      <div class="d-flex justify-content-center ">
                       {{ $vclientes->links() }}
                    </div>  
                  
                </div>
            </div>



        </div>


        <div class="card cardF">
            <div class="card-content">
                <div class="card-body">
                    {{-- <div class="media d-flex justify-content-between">


                        <div class="media-body text-left d-flex justify-content-start">
                            <div>
                                <i class="icon-user font-large-2 mr-2"></i>
                            </div>
                            <div>
                                <h3 class="info">ComponentName | PageTitle</h3>
                                <h6>DetalleComponent</h6>
                            </div>
                        </div>
                        <a href="javascript:void(0)" class="btn btn-info bg-dark" data-toggle="modal"
                            data-target="#theModal"> Agregar </a>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>



    @include('livewire.Clientes.form')
    @include('livewire.Clientes.scripts')


</div>
