<template>
  <div>
      <PeopleList> </PeopleList>
      <v-btn to="/person/new"><v-icon>mdi-account-plus</v-icon>Add</v-btn>
  </div>
</template>

<script>
import PeopleList from '~/components/PeopleList.vue'
export default {
  components: {
    PeopleList
  }
}
</script>

<style lang="css" scoped>
.v-btn{
  margin-top: 20px;  
}
</style>
