<template>

<Header/>
<div class="container">
    <Balance :total_expense="total_expense"></Balance>
    <IncomeExpenses :income="income" :expense="expense"></IncomeExpenses>
    <TransactionList :expenses = "expenses"></TransactionList>
    <AddTransaction/>
</div>

</template>

<script setup>
import Header from './Components/Header.vue';
import Balance from './Components/Balance.vue';
import IncomeExpenses from './Components/IncomeExpenses.vue';
import TransactionList from './Components/TransactionList.vue';
import AddTransaction from './Components/AddTransaction.vue';


const props = defineProps({
  expenses: Object,
  total_expense: String,
  income: Number,
  expense : Number,
})
</script>
