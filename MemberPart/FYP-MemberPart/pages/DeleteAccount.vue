<script>
import Paper from '../components/Paper.vue';

export default {
  name: "DeleteAccount",
  components: {
      Paper,
  },
};
</script>
<template>
    <Paper>
			<div class="Passblock22">
				<h2>This will deactivate your account</h2>
				<h2>You’re about to start the process of deactivating your account.</h2>	
				<br>
				<h2>Your display name, @username, and public profile will no longer be viewable</h2>
				<br><br>

				<button type="button">Comfirm</button>
			</div>
	</Paper>
</template>