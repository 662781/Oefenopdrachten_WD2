<template>
  <div>
    <!-- <table>
      <tr>
        <th>Name</th>
        <td v-for="stock in stocks" :key="stock.name">{{ stock.name }}</td>
      </tr>
      <tr>
        <th>Price</th>
        <td v-for="stock in stocks" :key="stock.name">{{ stock.price }}</td>
        <td :class="{ more: price > previousPrice, less: price < previousPrice,}"></td>
      </tr>
      <tr>
        <th>Prev. Price</th>
        <td v-for="stock in stocks" :key="stock.name">
          {{ stock.previousPrice }}
        </td>
      </tr>
      <tr>
        <th>Currency</th>
        <td v-for="stock in stocks" :key="stock.name">{{ stock.currency }}</td>
      </tr>
      <button @click="updateStocks()">Update</button>
    </table> -->
    <table>
      <thead>
        <th>Name</th>
        <th>Price</th>
        <th>Prev. Price</th>
      </thead>
      <tbody v-for="stock in stocks" :key="stock.name">
        <td>{{ stock.name }}</td>
        <td
          :class="{
            less: stock.price < stock.previousPrice,
            more: stock.price > stock.previousPrice,
          }"
        >
          {{ stock.currency }} {{ stock.price }}
        </td>
        <td>{{ stock.previousPrice }}</td>
      </tbody>
      <button @click="updateStocks()">Update</button>
    </table>
  </div>
</template>

<script>
export default {
  name: "StockList",

  data() {
    return {
      stocks: [
        { name: "BMW", price: 61.05, previousPrice: 0, currency: "€" },
        { name: "Caterpillar", price: 146.49, previousPrice: 0, currency: "$" },
        { name: "AMD", price: 76.5, previousPrice: 0, currency: "$" },
        { name: "Gazprom", price: 4.583, previousPrice: 0, currency: "$" },
      ],
      portfolio: [],
    };
  },
  methods: {
    updateStocks() {
      this.stocks.forEach((stock) => {
        stock.previousPrice = stock.price;
        stock.price += (Math.random() - 0.5) * 2;
        if (stock.price < 0) {
          stock.price = 0;
        }
      });
    },
  },
  mounted() {
    this.updateStocks();
  },
};
</script>

<style>
tr,
th,
td {
  padding: 10px;
}

.more {
  color: green;
}

.less {
  color: red;
}
</style>