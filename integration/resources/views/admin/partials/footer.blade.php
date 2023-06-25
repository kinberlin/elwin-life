
<div id="error-modal" class="modal fade">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title">Message</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
              <!-- error message will be displayed here -->
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
      </div>
  </div>
</div>
<script src="{!! url('js/quill.js') !!}"></script>
<script src="{!! url('js/aapp.js') !!}"></script>
<script src="{!! url('js/datatables.js') !!}"></script>

@if (session('error'))
    <script>
        $(document).ready(function() {
            $('#error-modal').modal('show');
            $('#error-modal .modal-body').html('{{ session('error') }}');
        });
    </script>
@endif