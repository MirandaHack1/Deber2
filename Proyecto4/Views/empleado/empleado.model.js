
class empleado_Model {
  constructor(
    frm_id,
    frm_identificacion,
    frm_empleado,
    frm_fecha_nacimiento,
    frm_celular,
    frm_estado,
    data,
    Ruta
  ) {
    this.frm_id = frm_id;
    this.frm_identificacion = frm_identificacion;
    this.frm_empleado = frm_empleado;
    this.frm_fecha_nacimiento = frm_fecha_nacimiento;
    this.frm_celular = frm_celular;
    this.frm_estado = frm_estado;
    this.Ruta = Ruta;
    this.data = data;
  }
  todos_controlador() {
    var html = "";
    $.get("../../Controllers/empleado.controller.php?op=todos"
      + this.Ruta, (res) => {
        res = JSON.parse(res);
        $.each(res, (index, valor) => {
          var fondo;
          html += `<tr>
                <td>${index + 1}</td>
                <td>${valor.frm_identificacion}</td>
                <td>${valor.frm_empleado}</td>
                <td>${valor.frm_fecha_nacimiento}</td>
                <td>${valor.frm_celular}</td>
                <td>${valor.frm_estado}</td>
            <td>
            <button class='btn btn-success' onclick='editar(${valor.frm_id
            })'>Editar</button>
            <button class='btn btn-danger' onclick='eliminar(${valor.frm_id
            })'>Eliminar</button>
            <button class='btn btn-info' onclick='ver(${valor.frm_id
            })'>Ver</button>
            </td></tr>
                `;
        });
        $("#tabla_empleado").html(html);
      });
  }


  insertar() {
    var dato = new FormData();
    dato = this.data;
    $.ajax({
      url: "../../Controllers/empleado.controller.php?op=insertar",
      type: "POST",
      data: dato,
      contentType: false,
      processData: false,
      success: function (res) {
        res = JSON.parse(res);
        if (res === "ok") {
          Swal.fire("Empleado", "Empleado Ingresado", "success");
          todos_controlador();
        } else {
          Swal.fire("Error", res, "error");
        }
      }
    });
    limpia_Cajas();
  }

  limpia_Cajas() {
    document.getElementById("frm_identificacion").value = "";
    document.getElementById("frm_empleado").value = "";
    document.getElementById("frm_fecha_nacimiento").value = "";
    document.getElementById("frm_celular").value = "";
    document.getElementById("frm_estado").value = "";

    $("#Modal_empleado").modal("hide");
  }
}
