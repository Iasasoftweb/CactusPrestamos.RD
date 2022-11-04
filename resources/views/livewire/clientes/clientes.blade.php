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
                                <h3 class="info">{{$ComponentName}} | {{$accion}}</h3>
                                <h6>{{$DetalleComponent}}</h6>
                            </div>
                        </div>
                       

                        <button class="btn btn-info bg-dark" onclick="fireModal(1)" data-toggle="modal" data-target="#modalCustomers">Agregar</button>
                        {{-- <a href="javascript:void(0)" class="btn btn-info bg-dark" data-toggle="modal"
                            data-target="#theModal" > Agregar </a> --}}
                    </div>

                    search

                </div>
            </div>


            <div class="card-content m-1">
                <div class="table-responsive text-nowrap ">
                    <table class="table table-hover table-bordered table-striped ">
                        <thead class="text-white" style="background-color: #3b3f5c">
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

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>01000225662</td>
                                <td>Ismael</td>
                                <td>Santos</td>
                                <td>829-291-8866</td>
                                <td>829-291-8866</td>
                                <td>
                                    <a href="javascript:void(0)" class="btn btn-dark mtmobile" title="Edit">
                                        Editar  
                                    </a>
                                    <a href="javascript:void(0)" class="btn btn-danger" title="Delete">
                                        Borrar
                                    </a>
                                </td>

                            </tr>
                           
                        </tbody>

                    </table>
                    Pagination
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


   
@include('livewire.clientes.form')
@include('livewire.clientes.scripts')


</div>