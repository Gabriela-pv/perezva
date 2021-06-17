$('#formLogin').submit(function(e){
    e.preventDefault();
    
    var usuario = $.trim($("#usuario").val());    
    var password =$.trim($("#password").val()); 

    //Validación de espacios vacios
    if(usuario.length == ""  || password.length == ""){
        Swal.fire({
            type:'warning',
            title: 'Debe ingresar usuario y/o contraseña'
        });
        return false;
        //En caso de que si se haya ingresado se usa ajax para el envio de datos
    }else{
        $.ajax({
            url: "bd/login.php",
            type: "POST",
            datatype: "json",
            data: {usuario:usuario, password:password},
            //Si esta todo correcto ejecuta una función 
            success:function(data){
                if(data == "null"){
                    Swal.fire({
                        type:'error',
                        title:'Usuario y/o password incorrecta',
                    })
                } else{
                    Swal.fire({
                        type:'success',
                        title:'¡Conexión exitosa!',
                        confirmButtonColor: '#3885d5',
                        confirmButtonText:'Ingresar',
                    }).then((result) =>  {
                        if(result.value){
                            //window.location.href = "vistas/pag_inicio.php";
                            window.location.href = "vistas/index.html";
                        }
                    }
                    )
                }

            }
        });

    }

 

});