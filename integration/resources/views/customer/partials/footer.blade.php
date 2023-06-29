@if (session('error'))
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
<!--<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#error-modal">
    Montrer l'erreur
</button>-->
@endif

<script src="{!! url('js/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') !!}"></script>
<script src="{!! url('vendor/jquery/jquery.min.js') !!}"></script>
<script src="{!! url('vendor/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>

<script src="{!! url('vendor/jquery-easing/jquery.easing.min.js') !!}"></script>

<script src="{!! url('vendor/owl-carousel/owl.carousel.js') !!}"></script>
<script src="{!! url('vendor/bootstrap/js/popper.min.js') !!}"> </script>
<script src="{!! url('js/custom.js') !!}"></script>

@if (session('error'))
    <script>
        $(document).ready(function() {
            $('#error-modal').modal('show');
            $('#error-modal .modal-body').html('{{ session('error') }}');
        });
    </script>
@endif