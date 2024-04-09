<script setup>
import ASceneBuilderWrapper from '@/components/SceneBuilderWrapper.vue'
import AFooter from '@/components/MainFooter.vue'
</script>

<template>
  <main>
    <a-scene-builder-wrapper class="sb"></a-scene-builder-wrapper>
    <a-footer></a-footer>
  </main>
</template>

<style scoped>
.sb {
  width: 100%;
}
</style>
