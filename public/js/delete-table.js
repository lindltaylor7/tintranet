function confirmacion (e) {
  if (confirm("¿Estas seguro que desea eliminar este registro?")) {
    return true;
  } else {
    e.preventDefault();    
  }
}

let linkDelete = document.querySelectorAll(".btn-delete");

linkDelete.forEach(index => index.addEventListener("click", confirmacion))
