<template>
<div class="col" v-if="!this.isDeleted">
  <div class="card mb-4">
    <!-- Display mode -->
    <div v-show="!editMode">
        <div class="card-header text-right">
        <button type="button" class="btn btn-primary" v-on:click="editItem">
          <i class="fa fa-pencil-square-o fa-lg" title="Edit Item"></i>
        </button>

        <button type="button" class="btn btn-danger" v-on:click="deleteItem">
          <i class="fa fa-trash-o fa-lg" title="Delete Item"></i>
        </button>
      </div>
      <div class="card-body">
        <h5 class="card-title text-uppercase">{{ item.name }}</h5>
        <p class="card-text">{{ item.description }}</p>
      </div>
    </div>

    <!-- Edit mode only -->
    <div v-show="editMode">
        <div class="card-header text-right">
        <button type="submit" class="btn btn-success" v-on:click="submit">
          <i class="fa fa-check fa-lg" title="Submit"></i>
        </button>
        <button type="reset" class="btn btn-danger" v-on:click="reset">
          <i class="fa fa-times-circle fa-lg" title="Reset"></i>
        </button>
      </div>
      <div class="card-body">
        <form>
          <input type="text" id="name" class="form-control card-title" v-model="item.name" />
          <textarea
            id="description"
            class="form-control card-text"
            v-model="item.description"
            rows="7"
          ></textarea>
        </form>
      </div>
    </div>

    <img
      src="http://www.staples-3p.com/s7/is/image/Staples/m005185536_sc7?$std$"
      class="card-img-bottom"
      alt="..."
    />
  </div>
</div>
</template>

<script>
const baseApiUrl = "http://127.0.0.1:8000/api";

export default {
  props: ["item"],
  data: function() {
    return {
      isDeleted: false,
      editMode: false,
      oldItem: {
        name: this.item.name,
        description: this.item.description
      }
    };
  },
  mounted() {
    console.log("Component mounted.");
  },
  methods: {
    print: function() {
      console.log(this.item.id);
    },
    editItem: function() {
      console.log("EDIT!" + this.item.id);
      this.oldItem = this.item;
      this.editMode = true;
    },
    deleteItem: function() {
      console.log("DELETE!" + this.item.id);
      // TODO: confirm popup
      axios.delete(baseApiUrl + "/item/" + this.item.id);
      this.isDeleted = true;
    },
    submit: function() {
      console.log("SUBMIT!" + this.item.id);
      axios.put(baseApiUrl + "/item", this.item);

      this.editMode = false;
    },
    reset: function() {
      console.log("RESET!" + this.item.id);
      this.item = this.oldItem;
      this.editMode = false;
    }
  }
};
</script>
