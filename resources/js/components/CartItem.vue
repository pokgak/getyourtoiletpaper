<template>
  <div class="row mb-3">
    <div class="col">
      <p class="card-text text-uppercase">{{ item.name }}</p>
    </div>
    <div class="col-2">
      <p class="card-text text-center">{{ quantity }}</p>
    </div>
    <div class="col-1">
      <button type="button" class="btn btn-danger">
        <i class="fa fa-trash-o fa-md" title="Delete Item"></i>
      </button>
    </div>
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
