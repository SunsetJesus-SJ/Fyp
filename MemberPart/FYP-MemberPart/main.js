
			$(document).ready(function() {
				$(".AIB").click(function (){
					$("#Notifa").css("display", "none");
                	$("#CP").css("display", "none");
					$("#DA").css("display", "none");
					$("#default").css("display", "none");
                	$("#AI").css("display", "inline-block");
					
					
				});
				$(".CPB").click(function (){
					$("#Notifa").css("display", "none");
                	
					$("#DA").css("display", "none");
                	$("#AI").css("display", "none");
					$("#default").css("display", "none");
					$("#CP").css("display", "inline-block");
					
				});
				$(".NotiB").click(function (){
					
                	$("#CP").css("display", "none");
					$("#DA").css("display", "none");
                	$("#AI").css("display", "none");
					$("#default").css("display", "none");
					$("#Notifa").css("display", "inline-block");
					
				});
				$(".DAB").click(function (){
					$("#Notifa").css("display", "none");
                	$("#CP").css("display", "none");
					
                	$("#AI").css("display", "none");
					$("#default").css("display", "none");
					$("#DA").css("display", "inline-block");
					
				});
			


			});

