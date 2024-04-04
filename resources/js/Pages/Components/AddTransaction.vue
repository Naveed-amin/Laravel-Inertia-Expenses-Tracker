<template>
    <h3>Add new transaction</h3>
    <form id="form" @submit.prevent="form.post('/expenses')">
        <div class="form-control">
            <label for="text">Text</label>
            <input type="text" id="text" v-model="form.name" placeholder="Enter text..." />
            <div v-if="form.errors.name">{{ form.errors.name }}</div>
        </div>
        <div class="checkbox-wrapper-3">
            <input type="checkbox"  v-model=form.is_expense  true-value=1 false-value=0 id="cbx-3" />
            <label for="cbx-3" class="toggle"><span></span></label>
        </div>
        <div class="form-control">
            <label for="amount">Amount <br />
                (On - expense, Off - income)</label>
            <input type="number" id="amount" v-model="form.balance" placeholder="Enter amount..." />
            <div v-if="form.errors.balance">{{ form.errors.balance }}</div>

        </div>
        <button class="btn" type="submit" :disabled="form.processing">Add transaction</button>
    </form>
</template>
<script setup>
import { useForm } from '@inertiajs/vue3'
import { ref } from 'vue'
const form = useForm({
    name: null,
    balance: null,
    is_expense : 0,
})
</script>

<style scoped>
.checkbox-wrapper-3 input[type="checkbox"] {
    visibility: hidden;
    display: none;
  }

  .checkbox-wrapper-3 .toggle {
    position: relative;
    display: block;
    width: 40px;
    height: 20px;
    cursor: pointer;
    -webkit-tap-highlight-color: transparent;
    transform: translate3d(0, 0, 0);
  }
  .checkbox-wrapper-3 .toggle:before {
    content: "";
    position: relative;
    top: 3px;
    left: 3px;
    width: 34px;
    height: 14px;
    display: block;
    background: #9A9999;
    border-radius: 8px;
    transition: background 0.2s ease;
  }
  .checkbox-wrapper-3 .toggle span {
    position: absolute;
    top: 0;
    left: 0;
    width: 20px;
    height: 20px;
    display: block;
    background: white;
    border-radius: 10px;
    box-shadow: 0 3px 8px rgba(154, 153, 153, 0.5);
    transition: all 0.2s ease;
  }
  .checkbox-wrapper-3 .toggle span:before {
    content: "";
    position: absolute;
    display: block;
    margin: -18px;
    width: 56px;
    height: 56px;
    background: rgba(79, 46, 220, 0.5);
    border-radius: 50%;
    transform: scale(0);
    opacity: 1;
    pointer-events: none;
  }

  .checkbox-wrapper-3 #cbx-3:checked + .toggle:before {
    background: #947ADA;
  }
  .checkbox-wrapper-3 #cbx-3:checked + .toggle span {
    background: #4F2EDC;
    transform: translateX(20px);
    transition: all 0.2s cubic-bezier(0.8, 0.4, 0.3, 1.25), background 0.15s ease;
    box-shadow: 0 3px 8px rgba(79, 46, 220, 0.2);
  }
  .checkbox-wrapper-3 #cbx-3:checked + .toggle span:before {
    transform: scale(1);
    opacity: 0;
    transition: all 0.4s ease;
  }

</style>
