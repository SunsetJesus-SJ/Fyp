<script>
import Button from '../components/Button.vue';

export default {
  name: "HomePage",
  components: {
      Button,
  },
  methods: {
    goToAC() {
      this.$router.push("/account_information");
    },
    goToCP() {
      this.$router.push("/change_password");
    },
    goToNo() {
      this.$router.push("/notifications");
    },
    goToDA() {
      this.$router.push("/d_y_a");
    },
    goToAchie() {
      this.$router.push("/achievement");
    },
    goToLAN() {
      this.$router.push("/language");
    },
  },
};
</script>

<template>
  <div class="flex flex-col my-1 justify-around">
    <br />
    <h1 calss="text-slate-50">Welcome to the Member page!</h1>
    <br />
    <Button variant="success" className="mb-3" @onClick="goToAC">Account Information</Button>
    <Button variant="success" className="mb-3" @onClick="goToCP">Change Password</Button>
    <!-- <Button variant="success" className="mb-3" @onClick="goToNo">Notifications</Button> -->
    <br>
    <Button variant="success" className="mb-3" @onClick="goToDA">Deactivate your Account</Button>
    <Button variant="success" className="mb-3" @onClick="goToAchie">Achievement</Button>
    <!-- <Button variant="success" className="mb-3" @onClick="goToLAN">Language</Button> -->
  </div>
</template>