<template>
  <div class="card bg-gray mb-4">
    <div class="card-body" style="align-items: center" v-show="!this.isCreateMode">
      <!-- normal display -->
      <div class="card-text text-center" style="font-size: 3em">
        <a href="#" v-on:click="createNewMode" title="Add new item">
          Add item
          <br />
          <i class="fa fa-plus-square"></i>
        </a>
      </div>
    </div>

    <div v-show="this.isCreateMode">
      <div class="card-header text-right">
        <button type="submit" class="btn btn-success" v-on:click="createItem">
          <i class="fa fa-check fa-lg" title="Create item"></i>
        </button>
        <button type="reset" class="btn btn-danger" v-on:click="reset">
          <i class="fa fa-times-circle fa-lg" title="Cancel"></i>
        </button>
      </div>

      <div class="card-body">
        <input type="text" id="name" class="form-control card-title" v-model="item.name" placeholder="Name of item"/>
        <textarea
          id="description"
          class="form-control card-text"
          v-model="item.description"
          rows="7"
          placeholder="Description..."
        ></textarea>
      </div>
    </div>
  </div>
</template>

<script>
const baseApiUrl = process.env.API_BASE;

export default {
  mounted() {
    console.log("Component mounted.");
  },
  data: function () {
      return {
          isCreateMode: false,
          item: {'name': '', 'description': ''}
      }
  },
  methods: {
      createNewMode: function () {
          console.log("create new item")
          this.isCreateMode = true
      },
      createItem: function () {
        console.log("creating!")
        axios.post(baseApiUrl + "/item", this.item)
        this.isCreateMode = false
      },
      reset: function () {
        console.log("reset!")
        this.item = {'name': '', 'description': ''}
        this.isCreateMode = false
      }
  }
};
</script>
