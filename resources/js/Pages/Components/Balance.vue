<template>
    <h4>Your Balance</h4>
      <h1 id="balance">${{ total_expense }}</h1>
</template>

<script setup>
const props = defineProps({

  total_expense: String,
})

</script>
