<template>
  <v-simple-table dark v-if="is_data_fetched">
    <template v-slot:default>
      <tbody>
        <tr>
          <td>ID</td>
          <td>{{ person.id }}</td>
        </tr>
        <tr>
          <td>Firstname</td>
          <td>{{ person.firstname }}</td>
        </tr>
        <tr>
          <td>Lastname</td>
          <td>{{ person.lastname }}</td>
        </tr>
        <tr>
          <td>Birthdate</td>
          <td>{{ person.birthdate }}</td>
        </tr>
        <tr>
          <td>Biodata</td>
          <td>{{ person.biodata }}</td>
        </tr>
        <tr>
          <td>Photo URL</td>
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
  props: {
    id: String,
  },
  data() {
    return {
      person: null,
      is_data_fetched: false,
    };
  },
  created() {
    axios
      .get("http://localhost/maurice-nuxt-test/getpeople.php?id=" + this.id)
      .then((response) => {
        var peopleTemp = null;
        peopleTemp = response.data;
        this.person = peopleTemp[0];
        this.is_data_fetched = true;
      });
  },
};
</script>

<style lang="scss" scoped>
</style>
