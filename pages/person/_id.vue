<template>
  <div>
    <Person :id="this.id"></Person>
    <v-btn to="/people"><v-icon>mdi-arrow-left</v-icon> Back</v-btn>
  </div>
</template>

<script>
import Person from "~/components/Person.vue";
export default {
  components: {
    Person,
  },
  data() {
    return {
      id: this.$route.params.id,
    };
  },
};
</script>

<style lang="css" scoped>
.v-btn {
  margin-top: 20px;
}
</style>
