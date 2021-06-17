$('document').ready(function (){
    $.post('Tabla.php', function (ret) {
                 $("#datagrid").jsGrid({
                 width: "100%",
                 height: "500px",
                 inserting: true,
                 editing: true,
                 sorting: true,
                 paging: true,
                 data: ret,
                 fields: [{ name: "ID_LIBRO",type: "number",title: "ID", width: 10,validate: "required",align:"center"},
                        { name: "ISBN",type: "text",title: "ISBN",width: 80,align:"center"},
                         { name: "TITULO",type: "text",title: "TITULO",width: 80,align:"center"},
                         { name: "AUTOR",type: "text",title: "CALLE", width: 55,align:"center"},
                         { name: "PUBLICACION",type: "text",title: "PUBLICACION", width: 40,align:"center"},
                         { name: "PAGINAS",type: "number",title: "PAGINAS", width: 40,align:"center"},
                         { name: "EDICION",type: "Text",title: "EDICION",width: 30,align:"center"},
                         { type: "control"}],
                });
            }
    ,'json');
});