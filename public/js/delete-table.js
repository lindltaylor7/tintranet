
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
  let name = index.getAttribute("data-name"),
      lastname = index.getAttribute("data-lastname");
  if (!alert(`No se puede eliminar el ${name}, el ${name} tiene ${lastname} registados`)) {
    e.preventDefault();   
  }
}));
