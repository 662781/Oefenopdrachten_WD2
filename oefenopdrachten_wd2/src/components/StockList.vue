<template>
  <div>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <div>
      <h1>Today's Stock Market</h1>
      <p>&nbsp;</p>
      <div class="container">
        <div class="row">
          <!-- Individual stocks -->
          <stock-item
            v-for="stock in stocks"
            :key="stock.name"
            :name="stock.name"
            :currency="stock.currency"
            :price="stock.price"
            :prevPrice="stock.previousPrice"
          >
          </stock-item>
          <!-- End of individual stocks -->
        </div>
        <!-- <button @click="updateStocks()">Update</button> -->
      </div>
    </div>
  </div>
</template>

<script>
import StockItem from "./StockItem.vue";
export default {
  name: "StockList",

  components: {
    StockItem
  },

  data() {
    return {
      stocks: [
        { name: "BMW", price: 61.05, previousPrice: 0, currency: "€" },
        { name: "Caterpillar", price: 146.49, previousPrice: 0, currency: "$" },
        { name: "AMD", price: 76.5, previousPrice: 0, currency: "$" },
        { name: "Gazprom", price: 4.583, previousPrice: 0, currency: "$" },
      ]
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
    }
  },
  mounted() {
    setInterval(() => {
      this.updateStocks();
    }, 1000);
  }
};
</script>

<style>
.more {
  color: green;
}

.less {
  color: red;
}

button {
  width: 30%;
  height: 10%;
}
</style>