<template>
  <div class="col-md-4 mt-4">
    <div class="card">
      <div class="card-body">
        <td>{{ name }}</td>
        <span
          :class="{
            less: price < prevPrice,
            more: price > prevPrice,
          }"
          >{{ currency }} {{ price.toFixed(2) }}</span
        >
        <input type="number" v-model="amount">
        <button class="button is-primary" @click="$emit('buy', id)">
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "StockItem",

  props: {
    name: String,
    price: Number,
    prevPrice: Number,
    currency: String,
  },
};
</script>

<style>
</style>