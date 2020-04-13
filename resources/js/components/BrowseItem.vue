<template>
  <div class="card mb-2">
    <div class="card-body">
      <div class="row">
        <div class="col-xs-4">
          <img src="http://www.staples-3p.com/s7/is/image/Staples/m005185536_sc7?$std$" alt="..." />
        </div>
        <div class="col">
          <h3 class="card-title text-uppercase">{{ this.item.name }}</h3>
          <p class="card-text">{{ this.item.description }}</p>
          <div class="input-group">
            <input type="number" id="quantity" class="form-control" v-model="quantity" min="1" />
            <div class="input-group-append">
              <button
                type="button"
                class="btn btn-outline-secondary"
                v-on:click="addToCart"
              >Add to cart</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

  <script>
const baseApi = process.env.MIX_BASE_API;

export default {
  props: ["user", "item"],
  data: function() {
    return {
      quantity: "1"
    };
  },
  methods: {
    addToCart: function() {
      var cartItem = {
        user_id: this.user.id,
        item_id: this.item.id,
        quantity: this.quantity
      };
      axios.put(baseApi + "/cart", cartItem);
    }
  }
};
</script>
