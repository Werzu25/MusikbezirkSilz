<script setup>
import { ref } from 'vue'

let components = ref([])
let parser = new DOMParser()

function dragStart(event) {
  event.dataTransfer.dropEffect = 'copy'
  event.dataTransfer.effectAllowed = 'copy'
  event.dataTransfer.setData("", event.target.outerHTML)
  debugger
}

function dropEvent(event) {
  let data = event.dataTransfer.getData('text/html')
  components.value.push(data)
  debugger
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
        <v-img
          src="src/assets/placeholder.webp"
          draggable="true"
          @dragenter="$event.preventDefault()"
          @dragleave="$event.preventDefault()"
          @dragover="$event.preventDefault()"
          @dragstart="dragStart($event)"
          class="componentMenu h-100 w-100"
        ></v-img>
      </v-col>
      <v-divider :thickness="2" class="border-opacity-100 divider" vertical></v-divider>
      <v-col
        @dragenter="$event.preventDefault()"
        @dragleave="$event.preventDefault()"
        @dragover="$event.preventDefault()"
        @dragstart="$event.preventDefault()"
        @drop="dropEvent($event)"
      >
        <div class="componentList" v-for="items in components">
          {{parser.parseFromString(items,"text/html")}}
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
