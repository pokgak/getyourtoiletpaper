<template>
  <div class="row">
    <div class="col">
      <p>{{ item.name }}</p>
    </div>
    <div class="col-2">
      <input class="form-control" type="number" id="quantity" name="quantity" min="1" v-model="item.quantity"/>
    </div>
    <div class="col-1">
      <button type="button" class="btn btn-danger">
        <i class="fa fa-trash-o fa-md" title="Delete Item"></i>
      </button>
    </div>
    <div class="mb-3"></div>
  </div>
</template>

<script>
const baseApi = process.env.MIX_BASE_API;

export default {
  props: ["item"],
  data: function() {
    return {
        quantity: this.item.quantity,
    };
  }
};
</script>
