function validation(e){
    if(confirm("¿Está seguro que desea borrar este registro?")){
        return true;
    }else{
        e.preventDefault();
    }
}

let linkDelete = document.querySelectorAll(".btnaction");

for(var i = 0; i < linkDelete.length; i++){
    linkDelete[i].addEventListener('click', validation);
}