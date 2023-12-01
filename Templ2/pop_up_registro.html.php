<?php
            ob_start();
            ?>

            <!-- Modal  aviso carrito-->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><?=$titulo?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="mensaje_Modal"><?=$mensaje?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
                </div>
            </div>
            </div>
            <!-- Fin Modal -->
            
            <?php
            $modal = ob_get_clean();

            ob_start();
            ?>

            <script>
                $(document).ready(function(){
                $('#staticBackdrop').modal('show');
                });
            </script>
            
            <?php
            $footer_script = ob_get_clean();