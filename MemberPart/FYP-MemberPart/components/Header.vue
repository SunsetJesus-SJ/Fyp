<script>
import Button from './Button.vue';

function isLogin() {
	return jwtToken !== null;
}

export default {
  name: 'Header',
  components: {
      Button,
  },
  data () {
	return {
	  username: '',
	  jwt: localStorage.getItem('JWT_TOKEN'),
	}
  },
  methods: {
	  logout: function() {
		  localStorage.removeItem('JWT_TOKEN');
		  router.push('/auth/login');
		  this.jwt = null;
		  closeNav();
	  }
  },
  mounted: function() {
	 const token = localStorage.getItem('JWT_TOKEN');
	 if(token) {
		const payload = jwtDecode(token);
		this.username = payload.username;
	 }
  }
}
</script>
<template>
    <div>
        <div class="header ">
			<div class="container_12">
				<div class="grid_5">
					<!--Top2-->
				</div>
				<div class="nav grid_7">
					Welcome! UserName:({{username}}) <img src="Photo/Icon.png" width="50" height="50">
				</div>
			</div>
		</div>
		
		<div class="header2">
			<div class="container_12">
				<div class="icon">
					<!--Top1-->##Icon##
				</div>
				<div class="menu">
					<div id="mySidenav" class="sidenav">
						<router-link to="/account_information">Account Information</router-link>
						<router-link to="/change_password">Change Password</router-link>
						<!-- <router-link to="/notifications">Notifications</router-link> -->
						<router-link to="/d_y_a">Deactivate your Acccount</router-link>
						<router-link to="/achievement">Achievement</router-link>
						<!-- <router-link to="/language">Language setting</router-link> -->
						<Button variant="info" @onClick="logout">Logout</Button>
						<span href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</span>
						
						<!-- <a class="AIB" style="text-decoration:none"
						id="AIB">Account Information&nbsp;&nbsp;</a>
						<br>
						<a class="CPB" style="text-decoration:none"
						id="CPB">Change Password&nbsp;&nbsp;</a>
						<a class="NotiB" style="text-decoration:none"
						id="NotiB">Notifications</a>
						<a class="DAB" style="text-decoration:none"
						id="DAB">Deactivate your Account</a>
						<a class="Back" href="" style="text-decoration:none"id="back">
							Home Page</a> -->
					  </div>
					  
					  <span onclick="openNav()"><img src="Photo/Menu.png" width="25" height="25"></span>
					  
				</div>
			</div>
		</div>
    </div>
</template>