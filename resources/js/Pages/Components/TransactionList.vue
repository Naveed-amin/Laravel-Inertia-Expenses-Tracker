<template>
     <h3>History</h3>
      <ul id="list" class="list" v-for="expense in expenses" :key="expense.id">
        <li :class='expense.is_expense == 1 ? "minus" : "plus"'>
          {{ expense.name }} <span> ${{ expense.balance }}</span><button class="delete-btn">x</button>
        </li>
        <!-- <li class="plus">
          Paycheck <span>$800</span><button class="delete-btn">x</button>
        </li> -->
      </ul>
</template>

<script setup>

const props = defineProps({
  expenses: Object,
})

</script>
