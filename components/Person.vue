<template>
  <v-simple-table dark>
    <template v-slot:default>
      <thead>
        <tr>
          <th class="text-left">ID</th>
          <th class="text-left">First Name</th>
          <th class="text-left">Last Name</th>
          <th class="text-left">Birthdate</th>
          <th class="text-left">Biodata</th>
          <th class="text-left">Photo URL</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{ person.id }}</td>
          <td>{{ person.firstname }}</td>
          <td>{{ person.lastname }}</td>
          <td>{{ person.birthdate }}</td>
          <td>{{ person.biodata }}</td>
          <td>{{ person.photo_url }}</td>
        </tr>
      </tbody>
    </template>
  </v-simple-table>
</template>

<script>
import axios from "axios";
export default {
  name: "Person",
  data() {
    return {
      person: null,
    };
  },
  created() {
    axios
      .get("http://localhost/maurice-nuxt-test/getpeople.php?id=1")
      .then((response) => {
        var peopleTemp = null;
        peopleTemp = response.data;
        this.person = peopleTemp[0];
      });
  },
};
</script>

<style lang="scss" scoped>
</style>
