<?php require_once('../html/head2.php') ?>
<div class="row">

    <div class="col-lg-8 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Lista de Empleado</h5>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal_empleado">
                    Nuevo Empleado
                </button>
                <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">#</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Identificacion</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Empleado</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Fecha_Nacimiento</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Celular</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Estado</h6>
                            </th>

                        </tr>
                    </thead>
                    <tbody id="tabla_empleado">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Ventana Modal-->

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="Modal_empleado" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" id="form_empleado">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Empleado</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="frm_identificacion">Identificacion</label>
                        <input type="text" required class="form-control" id="frm_identificacion" name="frm_identificacion" placeholder="frm_identificacion">
                    </div>

                    <div class="form-group">
                        <label for="frm_empleado">Empleado</label>
                        <input type="text" required class="form-control" id="frm_empleado" name="frm_empleado" placeholder="frm_empleado">
                    </div>

                    <div class="form-group">
                        <label for="frm_fecha_nacimiento">Fecha_nacimiento</label>
                        <input type="text" required class="form-control" id="frm_fecha_nacimiento" name="frm_fecha_nacimiento" placeholder="frm_fecha_nacimiento">
                    </div>

                    <div class="form-group">
                        <label for="frm_celular">Celular</label>
                        <input type="text" required class="form-control" id="frm_celular" name="frm_celular" placeholder="frm_celular">
                    </div>

                    <div class="form-group">
                        <label for="frm_estado">Estado</label>
                        <input type="text" required class="form-control" id="frm_estado" name="frm_estado" placeholder="frm_estado">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Grabar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once('../html/script2.php') ?>

<script src="empleado.controller.js"></script>
<script src="empleado.model.js"></script>