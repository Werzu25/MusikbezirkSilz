<script setup></script>

<template>
  <v-container fluid class="bg-black container rounded">
    <v-row class="footer-row" justify="center" align="center">
      <v-col class="bg-amber-accent-1 rounded" cols="auto">
        <a href="#">
          <v-icon>mdi-facebook</v-icon>
          Facebook
        </a>
      </v-col>
      <v-col cols="auto">
        <a href="#">
          <v-icon>mdi-email-outline</v-icon>
          Email
        </a>
      </v-col>
    </v-row>
  </v-container>
</template>

<style scoped>
.container {
  position: absolute;
  bottom: 0;
}
.footer-row v-col:hover {
  background: aqua;
}

a:link {
  color: white;
}
a:visited {
  color: white;
}

</style>
