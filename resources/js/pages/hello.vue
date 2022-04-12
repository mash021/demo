<template>
  <div>
    <div v-for="(message,index) in messages " :key="index">
      {{ message.text }}
    </div>

  </div>

</template>

<script>
export default {
  props: {
    messages: Array
  }
};
</script>