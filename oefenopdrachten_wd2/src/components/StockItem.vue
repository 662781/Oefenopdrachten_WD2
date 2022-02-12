<template>
  <div class="col-md-4 mt-4">
    <div class="card">
      <div class="card-body">
        <td>{{ name }}</td>
        <span

        class="price"
          :class="{
            less: price < prevPrice,
            more: price > prevPrice,
          }"
          >{{ currency }} {{ price.toFixed(2) }}</span>
        <input v-model.number="amount" type="number" min="1" value="1" class="amount-input">
        <button class="button is-primary" @click="$emit('buy', name, amount)">Buy Stock</button>
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
    amount: Number
  }
};
</script>

<style>
.amount-input{
  max-width: 10%;
}

.price{
  padding-right: 160px;
}
</style>