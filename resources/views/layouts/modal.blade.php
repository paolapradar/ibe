<!-- PN MODAL -->
<div class="modal fade" id="modalDefault" tabindex="-1" role="dialog" aria-labelledby="ModalLabelDefault" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="ModalLabelDefault">{{ $modaltitle }}</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          @yield("modalcontent")
      </div>
    </div>
  </div>
</div>
<!-- PN MODAL FIN -->
