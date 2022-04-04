<script>
import Paper from '../components/Paper.vue';

export default {
  name: "Language",
  components: {
      Paper,
  },
};
</script>
<template>
    <Paper>
			<Paper>
				<div class="mt-5" style="margin-left:25px; margin-top:50px; ">
					<br>
					<h1>Language setting</h1>
					<br>
					<a>Select the display language:</a>
					<select name="language" id="language">Seclect the display language
						<!-- <option value =""></option> -->
						<option value ="Chinese">Chinese</option>
						<option value ="English">English</option>
					</select>
					<br><br>
				</div>
			</Paper>
	</Paper>
</template>