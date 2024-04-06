<script setup>
import { ref } from 'vue'

let components = ref([])

function dragStart(event) {
  event.dataTransfer.dropEffect = 'copy'
  event.dataTransfer.effectAllowed = 'copy'
}

function dropEvent() {
  components.value.push(this.items)
}

/*
ToDo:
1. Fix code for drop event and fix the v-for in the componentList class
2. Add a way to dynamically add components to the componentMenu this can be done with a for loop an importing everything form the templates folder
3. Fix the divider

*/
</script>

<template>
  <v-container class="sb-container">
    <v-row>
      <v-col>
        <div draggable="true" @dragstart="dragStart($event, item)" class="componentMenu"></div>
      </v-col>
      <v-divider :thickness="2" class="border-opacity-100 divider" vertical></v-divider>
      <v-col @drop="dropEvent($event)">
        <div class="componentList" v-for="items in components" :key="items">
          {{ items }}
        </div>
      </v-col>
    </v-row>
  </v-container>
</template>

<style scoped>
.componentMenu {
  width: auto;
  min-height: 100px;
  background: aqua;
}

.divider {
  height: 100%;
}

.componentList {
  width: auto;
  min-height: 100px;
  border: solid 1px black;
}
</style>
