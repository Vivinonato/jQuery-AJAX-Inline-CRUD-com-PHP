<!DOCTYPE html>
<html lang="en"><head>
<title>jQuery AJAX Inline CRUD com PHP - Viviane Nonato</title>

</div><div class="content">
<div id="tutorial-body"><div id="tutorial">
<div class="demo-content">
<script src="jquery-2.js" type="text/javascript"></script>
<script>

function createNew() {
	$("#add-more").hide();
	var data = '<tr class="table-row" id="new_row_ajax">' +
	'<td contenteditable="true" id="txt_title" onBlur="addToHiddenField(this,\'title\')" onClick="editRow(this);"></td>' +
	'<td contenteditable="true" id="txt_description" onBlur="addToHiddenField(this,\'description\')" onClick="editRow(this);"></td>' +
	'<td><input type="hidden" id="title" /><input type="hidden" id="description" /><span id="confirmAdd"><a onClick="addToDatabase()" class="ajax-action-links">Salvar</a> / <a onclick="cancelAdd();" class="ajax-action-links">Cancelar</a></span></td>' +
	'</tr>';
  $("#table-body").append(data);
}
function cancelAdd() {
	$("#add-more").show();
	$("#new_row_ajax").remove();
}
function editRow(editableObj) {
  $(editableObj).css("background","#FFF");
}

function saveToDatabase(editableObj,column,id) {

}
function addToDatabase() {
  var title = $("#title").val();
  var description = $("#description").val();
  	  $("#new_row_ajax").remove();
		  $("#add-more").show();
		  $("#table-body").append('<tr class="table-row" id="table-row-0">'+
'<td contenteditable="true" onBlur="saveToDatabase(this)" onClick="editRow(this);">'+title+'</td>'+
'<td contenteditable="true" onBlur="saveToDatabase(this)" onClick="editRow(this);">'+description+'</td>'+
'<td><a class="ajax-action-links" onclick="deleteRecord(0);">Delete</a></td>'+
'</tr>');
}
function addToHiddenField(addColumn,hiddenField) {
	var columnValue = $(addColumn).text();
	$("#"+hiddenField).val(columnValue);
}

function deleteRecord(id) {
	if(confirm("Tem certeza que vai deletar a tabela?")) {
		$("#table-row-"+id).remove();
	}
}
</script>

<head>
    <!-- BootstrapCDN e Ajax-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/sketchy/bootstrap.min.css"> 
    <style type="text/css">    
.tbl-qa{width: 98%;font-size:0.9em;border-bottom: 5px solid #D5D5D5;}
.tbl-qa th.table-header {margin-top: 80px;padding: 10px; text-align: left;padding:12px;border-bottom: 5px solid #D5D5D5;}
.tbl-qa .table-row td { height: 2px;padding:10px;border-bottom: 1px solid #D5D5D5;}
.ajax-action-links {color: #09F; margin: 10px 0px;cursor:pointer;}
.ajax-action-button { border:2px solid #D5D5D5; margin: 10px 1px;cursor:pointer;display: inline-block;padding: 10px 20px;}
.margin-top-md{margin-top: 80px;}
    </style>
</head>
<body>                       
            
<!-- Final do Ajax poll code  -->
<div class="container">    
        <div class="margin-top-md"> 

<table class="tbl-qa">
<h1>jQuery AJAX Inline CRUD com PHP </h1>

  <thead>
	<tr>
	  <th class="table-header">Nome</th>
	  <th class="table-header">Email</th>
	  <th class="table-header">Editar</th>
	</tr>
  </thead>
  <tbody id="table-body">
	<tr class="table-row" id="table-row-1">
		<td onblur="saveToDatabase(this,'post_title','1')" onclick="editRow(this);" contenteditable="true">Exemplo 1</td>
		<td onblur="saveToDatabase(this,'description','1')" onclick="editRow(this);" contenteditable="true">exemplo1@email.com</td>
		<td><a class="ajax-action-links" onclick="deleteRecord(1);">Deletar</a></td>
	  </tr>
	  	  <tr class="table-row" id="table-row-2">
		<td onblur="saveToDatabase(this,'post_title','2')" onclick="editRow(this);" contenteditable="true">Exemplo 2</td>
		<td onblur="saveToDatabase(this,'description','2')" onclick="editRow(this);" contenteditable="true">exemplo2@email.com</td>
		<td><a class="ajax-action-links" onclick="deleteRecord(2);">Deletar</a></td>
	  </tr>
	  	  <tr class="table-row" id="table-row-7">
		<td onblur="saveToDatabase(this,'post_title','7')" onclick="editRow(this);" contenteditable="true">Exemplo 3</td>
		<td onblur="saveToDatabase(this,'description','7')" onclick="editRow(this);" contenteditable="true">exemplo3@email.com</td>
		<td><a class="ajax-action-links" onclick="deleteRecord(7);">Deletar</a></td>
	  </tr>
  </tbody>
</table>
<div class="ajax-action-button" id="add-more" onclick="createNew();" style="display: inline-block;">Adicionar mais Emails</div>

</div>

</script></body></html>
