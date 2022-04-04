<script>
import Paper from '../components/Paper.vue';

export default {
  name: "AccountInfo",
  components: {
      Paper,
  },
};
</script>

<template>
	<div>
		
		<Paper>
			<br>
			<img class="w-20 h-20" src="Photo/Icon.png" />
			Member: (Member Name)
		</Paper>	

		<Paper>
			<br>
			<Paper>
				<h2>personal information</h2>
				Email: <input type="text" id="Uemail" name="Uemail">
				<br><br>
				Name:<input type="text" id="Uname" name="Uname">
				<br><br>
				Date Of Register:<input type="text" id="birthday" name="birthday">
				<br><br>
				Phone number:<input type="text" id="Uphone" name="Uphone">
				<br><br><br>
				
			
			</Paper>
		
		</Paper>
	</div>
</template>