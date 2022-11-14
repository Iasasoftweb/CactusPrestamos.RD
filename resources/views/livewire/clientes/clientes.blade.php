<div>

    <div class="content-overlay" style="opacity: 0; !import"></div>

    
    <div class="col-md-12">
        <div class="card cardF">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex justify-content-between">


                        <div class="media-body text-left d-flex justify-content-start">
                            <div>
                                <i class="ft-users font-large-2 mr-2"></i>
                            </div>
                            <div>
                                <h3 class="info">{{ $ComponentName }} |Listado</h3>
                                <h6>{{ $DetalleComponent }}</h6>
                            </div>
                        </div>
                        <x-buttomrefresh />

                      
    
                        <button class="btn btn-primary white mr-2" onclick="fireModal(1)" type="button"><i class="ft-plus"> </i>Agregar Nuevo Cliente</button>
                       
                    </div>

                  

                </div>
            </div>


            <div class="card-content m-1">
                <div class="table-responsive ">
                    <table class="table  table-hover">
                        <thead class="bg-dark white ">
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
                            <tbody style="border-color: rgb(241, 241, 241) !important">
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nidentidad }}</td>
                                    <td>{{ $item->nombres }}</td>
                                    <td>{{ $item->apellidos }}</td>
                                    <td>{{ $item->phone1 }}</td>
                                    <td>{{ $item->phone2 }}</td>
                                    <td>

                                        <a href="javascript:void(0)" class="btn btn-warning mtmobile" title="Edit"
                                            onclick="fireModal(1)" wire:click="Edit({{ $item->id }})"
                                            ><i class="ft-edit"></i>
                                            Editar
                                        </a>
                                        <a href="javascript:void(0)" class="btn btn-danger" title="Delete">
                                            <i class="feather-trash-2"></i> Borrar
                                        </a>
                                    </td>

                                </tr>

                            </tbody>
                        @endforeach



                        
                    </table>
                       <h4 style="font-weight: 600">Total de Clientes : <i style="font-weight:300 ">{{ $vclientes->count() }}</i></h4>  
                      <div class="d-flex justify-content-center ">
                       {{ $vclientes->links() }}
                    </div>  
                    
                </div>
            </div>



        </div>


        {{-- <div class="card cardF">
            <div class="card-content">
                <div class="card-body">
                   
                </div>
            </div>
        </div> --}}
    </div>



    @include('livewire.Clientes.form')
    @include('livewire.Clientes.scripts')


</div>
