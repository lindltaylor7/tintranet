
let $linkDelete = document.querySelectorAll(".btn-delete"), 
    $linkDeleteUser = document.querySelectorAll(".btn-delete-user");

$linkDelete.forEach(index => index.addEventListener("click",  e => {
  if (confirm("¿Estas seguro que desea eliminar este registro?")) {
    return true;
  } else {
    e.preventDefault();    
  }
}));

$linkDeleteUser.forEach(index => index.addEventListener("click", e => {
  if (!alert("No se puede eliminar el área, el área tiene usuarios registados")) {
    e.preventDefault();   
  }
}));
