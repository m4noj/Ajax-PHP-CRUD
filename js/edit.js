$(document).ready(function(){
	function get_edit_id(){
		let url = new URLSearchParams(window.location.search);
			let id = url.get('id');
			id = parseInt(id);
		return id;
	}
	function get_rows(){
		let id = get_edit_id();
		$.get(
			"includes/get.php",
			{id : id},
			function(data){
				data = JSON.parse(data);
				$("#upd_first").val(data.first);
				$("#upd_last").val(data.last);
				$("#upd_work").val(data.work);
				$("#upd_city").val(data.city);
				$("#upd_email").val(data.email);
				console.log(data);
			});
	}
	if(get_edit_id()){
		get_rows();
	}
		$("#editForm").submit(function(e){
		e.preventDefault();
		let id = get_edit_id();
		$.ajax({
			type: "POST",
			url:"includes/update.php",
			data: {id:id,first : $('#upd_first').val(),last : $('#upd_last').val(),work : $('#upd_work').val(),city : $('#upd_city').val(),email : $('#upd_email').val()},
		})
		.done(function(data){
		$("#upd_first").val('');
		 $("#upd_last").val('');
		 $("#upd_work").val('');
		 $("#upd_city").val('');
		 $("#upd_email").val('');
			$("#table").load("includes/load.php");
			$("#msgEdit").html("<p class='text-center alert alert-success'>"+data+"</p>");
			$("#msgEdit").slideDown(1000);
		});
 });
});	