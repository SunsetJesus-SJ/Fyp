<script>
import Paper from '../components/Paper.vue';

export default {
  name: "ChangePassword",
  components: {
      Paper,
  },
};
</script>

<template>
	
    <Paper>
		
			<Paper>
				
				<Paper><h2>Change Password</h2>
					Old Password:<input type="text" id="OPass" name="OPass">
					<br><br>
					New Password:<input type="text" id="NPass" name="NPass">
					<br><br>
					Comfirm new Password:<input type="text" id="CPass" name="CPass">
					<br><br>
					<button type="button">Change information</button>
			</Paper>
			</Paper>
		</Paper>
</template>