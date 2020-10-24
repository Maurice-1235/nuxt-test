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
          <th class="text-left"></th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="person in people" :key="person.id">
          <td>{{ person.id }}</td>
          <td>{{ person.firstname }}</td>
          <td>{{ person.lastname }}</td>
          <td>{{ person.birthdate }}</td>
          <td>{{ person.biodata }}</td>
          <td>{{ person.photo_url }}</td>
          <td><v-btn :to="'/person/' + person.id"><v-icon>mdi-open-in-new</v-icon></v-btn></td>
        </tr>
      </tbody>
    </template>
  </v-simple-table>
</template>

<script>
import axios from "axios";
export default {
  name: "PeopleList",
  data() {
    return {
      people: null,
    };
  },
  created() {
    axios
      .get("http://localhost/maurice-nuxt-test/listpeople.php")
      .then((response) => (this.people = response.data));
  },
  methods: {
    viewdetail(id) {
      alert(id);
    },
  },
};
</script>

<style lang="scss" scoped>
</style>
