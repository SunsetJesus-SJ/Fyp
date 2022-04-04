<script>
import Paper from '../components/Paper.vue';

export default {
  name: "Notification",
  components: {
      Paper,
  },
};
</script>
<template>
    <Paper>
			<Paper>
				<h2>Notifications</h2>
				Notifications email:<br> <input type="text" id="NE" name="NE">
				<br><br>
				<button type="button">Comfirm</button>
			</Paper>
		</Paper>
</template>