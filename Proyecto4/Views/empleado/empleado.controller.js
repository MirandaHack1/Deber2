//archivo de donde llamar al procedimiento
//controlador

function init() {
  $("#form_empleado").on("submit", function (e) {
    guardaryeditar(e);
  });
}

$().ready(() => {
  //detecta carga de la pagina
  todos_controlador();
});

var todos_controlador = () => {
  var todos = new empleado_Model("", "", "", "", "", "", "", "", "todos");
  todos.todos_controlador();
}

var guardaryeditar = (e) => {
  e.preventDefault();
  var formData = new FormData($("#form_empleado")[0]);
  var empleado = new empleado_Model('', '', '', '', '', '', formData, 'insertar');
  empleado.insertar();
}



  ; init();
