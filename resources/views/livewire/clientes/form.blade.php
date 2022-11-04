<x-modal-header title="{{ $ComponentName }} " accion="{{ $accion }}" size="modal-lg" />

<div class="col-lg-12 ">
    <div class="card">
        <div class="card-content">
            <div class="card-body">

                <div class="tabpanel">
                <ul class="nav nav-tabs nav-top-border no-hover-bg" role="tablist">

                    <li class="nav-item" role="presentation">
                        <a href="#dpersonal" class="nav-link active"  
                            type="button" role="tab" aria-controls="dpersonal" aria-selected="true">Datos
                            Personales</a>
                    </li>

                    <li class="nav-item active" role="presentation">
                        <a href="#dadjuntos" class="nav-link" 
                            type="button" role="tab" aria-controls="dadjuntos" aria-selected="false">Datos
                            Adjuntos</a>
                    </li>

                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="dpersonal" role="tabpanel" aria-labelledby="dpersonal">

                         <P>pRIMERO</P>

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
