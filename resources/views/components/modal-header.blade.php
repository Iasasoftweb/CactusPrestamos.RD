
<div wire:ignore.self class="modal" id="modalCustomers" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true" style="display: none">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header  bg-primary white">
          <h5 class="modal-title white " id="modalTitle">{{$title}} | {{$accion}}</h5>
          <button type="button" onclick="fireModal(0)" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
        <div class="modal-body">