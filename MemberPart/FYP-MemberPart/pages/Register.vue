
<script>
import Paper from '../components/Paper.vue';
import Button from '../components/Button.vue';

function isLogin() {
    return jwtToken !== null;
}

export default {
  name: "Language",
  components: {
      Paper,
      Button,
  },
  data: () => {
      return {
          username: '',
          password: '',
          contactNumber: '',
          email: '',
      }
  },
  methods: {
      onLogin: async function () {
          const payload = {
              username: this.username,
              password: this.password,
              email: this.email,
              contactNumber: this.contactNumber,
          }
          const apiUrl = 'http://localhost:5000/auth/register';
          const res = await fetch(apiUrl, {
              method: 'POST',
              body: JSON.stringify(payload),
              headers: {
                'Content-Type': 'application/json',
              },
          });
          if(!res.ok) {
              // network err
              const text = await res.text();
              console.error(`Fail to send login request: ERR: ${text}`);
              return;
          }
          const json = await res.json();
          const token = json.token;
          localStorage.setItem('JWT_TOKEN', token);
          router.push('/');
      },
      goToLogin: function() {
          router.push('/auth/login');
      }
  }
};

</script>


<template>

    <Paper>

        <h2>Register:</h2>
        Account: <input type="text" v-model="username" class="border-solid border-black border-b-2 outline-0" />
        <br>
        <br>
        Password:<input type="password" v-model="password" class="border-solid border-black border-b-2 outline-0" />
        <br />
        <br />
        ContactNumber: <input type="text" v-model="contactNumber" class="border-solid border-black border-b-2 outline-0" />
        <br />
        <br />
        EmailAddress: <input type="text" v-model="email" class="border-solid border-black border-b-2 outline-0" />
        <br />
        <br />
        <Button variant="success" @onClick="onLogin" >Register</Button>
        <Button variant="success" @onClick="goToLogin" >Go To Login</Button>
        <br><br>
		
    </Paper>
</template>