<template>
  <div id="app">
    <h1 class="test">{{ message }} test</h1>
  </div>
</template>

<script>

export default {
  data () {
    return {
      // note: changing this line won't causes changes
      // with hot-reload because the reloaded component
      // preserves its current state and we are modifying
      // its initial state.
    }
  },
  props: ['message'],
  created() {
  }
}
</script>

<style scoped lang="scss">
body {
  font-family: Helvetica, sans-serif;
  .test {
    color: red;
  }
}
</style>
