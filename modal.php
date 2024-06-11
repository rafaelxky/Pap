<!-- div modal para aparecer a imagem completa quando se clica na imagem -->
        <!-- modal-dialog-centered é para central a modal -->
        <div id="imageModal" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="imageModalLabel"></h4>
                    </div>
                    <div class="modal-body">
                        <img id="modalImage" src="#" alt="Image Preview" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
<script> console.log("O modal.php foi executado!");</script>